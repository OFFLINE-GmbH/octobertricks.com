<?php namespace OFFLINE\Tricks\Components;

use Cms\Classes\ComponentBase;
use OFFLINE\Tricks\Models\Tag;
use OFFLINE\Tricks\Models\Topic;
use OFFLINE\Tricks\Models\Trick;
use RainLab\User\Facades\Auth;

class TrickList extends ComponentBase
{
    public $tricks;
    public $topic;
    public $tag;
    public $user;
    public $publishedOnly = true;
    public $query;

    public function componentDetails()
    {
        return [
            'name'        => 'Trick list',
            'description' => 'Lists tricks',
        ];
    }

    public function defineProperties()
    {
        return [
            'order'       => [
                'title'   => 'Order by column',
                'type'    => 'string',
                'default' => 'created_at',
            ],
            'limit'       => [
                'title'   => 'Entries count',
                'type'    => 'string',
                'default' => 5,
            ],
            'topic'       => [
                'title'   => 'Topic',
                'type'    => 'string',
                'default' => '',
            ],
            'tag'         => [
                'title'   => 'Tag',
                'type'    => 'string',
                'default' => '',
            ],
            'user'        => [
                'title'   => 'Filter by current user',
                'type'    => 'checkbox',
                'default' => '',
            ],
            'unpublished' => [
                'title'   => 'Show unpublished',
                'type'    => 'checkbox',
                'default' => 0,
            ],
        ];
    }

    public function onRun()
    {
        if ($this->property('topic')) {
            $this->topic = Topic::where('slug', $this->property('topic'))->first();
            if ( ! $this->topic) {
                return $this->controller->run('404');
            }
        }
        if ($this->property('tag')) {
            $this->tag = Tag::where('slug', $this->property('tag'))->first();
            if ( ! $this->tag) {
                return $this->controller->run('404');
            }
        }
        if ($this->property('user')) {
            $this->user = Auth::getUser();
        }
        if ($this->property('unpublished')) {
            $this->publishedOnly = false;
        }

        $this->tricks = Trick
            ::with(['tags', 'comments', 'topics', 'author'])
            ->when($this->publishedOnly, function ($q) {
                $q->published();
            })
            ->when($this->topic, function ($q) {
                $this->page->title            = $this->topic->name;
                $this->page->meta_description = 'October CMS tricks on the topic ' . $this->topic->name;
                $q->whereHas('topics', function ($q) {
                    $q->where('offline_tricks_topics.id', $this->topic->id);
                });
            })
            ->when($this->tag, function ($q) {
                $this->page->title            = $this->tag->name;
                $this->page->meta_description = 'October CMS tricks with the tag ' . $this->tag->name;
                $q->whereHas('tags', function ($q) {
                    $q->where('offline_tricks_tags.id', $this->tag->id);
                });
            })
            ->when($this->user, function ($q) {
                $q->where('user_id', $this->user->id);
            })
            ->when($this->query, function ($q) {
                $this->page->title = 'Search results for ' . $this->query;
                $q->where(function ($q) {
                    $q->where('title', 'like', "%{$this->query}%")
                      ->orWhere('content', 'like', "%{$this->query}%")
                      ->orWhere('references', 'like', "%{$this->query}%");
                })->orWhereHas('topics', function ($q) {
                    $q->where('name', 'like', "%{$this->query}%");
                })->orWhereHas('tags', function ($q) {
                    $q->where('name', 'like', "%{$this->query}%");
                });
            })
            ->orderByDesc($this->property('order'))
            ->paginate($this->property('limit'));
    }

    public function setQuery($query)
    {
        $this->query = $query;
    }
}
