<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ves', function (Blueprint $table) {
            $table->increments('id');
            $table->double('Gia')->unsigned();
            $table->integer('lichchieu_id')->unsigned();
            $table->foreign('lichchieu_id')->references('id')->on('lich_chieus');
            $table->integer('ghe_id')->unsigned();
            $table->foreign('ghe_id')->references('id')->on('ghes');
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
        Schema::dropIfExists('ves');
    }
}
