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
                'order' => 1,
                'intro' => null
            ],
            [
                'name' => 'SKB',
                'order' => 2,
                'intro' => null
            ],
            [
                'name' => 'EPPS',
                'order' => 3,
                'intro' => null
            ]
        ];

        foreach ($types as $type) {
            Type::query()->create($type);
        };

        dump('Tipe : ' . Type::query()->count());
    }
}
