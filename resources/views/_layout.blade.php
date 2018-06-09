
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@section('title') Nội thất @show</title>
  
  @section('link')
  <link rel="stylesheet" href="{{ url('/') }}/css/Home/home.css">
  <link rel="stylesheet" href="{{ url('/') }}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ url('/') }}/web-fonts-with-css/css/fontawesome-all.min.css">
  @show
  <script src="{{ url('/') }}/js/jquery-3.3.1.min.js"></script>
  <script src="{{ url('/') }}/js/popper.min.js"></script>
  <script src="{{ url('/') }}/js/bootstrap.min.js"></script>

</head>
<body>
  <!-- ẩn biến url cho đường dẫn route-->
  <script type="text/javascript">
    var url="{!! url('') !!}";
  </script>
 <!-- header!-->
 <header>
  <div>
    <div class="hide-content-1" aria-hidden="true">
      <nav class="sidebar">

        <div class="menu">
          <a href="{!! url('/') !!}">
            <img class="logo" src="{{ url('/') }}./image/logo1.png" style="width: 100%;height: 140px;" alt="" id="logo"/>
          </a>

          <ul>
            <li><a href="{!! url('/') !!}">Trang chủ</a></li>
            <li><a href="">Dịch vụ</a></li>
            <li><a href="{!! url('/sanpham') !!}">Sản phẩm</a></li>
            <li><a href="#contact">Liên hệ</a></li>
            <li><a href="">Tin tức</a></li>
            <li><a href="">Trợ giúp</a></li>
          </ul>
          <ul class="social-icon" >
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
            <li><a href="" class="fas fa-shopping-cart"><i>Giỏ hàng</i></a></li>
            <li><a href="" class="fas fa-heart"><i>Sản phẩm bán chạy</i></a></li>
            @if (Session::get('username') !== null)
            <li class="dropdown" id="modallayout"><a href="#" class="fas fa-user" ><i>Tài khoản</i></a>
            <div style="background-color: rgba(0,11,12,0.8);" class="dropdown-content">
                <a href="{!! url('/account/info') !!}" style="font-family: Helvetica Neue; font-size:18px ;">Thông tin tài khoản</a>
                <a href="#" data-toggle="modal"  style="font-family: Helvetica Neue; font-size:18px ;">Đơn hàng của tôi</a>
                <a href="{!! url('/account/logout') !!}" style="font-family: Helvetica Neue; font-size:18px ;">Đăng xuất</a>
            </div>
            </li>
            @else
             <li class="dropdown" id="modallayout"><a href="#" class="fas fa-sign-in-alt" ><i>Tài khoản</i></a>
              <div style="background-color: rgba(0,11,12,0.8);" class="dropdown-content">
                <a href="#" data-toggle="modal" data-target="#myModal" style="font-family: Helvetica Neue; font-size:18px ;">Đăng nhập</a>
                <a href="#" data-toggle="modal" data-target="#modalregister"style="font-family: Helvetica Neue; font-size:18px ;"> Đăng kí</a>
              </div>
            </li>
            @endif
          </ul>
        </div>
      </div>

    </div>
  </div>


</header>
<!--Hiển thị modal đăng nhập-->
@include('Taikhoan.loginform')
@include ('Taikhoan.registerform')

<!-- end header!-->
  <!--<div class = "content">
   
  

  </div>-->
  @section('content')
  @show
  @section('footer')
<div>
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
@show
<!--file js của từng trang-->
@section('js')
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
      // Select all links with hashes
      $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
      ) {
      // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: (target.offset().top-77)
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

</script>
<script type="text/javascript" src="{!! url('/js/Taikhoan/registerform.js') !!}"></script>
<script type="text/javascript" src="{!! url('/js/Taikhoan/loginform.js') !!}"></script>

@show


</body>
</html>

