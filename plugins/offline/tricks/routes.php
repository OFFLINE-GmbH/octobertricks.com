<?php

use OFFLINE\Tricks\Classes\RssFeed;
use OFFLINE\Tricks\Models\Trick;

Route::get('/rss', function () {
    $feed = new RssFeed();
    $feed->addChannel(
        'October Tricks Latest',
        'Latest Tricks from octobertricks.com',
        url('/'),
        Trick::published()->latest()->take(50)->remember(60)->get()
    );
    $feed->addChannel(
        'October Tricks Popular',
        'Popular Tricks from octobertricks.com',
        url('/'),
        Trick::published()->orderBy('votes', 'DESC')->take(50)->remember(60)->get()
    );
    $feed->addChannel(
        'October Trick of the day',
        'octobertrickscom Trick of the day',
        url('/'),
        collect([Trick::ofTheDay()])
    );

    return $feed->response();
});