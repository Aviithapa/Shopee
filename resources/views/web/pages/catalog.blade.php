@extends('web.layouts.app')
@section('content')
       <!-- Main Content - start -->
    <main>
        <section class="container">
            <h2 class="main-ttl"><span> Category</span></h2>
            <!-- Catalog Sidebar - start -->
            <div class="section-sb">
                <div class="section-sb-current">
                    <ul class="section-sb-list" id="section-sb-list">
                        <li class="categ-1">
                            <a href="{{url('/catalog/sub_category/nobel')}}">
                                <span class="categ-1-label">Nobel</span>
                            </a>
                        </li>
                        <li class="categ-1">
                            <a href="{{url('/catalog/sub_category/coursebook')}}">
                                <span class="categ-1-label">Coursebook</span>
                            </a>
                        </li>
                        <li class="categ-1 has_child">
                            <a href="{{url('/catalog/sub_category/medical-examination')}}">
                                <span class="categ-1-label">Medical Examination</span>
                            </a>
                        </li>
                        <li class="categ-1 has_child">
                            <a href="{{url("catalog/sub_category/loksewa-examination")}}">
                                <span class="categ-1-label">Loksewa Examination</span>
                            </a>
                        </li>
                        <li class="categ-1">
                            <a href="{{url("catalog/sub_category/entrance-examination")}}">
                                <span class="categ-1-label">Entrance Examination</span>
                            </a>
                        </li>
                        <li class="categ-1">
                            <a href="{{url("catalog/sub_category/question-bank-and-solution")}}">
                                <span class="categ-1-label">Question bank and Solution</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="section-filter">
                    <div class="section-filter-cont">
                        <div class="section-filter-price">
                            <div class="range-slider section-filter-price" data-min="0" data-max="1000" data-from="200" data-to="800" data-prefix="$" data-grid="false"></div>
                        </div>
                        <div class="section-filter-item opened" id="nobel">
                            <p class="section-filter-ttl">Nobel</p>
                            <div class="section-filter-fields">
                                <p class="section-filter-field">
                                    <input id="section-filter-checkbox3-1 frictional" value="on" type="checkbox" >
                                    <label class="section-filter-checkbox" for="section-filter-checkbox3-1">Frictional</label>
                                </p>
                                <p class="section-filter-field">
                                    <input id="section-filter-checkbox3-2" value="on" type="checkbox">
                                    <label class="section-filter-checkbox" for="section-filter-checkbox3-2">Skill and Knowledge</label>
                                </p>
                                <p class="section-filter-field">
                                    <input id="section-filter-checkbox3-3" value="on" type="checkbox">
                                    <label class="section-filter-checkbox" for="section-filter-checkbox3-3">Motivation</label>
                                </p>
                                <p class="section-filter-field">
                                    <input id="section-filter-checkbox3-4" value="on" type="checkbox">
                                    <label class="section-filter-checkbox" for="section-filter-checkbox3-4">Biographies</label>
                                </p>
                            </div>
                        </div>
                        <div class="section-filter-item opened" id="university">
                            <p class="section-filter-ttl">University</p>
                            <div class="section-filter-fields">
                                <p class="section-filter-field">
                                    <input id="section-filter-checkbox3-1" value="on" type="checkbox">
                                    <label class="section-filter-checkbox" for="section-filter-checkbox3-1">Tribhuwan University</label>
                                </p>
                                <p class="section-filter-field">
                                    <input id="section-filter-checkbox3-2" value="on" type="checkbox">
                                    <label class="section-filter-checkbox" for="section-filter-checkbox3-2">Pokhara University</label>
                                </p>
                                <p class="section-filter-field">
                                    <input id="section-filter-checkbox3-3" value="on" type="checkbox">
                                    <label class="section-filter-checkbox" for="section-filter-checkbox3-3">Purbanchal University</label>
                                </p>
                                <p class="section-filter-field">
                                    <input id="section-filter-checkbox3-4" value="on" type="checkbox">
                                    <label class="section-filter-checkbox" for="section-filter-checkbox3-4">Kathmandu University</label>
                                </p>
                            </div>
                        </div>
                        <div class="section-filter-item opened">
                            <p class="section-filter-ttl">Faculty <i class="fa fa-angle-down"></i></p>
                            <div class="section-filter-fields">
                                <p class="section-filter-field">
                                    <input id="section-filter-radio1-1" value="on" type="radio" name="section-filter-radio1">
                                    <label class="section-filter-radio" for="section-filter-radio1-1">BBA</label>
                                </p>
                                <p class="section-filter-field">
                                    <input id="section-filter-radio1-2" value="on" type="radio" name="section-filter-radio1">
                                    <label class="section-filter-radio" for="section-filter-radio1-2">BBS</label>
                                </p>
                            </div>
                            <div class="section-filter-buttons">
                                <input class="btn btn-primary btn-round-sm btn-sm" id="set_filter" name="set_filter" value="Apply filter" type="button">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Catalog Sidebar - end -->
            <!-- Catalog Items | Gallery V1 - start -->
            <div class="section-cont">

                <!-- Catalog Topbar - start -->
                <div class="section-top">

                    <!-- View Mode -->
                    <ul class="section-mode">
                        <li class="section-mode-gallery active"><a title="View mode: Gallery" href="{{url('catalog')}}"></a></li>
                        <li class="section-mode-list"><a title="View mode: List" href="{{url('catalog')}}"></a></li>
                        <li class="section-mode-table"><a title="View mode: Table" href="{{url('catalog')}}"></a></li>
                    </ul>

                    <!-- Sorting -->
                    <!-- Count per page -->
                    <div class="section-count">
                        <p>12</p>
                        <ul>
                            <li><a href="#">12</a></li>
                            <li><a href="#">24</a></li>
                            <li><a href="#">48</a></li>
                        </ul>
                    </div>

                </div>
                <!-- Catalog Topbar - end -->
                <div class="prod-items section-items">
                    @include('web.pages.flash-message')
                @foreach($products as $product)
                        @if($product->status=='active' && $product->category != "second-hand-book")

                    <div class="prod-i">
                        <div class="prod-i-top">
                            <a href="{{url('productDetails/'.$product->id)}}" class="prod-i-img"><!-- NO SPACE --><img src="{{$product->getImage()}}" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
                            <p class="{{url('productDetails/'.$product->id)}}"><i class="fa fa-info"></i></p>
                        </div>
                        <div class="prod-sticker">
                            <p class="prod-sticker-3">-30%</p><p class="prod-sticker-4 countdown" data-date="29 Jan 2017, 14:30:00"></p>
                        </div>
                        <h3>
                            <a style="color: black !important;" href="{{url('productDetails/'.$product->id)}}">{{$product->name}}</a>
                        </h3>
                        <p class="prod-i-price">
                            <button class="btn btn-primary btn-round-sm btn-sm" style=" width:70px; font-size: 10px;background-color:#25a521 !important; border-color:#25a521 !important; margin-right:3px; font-weight: 700 !important;">RS {{$product->price}}</button><a href="{{url('add/to/cart/'.$product->id)}}"><button class="btn btn-primary btn-round-sm btn-sm" style="font-size: 10px; font-weight: 600; width: 85px;">ADD TO CART</button></a>
                        </p>
                        <div class="prod-i-skuwrapcolor">
                        </div>
                    </div>
                        @endif
                    @endforeach
                </div>

                <!-- Pagination - start -->

                    {{$products->links( "pagination::bootstrap-4") }}
                <!-- Pagination - end -->
            </div>
            <!-- Catalog Items | Gallery V1 - end -->

        </section>
    </main>
    <!-- Main Content - end -->
    @endsection

   @push('scripts')
<script>
    $(function () {
        $("#nobel").onchange(function () {
           alert("change in nobel");
        });
    });

</script>

   @endpush
