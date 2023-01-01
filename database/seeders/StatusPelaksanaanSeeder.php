<?php

namespace Database\Seeders;

use App\Models\StatusPelaksanaan;
use Illuminate\Database\Seeder;

class StatusPelaksanaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status_pelaksanaans = [
            ['nama' => 'Belum Mulai'],
            ['nama' => 'Sedang Dilaksanakan'],
            ['nama' => 'Sudah Selesai']
        ];

        foreach ($status_pelaksanaans as $status_pelaksanaan) {
            StatusPelaksanaan::insert($status_pelaksanaan);
        }
    }
}
