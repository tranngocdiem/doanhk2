@extends('Sanpham._layoutsanpham')
@section('link')
@parent

@stop
@section('sub_content')
<div class="container">
        <div class="row">
          <div class="col-xs-12">
            <form style="width: 100%" action="#">
            <div class="cartInfo">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr class="bg-color-1">
                      <th class="col-lg-2 col-xs-3" style="min-width: 190px; text-indent:-999px;">
                        empty</th>
                      <th class="col-lg-4 col-xs-3">Product Name</th>
                      <th class="col-lg-2 col-xs-2">Price</th>
                      <th class="col-lg-2 col-xs-2">Quantity</th>
                      <th class="col-lg-2 col-xs-2">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <span class="cartImage"><img src="img/extra/cart-image.jpg" alt="image" class="img-rounded"></span>
                      </td>
                      <td>Italian Winter Hat</td>
                      <td>$ 99.00</td>
                      <td><input type="text" placeholder="1"></td>
                      <td>$ 99.00</td>
                    </tr>
                    <tr>
                      <td>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <span class="cartImage"><img src="img/extra/cart-image.jpg" alt="image" class="img-rounded"></span>
                      </td>
                      <td>Italian Winter Hat</td>
                      <td>$ 99.00</td>
                      <td><input type="text" placeholder="1"></td>
                      <td>$ 99.00</td>
                    </tr>
                    <tr>
                      <td>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <span class="cartImage"><img src="img/extra/cart-image.jpg" alt="image" class="img-rounded"></span>
                      </td>
                      <td>Italian Winter Hat</td>
                      <td>$ 99.00</td>
                      <td><input type="text" placeholder="1"></td>
                      <td>$ 99.00</td>
                    </tr>
                    <tr>
                      <td colspan="4">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="I have a discount coupon" aria-describedby="basic-addon2">
                          <a href="#" class="btn btn-primary input-group-addon" id="basic-addon2">apply coupon</a>
                        </div>
                      </td>
                      <td><a href="#" class="btn btn-primary pull-right">update cart</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            </form>
          </div>
        </div>

        <form action="#">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-6 col-xs-12">
              <div class="cartInfo cartTotal">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr class="bg-color-2">
                        <th>Cart Total</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="col-xs-6">
                          <strong>Total</strong>
                        </td>
                        <td class="col-xs-6">$ 99.00</td>
                      </tr>
                      <tr>
                        <td class="col-xs-6">
                          <strong>UK Vat</strong>
                        </td>
                        <td class="col-xs-6">$ 6.00</td>
                      </tr>
                      <tr>
                        <td class="col-xs-6">
                          <strong>Grand Total</strong>
                        </td>
                        <td class="col-xs-6"><strong>$ 105.00</strong></td>
                      </tr>
                      <tr>
                        <td colspan="2" class="btnPart"><a href="checkout-step-1.html" class="btn btn-primary pull-right">checkout<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </form>

        </div>
@stop