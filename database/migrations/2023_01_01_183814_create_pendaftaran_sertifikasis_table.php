<?php

use App\Models\PendaftaranSertifikasi;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranSertifikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_sertifikasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete()->restrictOnUpdate();
            $table->foreignId('sertifikasi_id');
            $table->foreign('sertifikasi_id')->references('id')->on('sertifikasis')->restrictOnDelete()->restrictOnUpdate();
            $table->date('tanggal');
            $table->enum('status', PendaftaranSertifikasi::$status);
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
        Schema::dropIfExists('pendaftaran_sertifikasis');
    }
}
