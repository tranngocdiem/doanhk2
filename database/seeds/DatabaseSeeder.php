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
            array("tencd" =>"PHÒNG LÀM VIỆC" ),
            array("tencd" =>"NHÀ BẾP"),
            array("tencd" =>"HÀNG TRANG TRÍ"),
          ]);

      DB::table("mausanpham")->insert([
        array("tenmau" =>"GHẾ" ),
            array("tenmau" =>"BÀN"),
            array("tenmau" =>"TỦ" ),
            array("tenmau" =>"THIẾT BỊ BẾP"),
            array("tenmau" =>"ĐỒ NỘI THẤT"),
            array("tenmau" =>"HÀNG TRANG TRÍ"),
            array("tenmau" =>"ĐỒ NGOẠI THẤT"),
          ]);
      DB::table("sanpham")->insert([
            array("tensp" =>"Sofa góc","mamau"=>"1"),
            array("tensp" =>"Ghế thư giãn","mamau"=>"1"),
            array("tensp" =>"Armchair","mamau"=>"1"),
            array("tensp" =>"Ghế dài và đôn","mamau"=>"1"),
            array("tensp" =>"Bàn nước","mamau"=>"2"),
            array("tensp" =>"Bàn Console","mamau"=>"2"),
            array("tensp" =>"Bàn bên","mamau"=>"2"),
            array("tensp" =>"Tủ tivi","mamau"=>"3"),
            array("tensp" =>"Tủ trưng bày","mamau"=>"3"),
            array("tensp" =>"Tủ ly","mamau"=>"3"),
            array("tensp" =>"Tủ giày","mamau"=>"3"),
            array("tensp" =>"Kệ sách","mamau"=>"5"),
            array("tensp" =>"Đèn","mamau"=>"5"),
            array("tensp" =>"Hoa trang trí","mamau"=>"5"),
            array("tensp" =>"Thảm","mamau"=>"5"),
            array("tensp" =>"Tranh","mamau"=>"5"),
            array("tensp" =>"Tranh dán tường","mamau"=>"5"),
            array("tensp" =>"Tượng trang trí","mamau"=>"5"),
            array("tensp" =>"Ghế","mamau"=>"4"),
            array("tensp" =>"Bàn ăn","mamau"=>"4"),
            array("tensp" =>"Tủ hộc kéo","mamau"=>"4"),
            array("tensp" =>"Giưởng ngủ","mamau"=>"4"),
            array("tensp" =>"Bàn đầu giường","mamau"=>"4"),
            array("tensp" =>"Bàn trang điểm","mamau"=>"4"),
            array("tensp" =>"Bàn làm việc","mamau"=>"4"),
            array("tensp" =>"Kệ sách","mamau"=>"4"),
            array("tensp" =>"Tủ bếp","mamau"=>"2"),
            array("tensp" =>"Tủ rượu","mamau"=>"2"),
            array("tensp" =>"Bếp","mamau"=>"3"),
            array("tensp" =>"Thiết bị bếp","mamau"=>"3"),
            array("tensp" =>"Bàn ngoài trời","mamau"=>"6"),
            array("tensp" =>"Ghế ngoài trời","mamau"=>"6"),
            array("tensp" =>"Hoa và cây","mamau"=>"5"),


        ]);

       DB::table("loaisanpham")->insert([
            array("tenloai" =>"Sofa tonic" , "soluongton"=>"20", "mota"=>"Sofa tonic với thiết kế tinh tế, chất gỗ.","masp"=>"1" ),
            array("tenloai" =>"Sofa blue góc trái" , "soluongton"=>"20", "mota"=>"Sofa với thiết kế tinh tế, chất liệu da","masp"=>"1" ),
            array("tenloai" =>"Sofa chino góc phải" , "soluongton"=>"20", "mota"=>"Bàn console
             Pop với thiết kế tinh tế","masp"=>"1" ),
            array("tenloai" =>"Sofa góc phải" , "soluongton"=>"20","mota" =>"Hàng nhập khẩu","masp"=>"1" ),
            array("tenloai" =>"Sofa Cico góc trái màu vàng" , "soluongton"=>"20","mota" =>"Khung gỗ bọc vải cao cấp","masp"=>"1" ),
            array("tenloai" =>"Sofa góc Royal" , "soluongton"=>"20","mota"=> "Khung gỗ xà cừ - Nệm chống cháy bọc vải cao cấp","masp"=>"1" ),
            array("tenloai" =>"Sofa góc Rumba" , "soluongton"=>"20", "mota"=>"Khung gỗ bọc vải cao cấp - Chân gỗ sồi","masp"=>"1" ),
            array("tenloai" =>"Sofa Ramos góc trái" , "soluongton"=>"20", "mota"=>"Khung gỗ bọc vải - chân inox","masp"=>"1" ),
            array("tenloai" =>"Sofa Vegas góc trái" , "soluongton"=>"20", "mota"=>"Sản phẩm cao cấp","masp"=>"1" ),
            array("tenloai" =>"Ghế thư giãn Lazboy Cardinal da màu " , "soluongton"=>"20", "mota"=>"Khung gỗ, thép, bọc da.","masp"=>"2" ),
            array("tenloai" =>"Ghế thư giãn Lazboy Bennett Febble" , "soluongton"=>"20", "mota"=>"Khung gỗ cao su bọc da bò tự nhiên 100%.","masp"=>"2" ),
            array("tenloai" =>"Ghế thư giãn Lazboy Canyon red" , "soluongton"=>"20", "mota"=>"Thương hiệu Mỹ - Lazboy Bảo hành 10 năm.Khung gỗ cao su bọc da bò 100%.","masp"=>"2" ),
            array("tenloai" =>"Ghế thư giãn Hero Leat" , "soluongton"=>"20", "mota"=>"Chân sắt, lông cừu.","masp"=>"2" ),
            array("tenloai" =>"Ghế thư giãn lông cừu" , "soluongton"=>"20", "mota"=>"Chân sắt, lông cừu.","masp"=>"2" ),
            array("tenloai" =>"Ghế TG Lazboy Rialto 3C Mocca" , "soluongton"=>"20", "mota"=>"Khung gỗ cao su bọc da bò 100%.","masp"=>"2" ),
            array("tenloai" =>"Ghế thư giãn Lula" , "soluongton"=>"20", "mota"=>"Khung gỗ xà cừ (Mahogany)- Vải cao cấp.","masp"=>"2" ),
            array("tenloai" =>"Ghế Rocking Ali" , "soluongton"=>"20", "mota"=>"chân gỗ, khung sắt, bọc vải.","masp"=>"2" ),
            array("tenloai" =>"Ghế thư giãn da ngựa vằn" , "soluongton"=>"20", "mota"=>"Chân sắt, da ngựa vằn.","masp"=>"2" ),

     
      ]);

      DB::table("hinhanh")->insert([
          array("url" =>"sofatonic1.jpg" , "maloai"=>"1","isDeleted"=>"0" ),
          array("url" =>"sofatonic2.jpg" , "maloai"=>"1","isDeleted"=>"1" ),  
          array("url" =>"sofabluegoctrai1.jpg" , "maloai"=>"2","isDeleted"=>"0" ), 
          array("url" =>"sofabluegoctrai2.jpg" , "maloai"=>"2","isDeleted"=>"1" ), 
          array("url" =>"sofachinogocphai1.jpg" , "maloai"=>"3","isDeleted"=>"0" ), 
          array("url" =>"sofachinogocphai2.jpg" , "maloai"=>"3","isDeleted"=>"1" ), 
          array("url" =>"sofagocphai1.jpg" , "maloai"=>"4","isDeleted"=>"0" ),
          array("url" =>"sofagocphai2.jpg" , "maloai"=>"4","isDeleted"=>"1" ),
          array("url" =>"sofacicogoctraimauvang1.jpg" , "maloai"=>"5","isDeleted"=>"0" ),
          array("url" =>"sofacicogoctraimauvang2.jpg" , "maloai"=>"5","isDeleted"=>"1" ),
          array("url" =>"sofagocroyal.jpg" , "maloai"=>"6","isDeleted"=>"0" ),
          array("url" =>"sofagocrumba1.jpg" , "maloai"=>"7","isDeleted"=>"0" ),
          array("url" =>"sofagocrumba2.jpg" , "maloai"=>"7","isDeleted"=>"1" ),
          array("url" =>"sofaSamosgoctrai1.jpg" , "maloai"=>"8","isDeleted"=>"0" ),
          array("url" =>"sofaSamosgoctrai2.jpg" , "maloai"=>"8" ,"isDeleted"=>"1"),
          array("url" =>"sofavegasgoctraidanau1.jpg" , "maloai"=>"9","isDeleted"=>"0" ),
          array("url" =>"sofavegasgoctraidanau2.jpg" , "maloai"=>"9","isDeleted"=>"1" ),
          array("url" =>"lazyboy_cardinaldamau1.jpg" , "maloai"=>"10","isDeleted"=>"0" ),
          array("url" =>"lazyboy_cardinaldamau2.jpg" , "maloai"=>"10","isDeleted"=>"1" ),
          array("url" =>"lazyboyBennettFebble1.jpg" , "maloai"=>"11","isDeleted"=>"0" ),
          array("url" =>"lazyboyBennettFebble2.jpg" , "maloai"=>"11","isDeleted"=>"1" ),
          array("url" =>"lazyboyCannonred1.jpg" , "maloai"=>"12","isDeleted"=>"0" ),
          array("url" =>"lazyboyCannonred2.jpg" , "maloai"=>"12","isDeleted"=>"1" ),
          array("url" =>"Heroleat.jpg" , "maloai"=>"13","isDeleted"=>"0" ),
          array("url" =>"longcuu.jpg" , "maloai"=>"14" ,"isDeleted"=>"0"),
          array("url" =>"lazyboyRialtomocca.jpg" , "maloai"=>"15","isDeleted"=>"0" ),
          array("url" =>"lula1.jpg" , "maloai"=>"16","isDeleted"=>"0"),
          array("url" =>"lula2.jpg" , "maloai"=>"16","isDeleted"=>"1" ),
          array("url" =>"rockingall.jpg" , "maloai"=>"17","isDeleted"=>"0" ),
          array("url" =>"danguavan.jpg" , "maloai"=>"18","isDeleted"=>"0" ),

      ]);

      DB::table("chude_loaisanpham")->insert([
           array("macd"=>"1","maloai"=>"1"),
           array("macd"=>"1","maloai"=>"2"),
           array("macd"=>"1","maloai"=>"3"),
           array("macd"=>"1","maloai"=>"4"),
           array("macd"=>"1","maloai"=>"5"),
           array("macd"=>"1","maloai"=>"6"),
           array("macd"=>"1","maloai"=>"7"),
           array("macd"=>"1","maloai"=>"8"),
           array("macd"=>"1","maloai"=>"9"),
           array("macd"=>"3","maloai"=>"10"),
           array("macd"=>"3","maloai"=>"11"),
           array("macd"=>"3","maloai"=>"12"),
           array("macd"=>"3","maloai"=>"13"),
           array("macd"=>"2","maloai"=>"14"),
           array("macd"=>"2","maloai"=>"15"),
           array("macd"=>"2","maloai"=>"16"),
           array("macd"=>"2","maloai"=>"17"),
           array("macd"=>"2","maloai"=>"18"),
           

      ]);

        
    }

}

