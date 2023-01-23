<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Laksono Martadi',
                'nik' => '00000001',
                'address' => '',
                'phone' => '',
                'role' => User::ROLE_PARTICIPANT,
                'is_expired' => '0',
                'email' => 'laksono.martadi@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('gxIgd5'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Agus Purniawan',
                'nik' => '00000002',
                'address' => '',
                'phone' => '',
                'role' => User::ROLE_PARTICIPANT,
                'is_expired' => '0',
                'email' => 'agus3gili@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Dvr9ro'),
                'created_at' => now(),
                'updated_at' => now()
            ],            [
                'name' => 'Yohanes Satrio Wibowo',
                'nik' => '00000003',
                'address' => '',
                'phone' => '',
                'role' => User::ROLE_PARTICIPANT,
                'is_expired' => '0',
                'email' => 'hanessatrio2443@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('DW12Of'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Rukmana U Elizabeth Sipahutar',
                'nik' => '00000004',
                'address' => '',
                'phone' => '',
                'role' => User::ROLE_PARTICIPANT,
                'is_expired' => '0',
                'email' => 'rukmanasipahutar96@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('CVWVSK'),
                'created_at' => now(),
                'updated_at' => now()
            ],            [
                'name' => 'Ajeng Handayani Utami',
                'nik' => '00000005',
                'address' => '',
                'phone' => '',
                'role' => User::ROLE_PARTICIPANT,
                'is_expired' => '0',
                'email' => 'ajenghandayani48@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('kCJFJI'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Fariz Nizar, M.Ars',
                'nik' => '00000006',
                'address' => '',
                'phone' => '',
                'role' => User::ROLE_PARTICIPANT,
                'is_expired' => '0',
                'email' => 'fariznizar@uinsaizu.ac.id',
                'email_verified_at' => now(),
                'password' => Hash::make('RkZ7rr'),
                'created_at' => now(),
                'updated_at' => now()
            ],            [
                'name' => 'Galih Adhi Pradana',
                'nik' => '00000007',
                'address' => '',
                'phone' => '',
                'role' => User::ROLE_PARTICIPANT,
                'is_expired' => '0',
                'email' => 'galihadhipradana@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('ReKicV'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Itsna Fauziyah',
                'nik' => '00000008',
                'address' => '',
                'phone' => '',
                'role' => User::ROLE_PARTICIPANT,
                'is_expired' => '0',
                'email' => 'itsnaz.fauziyah@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('hJa8Bx'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'seno sarlito',
                'nik' => '00000009',
                'address' => '',
                'phone' => '',
                'role' => User::ROLE_PARTICIPANT,
                'is_expired' => '0',
                'email' => 'senoarch@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('AmWWY6'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Clara Ornella Gultom',
                'nik' => '00000010',
                'address' => '',
                'phone' => '',
                'role' => User::ROLE_PARTICIPANT,
                'is_expired' => '0',
                'email' => 'claraornella30@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('jKZjsM'),
                'created_at' => now(),
                'updated_at' => now()
            ],            [
                'name' => 'Aina Mardiah',
                'nik' => '00000011',
                'address' => '',
                'phone' => '',
                'role' => User::ROLE_PARTICIPANT,
                'is_expired' => '0',
                'email' => 'ainamardiah2000@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('q3F7JR'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Joscelind Kawengian',
                'nik' => '00000012',
                'address' => '',
                'phone' => '',
                'role' => User::ROLE_PARTICIPANT,
                'is_expired' => '0',
                'email' => 'celindkawengian@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('fNJf6n'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Megantara Dwi Prakasa',
                'nik' => '00000013',
                'address' => '',
                'phone' => '',
                'role' => User::ROLE_PARTICIPANT,
                'is_expired' => '0',
                'email' => 'megandprak@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('SIf1mX'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Niken Laila Larashati',
                'nik' => '00000014',
                'address' => '',
                'phone' => '',
                'role' => User::ROLE_PARTICIPANT,
                'is_expired' => '0',
                'email' => 'lailaken3@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('gvuCRn'),
                'created_at' => now(),
                'updated_at' => now()
            ],            [
                'name' => 'Hannaswati Grahitasari Putri',
                'nik' => '00000015',
                'address' => '',
                'phone' => '',
                'role' => User::ROLE_PARTICIPANT,
                'is_expired' => '0',
                'email' => 'putrihannaswati21@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('PJZdSL'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Davin Nugrahatama',
                'nik' => '00000016',
                'address' => '',
                'phone' => '',
                'role' => User::ROLE_PARTICIPANT,
                'is_expired' => '0',
                'email' => 'davin.nt@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('u4qAYM'),
                'created_at' => now(),
                'updated_at' => now()
            ],            [
                'name' => 'Ivang Candra Seta',
                'nik' => '00000017',
                'address' => '',
                'phone' => '',
                'role' => User::ROLE_PARTICIPANT,
                'is_expired' => '0',
                'email' => 'candraivang@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Ft07ks'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Muhamad Fauzi Ridwan',
                'nik' => '00000018',
                'address' => '',
                'phone' => '',
                'role' => User::ROLE_PARTICIPANT,
                'is_expired' => '0',
                'email' => 'mfauziridwan98@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('JRj2Y6'),
                'created_at' => now(),
                'updated_at' => now()
            ],            [
                'name' => 'Anisah Ulfa',
                'nik' => '00000019',
                'address' => '',
                'phone' => '',
                'role' => User::ROLE_PARTICIPANT,
                'is_expired' => '0',
                'email' => 'ulfaanisah3800@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('yejtRw'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Tirta Prawitasari',
                'nik' => '00000020',
                'address' => '',
                'phone' => '',
                'role' => User::ROLE_PARTICIPANT,
                'is_expired' => '0',
                'email' => 'tirtaprawita49@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('p4DXop'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        foreach ($users as $user) {
            User::query()->create($user);
        };
    }
}
