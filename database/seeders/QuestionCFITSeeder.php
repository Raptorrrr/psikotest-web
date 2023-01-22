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
                'is_import' => 1,
                'order'  => '1',
                'correct_answer' => ['B']
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '2',
                'correct_answer' => ['C']
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '3',
                'correct_answer' => ['B']
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '4',
                'correct_answer' => ['D']
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '5',
                'correct_answer' => ['E']
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '6',
                'correct_answer' => ['B']
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '7',
                'correct_answer' => ['D']
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '8',
                'correct_answer' => ['B']
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '9',
                'correct_answer' => ['F']
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '10',
                'correct_answer' => ['C']
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '11',
                'correct_answer' => ['B']
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '12',
                'correct_answer' => ['B']
            ],
            [
                'session_id' => '1',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '13',
                'correct_answer' => ['E']
            ],
            // CFIT SESI 2
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '1',
                'correct_answer' => ['B', 'E']
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '2',
                'correct_answer' => ['A', 'E']
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '3',
                'correct_answer' => ['A', 'D']
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '4',
                'correct_answer' => ['C', 'E']
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '5',
                'correct_answer' => ['E', 'B']
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '6',
                'correct_answer' => ['A', 'D']
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '7',
                'correct_answer' => ['B', 'E']
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '8',
                'correct_answer' => ['B', 'E']
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '9',
                'correct_answer' => ['A', 'D']
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '10',
                'correct_answer' => ['B', 'D']
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '11',
                'correct_answer' => ['A', 'E']
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '12',
                'correct_answer' => ['C', 'D']
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '13',
                'correct_answer' => ['B', 'C']
            ],
            [
                'session_id' => '2',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '14',
                'correct_answer' => ['A', 'B']
            ],
            // CFIT SESI 3
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '1',
                'correct_answer' => ['E']
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '2',
                'correct_answer' => ['E']
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '3',
                'correct_answer' => ['E']
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '4',
                'correct_answer' => ['B']
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '5',
                'correct_answer' => ['C']
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '6',
                'correct_answer' => ['D']
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '7',
                'correct_answer' => ['E']
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '8',
                'correct_answer' => ['E']
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '9',
                'correct_answer' => ['A']
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '10',
                'correct_answer' => ['A']
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '11',
                'correct_answer' => ['F']
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '12',
                'correct_answer' => ['C']
            ],
            [
                'session_id' => '3',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '13',
                'correct_answer' => ['C']
            ],
            // CFIT SESI 4
            [
                'session_id' => '4',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '1',
                'correct_answer' => ['B']
            ],
            [
                'session_id' => '4',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '2',
                'correct_answer' => ['A']
            ],
            [
                'session_id' => '4',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '3',
                'correct_answer' => ['D']
            ],
            [
                'session_id' => '4',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '4',
                'correct_answer' => ['D']
            ],
            [
                'session_id' => '4',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '5',
                'correct_answer' => ['A']
            ],
            [
                'session_id' => '4',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '6',
                'correct_answer' => ['B']
            ],
            [
                'session_id' => '4',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '7',
                'correct_answer' => ['C']
            ],
            [
                'session_id' => '4',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '8',
                'correct_answer' => ['D']
            ],
            [
                'session_id' => '4',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '9',
                'correct_answer' => ['A']
            ],
            [
                'session_id' => '4',
                'question' => null,
                'image' => null,
                'is_import' => 1,
                'order'  => '10',
                'correct_answer' => ['D']
            ]
        ];

        foreach ($questions as $question) {
            Question::query()->create($question);
        };

        dump('Question CFIT : ' . Question::query()->whereHas('session.type', fn ($q) => $q->where('name', 'CFIT'))->count());
    }
}
