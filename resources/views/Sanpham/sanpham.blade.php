@extends('Sanpham._layoutsanpham')
@section('sub_content')
<div class="container">

      <div class="row">

        <div class="col-lg-3">

        	<h1 class="my-4">DTQ furniture</h1>
        	<nav class="main-nav">
        		<ul id="main-nav" class="main-nav-ul">
        			<li><a id="nhan" href="#">MẪU PHÒNG KHÁCH</a></li>
        			<li><a href="#">GHẾ NGỒI<span class="sub-arrow"></span></a>
						<ul>
        					<li><a href="#">Sofa</a></li>
        					<li><a href="#">Sofa góc</a></li>
        					<li><a href="#">Sofa bed</a></li>
        					<li><a href="#">Ghế thư giãn</a></li>
        					<li><a href="#">Armchair</a></li>
        					<li><a href="#">Ghế dài & đôn</a></li>
        				</ul>
        			</li>
        			<li><a href="#">BÀN<span class="sub-arrow"></span></a>
        				<ul>
        					<li><a href="#">Bàn nước</a></li>
        					<li><a href="#">Bàn Console</a></li>
        					<li><a href="#">Bàn bên</a></li>
        				</ul>
        			</li>

        			<li><a href="#">TỦ<span class="sub-arrow"></span></a>
						<ul>
        					<li><a href="#">Tủ tivi</a></li>
        					<li><a href="#">Tủ thấp</a></li>
        					<li><a href="#">Tủ ly</a></li>
        					<li><a href="#">Tủ giày</a></li>
        					<li><a href="#">Kệ sách</a></li>
        					<li><a href="#">Tủ trưng bày</a></li>
        				</ul>
        			</li>
        			<li><a href="#">HÀNG TRANG TRÍ<span class="sub-arrow"></span></a>
						<ul>
        					<li><a href="#">Đèn</a></li>
        					<li><a href="#">Hoa trang trí phòng khách</a></li>
        					<li><a href="#">Thảm</a></li>
        					<li><a href="#">Tranh</a></li>
        					<li><a href="#">Tranh dán tường</a></li>
        					<li><a href="#">Bình trang trí</a></li>
        					<li><a href="#">Tượng trang trí</a></li>
        					<li><a href="#">Đồ trang trí Noel</a></li>
        				</ul>
        			</li>
        			
        		</ul>
        	</nav>
          				

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
              </div>
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
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

          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item One</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Two</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Three</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Four</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Five</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
               
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Six</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                
              </div>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
@stop