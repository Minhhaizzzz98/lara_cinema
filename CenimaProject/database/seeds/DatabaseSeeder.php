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
           
            // LoaiPhimSeeder::class,
            // Phim_TheLoaiSeeder::class,
            
            // ChiNhanhSeeder::class,
            // GiaSeeder::class,
            // ThoiGianChieuSeeder::class,
            // RapSeeder::class,
            // LichChieuSeeder::class,
            // GheSeeder::class,
            // VeSeeder::class,

            // PhimSeeder::class,
            // DienVienSeeder::class,
            // Phim_DienVienSeeder::class,
            // GheSeeder::class,


            // ViTriSeeder::class,


            // seed rạp, phòng, ghế
            RapSeeder::class,
            PhongSeeder::class,
            GheSeeder::class,

            //tiếp theo

        ]);
    }
}
