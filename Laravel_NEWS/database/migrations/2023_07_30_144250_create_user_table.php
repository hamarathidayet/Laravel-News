<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYorumTable extends Migration
{
    public function up()
    {
        Schema::create('yorum', function (Blueprint $table) {
            $table->id();
            $table->string('kullanici_ad', 30);
            $table->string('kullanici_soyad', 30);
            $table->string('yorum', 5000);
            $table->integer('haber_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('yorum');
    }
}
