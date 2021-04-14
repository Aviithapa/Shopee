@extends('web.layouts.app')
@section('content')

    <div class="container-fluid aboutbanner">
        <img src="{{$contactBanner->getImage()}}" alt="{{$contactBanner->title}}">
    </div>

    <div class="container-fluid about">
        <h1 style="font-size: 50px;text-transform: uppercase;">Contact us</h1>
        <div class="container">
            <p style="text-align: center; font-weight: 600;">Email us with any question or inquiries or call us at +977-9845769203/ 9848788289. We would love to
                answer your questions and set up a meeting with you</p>

            <form  method="post" action="{{url('contact')}}">
                {{csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Contact Name *" value="" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Contact Email *" value="" required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="number" name="phoneNumber" class="form-control" placeholder="Contact Number  *" value="" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="address" class="form-control" placeholder="Contact Address *" value="" required  />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea  name="message" class="form-control Message" placeholder="Write your Message *" style="width: 100%; height: 200px; padding: 20px" required ></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="text-align: center; font-size: 20px !important;">
                            <button class="btn btn-primary btn-round-sm btn-sm"  style="    font-size: 20px;
                            width: 150px; border-radius: 10px  !important;">Send</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="section">
        <div class="container-fluid mt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.0969981388034!2d85.33459971506154!3d27.68339678280192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb192da16b315b%3A0x61a9eda2120333e3!2sHouse%20of%20Books%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1618300809883!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

@endsection
