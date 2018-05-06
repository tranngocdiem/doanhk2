<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamChudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham_chude', function (Blueprint $table) {
            $table-> integer ('macd')->unsigned();
            $table-> integer ('masp')->unsigned();
            $table-> foreign('macd')->references('macd')-> on('chude')->onDelete('cascade');
            $table -> foreign('masp')->references('masp')->on('sanpham')->onDelete('cascade');
            $table-> primary(['macd', 'masp']);
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
        Schema::dropIfExists('sanpham_chudes');
    }
}
