<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static $jenis_kelamins = ['Pria', 'Wanita'];
    public static $agamas = ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu'];
    public static $pendidikans = ['SMA', 'SMK', 'D3', 'S1', 'S2', 'S3'];
    public static $divisis = ['Keuangan', 'Pemasaran', 'Penjualan', 'Personalia', 'Teknologi Informasi'];
    public static $jabatans = ['Staff', 'Supervisor', 'Asisten Manajer', 'Manajer', 'Direktur'];
    public static $roles = ['Admin', 'Karyawan'];

    public function pendaftaranTraining()
    {
        return $this->hasMany(PendaftaranTraining::class);
    }

    public function pendaftaranSertifikasi()
    {
        return $this->hasMany(PendaftaranSertifikasi::class);
    }

    public function pelaksanaanTraining()
    {
        return $this->hasMany(PelaksanaanTraining::class);
    }

    public function ujianSertifikasi()
    {
        return $this->hasMany(UjianSertifikasi::class);
    }

    public function sertifikatTraining()
    {
        return $this->hasMany(SertifikatTraining::class);
    }

    public function sertifikatKompetensi()
    {
        return $this->hasMany(SertifikatKompetensi::class);
    }
}
