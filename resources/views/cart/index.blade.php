@extends('front.master')
  @section('content')
  <script>
  $(document).ready(function(){
    $('#CartMsg').hide();
    @foreach($data as $pro)
    $("#upCart{{$pro->id}}").on('change Keyup', function(){
      var newQty = $("#upCart{{$pro->id}}").val();
      var rowID = $("#rowID{{$pro->id}}").val();
     //alert(rowID);
     $.ajax({
      url:'{{url('/cart/update')}}',
      data:'rowID=' + rowID + '&newQty=' + newQty,
      type:'get',
      success:function(response){
        $('#CartMsg').show();
        console.log(response);
        $('#CartMsg').html(response);
        
      }
     });
    });
    @endforeach
  });
  </script>
  <div class="greyBg">
      <div class="container">
  		<div class="wrapper">
        <div class="row">
  				<div class="col-sm-12">
  				 <div class="breadcrumbs">
  			       <ul>
  			          <li><a href="{{url('/')}}">Home </a></li>
                   <li><span class="dot">/</span>

                    <a href="">cart</a>
  			        </ul>
              </div>
           </div>
  		    </div>
          <!-- design of cart page -->
          <div class="row top20 hidden-xs">
                <div class="col-sm-3">
                  <div class="blk-box">
                    <div class="blk-boxHd">Shopping Cart</div>
                    <div class="blk-boxTxt hidden-sm">Do you want to look on order?</div>
                    <div class="arrow-down"></div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="wht-box">
                    <div class="wht-boxHd">Billing &amp; Shipping</div>
                    <div class="wht-boxTxt hidden-sm">Where should we send this order?</div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="wht-box">
                    <div class="wht-boxHd">Order Review</div>
                    <div class="wht-boxTxt hidden-sm">How do you want to pay for your order?</div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="wht-box">
                    <div class="wht-boxHd">Confirmation</div>
                    <div class="wht-boxTxt hidden-sm">Confirm your order</div>
                  </div>
                </div>
            </div>
            @if(Cart::count()!="0")
            
                <div class="row">
                  <div class="cart">
                      <div class="col-sm-12">
                        <h2>Shopping Basket</h2>
                        <div class="row">
                            <div class="col-sm-8">
                            @if(isset($msg))
                            <div class="alert alert-info">
                            {{$msg}}
                            </div>
                            @endif

                            <div class="alert alert-info" id="CartMsg"></div>

                            @foreach($data as $pro)
                              <div class="cart-row">
                                  <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 text-center">
                                      <img src="{{url ('/public/img')}}/{{$pro->options->img}}" class="img-responsive pull-left" width="100px" />
                                      <span class="pull-left top20"><b>&nbsp;&nbsp;{{ucwords($pro->name)}}</b></span></div>
                                    <div class="col-xs-12 col-sm-3 col-md-3">
                                    <input type="hidden" value="{{$pro->rowId}}" id="rowID{{$pro->id}}">
                                      <div class="cart-qty"> <span>Qty : </span>
                                        <input type="text"
                                        value="{{$pro->qty}}" class="qty-fill"
                                        id="upCart{{$pro->id}}">
                                      </div>
                                      <div class="btn btn-success">Update</div>
                                      <a href="{{url('cart/remove')}}/{{$pro->rowId}}"
                                      class="btn btn-danger">Remove</a>
                                    </div>
                                    <div class="col-xs-12 col-sm-3 col-md-3">
                                      <h6>Unit Price</h6>
                                      <p>${{$pro->price}}</p>
                                      <hr/>
                                      <b>Sub Total : {{$pro->subtotal}}</b>
                                      <br>
                                      <b class="redtext">Total(Include Tax)
                                        {{$pro->total}}
                                      </b>
                                    </div>
                                  </div>
                              </div>
                              @endforeach

                              <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="chk-coupon">
                                  <label>Coupon Code (if any)</label>
                                  <div class="input-group">
                                      <input type="text" class="form-control" >
                                      <span class="input-group-btn">
                                      <input type="button" class="btn fld-btn" value="Redeem Coupon" />
                                      </span>
                                  </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            </div>
                            <div class="col-sm-4">
                            <div class="cart-total">
                                <h4>Total Amount</h4>
                                <table>
                                  <tbody>
                                    <tr>
                                      <td>Sub Total</td>
                                      <td>$ {{Cart::subtotal()}}</td>
                                    </tr>
                                    <tr>
                                      <td>Tax (%)</td>
                                      <td>$ {{$pro->tax()}}</td>
                                    </tr>
                                    <tr>
                                      <td>Total</td>
                                      <td>$ {{$pro->total()}}</td>
                                    </tr>
                                  </tbody>
                                </table>
                                <input type="submit" class="btn update btn-block"
                                 value="Continue Shopping">
                                <input type="submit" class="btn check_out btn-block"
                                 value="Check Out">
                            </div>
                              </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                  </div>
                </div>
                @else
                <div class="alert alert-danger" role="alert">
Empty Cart . <br> Please Add some cart Firstly
</div>
                @endif


  <!-- design of cart page  end -->
</div>
</div>
</div>
@endsection
