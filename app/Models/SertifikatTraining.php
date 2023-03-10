<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SertifikatTraining extends Model
{
    use HasFactory;

    public static $status_validasi = ['Belum Divalidasi', 'Valid', 'Tidak Valid'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}
