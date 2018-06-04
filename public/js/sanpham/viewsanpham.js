
//Lấy sản phẩm theo từng loại của từng chủ đề
function Getsanphamtheoloai($macd, $masp){

    var _token = $('meta[name="csrf-token"]').attr('content');
	$.ajax({
		type: 'post',
		url: url + 'sanpham/getloaisp',
		cache: false,
		data: {'_token': _token,'macd':$macd, 'masp': $masp},
	})
	.done(function($data) {
		alert($data);
	if($data!=='0'){
		
		$('#hienthisanpham').html($data);
		
	}})
	.fail(function() {
		return false;
	});
		
}

$('a#getsanpham').on('click',function(){

	$macd = $(this).attr("data-macd");
	$masp = $(this).attr("data-masp");
	Getsanphamtheoloai($macd,$masp);

});
