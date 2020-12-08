<?php

use Illuminate\Database\Seeder;

class ChiNhanhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('chi_nhanhs')->insert([
            ['TenChiNhanh' => 'Số 1', 'DiaChi' => "Số 1, Lý Chính Thắng, Quận 3",'SDT'=>'043434343','TrangThai'=>1],
            ['TenChiNhanh' => 'Số 2', 'DiaChi' => "Số 1, Trường Chinh, Quận Tân Bình",'SDT'=>'043434343','TrangThai'=>1],
            ['TenChiNhanh' => 'Số 3', 'DiaChi' => "Số 1, Hàm Nghi, Quận 1",'SDT'=>'043434343','TrangThai'=>1],
            ['TenChiNhanh' => 'Số 4', 'DiaChi' => "Số 1, Huỳnh Thúc Kháng, Quận 1",'SDT'=>'043434343','TrangThai'=>1],
            ['TenChiNhanh' => 'Số 5', 'DiaChi' => "Số 1, Nam Kỳ Khởi Nghĩa, Quận 3",'SDT'=>'043434343','TrangThai'=>1],
        ]);
    }
}
