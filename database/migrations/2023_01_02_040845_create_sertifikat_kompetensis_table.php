<?php

use App\Models\SertifikatKompetensi;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSertifikatKompetensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertifikat_kompetensis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete()->restrictOnUpdate();
            $table->foreignId('sertifikasi_id');
            $table->foreign('sertifikasi_id')->references('id')->on('sertifikasis')->restrictOnDelete()->restrictOnUpdate();
            $table->string('no_sertifikat');
            $table->date('tanggal_terbit');
            $table->date('tanggal_kadaluarsa');
            $table->enum('status_validasi', SertifikatKompetensi::$status_validasi);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sertifikat_kompetensis');
    }
}
