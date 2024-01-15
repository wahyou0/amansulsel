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
        Schema::create('kordinat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pd', 70)->nullable();
            $table->string('nama_komunitas', 100)->nullable();
            $table->string('kordinat');
            $table->string('image_peta')->nullable();
            $table->longText('deskripsi')->nullable();
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
        Schema::dropIfExists('kordinat');
    }
};
