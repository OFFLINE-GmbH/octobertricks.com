<?php declare(strict_types=1);

namespace OFFLINE\Tricks\Models;

use Cms\Classes\Page;
use October\Rain\Database\Model;
use October\Rain\Database\Traits\Sluggable;
use October\Rain\Database\Traits\Validation;

class Tag extends Model
{
    use Sluggable;
    use Validation;

    /**
     * The table associated with this model.
     * @var string
     */
    public $table = 'offline_tricks_tags';

    /**
     * The validation rules for the single attributes.
     * @var array
     */
    public $rules = [
        'name' => 'required|unique:offline_tricks_tags,name',
    ];
    
    /**
     * The attributes that are mass assignable.
     * @var array<string>
     */
    public $fillable = [
        'name'
    ];

    /**
     * Automatically generate unique URL names for the passed attributes.
     * @var array
     */
    public $slugs = [
        'slug' => 'name',
    ];

    /**
     * The hasManyThrough relationships of this model.
     * @var array
     */
    public $hasManyThrough = [
        'tricks' => [
            Trick::class,
            'key'        => 'tag_id',
            'through'    => TrickTag::class,
            'throughKey' => 'id',
            'otherKey'   => 'id'
        ],
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
