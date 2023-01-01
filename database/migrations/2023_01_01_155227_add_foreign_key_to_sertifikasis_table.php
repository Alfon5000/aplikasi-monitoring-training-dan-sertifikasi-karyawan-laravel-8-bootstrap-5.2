<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToSertifikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sertifikasis', function (Blueprint $table) {
            $table->unsignedBigInteger('metode_id')->after('id');
            $table->foreign('metode_id')->references('id')->on('metodes')->restrictOnDelete()->restrictOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sertifikasis', function (Blueprint $table) {
            $table->dropForeign('metode_id');
            $table->dropColumn('metode_id');
        });
    }
}
