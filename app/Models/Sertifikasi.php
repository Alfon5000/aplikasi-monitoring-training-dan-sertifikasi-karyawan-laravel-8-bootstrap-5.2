<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikasi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $metodes = ['Offline', 'Online'];

    public function pendaftaranSertifikasi()
    {
        return $this->hasMany(PendaftaranSertifikasi::class);
    }

    public function ujianSertifikasi()
    {
        return $this->hasMany(UjianSertifikasi::class);
    }

    public function sertifikatKompetensi()
    {
        return $this->hasMany(SertifikatKompetensi::class);
    }
}
