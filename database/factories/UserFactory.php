<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Arr;
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
            'nama' => $faker->name(),
            'nik' => random_int(0000000001, 9999999999),
            'tempat_lahir' => $faker->city(),
            'tanggal_lahir' => $faker->date(),
            'jenis_kelamin' => Arr::random(User::$jenis_kelamins),
            'agama' => Arr::random(User::$agamas),
            'alamat' => $faker->streetAddress(),
            'kota' => $faker->city(),
            'provinsi' => $faker->state(),
            'pendidikan' => Arr::random(User::$pendidikans),
            'divisi' => Arr::random(User::$divisis),
            'jabatan' => Arr::random(User::$jabatans),
            'telepon' => $faker->phoneNumber(),
            'email' => $faker->unique()->safeEmail(),
            'password' => Hash::make('password'),
            'role' => 'Karyawan',
            'foto' => 'foto.jpg'
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
                'email_verified_at' => 'datetime',
            ];
        });
    }
}
