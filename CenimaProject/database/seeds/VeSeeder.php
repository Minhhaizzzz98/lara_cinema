<?php

use Illuminate\Database\Seeder;

class VeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ves')->insert([
            ['Gia' => 10000, 'lichchieu_id' => 1,'ghe_id'=>1,'TrangThai'=>1],
            ['Gia' => 10000, 'lichchieu_id' => 2,'ghe_id'=>2,'TrangThai'=>1],
            ['Gia' => 10000, 'lichchieu_id' => 3,'ghe_id'=>3,'TrangThai'=>1],


        ]);
    }
}
