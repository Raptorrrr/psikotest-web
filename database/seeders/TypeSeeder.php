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
            ],
            [
                'name' => 'SKB',
                'order' => 2,
            ],
            [
                'name' => 'EPPS',
                'order' => 3,
            ]
        ];

        foreach ($types as $type) {
            Type::query()->create($type);
        };

        dump('Tipe : ' . Type::query()->count());
    }
}
