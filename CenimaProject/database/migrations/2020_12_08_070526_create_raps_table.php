<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TenRap');
            
            $table->integer('chinhanh_id')->unsigned();
            $table->foreign('chinhanh_id')->references('id')->on('chi_nhanhs')->onDelete('cascade');

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
        Schema::dropIfExists('raps');
    }
}
