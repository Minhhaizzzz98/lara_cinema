<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            BigAdminSeeder::class,
            ChucVuSeeder::class,
            PhimSeeder::class,
            DienVienSeeder::class,
            Phim_DienVienSeeder::class,
            LoaiPhimSeeder::class,
            Phim_TheLoaiSeeder::class,
            GioiHanTuoiSeeder::class,
            QuanLiSeeder::class,
            NhanVienSeeder::class,
            GiaSeeder::class,
            ThoiGianChieuSeeder::class,
            ChiNhanhSeeder::class,
            RapSeeder::class,

            GheSeeder::class,
            LichChieuSeeder::class,
            VeSeeder::class,


        ]);
    }
}
