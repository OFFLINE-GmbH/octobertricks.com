<?php namespace OFFLINE\Tricks\Components;

use Cms\Classes\ComponentBase;
use OFFLINE\Tricks\Models\Topic;

class TopicList extends ComponentBase
{
    public $items;

    public function componentDetails()
    {
        return [
            'name'        => 'Topic list',
            'description' => 'List all available topics',
        ];
    }

    public function defineProperties()
    {
        return [
        ];
    }

    public function onRun()
    {
        $this->items = $this->page['topics'] = Topic::orderBy('sort_order')->get();
    }
}
