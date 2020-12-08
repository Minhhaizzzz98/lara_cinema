<?php

use Illuminate\Database\Seeder;

class GheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ghes')->insert([
            ['rap_id'=>1,'TrangThai' => 1],
            ['rap_id'=>2,'TrangThai' => 1],
            ['rap_id'=>2,'TrangThai' => 1],
            ['rap_id'=>2,'TrangThai' => 1],
        ]);
    }
}
