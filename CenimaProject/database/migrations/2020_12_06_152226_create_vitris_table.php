<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVitrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vitris', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Hang');
            $table->integer('Cot');
            $table->integer('ghe_id')->unsigned();
            $table->foreign('ghe_id')->references('id')->on('ghes')->onDelete('cascade');
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
        Schema::dropIfExists('vitris');
    }
}
