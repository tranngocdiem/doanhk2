function getloaisanpham(page)
{
	$.ajax({
		url: url + '/admin/qlddh/ajax?page='+page
	})
	.done(function(data)
	{
		$('.content').html(data);
	})
	;
}


$(document).on('click','.pagination a',function(e){
	e.preventDefault();
	var page  = $(this).attr('href').split('page=')[1];
	getloaisanpham(page);
});

function Thaydoittrangthai($madonhang,$trangthai)
{
	var _token = $('meta[name="csrf-token"]').attr('content');
	$listparam ={ 
					'madonhang': $madonhang,
					 'trangthai': $trangthai
				};
		$.ajax({
			type: 'post',
			url: url + '/admin/qlddh/thaydoi',
			cache: false,
			data: {'_token': _token,'info':$listparam},
		})
		.done(function($data) {
		var string;
		if($data!=='false'){
			if($data==-1) string = 'Đã hủy';
			else if($data==0) string = 'Đang trong giỏ hàng';
				else if($data== 1) string = 'Đã đặt hàng';
					else if($data==2) string = 'Đã giao';
			$('.myBtn[value=' + $madonhang +']').closest('td').find('.tinhtrang').text(string);
			$('.close').click();
		}
		else
				alert('Thất bại');
		})
		.fail(function() {
			return false;
		});
}

$('#btnthaydoi').on('click', function(){
	$madonhang = $('#madondathang').val();
	$trangthai = $('#cmbtrangthai').val();
	Thaydoittrangthai($madonhang,$trangthai);
});

