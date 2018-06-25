<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@section('title')Trang quản lý@show</title>
  @section('link')
  <!-- Bootstrap core CSS-->
  <link rel="stylesheet" href="{{ url('/') }}/css/bootstrap.min.css">
  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="{{ url('/') }}/web-fonts-with-css/css/font-awesome.min.css">
  <!-- Custom styles for this template-->
  <link href="{{ url('/') }}/css/admin/sb-admin.css" rel="stylesheet">
  @show
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <script type="text/javascript">
    var url="{!! url('') !!}";
  </script>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Trang quản lý</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{!! url('/admin') !!}" >
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Bảng điều khiển</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="{!! url('/admin') !!}">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Thống kê</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Danh mục quản lý</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
               <a class="nav-link" href="{!! url('/admin/qlsp') !!}">
                <span class="nav-link-text">Quản lý sản phẩm</span>
               </a>
           </li>
            <li>
              <a href="{!! url('/admin/qlddh') !!}">Quản lý đơn đặt hàng</a>
            </li>
            <li>
              <a href="{!! url('/admin/quanlytaikhoan') !!}">Quản lý tài khoản</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Thông báo
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <a href="{!! url('/account/logout') !!}" class="nav-link" >
            <i class="fa fa-fw fa-sign-out"></i>Đăng xuất</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <!-- Nội dung trang chính -->
    <div class="container-fluid">
      <!-- Breadcrumbs-->
     @section('content')
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">Thống kê doanh thu</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{!! url('/admin/tkdt') !!}">
              <span class="float-left">Xem chi tiết</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
               
              </div>
              <div class="mr-5">Thống kê sản phẩm</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{!! url('/admin/tksp') !!}">
              <span class="float-left">Xem chi tiết</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                 <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">Thống kê đơn đặt hàng</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{!! url('/admin/tkdh')!!}">
              <span class="float-left">Xem chi tiết</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
       
      </div>
      @section('chart')
      
      @show
    </div>
     @show
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    @section('js')
    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('/') }}/js/jquery.min.js"></script>
    <script src="{{ url('/') }}/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ url('/') }}/js/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ url('/') }}/js/admin/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <!-- Toggle between fixed and static navbar-->
    <!-- google chart -->
    
    
  
    @show
  </div>
</body>

</html>
