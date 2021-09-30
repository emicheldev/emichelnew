<?php

namespace Database\Factories;

use App\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word,
            'slug' => $this->faker->slug,
            'icon' => $this->faker->unique()->word,
            'description' => $this->faker->paragraph(3),
            'color' => $this->faker->hslColor(),
         ];
    }
}