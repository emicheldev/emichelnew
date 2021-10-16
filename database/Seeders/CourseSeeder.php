<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // How many courses you need, defaulting to 10
        $count = (int)$this->command->ask('How many courses do you need ?', 10);

        $this->command->info("Creating {$count} courses.");
 
         // Create the Genre
         $courses = Course::factory()->count($count)->create();

 
         $this->command->info('courses Created!');
    }
}
