<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\About;
use Faker\Generator as Faker;

$factory->define(About::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
        'order' => $faker->numberBetween($min = 1, $max = 10),
        'icon' => 'fa fa-desktop'
    ];
});
