<?php

use Illuminate\Database\Seeder;

class BigAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('big_admins')->insert([
            ["name"=>"Tô Minh Hải"],

        ]);
    }
}
