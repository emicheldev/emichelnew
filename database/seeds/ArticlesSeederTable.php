<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticlesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Article');

        for ($i = 1 ; $i <= 10 ; $i++) {
            DB::table('articles')->insert([
                'slug' => $faker->slug(),
                'image' => $faker->imageUrl(),

                'title' => $faker->sentence(),
                'body_md' => $faker->sentence(),
                'summary_md' => $faker->paragraph(),
                'body_html' => $faker->sentence(),
                'summary_html' => $faker->paragraph(),
                'online' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
             ]);
        }
    }
}
