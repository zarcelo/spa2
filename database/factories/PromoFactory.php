<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Promo;
use Faker\Generator as Faker;

$factory->define(Promo::class, function (Faker $faker) {
    $width = 640;
    $height = 480;

    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
        'order' => $faker->numberBetween($min = 1, $max = 10),
        'url' => "",
        'images' => $faker->imageUrl($width, $height, 'people')
    ];
});
