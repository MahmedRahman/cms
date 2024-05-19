<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->integer('id');
            $table->string('title');
            $table->text('content');
            $table->string('author');
            $table->datetime('created_at');
            $table->datetime('updated_at');
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog');
    }
}
