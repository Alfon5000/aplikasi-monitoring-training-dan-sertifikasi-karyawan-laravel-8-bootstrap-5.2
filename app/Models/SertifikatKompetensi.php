<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SertifikatKompetensi extends Model
{
    use HasFactory;

    public static $status_sertifikat = ['Berlaku', 'Kadaluarsu'];

    public static $status_validasi = ['Belum Divalidasi', 'Valid', 'Tidak Valid'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sertifikasi()
    {
        return $this->belongsTo(Sertifikasi::class);
    }
}
