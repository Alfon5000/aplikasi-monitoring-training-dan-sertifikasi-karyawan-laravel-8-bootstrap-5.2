<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUjianSertifikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ujian_sertifikasis', function (Blueprint $table) {
            $table->foreignId('user_id')->after('id');
            $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete()->restrictOnUpdate();
            $table->foreignId('sertifikasi_id')->after('user_id');
            $table->foreign('sertifikasi_id')->references('id')->on('sertifikasis')->restrictOnDelete()->restrictOnUpdate();
            $table->foreignId('status_pelaksanaan_id')->after('sertifikasi_id');
            $table->foreign('status_pelaksanaan_id')->references('id')->on('status_pelaksanaans')->restrictOnDelete()->restrictOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ujian_sertifikasis', function (Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropColumn('user_id');
            $table->dropForeign('sertifikasi_id');
            $table->dropColumn('sertifikasi_id');
            $table->dropForeign('status_pelaksanaan_id');
            $table->dropColumn('status_pelaksanaan_id');
        });
    }
}
