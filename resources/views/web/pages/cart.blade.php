@extends('web.layouts.app')
@section('content')



    <!-- Main Content - start -->
    <main>
        <section class="container stylization maincont mt-5">

            <h1 style="align-content: center" ><span>Shopping Cart</span></h1>

            <!-- Cart Items - start -->
            <div class="row">
                <div class="col-lg-8 col-md-12">
            <form action="#" style="color: black !important;">
                <div class="cart-items-wrap">
                    <table class="cart-items">
                        <thead>
                        <tr>
                            <td class="cart-ttl"><h4 style="color: black !important; font-weight: bold">Products</h4></td>
                            <td class="cart-price"><h4 style="color: black !important; font-weight: bold">Price</h4></td>
                            <td class="cart-quantity"><h4 style="color: black !important; font-weight: bold">Quantity</h4></td>
                            <td class="cart-del">&nbsp;</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cart as $carts)
                        <tr style="text-align: center;">
                            <td class="cart-ttl">
                               <a href="{{url('productDetails/'.$carts->product_id)}}"><b style="color: black !important;">{{$carts->product_name}}</b></a>
                            </td>
                            <td class="cart-price">
                                <b style="color: black !important;">{{$carts->product_price}}</b>
                            </td>
                            <td class="cart-quantity">
                                <p class="cart-qnt" >
                                    <input value="{{$carts->quantity}}" type="text">
                                </p>
                            </td>

                            <td class="cart-del">
                                <a href="{{route("dashboard.cart.destroy", $carts->id)}}" class="btn btn-danger btn-sm" title="Delete">
                                    <i class="fa fa-trash"></i>
                                </a>
                             </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <ul class="cart-total">
                    <li class="cart-summ">TOTAL: <b>{{getCartTotalPrice()}}</b></li>
                </ul>
            </form>
                </div>
                <!-- Cart Items - end -->
                <div class="col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <header class="card-header">
                                    <h4 class="card-title mt-2">Your Order</h4>
                                </header>
                                <article class="card-body">
                                    <dl class="dlist-align">
                                        <dt>Quantity : </dt>
                                        <dd class="text-right h5 b">{{getCartAmount()}} </dd>
                                        <dt>Total cost : </dt>
                                        <dd class="text-right h5 b">{{getCartTotalPrice()}} </dd>

                                    </dl>
                                </article>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <a href="{{url('checkout')}}"> <button type="submit" class="subscribe btn btn-success btn-lg btn-block">Checkout</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Main Content - end -->
    <div class="modal fade modal-mini modal-primary" id="modal-delete-{{ $carts->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                {{ Form::open(['method' => 'DELETE', 'route' => ["dashboard.cart.destroy", $carts->id]]) }}
                @dd($carts->id)
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

@endsection
