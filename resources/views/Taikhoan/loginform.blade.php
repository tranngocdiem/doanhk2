<div class="container">
  <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Đăng nhập</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
      <div class="card-body">
        <form method="post" id="loginform">
          {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputEmail1">Tên đăng nhập</label>
            <input class="form-control" id="txtusername" type="name" aria-describedby="emailHelp" placeholder="Enter email" style="min-width: 100%" name="username" required="false">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mật khẩu</label>
            <input class="form-control" id="txtpassword" type="password" placeholder="Password" name="password">
          </div>
          <label id="error" style="color: red"></label>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Nhớ mật khẩu</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block btn-large" id="login" onclick="return checkrequriedform()">Đăng nhập</button>
          <a class="d-block small" href="forgot-password.html">Quên mật khẩu</a>
          </div>
        </form>
     </div>
    </div>      
    </div>
  </div>
  
</div>
