@extends('Sanpham._layoutsanpham')
@section('link')
@parent
<link rel="stylesheet" href="css/Sanpham/chitietspzoom.css">
<link rel="stylesheet" media="screen, projection" href="css/Sanpham/drift-basic.css">
@stop
@section('sub_content')
<div class="container">
  <div class="row">
    <div class="col">
      <ol class="breadcrumb" style="margin-bottom: 5px;">
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Data</li>
      </ol>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col">
      <div class="wrapper">
        <img class="drift-demo-trigger" data-zoom="image/sanpham/sofa-3c-idaisy-500.jpg" src="image/sanpham/sofa-3c-idaisy-500.jpg">

        <div class="detail">

        </div>
      </div>
    </div>
  </div>
</div>

<script src="js/Drift.js"></script>
<script>
  new Drift(document.querySelector('.drift-demo-trigger'), {
    paneContainer: document.querySelector('.detail'),
    inlinePane: 900,
    inlineOffsetY: -85,
    containInline: true,
    hoverBoundingBox: true
  });

</script>
@stop


