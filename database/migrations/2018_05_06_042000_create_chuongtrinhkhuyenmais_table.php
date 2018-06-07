<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChuongtrinhkhuyenmaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuongtrinhkhuyenmai', function (Blueprint $table) {
            $table->increments('makm');
            $table->string('tenkm');
            $table->datetime('ngaybatdau')->nullable();
            $table->datetime('ngayketthuc')->nullable();
            $table->integer('discount');
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
        Schema::dropIfExists('chuongtrinhkhuyenmai');
    }
}
