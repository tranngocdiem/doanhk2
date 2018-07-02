function CheckInvalidUsername($username,$result)
   {
   		
			var _token = $('meta[name="csrf-token"]').attr('content');
		    $.ajax({
			type: 'POST',
			url: url + '/account/checkusername',
			cache: false,
			data: {'_token': _token,'username':$username}
			})
			.done(function($re) {
				if($re=='0'){
					return $result(true);
				}
				else{
					return $result(false);
				}

			})
			.fail(function(){
				return $result(false);
			});
		

   }

 function Checkpassold($passwordold,$result)
 {
 		var _token = $('meta[name="csrf-token"]').attr('content');
		    $.ajax({
			type: 'POST',
			url: url + '/account/checkpassold',
			cache: false,
			data: {'_token': _token,'passwordold':$passwordold}
			})
			.done(function($re) {
				if($re=='1'){
					return $result(true);
				}
				else{
					return $result(false);
				}

			})
			.fail(function(){
				return $result(false);
			});
			
 }

 function Updatetaikhoan($hoten, $diachi, $sdt, $tentk , $matkhau)
 {
 		if($matkhau == "" )
 		{
 			$listparam = {
 							'hoten' : $hoten,
 							'diachi' : $diachi,
 							'sdt' : $sdt,
 							'tentk' : $tentk,
 						 };

 		}
 		else $listparam = {
 						'hoten' : $hoten,
 						'diachi' : $diachi,
 						'sdt' : $sdt,
 						'tentk' : $tentk,
 						'matkhau':$matkhau,
 		};

 		var _token = $('meta[name="csrf-token"]').attr('content');
 		$.ajax({
			type: 'POST',
			url: url + '/account/updateinfo',
			cache: false,
			data: {'_token': _token,'info':$listparam}
			})
			.done(function($re){
				if($re== '1')
					alert('Cập nhật thành công');
				else 
					alert('Thất bại');
			})
			.fail(function(){
				return false;
			});
			

 }

 $(document).ready(function(){
 		 $('#passwordold').focusout(function(){
  	       $('#passwordold ~ .errpass').remove();
  	       //kiểm tra có để trống hay không?
  	       if($(this).val()=='')
  	       {
  	       		$('#passwordold').after('<label class = "errpass" style="color: red">Chưa xác nhận mật khẩu cũ</label>');
  	       		return;
  	       }
  	       //kiểm tra tên đăng nhập đã tồn tại chưa
  	       Checkpassold($(this).val(),function($re){
			if($re==false){
				$('#passwordold').after('<label class = "errpass" style="color: red">Mật khẩu không đúng</label>');
				document.getElementById('passwordold').value = '';
			}
			});
  	       
  	       
  });

  $('#username').focusout(function(){
  	       $('#username ~ .errusername').remove();
  	       //kiểm tra có để trống hay không?
  	       if($(this).val()=='')
  	       {
  	       		$('#username').after('<label class = "errusername" style="color: red">Chưa nhập tên đăng nhập</label>');
  	       		return;
  	       }
  	       var _token = $('meta[name="csrf-token"]').attr('content');
  	       $.ajax({
			type: 'POST',
			url: url + '/account/checkuniqueusername',
			cache: false,
			data: {'_token': _token}
			})
			.done(function($re) {
				if($re!='0')
				{
					if($('#username').val()!=$re)
					{
						CheckInvalidUsername($(this.target).val(),function($result){
							if($result==false){
								$('#username').after('<label class = "errusername" style="color: red">Tên đăng nhập đã tồn tại</label>');
								document.getElementById('username').value = '';
							}
						});
					}
					
				}

			}); 	       
  });

   $('#password_re').focusout(function(){
  			$('#password_re ~ .errconfirm').remove();
			var password = $("#passwordnew").val();
    		var confirmpwd = $("#password_re").val();
  		if(password!=confirmpwd)
			{
				//alert("test");
				$('#password_re').after('<label class = "errconfirm" style="color: red">Mật khẩu phải trùng nhau</label>');
				document.getElementById('passwordnew').value = '';
				document.getElementById('passwordnew').focus();
				document.getElementById('password_re').value = '';

				return false;
			}
  });

   $('#btnupdate').on('click', function(){
   		$hoten = $('#name').val();
   		$diachi = $('#address').val();
   		$sdt = $('#number').val();
   		$tentk = $('#username').val();
   		if($('#passwordold').val()!="" && $('#passwordold').val()!="")
   		{
   			$matkhau = $('#password_re').val();
   		}
   		else $matkhau = "";
   		if($hoten == "" || $diachi == "" || $sdt == "" || $tentk == "")
   		{
   			alert('Vui lòng nhập đầy đủ thông tin');
   		}	
   		else Updatetaikhoan($hoten,$diachi,$sdt,$tentk,$matkhau);
   		
   		
   });
 });

 


