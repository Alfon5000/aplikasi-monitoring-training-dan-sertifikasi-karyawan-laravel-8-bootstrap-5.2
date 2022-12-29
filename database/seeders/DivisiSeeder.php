<?php

namespace Database\Seeders;

use App\Models\Divisi;
use Illuminate\Database\Seeder;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisis = [
            [
                'nama' => 'Keuangan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Pemasaran',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Penjualan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Personalia',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Teknologi Informasi',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        foreach ($divisis as $divisi) {
            Divisi::insert($divisi);
        }
    }
}
