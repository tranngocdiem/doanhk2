<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietlohangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietlohang', function (Blueprint $table) {
            
            $table-> integer ('malo')->unsigned();
            $table-> integer ('maloai')->unsigned();
            $table->integer('soluongnhap')->unsigned();
            $table-> foreign('malo')->references('malo')-> on('lohang')->onDelete('cascade');
            $table -> foreign('maloai')->references('maloai')->on('loaisanpham')->onDelete('cascade');
            $table-> primary(['malo', 'maloai']);
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
        Schema::dropIfExists('chitietlohangs');
    }
}
