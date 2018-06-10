function Login($username,$password)
{
	var _token = $('meta[name="csrf-token"]').attr('content');
	$listparam ={ 
					'username': $username,
					'password': $password,
				};
	$.ajax({
		type: 'post',
		url: url + '/account/login',
		cache: false,
		data: {'_token': _token,'info':$listparam},
	})
	.done(function($data) {
	if($data!=='0' && $data !== '1' && $data !== '2'){
		$('.close').click();
		$('#modallayout').html($data);
		
	}
	if($data == '2')
		{
			/*redirect("{!! url('/ad') !!}");*/
			window.location = url + "/admin"
		}
		

	if($data == '1')
		{
			alert("Tài khoản hoặc mật khẩu sai");
		}
		
	})
	.fail(function() {
		alert("Tài khoản hoặc mật khẩu sai");
		return false;
	});
}
$('#btnlogin').on('click',function(){
	$('#btnlogin ~ .errrlogin').remove();
	$username = $('#username_login').val();
	$password = $('#password_login').val();
	if($username ==""|| $password=="")
	{
			$('#btnlogin').after('<label class = "errrlogin" style="color: red">Vui lòng nhập đầy đủ thông tin</label>');	
			 	return;
	}
	Login($username,$password);

});