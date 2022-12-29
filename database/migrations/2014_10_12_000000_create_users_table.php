<?php

use App\Models\Role;
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
            $table->enum('jenis_kelamin', ['Pria', 'Wanita']);
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']);
            $table->string('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->enum('pendidikan', ['SMA', 'SMK', 'D3', 'S1', 'S2', 'S3']);
            $table->enum('jabatan', ['Staff', 'Supervisor', 'Asisten Manajer', 'Manajer', 'Direktur']);
            $table->enum('divisi', ['Keuangan', 'Pemasaran', 'Penjualan', 'Personalia', 'Teknologi Informasi']);
            $table->string('telepon');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
