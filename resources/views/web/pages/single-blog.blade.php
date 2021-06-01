@extends('web.layouts.app')
@section('content')
    <style>

    </style>
    <div class="section-heading">
        <div class="heading text-center text-uppercase"><h1>OUR BLOG</h1></div>
    </div>
    <div class="blog">
          <div class="titles">REVIEW OF THE BOOK</div>
          <div class="book-details">
             <div class="book-content">
                  <h3>{{$product->name}}</h3>
                 <p style="font-size: 16px; font-weight: 600;">Book Author : {{$product->author}}</p>
                 <p style="font-size: 16px; font-style: italic">{!!html_entity_decode($product->description)!!}</p>
                 <a href=""> <button type="button" class="btn btn-primary btn-round-sm btn-sm text-center " >Buy Now</button></a>
             </div>
              <div class="book-image">
                  <img src="{{$product->getImage()}}" width="300">
              </div>
          </div>
          <div class="blog-details">
                <div class="blog-content text-justify">
                    {{$blog->excerpt}}
                    {!!html_entity_decode($blog->content)!!}
                 </div>

<div class="titles mt-5">Book Reviewed By</div>
<div class="blogger-detail">
    <img src="{{$blog->getBloggerImage()}}" alt="Avatar" style="width:200px; height: 200px; margin-top: 10px;">
    <h3>{{$blog->name}}</h3>
</div>
</div>
</div>
@endsection
