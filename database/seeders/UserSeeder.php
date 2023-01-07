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
        //insert data admin
        User::insert(
            [
                'nama' => 'Admin',
                'nik' => '1234567890',
                'tempat_lahir' => 'Rumah Sakit',
                'tanggal_lahir' => '1945-08-17',
                'jenis_kelamin' => 'Pria',
                'agama' => 'Islam',
                'alamat' => 'Sunter',
                'kota' => 'Jakarta Utara',
                'provinsi' => 'DKI Jakarta',
                'pendidikan' => 'S1',
                'divisi' => 'Personalia',
                'jabatan' => 'Manajer',
                'telepon' => '+6281234567890',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'Admin',
                'foto' => 'foto.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        User::factory(10)->create();
    }
}
