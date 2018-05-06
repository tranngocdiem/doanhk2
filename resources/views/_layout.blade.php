<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@section('title') Nội thất @show</title>
  @section('link')
  <link rel="stylesheet" href="{{ url('/') }}./css/Home/home.css">
  <link rel="stylesheet" href="{{ url('/') }}./css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ url('/') }}./web-fonts-with-css/css/fontawesome-all.min.css">
  @show
  <script src="{{ url('/') }}./js/jquery-3.3.1.min.js"></script>
  <script src="{{ url('/') }}./js/popper.min.js"></script>
  <script src="{{ url('/') }}./js/bootstrap.min.js"></script>
</head>
<body>
   <!-- header!-->
  <header>
    <div>
      <div class="hide-content-1" aria-hidden="true">
        <nav class="sidebar">
          
          <div class="menu">
            <a href="#">
              <img class="logo" src="{{ url('/') }}./image/logo.png" style="width: 50px;height: 50px;" alt="" id="logo"/>
            </a>

            <ul>
              <li><a href="">Trang chủ</a></li>
              <li><a href="">Dịch vụ</a></li>
              <li><a href="">Sản phẩm</a></li>
              <li><a href="">Liên hệ</a></li>
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
              <li><a href="" class="fas fa-shopping-cart""><i>Giỏ hàng</i></a></li>
              <li><a href="" class="fas fa-heart"><i>Sản phẩm bán chạy</i></a></li>
              <li class="icon3"><a href="" class="fas fa-sign-in-alt"><i>Đăng nhập</i></a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
   
  </header>
  <!-- end header!-->
  <!--<div class = "content">

  	

  </div>-->
  @yield('content')
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
@show

</body>
</html>

