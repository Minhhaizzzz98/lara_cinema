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
             ['HoNV' => 'John','Anh'=>'no anh','TenNV'=>'Wick','ChucVu'=>1,'TenTK'=>'johnwick','password'=>'gfghfhfgh', 'Ma_NQL' => 1,'NgSinh'=>'2020-12-01','DiaChi'=>'USA','SDT'=>'43432234','Email'=>'john@gmail.com','isLocked'=>1,'isBigAdmin'=>2],
            
        ]);
    }
    
}
