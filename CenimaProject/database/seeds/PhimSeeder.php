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
            ['TenPhim' => 'John Wick 1','NgayDKChieu'=>'2020-12-01','NgayKetThuc'=>'2020-01-01','ThoiLuong'=>120,'HinhAnh'=>'http://localhost:8000/data/phim_tiger.jpg','Trailer'=>'https://www.youtube.com/watch?v=dradHKlm5Ws&list=RDdradHKlm5Ws&start_radio=1','DaoDien'=>'Nguyễn Quốc Trọng','loaiphim_id'=>1,'QuocGia'=>'Mỹ','GioiHanTuoi'=>'Trên 18 tuổi','GiaPhim'=>10000, 'TrangThai' => 1],
            ['TenPhim' => 'John Wick 2','NgayDKChieu'=>'2020-12-01','NgayKetThuc'=>'2020-01-01','ThoiLuong'=>120,'HinhAnh'=>'http://localhost:8000/data/phim_tiger.jpg','Trailer'=>'https://www.youtube.com/watch?v=dradHKlm5Ws&list=RDdradHKlm5Ws&start_radio=1','DaoDien'=>'Nguyễn Quốc Trung','loaiphim_id'=>1,'QuocGia'=>'Mỹ','GioiHanTuoi'=>'Trên 18 tuổi','GiaPhim'=>10000, 'TrangThai' => 1],
            ['TenPhim' => 'John Wick 3','NgayDKChieu'=>'2020-12-01','NgayKetThuc'=>'2020-01-01','ThoiLuong'=>120,'HinhAnh'=>'http://localhost:8000/data/phim_tiger.jpg','Trailer'=>'https://www.youtube.com/watch?v=dradHKlm5Ws&list=RDdradHKlm5Ws&start_radio=1','DaoDien'=>'Nguyễn Quốc Quốc','loaiphim_id'=>1,'QuocGia'=>'Mỹ','GioiHanTuoi'=>'Trên 18 tuổi','GiaPhim'=>10000, 'TrangThai' => 1],
            ['TenPhim' => 'John Wick 5','NgayDKChieu'=>'2020-12-01','NgayKetThuc'=>'2020-01-01','ThoiLuong'=>120,'HinhAnh'=>'http://localhost:8000/data/phim_tiger.jpg','Trailer'=>'https://www.youtube.com/watch?v=dradHKlm5Ws&list=RDdradHKlm5Ws&start_radio=1','DaoDien'=>'Nguyễn Minh Anh','loaiphim_id'=>1,'QuocGia'=>'Mỹ','GioiHanTuoi'=>'Trên 18 tuổi','GiaPhim'=>10000, 'TrangThai' => 1],
            ['TenPhim' => 'John Wick 6','NgayDKChieu'=>'2020-12-01','NgayKetThuc'=>'2020-01-01','ThoiLuong'=>120,'HinhAnh'=>'http://localhost:8000/data/phim_tiger.jpg','Trailer'=>'https://www.youtube.com/watch?v=dradHKlm5Ws&list=RDdradHKlm5Ws&start_radio=1','DaoDien'=>'Nguyễn Quốc Anh','loaiphim_id'=>1,'QuocGia'=>'Mỹ','GioiHanTuoi'=>'Trên 18 tuổi','GiaPhim'=>10000, 'TrangThai' => 1],
            ['TenPhim' => 'John Wick 7','NgayDKChieu'=>'2020-12-01','NgayKetThuc'=>'2020-01-01','ThoiLuong'=>120,'HinhAnh'=>'http://localhost:8000/data/phim_tiger.jpg','Trailer'=>'https://www.youtube.com/watch?v=dradHKlm5Ws&list=RDdradHKlm5Ws&start_radio=1','DaoDien'=>'Nguyễn Quốc Hải','loaiphim_id'=>1,'QuocGia'=>'Mỹ','GioiHanTuoi'=>'Trên 18 tuổi','GiaPhim'=>10000, 'TrangThai' => 1],
            ['TenPhim' => 'John Wick 8','NgayDKChieu'=>'2020-12-01','NgayKetThuc'=>'2020-01-01','ThoiLuong'=>120,'HinhAnh'=>'http://localhost:8000/data/phim_tiger.jpg','Trailer'=>'https://www.youtube.com/watch?v=dradHKlm5Ws&list=RDdradHKlm5Ws&start_radio=1','DaoDien'=>'Nguyễn Quốc Huy','loaiphim_id'=>1,'QuocGia'=>'Mỹ','GioiHanTuoi'=>'Trên 18 tuổi','GiaPhim'=>10000, 'TrangThai' => 1],
            ['TenPhim' => 'John Wick 9','NgayDKChieu'=>'2020-12-01','NgayKetThuc'=>'2020-01-01','ThoiLuong'=>120,'HinhAnh'=>'http://localhost:8000/data/phim_tiger.jpg','Trailer'=>'https://www.youtube.com/watch?v=dradHKlm5Ws&list=RDdradHKlm5Ws&start_radio=1','DaoDien'=>'Nguyễn Quốc Đức','loaiphim_id'=>1,'QuocGia'=>'Mỹ','GioiHanTuoi'=>'Trên 18 tuổi','GiaPhim'=>10000, 'TrangThai' => 1],
            ['TenPhim' => 'John Wick 10','NgayDKChieu'=>'2020-12-01','NgayKetThuc'=>'2020-01-01','ThoiLuong'=>120,'HinhAnh'=>'http://localhost:8000/data/phim_tiger.jpg','Trailer'=>'https://www.youtube.com/watch?v=dradHKlm5Ws&list=RDdradHKlm5Ws&start_radio=1','DaoDien'=>'Nguyễn Quốc Khải','loaiphim_id'=>1,'QuocGia'=>'Mỹ','GioiHanTuoi'=>'Trên 18 tuổi','GiaPhim'=>10000, 'TrangThai' => 1],
            ['TenPhim' => 'John Wick 11','NgayDKChieu'=>'2020-12-01','NgayKetThuc'=>'2020-01-01','ThoiLuong'=>120,'HinhAnh'=>'http://localhost:8000/data/phim_tiger.jpg','Trailer'=>'https://www.youtube.com/watch?v=dradHKlm5Ws&list=RDdradHKlm5Ws&start_radio=1','DaoDien'=>'Nguyễn Quốc Vinh','loaiphim_id'=>1,'QuocGia'=>'Mỹ','GioiHanTuoi'=>'Trên 18 tuổi','GiaPhim'=>10000, 'TrangThai' => 1],
            ['TenPhim' => 'John Wick 12','NgayDKChieu'=>'2020-12-01','NgayKetThuc'=>'2020-01-01','ThoiLuong'=>120,'HinhAnh'=>'http://localhost:8000/data/phim_tiger.jpg','Trailer'=>'https://www.youtube.com/watch?v=dradHKlm5Ws&list=RDdradHKlm5Ws&start_radio=1','DaoDien'=>'Nguyễn Quốc Nguyên','loaiphim_id'=>1,'QuocGia'=>'Mỹ','GioiHanTuoi'=>'Trên 18 tuổi','GiaPhim'=>10000, 'TrangThai' => 1],
            ['TenPhim' => 'John Wick 13','NgayDKChieu'=>'2020-12-01','NgayKetThuc'=>'2020-01-01','ThoiLuong'=>120,'HinhAnh'=>'http://localhost:8000/data/phim_tiger.jpg','Trailer'=>'https://www.youtube.com/watch?v=dradHKlm5Ws&list=RDdradHKlm5Ws&start_radio=1','DaoDien'=>'Nguyễn Quốc Phúc','loaiphim_id'=>1,'QuocGia'=>'Mỹ','GioiHanTuoi'=>'Trên 18 tuổi','GiaPhim'=>10000, 'TrangThai' => 1],
            ['TenPhim' => 'John Wick 14','NgayDKChieu'=>'2020-12-01','NgayKetThuc'=>'2020-01-01','ThoiLuong'=>120,'HinhAnh'=>'http://localhost:8000/data/phim_tiger.jpg','Trailer'=>'https://www.youtube.com/watch?v=dradHKlm5Ws&list=RDdradHKlm5Ws&start_radio=1','DaoDien'=>'Nguyễn Quốc Trà','loaiphim_id'=>1,'QuocGia'=>'Mỹ','GioiHanTuoi'=>'Trên 18 tuổi','GiaPhim'=>10000, 'TrangThai' => 1],
            ['TenPhim' => 'John Wick 15','NgayDKChieu'=>'2020-12-01','NgayKetThuc'=>'2020-01-01','ThoiLuong'=>120,'HinhAnh'=>'http://localhost:8000/data/phim_tiger.jpg','Trailer'=>'https://www.youtube.com/watch?v=dradHKlm5Ws&list=RDdradHKlm5Ws&start_radio=1','DaoDien'=>'Nguyễn Quốc Anh','loaiphim_id'=>1,'QuocGia'=>'Mỹ','GioiHanTuoi'=>'Trên 18 tuổi','GiaPhim'=>10000, 'TrangThai' => 1],
            ['TenPhim' => 'John Wick 16','NgayDKChieu'=>'2020-12-01','NgayKetThuc'=>'2020-01-01','ThoiLuong'=>120,'HinhAnh'=>'http://localhost:8000/data/phim_tiger.jpg','Trailer'=>'https://www.youtube.com/watch?v=dradHKlm5Ws&list=RDdradHKlm5Ws&start_radio=1','DaoDien'=>'Nguyễn Quốc Trọng','loaiphim_id'=>1,'QuocGia'=>'Mỹ','GioiHanTuoi'=>'Trên 18 tuổi','GiaPhim'=>10000,'TrangThai' => 1],
        ]);
    }
}
