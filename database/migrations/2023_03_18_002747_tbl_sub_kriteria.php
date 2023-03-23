<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblSubKriteria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_sub_kriteria', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kriteria')->constrained('tbl_kriteria');
            $table->string('sub_kriteria');
            $table->integer('bobot_sub');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_sub_kriteria');
    }
}
