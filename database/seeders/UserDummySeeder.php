<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserDummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'name' => 'Iqbal',
            'nik' => '00000001',
            'address' => '',
            'phone' => '',
            'role' => 'participant',
            'is_expired' => '0',
            'email' => 'iqbal@gmail.com',
            'email_verified_at' => now(),
            'password' => '123',
            'created_at' => now(),
            'updated_at' => now()
        ];
        User::query()->create($users);
    }
}
