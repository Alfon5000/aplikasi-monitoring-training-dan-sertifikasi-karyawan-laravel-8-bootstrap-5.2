<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', User::$jenis_kelamins);
            $table->enum('agama', User::$agamas);
            $table->text('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->enum('pendidikan', User::$pendidikans);
            $table->enum('divisi', User::$divisis);
            $table->enum('jabatan', User::$jabatans);
            $table->string('telepon');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', User::$roles);
            $table->text('foto');
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
