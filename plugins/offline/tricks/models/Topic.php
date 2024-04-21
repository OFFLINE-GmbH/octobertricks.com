<?php declare(strict_types=1);

namespace OFFLINE\Tricks\Models;

use Cms\Classes\Page;
use October\Rain\Database\Model;
use October\Rain\Database\Traits\Sluggable;
use October\Rain\Database\Traits\Sortable;
use October\Rain\Database\Traits\Validation;

class Topic extends Model
{
    use Sluggable;
    use Sortable;
    use Validation;

    /**
     * The table associated with this model.
     * @var string
     */
    public $table = 'offline_tricks_topics';

    /**
     * The validation rules for the single attributes.
     * @var array
     */
    public $rules = [
        'name' => 'required|unique:offline_tricks_topics,name',
    ];

    /**
     * Automatically generate unique URL names for the passed attributes.
     * @var array
     */
    public $slugs = [
        'slug' => 'name',
    ];

    /**
     * The hasMany relationships of this model.
     * @var array
     */
    public $hasMany = [
        'tricks' => Trick::class,
    ];

    /**
     * Resolve menu item.
     * @param mixed $item
     * @param mixed $url
     * @param mixed $theme
     * @return array
     */
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
