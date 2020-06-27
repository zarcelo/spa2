<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Statistic;
use Faker\Generator as Faker;

$factory->define(Statistic::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'value' => $faker->numberBetween($min = 50, $max = 100),
        'order' => $faker->numberBetween($min = 1, $max = 10)
    ];
});
