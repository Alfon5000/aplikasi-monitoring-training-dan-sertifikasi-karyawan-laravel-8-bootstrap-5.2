<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPelaksanaan extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function pelaksanaanTraining()
    {
        return $this->hasMany(PelaksanaanTraining::class);
    }

    public function ujianSertifikasi()
    {
        return $this->hasMany(UjianSertifikasi::class);
    }
}
