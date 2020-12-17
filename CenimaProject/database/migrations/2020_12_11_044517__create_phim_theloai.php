<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhimTheloai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('phim_theloai', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedInteger('phim_id');
            $table->foreign('phim_id')->references('id')->on('phims');

            $table->unsignedInteger('loaiphim_id');
            $table->foreign('loaiphim_id')->references('id')->on('loai_phims');

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
        //
        Schema::dropIfExists('phim_theloai');
    }
}
