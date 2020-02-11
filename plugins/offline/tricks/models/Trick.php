<?php namespace OFFLINE\Tricks\Models;

use Cache;
use Cms\Classes\Page;
use Model;
use October\Rain\Database\Traits\Sluggable;
use October\Rain\Database\Traits\Validation;
use October\Rain\Parse\Markdown;
use October\Rain\Support\Facades\Html;
use RainLab\User\Models\User;
use Str;


class Trick extends Model
{
    use Validation;
    use Sluggable;

    public $table = 'offline_tricks_tricks';
    public $slugs = [
        'slug' => 'title',
    ];
    public $rules = [
        'title'              => 'required',
        'content'            => 'required',
        'published_at'       => 'nullable|date',
        'references.*.label' => 'sometimes|required',
        'references.*.url'   => 'sometimes|required|url',
    ];
    public $casts = [
        'revision'   => 'integer',
        'votes_up'   => 'integer',
        'votes_down' => 'integer',
        'votes'      => 'integer',
        'pageviews'  => 'integer',
    ];
    public $dates = ['published_at'];
    public $jsonable = ['references'];
    public $hasMany = [
        'comments'  => Comment::class,
        'proposals' => Proposal::class,
    ];
    public $belongsTo = [
        'author' => [User::class, 'key' => 'user_id'],
    ];
    public $belongsToMany = [
        'topics' => [Topic::class, 'table' => 'offline_tricks_trick_topic'],
        'tags'   => [Tag::class, 'table' => 'offline_tricks_trick_tag'],
    ];

    public static function ofTheDay()
    {
        $entries      = self::published()->count();
        $dayOfTheYear = (int)date('z');

        return self::published()->skip($dayOfTheYear % $entries)->orderBy('created_at', 'asc')->first();
    }

    public function beforeCreate()
    {
        $this->votes     = $this->votes_up = $this->votes_down = 0;
        $this->pageviews = 0;
    }

    public function beforeSave()
    {
        $this->revision++;
    }

    public function scopePublished($query)
    {
        return $query->where(function ($q) {
            $q->whereNotNull('published_at')->where('published_at', '<=', now());
        });
    }

    public function getIsPublishedAttribute()
    {
        return $this->published_at !== null && $this->published_at->lt(now());
    }

    public function getExcerptAttribute()
    {
        return Str::words(Html::strip(
            (new Markdown())->parse($this->content)
        ), 40);
    }

    public function getExcerptWithoutCodeAttribute()
    {
        $noCode = preg_replace('/```.*(\n[^```]+)+```/', '', $this->content);

        return Str::words(Html::strip(
            (new Markdown())->parse($noCode)
        ), 40);
    }

    public function getCleanContentAttribute()
    {
        $content = (new Markdown())->parse($this->content);

        return strip_tags(
            Html::clean($content),
            '<p><a><code><pre><i><b><strong><h1><h2><h3><h4><h5><h6><blockquote><em><ul><li><ol><table><tr><td><th><tbody>'
        );
    }

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
