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
                        <div class="col-lg-8">
                            Quản lý tài khoản
                        </div>   
                        <div class="col-lg-4" style="text-align: right">
                            <button type="button" class="btnaddaccount btn btn-outline btn-success" data-toggle="collapse"  href="#collapseOne">Thêm tài khoản</button>
                        </div>
                    </div>
                </div>

                
                <div style="margin-top: 20px" id="collapseOne" class="panel-collapse collapse">
                   
                   <form style="width: 70%;">
                                <div class="form-group">
                                <label >Họ và tên</label>
                                <input class="form-control" id="txtname_re" type="name" placeholder="Nhập tên" name="name" 
                                 > 
                              </div>
                              <div class="form-group">
                                <label >Địa chỉ</label>
                                <input class="form-control" id="txtaddress_re" type="name"  placeholder="Nhập địa chỉ" name="address">
                              </div>
                              <div class="form-group">
                                <label ">Số điện thoại</label>
                                <input class="form-control" id="txtnumber_re" type="number" placeholder="Nhập số điện thoại" name="telephonenumber">
                              </div>
                              <div class="form-group">
                                <label >Tên đăng nhập</label>
                                <input class="form-control" id="txtusername_re" type="name"  placeholder="Nhập tên đăng nhập"name ="username" >
                              </div>
                              <div class="form-group">
                                <label >Mật khẩu</label>
                                <input class="form-control" id="txtpassword_re" type="password" placeholder="Nhập mật khẩu" name="password" >
                              </div> 
                              <div class="form-group">
                                <label >Nhập lại mật khẩu</label>
                                <input class="form-control" id="txtconfirmpwd_re" type="password" placeholder="Xác nhận mật khẩu" name="confirmpwd">
                              </div>
                              <div class="form-group">
                                <label>Chọn loại tài khoản: </label>
                                <select id="cmbloaitk" style="height: 40px">
                                    <option value="0">Admin</option>
                                    <option value="1">Khách hàng</option>
                                </select>
                              </div>
                                <button id="btnregister" type="button" class="btn btn-primary">Đăng kí</button>

                        </div>
                    </form>
                           
                 </div>
             </div>
        </div>
            
                <!-- /.panel-heading -->

                <input type="text" id="myInput"  placeholder="Tìm kiếm..." title="Type in a name" style="float: right; margin-top: 20px; margin-bottom: 10px; width: 400px; height: 40px; ">
                <div style="margin-top: 20px" class="panel-body">

                    <table width="100%" class="table table-bordered table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th>Mã tài khoản</th>
                                <th>Tên tài khoản</th>
                                <th>Thông tin cá nhân</th>
                                <th>Loại tài khoản</th>
                            </tr>
                        </thead>
                        <tbody class="content">
                            <?php
                            foreach ($taikhoan as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row->matk ?></td>
                                    <td><?php echo $row->tentk?></td>
                                    <td>Họ tên: <?php echo $row->hoten?>
                                        <br>
                                        Số điện thoại: <?php echo $row->sdt?>
                                        <br>
                                        Địa chỉ: <?php echo $row->diachi?>
                                        <br>

                                    </td>
                                    <td><?php if($row->loaitk==1)
                                        echo 'Khách hàng';
                                        else echo 'Admin';?>
                                    </td>

                                </tr>
                                <?php
                            }
                            ?>
                            


                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                   <!--  {{$taikhoan->links()}} -->
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <?php
                        if($taikhoan->currentPage()!=1)
                        {
                          ?>
                         <li class="page-item">
                            <a class="page-link" href="{!!$taikhoan->url($taikhoan->currentPage()-1)!!}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <?php
                        }
                        ?>
                        <?php
                          for($i=1; $i<=$taikhoan->lastPage(); $i = $i + 1) 
                          {
                            ?>
                            <li class="page-item">
                              <a class="page-link" href="{!!$taikhoan->url($i)!!}">{!!$i!!}</a>
                            </li>
                            <?php
                          }
                          if($taikhoan->currentPage()!=$taikhoan->lastPage())
                          {
                        ?>
                         <li class="page-item">
                         <a class="page-link" href="{!!$taikhoan->url($taikhoan->currentPage()+1)!!}" aria-label="Next">
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
@stop
@section('js')
@parent
<!-- <script type="text/javascript">
                $(document).ready(function(){
                    

                // When the user clicks the button, open the modal 
                $(".myBtn").click( function() {
                    
                    $(this).parent().find('.modal').addClass("active");

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
                
</script> -->
 <script type="text/javascript" src="{!! url('/js/Admin/quanlytaikhoan.js') !!}"></script>
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