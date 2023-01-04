<?php

namespace Database\Seeders;

use App\Models\Sertifikasi;
use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class SertifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create('id_ID');

        $sertifikasis = [
            [
                'nama' => 'Back End Developer',
                'bidang' => 'Web Programming',
                'metode' => Arr::random(Sertifikasi::$metodes),
                'tanggal_ujian' => $faker->date(),
                'alamat' => $faker->streetAddress(),
                'kota' => $faker->city(),
                'provinsi' => $faker->state(),
                'kuota' => Arr::random([10, 20, 30, 40, 50]),
                'deskripsi' => 'Menjadi Back End Developer',
                'gambar' => 'backend.png'
            ],
            [
                'nama' => 'Machine Learning Engineer',
                'bidang' => 'Machine Learning',
                'metode' => Arr::random(Sertifikasi::$metodes),
                'tanggal_ujian' => $faker->date(),
                'alamat' => $faker->streetAddress(),
                'kota' => $faker->city(),
                'provinsi' => $faker->state(),
                'kuota' => Arr::random([10, 20, 30, 40, 50]),
                'deskripsi' => 'Menjadi Machine Learning Engineer',
                'gambar' => 'ml.png'
            ],
            [
                'nama' => 'Fullstack Web Developer',
                'bidang' => 'Web Programming',
                'metode' => Arr::random(Sertifikasi::$metodes),
                'tanggal_ujian' => $faker->date(),
                'alamat' => $faker->streetAddress(),
                'kota' => $faker->city(),
                'provinsi' => $faker->state(),
                'kuota' => Arr::random([10, 20, 30, 40, 50]),
                'deskripsi' => 'Menjadi Fullstack Web Developer',
                'gambar' => 'fullstack.png'
            ],
            [
                'nama' => 'Android Developer',
                'bidang' => 'Mobile Programming',
                'metode' => Arr::random(Sertifikasi::$metodes),
                'tanggal_ujian' => $faker->date(),
                'alamat' => $faker->streetAddress(),
                'kota' => $faker->city(),
                'provinsi' => $faker->state(),
                'kuota' => Arr::random([10, 20, 30, 40, 50]),
                'deskripsi' => 'Menjadi Android Developer',
                'gambar' => 'android.png'
            ],
            [
                'nama' => 'Front End Developer',
                'bidang' => 'Web Programming',
                'metode' => Arr::random(Sertifikasi::$metodes),
                'tanggal_ujian' => $faker->date(),
                'alamat' => $faker->streetAddress(),
                'kota' => $faker->city(),
                'provinsi' => $faker->state(),
                'kuota' => Arr::random([10, 20, 30, 40, 50]),
                'deskripsi' => 'Menjadi Front End Developer',
                'gambar' => 'frontend.png'
            ],
            [
                'nama' => 'DevOps Engineer',
                'bidang' => 'Development & Operation',
                'metode' => Arr::random(Sertifikasi::$metodes),
                'tanggal_ujian' => $faker->date(),
                'alamat' => $faker->streetAddress(),
                'kota' => $faker->city(),
                'provinsi' => $faker->state(),
                'kuota' => Arr::random([10, 20, 30, 40, 50]),
                'deskripsi' => 'Menjadi DevOps Engineer',
                'gambar' => 'devops.png'
            ],
        ];

        foreach ($sertifikasis as $sertifikasi) {
            Sertifikasi::create($sertifikasi);
        }
        // Sertifikasi::factory(10)->create();
    }
}
