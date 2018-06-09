@extends('_layout')
@section('title') 
Thông tin tài khoản
@stop
@section('content')
<div style="padding-top: 100px; margin-left: 300px">
<h4 style="margin-left: 80px">THÔNG TIN TÀI KHOẢN</h4>
<form id="informationaccount">
             <div class="form-group">
                <label >Họ và tên</label>
                <input style="font-weight: bold;" class="form-control" id=name" type="name" placeholder="Nhập tên" name="name" value="<?php echo $acc[0]->hoten?>"> 
              </div>
              <div class="form-group">
                <label >Địa chỉ</label>
                <input style="font-weight: bold;" class="form-control" id="address" type="name"  placeholder="Nhập địa chỉ" name="address" value="<?php echo $acc[0]->diachi?>">
              </div>
              <div class="form-group">
                <label ">Số điện thoại</label>
                <input style="font-weight: bold;" class="form-control" id="number" type="number" placeholder="Nhập số điện thoại" name="telephonenumber" value="<?php echo $acc[0]->sdt?>">
              </div>
              <div class="form-group">
                <label >Tên đăng nhập</label>
                <input style="font-weight: bold;" class="form-control" id="username" type="name"  placeholder="Nhập tên đăng nhập"name ="username" value="<?php echo $acc[0]->tentk?>">
              </div>
              <input type="button" value="Cập nhật mật khẩu" onclick="myFunction()" class="btn btn-primary"></button>

              <div style="display: none;" id="myDIV">
              	<br>
              <div class="form-group">
                <label >Mật khẩu cũ</label>
                <input style="font-weight: bold;" class="form-control" id="passwordold" type="password" placeholder="Nhập mật khẩu" name="password" >
              </div> 
               <div class="form-group">
                 <label >Mật khẩu mới</label>
               	 <input style="font-weight: bold;" class="form-control" id="passwordnew" type="password" placeholder="Nhập mật khẩu" name="password" >
               </div> 
               <div class="form-group">
                <label >Nhập lại mật khẩu</label>
                <input style="font-weight: bold;" class="form-control" id="password_re" type="password" placeholder="Nhập mật khẩu" name="password" >
               </div> 
              </div>
                <button id="btnupdate" type="button" class="btn btn-primary">Cập nhật</button>
        </form>
</div>
<br>
@stop
@section('footer')
<div style="padding-top: 700px">
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
@section('js')
@parent
<script>
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
@show