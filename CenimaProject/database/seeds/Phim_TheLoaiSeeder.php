<?php

use Illuminate\Database\Seeder;

class Phim_TheLoaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('phim_theloai')->insert([
            ['phim_id' => '1','loaiphim_id'=>1],
            ['phim_id' => '2','loaiphim_id'=>2],
            ['phim_id' => '3','loaiphim_id'=>3],
           
        ]);
    }
}
