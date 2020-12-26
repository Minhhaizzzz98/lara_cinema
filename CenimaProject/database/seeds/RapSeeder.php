<?php

use Illuminate\Database\Seeder;

class RapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('raps')->insert([
            ['TenRap' => 'CGV Lý Chính Thắng', 'DiaChi' => 'Lý Chính Thắng', 'SDT' => '11111', 'TrangThai' => 1],
            ['TenRap' => 'CGV Nam Kỳ Khởi Nghĩa', 'DiaChi' => 'Nam Kỳ Khởi Nghĩa', 'SDT' => '11111', 'TrangThai' => 1],
            ['TenRap' => 'CGV Huỳnh Thúc Kháng', 'DiaChi' => 'Huỳnh Thúc Kháng', 'SDT' => '11111', 'TrangThai' => 1],
           
        ]);
    }
}
