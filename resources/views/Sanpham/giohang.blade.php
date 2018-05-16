@extends('Sanpham._layoutsanpham')
@section('link')
@parent
<link rel="stylesheet" href="css/Sanpham/giohang.css">
@stop
@section('sub_content')
<div class="container-fluid">
  <div class="row">
    <div class="table-responsive">
      <div class="table-responsive">
        <div class="table-responsive">
          <table class="table table-cart">
            <thead>
              <tr>
                <th scope="col" class="w-50">Sản phẩm</th>
                <th scope="col" class="w-10 text-center">Số lượng</th>
                <th scope="col" class="d-none d-sm-table-cell">Giá</th>
                <th scope="col" class="d-none d-sm-table-cell">Tổng tiền</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td  style="vertical-align: middle;">
                  <div class="media">
                    <a href="detail.html" class="mr-3 d-none d-md-block"><img src="image/sanpham/sofa-idaisy-500.jpg" class="img-fluid" alt="product"></a>
                    <div style="margin:auto" class="media-body">
                      <a href="#" class="h6">Tên sản phẩm ở đây</a>
                      <div class="small">kích thước: ?m <span class="mx-2">|</span> Màu sắc: xanh</div>
                      <div class="mb-1">
                        <span class="d-inline d-sm-none small">Price: <span class="text-theme">$13.50</span></span>
                        <span class="badge badge-success">Còn hàng</span>
                      </div>
                      <div class="btn-group btn-group-sm">
                        <button class="btn btn-light py-0 d-none d-md-block">Cập nhật số lượng</button>
                        <button class="btn btn-light py-0" id="del">Xóa</button>
                      </div>
                    </div>
                  </div>
                </td>
                <td style="vertical-align: middle;" class="text-center">
                  <div style="width: 120px" class="input-group input-group-sm input-group-qty d-inline-flex mb-2">
                    <div class="input-group-prepend"><button class="btn btn-light btn-down" type="button"><i id="down" class="fas fa-chevron-down"></i></button></div>
                    <input id="quantity" type="text" class="form-control text-center border-light" aria-label="Quantity" value="1" min="1">
                    <div class="input-group-append"><button class="btn btn-light btn-up" type="button"><i id="up" class="fas fa-chevron-up"></i></button></div>
                  </div>
                  <div class="d-block d-sm-none">
                    <small>Subtotal </small><div class="text-theme">$13.50</div>
                  </div>
                </td>
                <td style="vertical-align: middle;" class="d-none d-sm-table-cell">
                  <ul class="card-text list-inline">
                    <li class="list-inline-item"><span class="text-theme">$13.50</span></li>
                    <!--nếu có giảm giá thì ở đây-->
                    <li class="list-inline-item"><del class="text-muted small">$15.00</del></li>
                  </ul>
                </td>
                <td style="vertical-align: middle;" class="d-none d-sm-table-cell"><span class="text-theme">$13.50</span></td>
              </tr>
              <tr>
                <td  style="vertical-align: middle;">
                  <div class="media">
                    <a href="detail.html" class="mr-3 d-none d-md-block"><img src="image/sanpham/sofa-idaisy-500.jpg" class="img-fluid" alt="product"></a>
                    <div style="margin:auto" class="media-body">
                      <a href="#" class="h6">Tên sản phẩm ở đây</a>
                      <div class="small">kích thước: ?m <span class="mx-2">|</span> Màu sắc: xanh</div>
                      <div class="mb-1">
                        <span class="d-inline d-sm-none small">Price: <span class="text-theme">$13.50</span></span>
                        <span class="badge badge-success">Còn hàng</span>
                      </div>
                      <div class="btn-group btn-group-sm">
                        <button class="btn btn-light py-0 d-none d-md-block">Cập nhật số lượng</button>
                        <button class="btn btn-light py-0" id="del">Xóa</button>
                      </div>
                    </div>
                  </div>
                </td>
                <td style="vertical-align: middle;" class="text-center">
                  <div style="width: 120px" class="input-group input-group-sm input-group-qty d-inline-flex mb-2">
                    <div class="input-group-prepend"><button class="btn btn-light btn-down" type="button"><i class="fas fa-chevron-down"></i></button></div>
                    <input type="text" class="form-control text-center border-light" aria-label="Quantity" value="1" min="1">
                    <div class="input-group-append"><button class="btn btn-light btn-up" type="button"><i class="fas fa-chevron-up"></i></button></div>
                  </div>
                  <div class="d-block d-sm-none">
                    <small>Subtotal </small><div class="text-theme">$13.50</div>
                  </div>
                </td>
                <td style="vertical-align: middle;" class="d-none d-sm-table-cell">
                  <ul class="card-text list-inline">
                    <li class="list-inline-item"><span class="text-theme">$13.50</span></li>
                    <!--nếu có giảm giá thì ở đây-->
                    <li class="list-inline-item"><del class="text-muted small">$15.00</del></li>
                  </ul>
                </td>
                <td style="vertical-align: middle;" class="d-none d-sm-table-cell"><span class="text-theme">$13.50</span></td>
              </tr>
              
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!---->
<script type="text/javascript">
  $(document).ready(function(){
    $(".table").on('click','#del',function(){
      $(this).closest('tr').remove();
    });
    $('.btn-up').click(function () {

      if ($(this).parent('div').prev("input").first().val() < 100) {
        $(this).parent('div').prev("input").first().val(+$(this).parent('div').prev("input").first().val() + 1);
      }
    });
    $('.btn-down').click(function () {
      if ($(this).parent('div').next("input").first().val() > 1) {

        $(this).parent('div').next("input").first().val(+$(this).parent('div').next("input").first().val() - 1);
      }
    });
  });
</script>



@stop

