<?php

namespace Database\Factories;

use App\User;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;


class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'introduction' => $this->faker-> paragraph(50),
            'image' => $this->faker->imageUrl(),
            'title' => $this->faker->text(15),
            'prerequisites' => "[{'php','test0','test0','test0','test0'}]",
            'description' => $this->faker->text(),
            'level' => $this->faker->numberBetween(1,3),
            'slug' => $this->faker->slug,
            'youtube_id' => 'youtube12',
            'online' => $this->faker->boolean(),
            'author_id' => function ()
            {
                return User::inRandomOrder()->first()->id;
            } ,
            'view_count' => $this->faker->randomDigit,
            'category_id' => function ()
            {
                return Category::inRandomOrder()->first()->id;
            } ,
        ];
    }
}
            