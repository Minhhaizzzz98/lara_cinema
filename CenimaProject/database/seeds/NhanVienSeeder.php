<?php

use Illuminate\Database\Seeder;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nhan_viens')->insert([
            ["HoNV"=>"Tô Minh","TenNV"=>"Hải","Anh"=>"no image","ChucVu"=>"2","TenTK"=>"abcdef","password"=>"abcabc","Ma_NQL"=>1,"SDT"=>"0987654321","Email"=>"quoctrong@gmail.com","isLocked"=>0],


        ]);
    }
}
