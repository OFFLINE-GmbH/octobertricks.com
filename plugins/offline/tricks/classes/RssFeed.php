<?php

namespace OFFLINE\Tricks\Classes;


use Bhaktaraz\RSSGenerator\Channel;
use Bhaktaraz\RSSGenerator\Feed;
use Bhaktaraz\RSSGenerator\Item;
use Cms\Classes\Controller;
use Illuminate\Support\Collection;
use OFFLINE\Tricks\Models\Trick;

class RssFeed
{
    /**
     * @var Feed
     */
    protected $feed;
    /**
     * @var Controller
     */
    protected $controller;

    public function __construct()
    {
        $this->feed       = new Feed();
        $this->controller = Controller::getController() ?? new Controller();
    }

    public function response()
    {
        return response($this->feed, 200, [
            'Content-Type' => 'application/xml',
        ]);
    }

    public function addChannel(string $title, string $description, string $url, Collection $models)
    {
        $channel = new Channel();
        $channel
            ->title($title)
            ->description($description)
            ->url($url)
            ->appendTo($this->feed);

        $models->each(function (Trick $trick) use ($channel) {
            $item = new Item();
            $item
                ->title($trick->title)
                ->description($trick->excerpt_without_code)
                ->url($this->controller->pageUrl('trick', ['slug' => $trick->slug]))
                ->content($trick->clean_content)
                ->appendTo($channel);
        });
    }
}