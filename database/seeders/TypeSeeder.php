<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'name' => 'CFIT',
                'intro' => null
            ],
            [
                'name' => 'SKB',
                'intro' => null
            ],
            [
                'name' => 'EPPS',
                'intro' => null
            ]
        ];

        foreach ($types as $type) {
            Type::query()->create($type);
        };

        dump('Tipe : ' . Type::query()->count());
    }
}
