<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
         $categories = Category::factory()->count($count)->create();        ;
 
         $this->command->info('categories Created!');
    }
}
