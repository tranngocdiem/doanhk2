@extends('Sanpham._layoutsanpham')
@section('link')
@parent
<link rel="stylesheet" href="{{ url('/') }}./css/Sanpham/sanpham1.css">
<link rel="stylesheet" href="viewsanpham.js">
@stop
@section('sub_content')
<div class="container">
  <div class="row">
    <div>
      <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item">
            <img class="d-block img-fluid" src="{{ url('/') }}/image/sanpham/default1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="{{ url('/') }}/image/sanpham/default2.jpg" alt="Second slide">
          </div>
          
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="{{ url('/') }}/image/sanpham/default3.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- hiển thị top sản phẩm mới nhất -->
      <?php
        if (isset($newProduct))
        {
          ?>
          <div>
            <h5 style="color: red;font-size: 30px">Sản phẩm mới</h5>
            <br>
          </div>
          
          <div id = "hienthisanpham" class="row">
            <?php
          foreach($newProduct as $row)
          {
            ?>
            <?php
              $banggia = DB::table('banggia')
               ->join('chuongtrinhkhuyenmai','banggia.makm','=','chuongtrinhkhuyenmai.makm')
               ->where('banggia.maloai','=',$row->maloai)
               ->get();
            ?>
            <div class="col-lg-4 col-md-6 mb-4">
            <div id="anhsp" class="card h-100">
            <a href="{!!url('sanpham/chitietsanpham',[$row->maloai])!!}">
              <img class="card-img-top" src="{{ url('/') }}/image/sanpham/<?php echo $row->url?>" alt="">
            </a>

            <?php  echo "<div id='addcart'><button style='width:90%' value='".$row->maloai." ' id='themvaogio'><i style='padding: 0px 20px;' class='fas fa-shopping-cart'></i>Thêm vào giỏ hàng</button></div>"?>
            <div class="card-body">
            <h4 class="card-title">
            <?php echo $row->tenloai ?>
            </h4>
            <div>
              <span style="font-weight: bold; color: red; font-size: 20px"><?php echo $banggia[0]->gia?> VND</span>
              <span style="color: #FF3B26; font-size: 15px">-<?php echo $banggia[1]->discount; ?>%</span>
            </div>
            <p class="card-text"><?php echo $row->mota ?>.</p>
            </div>

            </div>
            </div>
            <?php
          }
          ?>
          </div>
        <?php
        }
      ?>

      <!-- hiển thị sản phẩm -->
        <?php
        if (isset($results))
         {
          ?>
          <div id = "hienthisanpham" class="row">
            <?php
          foreach($results as $row)
          {
            $banggia = DB::table('banggia')
               ->join('chuongtrinhkhuyenmai','banggia.makm','=','chuongtrinhkhuyenmai.makm')
               ->where('banggia.maloai','=',$row->maloai)
               ->get();
            ?>
            <div class="col-lg-4 col-md-6 mb-4">
            <div id="anhsp" class="card h-100">
            <a href="{!!url('sanpham/chitietsanpham',[$row->maloai])!!}"><img class="card-img-top" src="{{ url('/') }}/image/sanpham/<?php echo $row->url?>" alt=""></a>

            <?php  echo "<div id='addcart'><button style='width:90%' value='".$row->maloai." ' id='themvaogio'><i style='padding: 0px 20px;' class='fas fa-shopping-cart'></i>Thêm vào giỏ hàng</button></div>"?>
            <div class="card-body">
            <h4 class="card-title">
            <?php echo $row->tenloai ?>
            </h4>
            <div>
              <span style="font-weight: bold; color: red; font-size: 20px"><?php echo $banggia[0]->gia?> VND</span>
              <span style="color: #FF3B26;">   -<?php echo $banggia[1]->discount; ?>%</span>
            </div>
            <p class="card-text"><?php echo $row->mota ?>.</p>
            </div>

            </div>
            </div>
            <?php
          }
          ?>
          </div>
          <!-- Phân trang -->

         <nav aria-label="Page navigation example">
          <ul class="pagination">
            <?php
            if($results->currentPage()!=1)
            {
              ?>
             <li class="page-item">
                <a class="page-link" href="{!!$results->url($results->currentPage()-1)!!}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
                </a>
            </li>
            <?php
            }
            ?>
            <?php
              for($i=1; $i<=$results->lastPage(); $i = $i + 1) 
              {
                ?>
                <li class="{!!($results->currentPage()==$i)? 'page-item active':'page-item'!!}">
                  <a class="page-link" href="{!!$results->url($i)!!}">{!!$i!!}</a>
                </li>
                <?php
              }
              if($results->currentPage()!=$results->lastPage())
              {
            ?>
             <li class="page-item">
             <a class="page-link" href="{!!$results->url($results->currentPage()+1)!!}" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
             </a>
            </li>
            <?php
            }
          ?>
        </ul>
      </nav>
          
          <?php
        }
        else 
          if (!isset($newProduct)) echo'<h4>Không tìm thấy sản phẩm nào</h4>'
        ?>

      <!-- /.row -->

    </div>
  </div>
 
</div>
    @stop