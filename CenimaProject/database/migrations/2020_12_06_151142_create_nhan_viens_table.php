<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanViensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_viens', function (Blueprint $table) {

                $table->bigIncrements('MaNV');
                $table->string('HoNV');  //
                $table->string('Anh');   //
                $table->string('TenNV');  //
                $table->unsignedBigInteger('ChucVu');  //
                $table->string('TenTK',50)->unique(); //
                $table->string('password');  //
                $table->unsignedBigInteger('Ma_NQL');//
                $table->date('NgSinh')->nullable();
                $table->string('DiaChi')->nullable();
                $table->string('SDT',15)->unique();
                $table->string('Email',100)->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->tinyInteger('isLocked');

                $table->rememberToken();
                $table->timestamps();


                $table->foreign('Ma_NQL')->references('MaNV')->on('quan_lies');

                $table->foreign('ChucVu')->references('MaCV')->on('chuc_vus');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhan_viens');
    }
}
