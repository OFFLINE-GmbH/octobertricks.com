<?php declare(strict_types=1);

namespace OFFLINE\Tricks\Models;

use Cms\Classes\Page;
use October\Rain\Database\Model;
use October\Rain\Database\Traits\Sluggable;
use October\Rain\Database\Traits\Validation;
use October\Rain\Parse\Markdown;
use October\Rain\Support\Facades\Html;
use RainLab\User\Models\User;
use Str;

class Trick extends Model
{
    use Sluggable;
    use Validation;

    /**
     * The table associated with this model.
     * @var string
     */
    public $table = 'offline_tricks_tricks';

    /**
     * The validation rules for the single attributes.
     * @var array
     */
    public $rules = [
        'title'              => 'required',
        'content'            => 'required',
        'published_at'       => 'nullable|date',
        'references.*.label' => 'sometimes|required',
        'references.*.url'   => 'sometimes|required|url',
    ];

    /**
     * Automatically generate unique URL names for the passed attributes.
     * @var array
     */
    public $slugs = [
        'slug' => 'title',
    ];

    /**
     * The attributes that should be cast.
     * @var array
     */
    public $casts = [
        'revision'   => 'integer',
        'votes_up'   => 'integer',
        'votes_down' => 'integer',
        'votes'      => 'integer',
        'pageviews'  => 'integer',
    ];

    /**
     * The attributes that should be cast as dates.
     * @var array
     */
    public $dates = [
        'published_at'
    ];

    /**
     * Attribute names that are json encoded and decoded from the database.
     * @var array 
     */
    public $jsonable = [
        'references'
    ];

    /**
     * The attachMany relationships of this model.
     * @var array
     */
    public $attachMany = [
        'content_images'  => \System\Models\File::class
    ];

    /**
     * The belongsTo relationships of this model.
     * @var array
     */
    public $belongsTo = [
        'author' => [User::class, 'key' => 'user_id'],
    ];

    /**
     * The belongsToMany relationships of this model.
     * @var array
     */
    public $belongsToMany = [
        'topics' => [Topic::class, 'table' => 'offline_tricks_trick_topic'],
        'tags'   => [Tag::class, 'table' => 'offline_tricks_trick_tag'],
    ];

    /**
     * The hasMany relationships of this model.
     * @var array
     */
    public $hasMany = [
        'comments'  => Comment::class,
        'proposals' => Proposal::class,
    ];

    /**
     * Get Trick of the day.
     * @return Trick|null
     */
    static public function ofTheDay()
    {
        $entries      = self::published()->count();
        $dayOfTheYear = (int)date('z');

        return self::published()->skip($dayOfTheYear % $entries)->orderBy('created_at', 'asc')->first();
    }

    /**
     * Hook before model is created.
     * @return void
     */
    public function beforeCreate()
    {
        $this->votes     = $this->votes_up = $this->votes_down = 0;
        $this->pageviews = 0;
    }

    /**
     * Hook before model is saved.
     * @return void
     */
    public function beforeSave()
    {
        $this->revision++;
    }

    /**
     * Published query scope.
     * @return void
     */
    public function scopePublished($query)
    {
        return $query->where(function ($q) {
            $q->whereNotNull('published_at')->where('published_at', '<=', now());
        });
    }

    /**
     * Get is_published attribute.
     * @return boolean
     */
    public function getIsPublishedAttribute()
    {
        return $this->published_at !== null && $this->published_at->lt(now());
    }

    /**
     * Get excerpt attribute.
     * @return string
     */
    public function getExcerptAttribute()
    {
        return Str::words(Html::strip(
            (new Markdown())->parse($this->content)
        ), 40);
    }

    /**
     * Get excerpt_without_code attribute.
     * @return string
     */
    public function getExcerptWithoutCodeAttribute()
    {
        $noCode = preg_replace('/```.*(\n[^```]+)+```/', '', $this->content);

        return Str::words(Html::strip(
            (new Markdown())->parse($noCode)
        ), 40);
    }

    /**
     * Get clean_content attribute.
     * @return string
     */
    public function getCleanContentAttribute()
    {
        $content = (new Markdown())->parse($this->content);

        return strip_tags(
            Html::clean($content),
            '<img><p><a><code><pre><i><b><strong><h1><h2><h3><h4><h5><h6><blockquote><em><ul><li><ol><table><tr><td><th><tbody>'
        );
    }

    /**
     * Resolve menu item.
     * @param mixed $item
     * @param mixed $url
     * @param mixed $theme
     * @return array
     */
    public static function resolveMenuItem($item, $url, $theme)
    {
        $pageName = 'trick';
        $cmsPage  = Page::loadCached($theme, $pageName);
        $items    = self
            ::published()
            ->get()
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
