

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

   function Registration($name,$address,$telephonenumber,$username,$password,$confirmpwd,$result)
   {
   			
			$listparam = {  'name': $name,
							'address': $address,
							'telephonenumber': $telephonenumber,
							'username': $username,
							'password': $password,

			};

			var _token = $('meta[name="csrf-token"]').attr('content');
			$.ajax({
					type: 'post',
					url: url + '/account/register',
					cache: false,
					data: {'_token': _token,'info':$listparam},
					})
			.done(function($re) {
				if($re!=='0'){
					return $result(true);
					
				}
				else{
					return $result(false);
				}
			})
	
			.fail(function() {
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
  	       $('#txtusername_re ~ .errusername').remove();
  	       //kiểm tra có để trống hay không?
  	       if($(this).val()=='')
  	       {
  	       		$('#txtusername_re').after('<label class = "errusername" style="color: red">Chưa nhập tên đăng nhập</label>');
  	       		return;
  	       }
  	       //kiểm tra tên đăng nhập đã tồn tại chưa
  	       CheckInvalidUsername($(this).val(),function($re){
			if($re){
				$('#txtusername_re').after('<label class = "errusername" style="color: red">Tên đăng nhập đã tồn tại</label>');
			}
			});
  	       
  	       
  });
  $('#btnregister').on('click',function(){
  			$('#btnregister ~ .errregister').remove();
  			
  			$name = $('#txtname_re').val();
  			$address = $('#txtaddress_re').val();
  			$telephonenumber = $('#txtnumber_re').val();
  			$username = $('#txtusername_re').val();
  			$password = $('#txtpassword_re').val();
  			$confirmpwd = $('#txtconfirmpwd_re').val();
  			if($username=="" || $password=="" || $address == ""|| $telephonenumber=="" || $name==""|| $confirmpwd=="")
			{
				
			 	$('#btnregister').after('<label class = "errregister" style="color: red">Vui lòng nhập đầy đủ thông tin</label>');	
			 	return;
	
			}
  			Registration($name,$address,$telephonenumber,$username,$password,$confirmpwd,function($re){
  				if($re==true)
  				{
  					alert("Đăng kí thành công. Hãy đăng nhập để trải nghiệm tốt hơn.");
  					$('.close').click();
  				}
  				else 
  					alert("Vui lòng nhập đầy đủ thông tin");
  			});
  });
