<?php

namespace Database\Seeders;


use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // How many users you need, defaulting to 10
       $count = (int)$this->command->ask('How many users do you need ?', 10);

       $this->command->info("Creating {$count} users.");

        // Create the Genre
        $users = User::factory()->count($count)->create();

        $this->command->info('Users Created!');
    }
}
