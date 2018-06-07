<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanggiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banggia', function (Blueprint $table) {
            $table->increments('magia');
            $table->double('gia');
            $table->integer('maloai')->unsigned();
            $table->integer('makm')->unsigned();
            $table->foreign('maloai')->references('maloai')->on('loaisanpham')->onDelete('cascade');
            $table->foreign('makm')->references('makm')->on('chuongtrinhkhuyenmai')->onDelete('cascade');
            $table->integer('isDeleted')->default('0');
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
        Schema::dropIfExists('banggia');
    }
}
