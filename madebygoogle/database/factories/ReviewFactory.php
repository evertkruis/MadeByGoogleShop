<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'title' => $faker->paragraph(1),
        'user_id' => \App\User::all()->random()->id,
        'body' => $faker->text(500),
        'rating' => $faker->numberBetween(1,10)
    ];
});
