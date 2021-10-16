<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $articles = Article::factory()->count($count)->create();        ;

        $this->command->info('Articles Created!');
    }
}
