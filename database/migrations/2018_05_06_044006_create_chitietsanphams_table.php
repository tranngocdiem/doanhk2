<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietsanphamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietsanpham', function (Blueprint $table) {
            $table->integer('maloai')->unsigned();
            $table->integer('magt')->unsigned();
            $table->primary(['maloai','magt']);
            $table->timestamps();
            $table -> foreign('maloai')->references('maloai')->on('loaisanpham')->onDelete('cascade');
            $table -> foreign('magt')->references('magt')->on('giatrithuoctinh')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietsanpham');
    }
}
