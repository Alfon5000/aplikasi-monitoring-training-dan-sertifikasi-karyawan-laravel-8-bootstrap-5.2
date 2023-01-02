<?php

use App\Models\UjianSertifikasi;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUjianSertifikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ujian_sertifikasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete()->restrictOnUpdate();
            $table->foreignId('sertifikasi_id');
            $table->foreign('sertifikasi_id')->references('id')->on('sertifikasis')->restrictOnDelete()->restrictOnUpdate();
            $table->enum('status', UjianSertifikasi::$status);
            $table->enum('keterangan', UjianSertifikasi::$keterangans);
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
        Schema::dropIfExists('ujian_sertifikasis');
    }
}
