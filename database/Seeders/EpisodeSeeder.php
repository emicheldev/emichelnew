<?php

namespace Database\Seeders;

use App\Models\Episode;
use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // How many episodes you need, defaulting to 10
        $count = (int)$this->command->ask('How many episodes do you need ?', 10);

        $this->command->info("Creating {$count} episodes.");
 
         // Create the Genre
         $episodes = Episode::factory()->count($count)->create();

 
         $this->command->info('episodes Created!');
    }
}
