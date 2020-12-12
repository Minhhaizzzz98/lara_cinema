<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiNhanhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_nhanhs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TenChiNhanh');
            $table->string('DiaChi');
            $table->integer('SoLuongRap');
            $table->string('SDT');
            $table->unsignedBigInteger('MaNV');
            $table->integer('TrangThai')->default(1);
            $table->timestamps();

            $table->foreign('MaNV')->references('MaNV')->on('nhan_viens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_nhanhs');
    }
}
