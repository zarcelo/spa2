<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Work;
use Faker\Generator as Faker;

$factory->define(Work::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
        'order' => $faker->numberBetween($min = 1, $max = 10),
        'images' => "https://picsum.photos/seed/picsum/640/480"
    ];
});
