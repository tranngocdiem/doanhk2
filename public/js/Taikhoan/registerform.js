//Kiểm tra tính hợp lệ của form
function validate (){
    	
    		var name = $("#txtname").val();
    		var address = $("#txtaddress").val();
    		var telephonenumber = $("#txtnumber").val();
    		var username = $("#txtusername").val();
    		var password = $("#txtpassword").val();
    		var confirmpwd = $("#txtconfirmpwd").val();
    		if(username=="" || password=="" || address == ""|| telephonenumber=="" || name==""|| confirmpwd=="")
		{
				alert("Bạn phải nhập đầy đủ các trường!");
			 	return false;
	
		}
		//Kiểm tra password có trùng nhau hay không
		else
		{
			if(password!=confirmpwd)
			{
				//alert("test");
				$('#txtconfirmpwd').after(' <label  style="color: red">Mật khẩu phải trùng nhau</label>');
				document.getElementById('txtpassword').value = '';
				document.getElementById('txtpassword').focus();
				document.getElementById('txtconfirmpwd').value = '';

				return false;
			}
		}
    	
		return true;
    }
   function CheckInvalidUsername($username)
   {
   		var _token = $('meta[name="_token"]').attr('content');
		$.ajax({
			type: 'post',
			url: url + '/account/checkusername',
			cache: false,
			data: {'_token': _token,'username':$username},
		})
		.done(function($re) {
			if($re!=='1'){
				return true;
			}else{
				return false;
			}
		})
		.fail(function(){
			return false;
		});

   }

  $('#txtconfirmpwd_re').focusout(function(){
  			$('#txtconfirmpwd_re ~ .errconfirm').remove();
			var password = $("#txtpassword_re").val();
    		var confirmpwd = $("#txtconfirmpwd_re").val();
  		if(password!=confirmpwd)
			{
				//alert("test");
				$('#txtconfirmpwd_re').after('<label class = "errconfirm" style="color: red">Mật khẩu phải trùng nhau</label>');
				document.getElementById('txtpassword_re').value = '';
				document.getElementById('txtpassword_re').focus();
				document.getElementById('txtconfirmpwd_re').value = '';

				return false;
			}
  });

  $('#txtusername_re').focusout(function(){
  	       $('txtusername_re ~ .errusername').remove();
  	       //kiểm tra có để trống hay không?
  	       if($(this).val()=='')
  	       {
  	       		$('#txtusername_re').after('<label class = "errusername" style="color: red">Chưa nhập tên đăng nhập</label>');
  	       		return;
  	       }
  	       //kiểm tra tên đăng nhập đã tồn tại chưa
  	       if(CheckInvalidUsername($(this).val()) == false)
  	       {
  	       		$('#txtusername_re').after('<label class = "errusername" style="color: red">Tên đăng nhập đã tồn tại</label>');
  	       }
  	       


  });
