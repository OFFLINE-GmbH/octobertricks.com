<?php namespace OFFLINE\Tricks\Classes\DataGenerators;

use Faker\Generator;
use October\Rain\Database\Model;
use OFFLINE\Tricks\Models\Tag;
use OFFLINE\Tricks\Models\Topic;
use OFFLINE\Tricks\Models\Trick;

class Tricks extends AbstractGenerator
{
    protected static $model = Trick::class;
    public static $generateCount = 50;

    protected function generateRecord(Model $record, Generator $faker)
    {
        $record->title = $faker->sentence(5);
        $record->content = $faker->text(200);
        $record->user_id = $faker->numberBetween(1, Users::$generateCount);
        $record->votes_up = $faker->numberBetween(1, 20);
        $record->votes_down = $faker->numberBetween(1, 20);
        $record->pageviews = $faker->numberBetween(1, 2000);
        $record->revision = $faker->numberBetween(1, 5);
        $record->published_at = $faker->dateTimeBetween('-1 year', 'now');
    }

    protected function afterInert()
    {
        $faker = \Faker\Factory::create();

        $tricks = Trick::all();
        $tricks->each(function (Trick $trick) use ($faker) {

            if ($tags = Tag::all()->random($faker->numberBetween(0, 3))) {
                $trick->tags()->sync($tags);
            };

            if ($topics = Topic::all()->random($faker->numberBetween(0, 3))) {
                $trick->topics()->sync($topics);
            };
        });
    }
}
