<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietdonhangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdonhang', function (Blueprint $table) {
            
            $table-> integer ('maddh')->unsigned();
            $table-> integer ('maloai')->unsigned();
            $table->integer('soluong')->unsigned();
            $table-> foreign('maddh')->references('maddh')-> on('dondathang')->onDelete('cascade');
            $table -> foreign('maloai')->references('maloai')->on('loaisanpham')->onDelete('cascade');
            $table-> primary(['maddh', 'maloai']);
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
        Schema::dropIfExists('chitietdonhangs');
    }
}
