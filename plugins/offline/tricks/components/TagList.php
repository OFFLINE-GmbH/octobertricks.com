<?php namespace OFFLINE\Tricks\Components;

use Cms\Classes\ComponentBase;
use October\Rain\Database\Builder;
use OFFLINE\Tricks\Models\Tag;

class TagList extends ComponentBase
{
    public $items;

    public function componentDetails()
    {
        return [
            'name'        => 'Tag list',
            'description' => 'List all available tags',
        ];
    }

    public function defineProperties()
    {
        return [
        ];
    }

    public function onRun()
    {
        $this->items = $this->page['tags'] = Tag::whereHas('tricks', function (Builder $query) {
            $query->whereNotNull('published_at')->where('published_at', '<=', now());
        })->orderBy('name')->get();
    }
}
