<?php
        /*$sqlQuery="SELECT * FROM loaisanpham JOIN hinhanh on loaisanpham.maloai = hinhanh.maloai
        where hinhanh.isDeleted=0 ";
        $results = DB::SELECT(DB::raw($sqlQuery));*/
        if (isset($results)) {

        //output results from database
          foreach($results as $row)
          {
            echo'<div class="col-lg-4 col-md-6 mb-4">';
            echo'<div id="anhsp" class="card h-100">';
            echo'<a href="#"><img class="card-img-top" src="image/sofagoc/'.$row->url.'"alt=""></a>';
            echo'<div id="addcart"><a id="themvaogio"><i style="padding: 0px 10px;" class="fas fa-shopping-cart"></i>Thêm vào giỏ hàng</a></div>';
            echo'<div class="card-body">';
            echo'<h4 class="card-title">';
            echo'<a href="#">'.$row->tenloai.'</a>';
            echo'</h4>';
            echo'<h5>$24.99</h5>';
            echo'<p class="card-text">'.$row->mota.'</p>';
            echo'</div>';

            echo'</div>';
            echo'</div>';
          }
        }
        else echo "Không có sản phẩm nào";
        ?>
