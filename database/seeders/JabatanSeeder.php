<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jabatans = [
            [
                'nama' => 'Staff',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Supervisor',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Asisten Manajer',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Manajer',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Direktur',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        foreach ($jabatans as $jabatan) {
            Jabatan::insert($jabatan);
        }
    }
}
