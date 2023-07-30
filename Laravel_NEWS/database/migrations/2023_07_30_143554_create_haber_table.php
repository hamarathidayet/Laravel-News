<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHaberTable extends Migration
{
    public function up()
    {
        Schema::create('haber', function (Blueprint $table) {
            $table->id();
            $table->string('baslik', 225);
            $table->string('konu', 5000);
            $table->unsignedBigInteger('haber_kategori_id');
            $table->string('resim', 5000)->nullable();
            $table->string('gazetici_ad_soyad', 5000);
            $table->unsignedBigInteger('gazetici_id');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('haber_kategori_id')->references('id')->on('haber_kategori')->onDelete('cascade');
            $table->foreign('gazetici_id')->references('id')->on('gazetici')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('haber');
    }
}
