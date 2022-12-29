<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id')->after('id');
            $table->unsignedBigInteger('jenis_kelamin_id')->after('role_id');
            $table->unsignedBigInteger('agama_id')->after('jenis_kelamin_id');
            $table->unsignedBigInteger('pendidikan_id')->after('agama_id');
            $table->unsignedBigInteger('jabatan_id')->after('pendidikan_id');
            $table->unsignedBigInteger('divisi_id')->after('jabatan_id');
            $table->foreign('role_id')->references('id')->on('roles')->restrictOnDelete()->restrictOnUpdate();
            $table->foreign('jenis_kelamin_id')->references('id')->on('jenis_kelamins')->restrictOnDelete()->restrictOnUpdate();
            $table->foreign('agama_id')->references('id')->on('agamas')->restrictOnDelete()->restrictOnUpdate();
            $table->foreign('pendidikan_id')->references('id')->on('pendidikans')->restrictOnDelete()->restrictOnUpdate();
            $table->foreign('jabatan_id')->references('id')->on('jabatans')->restrictOnDelete()->restrictOnUpdate();
            $table->foreign('divisi_id')->references('id')->on('divisis')->restrictOnDelete()->restrictOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('role_id');
            $table->dropColumn('role_id');
            $table->dropForeign('jenis_kelamin_id');
            $table->dropColumn('jenis_kelamin_id');
            $table->dropForeign('agama_id');
            $table->dropColumn('agama_id');
            $table->dropForeign('pendidikan_id');
            $table->dropColumn('pendidikan_id');
            $table->dropForeign('jabatan_id');
            $table->dropColumn('jabatan_id');
            $table->dropForeign('divisi_id');
            $table->dropColumn('divisi_id');
        });
    }
}
