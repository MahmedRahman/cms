<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleryTable extends Migration
{
    public function up()
    {
        Schema::create('gallery', function (Blueprint $table) {
            $table->integer('id');
            $table->string('image');
            $table->integer('order');
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('gallery');
    }
}
