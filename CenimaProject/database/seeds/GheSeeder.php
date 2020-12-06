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
            ['TrangThai' => 1],
            ['TrangThai' => 1],
            ['TrangThai' => 1],
            ['TrangThai' => 1],
        ]);
    }
}
