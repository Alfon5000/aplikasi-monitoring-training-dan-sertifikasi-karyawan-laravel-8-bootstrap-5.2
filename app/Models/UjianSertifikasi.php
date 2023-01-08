<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UjianSertifikasi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $status = ['Belum Mulai', 'Sedang Dilaksanakan', 'Selesai'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sertifikasi()
    {
        return $this->belongsTo(Sertifikasi::class);
    }
}
