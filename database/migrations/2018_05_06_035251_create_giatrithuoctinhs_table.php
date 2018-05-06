<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiatrithuoctinhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giatrithuoctinh', function (Blueprint $table) {
            $table->increments('magt');
            $table->string('giatri');
            $table->integer('matt')->unsigned();
            $table->foreign('matt')->references('matt')->on('thuoctinh')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giatrithuoctinhs');
    }
}
