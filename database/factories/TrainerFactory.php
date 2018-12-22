<?php

use Faker\Generator as Faker;

$factory->define(App\Trainer::class, function (Faker $faker) {
    return [
        'firstName' => $faker->name,
        'lastName' => $faker->lastName
        //
    ];
});
