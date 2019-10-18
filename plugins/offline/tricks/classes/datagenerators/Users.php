<?php namespace OFFLINE\Tricks\Classes\DataGenerators;


use Faker\Generator;
use October\Rain\Database\Model;
use RainLab\User\Models\User;

class Users extends AbstractGenerator
{
    protected static $model = User::class;
    public static $generateCount = 20;

    protected function generateRecord(Model $record, Generator $faker)
    {
        $firstName = $faker->firstName;
        $lastName = $faker->lastName;
        $email = str_slug($firstName) . '.' . str_slug($lastName);
        $email .= '-' . $faker->unique()->numberBetween(100, 999);
        $email .= '@' . $faker->safeEmailDomain;

        $record->name = $firstName;
        $record->surname = $lastName;
        $record->email = $email;
        $record->password = $record->password_confirmation = 'password';
        $record->is_activated = true;
        $record->is_guest = false;
        $record->is_superuser = false;
    }
}
