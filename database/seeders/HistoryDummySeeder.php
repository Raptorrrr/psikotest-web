<?php

namespace Database\Seeders;

use App\Models\HistoryTest;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HistoryDummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $history = [
            // cfit
            [
                'user_id' => 2,
                'session_id' => 1,
                'correct_answer' => 9,
                'wrong_answer' => 4,
                'start_at' => now(),
                'finish_at' => now(),
            ],
            [
                'user_id' => 2,
                'session_id' => 2,
                'correct_answer' => 8,
                'wrong_answer' => 6,
                'start_at' => now(),
                'finish_at' => now(),
            ],
            [
                'user_id' => 2,
                'session_id' => 3,
                'correct_answer' => 6,
                'wrong_answer' => 7,
                'start_at' => now(),
                'finish_at' => now(),
            ],
            [
                'user_id' => 2,
                'session_id' => 4,
                'correct_answer' => 8,
                'wrong_answer' => 2,
                'start_at' => now(),
                'finish_at' => now()->addHours(1),
            ],
            // skb
            [
                'user_id' => 2,
                'session_id' => 5,
                'correct_answer' => 80,
                'wrong_answer' => 20,
                'start_at' => now(),
                'finish_at' => now()
            ],
            [
                'user_id' => 2,
                'session_id' => 6,
                'correct_answer' => 91,
                'wrong_answer' => 9,
                'start_at' => now(),
                'finish_at' => now(),
            ],
            [
                'user_id' => 2,
                'session_id' => 7,
                'correct_answer' => 70,
                'wrong_answer' => 30,
                'start_at' => now(),
                'finish_at' => now(),
            ],
            // [
            //     'user_id' => 2,
            //     'session_id' => 8,
            //     'correct_answer' => 8,
            //     'wrong_answer' => 2,
            //     'start_at' => now(),
            //     'finish_at' => now(),
            // ]
        ];
        foreach ($history as $question) {
            HistoryTest::query()->create($question);
        };
        // HistoryTest::query()->create($history);
    }
}
