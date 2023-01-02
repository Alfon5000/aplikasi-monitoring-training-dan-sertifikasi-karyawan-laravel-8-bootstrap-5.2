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
        $training = [
            'nama' => 'Belajar PHP Dasar',
            'bidang' => 'Web Programming',
            'metode' => 'Online',
            'tanggal_mulai' => '2023-01-01',
            'tanggal_selesai' => '2023-01-02',
            'alamat' => 'Jalan-jalan',
            'kota' => 'Bekasi',
            'provinsi' => 'Jawa Barat',
            'kuota' => 20,
            'deskripsi' => 'Wkwkwk',
            'gambar' => 'gambar.jpg'
        ];

        Training::create($training);
        // Training::factory(10)->create();
    }
}
