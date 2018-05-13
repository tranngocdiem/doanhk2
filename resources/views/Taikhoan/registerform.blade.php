
<!--Hiển thị modal đăng kí-->
 <div class="container">
  <div class="modal fade" id="modalregister" role="dialog">
  <div class="modal-dialog">
    <!--Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Đăng kí</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <form method="post" action="#" id="registerform">
                {{csrf_field()}}
                
                <label >Họ và tên</label>
                <input class="form-control" id="txtname" type="name" placeholder="Nhập tên" name="name" 
                 > 
                <label >Địa chỉ</label>
                <input class="form-control" id="txtaddress" type="name"  placeholder="Nhập địa chỉ" name="address">
                <label ">Số điện thoại</label>
                <input class="form-control" id="txtnumber" type="number" placeholder="Nhập số điện thoại" name="telephonenumber">
                <label >Tên đăng nhập</label>
                <input class="form-control" id="txtusername" type="name"  placeholder="Nhập tên đăng nhập"name ="username" >
                <label for="exampleInputPassword1">Mật khẩu</label>
                <input class="form-control" id="txtpassword" type="password" placeholder="Nhập mật khẩu" name="password" >
                <label for="exampleConfirmPassword">Nhập lại mật khẩu</label>
                <input class="form-control" id="txtconfirmpwd" type="password" placeholder="Xác nhận mật khẩu" name="confirmpwd">
                <label id="error" style="color: red"></label>
              <br>
                <button type="submit" class="btn btn-primary btn-block btn-large" id="register" onclick="return validate()">Đăng kí</button>
        </form>
    </div>
  </div>
  </div>
  </div>
  </div>