<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->text(15),
        'slug' => $faker->slug,
        'image' => $faker->imageUrl(),
        'image' => $faker->imageUrl(),
        'status' => $faker->boolean(),
        'view_count' => $faker->randomDigit,
        'content' => $faker->paragraph(30),
        'author_id'  => function () {
            // Get random genre id
            return App\Models\User::inRandomOrder()->first()->id;
        },
        'category_id'  => function () {
            // Get random genre id
            return App\Models\Category::inRandomOrder()->first()->id;
        },
    ];
});