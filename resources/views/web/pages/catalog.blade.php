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
            <h1 class="main-ttl"><span>Category</span></h1>
            <!-- Catalog Sidebar - start -->
            <div class="section-sb">

                <!-- Catalog Categories - start -->
                <div class="section-sb-current">
                    <h3><a href="{{url('catalog')}}">Category <span id="section-sb-toggle" class="section-sb-toggle"><span class="section-sb-ico"></span></span></a></h3>
                    <ul class="section-sb-list" id="section-sb-list">
                        @foreach($categories as $category)
                        <li class="categ-1">
                            <a href="catalog-list.html">
                                <span class="categ-1-label">{{$category->name}}</span>
                            </a>
                        </li>
                        @endforeach
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
                    <div class="section-sortby">
                        <p>default sorting</p>
                        <ul>
                            <li>
                                <a href="#">sort by popularity</a>
                            </li>
                            <li>
                                <a href="#">low price to high</a>
                            </li>
                            <li>
                                <a href="#">high price to low</a>
                            </li>
                            <li>
                                <a href="#">by title A <i class="fa fa-angle-right"></i> Z</a>
                            </li>
                            <li>
                                <a href="#">by title Z <i class="fa fa-angle-right"></i> A</a>
                            </li>
                            <li>
                                <a href="#">default sorting</a>
                            </li>
                        </ul>
                    </div>

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
                @foreach($products as $product)
                    <div class="prod-i">
                        <div class="prod-i-top">
                            <a href="{{url('productDetails/'.$product->id)}}" class="prod-i-img"><!-- NO SPACE --><img src="{{$product->getImage()}}" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
                            <p class="prod-i-info">
                                <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                <a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                            </p>
                            <a href="#" class="prod-i-buy">Add to cart</a>
                            <p class="prod-i-properties-label"><i class="fa fa-info"></i></p>
                        </div>
                        <div class="prod-sticker">
                            <p class="prod-sticker-3">-30%</p><p class="prod-sticker-4 countdown" data-date="29 Jan 2017, 14:30:00"></p>
                        </div>
                        <h3>
                            <a href="product.html">{{$product->name}}</a>
                        </h3>
                        <p class="prod-i-price">
                            <b>{{$product->price}}</b>
                            <del>{{$product->price}}</del>
                        </p>
                        <div class="prod-i-skuwrapcolor">
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Pagination - start -->
                <ul class="pagi">
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li class="pagi-next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
                <!-- Pagination - end -->
            </div>
            <!-- Catalog Items | Gallery V1 - end -->

            <!-- Quick View Product - start -->
            <div class="qview-modal">
                <div class="prod-wrap">
                    <a href="product.html">
                        <h1 class="main-ttl">
                            <span>Reprehenderit adipisci</span>
                        </h1>
                    </a>
                    <div class="prod-slider-wrap">
                        <div class="prod-slider">
                            <ul class="prod-slider-car">
                                <li>
                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
                                        <img src="http://placehold.it/500x525" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x591">
                                        <img src="http://placehold.it/500x591" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
                                        <img src="http://placehold.it/500x525" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                        <img src="http://placehold.it/500x722" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                        <img src="http://placehold.it/500x722" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                        <img src="http://placehold.it/500x722" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                        <img src="http://placehold.it/500x722" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="prod-thumbs">
                            <ul class="prod-thumbs-car">
                                <li>
                                    <a data-slide-index="0" href="#">
                                        <img src="http://placehold.it/500x525" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#">
                                        <img src="http://placehold.it/500x591" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#">
                                        <img src="http://placehold.it/500x525" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="3" href="#">
                                        <img src="http://placehold.it/500x722" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="4" href="#">
                                        <img src="http://placehold.it/500x722" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="5" href="#">
                                        <img src="http://placehold.it/500x722" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="6" href="#">
                                        <img src="http://placehold.it/500x722" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="prod-cont">
                        <p class="prod-actions">
                            <a href="#" class="prod-favorites"><i class="fa fa-heart"></i> Add to Wishlist</a>
                            <a href="#" class="prod-compare"><i class="fa fa-bar-chart"></i> Compare</a>
                        </p>
                        <div class="prod-skuwrap">
                            <p class="prod-skuttl">Color</p>
                            <ul class="prod-skucolor">
                                <li class="active">
                                    <img src="img/color/blue.jpg" alt="">
                                </li>
                                <li>
                                    <img src="img/color/red.jpg" alt="">
                                </li>
                                <li>
                                    <img src="img/color/green.jpg" alt="">
                                </li>
                                <li>
                                    <img src="img/color/yellow.jpg" alt="">
                                </li>
                                <li>
                                    <img src="img/color/purple.jpg" alt="">
                                </li>
                            </ul>
                            <p class="prod-skuttl">Sizes</p>
                            <div class="offer-props-select">
                                <p>XL</p>
                                <ul>
                                    <li><a href="#">XS</a></li>
                                    <li><a href="#">S</a></li>
                                    <li><a href="#">M</a></li>
                                    <li class="active"><a href="#">XL</a></li>
                                    <li><a href="#">L</a></li>
                                    <li><a href="#">4XL</a></li>
                                    <li><a href="#">XXL</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="prod-info">
                            <p class="prod-price">
                                <b class="item_current_price">$238</b>
                            </p>
                            <p class="prod-qnt">
                                <input type="text" value="1">
                                <a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>
                                <a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>
                            </p>
                            <p class="prod-addwrap">
                                <a href="#" class="prod-add">Add to cart</a>
                            </p>
                        </div>
                        <ul class="prod-i-props">
                            <li>
                                <b>SKU</b> 05464207
                            </li>
                            <li>
                                <b>Manufacturer</b> Mayoral
                            </li>
                            <li>
                                <b>Material</b> Cotton
                            </li>
                            <li>
                                <b>Pattern Type</b> Print
                            </li>
                            <li>
                                <b>Wash</b> Colored
                            </li>
                            <li>
                                <b>Style</b> Cute
                            </li>
                            <li>
                                <b>Color</b> Blue, Red
                            </li>
                            <li><a href="#" class="prod-showprops">All Features</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Quick View Product - end -->
        </section>
    </main>
    <!-- Main Content - end -->
    @endsection
