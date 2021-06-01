@extends('web.layouts.app')
@section('content')

            <div class="fh5co-parallax" style="background-image: url({{$sell_book_banner->getImage()}});  box-shadow:inset 0 0 0 2000px rgba(0, 0, 0, 0.4);" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-sm-offset-0 col-xs-12  text-center fh5co-table">
                            <div class="fh5co-intro fh5co-table-cell animate-box">
                                <h1 class="text-center text-uppercase" style="color: white !important;">Start Selling your used books <br>with us in simple steps</h1>
                                <h3 class="text-uppercase" style="color: white !important; margin-top: -10px; line-height: 1.2;">Be a part of sustainable economy of Nepal <br> with house of books</h3>
                                <a target="_blank" href="{{route('dashboard.products.index')}}"><button type="button" class="start-selling btn  btn-primary btn-round-sm btn-sm float-right">Start Selling</button></a>
                                <p style="margin-top: 10px;">Already a seller? <a href="{{route('dashboard.products.index')}}" style="color: orange">Login Now</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" style="width: 100%; margin-top: 50px !important;">
                 <img src="{{$learn_more_banner->getImage()}}" alt="" class="learn_more_image" style="width: 100%;">
                 <img src="{{$learn_more_btn->getImage()}}" alt="" class="learn_more_btn">
            </div>

            <div class="working-step mt-5 mb-5" style="margin-top: 50px !important;">
                <div class="mt-5" >
                    <h3 class="text-uppercase text-center" style="color: #25a521 !important; font-size: 30px !important; line-height: 0.5">Become a successful seller in four step</h3>
                    <p class="text-center" style="font-weight: 600 !important; font-size: 23px !important;">We are registering seller from Kathmandu valley, Lalitpur, Bhaktapur at the moment </p>
                </div>
                <div class="container" style="margin-top: 45px !important;">
                    <img src="{{$work_banner->getImage()}}" alt="" height="300">
                </div>
            </div>
    @endsection
