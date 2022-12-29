<?php

namespace Database\Seeders;

use App\Models\Pendidikan;
use Illuminate\Database\Seeder;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pendidikans = [
            [
                'nama' => 'SMA',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'SMK',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'D3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'S1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'S2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'S3',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        foreach ($pendidikans as $pendidikan) {
            Pendidikan::insert($pendidikan);
        }
    }
}
