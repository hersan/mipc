<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'birthday' => $faker->dateTimeBetween('-30 years', '-18 years'),
    ];
});
