@extends('web.layouts.app')

@section('content')

    <style>
        .profile{
            margin: 20px;
            border-radius: 10px;
        }
        .profile img{
            border: 5px solid  green !important;
            border-radius: 50% !important;
            height: 250px;
            width: 250px;
        }

    </style>

    <div class="container profile" style="background-color: #eeeeee">
        <div class="header text-center">
            <h3>My Profile</h3>
                <div class="text-center rounded p-3 py-4">
                    <img src="{{$authUser->getImage()}}" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="Abhishek">
                    <div class="content mt-3">
                        <h3 class="">{{$authUser->name}}</h3>
                        <strong class="text-muted">{{$authUser->address}}</strong>
                    </div>
                </div>
        </div>
        <div class="Order">
            <h3>ORDER HISTORY</h3>
            <table class="cart-items">
                <thead>
                <tr>
                    <td class="cart-ttl"><h4 style="color: black !important; font-weight: bold">Invoice Number</h4></td>
                    <td class="cart-quantity"><h4 style="color: black !important; font-weight: bold">Quantity</h4></td>
                    <td class="cart-quantity"><h4 style="color: black !important; font-weight: bold">Total Amount</h4></td>
                    <td class="cart-del">&nbsp;</td>
                </tr>
                </thead>
                <tbody>
                @include('web.pages.flash-message')
                @foreach($order as $order)

                    <tr style="text-align: center;">

                        <td class="cart-img">
                            {{$order->id}}
                        </td>
                        <td class="cart-quantity">
                            <b style="color: black !important;">{{$order->item_count}} pcs</b>
                        </td>
                        <td class="cart-price">
                            <p class="cart-qnt" >
                                <b style="color: black !important;">Rs {{$order->grand_total}} </b>
                            </p>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
