<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDondathangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dondathang', function (Blueprint $table) {
            $table->increments('maddh');
            $table->datetime('ngaydat')->nullable();
            $table->datetime('ngaygiao')->nullable();
            $table->string('nguoinhan')->nullable();
            $table->integer('sdt')->unsigned()->nullable();
            $table->string('diachigiao')->nullable();
            $table->integer('trangthai')->default('0');
            $table->integer('matk')->unsigned();
            $table->foreign('matk')->references('matk')->on('taikhoan')->onDelete('cascade');
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
        Schema::dropIfExists('dondathang');
    }
}
