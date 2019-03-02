<?php namespace OFFLINE\Tricks\Models;

use Cms\Classes\Page;
use Model;
use October\Rain\Database\Traits\Sluggable;
use October\Rain\Database\Traits\Validation;

class Tag extends Model
{
    use Validation;
    use Sluggable;

    public $table = 'offline_tricks_tags';
    public $slugs = [
        'slug' => 'name',
    ];
    public $rules = [
        'name' => 'required|unique:offline_tricks_tags,name',
    ];
    public $fillable = ['name'];
    public $hasMany = [
        'tricks' => Trick::class,
    ];

    public static function resolveMenuItem($item, $url, $theme)
    {
        $pageName = 'tag';
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
