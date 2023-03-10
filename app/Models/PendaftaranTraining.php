<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranTraining extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $status = ['Menunggu Konfirmasi', 'Disetujui', 'Ditolak'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}
