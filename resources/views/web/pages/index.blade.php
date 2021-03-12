@extends('web.layouts.app')

@section('content')
<!-- Main Content - start -->
<main>
    <section>
        <div class="swiper-container slideshow">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="slide-image" style="background-image: url(https://images.unsplash.com/photo-1538083024336-555cf8943ddc?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=66b476a51b19889e13182c0e4827af18&auto=format&fit=crop&w=1950&q=80)"></div>
                    <span class="slide-title">

                    </span>
                </div>
                </div>
            </div>
    </section>
    <div class="marquee">
        <p class="container-fluid">

        </p>
    </div>



<section class="container-fluid">

    <div class="row">
        <div class="col-12 col-md-10">
            <div class="bbb_viewed">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="bbb_main_container">
                                <div class="bbb_viewed_title_container">
                                    <h3 class="bbb_viewed_title">Best selling products</h3>
                                </div>
                                <div class="bbb_viewed_slider_container">
                                    <div class="row">
                                        <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                                            <div class="MultiCarousel-inner">
                                                <div class="prod-items section-items">
                                                @foreach($products as $product)
                                                <div class="item">
                                                    <div class="pad15">
                                                        <div class="prod-i">
                                                            <div class="prod-i-top">
                                                                <a href="{{url('productDetails/'.$product->id)}}" class="prod-i-img"><!-- NO SPACE --><img src="{{$product->getImage()}}" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
                                                                <p class="prod-i-info">
                                                                     <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                                                    <a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                                                </p>
                                                                <a href="{{url('add/to/cart/'.$product->id)}}" class="prod-i-buy">Add to cart</a>
                                                                <p class="prod-i-properties-label"><a class="fa fa-info" href="{{url('productDetails/'.$product->id)}}"></a></p>
                                                            </div>
                                                            <div class="prod-sticker">
                                                                <p class="prod-sticker-3">-30%</p><p class="prod-sticker-4 countdown" data-date="29 Jan 2017, 14:30:00"></p>
                                                            </div>
                                                            <h3>
                                                                <a href="{{url('productDetails/'.$product->id)}}">{{$product->name}}</a>
                                                            </h3>
                                                            <p class="prod-i-price">
                                                                <b>{{$product->price}}</b>
                                                                <del>{{$product->price}}</del>
                                                            </p>
                                                            <div class="prod-i-skuwrapcolor">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    @endforeach
                                                    </div>


                                            </div>
                                            <button class="btn btn-primary leftLst"><</button>
                                            <button class="btn btn-primary rightLst">></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-2">
            <div class="bbb_viewed">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="bbb_main_container">
                                <div class="bbb_viewed_slider_container" style="margin: 5px">
                                    <img src="https://i.pinimg.com/originals/20/1f/d2/201fd2f442af458b8d07499028f2bd19.jpg" alt="" style="height: 420px; width: available;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

   @foreach($categories as $categories)
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="bbb_viewed">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="bbb_main_container">
                                    <div class="bbb_viewed_title_container">
                                        <div class="col-12 col-md-12">
                                        <div class="col-6 col-md-6">
                                            <h3 class="bbb_viewed_title">{{$categories->name}}</h3>
                                        </div>
                                        <div class="col-6 col-md-6">
                                            <button class="">View All</button>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="bbb_viewed_slider_container">
                                        <div class="row" style="margin: 10px">
                                            <div class="MultiCarousel" data-items="1,3,5,6,7" data-slide="1" id="MultiCarousel"  data-interval="1000">
                                                <div class="MultiCarousel-inner">
                                                    <div class="prod-items section-items">
                                                        @foreach($products as $product)
                                                            @if($product->category==$categories->name)
                                                            <div class="item">
                                                                <div class="pad15">
                                                                    <div class="prod-i">
                                                                        <div class="prod-i-top">
                                                                            <a href="{{url('productDetails/'.$product->id)}}" class="prod-i-img"><!-- NO SPACE --><img src="{{$product->getImage()}}" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
                                                                            <p class="prod-i-info">
                                                                                <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                                                                <a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                                                                <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                                                            </p>
                                                                            <a href="{{url('add/to/cart/'.$product->id)}}" class="prod-i-buy">Add to cart</a>
                                                                            <p class="prod-i-properties-label"><a class="fa fa-info" href="{{url('productDetails/'.$product->id)}}"></a></p>
                                                                        </div>
                                                                        <div class="prod-sticker">
                                                                            <p class="prod-sticker-3">-30%</p><p class="prod-sticker-4 countdown" data-date="29 Jan 2017, 14:30:00"></p>
                                                                        </div>
                                                                        <h3>
                                                                            <a href="{{url('productDetails/'.$product->id)}}">{{$product->name}}</a>
                                                                        </h3>
                                                                        <p class="prod-i-price">
                                                                            <b>{{$product->price}}</b>
                                                                            <del>{{$product->price}}</del>
                                                                        </p>
                                                                        <div class="prod-i-skuwrapcolor">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                        @endforeach
                                                    </div>


                                                </div>
                                                <button class="btn btn-primary leftLst"><</button>
                                                <button class="btn btn-primary rightLst">></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
       @endforeach

    <div class="bbb_viewed">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="bbb_main_container">
                        <div class="bbb_viewed_title_container">
                            <h3 class="bbb_viewed_title">Best selling products</h3>
                            <div class="bbb_viewed_nav_container">
                                <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i></div>
                                <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i></div>
                            </div>
                        </div>
                        <div class="bbb_viewed_slider_container">
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
                    </div>
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
@push('scripts')
    <script>
        $(document).ready(function()
        {
            if($('.bbb_viewed_slider').length)
            {
                var viewedSlider = $('.bbb_viewed_slider');

                viewedSlider.owlCarousel(
                    {
                        loop:true,
                        margin:30,
                        autoplay:true,
                        autoplayTimeout:6000,
                        nav:false,
                        dots:false,
                        responsive:
                            {
                                0:{items:1},
                                575:{items:2},
                                768:{items:3},
                                991:{items:4},
                                1199:{items:6}
                            }
                    });

                if($('.bbb_viewed_prev').length)
                {
                    var prev = $('.bbb_viewed_prev');
                    prev.on('click', function()
                    {
                        viewedSlider.trigger('prev.owl.carousel');
                    });
                }

                if($('.bbb_viewed_next').length)
                {
                    var next = $('.bbb_viewed_next');
                    next.on('click', function()
                    {
                        viewedSlider.trigger('next.owl.carousel');
                    });
                }
            }


        });
    </script>

    <script>
        // The Slideshow class.
        class Slideshow {
            constructor(el) {

                this.DOM = {el: el};

                this.config = {
                    slideshow: {
                        delay: 3000,
                        pagination: {
                            duration: 3,
                        }
                    }
                };

                // Set the slideshow
                this.init();

            }
            init() {

                var self = this;

                // Charmed title
                this.DOM.slideTitle = this.DOM.el.querySelectorAll('.slide-title');
                this.DOM.slideTitle.forEach((slideTitle) => {
                    charming(slideTitle);
                });

                // Set the slider
                this.slideshow = new Swiper (this.DOM.el, {

                    loop: true,
                    autoplay: {
                        delay: this.config.slideshow.delay,
                        disableOnInteraction: false,
                    },
                    speed: 500,
                    preloadImages: true,
                    updateOnImagesReady: true,

                    // lazy: true,
                    // preloadImages: false,

                    pagination: {
                        el: '.slideshow-pagination',
                        clickable: true,
                        bulletClass: 'slideshow-pagination-item',
                        bulletActiveClass: 'active',
                        clickableClass: 'slideshow-pagination-clickable',
                        modifierClass: 'slideshow-pagination-',
                        renderBullet: function (index, className) {

                            var slideIndex = index,
                                number = (index <= 8) ? '0' + (slideIndex + 1) : (slideIndex + 1);

                            var paginationItem = '<span class="slideshow-pagination-item">';
                            paginationItem += '<span class="pagination-number">' + number + '</span>';
                            paginationItem = (index <= 8) ? paginationItem + '<span class="pagination-separator"><span class="pagination-separator-loader"></span></span>' : paginationItem;
                            paginationItem += '</span>';

                            return paginationItem;

                        },
                    },

                    // Navigation arrows
                    navigation: {
                        nextEl: '.slideshow-navigation-button.next',
                        prevEl: '.slideshow-navigation-button.prev',
                    },

                    // And if we need scrollbar
                    scrollbar: {
                        el: '.swiper-scrollbar',
                    },

                    on: {
                        init: function() {
                            self.animate('next');
                        },
                    }

                });

                // Init/Bind events.
                this.initEvents();

            }
            initEvents() {

                this.slideshow.on('paginationUpdate', (swiper, paginationEl) => this.animatePagination(swiper, paginationEl));
                //this.slideshow.on('paginationRender', (swiper, paginationEl) => this.animatePagination());

                this.slideshow.on('slideNextTransitionStart', () => this.animate('next'));

                this.slideshow.on('slidePrevTransitionStart', () => this.animate('prev'));

            }
            animate(direction = 'next') {

                // Get the active slide
                this.DOM.activeSlide = this.DOM.el.querySelector('.swiper-slide-active'),
                    this.DOM.activeSlideImg = this.DOM.activeSlide.querySelector('.slide-image'),
                    this.DOM.activeSlideTitle = this.DOM.activeSlide.querySelector('.slide-title'),
                    this.DOM.activeSlideTitleLetters = this.DOM.activeSlideTitle.querySelectorAll('span');

                // Reverse if prev
                this.DOM.activeSlideTitleLetters = direction === "next" ? this.DOM.activeSlideTitleLetters : [].slice.call(this.DOM.activeSlideTitleLetters).reverse();

                // Get old slide
                this.DOM.oldSlide = direction === "next" ? this.DOM.el.querySelector('.swiper-slide-prev') : this.DOM.el.querySelector('.swiper-slide-next');
                if (this.DOM.oldSlide) {
                    // Get parts
                    this.DOM.oldSlideTitle = this.DOM.oldSlide.querySelector('.slide-title'),
                        this.DOM.oldSlideTitleLetters = this.DOM.oldSlideTitle.querySelectorAll('span');
                    // Animate
                    this.DOM.oldSlideTitleLetters.forEach((letter,pos) => {
                        TweenMax.to(letter, .3, {
                            ease: Quart.easeIn,
                            delay: (this.DOM.oldSlideTitleLetters.length-pos-1)*.04,
                            y: '50%',
                            opacity: 0
                        });
                    });
                }

                // Animate title
                this.DOM.activeSlideTitleLetters.forEach((letter,pos) => {
                    TweenMax.to(letter, .6, {
                        ease: Back.easeOut,
                        delay: pos*.05,
                        startAt: {y: '50%', opacity: 0},
                        y: '0%',
                        opacity: 1
                    });
                });

                // Animate background
                TweenMax.to(this.DOM.activeSlideImg, 1.5, {
                    ease: Expo.easeOut,
                    startAt: {x: direction === 'next' ? 200 : -200},
                    x: 0,
                });

                //this.animatePagination()

            }
            animatePagination(swiper, paginationEl) {

                // Animate pagination
                this.DOM.paginationItemsLoader = paginationEl.querySelectorAll('.pagination-separator-loader');
                this.DOM.activePaginationItem = paginationEl.querySelector('.slideshow-pagination-item.active');
                this.DOM.activePaginationItemLoader = this.DOM.activePaginationItem.querySelector('.pagination-separator-loader');

                console.log(swiper.pagination);
                // console.log(swiper.activeIndex);

                // Reset and animate
                TweenMax.set(this.DOM.paginationItemsLoader, {scaleX: 0});
                TweenMax.to(this.DOM.activePaginationItemLoader, this.config.slideshow.pagination.duration, {
                    startAt: {scaleX: 0},
                    scaleX: 1,
                });


            }

        }

        const slideshow = new Slideshow(document.querySelector('.slideshow'));

    </script>

    <script>

        $(document).ready(function () {
            var itemsMainDiv = ('.MultiCarousel');
            var itemsDiv = ('.MultiCarousel-inner');
            var itemWidth = "";

            $('.leftLst, .rightLst').click(function () {
                var condition = $(this).hasClass("leftLst");
                if (condition)
                    click(0, this);
                else
                    click(1, this)
            });

            ResCarouselSize();




            $(window).resize(function () {
                ResCarouselSize();
            });

            //this function define the size of the items
            function ResCarouselSize() {
                var incno = 0;
                var dataItems = ("data-items");
                var itemClass = ('.item');
                var id = 0;
                var btnParentSb = '';
                var itemsSplit = '';
                var sampwidth = $(itemsMainDiv).width();
                var bodyWidth = $('body').width();
                $(itemsDiv).each(function () {
                    id = id + 1;
                    var itemNumbers = $(this).find(itemClass).length;
                    btnParentSb = $(this).parent().attr(dataItems);
                    itemsSplit = btnParentSb.split(',');
                    $(this).parent().attr("id", "MultiCarousel" + id);

                    if (bodyWidth >= 1200) {
                        incno = itemsSplit[3];
                        itemWidth = sampwidth / incno;
                    }
                    else if (bodyWidth >= 992) {
                        incno = itemsSplit[2];
                        itemWidth = sampwidth / incno;
                    }
                    else if (bodyWidth >= 768) {
                        incno = itemsSplit[1];
                        itemWidth = sampwidth / incno;
                    }
                    else {
                        incno = itemsSplit[0];
                        itemWidth = sampwidth / incno;
                    }
                    $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
                    $(this).find(itemClass).each(function () {
                        $(this).outerWidth(itemWidth);
                    });

                    $(".leftLst").addClass("over");
                    $(".rightLst").removeClass("over");

                });
            }


            //this function used to move the items
            function ResCarousel(e, el, s) {
                var leftBtn = ('.leftLst');
                var rightBtn = ('.rightLst');
                var translateXval = '';
                var divStyle = $(el + ' ' + itemsDiv).css('transform');
                var values = divStyle.match(/-?[\d\.]+/g);
                var xds = Math.abs(values[4]);
                if (e == 0) {
                    translateXval = parseInt(xds) - parseInt(itemWidth * s);
                    $(el + ' ' + rightBtn).removeClass("over");

                    if (translateXval <= itemWidth / 2) {
                        translateXval = 0;
                        $(el + ' ' + leftBtn).addClass("over");
                    }
                }
                else if (e == 1) {
                    var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                    translateXval = parseInt(xds) + parseInt(itemWidth * s);
                    $(el + ' ' + leftBtn).removeClass("over");

                    if (translateXval >= itemsCondition - itemWidth / 2) {
                        translateXval = itemsCondition;
                        $(el + ' ' + rightBtn).addClass("over");
                    }
                }
                $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
            }

            //It is used to get some elements from btn
            function click(ell, ee) {
                var Parent = "#" + $(ee).parent().attr("id");
                var slide = $(Parent).attr("data-slide");
                ResCarousel(ell, Parent, slide);
            }

        });

    </script>
<script>
    $(document).ready(function(){
        $("#search").focus(function() {
            $(".search-box").addClass("border-searching");
            $(".search-icon").addClass("si-rotate");
        });
        $("#search").blur(function() {
            $(".search-box").removeClass("border-searching");
            $(".search-icon").removeClass("si-rotate");
        });
        $("#search").keyup(function() {
            if($(this).val().length > 0) {
                $(".go-icon").addClass("go-in");
            }
            else {
                $(".go-icon").removeClass("go-in");
            }
        });
        $(".go-icon").click(function(){
            $(".search-form").submit();
        });
    });

</script>
    @endpush

