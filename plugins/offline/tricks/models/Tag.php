<?php namespace OFFLINE\Tricks\Models;

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
}
