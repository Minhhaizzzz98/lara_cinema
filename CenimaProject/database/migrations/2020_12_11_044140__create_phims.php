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
            $table->datetime('NgayDKChieu');
            $table->datetime('NgayKetThuc');
            $table->integer('ThoiLuong');
            $table->string('HinhAnh');
            $table->string('DaoDien');
            $table->double('Gia');
            $table->unsignedBigInteger('gioihantuoi_id');
            $table->foreign('gioihantuoi_id')->references('id')->on('gioi_han_tuoi')->onDelete('cascade');;

            // $table->integer('daodien_id')->unsigned();
            // $table->foreign('daodien_id')->references('id')->on('dao_diens');
            
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
