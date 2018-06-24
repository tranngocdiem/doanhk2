@extends('Admin._layoutadmin')
@section('title')
Thống kê đơn đặt hàng
@stop
@section('chart')
    <div>
    <h3>THỐNG KÊ TÌNH TRẠNG ĐƠN HÀNG </h3>
    Thống kê từ ngày <input id="datefrom" type="date" > đến ngày <span> <input id="dateto" type="date" > </span> <span><button id="btnhienthitinhtrang" class="btn-success">Hiển thị</button></span>
    </div>
    <div style="margin-left: 100px" id="chart">
        
    </div>
    <div id="scriptchart"></div>
@stop
@section('js')
@parent
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="{!! url('/js/admin/thongke.js') !!}"></script>

@stop