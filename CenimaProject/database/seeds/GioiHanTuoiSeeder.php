<?php

use Illuminate\Database\Seeder;

class GioiHanTuoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('gioi_han_tuoi')->insert([
            ['TenGioiHan' => 'Trên 16 tuổi','TrangThai'=>1],
            ['TenGioiHan' => 'Trên 18 tuổi','TrangThai'=>1],
            ['TenGioiHan' => 'Trên 10 tuổi','TrangThai'=>1],
            ['TenGioiHan' => 'Trên 5 tuổi','TrangThai'=>1],
        ]);
    }
}
