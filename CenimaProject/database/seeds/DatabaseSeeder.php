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
            PhimSeeder::class,
            DienVienSeeder::class,
            Phim_DienVienSeeder::class,
            GheSeeder::class,
            ChucVuSeeder::class,
           // NhanVienSeeder::class

        ]);
    }
}
