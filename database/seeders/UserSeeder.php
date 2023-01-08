<?php

namespace Database\Seeders;

use App\Models\User;
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
                'nama' => 'Admin',
                'nik' => '1234567890',
                'tempat_lahir' => 'Rumah Sakit',
                'tanggal_lahir' => '1945-08-17',
                'jenis_kelamin' => 'Pria',
                'agama' => 'Islam',
                'alamat' => 'Kebon Jeruk',
                'kota' => 'Jakarta Barat',
                'provinsi' => 'DKI Jakarta',
                'pendidikan' => 'S1',
                'divisi' => 'Personalia',
                'jabatan' => 'Manajer',
                'telepon' => '+6281234567890',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'Admin',
                'foto' => 'foto-user/admin.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Karyawan',
                'nik' => '1357924680',
                'tempat_lahir' => 'Rumah Bersalin',
                'tanggal_lahir' => '2023-01-01',
                'jenis_kelamin' => 'Pria',
                'agama' => 'Islam',
                'alamat' => 'Harapan Indah',
                'kota' => 'Kota Bekasi',
                'provinsi' => 'Jawa Barat',
                'pendidikan' => 'S1',
                'divisi' => 'Teknologi Informasi',
                'jabatan' => 'Staff',
                'telepon' => '+6281234567891',
                'email' => 'karyawan@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'Karyawan',
                'foto' => 'foto-user/man.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($users as $user) {
            User::insert($user);
        }

        // User::factory(10)->create();
    }
}
