@extends('admin.layout.app')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/main.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/font-awesome/4.7.0/css/font-awesome.min.css') }}"/>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <section class="invoice" id="printable">
                    <div class="row justify-content-center">
                        <div class="col-3">
                        <img src="{{getSiteSetting('logo_image') != null? getSiteSetting('logo_image'): ''}}" width="200" height="200">
                        </div>
                        <div class="vl" style="border-left: 6px solid green;height: auto;"></div>
                        <div class="col-4">
                            <h1>{{getSiteSetting('site_title') != null? getSiteSetting('site_title'): ''}} </h1>
                            <h5>{{getSiteSetting('location') != null? getSiteSetting('location'): ''}}</h5>
                            <h5>Contact Details :{{getSiteSetting('contact_details') != null? getSiteSetting('contact_details'): ''}}</h5>
                            <h5>Email:{{getSiteSetting('email') != null? getSiteSetting('email'): ''}}</h5>
                            <h5>Website:{{getSiteSetting('site_title') != null? getSiteSetting('site_title'): ''}}</h5>
                        </div>
                        <div class="col-3">
                            <button  onclick="window.print()" class="print text-right bold btn btn-primary">Print</button>
                        </div>

                    </div>

                    <div class="row mb-4 mt-5">
                        <div class="col-6">
                            <h2 class="page-header bold"><i class="fa fa-globe"></i> Order Id: {{ $order->id }}</h2>
                        </div>
                        <div class="col-6">
                            <h5 class="text-right bold">Date: {{ $order->created_at->toFormattedDateString() }}</h5>
                        </div>
                    </div>
                    <div class="row invoice-info">
                        <div class="col-4">Placed By
                            <address><strong class="bold">{{ $order->name }}</strong><br>Email: {{ $order->email }}</address>
                        </div>
                        <div class="col-4">Ship To
                            <address><strong class="bold">{{ $order->name }}</strong><br>{{ $order->address }}<br>{{ $order->collage_name }}, {{ $order->collage_address }} <br>{{ $order->phone_number }}<br></address>
                        </div>
                        <div class="col-4">
                            <b>Order ID:</b> {{ $order->id }}<br>
                            <b>Amount:</b> {{ round($order->grand_total, 2) }}<br>
                            <b>Order Status:</b> {{ $order->status }}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orderlist as $item)
                                    <tr>
                                        <td>{{ $item->product->name }}</td>
                                        <td>{{ $item->product->category }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>Rs. {{ round($item->price, 2) }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('scripts')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 <script>



     $(function() {
         $("#printable").find('.print').on('click', function() {
             $("#printable").print({
                 globalStyles : true,
                 mediaPrint : true,
                 stylesheet : "http://fonts.googleapis.com/css?family=Inconsolata",
                 iframe : false,
                 noPrintSelector : ".avoid-this",
                 append : "Free jQuery Plugins<br/>",
                 prepend : "<br/>jQueryScript.net",
                 manuallyCopyFormValues: true,
                 deferred: $.Deferred(),
                 timeout: 250,
                 title: null,
                 doctype: '<!doctype html>'
             });
         })

 </script>
@endpush
