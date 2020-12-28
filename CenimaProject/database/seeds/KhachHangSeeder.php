<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('khach_hangs')->insert([
            ['HoTen' => 'Huỳnh Văn Bình',
            'TenTK'=>'vanbinh',
            'password'=>Hash::make('0914614144'),
             'DiaChi'=>'Tây Ninh city',
             'SDT'=>'0914614144',
             'Email'=>'vanbinh@gmail.com',
             'TrangThai'=>1,
            ],

            ['HoTen' => 'Nguyễn Trọng Cần',
            'TenTK'=>'trongcan',
            'password'=>Hash::make('386688890'),
             'DiaChi'=>'Tây Ninh city',
             'SDT'=>'0386688890',
             'Email'=>'trongcan@gmail.com',
             'TrangThai'=>1,
            ],

            ['HoTen' => 'Nguyễn Hồng Trọng',
            'TenTK'=>'hongtrong',
            'password'=>Hash::make('491712585'),
             'DiaChi'=>'Tây Ninh city',
             'SDT'=>'0491712585',
             'Email'=>'hongtrong@gmail.com',
             'TrangThai'=>1,
            ],

            ['HoTen' => 'Nguyễn Hoài Phú',
            'TenTK'=>'hoaiphu',
            'password'=>Hash::make('540375477'),
             'DiaChi'=>'Tây Ninh city',
             'SDT'=>'0540375477',
             'Email'=>'hoaiphu@gmail.com',
             'TrangThai'=>1,
            ],

            ['HoTen' => 'Nguyễn Thị Ngọc Duyên',
            'TenTK'=>'ngocduyen',
            'password'=>Hash::make('386388640'),
             'DiaChi'=>'Tây Ninh city',
             'SDT'=>'0386388640',
             'Email'=>'ngocduyen@gmail.com',
             'TrangThai'=>1,
            ],

            ['HoTen' => 'Nguyễn Trọng Phước',
            'TenTK'=>'trongphuoc',
            'password'=>Hash::make('500116195'),
             'DiaChi'=>'Tây Ninh city',
             'SDT'=>'0500116195',
             'Email'=>'trongphuoc@gmail.com',
             'TrangThai'=>1,
            ],

       ]);
    }
}
