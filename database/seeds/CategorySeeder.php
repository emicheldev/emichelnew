<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = (int)$this->command->ask('How many categories do you need ?', 10);

        $this->command->info("Creating {$count} categories.");
 
         // Create the Genre
         $categories = factory(App\Models\Category::class, $count)->create();
 
         $this->command->info('categories Created!');
    }
}
