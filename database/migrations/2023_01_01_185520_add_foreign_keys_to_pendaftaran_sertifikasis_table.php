<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPendaftaranSertifikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pendaftaran_sertifikasis', function (Blueprint $table) {
            $table->foreignId('user_id')->after('id');
            $table->foreignId('sertifikasi_id')->after('user_id');
            $table->foreignId('status_pendaftaran_id')->after('sertifikasi_id');
            $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete()->restrictOnUpdate();
            $table->foreign('sertifikasi_id')->references('id')->on('sertifikasis')->restrictOnDelete()->restrictOnUpdate();
            $table->foreign('status_pendaftaran_id')->references('id')->on('status_pendaftarans')->restrictOnDelete()->restrictOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pendaftaran_sertifikasis', function (Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropColumn('user_id');
            $table->dropForeign('sertifikasi_id');
            $table->dropColumn('sertifikasi_id');
            $table->dropForeign('status_pendaftaran_id');
            $table->dropColumn('status_pendaftaran_id');
        });
    }
}
