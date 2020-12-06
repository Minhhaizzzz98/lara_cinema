<?php

use Illuminate\Database\Seeder;

class Phim_DienVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phim_dienvien')->insert([
            ['phim_id' => 1, 'dienvien_id' => '1'],
            ['phim_id' => 1, 'dienvien_id' => '3'],
            ['phim_id' => 1, 'dienvien_id' => '4'],

            ['phim_id' => 2, 'dienvien_id' => '2'],
            ['phim_id' => 2, 'dienvien_id' => '3'],
            ['phim_id' => 2, 'dienvien_id' => '5'],
        ]); 
    }
}
