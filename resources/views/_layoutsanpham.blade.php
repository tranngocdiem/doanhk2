<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Sản phẩm</title>
	<link rel="stylesheet" href="{{ url('/') }}./css/Home/home.css">
	<link rel="stylesheet" href="{{ url('/') }}./css/Sanpham/sanpham.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>
<body>
	<header style="background-image: none;height: 100px;">
		<div>
			<div class="hide-content-1" aria-hidden="true">
				<nav class="sidebar">

					<div class="menu">
						<a href="">
							<img class="logo" src="image/logo.png" style="width: 50px;height: 50px;" alt="" id="logo"/>
						</a>

						<ul>
							<li><a href="index.html">Trang chủ</a></li>
							<li><a href="">Dịch vụ</a></li>
							<li><a href="">Sản phẩm</a></li>
							<li><a href="">Liên hệ</a></li>
							<li><a href="">Tin tức</a></li>
							<li><a href="">Trợ giúp</a></li>
						</ul>
						<ul class="social-icon">
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href=""><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="row1" style="background-color: rgba(0,11,12,0.8);">
				<div class="">

					<div class="menu-icon">
						<span class="fa fa-bars fa-2x"></span>
					</div>


					<div class="backgrSearch">
						<form class="mainForm">

							<button class="btn-select">
								<select>
									<option>All</option>
								</select>
							</button>

							<input type ="text" name = "search" placeholder = "Search">
							<button class="btn-search"><i class="fas fa-search"></i></button>

						</form>


					</div>
					<div>
						<ul class="cart-icon">
							<li><a href="" class="fas fa-shopping-cart""><i>Cart</i></a></li>
							<li><a href="" class="fas fa-cart-arrow-down"><i>Reorder Items</i></a></li>
							<li class="icon3"><a href="" class="fas fa-sign-in-alt"><i>Sign In</i></a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>

	</header>
	<div id="menu-phu">
		<nav class="nav">
			<li class="menuphu"><a class="nav-link pkhach" href="#">PHÒNG KHÁCH</a>
				<nav id="menu-phu-cap1" class="nav-phong">
					<li class="menuc1"><a class="nav-link" href="#">GHẾ NGỒI</a>
						<nav id="menu-phu-cap2" class="nav">
							<li><a class="nav-link" href="#">Sofa</a></li>
							<li><a class="nav-link" href="#">Ghế thư giãn</a></li>
							<li><a class="nav-link" href="#">Ghế dài</a></li>
							<li><a class="nav-link" href="#">Sofa góc</a></li>
						</nav>
					</li>
					<li class="menuc1"><a class="nav-link" href="#">BÀN</a>
						<nav id="menu-phu-cap2" class="nav">
							<li><a class="nav-link active" href="#">Active</a></li>
							<li><a class="nav-link" href="#">Active</a></li>
							<li><a class="nav-link" href="#">Active</a></li>
							<li><a class="nav-link disabled" href="#">Disabled</a></li>
						</nav></li>
						<li class="menuc1"><a class="nav-link" href="#">TỦ</a>
							<nav id="menu-phu-cap2" class="nav">
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Disabled</a></li>
							</nav>
						</li>
						<li class="menuc1"><a class="nav-link" href="#">HÀNG TRANG TRÍ</a>
							<nav id="menu-phu-cap2" class="nav">
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Disabled</a></li>
							</nav>
						</li>
				</nav>
			</li>
			<li class="menuphu"><a class="nav-link pan" href="#">PHÒNG ĂN</a>
				<nav id="menu-phu-cap1" class="nav-phong">
					<li class="menuc1"><a class="nav-link" href="#">GHẾ NGỒI</a>
						<nav id="menu-phu-cap2" class="nav">
							<li><a class="nav-link" href="#">Sofa</a></li>
							<li><a class="nav-link" href="#">Ghế thư giãn</a></li>
							<li><a class="nav-link" href="#">Ghế dài</a></li>
							<li><a class="nav-link" href="#">Sofa góc</a></li>
						</nav>
					</li>
					<li class="menuc1"><a class="nav-link" href="#">BÀN</a>
						<nav id="menu-phu-cap2" class="nav">
							<li><a class="nav-link active" href="#">Active</a></li>
							<li><a class="nav-link" href="#">Active</a></li>
							<li><a class="nav-link" href="#">Active</a></li>
							<li><a class="nav-link disabled" href="#">Disabled</a></li>
						</nav></li>
						<li class="menuc1"><a class="nav-link" href="#">TỦ</a>
							<nav id="menu-phu-cap2" class="nav">
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Disabled</a></li>
							</nav>
						</li>
						<li class="menuc1"><a class="nav-link" href="#">HÀNG TRANG TRÍ</a>
							<nav id="menu-phu-cap2" class="nav">
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Disabled</a></li>
							</nav>
						</li>
				</nav>
			</li>
			<li class="menuphu"><a  class="nav-link" href="#">PHÒNG NGỦ</a>
			<nav id="menu-phu-cap1" class="nav-phong">
					<li class="menuc1"><a class="nav-link" href="#">GHẾ NGỒI</a>
						<nav id="menu-phu-cap2" class="nav">
							<li><a class="nav-link" href="#">Sofa</a></li>
							<li><a class="nav-link" href="#">Ghế thư giãn</a></li>
							<li><a class="nav-link" href="#">Ghế dài</a></li>
							<li><a class="nav-link" href="#">Sofa góc</a></li>
						</nav>
					</li>
					<li class="menuc1"><a class="nav-link" href="#">BÀN</a>
						<nav id="menu-phu-cap2" class="nav">
							<li><a class="nav-link active" href="#">Active</a></li>
							<li><a class="nav-link" href="#">Active</a></li>
							<li><a class="nav-link" href="#">Active</a></li>
							<li><a class="nav-link disabled" href="#">Disabled</a></li>
						</nav></li>
						<li class="menuc1"><a class="nav-link" href="#">TỦ</a>
							<nav id="menu-phu-cap2" class="nav">
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Disabled</a></li>
							</nav>
						</li>
						<li class="menuc1"><a class="nav-link" href="#">HÀNG TRANG TRÍ</a>
							<nav id="menu-phu-cap2" class="nav">
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Disabled</a></li>
							</nav>
						</li>
				</nav>
			</li>
			<li class="menuphu"><a class="nav-link" href="#">PHÒNG LÀM VIỆC</a>
			<nav id="menu-phu-cap1" class="nav-phong">
					<li class="menuc1"><a class="nav-link" href="#">GHẾ NGỒI</a>
						<nav id="menu-phu-cap2" class="nav">
							<li><a class="nav-link" href="#">Sofa</a></li>
							<li><a class="nav-link" href="#">Ghế thư giãn</a></li>
							<li><a class="nav-link" href="#">Ghế dài</a></li>
							<li><a class="nav-link" href="#">Sofa góc</a></li>
						</nav>
					</li>
					<li class="menuc1"><a class="nav-link" href="#">BÀN</a>
						<nav id="menu-phu-cap2" class="nav">
							<li><a class="nav-link active" href="#">Active</a></li>
							<li><a class="nav-link" href="#">Active</a></li>
							<li><a class="nav-link" href="#">Active</a></li>
							<li><a class="nav-link disabled" href="#">Disabled</a></li>
						</nav></li>
						<li class="menuc1"><a class="nav-link" href="#">TỦ</a>
							<nav id="menu-phu-cap2" class="nav">
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Disabled</a></li>
							</nav>
						</li>
						<li class="menuc1"><a class="nav-link" href="#">HÀNG TRANG TRÍ</a>
							<nav id="menu-phu-cap2" class="nav">
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Disabled</a></li>
							</nav>
						</li>
				</nav>
			</li>
			<li class="menuphu"><a class="nav-link" href="#">BẾP</a>
			<nav id="menu-phu-cap1" class="nav-phong">
					<li class="menuc1"><a class="nav-link" href="#">GHẾ NGỒI</a>
						<nav id="menu-phu-cap2" class="nav">
							<li><a class="nav-link" href="#">Sofa</a></li>
							<li><a class="nav-link" href="#">Ghế thư giãn</a></li>
							<li><a class="nav-link" href="#">Ghế dài</a></li>
							<li><a class="nav-link" href="#">Sofa góc</a></li>
						</nav>
					</li>
					<li class="menuc1"><a class="nav-link" href="#">BÀN</a>
						<nav id="menu-phu-cap2" class="nav">
							<li><a class="nav-link active" href="#">Active</a></li>
							<li><a class="nav-link" href="#">Active</a></li>
							<li><a class="nav-link" href="#">Active</a></li>
							<li><a class="nav-link disabled" href="#">Disabled</a></li>
						</nav></li>
						<li class="menuc1"><a class="nav-link" href="#">TỦ</a>
							<nav id="menu-phu-cap2" class="nav">
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Disabled</a></li>
							</nav>
						</li>
						<li class="menuc1"><a class="nav-link" href="#">HÀNG TRANG TRÍ</a>
							<nav id="menu-phu-cap2" class="nav">
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Disabled</a></li>
							</nav>
						</li>
				</nav>
			</li>
			<li class="menuphu"><a class="nav-link" href="#">HÀNG TRANG TRÍ</a>
			<nav id="menu-phu-cap1-1" class="nav-phong">
					<li class="menuc1"><a class="nav-link" href="#">GHẾ NGỒI</a>
						<nav id="menu-phu-cap2" class="nav">
							<li><a class="nav-link" href="#">Sofa</a></li>
							<li><a class="nav-link" href="#">Ghế thư giãn</a></li>
							<li><a class="nav-link" href="#">Ghế dài</a></li>
							<li><a class="nav-link" href="#">Sofa góc</a></li>
						</nav>
					</li>
					<li class="menuc1"><a class="nav-link" href="#">BÀN</a>
						<nav id="menu-phu-cap2" class="nav">
							<li><a class="nav-link active" href="#">Active</a></li>
							<li><a class="nav-link" href="#">Active</a></li>
							<li><a class="nav-link" href="#">Active</a></li>
							<li><a class="nav-link disabled" href="#">Disabled</a></li>
						</nav></li>
						<li class="menuc1"><a class="nav-link" href="#">TỦ</a>
							<nav id="menu-phu-cap2" class="nav">
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Disabled</a></li>
							</nav>
						</li>
						<li class="menuc1"><a class="nav-link" href="#">HÀNG TRANG TRÍ</a>
							<nav id="menu-phu-cap2" class="nav">
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Disabled</a></li>
							</nav>
						</li>
				</nav>
			</li>
			<li class="menuphu"><a class="nav-link" href="#">NGOẠI THẤT</a>
			<nav id="menu-phu-cap1-1" class="nav-phong">
					<li class="menuc1"><a class="nav-link" href="#">GHẾ NGỒI</a>
						<nav id="menu-phu-cap2" class="nav">
							<li><a class="nav-link" href="#">Sofa</a></li>
							<li><a class="nav-link" href="#">Ghế thư giãn</a></li>
							<li><a class="nav-link" href="#">Ghế dài</a></li>
							<li><a class="nav-link" href="#">Sofa góc</a></li>
						</nav>
					</li>
					<li class="menuc1"><a class="nav-link" href="#">BÀN</a>
						<nav id="menu-phu-cap2" class="nav">
							<li><a class="nav-link active" href="#">Active</a></li>
							<li><a class="nav-link" href="#">Active</a></li>
							<li><a class="nav-link" href="#">Active</a></li>
							<li><a class="nav-link disabled" href="#">Disabled</a></li>
						</nav></li>
						<li class="menuc1"><a class="nav-link" href="#">TỦ</a>
							<nav id="menu-phu-cap2" class="nav">
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Disabled</a></li>
							</nav>
						</li>
						<li class="menuc1"><a class="nav-link" href="#">HÀNG TRANG TRÍ</a>
							<nav id="menu-phu-cap2" class="nav">
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Disabled</a></li>
							</nav>
						</li>
				</nav>
			</li>
			<li class="menuphu"><a class="nav-link" href="#">BỘ SƯU TẬP</a>
				<nav id="menu-phu-cap1-1" class="nav-phong">
					<li class="menuc1"><a class="nav-link" href="#">GHẾ NGỒI</a>
						<nav id="menu-phu-cap2" class="nav">
							<li><a class="nav-link" href="#">Sofa</a></li>
							<li><a class="nav-link" href="#">Ghế thư giãn</a></li>
							<li><a class="nav-link" href="#">Ghế dài</a></li>
							<li><a class="nav-link" href="#">Sofa góc</a></li>
						</nav>
					</li>
					<li class="menuc1"><a class="nav-link" href="#">BÀN</a>
						<nav id="menu-phu-cap2" class="nav">
							<li><a class="nav-link active" href="#">Active</a></li>
							<li><a class="nav-link" href="#">Active</a></li>
							<li><a class="nav-link" href="#">Active</a></li>
							<li><a class="nav-link disabled" href="#">Disabled</a></li>
						</nav></li>
						<li class="menuc1"><a class="nav-link" href="#">TỦ</a>
							<nav id="menu-phu-cap2" class="nav">
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Active</a></li>
								<li><a class="nav-link" href="#">Disabled</a></li>
							</nav>
						</li>
				</nav>
			</li>
			<li class="menuphu"><a class="nav-link" href="#">THIẾT KẾ NỘI THẤT</a></li>
		</nav>
	</div>
	<nav id="show-menu-phu" class="main-nav">
		<ul id="main-nav" class="main-nav-ul">
			<li><a href="#">Tùy chọn dịch vụ<span class="sub-arrow"></span></a>
				<ul>
					<li><a href="#">Phòng khách</a></li>
					<li><a href="#">Phòng ăn</a></li>
					<li><a href="#">Phòng ngủ</a></li>
					<li><a href="#">Phòng làm việc</a></li>
					<li><a href="#">Bếp</a></li>
					<li><a href="#">Hàng trang trí</a></li>
					<li><a href="#">Ngoại thất</a></li>
					<li><a href="#">Bộ sưu tập</a></li>
					<li><a href="#">Thiết kế nội thất</a></li>
				</ul>
			</li>
		</ul>
	</nav>

	@section('content')
	@show
	<footer id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto text-center">
					<h2 class="section-heading">Let's Get In Touch!</h2>
					<hr class="my-4">
					<p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 ml-auto text-center">
					<i class="fa fa-phone fa-3x mb-3 sr-contact" data-sr-id="8" style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "></i>
					<p>123-456-6789</p>
				</div>
				<div class="col-lg-4 mr-auto text-center">
					<i class="fa fa-envelope-o fa-3x mb-3 sr-contact" data-sr-id="9" style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "></i>
					<p>
						<a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript">

      // Menu-toggle button


      $(document).ready(function(){
      	$(".menu-icon").click( function(){
      		$(".menu").toggleClass("showing");
      		$(".row1").toggleClass("active");


      	});
        //toggle class sẽ chuyển tắt nếu gọi nó 1 lần nữa
        $( ".menu" ).mouseleave(function() {
        	$(".menu").toggleClass("showing");
        	$(".row1").toggleClass("active");

        });
        
        
        $(".nav-phong").mouseover(function() {
        	$(this).closest('li').find('a').addClass("active1");
        });

        $(".nav-phong").mouseout(function() {
        	$("a").removeClass("active1");
        });

        
        
        
        
        
    });

      // Scrolling Effect

      $(window).on("scroll", function() {
      	if($(window).scrollTop()) {
      		$(".row1").addClass("black");

      	}

      	else {
      		$(".row1").removeClass("black");
      	}
      });
  </script>
</body>
</html>