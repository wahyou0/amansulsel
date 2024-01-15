<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan_aman', function (Blueprint $table) {
            $table->id();
            $table->string('tempat');
            $table->string('tahun');
            $table->string('pelaksana');
            $table->string('nama_kegiatan');
            $table->string('cek_tahun_kegiatan');
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
        Schema::dropIfExists('kegiatan_aman');
    }
};
