@extends('admin.layout.app')

@section('content')
    @include('admin.partials.common.page-title', ['page_title' => 'Product View'])
    <div class="container" style="margin-top: 30px">
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-body ">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <img src="{{$product->getImage()}}" height="250" width="250">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                {{ Form::model($product, ['url' => route('dashboard.product.approve', $product->id), 'method' => 'PUT','files' => true]) }}
                                <input type="hidden" value="active" name="status" id="status">
                                <button type="submit" class="btn btn-success btn-lg btn-mini">
                                    <i class="fa fa-check"></i>Approve
                                </button>
                                {{ Form::close() }}
                                <br>
                                @include('admin.partials.common.delete-modal', ['data' => $product, 'name' => 'dashboard.product', 'hard_delete' => true])
                                <br>
                                <br>
                                <a href="{{ route('dashboard.products.edit', $product->id)}}"><button type="submit" class="btn btn-success btn-lg btn-mini">
                                        <i class="fa fa-eye"></i>Edit
                                    </button></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                         <h1>{{$product->name}}</h1>
                        <h3><span>Category : {{$product->category}}</span></h3>
                        <h3> <span>Sub Category :{{$product->sub_category}}</span></h3>
                        <h3><span>Status : {{$product->status}}</span><br></h3>
                        <h3><span>Nobel Category : {{$product->nobel_category}}</span><br></h3>
                        <h3><span>University : {{$product->university}}</span><br></h3>
                        <h3> <span>Publication : {{$product->publication}}</span><br></h3>
                        <h3> <span>Semester : {{$product->semester}}</span><br></h3>
                        <h3>  <span>Edition : {{$product->edition}}</span><br></h3>
                        <h3>  <span>Price : {{$product->price}}</span><br></h3>
                        <h3>  <span>Quantity : {{$product->quantity}}</span><br></h3>
                        <h3>   <span>Description : </span><br></h3>
                        <span>{!! html_entity_decode($product->description) !!}</span>
                        <h3>   <span>Short Description :</span><br></h3>
                         <span>{!! html_entity_decode($product->excerpt) !!}</span>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <h1>User Details</h1>
                            <h3><span>{{$user->name}}</span><br></h3>
                             <h3><span>{{$user->phone_number}}</span><br></h3>
                             <h3> <span>{{$user->email}}</span><br></h3>
                             <h3><span>{{$user->address}}</span><br></h3>
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

@endpush
