<?php

use App\Rap;
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

            // GioiHanTuoiSeeder::class,
            // PhimSeeder::class,
            // DienVienSeeder::class,

            // ChucVuSeeder::class,
            // Phim_DienVienSeeder::class,


            // Phim_TheLoaiSeeder::class,

            // ChiNhanhSeeder::class,
            // GiaSeeder::class,
            // ThoiGianChieuSeeder::class,
            // RapSeeder::class,
            // LichChieuSeeder::class,
            // GheSeeder::class,
            // VeSeeder::class,

            LoaiTGChieuSeeder::class,
            GioChieuSeeder::class,
            // SuatChieuSeeder::class,

            LoaiPhimSeeder::class,
            PhimSeeder::class,
            DienVienSeeder::class,
            Phim_DienVienSeeder::class,
            // GheSeeder::class,
            KhachHangSeeder::class,

            // ViTriSeeder::class,


            // seed rạp, phòng, ghế
            RapSeeder::class,
            PhongSeeder::class,
            GheSeeder::class,

            ChucVuSeeder::class,
            NhanVienSeeder::class,
            //tiếp theo

            TinhSeeder::class,
            
        ]);
    }
}
