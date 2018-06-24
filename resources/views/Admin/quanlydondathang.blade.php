@extends('Admin._layoutadmin')
@section('link')
@parent
<link href="{{ url('/') }}/css/admin/quanlysanpham.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
@stop
@section('content')
<div class="row">
        <br>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading" >
                    <div class="row">
                        <div style="font-weight: bold; font-size: 20px;" class="col-lg-8">
                            Danh sách đơn đặt hàng
                        </div>   
                    </div>
                </div>
            
                <!-- /.panel-heading -->

                <input type="text" id="myInput"  placeholder="Tìm kiếm..." title="Type in a name" style="float: right; margin-top: 20px; margin-bottom: 10px; width: 400px; height: 40px; ">
                <div style="margin-top: 20px" class="panel-body">
                    <table width="100%" class="table  table-bordered table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th>Mã đơn đặt hàng</th>
                                <th>Ngày đặt hàng</th>
                                <th>Thông tin đặt hàng</th>
                                <th>Thông tin sản phẩm</th>
                                <th>Thông tin nhận hàng</th>
                                <th>Tổng tiền (VNĐ)</th>
                                <th>Tình trạng đơn hàng</th>
                            </tr>
                        </thead>
                        <tbody class="content">
                            <?php
                            foreach ($dondathang as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row->maddh ?></td>
                                    <td><?php echo $row->ngaydat?></td>
                                    <td> Mã tài khoản: <?php echo $row->matk ?> <br> Tên người dùng: <?php echo $row->hoten ?> <br> Số điện thoại: <?php echo $row->sdt ?></td>
                                    <?php $chitiet = DB::table('chitietdonhang')
                                                     ->join('loaisanpham','loaisanpham.maloai','=','chitietdonhang.maloai')
                                                     ->where('chitietdonhang.maddh',$row->maddh)
                                                     ->get(); ?>
                                    <td>
                                        <?php foreach ($chitiet as $key) {
                                            echo $key->tenloai;
                                            echo '<span style = "margin-left:10px"> - </span>';
                                            echo '<span style = "margin-left:10px"> Số lượng: '.$key->soluong.' </span>';
                                            echo '<br>';
                                        } ?>
                                    </td>
                                    <td>Người nhận: <?php echo $row->nguoinhan; ?><br> Địa chỉ: <?php echo $row->diachi; ?><br>Số điện thoại: <?php echo $row->sdt; ?>
                                    </td>
                                    <?php
                                     $tongtien = DB::table('chitietdonhang')
                                                 ->where('chitietdonhang.maddh',$row->maddh)
                                                 ->sum('gia');
                                    ?>
                                    <td><?php echo $tongtien  ?></td>
                                    <td><label class="tinhtrang"><?php if($row->trangthai == '-1')
                                              echo 'Đã hủy';
                                              else if($row->trangthai=='0')
                                              echo 'Đang trong giỏ hàng';
                                              else if($row->trangthai=='1')
                                              echo 'Đã đặt hàng';
                                              else if($row->trangthai=='2')
                                              echo 'Đã giao';?></label>
                                              <span><button  class="btn-primary myBtn" value="<?php echo $row->maddh; ?>"> Thay đổi</button></span>
                                    
                                    </td>

                                </tr>
                                <?php
                            }
                            ?>
                            


                        </tbody>
                    </table>
                    <div  class="modal">
                                    <div class="modal-content">
                                         <span class="close">&times;</span>
                                         <br>
                                          <label style="margin-left: 150px;">Mã đơn đặt hàng: </label>
                                          <input style="width: 50%;margin-left:150px; color: red;" type="text" id="madondathang" value="" disabled></p>
                                             <div>
                                             <select style="margin-bottom: 30px; margin-left:150px; width: 50%; height: 30px" id="cmbtrangthai">
                                                <option value="-1">Đã hủy</option>
                                                <option value="1">Đã đặt hàng</option>
                                                <option value="2">Đã giao</option>
                                            </select>
                                             </div>
                                             <button style="width: 50%; margin-left: 150px;" type="button" class="btn btn-primary btn-block btn-large" id="btnthaydoi">Xác nhận</button>
                                             <!-- </form> -->
                                    </div>
            
                    </div>
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <?php
                        if($dondathang->currentPage()!=1)
                        {
                          ?>
                         <li class="page-item">
                            <a class="page-link" href="{!!$dondathang->url($dondathang->currentPage()-1)!!}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <?php
                        }
                        ?>
                        <?php
                          for($i=1; $i<=$dondathang->lastPage(); $i = $i + 1) 
                          {
                            ?>
                            <li class="page-item">
                              <a class="page-link" href="{!!$dondathang->url($i)!!}">{!!$i!!}</a>
                            </li>
                            <?php
                          }
                          if($dondathang->currentPage()!=$dondathang->lastPage())
                          {
                        ?>
                         <li class="page-item">
                         <a class="page-link" href="{!!$dondathang->url($dondathang->currentPage()+1)!!}" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                          <span class="sr-only">Next</span>
                         </a>
                        </li>
                        <?php
                        }
                      ?>
                    </ul>
                  </nav>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@stop
@section('js')
@parent
<script type="text/javascript">
                $(document).ready(function(){
                    

                // When the user clicks the button, open the modal 
                $(".myBtn").click( function() {
                    
                    $('.modal').addClass("active");
                    $('#madondathang').val($(this).val())

                });

                // When the user clicks on <span> (x), close the modal
                
                $(".close").click( function() {
                    $(this).parent().parent().removeClass("active");
                }); 
                
                $(document).click(function (e) {
                    if ($(e.target).is('.modal')) {
                    $(".modal").removeClass("active");
                }
                });

             });
                
</script>
 <script type="text/javascript" src="{!! url('/js/admin/quanlydondathang.js') !!}"></script>
 <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".content tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</script>
@stop