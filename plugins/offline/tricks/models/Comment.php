<?php namespace OFFLINE\Tricks\Models;

use Model;
use October\Rain\Database\Traits\SimpleTree;
use October\Rain\Database\Traits\Validation;
use October\Rain\Parse\Markdown;
use October\Rain\Support\Facades\Html;
use RainLab\User\Models\User;

class Comment extends Model
{
    use Validation;
    use SimpleTree;

    public $table = 'offline_tricks_comments';

    public $rules = [
        'trick_id'  => 'required|exists:offline_tricks_tricks,id',
        'user_id'   => 'required|exists:users,id',
        'parent_id' => 'nullable|exists:offline_tricks_comments,id',
        'content'   => 'required|min:50|max:2500',
        'ip_hash'   => 'required',
    ];
    public $casts = [
        'votes_up'   => 'integer',
        'votes_down' => 'integer',
        'votes'      => 'integer',
    ];
    public $belongsTo = [
        'trick' => Trick::class,
        'user'  => User::class,
    ];

    public function beforeValidate()
    {
        $this->ip_hash = hash('sha256', request()->ip());
    }

    public function beforeCreate()
    {
        $this->votes = $this->votes_up = $this->votes_down = 0;
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
