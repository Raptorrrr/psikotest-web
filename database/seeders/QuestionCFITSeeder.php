<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionCFITSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            // CFIT Sesi 1
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'order'  => '1',
                'correct_answer' => json_encode(['B'])
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'order'  => '2',
                'correct_answer' => json_encode(['C'])
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'order'  => '3',
                'correct_answer' => json_encode(['B'])
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'order'  => '4',
                'correct_answer' => json_encode(['D'])
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'order'  => '5',
                'correct_answer' => json_encode(['E'])
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'order'  => '6',
                'correct_answer' => json_encode(['B'])
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'order'  => '7',
                'correct_answer' => json_encode(['D'])
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'order'  => '8',
                'correct_answer' => json_encode(['B'])
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'order'  => '9',
                'correct_answer' => json_encode(['F'])
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'order'  => '10',
                'correct_answer' => json_encode(['C'])
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'order'  => '11',
                'correct_answer' => json_encode(['B'])
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'order'  => '12',
                'correct_answer' => json_encode(['B'])
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'order'  => '13',
                'correct_answer' => json_encode(['E'])
            ],
            // CFIT SESI 2
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'order'  => '1',
                'correct_answer' => json_encode(['B', 'E'])
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'order'  => '2',
                'correct_answer' => json_encode(['A', 'E'])
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'order'  => '3',
                'correct_answer' => json_encode(['A', 'D'])
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'order'  => '4',
                'correct_answer' => json_encode(['C', 'E'])
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'order'  => '5',
                'correct_answer' => json_encode(['E', 'B'])
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'order'  => '6',
                'correct_answer' => json_encode(['A', 'D'])
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'order'  => '7',
                'correct_answer' => json_encode(['B', 'E'])
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'order'  => '8',
                'correct_answer' => json_encode(['B', 'E'])
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'order'  => '9',
                'correct_answer' => json_encode(['A', 'D'])
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'order'  => '10',
                'correct_answer' => json_encode(['B', 'D'])
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'order'  => '11',
                'correct_answer' => json_encode(['A', 'E'])
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'order'  => '12',
                'correct_answer' => json_encode(['C', 'D'])
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'order'  => '13',
                'correct_answer' => json_encode(['B', 'C'])
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'order'  => '14',
                'correct_answer' => json_encode(['A', 'B'])
            ],
            // CFIT SESI 3
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'order'  => '1',
                'correct_answer' => json_encode(['E'])
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'order'  => '2',
                'correct_answer' => json_encode(['E'])
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'order'  => '3',
                'correct_answer' => json_encode(['E'])
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'order'  => '4',
                'correct_answer' => json_encode(['B'])
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'order'  => '5',
                'correct_answer' => json_encode(['C'])
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'order'  => '6',
                'correct_answer' => json_encode(['D'])
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'order'  => '7',
                'correct_answer' => json_encode(['E'])
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'order'  => '8',
                'correct_answer' => json_encode(['E'])
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'order'  => '9',
                'correct_answer' => json_encode(['A'])
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'order'  => '10',
                'correct_answer' => json_encode(['A'])
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'order'  => '11',
                'correct_answer' => json_encode(['F'])
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'order'  => '12',
                'correct_answer' => json_encode(['C'])
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'order'  => '13',
                'correct_answer' => json_encode(['C'])
            ],
            // CFIT SESI 4
            [
                'session_id' => '4',
                'question' => null,
                'image' => null,
                'order'  => '1',
                'correct_answer' => json_encode(['B'])
            ],
            [
                'session_id' => '4',
                'question' => null,
                'image' => null,
                'order'  => '2',
                'correct_answer' => json_encode(['A'])
            ],
            [
                'session_id' => '4',
                'question' => null,
                'image' => null,
                'order'  => '3',
                'correct_answer' => json_encode(['D'])
            ],
            [
                'session_id' => '4',
                'question' => null,
                'image' => null,
                'order'  => '4',
                'correct_answer' => json_encode(['D'])
            ],
            [
                'session_id' => '4',
                'question' => null,
                'image' => null,
                'order'  => '5',
                'correct_answer' => json_encode(['A'])
            ],
            [
                'session_id' => '4',
                'question' => null,
                'image' => null,
                'order'  => '6',
                'correct_answer' => json_encode(['B'])
            ],
            [
                'session_id' => '4',
                'question' => null,
                'image' => null,
                'order'  => '7',
                'correct_answer' => json_encode(['C'])
            ],
            [
                'session_id' => '4',
                'question' => null,
                'image' => null,
                'order'  => '8',
                'correct_answer' => json_encode(['D'])
            ],
            [
                'session_id' => '4',
                'question' => null,
                'image' => null,
                'order'  => '9',
                'correct_answer' => json_encode(['A'])
            ],
            [
                'session_id' => '4',
                'question' => null,
                'image' => null,
                'order'  => '10',
                'correct_answer' => json_encode(['D'])
            ]
        ];

        foreach ($questions as $question) {
            Question::query()->create($question);
        };

        dump('Question CFIT : ' . Question::query()->whereHas('session.type', fn ($q) => $q->where('name', 'CFIT'))->count());
    }
}
