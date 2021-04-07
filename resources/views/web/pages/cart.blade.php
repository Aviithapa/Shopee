@extends('web.layouts.app')
@section('content')
    <!-- Main Content - start -->
    <main>
        <section class="container stylization maincont">


            <ul class="b-crumbs">
                <li>
                    <a href="{{url('/')}}">
                        Home
                    </a>
                </li>
                <li>
                    <span>Cart</span>
                </li>
            </ul>
            <h1 class="main-ttl"><span>Cart</span></h1>
            <!-- Cart Items - start -->
            <form action="#">

                <div class="cart-items-wrap">
                    <table class="cart-items">
                        <thead>
                        <tr>
                            <td class="cart-image">Photo</td>
                            <td class="cart-ttl">Products</td>
                            <td class="cart-price">Price</td>
                            <td class="cart-quantity">Quantity</td>
                            <td class="cart-summ">Summ</td>
                            <td class="cart-del">&nbsp;</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cart as $carts)
                        <tr>
                            <td class="cart-image">
                                <a href="product.html">
                                    <img src="http://placehold.it/61x80" alt="Similique delectus totam">
                                </a>
                            </td>
                            <td class="cart-ttl">
                                <a href="product.html">{{$carts->product_name}}</a>
                            </td>
                            <td class="cart-price">
                                <b>{{$carts->product_price}}</b>
                            </td>
                            <td class="cart-quantity">
                                <p class="cart-qnt">
                                    <input value="{{$carts->quantity}}" type="text">
                                    <a href="#" class="cart-plus"><i class="fa fa-angle-up"></i></a>
                                    <a href="#" class="cart-minus"><i class="fa fa-angle-down"></i></a>
                                </p>
                            </td>
                            <td class="cart-summ">
                                <b>$220</b>
                                <p class="cart-forone">unit price <b>$220</b></p>
                            </td>
                            <td class="cart-del">
                                <a data-toggle="modal" href="#modal-delete-{{ $carts->id }}" class="btn btn-danger btn-sm" title="Delete">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <div class="modal fade modal-mini modal-primary" id="modal-delete-{{ $carts->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                           {{ Form::open(['method' => 'DELETE', 'route' => ["dashboard.cart.destroy", $carts->id]]) }}
                                            @if(isset($hard_delete))
                                                <input type="hidden" value="1" name="hard_delete">
                                            @endif
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <br>
                                                <i class="fa fa-trash fa-3x"></i>
                                                <h4 id="myModalLabel" class="semi-bold">Remove!!!</h4>
                                            </div>
                                            <div class="modal-body text-center">
                                                <p>
                                                    Are you sure want to remove it from your cart?
                                                </p>
                                            </div>
                                            <div class="modal-footer" >
                                                <button type="submit" class="btn btn-danger" >
                                                    <i class="fa fa-check"></i> Yes
                                                </button><br>
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">
                                                    <i class="fa fa-times"></i> Cancel
                                                </button>
                                            </div>
                                            {{ Form::close() }}
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <ul class="cart-total">
                    <li class="cart-summ">TOTAL: <b>{{getCartTotalPrice()}}</b></li>
                </ul>
                <div class="cart-submit">
                    <div class="cart-coupon">
                        <input placeholder="your coupon" type="text">
                        <a class="cart-coupon-btn" href="#"><img src="img/ok.png" alt=""></a>
                    </div>
                    <a href="{{url('checkout')}}" class="cart-submit-btn">Checkout</a>
                    <a href="#" class="cart-clear">Clear cart</a>
                </div>
            </form>
            <!-- Cart Items - end -->

        </section>
    </main>
    <!-- Main Content - end -->

    @endsection
