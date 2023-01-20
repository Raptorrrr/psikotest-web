<?php

namespace Database\Seeders;

use App\Models\QuestionChoice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

class QuestionSKBChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SKB SESI 1
        $pilihan_1 = [
            ['5', '6', '7', '8', '9'],
            ['9', '7', '5', '6', '8'],
            ['2', '4', '9', '7', '5'],
            ['1', '6', '8', '5', '3'],
            ['0', '4', '8', '6', '1'],
            ['7', '8', '3', '1', '2'],
            ['3', '7', '9', '5', '1'],
            ['6', '2', '1', '5', '9'],
            ['5', '3', '7', '1', '9'],
            ['7', '9', '0', '5', '2']
        ];

        $pilihan_2 = [
            ['X', 'T', 'U', 'V', 'Z'],
            ['O', 'P', 'R', 'Y', 'W'],
            ['Q', 'W', 'S', 'M', 'N'],
            ['L', 'K', 'F', 'S', 'R'],
            ['H', 'V', 'Z', 'S', 'R'],
            ['F', 'K', 'J', 'H', 'G'],
            ['R', 'T', 'Y', 'U', 'I'],
            ['X', 'S', 'Q', 'Y', 'R'],
            ['I', 'V', 'S', 'M', 'Z'],
            ['G', 'Y', 'P', 'W', 'Z']
        ];
        $pilihan_3 = [
            ['', '', '', '', ''],
            ['', '', '', '', ''],
            ['', '', '', '', ''],
            ['', '', '', '', ''],
            ['', '', '·', '', ''],
            ['', '', '', '', ''],
            ['', '', '', '', ''],
            ['', '', '', '', ''],
            ['', '', '', '', ''],
            ['', '', '', '', '']
        ];

        $nilai = [['A', 'B', 'C', 'D', 'E']];

        for ($id_soal = 51; $id_soal < 351; $id_soal++) {
            // SESI 1
            if ($id_soal < 151) {
                if ($id_soal < 61) {
                    $this->storeData($id_soal, $pilihan_1, $nilai, 0);
                } else if ($id_soal >= 61 && $id_soal < 71) {
                    $this->storeData($id_soal, $pilihan_1, $nilai, 1);
                } else if ($id_soal >= 71 && $id_soal < 81) {
                    $this->storeData($id_soal, $pilihan_1, $nilai, 2);
                } else if ($id_soal >= 81 && $id_soal < 91) {
                    $this->storeData($id_soal, $pilihan_1, $nilai, 3);
                } else if ($id_soal >= 91 && $id_soal < 101) {
                    $this->storeData($id_soal, $pilihan_1, $nilai, 4);
                } else if ($id_soal >= 101 && $id_soal < 111) {
                    $this->storeData($id_soal, $pilihan_1, $nilai, 5);
                } else if ($id_soal >= 111 && $id_soal < 121) {
                    $this->storeData($id_soal, $pilihan_1, $nilai, 6);
                } else if ($id_soal >= 121 && $id_soal < 131) {
                    $this->storeData($id_soal, $pilihan_1, $nilai, 7);
                } else if ($id_soal >= 131 && $id_soal < 141) {
                    $this->storeData($id_soal, $pilihan_1, $nilai, 8);
                } else {
                    $this->storeData($id_soal, $pilihan_1, $nilai, 9);
                }
            }
            if ($id_soal >= 151 && $id_soal < 251) {
                // SESI 2
                if ($id_soal < 161) {
                    $this->storeData($id_soal, $pilihan_2, $nilai, 0);
                } else if ($id_soal >= 161 && $id_soal < 171) {
                    $this->storeData($id_soal, $pilihan_2, $nilai, 1);
                } else if ($id_soal >= 171 && $id_soal < 181) {
                    $this->storeData($id_soal, $pilihan_2, $nilai, 2);
                } else if ($id_soal >= 181 && $id_soal < 191) {
                    $this->storeData($id_soal, $pilihan_2, $nilai, 3);
                } else if ($id_soal >= 191 && $id_soal < 201) {
                    $this->storeData($id_soal, $pilihan_2, $nilai, 4);
                } else if ($id_soal >= 201 && $id_soal < 211) {
                    $this->storeData($id_soal, $pilihan_2, $nilai, 5);
                } else if ($id_soal >= 211 && $id_soal < 221) {
                    $this->storeData($id_soal, $pilihan_2, $nilai, 6);
                } else if ($id_soal >= 221 && $id_soal < 231) {
                    $this->storeData($id_soal, $pilihan_2, $nilai, 7);
                } else if ($id_soal >= 231 && $id_soal < 241) {
                    $this->storeData($id_soal, $pilihan_2, $nilai, 8);
                } else {
                    $this->storeData($id_soal, $pilihan_2, $nilai, 9);
                }
            }
            if ($id_soal >= 251 && $id_soal < 351) {
                // SESI 3
                if ($id_soal < 261) {
                    $this->storeData($id_soal, $pilihan_3, $nilai, 0);
                } else if ($id_soal >= 261 && $id_soal < 271) {
                    $this->storeData($id_soal, $pilihan_3, $nilai, 1);
                } else if ($id_soal >= 271 && $id_soal < 281) {
                    $this->storeData($id_soal, $pilihan_3, $nilai, 2);
                } else if ($id_soal >= 281 && $id_soal < 291) {
                    $this->storeData($id_soal, $pilihan_3, $nilai, 3);
                } else if ($id_soal >= 291 && $id_soal < 301) {
                    $this->storeData($id_soal, $pilihan_3, $nilai, 4);
                } else if ($id_soal >= 301 && $id_soal < 311) {
                    $this->storeData($id_soal, $pilihan_3, $nilai, 5);
                } else if ($id_soal >= 311 && $id_soal < 321) {
                    $this->storeData($id_soal, $pilihan_3, $nilai, 6);
                } else if ($id_soal >= 321 && $id_soal < 331) {
                    $this->storeData($id_soal, $pilihan_3, $nilai, 7);
                } else if ($id_soal >= 331 && $id_soal < 341) {
                    $this->storeData($id_soal, $pilihan_3, $nilai, 8);
                } else {
                    $this->storeData($id_soal, $pilihan_3, $nilai, 9);
                }
            }
        }

        dump('Question Choice SKB : ' . QuestionChoice::query()->whereHas('question.session.type', fn ($q) => $q->where('name', 'SKB'))->count());
    }
    protected function storeData($id_soal, $pilihan, $nilai, $kolom)
    {
        for ($pil = 0; $pil < 5; $pil++) {
            $questions = [
                'question_id' => $id_soal,
                'choice' => $pilihan[$kolom][$pil],
                'value' => $nilai[0][$pil],
                'order'  => $pil
            ];
            QuestionChoice::query()->create($questions);
        }
    }
}
