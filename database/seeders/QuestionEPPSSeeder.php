<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionEPPSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {


        for ($no = 0; $no < 225; $no++) {
            $questions = [
                // SKB SESI 1
                'session_id' => '8',
                'question' => null,
                'image' => null,
                'order'  => $no + 1,
                'correct_answer' => null,
            ];
            Question::query()->create($questions);
        }
    }
}