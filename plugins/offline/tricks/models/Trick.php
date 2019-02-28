<?php namespace OFFLINE\Tricks\Models;

use Model;
use October\Rain\Database\Traits\Sluggable;
use October\Rain\Database\Traits\Validation;
use RainLab\User\Models\User;
use Str;
use October\Rain\Support\Facades\Html;
use October\Rain\Parse\Markdown;


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
        'references.*.label' => 'required',
        'references.*.url'   => 'required|url',
    ];
    public $cats = [
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

    public function getCleanContentAttribute()
    {
        $content = (new Markdown())->parse($this->content);

        return strip_tags(
            Html::clean($content),
            '<p><a><code><pre><i><b><strong><h1><h2><h3><h4><h5><h6><blockquote><em>'
        );
    }
}
