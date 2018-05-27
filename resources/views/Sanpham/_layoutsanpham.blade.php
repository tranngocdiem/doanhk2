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

	<div id="menu-phu" class="navbar-collapse collapse show">
		<nav id="nav" class="navbar-nav nav-dropdown">
			<ul id="nav-chude">
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
			</ul>
		</nav>
	</div>
	
@section('sub_content')
@show
@stop
	