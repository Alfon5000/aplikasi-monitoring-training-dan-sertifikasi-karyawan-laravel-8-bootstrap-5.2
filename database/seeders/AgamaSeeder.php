<?php

namespace Database\Seeders;

use App\Models\Agama;
use Illuminate\Database\Seeder;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agamas = [
            [
                'nama' => 'Islam',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Kristen',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Katolik',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Hindu',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Buddha',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Konghucu',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        foreach ($agamas as $agama) {
            Agama::insert($agama);
        }
    }
}
