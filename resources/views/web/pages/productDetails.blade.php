@extends('web.layouts.app')

@section('content')
    <!-- Main Content - start -->
    <main>
        <section class="container">


            <ul class="b-crumbs">
                <li>
                    <a href="{{url('/')}}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{url('catelog')}}">
                        Catalog
                    </a>
                </li>
                <li>
                  {{$product->category}}
                </li>
                <li>
                    <span>{{$product->name}}</span>
                </li>
            </ul>
            <h1 class="main-ttl"><span>{{$product->name}}</span></h1>
            <!-- Single Product - start -->
            <div class="prod-wrap">

                <!-- Product Images -->
                <div class="prod-slider-wrap">
                    <div class="prod-slider">
                        <ul class="prod-slider-car">
                            <li>
                                <a data-fancybox-group="product" class="fancy-img" href="http://placehold.it/500x722">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Product Description/Info -->
                <div class="prod-cont">
                    <div class="prod-cont-txt">
                        {{$product->excerpt}}
                    </div>
                    <p class="prod-actions">
                        <a href="#" class="prod-favorites"><i class="fa fa-heart"></i> Wishlist</a>
                        <a href="#" class="prod-compare"><i class="fa fa-bar-chart"></i> Compare</a>
                    </p>
                    <div class="prod-info">
                        <p class="prod-price">
                            <b class="item_current_price">{{$product->price}}</b>
                        </p>
{{--                        <p class="prod-qnt">--}}
{{--                            <input value="1" type="text">--}}
{{--                            <a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>--}}
{{--                            <a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>--}}
{{--                        </p>--}}
                        <p class="prod-addwrap">
                            <a href="{{url('add/to/cart/'.$product->id)}}" class="prod-add" rel="nofollow">Add to cart</a>
                        </p>
                    </div>
                    <ul class="prod-i-props">
                        <li>
                            <b>Author</b> 05464207
                        </li>
                        <li>
                            <b>Publication</b> 05464207
                        </li>
                        <li>
                            <b>Author</b> 05464207
                        </li>
                        <li><a href="#" class="prod-showprops">All Features</a></li>
                    </ul>
                </div>

                <!-- Product Tabs -->
                <div class="prod-tabs-wrap">
                    <ul class="prod-tabs">
                        <li><a data-prodtab-num="1" class="active" href="#" data-prodtab="#prod-tab-1">Description</a></li>

                    </ul>
                    <div class="prod-tab-cont">

                        <p data-prodtab-num="1" class="prod-tab-mob active" data-prodtab="#prod-tab-1">Description</p>
                        <div class="prod-tab stylization" id="prod-tab-1">
                        {{$product->description}}
                         </div>
                    </div>
                </div>

            </div>
            <!-- Single Product - end -->

            <!-- Related Products - start -->
            <div class="prod-related">
                <h2><span>Related products</span></h2>
                <div class="prod-related-car" id="prod-related-car">
                    <ul class="slides">
                        <li class="prod-rel-wrap">
                            @foreach($related_product as $related_product)
                            <div class="prod-rel">
                                <a href="{{url('productDetails/'.$related_product->id)}}" class="prod-rel-img">
                                    <img src="http://placehold.it/300x311" alt="Adipisci aperiam commodi">
                                </a>
                                <div class="prod-rel-cont">
                                    <h3><a href="{{url('productDetails/'.$related_product->id)}}">{{$related_product->name}}</a></h3>
                                    <p class="prod-rel-price">
                                        <b>{{$related_product->price}}</b>
                                    </p>
                                    <div class="prod-rel-actions">
                                        <a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
                                        <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
                                        <p class="prod-i-addwrap">
                                            <a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </li>
                    </ul>
                </div>
            </div>
            <!-- Related Products - end -->

        </section>
    </main>
    <!-- Main Content - end -->
@endsection
