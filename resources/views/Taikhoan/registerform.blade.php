
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

       <form id="frmregistration">
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
                <button id="btnregister" type="button" class="btn btn-info">Đăng kí</button>
        </form>
     
    </div>
  </div>
  </div>
  </div>
  </div>