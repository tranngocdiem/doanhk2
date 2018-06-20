function Xacnhandonhang($nguoinhan,$ngaygiao,$sdt,$diachigiao)
{
	var _token = $('meta[name="csrf-token"]').attr('content');
	$listparam ={ 
					'nguoinhan': $nguoinhan,
					'ngaygiao': $ngaygiao,
					'sdt': $sdt,
					'diachigiao': $diachigiao
				};
	$.ajax({
		type: 'post',
		url: url + '/account/dathang/xacnhan',
		cache: false,
		data: {'_token': _token,'thongtindathang':$listparam},
	})
	.done(function($data){
		if($data!=0)
			{
				$('.content').html($data);
				document.getElementById("soluong").innerHTML = 0;
			}
		else alert('Thất bại');
	})
	.fail(function() {
		return false;
	});
}

$('#btnupdate').on('click', function(){
	$nguoinhan = $('#txtname').val();
	$ngaygiao = $('#txtngaygiao').val();
	$sdt = $('#txtnumber').val();
	$diachigiao = $('#txtdiachigiao').val();
	Xacnhandonhang($nguoinhan,$ngaygiao,$sdt,$diachigiao);
});
