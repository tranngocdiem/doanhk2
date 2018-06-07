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
            array("tenloai" =>"Ghế thư giãn da ngựa vằn" , "soluongton"=>"20", "mota"=>"Chân sắt, da ngựa vằn.","masp"=>"2" 
            ),
            array("tenloai" =>"Armchair vải Forty" , "soluongton"=>"20", "mota"=>"Khung gỗ bạch dương- Vải cao cấp- Tay gỗ tần bì- Chân hợp kim sơn tĩnh điện.","masp"=>"3" 
            ),
            array("tenloai" =>"Ghế armchair Juke" , "soluongton"=>"20", "mota"=>"Khung gỗ bọc vải cao cấp.","masp"=>"3" 
            ),
            array("tenloai" =>"Armchair Aero Diego" , "soluongton"=>"20", "mota"=>"Khung gỗ - Bọc vải.","masp"=>"3" 
            ),
            array("tenloai" =>"Armchair Club berg" , "soluongton"=>"20", "mota"=>"Gỗ sồi- Vải cao cấp" ,"masp"=>"3" 
            ),
            array("tenloai" =>"Armchair Axel" , "soluongton"=>"20", "mota"=>"Gỗ bạch dương- Vải linenp","masp"=>"3" 
            ),
             array("tenloai" =>"Ghế da Lazy mix" , "soluongton"=>"20", "mota"=>"Gỗ bạch dương- Vải linenp","masp"=>"3" 
            ),
             array("tenloai" =>"Armchair 132 vải" , "soluongton"=>"20", "mota"=>"Khung kim loại nhồi nệm bọc vải","masp"=>"3"  
            ),
             array("tenloai" =>"Ghế Armchair Oak" , "soluongton"=>"20", "mota"=>"Gỗ bọc vải","masp"=>"3"  
            ),
             array("tenloai" =>"Armchair bolero" , "soluongton"=>"20", "mota"=>"Khung gỗ bọc vải","masp"=>"3"  
            ),
             array("tenloai" =>"Armchair Xbang Grey" , "soluongton"=>"20", "mota"=>"Khung kim loại bọc vải","masp"=>"3"  
            ),
              array("tenloai" =>"Sofa Urban 1C" , "soluongton"=>"20", "mota"=>"Khung gỗ bọc da+chân kim loại","masp"=>"3"  
            ),
              array("tenloai" =>"Ghế Adwin màu đen" , "soluongton"=>"20", "mota"=>"Khung kim loại nhồi nệm bọc vải","masp"=>"3"  
            ),
              array("tenloai" =>"Ghế Adwin màu trắng đen" , "soluongton"=>"20", "mota"=>"Khung kim loại nhồi nệm bọc vải","masp"=>"3"  
            ),
              array("tenloai" =>"Armchair Sally màu xanh" , "soluongton"=>"20", "mota"=>"Khung gỗ bọc da","masp"=>"3"  
            ),
              array("tenloai" =>"Ghế Rocking Ali" , "soluongton"=>"20", "mota"=>"Khung gỗ bọc da","masp"=>"3"  
            ),
              array("tenloai" =>"Armchair Barbier màu cognac" , "soluongton"=>"20", "mota"=>"Khung sắt bọc da công nghiệp","masp"=>"3"  
            ),







     
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
          array("url" =>"Armchair vải Forty1.jpg" , "maloai"=>"19","isDeleted"=>"0" ),
          array("url" =>"Armchair vải Forty2.jpg" , "maloai"=>"19","isDeleted"=>"1" ),
          array("url" =>"Ghế armchair Juke.jpg" , "maloai"=>"20","isDeleted"=>"0" ),
          array("url" =>"Armchair Aero Diego1.jpg" , "maloai"=>"21","isDeleted"=>"0" ),
          array("url" =>"Armchair Aero Diego1.jpg" , "maloai"=>"21","isDeleted"=>"1" ),
          array("url" =>"Armchair Club berg1.jpg" , "maloai"=>"22","isDeleted"=>"0" ),
          array("url" =>"Armchair Club berg2.jpg" , "maloai"=>"22","isDeleted"=>"1" ),
          array("url" =>"Armchair Axel1.jpg" , "maloai"=>"23","isDeleted"=>"0" ),
          array("url" =>"Armchair Axel2.jpg" , "maloai"=>"23","isDeleted"=>"1" ),
          array("url" =>"Ghế da Lazy mix1.jpg" , "maloai"=>"24","isDeleted"=>"0" ),
          array("url" =>"Ghế da Lazy mix2.jpg" , "maloai"=>"24","isDeleted"=>"1" ),
          array("url" =>"Armchair 132 vải1.jpg" , "maloai"=>"25","isDeleted"=>"0" ),
          array("url" =>"Armchair 132 vải2.jpg" , "maloai"=>"25","isDeleted"=>"1" ),
          array("url" =>"Ghế Armchair Oak.jpg" , "maloai"=>"26","isDeleted"=>"0" ),
          array("url" =>"Armchair bolero.jpg" , "maloai"=>"27","isDeleted"=>"0" ),
          array("url" =>"Armchair Xbang Grey.jpg" , "maloai"=>"28","isDeleted"=>"0" ),
          array("url" =>"Sofa Urban 1C.jpg" , "maloai"=>"29","isDeleted"=>"0" ),
          array("url" =>"Ghế Adwin màu đen.jpg" , "maloai"=>"30","isDeleted"=>"0" ),
          array("url" =>"Ghế Adwin màu trắng đen.jpg" , "maloai"=>"31","isDeleted"=>"0" ),
          array("url" =>"Armchair Sally màu xanh.jpg" , "maloai"=>"32","isDeleted"=>"0" ),
          array("url" =>"Ghế Rocking Ali1.jpg" , "maloai"=>"33","isDeleted"=>"0" ),
          array("url" =>"Ghế Rocking Ali2.jpg" , "maloai"=>"33","isDeleted"=>"1" ),
          array("url" =>"Armchair Barbier màu cognac1.jpg" , "maloai"=>"34","isDeleted"=>"0" ),
          array("url" =>"Armchair Barbier màu cognac2.jpg" , "maloai"=>"34","isDeleted"=>"1" ),





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
           array("macd"=>"1","maloai"=>"10"),
           array("macd"=>"1","maloai"=>"11"),
           array("macd"=>"1","maloai"=>"12"),
           array("macd"=>"1","maloai"=>"13"),
           array("macd"=>"2","maloai"=>"14"),
           array("macd"=>"2","maloai"=>"15"),
           array("macd"=>"2","maloai"=>"16"),
           array("macd"=>"2","maloai"=>"17"),
           array("macd"=>"2","maloai"=>"18"),
           array("macd"=>"1","maloai"=>"19"),
           array("macd"=>"1","maloai"=>"20"),
           array("macd"=>"1","maloai"=>"21"),
           array("macd"=>"1","maloai"=>"22"),
           array("macd"=>"1","maloai"=>"23"),
           array("macd"=>"1","maloai"=>"24"),
           array("macd"=>"1","maloai"=>"25"),
           array("macd"=>"1","maloai"=>"26"),
           array("macd"=>"1","maloai"=>"27"),
           array("macd"=>"1","maloai"=>"28"),
           array("macd"=>"1","maloai"=>"29"),
           array("macd"=>"1","maloai"=>"30"),
           array("macd"=>"1","maloai"=>"31"),
           array("macd"=>"1","maloai"=>"32"),
           array("macd"=>"1","maloai"=>"33"),
           array("macd"=>"1","maloai"=>"34"),

      ]);
      
      DB::table('chuongtrinhkhuyenmai')->insert(
        [
          array("tenkm"=>"default","discount"=>"0"),
          array("tenkm"=>"Giảm giá mùa hè","discount"=>"10"),
          array("tenkm"=>"Giảm giá mừng sinh nhật","discount"=>"20"),
        ]
           
      );

      DB::table('banggia')->insert(
        [
          array("gia"=>"15000000","maloai"=>"1","makm"=>"1"),
          array("gia"=>"15000000","maloai"=>"1","makm"=>"2"),
          array("gia"=>"16000000","maloai"=>"2","makm"=>"1"),
          array("gia"=>"16000000","maloai"=>"2","makm"=>"2"),
          array("gia"=>"12000000","maloai"=>"3","makm"=>"1"),
          array("gia"=>"12000000","maloai"=>"3","makm"=>"2"),
          array("gia"=>"10000000","maloai"=>"4","makm"=>"1"),
          array("gia"=>"10000000","maloai"=>"4","makm"=>"3"),
          array("gia"=>"14000000","maloai"=>"5","makm"=>"1"),
          array("gia"=>"14000000","maloai"=>"5","makm"=>"3"),
          array("gia"=>"16000000","maloai"=>"6","makm"=>"1"),
          array("gia"=>"16000000","maloai"=>"6","makm"=>"2"),
          array("gia"=>"13000000","maloai"=>"7","makm"=>"1"),
          array("gia"=>"13000000","maloai"=>"7","makm"=>"3"),
          array("gia"=>"1500000","maloai"=>"8","makm"=>"1"),
          array("gia"=>"1500000","maloai"=>"8","makm"=>"2"),
          array("gia"=>"12000000","maloai"=>"9","makm"=>"1"),
          array("gia"=>"12000000","maloai"=>"9","makm"=>"2"),
          array("gia"=>"15000000","maloai"=>"10","makm"=>"1"),
          array("gia"=>"15000000","maloai"=>"10","makm"=>"3"),
          array("gia"=>"15500000","maloai"=>"11","makm"=>"1"),
          array("gia"=>"15500000","maloai"=>"11","makm"=>"3"),
          array("gia"=>"13000000","maloai"=>"12","makm"=>"1"),
          array("gia"=>"13000000","maloai"=>"12","makm"=>"2"),
          array("gia"=>"14000000","maloai"=>"13","makm"=>"1"),
          array("gia"=>"14000000","maloai"=>"13","makm"=>"2"),
          array("gia"=>"12340000","maloai"=>"14","makm"=>"1"),
          array("gia"=>"12340000","maloai"=>"14","makm"=>"2"),
          array("gia"=>"1900000","maloai"=>"15","makm"=>"1"),
          array("gia"=>"1900000","maloai"=>"15","makm"=>"3"),
          array("gia"=>"1400000","maloai"=>"16","makm"=>"1"),
          array("gia"=>"1400000","maloai"=>"16","makm"=>"3"),
          array("gia"=>"19000000","maloai"=>"17","makm"=>"1"),
          array("gia"=>"19000000","maloai"=>"17","makm"=>"2"),
          array("gia"=>"12000000","maloai"=>"18","makm"=>"1"),
          array("gia"=>"12000000","maloai"=>"18","makm"=>"2"),
          array("gia"=>"13000000","maloai"=>"19","makm"=>"1"),
          array("gia"=>"13000000","maloai"=>"19","makm"=>"3"),
          array("gia"=>"14000000","maloai"=>"20","makm"=>"1"),
          array("gia"=>"14000000","maloai"=>"20","makm"=>"2"),
          array("gia"=>"1500000","maloai"=>"21","makm"=>"1"),
          array("gia"=>"1500000","maloai"=>"21","makm"=>"3"),
          array("gia"=>"1500000","maloai"=>"22","makm"=>"1"),
          array("gia"=>"1500000","maloai"=>"22","makm"=>"3"),
          array("gia"=>"1450000","maloai"=>"23","makm"=>"1"),
          array("gia"=>"1450000","maloai"=>"23","makm"=>"2"),
          array("gia"=>"1500000","maloai"=>"24","makm"=>"1"),
          array("gia"=>"1500000","maloai"=>"24","makm"=>"3"),
          array("gia"=>"1550000","maloai"=>"25","makm"=>"1"),
          array("gia"=>"1550000","maloai"=>"25","makm"=>"3"),
          array("gia"=>"1500000","maloai"=>"26","makm"=>"1"),
          array("gia"=>"1500000","maloai"=>"26","makm"=>"2"),
          array("gia"=>"15000000","maloai"=>"27","makm"=>"1"),
          array("gia"=>"15000000","maloai"=>"27","makm"=>"2"),
          array("gia"=>"1350000","maloai"=>"28","makm"=>"1"),
          array("gia"=>"1350000","maloai"=>"28","makm"=>"2"),
          array("gia"=>"1500000","maloai"=>"29","makm"=>"1"),
          array("gia"=>"1500000","maloai"=>"29","makm"=>"2"),
          array("gia"=>"1600000","maloai"=>"30","makm"=>"1"),
          array("gia"=>"1600000","maloai"=>"30","makm"=>"3"),
          array("gia"=>"1500000","maloai"=>"31","makm"=>"1"),
          array("gia"=>"1500000","maloai"=>"31","makm"=>"2"),
          array("gia"=>"4500000","maloai"=>"32","makm"=>"1"),
          array("gia"=>"4500000","maloai"=>"32","makm"=>"3"),
          array("gia"=>"2300000","maloai"=>"33","makm"=>"1"),
          array("gia"=>"2300000","maloai"=>"33","makm"=>"2"),
          array("gia"=>"2000000","maloai"=>"34","makm"=>"1"),
          array("gia"=>"2000000","maloai"=>"34","makm"=>"3"),

        ]);

        
    }

}

