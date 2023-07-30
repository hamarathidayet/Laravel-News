<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSosyalTable extends Migration
{
    public function up()
    {
        Schema::create('sosyal', function (Blueprint $table) {
            $table->id();
            $table->string('facebook', 20)->nullable();
            $table->string('instagram', 20)->nullable();
            $table->string('twitter', 20)->nullable();
            $table->string('mail', 50)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sosyal');
    }
}

