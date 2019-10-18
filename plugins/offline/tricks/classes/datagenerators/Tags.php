<?php namespace OFFLINE\Tricks\Classes\DataGenerators;

use Faker\Generator;
use October\Rain\Database\Model;
use OFFLINE\Tricks\Models\Tag;

class Tags extends AbstractGenerator
{
    protected static $model = Tag::class;
    protected static $generateCount = 12;

    protected function generateRecord(Model $record, Generator $faker)
    {
        $record->name = $faker->unique()->word;
    }
}
