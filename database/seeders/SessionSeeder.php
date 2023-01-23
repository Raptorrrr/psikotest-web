<?php

namespace Database\Seeders;

use App\Models\Session;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sessions = [
            // CFIT
            [
                'type_id' => '1',
                'session' => '1',
                'time'  => '180',
                'count_answer' => '1',
                'is_import' => 1,
            ],
            [
                'type_id' => '1',
                'session' => '2',
                'time'  => '240',
                'count_answer' => '2',
                'is_import' => 1,
            ],
            [
                'type_id' => '1',
                'session' => '3',
                'time'  => '180',
                'count_answer' => '1',
                'is_import' => 1,
            ],
            [
                'type_id' => '1',
                'session' => '4',
                'time'  => '210',
                'count_answer' => '1',
                'is_import' => 1,
            ],
            // SKB
            [
                'type_id' => '2',
                'session' => '1',
                'time'  =>  '1800',
                'count_answer' => '1'
            ],
            [
                'type_id' => '2',
                'session' => '2',
                'time'  => '1800',
                'count_answer' => '1'
            ],
            [
                'type_id' => '2',
                'session' => '3',
                'time'  => '1800',
                'count_answer' => '1'
            ],
            // EPPS
            [
                'type_id' => '3',
                'session' => '1',
                'time'  => '1800',
                'count_answer' => '1'
            ]
        ];

        foreach ($sessions as $session) {
            Session::query()->create($session);
        };

        dump('Session : ' . Session::query()->count());
    }
}
