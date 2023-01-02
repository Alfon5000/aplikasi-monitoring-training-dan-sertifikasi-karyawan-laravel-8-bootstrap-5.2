<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $metodes = ['Offline', 'Online'];

    public function pendaftaranTraining()
    {
        return $this->hasMany(PendaftaranTraining::class);
    }

    public function pelaksanaanTraining()
    {
        return $this->hasMany(PelaksanaanTraining::class);
    }

    public function sertifikatTraining()
    {
        return $this->hasMany(SertifikatTraining::class);
    }
}
