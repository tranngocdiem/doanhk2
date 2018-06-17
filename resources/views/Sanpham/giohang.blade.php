@extends('Sanpham._layoutsanpham')
@section('link')
@parent
<link rel="stylesheet" href="css/Sanpham/giohang.css">
@stop
@section('sub_content')
<div class="container-fluid">
  <div id = "dssp-giohang" class="row">
    <?php if(count($giohang)>0)
    {
      ?>
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
              <?php 
              $tongtien = 0;
              foreach($giohang as $row)
              {
                ?>
                <?php
                  $banggia = DB::table('banggia')
                   ->join('chuongtrinhkhuyenmai','banggia.makm','=','chuongtrinhkhuyenmai.makm')
                   ->where('banggia.maloai','=',$row->maloai)
                   ->where('banggia.isDeleted',0)
                   ->get();
                ?>
                <tr>
                <td  style="vertical-align: middle;">
                  <div class="media">
                    <a class="mr-3 d-none d-md-block"><img style="width: 300px;height:200px" src="{{ url('/') }}/image/sanpham/<?php echo $row->url?>" class="img-fluid" alt="product"></a>
                    <div style="margin:auto">
                      <a  class="h5"><?php echo $row->tenloai ?></a>
                      <div class="small"><?php echo $row->mota ?></div>
                      <div class="mb-1">
                        <span class="d-inline d-sm-none small">Giá: <span class="text-theme"><?php echo $banggia[0]->gia - ($banggia[0]->gia * $banggia[0]->discount / 100); ?></span></span>
                        <span class="badge badge-success">Còn hàng</span>
                      </div>
                      <div class="btn-group btn-group-sm">
                        <button data-maddh="<?php echo $row->maddh?>" data-maloai="<?php echo $row->maloai?>" class="btn btn-light py-0" id="del">Xóa</button>
                      </div>
                    </div>
                  </div>
                </td>
                <td style="vertical-align: middle;" class="text-center">
                  <div data-gia="<?php echo $banggia[0]->gia - ($banggia[0]->gia * $banggia[0]->discount / 100); ?>"  style="width: 120px" class="input-group input-group-sm input-group-qty d-inline-flex mb-2 quantity">
                    <div class="input-group-prepend"><button data-maddh="<?php echo $row->maddh?>" data-maloai="<?php echo $row->maloai?>" class="btn btn-light btn-down" type="button"><i id="down" class="fas fa-chevron-down"></i></button></div>
                    <input  type="text" class="form-control text-center border-light" aria-label="Quantity" value="<?php echo $row->soluong ?>" min="1">
                    <div class="input-group-append"><button data-maddh="<?php echo $row->maddh?>" data-maloai="<?php echo $row->maloai?>" class="btn btn-light btn-up" type="button"><i id="up" class="fas fa-chevron-up"></i></button></div>
                  </div>
                  <div class="d-block d-sm-none">
                    <small>Subtotal </small><div class="text-theme"><?php echo $banggia[0]->gia - ($banggia[0]->gia * $banggia[0]->discount / 100); ?></div>
                  </div>
                </td>
                <td style="vertical-align: middle;" class="d-none d-sm-table-cell">
                  <ul class="card-text list-inline">
                    <li class="list-inline-item"><span class="text-theme"><?php echo $banggia[0]->gia - ($banggia[0]->gia * $banggia[0]->discount / 100); ?></span></li>
                    <!--nếu có giảm giá thì ở đây-->
                    <li class="list-inline-item"><del class="text-muted small"><?php echo $banggia[0]->gia;?></del></li>
                  </ul>
                </td>
                <td style="vertical-align: middle;" class="d-none d-sm-table-cell"><span class="text-theme tongtien" data-tong = "<?php echo ($banggia[0]->gia - ($banggia[0]->gia * $banggia[0]->discount / 100))*$row->soluong ?>"><?php echo ($banggia[0]->gia - ($banggia[0]->gia * $banggia[0]->discount / 100))*$row->soluong ?></span></td>
                <?php
                $tongtien += ($banggia[0]->gia - ($banggia[0]->gia * $banggia[0]->discount / 100))*$row->soluong;
              }
                ?>
              
              </tr>
              <tr>
              <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i>Tiếp tục mua hàng</a></td>
              <td class="d-none d-sm-table-cell"></td>
              <td style="text-align: center;" class="hidden-xs"><strong>Thành tiền :</strong>
              <div class="d-block d-sm-none">
                    <div class="text-theme">$1.99</div>
              </div>
              </td>
              <td class="d-none d-sm-table-cell"><strong id="thanhtien" data-thanhtien = "<?php echo $tongtien?>"><?php echo $tongtien?></strong><span style="font-weight: bold; color: red;">  VNĐ</span></td>
              
            </tr>
            <tr>
              <td class="d-none d-sm-table-cell"></td>
              <td class="d-none d-sm-table-cell"></td>
              <td><a href="#" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a></td>
              <td class="d-none d-sm-table-cell"></td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <?php
    }
    else echo '<h5 style = "margin-top: 200px; margin-left: 500px; color:red;">Không có sản phẩm nào trong giỏ hàng!!!</h5>'

    ?>
  </div>
</div>



@stop
<?php if(count($giohang)<=0)
    {
      ?>
@section('footer')
<div style="padding-top: 200px; ">
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
<?php
}
?>
