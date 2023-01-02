<?php

namespace Database\Factories;

use App\Models\Sertifikasi;
use Illuminate\Support\Arr;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class SertifikasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = FakerFactory::create('id_ID');

        return [
            'nama' => $faker->words(),
            'bidang' => $faker->words(),
            'metode' => Arr::random([Sertifikasi::$metodes]),
            // 'tanggal_ujian' => $faker->date(),
            'alamat' => $faker->streetAddress(),
            'kota' => $faker->city(),
            'provinsi' => $faker->state(),
            'kuota' => random_int(10, 50),
            'deskripsi' => $faker->paragraph(),
            'gambar' => $faker->word()
        ];
    }
}
