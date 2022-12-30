<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

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

        return [
            'role_id' => 2,
            'jenis_kelamin_id' => random_int(1, 2),
            'agama_id' => random_int(1, 6),
            'pendidikan_id' => random_int(1, 6),
            'jabatan_id' => random_int(1, 5),
            'divisi_id' => random_int(1, 5),
            'nama' => $faker->name(),
            'nik' => random_int(0000000001, 9999999999),
            'tempat_lahir' => $faker->city(),
            'tanggal_lahir' => $faker->date(),
            'alamat' => $faker->streetAddress(),
            'kota' => $faker->city(),
            'provinsi' => $faker->state(),
            'telepon' => $faker->phoneNumber(),
            'email' => $faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
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
