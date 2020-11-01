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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name('male'),
        'email' => $faker->unique()->safeEmail,
        'avatar' => "https://eu.ui-avatars.com/api/?name={$faker->name('male')}",
        'email_verified_at' => now(),
        'password' => Hash::make('secret'), // secret
        'remember_token' => Str::random(10),
    ];
});
