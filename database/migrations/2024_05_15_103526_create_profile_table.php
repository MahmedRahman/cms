<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->integer('id');
            $table->string('image')->nullable();
            $table->string('title');
            $table->text('content')->nullable();
            $table->string('url')->nullable();
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
