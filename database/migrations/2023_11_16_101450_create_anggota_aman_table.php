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
        Schema::create('anggota_aman', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_anggota')->nullable();
            $table->string('pengesahan')->nullable();
            $table->string('pengurus_daerah')->nullable();
            $table->string('komunitas')->nullable();
            $table->integer('luas_indikatif')->nullable();
            $table->integer('luas_pemetaan')->nullable();
            $table->integer('jml_laki_laki')->nullable();
            $table->integer('jml_perempuan')->nullable();
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
        Schema::dropIfExists('anggota_aman');
    }
};
