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
            ['TenRap' => 'CGV Lý Chính Thắng', 'chinhanh_id' => 1,'TrangThai'=>1],
            ['TenRap' => 'CGV Nam Kì Khởi Nghĩa', 'chinhanh_id' => 5,'TrangThai'=>1],
            ['TenRap' => 'CGV Trường Chinh', 'chinhanh_id' => 2,'TrangThai'=>1],
            ['TenRap' => 'CGV Hàm Nghi', 'chinhanh_id' => 3,'TrangThai'=>1],
           
        ]);
    }
}
