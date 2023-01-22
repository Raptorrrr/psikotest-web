<?php

namespace Database\Seeders;

use App\Models\UserAnswer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($no = 351; $no < 576; $no++) {
            $questions = [
                // SKB SESI 1
                'user_id' => 2,
                'question_id' => $no,
                'answer' => 'A'
            ];
            UserAnswer::query()->create($questions);
        };
    }
}
