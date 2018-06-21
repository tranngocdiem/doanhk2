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
				$("#footer").css("padding-top", "200px");
			}
		else alert('Thất bại');
	})
	.fail(function() {
		return false;
	});
}

$('#btnupdate').on('click', function(){
	$('#btnupdate ~ .err').remove();
	$('#txtngaygiao ~ .err').remove();
	$nguoinhan = $('#txtname').val();
	$ngaygiao = $('#txtngaygiao').val();
	$sdt = $('#txtnumber').val();
	$diachigiao = $('#txtdiachigiao').val();
	var d = new Date();
	var todayMonth = d.getMonth() + 1;
	var todayDay = d.getDate();
	var todayYear = d.getFullYear();
	var dText = todayYear + "-" + todayMonth + "-" + todayDay;
	if($nguoinhan==""|| $ngaygiao=="" || $sdt == "" || $diachigiao == "")
	{
	 	$('#btnupdate').after('<label class = "err" style="color: red">Vui lòng nhập đầy đủ thông tin</label>');

	}
	else if(Date.parse($ngaygiao) <= Date.parse(dText))
	{
		$('#txtngaygiao').after('<label class = "err" style="color: red">Ngày giao phải lớn hơn ngày hiện tại</label>');
		
	}
	else
	{
		Xacnhandonhang($nguoinhan,$ngaygiao,$sdt,$diachigiao);
	}
	
});
