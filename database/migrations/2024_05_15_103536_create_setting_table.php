<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingTable extends Migration
{
    public function up()
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->integer('id');
            $table->text('setting_key');
            $table->text('setting_value');
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('setting');
    }
}
