<?php

use Illuminate\Database\Seeder;

class ThoiGianChieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('thoi_gian_chieus')->insert([
            ['ThoiGianChieu' => '2020-01-01 14:20:29','TrangThai'=>1],
            ['ThoiGianChieu' => '2020-02-01 14:20:29','TrangThai'=>1],
            ['ThoiGianChieu' => '2020-03-01 14:20:29','TrangThai'=>1],
            ['ThoiGianChieu' => '2020-04-01 14:20:29','TrangThai'=>1],
           
        ]);
    }
}
