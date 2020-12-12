<?php

use Illuminate\Database\Seeder;

class LichChieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('lich_chieus')->insert([
            ['phim_id' => 1, 'thoigianchieu_id' => 1,'rap_id'=>1,'gia_id'=>1,'TrangThai'=>1],
            ['phim_id' => 2, 'thoigianchieu_id' => 1,'rap_id'=>2,'gia_id'=>2,'TrangThai'=>1],
            ['phim_id' => 3, 'thoigianchieu_id' => 2,'rap_id'=>2,'gia_id'=>2,'TrangThai'=>1],
         
           
        ]);
    }
}
