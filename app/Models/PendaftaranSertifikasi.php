<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranSertifikasi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $status = ['Menunggu Konfirmasi', 'Disetujui', 'Ditolak'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sertifikasi()
    {
        return $this->belongsTo(Sertifikasi::class);
    }
}
