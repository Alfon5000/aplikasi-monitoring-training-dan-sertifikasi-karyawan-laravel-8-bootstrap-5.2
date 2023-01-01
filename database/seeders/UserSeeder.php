<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
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
                'role_id' => 1,
                'jenis_kelamin_id' => 1,
                'agama_id' => 3,
                'pendidikan_id' => 3,
                'jabatan_id' => 4,
                'divisi_id' => 4,
                'nama' => 'Alfonso Lai',
                'nik' => '1357924680',
                'tempat_lahir' => 'Bekasi',
                'tanggal_lahir' => '1997-04-15',
                'alamat' => 'Taman Harapan Baru, Blok S18/6',
                'kota' => 'Bekasi',
                'provinsi' => 'Jawa Barat',
                'telepon' => '+6281236665363',
                'email' => 'alfonso@gmail.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        User::factory(20)->create();
    }
}
