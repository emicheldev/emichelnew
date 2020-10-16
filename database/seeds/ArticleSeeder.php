<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // How many articles you need, defaulting to 10
        $count = (int)$this->command->ask('How many articles do you need ?', 10);

        $this->command->info("Creating {$count} articles.");

        // Create the Genre
        $articles = factory(App\Models\Article::class, $count)->create();

        $this->command->info('Articles Created!');
    }
}
