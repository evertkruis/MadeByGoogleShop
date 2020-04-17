<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\User;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'categoryName' => $faker->name,
    ];
});
