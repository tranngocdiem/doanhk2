<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChudeLoaisanphamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chude_loaisanpham', function (Blueprint $table) {
            $table-> integer ('macd')->unsigned();
            $table-> integer ('maloai')->unsigned();
            $table-> foreign('macd')->references('macd')-> on('chude')->onDelete('cascade');
            $table -> foreign('maloai')->references('maloai')->on('loaisanpham')->onDelete('cascade');
            $table-> primary(['macd', 'maloai']);
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
        Schema::dropIfExists('chude_loaisanpham');
    }
}
