
@extends('Sanpham._layoutsanpham')
@section('link')
@parent
<link rel="stylesheet" href="{{ url('/') }}./css/Sanpham/dathang.css">
@stop
@section('title') 
Thông tin đặt hàng
@stop
@section('sub_content')
    <!-- paymen progress -->
	<div class="container">
		<div class="shipping-header">
			<div class="row row-style-1">
				<div class="col-lg-8">
					<div class="row bs-wizard">
						<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 bs-wizard-step disabled">
							<div class="text-center bs-wizard-stepnum">
								<span class="hidden-xs">Thông tin giao hàng</span>
								<!-- <span class="visible-xs-inline-block">Địa Chỉ</span> -->
							</div>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:200%"></div>
							</div>
							<span class="bs-wizard-dot">1</span>
						</div>

						<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 bs-wizard-step disabled">
							<div class="text-center bs-wizard-stepnum">
								<span class="hidden-xs">Thanh Toán &amp; Đặt Mua</span>
								<!-- <span class="visible-xs-inline-block">Thanh Toán</span> -->
							</div>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:200%"></div>
							</div>
							<span class="bs-wizard-dot">2</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end payment progress -->
	<form style="margin-left:400px " id="dathangfrm">
             <div class="form-group">
                <label style="font-weight: bold;">Họ tên người nhận</label>
                <input class="form-control" id=name" type="name" placeholder="Nhập tên" name="name" value=""> 
              </div>
              <div class="form-group">
                <label style="font-weight: bold;" >Địa chỉ nhận hàng:</label>
                <input  class="form-control" id="address" type="name"  placeholder="Nhập địa chỉ" name="address" value="">
              </div>
              <div class="form-group">
                <label style="font-weight: bold;">Số điện thoại</label>
                <input  class="form-control" id="number" type="number" placeholder="Nhập số điện thoại" name="telephonenumber" value="">
              </div>
              <div class="form-group">
                <label style="font-weight: bold;">Ngày giao dự kiến</label>
                <input  class="form-control" id="number" type="number" placeholder="Ngày giao" name="telephonenumber" value="">
              </div>
              <button style="float: right;" id="btnupdate" type="button" class="btn btn-primary">Đặt mua</button>
        </form>
</div>
@stop
@section('footer')
<div style="padding-top: 400px">
  <footer id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading">Liên hệ</h2>
          <hr class="my-4">
          <p class="mb-5">Địa chỉ: DTQfurniture, khu phố 6, phường Linh Trung, quận Thủ Đức, TPHCM</p>
          <p class="mb-5">Giờ mở cửa: 8:00 AM - 20:00 PM</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center">
          <i class="fas fa-phone"></i>
          <p>123-456-6789</p>
        </div>
        <div class="col-lg-4 mr-auto text-center">
         <!-- <i class="fa fa-envelope-o fa-3x mb-3 sr-contact" data-sr-id="9" style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "></i>-->
         <p>
          <i class="fas fa-envelope"></i>
          <br>
          <a href="mailto:your-email@your-domain.com">dtqfurniture@gmail.com</a>
        </p>
      </div>
    </div>
  </div>
</footer>
</div>
@stop