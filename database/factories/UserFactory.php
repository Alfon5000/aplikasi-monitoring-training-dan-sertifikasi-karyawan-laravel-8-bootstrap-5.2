<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = FakerFactory::create('id_ID');
        $jenis_kelamin = ['Pria', 'Wanita'];
        $agama = ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu'];

        return [
            'nama' => $faker->name(),
            'nik' => random_int(0000000001, 9999999999),
            'tempat_lahir' => $faker->city(),
            'tanggal_lahir' => $faker->date(),
            'jenis_kelamin' => Arr::Random($jenis_kelamin),
            'agama' => Arr::Random($agama),
            'alamat' => $faker->address(),
            'kota' => $faker->city(),
            'provinsi' => $faker->state(),
            'telepon' => $faker->phoneNumber(),
            'email' => $faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
