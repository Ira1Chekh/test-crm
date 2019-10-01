<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'company_id' => $faker->numberBetween(1,1),
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->unique()->phoneNumber
    ];
});
