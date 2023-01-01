<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function metode()
    {
        return $this->belongsTo(Metode::class);
    }

    public function pendaftaranTraining()
    {
        return $this->hasMany(PendaftaranTraining::class);
    }

    public function pelaksanaanTraining()
    {
        return $this->hasMany(PelaksanaanTraining::class);
    }
}
