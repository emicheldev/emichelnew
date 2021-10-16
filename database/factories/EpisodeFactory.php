<?php

namespace Database\Factories;

use App\User;
use App\Models\Course;
use App\Models\Episode;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;


class EpisodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Episode::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(6),
            'slug' => $this->faker->slug,
            'content' => $this->faker->text(),
            'youtube_id' => "Y6qV_gfm3Y8",
            'Video_path' => $this->faker->mimeType(),
            'duration' => $this->faker->numberBetween(10,150),
            'premium' => $this->faker->boolean(),
            'online' => $this->faker->boolean(),
            'ressource' => "{'php.org','monsite.com','lien.com'}",
            'course_id' => function ()
            {
                return Course::inRandomOrder()->first()->id;
            }
        ];
    }
}
