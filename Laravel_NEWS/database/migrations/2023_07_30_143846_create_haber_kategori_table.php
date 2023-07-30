<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHaberKategoriTable extends Migration
{
    public function up()
    {
        Schema::create('kategori', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_ad', 20);
            $table->string('kategori_logo', 5000)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('haber_kategori');
    }
}

