<?php namespace OFFLINE\Tricks\Classes\DataGenerators;

use Faker\Generator;
use October\Rain\Database\Model;
use OFFLINE\Tricks\Models\Topic;

class Topics extends AbstractGenerator
{
    protected static $model = Topic::class;
    protected static $generateCount = 10;

    protected function generateRecord(Model $record, Generator $faker)
    {
        $record->name = $faker->unique()->word;
    }
}
