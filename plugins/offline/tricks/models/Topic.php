<?php namespace OFFLINE\Tricks\Models;

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
}
