<?php namespace OFFLINE\Tricks\Models;

use Cms\Classes\Page;
use Model;
use October\Rain\Database\Traits\Sluggable;
use October\Rain\Database\Traits\Sortable;
use October\Rain\Database\Traits\Validation;

class Topic extends Model
{
    use Validation;
    use Sortable;
    use Sluggable;

    public $table = 'offline_tricks_topics';
    public $slugs = [
        'slug' => 'name',
    ];
    public $rules = [
        'name' => 'required|unique:offline_tricks_topics,name',
    ];
    public $hasMany = [
        'tricks' => Trick::class,
    ];

    public static function resolveMenuItem($item, $url, $theme)
    {
        $pageName = 'topic';
        $cmsPage  = Page::loadCached($theme, $pageName);
        $items    = self
            ::get()
            ->map(function (self $item) use ($cmsPage, $url, $pageName) {
                $pageUrl = $cmsPage->url($pageName, ['slug' => $item->slug]);

                return [
                    'title'    => $item->name,
                    'url'      => $pageUrl,
                    'mtime'    => $item->updated_at,
                    'isActive' => $pageUrl === $url,
                ];
            })
            ->toArray();

        return [
            'items' => $items,
        ];
    }
}
