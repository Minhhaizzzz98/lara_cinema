<?php

use Illuminate\Database\Seeder;

class QuanLiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quan_lies')->insert([
            ["HoNV"=>"Tô Minh","TenNV"=>"Hải","Anh"=>"no image","ChucVu"=>"1","TenTK"=>"abcabc","password"=>"abcabc","Ma_NQL"=>1,"SDT"=>"0123456789","Email"=>"minhhai123@gmail.com","isLocked"=>0],


        ]);
    }
}
