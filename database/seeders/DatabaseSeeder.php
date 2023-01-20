<?php

namespace Database\Seeders;

use App\Models\QuestionChoice;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            TypeSeeder::class,
            SessionSeeder::class,
            QuestionCFITSeeder::class,
            QuestionSKBSeeder::class,
            QuestionEPPSSeeder::class,
            QuestionCFITChoiceSeeder::class,
            QuestionSKBChoiceSeeder::class,
            QuestionEPPSChoiceSeeder::class
        ]);
    }
}
