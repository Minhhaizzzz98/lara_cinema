<?php

use Illuminate\Database\Seeder;

class PhimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phims')->insert([
            ['TenPhim' => 'John Wick 1','NgayDKChieu'=>'2020-12-01 14:20:29','NgayKetThuc'=>'2020-01-01 14:20:29','ThoiLuong'=>120,'HinhAnh'=>'no image', 'TrangThai' => 1],
            ['TenPhim' => 'John Wick 1','NgayDKChieu'=>'2020-12-01 14:20:29','NgayKetThuc'=>'2020-01-01 14:20:29','ThoiLuong'=>120,'HinhAnh'=>'no image', 'TrangThai' => 1],
            ['TenPhim' => 'John Wick 1','NgayDKChieu'=>'2020-12-01 14:20:29','NgayKetThuc'=>'2020-01-01 14:20:29','ThoiLuong'=>120,'HinhAnh'=>'no image', 'TrangThai' => 1],
        ]);
    }
}
