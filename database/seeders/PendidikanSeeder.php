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
                'nama' => 'SMA'
            ],
            [
                'nama' => 'SMK'
            ],
            [
                'nama' => 'D3'
            ],
            [
                'nama' => 'S1'
            ],
            [
                'nama' => 'S2'
            ],
            [
                'nama' => 'S3'
            ],
        ];

        foreach ($pendidikans as $pendidikan) {
            Pendidikan::insert($pendidikan);
        }
    }
}
