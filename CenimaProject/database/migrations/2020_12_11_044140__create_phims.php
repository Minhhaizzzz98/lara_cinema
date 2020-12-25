<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhims extends Migration
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
            $table->date('NgayDKChieu');
            $table->date('NgayKetThuc');
            $table->integer('ThoiLuong');
            $table->string('HinhAnh');
            $table->string('Trailer');
            $table->string('DaoDien');
            $table->string('QuocGia');
            $table->string('GioiHanTuoi');
            $table->double('GiaPhim'); 
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
        Schema::dropIfExists('phims');
    }
}
