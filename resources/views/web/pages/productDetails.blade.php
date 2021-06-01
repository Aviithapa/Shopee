@extends('web.layouts.app')

@section('content')
    <!-- Main Content - start -->
    <main>
        <section class="container mt-5" >



            <h1 class="main-ttl"><span>{{$product->name}}</span></h1>
            <!-- Single Product - start -->
            <div class="prod-wrap">

                <!-- Product Images -->
                <div class="prod-slider-wrap">
                    <div class="prod-slider">
                        <ul class="prod-slider-car">
                            <li>
                                <a data-fancybox-group="product" class="fancy-img" href="{{$product->getImage()}}">
                                    <img src="{{$product->getImage()}}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Product Description/Info -->
                <div class="prod-cont">
                    <p class="prod-actions">
                    </p>
                    <div class="prod-info">
                        <p class="prod-price">
                           <h3> <b class="item_current_price">Rs. {{$product->price}}</b></h3>
                        </p>
                        <p class="prod-addwrap">
                            <a href="{{url('add/to/cart/'.$product->id)}}" class="prod-add" rel="nofollow">Add to cart</a>
                        </p>
                    </div>
                    <ul class="prod-i-props">
                        <li>
                            <b>Publication</b>: {{$product->publication}}
                        </li>
                        <li>
                            <b>Edition</b>: {{$product->edition}}
                        </li>
                        <li>
                            <b>Author</b>: {{$product->author}}
                        </li>
                        <li>
                            <h3>Short Description</h3>
                            <p style="text-align: justify;">{!!html_entity_decode($product->excerpt)!!}</p>
                        </li>
                    </ul>
                </div>
                <div class="prod-tabs-wrap">
                    <ul class="prod-tabs">
                        <li><a data-prodtab-num="1" class="active" href="#" data-prodtab="#prod-tab-1">Description</a></li>

                    </ul>
                    <div class="prod-tab-cont">

                        <p data-prodtab-num="1" class="prod-tab-mob active" data-prodtab="#prod-tab-1">Description</p>
                        <div class="prod-tab stylization" id="prod-tab-1">
                            {!!html_entity_decode($product->description)!!}
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
                                    <img src="{{$related_product->getImage()}}" alt="Adipisci aperiam commodi">
                                </a>
                                <div class="prod-rel-cont">
                                    <h4><a href="{{url('productDetails/'.$related_product->id)}}" style="color: black !important;">{{$related_product->name}}</a></h4>
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
