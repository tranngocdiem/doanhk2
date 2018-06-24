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