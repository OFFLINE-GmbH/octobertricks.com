<?php namespace OFFLINE\Tricks\Classes\DataGenerators;

use Faker\Generator;
use October\Rain\Database\Model;
use OFFLINE\Tricks\Models\Comment;

class Comments extends AbstractGenerator
{
    protected static $model = Comment::class;
    protected static $generateCount = 50;

    protected function generateRecord(Model $record, Generator $faker)
    {
        $record->trick_id = $faker->numberBetween(1, Tricks::$generateCount);;
        $record->user_id = $faker->numberBetween(1, Users::$generateCount);
        $record->votes_up = $faker->numberBetween(1, 20);
        $record->votes_down = $faker->numberBetween(1, 20);
        $record->content = $faker->paragraph;
    }
}
