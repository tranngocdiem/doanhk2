@extends('_layout')
@section('title') 
Đơn hàng của tôi
@stop
@section('content')
<?php
  if(isset($dondathang))
  {
    $stt = 0;

?>
<div style="padding-top: 50px; margin-left: 20px">
<h3 style=" margin-left: 10px; margin-top: 22px; margin-bottom: 20px;">THÔNG TIN ĐẶT HÀNG</h3>
<table class="responstable table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Mã đơn hàng</th>
      <th scope="col">Ngày mua</th>
      <th scope="col">Sản phẩm</th>
      <th scope="col">Tổng tiền</th>
      <th scope="col">Trạng thái đơn hàng</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($dondathang as $value) {
      $stt = $stt + 1;
      $sanpham = DB::table('loaisanpham')
             ->join('chitietdonhang','chitietdonhang.maloai','=','loaisanpham.maloai')
             ->where('chitietdonhang.maddh',$value->maddh)
             ->get();
      $tongtien = DB::table('chitietdonhang')
          ->where('chitietdonhang.maddh',$value->maddh)
          ->sum('gia');
   ?>

    <tr>
      <td><?php echo $stt ?></td>
      <td><?php echo $value->maddh ?></td>
      <td><?php echo $value->ngaydat ?></td>
      <td><?php foreach ($sanpham as $row) {
          echo $row->tenloai;
          echo '<span style = "margin-left:10px"> - </span>';
          echo '<span style = "margin-left:10px"> Số lượng: '.$row->soluong.' </span>';
          echo '<br>';
      } ?></td>
      <td><?php echo $tongtien ?> VNĐ</td>
      <?php if($value->trangthai== 1)
      {
         echo '<td> Đã đặt hàng </td>';
      }
      else if($value->trangthai == -1)
      {
          echo '<td> Đã hủy </td>';
      }
      else 
      {
         echo '<td>Đã nhận</td>';
      }
      ?>

    </tr>
   <?php } ?>
  </tbody>
</table>
<?php
}
else echo '<h3> Không có dữ liệu!!! </h3>';
?>
</div>
@stop
@section('footer')
<div style="padding-top: 80px">
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
@show