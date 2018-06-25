function Thongkedoanhthu($datefrom, $dateto)
{
	var _token = $('meta[name="csrf-token"]').attr('content');
	$listparam ={ 
					'datefrom': $datefrom,
					 'dateto': $dateto
				};
	$.ajax({
			type: 'post',
			url: url + '/admin/thongkedoanhthu',
			cache: false,
			data: {'_token': _token,'date':$listparam},
		})
		.done(function($data) {
			$('#scriptchart').html($data);
			
		})
		.fail(function() {
			return false;
		});
}

$('#btnhienthidoanhthu').on('click', function(){
	$datefrom = $('#datefrom').val();
	$dateto = $('#dateto').val();
	Thongkedoanhthu($datefrom,$dateto);
	
});

function Thongketinhtrang($datefrom, $dateto)
{
	var _token = $('meta[name="csrf-token"]').attr('content');
	$listparam ={ 
					'datefrom': $datefrom,
					 'dateto': $dateto
				};
	$.ajax({
			type: 'post',
			url: url + '/admin/thongkedonhang',
			cache: false,
			data: {'_token': _token,'date':$listparam},
		})
		.done(function($data) {
			$('#scriptchart').html($data);
			
		})
		.fail(function() {
			return false;
		});
}

$('#btnhienthitinhtrang').on('click', function(){
	$datefrom = $('#datefrom').val();
	$dateto = $('#dateto').val();
	Thongketinhtrang($datefrom,$dateto);
	
});

function Thongkesanpham($mamau,$datefrom, $dateto)
{
	var _token = $('meta[name="csrf-token"]').attr('content');
	$listparam ={ 
					'mamau' : $mamau,
					'datefrom': $datefrom,
					 'dateto': $dateto
				};
	$.ajax({
			type: 'post',
			url: url + '/admin/thongkesanpham',
			cache: false,
			data: {'_token': _token,'info':$listparam},
		})
		.done(function($data) {
			$('#scriptchart').html($data);
			
		})
		.fail(function() {
			return false;
		});
}

$('#btnhienthisanpham').on('click', function(){
	$mamau = $('#cmbsanpham').val();
	$datefrom = $('#datefrom').val();
	$dateto = $('#dateto').val();
	Thongkesanpham($mamau,$datefrom,$dateto);
	
});
//Dùng ajax phân trang
function getloaisanpham(page,mamau,datefrom,dateto)
{
	$.ajax({
		url: url + '/admin/tksp/ajax?page='+page,
		data: {'mamau':mamau,'datefrom':datefrom,'dateto' :dateto},
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
	var mamau = $('#cmbsanpham').val();
	var datefrom = $('#datefrom').val();
	var dateto = $('#dateto').val();
	getloaisanpham(page,mamau,datefrom,dateto);
});