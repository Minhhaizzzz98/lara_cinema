<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichChieusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lich_chieus', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('phim_id')->unsigned();
            $table->foreign('phim_id')->references('id')->on('phims');
            $table->integer('thoigianchieu_id')->unsigned();
            $table->foreign('thoigianchieu_id')->references('id')->on('thoi_gian_chieus');

            $table->integer('rap_id')->unsigned();
            $table->foreign('rap_id')->references('id')->on('raps');

            $table->integer('gia_id')->unsigned();
            $table->foreign('gia_id')->references('id')->on('gias');

            $table->integer('TrangThai')->default(1);
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
        Schema::dropIfExists('lich_chieus');
    }
}
