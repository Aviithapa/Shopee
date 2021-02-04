@extends('web.layouts.app')

@section('content')
<!-- Main Content - start -->
<main>
    <section class="container">


        <!-- Slider -->
        <div class="fr-slider-wrap">
            <div class="fr-slider">
                <ul class="slides">
                    @foreach($banners as $banners)
                    <li>
                        <img src="{{$banners->getImage()}}"class="img-fluid" alt="">
                        <div class="fr-slider-cont">
                            <h3>{{$banners->title}}</h3>
                            <p>{{$banners->content}}</p>
                            <p class="fr-slider-more-wrap">
                                <a class="fr-slider-more" href="#">View collection</a>
                            </p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>


        <!-- Popular Products -->
        <div class="fr-pop-wrap">

            <h3 class="component-ttl"><span>Popular BOOKS</span></h3>

            <ul class="fr-pop-tabs sections-show">
                <li><a data-frpoptab-num="1" data-frpoptab="#frpoptab-tab-1" href="#" class="active">All Categories</a></li>
                @foreach($categories as $categories)
                    <li><a data-frpoptab-num="1" data-frpoptab="#frpoptab-tab-1" href="#" class="">{{$categories->name}}</a></li>
                @endforeach
            </ul>

            <div class="fr-pop-tab-cont">

                <p data-frpoptab-num="1" class="fr-pop-tab-mob active" data-frpoptab="#frpoptab-tab-1">All Categories</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-1">

                    <ul class="slides">
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/250x409" alt="Dignissimos fuga"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Dignissimos fuga</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$205</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/277x250" alt="Officiis nihil culpa"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Officiis nihil culpa</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$180</b>
                            </p>
                        </li>


                    </ul>

                </div>

                <p data-frpoptab-num="2" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-2">Kids</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-2">

                    <ul class="slides">

                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/250x350" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Go to detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Aspernatur excepturi rem</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                            <div class="prod-i-skuwrapcolor">
                                <ul class="prod-i-skucolor">
                                    <li class="bx_active"><img src="img/color/red.jpg" alt="Red"></li>
                                    <li><img src="img/color/blue.jpg" alt="Blue"></li>
                                </ul>
                            </div>
                        </li>


                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/329x250" alt="Sit recusandae voluptas"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>

                                <div class="prod-sticker">
                                    <p class="prod-sticker-1">NEW</p>
                                </div>
                            </div>
                            <h3>
                                <a href="product.html">Sit recusandae voluptas</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$200</b>
                            </p>
                        </li>
                    </ul>
                </div>

                <p data-frpoptab-num="3" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-3">Women</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-3">

                    <ul class="slides">

                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/250x302" alt="Amet tempore unde"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Amet tempore unde</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$165</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/250x351" alt="Ratione magni"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Ratione magni</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$125</b>
                            </p>
                        </li>
                    </ul>
                </div>

                <p data-frpoptab-num="4" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-4">Men</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-4">

                    <ul class="slides">

                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/250x422" alt="Nisi provident atque"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Nisi provident atque</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$130</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/250x409" alt="Dignissimos fuga"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Dignissimos fuga</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$205</b>
                            </p>
                        </li>

                    </ul>

                </div>


                <p data-frpoptab-num="5" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-5">Shoes</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-5">

                    <ul class="slides">

                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/252x250" alt="Nisi autem error"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Go to detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Nisi autem error</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$95</b>
                            </p>
                            <div class="prod-i-skuwrapcolor">
                                <ul class="prod-i-skucolor">
                                    <li class="bx_active"><img src="img/color/red.jpg" alt="Red"></li>
                                    <li><img src="img/color/blue.jpg" alt="Blue"></li>
                                </ul>
                            </div>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/316x250" alt="Tempora ea ratione vel"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>

                                <div class="prod-sticker">
                                    <p class="prod-sticker-2">HIT</p>
                                </div>
                            </div>
                            <h3>
                                <a href="product.html">Tempora ea ratione vel</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$120</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/281x250" alt="Minus sequi iste"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Minus sequi iste</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$135</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/265x250" alt="Dignissimos fuga voluptates totam"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Dignissimos fuga voluptates totam</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$85</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/291x250" alt="Perferendis recusandae"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Perferendis recusandae</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$70</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/277x250" alt="Officiis nihil culpa"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Officiis nihil culpa</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$180</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/295x250" alt="Distinctio modi quos"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Distinctio modi quos</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$195</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/301x250" alt="Corrupti velit vero"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Corrupti velit vero</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$220</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/289x250" alt="Dicta doloremque hic"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Dicta doloremque hic</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>

                    </ul>

                </div>


            </div><!-- .fr-pop-tab-cont -->


        </div><!-- .fr-pop-wrap -->


        <!-- Banners -->
        <div class="banners-wrap">
            <div class="banners-list">
                <div class="banner-i style_11">
                    <span class="banner-i-bg" style="background: url(http://placehold.it/560x360);"></span>
                    <div class="banner-i-cont">
                        <p class="banner-i-subttl">SOLUTION</p>
                        <h3 class="banner-i-ttl">NEB XI<br>SOLUTION</h3>
                        <p class="banner-i-link"><a href="section.html">View More</a></p>
                    </div>
                </div>
                <div class="banner-i style_22">
                    <span class="banner-i-bg" style="background: url(http://placehold.it/270x360);"></span>
                    <div class="banner-i-cont">
                        <p class="banner-i-subttl">GREAT COLLECTION</p>
                        <h3 class="banner-i-ttl">CLOTHING<br>ACCESSORIES</h3>
                        <p class="banner-i-link"><a href="section.html">Show more</a></p>
                    </div>
                </div>
                <div class="banner-i style_21">
                    <span class="banner-i-bg" style="background: url(http://placehold.it/270x360);"></span>
                    <div class="banner-i-cont">
                        <h3 class="banner-i-ttl">SPORT<br>CLOTHES</h3>
                        <p class="banner-i-link"><a href="section.html">Go to catalog</a></p>
                    </div>
                </div>
                <div class="banner-i style_12">
                    <span class="banner-i-bg" style="background: url(http://placehold.it/560x360);"></span>
                    <div class="banner-i-cont">
                        <p class="banner-i-subttl">STYLISH CLOTHES</p>
                        <h3 class="banner-i-ttl">WOMEN'S COLLECTION</h3>
                        <p>A great selection of dresses, <br>blouses and women's suits</p>
                        <p class="banner-i-link"><a href="section.html">View More</a></p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Special offer -->
        <div class="discounts-wrap">
            <h3 class="component-ttl"><span>Special offer</span></h3>
            <div class="flexslider discounts-list">
                <ul class="slides">
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/120x120" alt="Dicta doloremque">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Dicta doloremque</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$115</b> <del>$135</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/99x120" alt="Similique delectus">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Similique delectus</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$105</b> <del>$120</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/75x120" alt="Adipisci nemo">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Adipisci nemo</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$70</b> <del>$90</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/81x120" alt="Туфли Dr.Koffer">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Туфли Dr.Koffer</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$190</b> <del>$210</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/117x120" alt="Quod consequatur">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Quod consequatur</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$120</b> <del>$140</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/80x120" alt="Dolore fugit">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Dolore fugit</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$80</b> <del>$95</del>
                        </p>
                    </li>
                </ul>
            </div>
            <div class="discounts-info">
                <p>Special offer!<br>Limited time only</p>
                <a href="catalog-list.html">Shop now</a>
            </div>
        </div>


        <!-- Latest news -->
        <div class="posts-wrap">
            <div class="posts-list">
                <div class="posts-i">
                    <a class="posts-i-img" href="post.html">
                        <span style="background: url(http://placehold.it/354x236)"></span>
                    </a>
                    <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>30</span> Jan</time>
                    <div class="posts-i-info">
                        <a href="blog.html" class="posts-i-ctg">Reviews</a>
                        <h3 class="posts-i-ttl">
                            <a href="post.html">Animi quaerat at</a>
                        </h3>
                    </div>
                </div>
                <div class="posts-i">
                    <a class="posts-i-img" href="post.html">
                        <span style="background: url(http://placehold.it/354x236)"></span>
                    </a>
                    <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>29</span> Jan</time>
                    <div class="posts-i-info">
                        <a href="blog.html" class="posts-i-ctg">Articles</a>
                        <h3 class="posts-i-ttl">
                            <a href="post.html">Ex atque commodi</a>
                        </h3>
                    </div>
                </div>
                <div class="posts-i">
                    <a class="posts-i-img" href="post.html">
                        <span style="background: url(http://placehold.it/354x236)"></span>
                    </a>
                    <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>25</span> Jan</time>
                    <div class="posts-i-info">
                        <a href="blog.html" class="posts-i-ctg">News</a>
                        <h3 class="posts-i-ttl">
                            <a href="post.html">Hic quod maxime deserunt</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>


        <!-- Testimonials -->
        <div class="reviews-wrap">
            <div class="reviewscar-wrap">
                <div class="swiper-container reviewscar">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Corrupti velit, vero esse, aperiam error magni illum quos, accusantium debitis et possimus recusandae tempora ad itaque dolorem veniam non voluptatem impedit iste? Dicta doloremque hic porro aspernatur. Dolores eligendi similique, cumque, eius veritatis</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-container reviewscar-thumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Aureole Jayde">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Aureole Jayde</a></h3>
                            <p class="reviewscar-post">Director</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Benjy Darrin">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Benjy Darrin</a></h3>
                            <p class="reviewscar-post">Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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


