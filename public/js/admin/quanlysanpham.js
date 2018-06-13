
function Themsanpham($tensp, $mamau)
{
	var _token = $('meta[name="csrf-token"]').attr('content');
	$listparam ={ 
					'tensp': $tensp,
					'mamau': $mamau,
				};
	$.ajax({
		type: 'post',
		dataType:'json',
		url: url + '/admin/themsp',
		cache: false,
		data: {'_token': _token,'info':$listparam},
	})
	.done(function($data) {

	if($data!=='0'){
		alert('Thêm thành công');
		$('.close').click();
		$('#listsanpham').empty();
		$('#listsanpham').append("<option value = '0'>Chọn sản phẩm</option>");

		$.each($data,function(index,value){
			$('#listsanpham').append('<option value ="'+value.masp+'" >'+value.tensp+'</option>');
		});
		return true;
		
	}
	else
		return false;	
	})
	.fail(function() {
		return false;
	});
}

function Themkhuyenmai($tenkm, $ngaybatdau, $ngayketthuc, $discount)
{
	var _token = $('meta[name="csrf-token"]').attr('content');
	$listparam ={ 
					'tenkm': $tenkm,
					'ngaybatdau': $ngaybatdau,
					'ngayketthuc': $ngayketthuc,
					'discount':$discount,
				};
	$.ajax({
		type: 'post',
		dataType:'json',
		url: url + '/admin/themkm',
		cache: false,
		data: {'_token': _token,'infokhuyenmai':$listparam},
	})
	.done(function($data) {

	if($data!=='0'){
		alert('Thêm thành công');
		$('.close').click();
		$('#listkhuyenmai').empty();
		$('#listkhuyenmai').append("<option value = '0'>Chọn khuyến mãi</option>");

		$.each($data,function(index,value){
			$('#listkhuyenmai').append('<option value ="'+value.makm+'" >'+value.tenkm+'</option>');
		});
		return true;
		
	}
	else
		return false;	
	})
	.fail(function() {
		return false;
	});
}

function Themchude($tencd)
{
	var _token = $('meta[name="csrf-token"]').attr('content');
	$.ajax({
		type: 'post',
		dataType:'json',
		url: url + '/admin/themcd',
		cache: false,
		data: {'_token': _token,'tenchude':$tencd},
	})
	.done(function($data) {

	if($data!=='0'){
		alert('Thêm thành công');
		$('.close').click();
		$('#listchude').empty();
		$('#listchude').append("<option value = '0'>Chọn chủ đề</option>");

		$.each($data,function(index,value){
			$('#listchude').append('<option value ="'+value.macd+'" >'+value.tencd+'</option>');
		});
		return true;
		
	}
	else
		return false;	
	})
	.fail(function() {
		return false;
	});
}

function Themthongtinsanpham($tenloai,$gia,$masp,$makm,$macd,$mota,$urlanh)
{
	if($masp==0 || $macd==0 || $makm==0 || $tenloai=="")
	{
		return '-1';
	}
	else
	{
		var _token = $('meta[name="csrf-token"]').attr('content');
		$listparam ={ 
					'tenloai': $tenloai,
					'masp': $masp,
					'macd': $macd,
					'makm':$makm,
					'mota':$mota,
					'gia':$gia,
					'url': $urlanh,
				};
		$.ajax({
			type: 'post',
			url: url + '/admin/themthongtinloai',
			cache: false,
			data: {'_token': _token,'info':$listparam},
		})
		.done(function($data) {

		if($data!=='0'){
			return true;
		}
		else
			return false;	
		alert($data);
		})
		.fail(function() {
			return false;
		});
		}
}

$('#btnthemsanpham').on('click',function(){
	$tensp = $("#tensanpham").val();
	$mamau = $("#mausanpham").val();
	Themsanpham($tensp,$mamau);

});

$('#btnthemkm').on('click',function(){
	$tenkm = $("#tenkhuyenmai").val();
	$discount = $("#discount").val();
	$ngaybatdau = $('#ngaybatdau').val();
	$ngayketthuc = $('#ngayketthuc').val();
	Themkhuyenmai($tenkm,$ngaybatdau,$ngayketthuc,$discount);

});

$('#btnthemcd').on('click',function(){
	$tencd = $("#tenchude").val();
	Themchude($tencd);
	

});

$('#btn_submit').on('click',function(){
	$('#btn_submit ~ .errrinsert').remove();
	$tenloai = $('#txttenloai').val();
	$gia = $('#txtgia').val();
	$masp = $('#listsanpham').val();
	$makm = $('#listkhuyenmai').val();
	$macd = $('#listchude').val();
	$mota = $('#txtmota').val();
	$urlanh = $('#urlanh').val();
	$results = Themthongtinsanpham($tenloai,$gia,$masp,$makm,$macd,$mota,$urlanh);
	if($results== '-1')
	{
		$('#btn_submit').after('<label class = "errrinsert" style="color: red">Vui lòng nhập đầy đủ thông tin</label>');	

	}
	else alert('Thêm thành công');
	//clear các input
	document.getElementById('txttenloai').value = '';
	document.getElementById('txttenloai').value = '';
	document.getElementById('listsanpham').value = '';
	document.getElementById('txtgia').value = '';
	document.getElementById('listkhuyenmai').value = '0';
	document.getElementById('listchude').value = '0';
	document.getElementById('txtmota').value ='';
    document.getElementById('urlanh').value = '';


		

});
function getloaisanpham(page)
{
	$.ajax({
		url: url + '/admin/qlsp/ajax?page='+page
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

