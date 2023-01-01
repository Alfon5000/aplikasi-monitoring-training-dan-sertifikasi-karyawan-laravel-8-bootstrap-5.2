<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            JenisKelaminSeeder::class,
            AgamaSeeder::class,
            PendidikanSeeder::class,
            JabatanSeeder::class,
            DivisiSeeder::class,
            // UserSeeder::class,
            // TrainingSeeder::class,
            // SertifikasiSeeder::class,
        ]);
    }
}
