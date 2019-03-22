<?php namespace OFFLINE\Tricks\Components;

use Cms\Classes\ComponentBase;
use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Carbon;
use October\Rain\Exception\ValidationException;
use October\Rain\Support\Facades\Flash;
use OFFLINE\Tricks\Classes\Voter;
use OFFLINE\Tricks\Models\Comment;
use OFFLINE\Tricks\Models\Topic;
use OFFLINE\Tricks\Models\Trick;
use RainLab\User\Facades\Auth;

class TrickDetail extends ComponentBase
{
    public $trick;
    public $comments;
    public $commentCount;
    public $topics;
    public $userVote;
    public $ipHash;
    public $commentVotes;

    public function componentDetails()
    {
        return [
            'name'        => 'Trick detail',
            'description' => 'Show all details of a trick',
        ];
    }

    public function defineProperties()
    {
        return [
            'slug'             => [
                'type'  => 'string',
                'title' => 'Slug of the current trick',
            ],
            'trick_of_the_day' => [
                'type'    => 'checkbox',
                'title'   => 'Trick of the day',
                'default' => 0,
            ],
        ];
    }

    public function init()
    {
        $this->trick = $this->page['trick'] = Trick
            ::published()
            ->with(['tags', 'comments', 'topics', 'author'])
            ->when($this->property('trick_of_the_day'), function ($q) {
                $entries      = Trick::published()->count();
                $dayOfTheYear = (int)date('z');
                $q->skip($dayOfTheYear % $entries)->orderBy('created_at', 'asc');
            }, function ($q) {
                $q->whereSlug($this->property('slug'));
            })
            ->first();

        if ( ! $this->trick) {
            return;
        }

        $this->comments     = $this->getComments();
        $this->commentVotes = $this->getCommentVotes();

        $this->ipHash   = hash('sha256', request()->ip());
        $this->userVote = DB::table('offline_tricks_trick_vote')->where([
            'trick_id' => $this->trick->id,
            'user_id'  => optional(Auth::getUser())->id,
            'ip_hash'  => $this->ipHash,
        ])->first();
    }

    public function onRun()
    {
        if ( ! $this->trick) {
            return ! $this->property('trick_of_the_day') ? $this->controller->run('404') : null;
        }

        if ( ! $this->property('trick_of_the_day')) {
            $this->trick->increment('pageviews');

            $this->topics = Topic::orderBy('sort_order')->get();

            $this->page->title            = $this->trick->title;
            $this->page->meta_description = $this->trick->excerpt_without_code;
        }

        $this->page['active'] = $this->trick->topics->first()->id;
    }

    public function onComment()
    {
        $user = Auth::getUser();
        if ( ! $user) {
            throw new ValidationException(['content' => 'You need to be signed in to comment.']);
        }

        // Honeypot
        if (post('_hp')) {
            return;
        }

        $comment = new Comment;
        $parent  = input('parent_id') ?: null;

        $id = post('id');
        if ($id) {
            $comment = Comment::where('user_id', $user->id)->find($id);
            $parent  = $comment->parent_id; // Parent should not be editable
            if ( ! $comment) {
                throw new ValidationException(['content' => 'Comment not found']);
            }
        } else {
            $this->guardCommentRateLimit();
        }

        $comment->user_id   = $user->id;
        $comment->trick_id  = $this->trick->id;
        $comment->content   = post('content', '');
        $comment->parent_id = $parent;
        $comment->save();

        $comments = $this->getComments($id ? 'votes' : 'created_at');

        Flash::success('Comment saved');

        return [
            '.comments-tree'     => $this->renderPartial($this->alias . '::comments', ['comments' => $comments]),
            '.discussions__meta' => $this->renderPartial($this->alias . '::meta'),
            '.comment-form'      => '',
        ];
    }

