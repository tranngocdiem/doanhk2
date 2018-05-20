<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(["chude"]);
        
    }

}

class chude extends Seeder
{
    public function run()
    {
        //dữ liệu test để thêm vào database
    	// thêm vào database
    	DB::table("chude")->insert([
    		array("tencd" =>"PHÒNG KHÁCH" ),
            array("tencd" =>"PHÒNG NGỦ"),
            array("tencd" =>"PHÒNG ĂN" ),
            array("tencd" =>"NHÀ BẾP"),
            array("tencd" =>"HÀNG TRANG TRÍ"),]);

       DB::table("sanpham")->insert([
            array("tensp" =>"Bàn ăn" , "trangthai" =>"1"  ),
            array("tensp" =>"Ghế" , "trangthai" =>"1" ),
            array("tensp" =>"Tủ" , "trangthai" =>"1" ),
            array("tensp" =>"Hàng trang trí" , "trangthai" =>"1",),
            array("tensp" =>"Bàn console" , "trangthai" =>"1" ),
            array("tensp" =>"Bếp" , "trangthai" =>"1" ),
            array("tensp" =>"Đèn" , "trangthai" =>"1" ),

        ]);

       DB::table("loaisanpham")->insert([
            array("tenloai" =>"Bàn console trắng gỗ" , "soluongton"=>"10", "mota"=>"Bàn console với thiết kế tinh tế","masp"=>"5" ),
            array("tenloai" =>"Bàn console Jazz" , "soluongton"=>"15", "mota"=>"Bàn console Jazz gỗ với thiết kế tinh tế","masp"=>"5" ),
            array("tenloai" =>"Bàn console Pop" , "soluongton"=>"20", "mota"=>"Bàn console
             Pop với thiết kế tinh tế","masp"=>"5" ),
            array("tenloai" =>"Sofa blue 3 chỗ màu xanh" , "soluongton"=>"30","mota" =>"Hàng nhập khẩu","masp"=>"2" ),
            array("tenloai" =>"Sofa Lima vải xanh" , "soluongton"=>"10","mota" =>"Hàng công ty sản xuất","masp"=>"2" ),
            array("tenloai" =>"Ghế bar Monaco" , "soluongton"=>"20","mota"=> "Hàng công ty sản xuất","masp"=>"2" ),
            array("tenloai" =>"Ghế ăn Sake" , "soluongton"=>"15", "mota"=>"Hàng công ty sản xuất","masp"=>"2" ),
     
      ]);

       DB::table("sanpham_chude")->insert([
            array("macd" =>"3" , "maloai"=>"1" ),
            array("macd" =>"3" , "maloai"=>"2" ),
            array("macd" =>"5" , "maloai"=>"6"),

      ]);
         DB::table("thongtincanhan")->insert([
            array("hoten" =>"Trần Thị Ngọc Diễm" , "sdt"=>"1234567" ,"diachi"=>"TPHCM")]);
        DB::table("taikhoan")->insert([
            array("tentk" =>"ngdiem" , "matkhau"=>"123" ,"mattcn"=>"1")]);
    }

}

