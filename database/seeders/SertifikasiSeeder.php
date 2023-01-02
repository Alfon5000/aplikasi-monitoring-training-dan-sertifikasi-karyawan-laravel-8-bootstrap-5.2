<?php

namespace Database\Seeders;

use App\Models\Sertifikasi;
use Illuminate\Database\Seeder;

class SertifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sertifikasi = [
            'nama' => 'Belajar PHP Dasar',
            'bidang' => 'Web Programming',
            'metode' => 'Online',
            'tanggal_ujian' => '2023-01-01',
            'alamat' => 'Jalan-jalan',
            'kota' => 'Bekasi',
            'provinsi' => 'Jawa Barat',
            'kuota' => 20,
            'deskripsi' => 'Wkwkwk',
            'gambar' => 'gambar.jpg'
        ];

        Sertifikasi::create($sertifikasi);
        // Sertifikasi::factory(10)->create();
    }
}
