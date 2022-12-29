<?php

namespace Database\Seeders;

use App\Models\JenisKelamin;
use Illuminate\Database\Seeder;

class JenisKelaminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenis_kelamins = [
            [
                'nama' => 'Pria',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Wanita',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        foreach ($jenis_kelamins as $jenis_kelamin) {
            JenisKelamin::insert($jenis_kelamin);
        }
    }
}
