<?php

use Illuminate\Database\Seeder;

class PhimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phims')->insert([
            ['TenPhim' => 'John Wick 1', 'TrangThai' => 1],
            ['TenPhim' => 'John Wick 2', 'TrangThai' => 1],
            ['TenPhim' => 'John Wick 3', 'TrangThai' => 1],
        ]);
    }
}
