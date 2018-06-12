/*function Themvaogiohang($maloai,$gia)
{
	var _token = $('meta[name="csrf-token"]').attr('content');
	$listparam ={ 
					'maloai': $maloai,
					'gia': $gia,
				};
	$.ajax({
		type: 'post',
		url: url + '/sanpham/themvaogiohang',
		cache: false,
		data: {'_token': _token,'thongtindathang':$listparam},
	})
	.done(function($data) {
			if($data=='-1')
				alert('Vui lòng đăng nhập để có thể mua hàng.');
			else
				
	
	})
	.fail(function() {
		return false;
	});
}*/