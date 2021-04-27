@extends('web.layouts.app')

@section('content')
    <div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner overflow-visible">
                <div class="item active">
                    <img src="{{$banner->getImage()}}" alt="Los Angeles">
                </div>
                @foreach($banners as $banners)
                <div class="item">
                    <img src="{{$banners->getImage()}}" alt="Los Angeles">
                </div>
                @endforeach
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container">
        <div class="overwrite">
            <div class="row ">
                <div class="col-3" style=" margin-top:5px  ">
                    <div class="icons">
                        <span><img src="{{$question->getPostImage()}}" height="80px" width="80px"></span>
                    </div>
                    <h5 style="line-height: 1.4 !important;">QUESTION BANK <br>
                        AND SOLUTION SETS  <br>
                        FOR DIFFERENT COURSE</h5>
                </div>
                <div class="col-3 vl">
                    <div class="icons">
                        <span><img src="{{$course->getPostImage()}}" height="80px" width="80px"></span>
                    </div>
                    <h5 style="line-height: 1.4 !important;">COURSE BOOKS<br>
                        Available FROM <br>
                        VARIOUS PUBLICATION</h5>
                </div>
                <div class="col-3 vl">
                    <div class="icons">
                        <span><img src="{{$entrance->getPostImage()}}" height="80px" width="80px"></span>

                    </div>
                    <h5 style="line-height: 1.4 !important;">ENTRANCE EXAM <br>
                        PREPARATION BOOKS <br>
                        FOR DIFFERENT LEVELS</h5>
                </div>
                <div class="col-3 vl" style=" margin-top:5px  ">
                    <div class="icons">
                        <span><img src="{{$second->getPostImage()}}" height="80px" width="80px"></span>
                    </div>
                    <h5 style="line-height: 1.4 !important;">SECOND HAND <br>
                        BOOK SELLING AND <br>
                        BUYING PLATFORM</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="adds">
        <div class="col-lg-6 col-md-6 col-sm-12" style="    margin-right: -100px !important;
          margin-left: 60px;">
            <div class="add">
                <img src="{{$add->getImage()}}" alt="" width="100%">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12" style="margin-left: -10px;">
            <div class="add">
                <img src="{{$add1->getImage()}}" alt="" width="100%">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="title" >
            <h4>Best Selling Product</h4>
        </div>
        <p style="float: right; margin-top: -30px; margin-right: 70px;"><a href="{{url('catalog')}}"><button class="btn btn-primary btn-round-sm btn-sm">View All</button></a></p>

        <div class="content">
            <div class="row">
                @include('web.pages.flash-message')
                @foreach($products as $product)
                    @if($product->status=='active')
                <div class="columns">
                    <div class="card">
                        <img src="{{$product->getImage()}}" alt="">
                        <h5 style="font-weight: bold;  margin-bottom: 1px !important;"  style="line-height: 20px;">{{ str_limit($product->name, 14) }} </h5>
                        <p style="font-style: italic; font-size: 12px;">Mark Manson</p>
                        <p style="text-align: center; margin-bottom: -15px !important;"><button class="btn btn-primary btn-round-sm btn-sm" style="font-size: 14px;background-color:#25a521 !important; border-color:#25a521 !important; margin-right:3px; font-weight: 700 !important;">RS {{$product->price}}</button><a href="{{url('add/to/cart/'.$product->id)}}"><button class="btn btn-primary btn-round-sm btn-sm" style="font-size: 12px; font-weight: 700 !important;">ADD TO CART</button></a></p>
                    </div>
                </div>
                    @endif
                    @endforeach
            </div>
        </div>
    </div>


    <div class="bbb_viewed" style="background-color: whitesmoke !important;">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="bbb_main_container" style="background-color: whitesmoke !important; margin: 0px !important; margin-top: -50px">
                        <div class="bbb_viewed_title_container">
                            <h3 class="bbb_viewed_title">
                                <div class="title" >
                                    <h4>Question Bank and Solution</h4>
                                </div>
                            </h3>
                            <p style="float: right; margin-top: -60px; margin-right: 70px;"><a href="{{url('catalog/category/question-bank-and-solution')}}"><button class="btn btn-primary btn-round-sm btn-sm">View All</button></a></p>

                        </div>
                        <div class="bbb_viewed_slider_container">
                            @include('web.pages.flash-message')
                            <div class="owl-carousel owl-theme bbb_viewed_slider">
                                @foreach($questionbankandsolution as $products)
                                    @if($products->status=='active')
                                <div class="owl-item">
                                    <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center"  style="border-radius: 20px; ">
                                        <a href="{{url("productDetails/".$product->id)}}">
                                        <div class="bbb_viewed_image" style="width: 220px !important; height: 220px !important;"><img src="{{$products->getImage()}}" alt=""></div>
                                        </a>
                                        <div class="bbb_viewed_content text-center" style="margin-top: -5px;">
                                            <h5 style="font-size:14px !important;font-weight: bold; color: black !important; margin-bottom: 1px !important;line-height: 20px;">{{ str_limit($products->name, 18) }} </h5>
                                            <p style="color:black; font-style: italic; font-size: 12px;">{{$products->publication}}</p>
                                            <p class="mt-3"><button class="btn btn-primary btn-round-sm btn-sm" style=" width:70px; font-size: 10px;background-color:#25a521 !important; border-color:#25a521 !important; margin-right:3px; font-weight: 700 !important;">RS {{$product->price}}</button><button class="btn btn-primary btn-round-sm btn-sm" style="font-size: 10px; font-weight: 600; width: 85px;">ADD TO CART</button></p>

                                            <!-- <div class="bbb_viewed_name"><a href="#">Alkatel Phone</a></div> -->
                                        </div>
                                        <ul class="item_marks">
                                            <li class="item_mark item_discount">-{{$products->discount}} %</li>
                                            <li class="item_mark item_new">new</li>
                                        </ul>
                                    </div>
                                </div>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="bbb_viewed">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="bbb_main_container">
                        <div class="bbb_viewed_title_container" style="margin-top: -50px">
                            <h3 class="bbb_viewed_title">
                                <div class="title" >
                                    <h4>Course Books</h4>
                                </div>
                                <p style="float: right; margin-top: -40px; margin-right: 70px;"><a href="{{url('catalog/category/coursebook')}}"><button class="btn btn-primary btn-round-sm btn-sm">View All</button></a></p>

                            </h3>

                        </div>
                        <div class="bbb_viewed_slider_container">
                            <div class="owl-carousel owl-theme bbb_viewed_slider">
                                @foreach($coursebook as $coursework)
                                    @if($coursework->status=='active')
                                    <div class="owl-item">
                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center" style="border-radius: 20px;">
                                            <div class="bbb_viewed_image" style="width: 230px !important; height: 230px !important;"><img src="{{$coursework->getImage()}}" alt=""></div>
                                            <div class="bbb_viewed_content text-center">
                                                <h5 style="font-size:14px !important;font-weight: bold; color: black !important; margin-bottom: 1px !important;line-height: 20px;">{{ str_limit($coursework->name, 10) }} </h5>
                                                <p class="mt-3"><button class="btn btn-primary btn-round-sm btn-sm" style=" width:70px; font-size: 10px;background-color:#25a521 !important; border-color:#25a521 !important; margin-right:3px; font-weight: 700 !important;">RS {{$coursework->price}}</button><button class="btn btn-primary btn-round-sm btn-sm" style="font-size: 10px; font-weight: 600; width: 85px;">ADD TO CART</button></p>

                                                <!-- <div class="bbb_viewed_name"><a href="#">Alkatel Phone</a></div> -->
                                            </div>
                                            <ul class="item_marks">
                                                <li class="item_mark item_discount">-{{$coursework->discount}}%</li>
                                                <li class="item_mark item_new">new</li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bbb_viewed" style="background-color: whitesmoke !important;">>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="bbb_main_container" style="background-color: whitesmoke !important;">>
                        <div class="bbb_viewed_title_container">
                            <h3 class="bbb_viewed_title">
                                <div class="title" >
                                    <h4>Medical Examination Books</h4>
                                </div>
                            </h3>
                            <p style="float: right; margin-top: -60px; margin-right: 70px;"><a href="{{url('catalog/category/loksewa-examination')}}"><button class="btn btn-primary btn-round-sm btn-sm">View All</button></a></p>

                        </div>
                        <div class="bbb_viewed_slider_container">
                            <div class="owl-carousel owl-theme bbb_viewed_slider">
                                @foreach($loksewa as $loksewa)
                                    @if($loksewa->status=='active')
                                    <div class="owl-item">
                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center" style="border-radius: 20px;">
                                            <div class="bbb_viewed_image"><img src="{{$loksewa->getImage()}}" alt=""></div>
                                            <div class="bbb_viewed_content text-center">
                                                <div class="bbb_viewed_price">{{$loksewa->price}}</div>
                                                <p style="text-align: center; margin-top: 10px !important;"><a href="{{url('add/to/cart/'.$loksewa->id)}}"><button class="btn btn-primary btn-round-sm btn-sm">Add to Cart</button></a></p>
                                                <!-- <div class="bbb_viewed_name"><a href="#">Alkatel Phone</a></div> -->
                                            </div>
                                            <ul class="item_marks">
                                                <li class="item_mark item_discount">{{$lowsewa->discount}}</li>
                                                <li class="item_mark item_new">new</li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bbb_viewed">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="bbb_main_container">
                        <div class="bbb_viewed_title_container">
                            <h3 class="bbb_viewed_title">
                                <div class="title" >
                                    <h4>Testimonials</h4>
                                </div>
                            </h3>
                        </div>
                        <div class="gtco-testimonials">
                            <div class="owl-carousel owl-carousel1 owl-theme">
                                @foreach($testimonial as $testimonial)
                                <div>
                                    <div class="card text-center"><img class="card-img-top" src="{{$testimonial->getImage()}}" alt="">
                                        <div class="card-body">
                                            <h5>{{$testimonial->title}} <br />
                                                <span> {{$testimonial->excerpt}} </span></h5>
                                            <p class="card-text">“ {{$testimonial->description}}” </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="bbb_viewed">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="bbb_main_container">
                        <div class="bbb_viewed_title_container">
                            <h3 class="bbb_viewed_title">
                                <div class="title" >
                                    <h4> Books Available from </h4>
                                </div>
                            </h3>

                        </div>
                        <div class="bbb_viewed_slider_container">
                            <div class="owl-carousel owl-theme bbb_viewed_slider">
                                <div class="owl-item">
                                    <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image"><img src="https://media.thuprai.com/publishers/MK.png" alt="MK Publisher"></div>

                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image"><img src="https://asmitapublication.com/wp-content/uploads/2020/08/asmita.png" alt="Asmita Publication"></div>

                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image"><img src="data:image/jpeg;base64,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" alt=""></div>

                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image"><img src="https://www.fewabazar.com/images/thumbs/001/0013716_samiksha-publication_420.png" alt=""></div>

                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image"><img src="https://bpazes-images.s3.ap-south-1.amazonaws.com/bpage-1150/cropped/x2/lg/img_NFCLwKsZPr.png" alt=""></div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924241/8fbb415a2ab2a4de55bb0c8da73c4172--ps.jpg" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
@push('scripts')
    <script>
        {{--$(document).ready(function(){--}}

        {{--    fetch_book_data();--}}

        {{--    function fetch_book_data(query = '')--}}
        {{--    {--}}
        {{--        $.ajax({--}}
        {{--            url:"{{ route('live_search.action') }}",--}}
        {{--            method:'GET',--}}
        {{--            data:{query:query},--}}
        {{--            dataType:'json',--}}
        {{--            success:function(data)--}}
        {{--            {--}}
        {{--                $('tbody').html(data.table_data);--}}
        {{--                $('#total_records').text(data.total_data);--}}
        {{--            }--}}
        {{--        })--}}
        {{--    }--}}

        {{--    $(document).on('keyup', '#search', function(){--}}
        {{--        var query = $(this).val();--}}
        {{--        fetch_customer_data(query);--}}
        {{--    });--}}
        {{--});--}}
    </script>
@endpush

