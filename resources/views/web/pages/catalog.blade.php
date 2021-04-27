@extends('web.layouts.app')
@section('content')
       <!-- Main Content - start -->
    <main>
        <section class="container">


            <ul class="b-crumbs">
                <li>
                    <a href="index.html">
                        Home
                    </a>
                </li>
                <li>
                    <a href="catalog-list.html">
                        Catalog
                    </a>
                </li>
            </ul>
            <h1 class="main-ttl"><span> Category</span></h1>
            <!-- Catalog Sidebar - start -->
            <div class="section-sb">

                <!-- Catalog Categories - start -->
                <div class="section-sb-current">
                    <h3><a href="#" style="color: #25a521 !important">University <span id="section-sb-toggle" class="section-sb-toggle"><span class="section-sb-ico"></span></span></a></h3>
                    <ul class="section-sb-list" id="section-sb-list">
                        <li class="categ-1">
                                <a href="{{url('/catalog/university/TU')}}" >
                                    <span class="categ-1-label" style="text-align: left !important;" >Tribhuwan University</span>
                                </a>
                        </li>
                        <li class="categ-1">
                            <a href="{{url('/catalog/university/PU')}}" >
                                <span class="categ-1-label" style="text-align: left !important;">Pokhara University</span>
                            </a>
                        </li>
                        <li class="categ-1">
                            <a href="{{url('/catalog/university/PBU')}}" >
                                <span class="categ-1-label" style="text-align: left !important;">Purbanchal University</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="section-sb-current">
                    <h3><a href="catalog-list.html" style="color: #25a521 !important">Faculty <span id="section-sb-toggle" class="section-sb-toggle"><span class="section-sb-ico"></span></span></a></h3>
                    <ul class="section-sb-list" id="section-sb-list">
                        <li class="categ-1">
                            @foreach($faculty as $faculty)
                            <a href="{{url('catalog/faculty/'.$faculty->name)}}" >
                                <span class="categ-1-label" style="text-align: left !important;">{{$faculty->name}}</span>
                            </a>
                                @endforeach
                        </li>
                    </ul>
                </div>

                <div class="section-sb-current">
                    <h3><a href="catalog-list.html" style="color: #25a521 !important">Semister <span id="section-sb-toggle" class="section-sb-toggle"><span class="section-sb-ico"></span></span></a></h3>
                    <ul class="section-sb-list" id="section-sb-list">
                        <li class="categ-1">
                            @foreach($semester as $semester)
                                <a href="{{url('catalog/semester/'.$semester->name)}}" >
                                    <span class="categ-1-label" style="text-align: left !important;">{{$semester->name}}</span>
                                </a>
                            @endforeach
                        </li>
                    </ul>
                </div>
                <!-- Catalog Categories - end -->

            </div>
            <!-- Catalog Sidebar - end -->
            <!-- Catalog Items | Gallery V1 - start -->
            <div class="section-cont">

                <!-- Catalog Topbar - start -->
                <div class="section-top">

                    <!-- View Mode -->
                    <ul class="section-mode">
                        <li class="section-mode-gallery active"><a title="View mode: Gallery" href="catalog-gallery.html"></a></li>
                        <li class="section-mode-list"><a title="View mode: List" href="catalog-list.html"></a></li>
                        <li class="section-mode-table"><a title="View mode: Table" href="catalog-table.html"></a></li>
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
                        <button class="btn btn-primary btn-round-sm btn-sm" style=" width:70px; font-size: 10px;background-color:#25a521 !important; border-color:#25a521 !important; margin-right:3px; font-weight: 700 !important;">RS {{$product->price}}</button><button class="btn btn-primary btn-round-sm btn-sm" style="font-size: 10px; font-weight: 600; width: 85px;">ADD TO CART</button>
                        </p>
                        <div class="prod-i-skuwrapcolor">
                        </div>
                    </div>
                        @endif
                    @endforeach
                </div>

                <!-- Pagination - start -->
                <ul class="pagi">
                {{$products->links()}}
                </ul>
                <!-- Pagination - end -->
            </div>
            <!-- Catalog Items | Gallery V1 - end -->

        </section>
    </main>
    <!-- Main Content - end -->
    @endsection

   @push('scripts')
       @endpush
