<?php

use Illuminate\Database\Seeder;

class SuatChieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('suat_chieus')->insert([
            ['phim_id' => '1','giochieu_id'=>1,'rap_id'=>1,'GiaSuatChieu'=>0,'NgayChieu'=>'2020-12-02'],
            ['phim_id' => '2','giochieu_id'=>1,'rap_id'=>2,'GiaSuatChieu'=>0,'NgayChieu'=>'2020-12-03'],
            ['phim_id' => '3','giochieu_id'=>2,'rap_id'=>3,'GiaSuatChieu'=>0,'NgayChieu'=>'2020-12-04'],
            ['phim_id' => '4','giochieu_id'=>2,'rap_id'=>2,'GiaSuatChieu'=>0,'NgayChieu'=>'2020-12-05'],
            ['phim_id' => '5','giochieu_id'=>3,'rap_id'=>2,'GiaSuatChieu'=>0,'NgayChieu'=>'2020-12-06'],
        ]);
    }
}
