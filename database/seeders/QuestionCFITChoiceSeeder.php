<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\QuestionChoice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionCFITChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pilihan = [
            ['A', 'B', 'C', 'D', 'E', 'F'],
            ['A', 'B', 'C', 'D', 'E'],
            ['A', 'B', 'C', 'D', 'E', 'F'],
            ['A', 'B', 'C', 'D', 'E']
        ];

        for ($id_soal = 0; $id_soal < 50; $id_soal++) {
            if ($id_soal < 13) {
                $this->storeData($id_soal, $pilihan, 0);
            } else if ($id_soal >= 13 && $id_soal < 28) {
                $this->storeData($id_soal, $pilihan, 1);
            } else if ($id_soal >= 28 && $id_soal < 40) {
                $this->storeData($id_soal, $pilihan, 2);
            } else {
                $this->storeData($id_soal, $pilihan, 3);
            }
        }
    }

    protected function storeData($id_soal, $pilihan, $urutanPil)
    {
        for ($pil = 0; $pil < count($pilihan[$urutanPil]); $pil++) {
            $questions = [
                'question_id' => $id_soal + 1,
                'choice' => $pilihan[$urutanPil][$pil],
                'value' => $pilihan[$urutanPil][$pil],
                'order'  => $id_soal + 1,
            ];
            QuestionChoice::query()->create($questions);
        }
    }
}
