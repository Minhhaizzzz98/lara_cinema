<?php

use Illuminate\Database\Seeder;

class GiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('gias')->insert([
            ['DonGia' => '15000', 'LoaiGia' => 'Thường','TrangThai'=>1],
            ['DonGia' => '100000', 'LoaiGia' => 'Vip','TrangThai'=>1],
           
        ]);
    }
}
