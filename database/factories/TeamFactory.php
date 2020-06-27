<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {

    $width = 640;
    $height = 480;

    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
        'position' => $faker->jobTitle,
        'email' => $faker->email,
        'images' => $faker->imageUrl($width, $height, 'people')
    ];
});
