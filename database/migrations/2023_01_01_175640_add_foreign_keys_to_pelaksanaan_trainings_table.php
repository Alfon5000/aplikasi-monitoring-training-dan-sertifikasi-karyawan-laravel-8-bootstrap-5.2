<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPelaksanaanTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pelaksanaan_trainings', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');
            $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete()->restrictOnUpdate();
            $table->unsignedBigInteger('training_id')->after('user_id');
            $table->foreign('training_id')->references('id')->on('trainings')->restrictOnDelete()->restrictOnUpdate();
            $table->unsignedBigInteger('status_pelaksanaan_id')->after('training_id');
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
        Schema::table('pelaksanaan_trainings', function (Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropColumn('user_id');
            $table->dropForeign('training_id');
            $table->dropColumn('training_id');
            $table->dropForeign('status_pelaksanaan_id');
            $table->dropColumn('status_pelaksanaan_id');
        });
    }
}
