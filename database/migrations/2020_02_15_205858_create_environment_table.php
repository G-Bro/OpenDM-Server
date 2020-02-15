<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnvironmentTable extends Migration
{
    public function up()
    {
        Schema::create('environments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('code');
        });
    }

    public function down()
    {
        Schema::dropIfExists('environments');
    }
}
