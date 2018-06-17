

function Themvaogiohang($maloai,$gia,$element)
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
			{
				if($element!=null)
				{
					var itemimg = $($element).closest("#anhsp").find("img").eq(0);
				}
				else var itemimg = $('#hinhanhsp');
				
				flyToElement($(itemimg),$('.fa-shopping-cart'));
				document.getElementById("soluong").innerHTML = $data;

			}
				
				
	
	})
	.fail(function() {
		return false;
	});
}

//animation when add to cart
function flyToElement(flyer, flyingTo) {
	var $func = $(this);
	var divider = 3;
	var flyerClone = $(flyer).clone();
	$(flyerClone).css({position: 'absolute', top: $(flyer).offset().top + "px", left: $(flyer).offset().left + "px", opacity: 1, 'z-index': 1000});
	$('body').append($(flyerClone));
	var gotoX = $(flyingTo).offset().left + ($(flyingTo).width() / 2) - ($(flyer).width()/divider)/2;
	var gotoY = $(flyingTo).offset().top + ($(flyingTo).height() / 2) - ($(flyer).height()/divider)/2;
	 
	$(flyerClone).animate({
		opacity: 0.4,
		left: gotoX,
		top: gotoY,
		width: $(flyer).width()/divider,
		height: $(flyer).height()/divider
	}, 500,
	function () {
		$(flyingTo).fadeOut('fast', function () {
			$(flyingTo).fadeIn('fast', function () {
				$(flyerClone).fadeOut('fast', function () {
					$(flyerClone).remove();
				});
			});
		});
	});
}


$('.themvaogiohang').on('click',function(){
	$maloai = $(this).attr('data-maloai');
	$gia = $(this).attr('data-gia');
	Themvaogiohang($maloai,$gia,$(this));
});

$('#btnthemvaogio').on('click',function(){
	$maloai = $(this).attr('data-maloai');
	$gia = $(this).attr('data-gia');
	$element = null;
	Themvaogiohang($maloai,$gia,$element);
});

$('.fa-shopping-cart').on('click',function(){
	var _token = $('meta[name="csrf-token"]').attr('content');
	$.ajax({
		type: 'post',
		url: url + '/account/thongtingiohang',
		cache: false,
		data: {'_token': _token},
	})
	.done(function($data) {
			if($data=='0')

				alert('Vui lòng đăng nhập để có thể mua hàng.');	
			else 
				return $data;
				
	
	})
	.fail(function() {
		return false;
	});
});

/*<!--parent ở đây dùng để lấy giá trị thẻ prev or next của thẻ chứa của button là div-->
*/
  $(document).ready(function(){
    $(".table").on('click','#del',function(){

      $(this).closest('tr').remove();
      //Xóa dưới cơ sở dữ liệu
      var _token = $('meta[name="csrf-token"]').attr('content');
      $listparam ={ 
					'maddh': $(this).attr("data-maddh"),
					'maloai': $(this).attr("data-maloai"),
				};
        $.ajax({
		type: 'post',
		url: url + '/account/xoasp',
		cache: false,
		data: {'_token': _token,'chitietdh':$listparam},
		})
		.done(function($data) {
			if($data!=0)
				document.getElementById("soluong").innerHTML = $data;
			else
			{
				document.getElementById("soluong").innerHTML = $data;
				document.getElementById("dssp-giohang").innerHTML = '<h5 style = "margin-top: 200px; margin-left: 500px; margin-bottom:200px; color:red;">Không có sản phẩm nào trong giỏ hàng!!!</h5>';
			} 
			    
		
		})
		.fail(function() {
			return false;
		});
		//thay đổi thành tiền
		var thanhtienold = $("#thanhtien").attr("data-thanhtien");
        var thanhtiennew = parseInt(thanhtienold) - parseInt($(this).closest('tr').find('.tongtien').attr('data-tong'));
        $("#thanhtien").text(thanhtiennew) ;
        $("#thanhtien").attr("data-thanhtien",thanhtiennew);


    });
    $('.btn-up').click(function () {

      if ($(this).parent('div').prev("input").first().val() < 100) {
        $(this).parent('div').prev("input").first().val(+$(this).parent('div').prev("input").first().val() + 1);
        $(this).parent('div').prev("input").first().attr("data-soluong",parseInt($(this).parent('div').prev("input").first().attr("data-soluong")) + 1);
        //thay đổi tổng tiền sản phẩm
        var element = $(this).closest("tr").find(".tongtien");
        var tong = parseInt($(element).attr('data-tong')) + parseInt($(this).closest('.quantity').attr('data-gia'));
        $(element).text(tong);
        $(element).attr("data-tong",tong);
        //thay đổi thành tiền
        var thanhtienold = $("#thanhtien").attr("data-thanhtien");
        var thanhtiennew = parseInt(thanhtienold) + parseInt($(this).closest('.quantity').attr('data-gia'));
        $("#thanhtien").text(thanhtiennew);
        $("#thanhtien").attr("data-thanhtien",thanhtiennew);
        //Thay đổi biểu tượng giỏ hàng
        var _token = $('meta[name="csrf-token"]').attr('content');
        $listparam ={ 
					'maddh': $(this).attr('data-maddh'),
					'maloai': $(this).attr('data-maloai'),
				};
        $.ajax({
		type: 'post',
		url: url + '/account/themsoluong',
		cache: false,
		data: {'_token': _token,'chitietdh':$listparam},
		})
		.done(function($data) {
				document.getElementById("soluong").innerHTML = $data;	
		
		})
		.fail(function() {
			return false;
		});

	 }
    });
    $('.btn-down').click(function () {
      if ($(this).parent('div').next("input").first().val() > 1) {

          $(this).parent('div').next("input").first().val(+$(this).parent('div').next("input").first().val() - 1);
          $(this).parent('div').next("input").first().attr("data-soluong",parseInt($(this).parent('div').next("input").first().attr("data-soluong")) - 1);
          var element = $(this).closest("tr").find(".tongtien");
        var tong = parseInt($(element).attr('data-tong')) - parseInt($(this).closest('.quantity').attr('data-gia'));
        $(element).text(tong);
        $(element).attr("data-tong",tong);
        //thay đổi thành tiền
        var thanhtienold = $("#thanhtien").attr("data-thanhtien");
        var thanhtiennew = parseInt(thanhtienold) - parseInt($(this).closest('.quantity').attr('data-gia'));
        $("#thanhtien").text(thanhtiennew) ;
        $("#thanhtien").attr("data-thanhtien",thanhtiennew);
        //thay đổi biểu tượng giỏ hàng
        var _token = $('meta[name="csrf-token"]').attr('content');
        $listparam ={ 
					'maddh': $(this).attr('data-maddh'),
					'maloai': $(this).attr('data-maloai'),
				};
        $.ajax({
		type: 'post',
		url: url + '/account/giamsoluong',
		cache: false,
		data: {'_token': _token,'chitietdh':$listparam},
		})
		.done(function($data) {
				document.getElementById("soluong").innerHTML = $data;	
		
		})
		.fail(function() {
			return false;
		});
      }
    });
  });
