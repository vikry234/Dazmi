<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaranasTable extends Migration
{
    public function up()
    {
        Schema::create('saranas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('image');
            $table->text('desc');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('saranas');
    }
}
