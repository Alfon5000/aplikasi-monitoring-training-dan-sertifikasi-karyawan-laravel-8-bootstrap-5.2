<?php

namespace Database\Seeders;

use App\Models\Training;
use Illuminate\Database\Seeder;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Training::insert([
            'nama' => 'Pemrograman PHP Dasar',
            'gambar' => 'Pemrograman PHP Dasar.jpg',
            'tanggal_mulai' => '2023-01-01',
            'tanggal_selesai' => '2023-01-05',
            'alamat' => 'Jl. Di Tempat',
            'kota' => 'Bandung',
            'provinsi' => 'Jawa Barat',
            'kuota' => 50,
            'deskripsi' => 'Training Dasar Bahasa Pemrograman PHP'
        ]);
    }
}
