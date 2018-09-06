<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBanner extends Migration
{
    
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('image');
            $table->string('url');
            $table->string('titulo');
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('banners');
    }
}
