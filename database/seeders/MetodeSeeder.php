<?php

namespace Database\Seeders;

use App\Models\Metode;
use Illuminate\Database\Seeder;

class MetodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $metodes = [
            ['nama' => 'Offline'],
            ['nama' => 'Online']
        ];

        foreach ($metodes as $metode) {
            Metode::insert($metode);
        }
    }
}
