<?php declare(strict_types=1);

namespace OFFLINE\Tricks\Models;

use October\Rain\Database\Model;
use October\Rain\Database\Traits\SimpleTree;
use October\Rain\Database\Traits\Validation;
use October\Rain\Parse\Markdown;
use October\Rain\Support\Facades\Html;
use RainLab\User\Models\User;

class Comment extends Model
{
    use SimpleTree;
    use Validation;

    /**
     * The table associated with this model.
     * @var string
     */
    public $table = 'offline_tricks_comments';

    /**
     * The validation rules for the single attributes.
     * @var array
     */
    public $rules = [
        'trick_id'  => 'required|exists:offline_tricks_tricks,id',
        'user_id'   => 'required|exists:users,id',
        'parent_id' => 'nullable|exists:offline_tricks_comments,id',
        'content'   => 'required|min:50|max:2500',
        'ip_hash'   => 'required',
    ];
    
    /**
     * The attributes that should be cast.
     * @var array
     */
    public $casts = [
        'votes_up'   => 'integer',
        'votes_down' => 'integer',
        'votes'      => 'integer',
    ];
    
    /**
     * The belongsTo relationships of this model.
     * @var array
     */
    public $belongsTo = [
        'trick' => Trick::class,
        'user'  => User::class,
    ];

    /**
     * Hook before model is validated.
     * @return void
     */
    public function beforeValidate()
    {
        $this->ip_hash = hash('sha256', request()->ip());
    }

    /**
     * Hook before model is created.
     * @return void
     */
    public function beforeCreate()
    {
        $this->votes = $this->votes_up = $this->votes_down = 0;
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
            '<p><a><code><pre><i><b><strong><h1><h2><h3><h4><h5><h6><blockquote><em>'
        );
    }

}
