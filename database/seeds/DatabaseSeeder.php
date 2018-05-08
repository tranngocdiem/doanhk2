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
    	// thêm vào database
    	DB::table("chude")->insert([
    		array("tencd" =>"PHÒNG KHÁCH" ),
            array("tencd" =>"PHÒNG NGỦ"),
            array("tencd" =>"PHÒNG ĂN" ),
            array("tencd" =>"NHÀ BẾP"),
            array("tencd" =>"HÀNG TRANG TRÍ"),
    	]);
    }
}

