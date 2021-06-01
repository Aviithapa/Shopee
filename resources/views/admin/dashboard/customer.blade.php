@extends('admin.layout.app')

@section('content')
    @include('admin.partials.common.page-title', ['page_title' => 'Dashboard'])
    <div class="container">
        <div class="row 2col">
            <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
                <div class="tiles blue added-margin">
                    <div class="tiles-body">
                        <div class="controller">
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                        </div>
                        <div class="tiles-title"> YOUR TOTAL PRODUCT </div>
                        <div class="heading"> <span class="animate-number" data-value="{{getProductTotalQuanity()}}" data-animation-duration="1200">0</span> </div>
                        <div class="progress transparent progress-small no-radius">
                            <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="{{getProductTotalQuanity()}}%"></div>
                        </div>
                        <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp;{{getProductTotalQuanity()}} </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
                <div class="tiles green added-margin">
                    <div class="tiles-body">
                        <div class="controller">
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                        </div>
                        <div class="tiles-title"> YOUR ACTIVE  PRODUCTS </div>
                        <div class="heading"> <span class="animate-number" data-value="{{getActiveProductTotalQuanity()}}" data-animation-duration="1000">0</span> </div>
                        <div class="progress transparent progress-small no-radius">
                            <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="{{getActiveProductTotalQuanity()}}%"></div>
                        </div>
                        <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; {{getActiveProductTotalQuanity()}} <span class="blend"></span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 spacing-bottom">
                <div class="tiles red added-margin">
                    <div class="tiles-body">
                        <div class="controller">
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                        </div>
                        <div class="tiles-title"> TODAY’S SALES </div>
                        <div class="heading"> $ <span class="animate-number" data-value="14500" data-animation-duration="1200">0</span> </div>
                        <div class="progress transparent progress-white progress-small no-radius">
                            <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="45%"></div>
                        </div>
                        <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 5% higher <span class="blend">than last month</span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="tiles purple added-margin">
                    <div class="tiles-body">
                        <div class="controller">
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                        </div>
                        <div class="tiles-title"> TOTAL EARNING </div>
                        <div class="row-fluid">
                            <div class="heading"> <span class="animate-number" data-value="1600" data-animation-duration="700">0</span> </div>
                            <div class="progress transparent progress-white progress-small no-radius">
                                <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="12%"></div>
                            </div>
                        </div>
                        <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 3% higher <span class="blend">than last month</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="tiles white">
                <div class="tiles-body">
                    <div class="tiles-title"> <strong>Your Product</strong></div>
                    <br>
                    <table class="table table-hover table-condensed" id="basic-data-table">
                        <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Book Name</th>
                            <th>Book Price</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($product as $key => $product)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                    {{$product->name}}
                                </td>
                                <td>
                                    Rs. {{$product->price}}
                                </td>
                                <td>
                                    {{$product->status}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
