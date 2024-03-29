<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbsTable extends Migration
{
    public function up()
    {
        Schema::create('bbs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('comment');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bbs');
    }
}
