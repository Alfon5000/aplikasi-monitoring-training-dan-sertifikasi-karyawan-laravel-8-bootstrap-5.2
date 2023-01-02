<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;

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
                'nama' => 'Alfonso Lai',
                'nik' => '1357924680',
                'tempat_lahir' => 'Bekasi',
                'tanggal_lahir' => '1997-04-15',
                'jenis_kelamin' => 'Pria',
                'agama' => 'Katolik',
                'alamat' => 'Taman Harapan Baru, Blok S18/6',
                'kota' => 'Bekasi',
                'provinsi' => 'Jawa Barat',
                'pendidikan' => 'S1',
                'divisi' => 'Teknologi Informasi',
                'jabatan' => 'Manajer',
                'telepon' => '+6281236665363',
                'email' => 'alfonso@gmail.com',
                'password' => Crypt::encryptString('password'),
                'role' => 'Admin',
                'foto' => 'foto.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        User::factory(10)->create();
    }
}
