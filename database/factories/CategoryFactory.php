<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
      return [
       'name' => $faker->unique()->word,
       'icon' => $faker->unique()->word,
       'color' => $faker->safeColorName,
       'bgcolor' => $faker->hexColor,
    ];
});