    public function onDeleteComment()
    {
        $id   = post('id');
        $user = Auth::getUser();
        if ( ! $user) {
            throw new ValidationException(['content' => 'You need to be signed in.']);
        }
        $comment = Comment::where('user_id', $user->id)->find($id);
        if ( ! $comment) {
            throw new ValidationException(['content' => 'Comment not found']);
        }

        $comment->delete();

        Flash::success('Comment deleted');

        $comments = $this->getComments();

        return [
            '.comments-tree'     => $this->renderPartial($this->alias . '::comments', ['comments' => $comments]),
            '.discussions__meta' => $this->renderPartial($this->alias . '::meta'),
        ];
    }

    public function onReplyComment()
    {
        return [
            '.comment__reply--id-' . post('id') => $this->renderPartial($this->alias . '::comment-form', [
                'parent' => post('id'),
            ]),
        ];
    }

    public function onEditComment()
    {
        $id   = post('id');
        $user = Auth::getUser();
        if ( ! $user) {
            throw new ValidationException(['content' => 'You need to be signed in.']);
        }

        $comment = Comment::where('user_id', $user->id)->find($id);
        if ( ! $comment) {
            throw new ValidationException(['content' => 'Comment not found']);
        }

        return [
            '.comment__reply--id-' . post('id') => $this->renderPartial($this->alias . '::comment-form', [
                'id'      => $comment->id,
                'content' => $comment->content,
            ]),
        ];
    }

    public function onVoteTrick()
    {
        $isUp = (bool)post('up', true);
        $id   = post('id');

        return (new Voter(Voter::SUBJECT_TRICK, $this->userVote))->handle($isUp, $id);
    }

    public function onVoteComment()
    {
        $isUp = (bool)post('up', true);
        $id   = post('id');

        $userVote = DB::table('offline_tricks_comment_vote')->where([
            'comment_id' => $id,
            'user_id'    => optional(Auth::getUser())->id,
            'ip_hash'    => $this->ipHash,
        ])->first();

        return (new Voter(Voter::SUBJECT_COMMENT, $userVote))->handle($isUp, $id);
    }


    protected function getComments($order = 'votes')
    {
        $this->commentCount = Comment::where('trick_id', $this->trick->id)->count();
        $comments           = Comment::with('children')
                                     ->where('trick_id', $this->trick->id)
                                     ->orderByDesc($order)
                                     ->getNested();

        $page    = input('page');
        $perPage = 10;

        $paginator = new LengthAwarePaginator(
            $comments->forPage($page, $perPage),
            $comments->count(),
            $perPage,
            $page
        );

        $paginator->appends(request()->all());

        $pageUrl = $this->controller->pageUrl(
            $this->page->fileName,
            ['slug' => $this->param('slug')]
        );

        return $paginator->setPath($pageUrl)->fragment('comments');
    }

    protected function getCommentVotes()
    {
        $user = Auth::getUser();
        if ( ! $user) {
            return [];
        }

        return DB
            ::table('offline_tricks_comment_vote')
            ->leftJoin('offline_tricks_comments', 'offline_tricks_comments.id', '=',
                'offline_tricks_comment_vote.comment_id')
            ->where('offline_tricks_comments.trick_id', $this->trick->id)
            ->where('offline_tricks_comment_vote.user_id', $user->id)
            ->get(['offline_tricks_comments.id', 'value'])
            ->mapWithKeys(function ($vote) {
                return [
                    $vote->id => $vote->value === 1 ? 'up' : 'down',
                ];
            });
    }

    protected function guardCommentRateLimit()
    {
        $commentsCount30sec = Comment
            ::where('created_at', '>=', Carbon::now()->subSeconds(30))
            ->where('ip_hash', $this->ipHash)
            ->count();

        $commentsCount10Min = Comment
            ::where('created_at', '>=', Carbon::now()->subMinutes(10))
            ->where('ip_hash', $this->ipHash)
            ->count();

        if ($commentsCount30sec >= 1 || $commentsCount10Min >= 10) {
            throw new ValidationException([
                'content' => 'You are commenting too much! Slow down!',
            ]);
        }
    }
}
