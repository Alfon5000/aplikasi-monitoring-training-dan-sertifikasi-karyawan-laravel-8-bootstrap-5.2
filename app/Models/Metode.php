<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metode extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function training()
    {
        return $this->hasMany(Training::class);
    }

    public function sertifikasi()
    {
        return $this->hasMany(Sertifikasi::class);
    }
}
