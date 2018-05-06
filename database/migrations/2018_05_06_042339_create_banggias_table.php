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
            $table->float('gia');
            $table->integer('masp')->unsigned();
            $table->integer('makm')->unsigned();
            $table->foreign('masp')->references('masp')->on('sanpham')->onDelete('cascade');
            $table->foreign('makm')->references('makm')->on('chuongtrinhkhuyenmai')->onDelete('cascade');
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
        Schema::dropIfExists('banggias');
    }
}
