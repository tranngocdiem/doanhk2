@extends('Admin._layoutadmin')
@section('title')
Thống kê sản phẩm
@stop
@section('chart')
    <div style="margin-top: 30px ">
    <h3>THỐNG KÊ SỐ LƯỢNG SẢN PHẨM BÁN RA </h3>
    <br>
    <label style="font-weight: bold;">Chọn sản phẩm:</label> <select style="margin-left: 11px; height: 30px;" id="cmbsanpham">
    	<?php if(isset($sanpham))
    	{
    		foreach ($sanpham as $key => $value) {
    	?>
    		<option value="<?php echo $value->mamau ?>"><?php echo $value->tenmau?></option>
    	<?php }
    	}?>
    </select>
    </div>
    <div>
    <label style="font-weight: bold;">Thống kê từ ngày </label><input style="margin-left: 5px" id="datefrom" type="date" > <label style="font-weight: bold;">đến ngày</label> <span> <input id="dateto" type="date" > </span> <span><button id="btnhienthisanpham" class="btn-success">Hiển thị</button></span>
    </div>
    <div id="scriptchart"></div>
@stop
@section('js')
@parent
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="{!! url('/js/admin/thongke.js') !!}"></script>
<script>
$(document).on('keyup','#myInput',function(){
  
    var value = $(this).val().toLowerCase();
    $(".content tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  });
});
</script>
@stop
   