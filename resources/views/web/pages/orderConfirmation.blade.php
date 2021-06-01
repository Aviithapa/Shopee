@extends('web.layouts.app')
@section('content')
    <style>
        .orderConfirmation{
            background-color: #eeeeee;
            margin: 40px !important;
        }
        .orderSummery{
            background-color: white;
            border-radius: 10px;
            text-align: center!important;
            margin: 20px;
        }
    </style>

    <div class="container-fluid orderConfirmation" >
        <div class="header-area text-center">
               <img src="https://images.vexels.com/media/users/3/157931/isolated/preview/604a0cadf94914c7ee6c6e552e9b4487-curved-check-mark-circle-icon-by-vexels.png" height="100" width="100">
                <h2>WE HAVE RECEIVED YOUR ORDER !!</h2>
                 <strong>Order No: #0007777{{$order->id}} </strong>
            <p>Please check your email from a copy of your invoice. Thank you for <strong>ORDERING!</strong> </p>
        </div>
        <hr>
        <div class="row">
            <div class="col-5 text-center">
                <h2>Delivery Details</h2>
                <p><strong>Delivery Name :{{$order->name}}</strong></p>
                <p><strong>Delivery Contact Number : {{$order->phone_number}}</strong></p>

                <h2>Payment Method</h2>
                @if($order->payment_method=="cash_on_delivery")
                <p><strong>Cash On Delivery </strong></p>
                @else
                    <p><strong>ESEWA</strong></p>
                @endif
                <h2>Delivery Address</h2>
                <p><strong>{{$order->address}} </strong></p>
                <h2>Payment Status</h2>
                <p><strong class="text-uppercase">{{$order->payment_status}} </strong></p>
            </div>
            <div class="col-6 orderSummery ">

                <div class="cart-items-wrap">
                    <table class="cart-items text-center">
                        <h3>Order Summary</h3>
                        <thead>

                        <tr>
                            <td class="cart-ttl"><h4 style="color: black !important; font-weight: bold">Book Name</h4></td>
                            <td class="cart-price"><h4 style="color: black !important; font-weight: bold">Price</h4></td>
                            <td class="cart-quantity"><h4 style="color: black !important; font-weight: bold">Quantity</h4></td>
                            <td class="cart-quantity"><h4 style="color: black !important; font-weight: bold">Total Amount</h4></td>
                        </tr>
                        </thead>
                        <tbody>
                        @include('web.pages.flash-message')
                        @foreach($orderlist as $item)

                            <tr style="text-align: center;">

                                <td class="cart-img">
                                    {{ $item->product->name}}
                                </td>
                                <td class="cart-price">
                                    <b style="color: black !important;">Rs {{ round($item->price, 2) }}</b>
                                </td>
                                <td class="cart-quantity">
                                    <p class="cart-qnt" >
                                        <b style="color: black !important;">{{ $item->quantity }} pcs</b>
                                    </p>
                                </td>
                                <td class="cart-quantity">
                                    <p class="cart-qnt" >
                                        <b style="color: black !important;">Rs {{getProductPrice($item->price,$item->quantity )}}</b>
                                    </p>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>


    @endsection
