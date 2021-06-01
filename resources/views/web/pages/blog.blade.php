@extends('web.layouts.app')
@section('content')
    <style>

    </style>

    <div class="container">
        <div class="section-heading">
             <div class="heading text-center text-uppercase"><h1>OUR BLOG</h1></div>
        </div>
        <div class="section-blog-first">
            <div class="titles">REVIEW OF THE BOOK</div>
               <div class="review-image">
                 <img src="{{$product->getImage()}}" alt="House of books">
               </div>
                <div class="review-content">
                    <div class="content">
                        {{ str_limit($first_blog->excerpt,400)}}
                    </div>
                    <div class="author_title">
                        <h5 class="text-left">- {{$first_blog->name}}</h5>
                        <a href="{{url("single-blog/".$first_blog->id)}}"> <button type="button" class="btn btn-primary btn-round-sm btn-sm text-right " >READ MORE</button></a>
                    </div>
                </div>
        </div>
        <div class="section-blog-first mt-5">
            <div class="titles">REVIEW OF THE BOOK</div>
            <div class="review-content">
                <div class="content">
                    {{ str_limit($second_blog->excerpt,400)}}
                </div>
                <div class="author_title">
                   <a href="{{url("single-blog/".$second_blog->id)}}"> <button type="button" class="btn btn-primary btn-round-sm btn-sm text-left " style="margin-left:20px; float: left !important;">READ MORE</button></a>
                    <h5 class="text-right" style="float: right !important;">- {{$second_blog->name}}</h5>

                </div>
            </div>
            <div class="review-image secondblog">
                <img src="{{$second_product->getImage()}}" >
            </div>

        </div>

        <div class="section-blog-first mt-5">
            <div class="titles">REVIEW OF THE BOOK</div>
            <div class="review-image">
                <img src="{{$third_product->getImage()}}" >
            </div>
            <div class="review-content">

                <div class="content">
                    {{ str_limit($third_blog->excerpt,400)}}
                </div>
                <div class="author_title">
                    <h5 class="text-left">- {{$third_blog->name}}</h5>
                    <a href="{{url("single-blog/".$third_blog->id)}}"> <button type="button" class="btn btn-primary btn-round-sm btn-sm text-right " >READ MORE</button></a>
                </div>
            </div>
        </div>

    </div>

    @endsection
