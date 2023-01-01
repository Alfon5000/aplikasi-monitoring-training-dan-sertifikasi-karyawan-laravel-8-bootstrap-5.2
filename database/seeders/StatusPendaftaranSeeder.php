<?php

namespace Database\Seeders;

use App\Models\StatusPendaftaran;
use Illuminate\Database\Seeder;

class StatusPendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status_pendaftarans = [
            [
                'nama' => 'Menunggu Konfirmasi',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Disetujui',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Ditolak',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($status_pendaftarans as $status_pendaftaran) {
            StatusPendaftaran::insert($status_pendaftaran);
        }
    }
}
