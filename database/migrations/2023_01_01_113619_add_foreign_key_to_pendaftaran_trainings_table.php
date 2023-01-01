<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToPendaftaranTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pendaftaran_trainings', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');
            $table->unsignedBigInteger('training_id')->after('user_id');
            $table->unsignedBigInteger('status_pendaftaran_id')->after('training_id');
            $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete()->restrictOnUpdate();
            $table->foreign('training_id')->references('id')->on('trainings')->restrictOnDelete()->restrictOnUpdate();
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
        Schema::table('pendaftaran_trainings', function (Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropColumn('user_id');
            $table->dropForeign('training_id');
            $table->dropColumn('training_id');
            $table->dropForeign('status_pendaftaran_id');
            $table->dropColumn('status_pendaftaran_id');
        });
    }
}
