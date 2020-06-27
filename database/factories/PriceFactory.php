<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Price;
use Faker\Generator as Faker;

$factory->define(Price::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'storage' => $faker->numberBetween($min = 50, $max = 100) . "GB",
        'emails' => $faker->numberBetween($min = 100, $max = 1000),
        'domains' => $faker->numberBetween($min = 1, $max = 10),
        'support' => "Endless",
        'price' => $faker->numberBetween($min = 5, $max = 50),
        'url' => ""
    ];
});
