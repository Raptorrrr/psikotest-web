<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSKBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $soal = [
            [
                '6 7 8 9',    '8 9 5 7',    '6 9 7 8',    '9 5 6 8',    '9 5 7 6',    '8 5 7 6',    '8 6 5 7',    '9 8 5 7',    '6 8 9 5',    '8 7 6 5',
                '5 6 8 7',    '8 9 7 6',    '9 8 6 5',    '9 7 6 5',    '7 8 5 9',    '8 7 6 9',    '9 7 5 6',    '6 5 9 8',    '8 7 5 9',    '6 7 5 8',
                '5 9 4 2',    '5 7 9 4',    '4 2 5 7',    '7 9 2 4',    '9 7 2 5',    '9 4 5 7',    '7 9 2 5',    '4 2 5 9',    '4 5 7 2',    '7 4 5 9',
                '5 8 6 3',    '8 5 6 1',    '6 1 3 5',    '8 6 1 3',    '1 8 3 5',    '6 1 5 8',    '5 6 1 3',    '3 5 8 6',    '1 6 8 3',    '8 1 3 5',
                '8 4 1 6',    '4 0 1 6',    '1 0 4 8',    '6 0 8 4',    '6 1 0 8',    '8 1 6 4',    '4 6 1 0',    '1 8 4 0',    '6 0 4 8',    '1 8 6 0',
                '2 8 3 1',    '8 1 7 3',    '2 8 1 7',    '2 3 8 7',    '3 1 7 2',    '3 2 1 8',    '1 3 7 2',    '2 7 1 8',    '3 8 7 2',    '1 3 7 8',
                '5 9 7 3',    '3 5 9 1',    '7 3 1 5',    '1 5 7 9',    '9 3 7 1',    '3 9 1 5',    '5 9 7 1',    '3 7 5 9',    '1 7 3 5',    '1 3 7 9',
                '2 6 9 5',    '9 1 2 6',    '5 9 1 2',    '1 2 6 5',    '6 9 5 1',    '5 2 1 9',    '5 9 2 6',    '1 5 9 2',    '1 9 5 6',    '2 1 6 5',
                '5 7 1 9',    '3 7 1 9',    '7 3 5 9',    '1 7 3 5',    '3 5 1 9',    '9 1 7 3',    '3 5 7 9',    '5 1 3 7',    '7 5 9 1',    '1 9 3 5',
                '7 9 5 0',    '7 0 2 5',    '9 5 7 2',    '2 0 7 9',    '9 5 0 2',    '0 7 2 5',    '9 0 7 2',    '2 5 9 7',    '5 0 9 7',    '5 2 9 0'
            ],
            [
                'U T V Z',    'T U X V',    'T X V Z',    'U T X Z',    'Z V U X',    'T U V X',    'V U T Z',    'T X Z V',    'X U V Z',    'Z U T V',
                'Y W R O',    'P O W Y',    'R P O W',    'W O P R',    'Y R P W',    'R O Y W',    'Y O P W',    'R Y P O',    'O Y R P',    'R W Y P',
                'N M W Q',    'S M W N',    'S W Q N',    'W S Q M',    'M W Q N',    'S W N M',    'S Q N M',    'M S Q N',    'S W N Q',    'Q M W N',
                'K F R S',    'F K L R',    'K L R S',    'S F K L',    'L F S R',    'S K F R',    'R K S L',    'L R F K',    'F S K L',    'S L R F',
                'S Z V H',    'V Z R S',    'Z V H R',    'V H S R',    'H Z R S',    'S V Z R',    'R H V Z',    'S R Z V',    'H R S Z',    'V S H Z',
                'J K F G',    'K J G H',    'H K F G',    'J H K F',    'J F G H',    'J K G H',    'G F J H',    'F H J K',    'J G F K',    'K G H F',
                'T Y U I',    'Y T R I',    'Y R I U',    'U T I Y',    'Y T R U',    'T R I Y',    'R Y I U',    'T U R I',    'R U T Y',    'I T R U',
                'Q X R Y',    'Y S Q R',    'Y S X R',    'Q S R X',    'Y S Q R',    'Y Q X S',    'S Y X R',    'Q X R Y',    'S X Q R',    'Y X Q S',
                'M I V S',    'Z I S V',    'M V Z S',    'V I Z M',    'I Z M S',    'Z V M S',    'S I V Z',    'S V I M',    'I S Z M',    'I M Z V',
                'Y G Z W',    'P Y Z G',    'P Y Z W',    'Z W P G',    'Y P G W',    'Z Y G W',    'G P Y Z',    'W Y P Z',    'W Z P G',    'Y W P G'

            ],
            [
                '',    '',    '',    '',    '',    '',    '',    '',    '',    '',
                '',    '',    '',    '',    '',    '',    '',    '',    '',    '',
                '',    '',    '',    '',    '',    '',    '',    '',    '',    '',
                '',    '',    '',    '',    '',    '',    '',    '',    '',    '',
                '',    '',    '',    '',    '',    '',    '',    '',    '',    '',
                '',    '',    '',    '',    '',    '',    '',    '',    '',    '',
                '',    '',    '',    '',    '',    '',    '',    '',    '',    '',
                '',    '',    '',    '',    '',    '',    '',    '',    '',    '',
                '',    '',    '',    '',    '',    '',    '',    '',    '',    '',
                '',    '',    '',    '',    '',    '',    '',    '',    '',    ''

            ]
        ];


        $jawaban = [
            [
                'A', 'B', 'A', 'C', 'D', 'E', 'E', 'B', 'C', 'E',
                'A', 'C', 'B',    'E',    'D',    'C',    'E',    'B',    'D',    'A',
                'D',    'A',    'C',    'E',    'B',    'A',    'B',    'D',    'C',    'A',
                'A',    'E',    'C',    'D',    'B',    'E',    'C',    'A',    'D',    'B',
                'A',    'C',    'D',    'E',    'B',    'A',    'C',    'D',    'E',    'B',
                'A',    'E',    'C',    'D',    'B',    'A',    'B',    'C',    'D',    'E',
                'E',    'B',    'C',    'A',    'D',    'B',    'A',    'E',    'C',    'D',
                'C',    'D',    'A',    'E',    'B',    'A',    'C',    'A',    'B',    'E',
                'B',    'A',    'D',    'E',    'C',    'A',    'D',    'E',    'B',    'C',
                'E',    'B',    'C',    'D',    'A',    'B',    'D',    'C',    'E',    'A'
            ],
            [
                'A', 'E', 'C', 'D', 'B', 'E', 'A', 'C', 'B', 'A',
                'B', 'C', 'D', 'D', 'A', 'B', 'C', 'E', 'E', 'A',
                'C', 'A', 'D', 'E', 'C', 'A', 'B', 'B', 'D', 'C',
                'A', 'D', 'C', 'E', 'B', 'A', 'C', 'D', 'E', 'B',
                'E', 'A', 'D', 'C', 'B', 'A', 'D', 'A', 'B', 'E',
                'D', 'A', 'C', 'E', 'B', 'A', 'B', 'E', 'D', 'C',
                'A', 'D', 'B', 'A', 'E', 'D', 'B', 'C', 'E', 'C',
                'B', 'A', 'C', 'D', 'A', 'E', 'C', 'B', 'D', 'E',
                'E', 'D', 'A', 'C', 'B', 'A', 'D', 'E', 'B', 'C',
                'C', 'D', 'A', 'B', 'E', 'C', 'D', 'A', 'B', 'E'
            ],
            [
                'D',    'A',    'C',    'B',    'E',    'A',    'E',    'C',    'D',    'B',
                'A',    'D',    'E',    'C',    'B',    'E',    'C',    'D',    'A',    'B',
                'C',    'D',    'E',    'A',    'B',    'A',    'C',    'D',    'C',    'E',
                'E',    'B',    'D',    'A',    'C',    'E',    'B',    'C',    'D',    'E',
                'A',    'C',    'D',    'E',    'B',    'D',    'A',    'D',    'C',    'B',
                'E',    'D',    'C',    'A',    'B',    'A',    'E',    'C',    'D',    'B',
                'B',    'C',    'D',    'A',    'B',    'E',    'B',    'D',    'A',    'C',
                'D',    'A',    'C',    'E',    'B',    'A',    'D',    'C',    'B',    'A',
                'A',    'D',    'C',    'E',    'B',    'C',    'D',    'A',    'C',    'E',
                'E',    'B',    'A',    'D',    'C',    'A',    'D',    'B',    'E',    'C'
            ],

        ];

        for ($sesi = 5; $sesi <= 7; $sesi++) {
            for ($no = 0; $no < 100; $no++) {
                $questions = [
                    // SKB SESI 1
                    'session_id' => $sesi,
                    'question' => $soal[$sesi - 5][$no],
                    'image' => null,
                    'order'  => $no + 1,
                    'correct_answer' => json_encode([$jawaban[$sesi - 5][$no]]),
                ];
                Question::query()->create($questions);
            }
        }

        dump('Question SKB : ' . Question::query()->whereHas('session.type', fn ($q) => $q->where('name', 'SKB'))->count());
    }
}
