<?php namespace OFFLINE\Tricks\Components;

use Cms\Classes\ComponentBase;
use DB;
use October\Rain\Exception\ValidationException;
use October\Rain\Support\Facades\Flash;
use OFFLINE\Tricks\Models\Proposal;
use OFFLINE\Tricks\Models\Tag;
use OFFLINE\Tricks\Models\Topic;
use OFFLINE\Tricks\Models\Trick;
use RainLab\User\Facades\Auth;
use Validator;

class TrickForm extends ComponentBase
{
    public $topics;
    public $tagChoices;
    public $trick;
    public $isProposal = false;

    public function componentDetails()
    {
        return [
            'name'        => 'Trick form',
            'description' => 'Create and edit tricks',
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'type'  => 'string',
                'title' => 'Trick slug (for edits)',
            ],
        ];
    }

    public function init()
    {
        $this->topics     = Topic::orderBy('sort_order')->get();
        $this->tagChoices = json_encode(Tag::get(['name'])->map(function ($tag) {
            return ['value' => $tag->name, 'label' => $tag->name];
        })->toArray());

        if ($slug = $this->property('slug')) {
            $this->trick = Trick::where('slug', $slug)->first();

            if ( ! $this->trick) {
                return $this->controller->run('404');
            }

            $this->isProposal = $this->trick->user_id !== optional(Auth::getUser())->id;
        }
    }

    public function onSubmit()
    {
        $data = post(null, []);
        $user = Auth::getUser();
        if ( ! $user && ! $this->isProposal) {
            throw new ValidationException(['title' => 'You need to be signed in.']);
        }

        $v = Validator::make($data, [
            'title'   => 'required|min:20',
            'content' => 'required|min:50',
            'topics'  => 'required|array|min:1|max:4',
            'tags'    => 'required|array|min:1|max:8',
        ], [
            'topics.required' => 'Please select at least one topic.',
            'tags.required'   => 'Please add at least one tag.',
        ]);

        if ($v->fails()) {
            throw new ValidationException($v);
        }

        $existing = Tag::whereIn('name', $data['tags'])->get(['id', 'name'])->pluck('id', 'name');
        $tags     = collect($data['tags'])->map(function ($tag) use ($existing) {
            if ($existing->has($tag)) {
                return $existing[$tag];
            }

            return Tag::create(['name' => $tag])->id;
        });

        DB::transaction(function () use ($data, $tags, $user) {
            $trick = $this->trick ?? new Trick();
            if ($this->isProposal) {
                $trick = new Proposal();
                $trick->trick_id = $this->trick->id;
            }
            $trick->title   = $data['title'];
            $trick->content = $data['content'];
            $trick->user_id = optional($user)->id;

            $trick->save();

            $trick->tags()->attach($tags);
            $trick->topics()->attach($data['topics']);
        });

        if ($this->trick && !$this->isProposal) {
            Flash::success('Saved changes');
            $accountTricks = $this->controller->pageUrl('account-tricks');

            return redirect()->to($accountTricks);
        }

        return [
            '#form' => $this->renderPartial($this->alias . '::okay'),
        ];
    }
}
