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
        
    }ẻ đó 

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
            array("tensp" =>"Sofa góc"),
        ]);

       DB::table("loaisanpham")->insert([
            array("tenloai" =>"Sofa tonic" , "soluongton"=>"20", "mota"=>"Sofa tonic với thiết kế tinh tế, chất gỗ.","masp"=>"1" ),
            array("tenloai" =>"Sofa blue góc trái" , "soluongton"=>"20", "mota"=>"Sofa với thiết kế tinh tế, chất liệu da","masp"=>"1" ),
            array("tenloai" =>"Sofa chino góc phải" , "soluongton"=>"20", "mota"=>"Bàn console
             Pop với thiết kế tinh tế","masp"=>"1" ),
            array("tenloai" =>"Sofa góc phải" , "soluongton"=>"20","mota" =>"Hàng nhập khẩu","masp"=>"1" ),
            /*array("tenloai" =>"Sofa Lima vải xanh" , "soluongton"=>"0","mota" =>"Hàng công ty sản xuất","masp"=>"2" ),
            array("tenloai" =>"Ghế bar Monaco" , "soluongton"=>"0","mota"=> "Hàng công ty sản xuất","masp"=>"2" ),
            array("tenloai" =>"Ghế ăn Sake" , "soluongton"=>"0", "mota"=>"Hàng công ty sản xuất","masp"=>"2" ),*/
     
      ]);

      DB::table("hinhanh")->insert([
          array("url" =>"sofatonic1.jpg" , "maloai"=>"1" ), 
          array("url" =>"sofabluegoctrai1.jpg" , "maloai"=>"2" ), 
          array("url" =>"sofachinogocphai1.jpg" , "maloai"=>"3" ), 
          array("url" =>"sofagocphai1.jpg" , "maloai"=>"4" ), 
      ]);
        
    }

}

