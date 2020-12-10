<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phims', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TenPhim')->nullable(false);
            $table->integer('TrangThai')->default(1);
            

            
            $table->datetime('NgayDKChieu');
            $table->datetime('NgayKetThuc');
            $table->integer('ThoiLuong');
            $table->string('HinhAnh');
            
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
        Schema::dropIfExists('phims');
    }
}
