
//Lấy sản phẩm theo từng loại của từng chủ đề
function Getsanphamtheoloai($macd, $masp){

			
  			var _token = $('meta[name="csrf-token"]').attr('content');
		    $.ajax({
			type: 'get',
			url: url + "/sanpham/getloaisp/$macd/$masp",
			cache: false,
			data: {'_token': _token,'macd'= $macd,'masp' = $masp}
			})
			.done(function($data) {
				alert('hihi');
				if($re!='0'){
					$('#hienthisanpham').html($data);
				}
				else{
					return false;
				}

			})
			.fail(function(){
				return false;
			});
		
}

$('#getsanpham').on('click',function(){
	$macd = $(this).attr("data-macd");
	$masp = $(this).attr("data-masp");
	Getsanphamtheoloai($macd,$masp)

});
