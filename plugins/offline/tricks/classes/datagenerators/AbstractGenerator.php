<?php namespace OFFLINE\Tricks\Classes\DataGenerators;

use Faker\Generator;
use October\Rain\Database\Model;

abstract class AbstractGenerator
{
    protected static $model;
    protected static $generateCount;
    protected static $fixedData = [];

    public static function run()
    {
        $instance = new static();
        $instance->beforeInsert();

        $instance->insertRandomData();
        $instance->insertFixedData();

        $instance->afterInert();
    }

    abstract protected function generateRecord(Model $record, Generator $faker);

    protected function beforeInsert()
    {
    }

    protected function afterInert()
    {
    }

    /**
     * Helper function to chose between 2 cases with a chance percentage
     */
    protected function chose(int $chanceForFirst, callable $a, callable $b)
    {
        $random = rand(0, 99);

        if ($chanceForFirst > $random) {
            $a();
        }
        else {
            $b();
        }
    }

    private function insertRandomData()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < static::$generateCount; $i++) {
            $model = new static::$model;
            $this->generateRecord($model, $faker);
            $model->save();
        }
    }

    private function insertFixedData()
    {
        foreach (static::$fixedData as $id => $values) {
            $model = static::$model::find($id);

            foreach ($values as $column => $value) {
                $model->$column = $value;
            }

            $model->save();
        }
    }
}
