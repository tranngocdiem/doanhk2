@extends('_layout')
@section('title') 
Sản phẩm
@stop
@section('link')
@parent
<link rel="stylesheet" href="{{ url('/') }}./css/Sanpham/sanpham.css">
@stop
@section('content')
	<br>
	<br>
	<br>
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
@section('sub_content')
@show
@stop
	