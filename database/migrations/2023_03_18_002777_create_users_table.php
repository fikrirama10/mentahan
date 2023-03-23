<?php

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
            $table->foreignId('id_jabatan')->constrained('tbl_jabatan');
            $table->foreignId('id_presensi')->constrained('tbl_kode_absen');
            $table->string('no_presensi')->nullable();
            $table->string('name');
            $table->string('foto')->nullable();
            $table->string('alamat')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->date('pertama_kerja')->nullable();
            $table->string('email')->unique();
            $table->string('pengabdian')->nullable();
            $table->string('pendidikan')->nullable();
            $table->integer('aktif')->nullable();
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
