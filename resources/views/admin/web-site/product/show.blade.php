@extends('admin.layout.app')

@section('content')
    @include('admin.partials.common.page-title', ['page_title' => 'Product View'])
    <div class="container" style="margin-top: 30px">
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-body ">
                         <img src="{{$product->getImage()}}" height="250" width="250">
                         <h3>{{$product->name}}</h3>
                        <span>{{$product->category}}</span><br>
                        <span>{{$product->sub_category}}</span><br>
                        <span>{{$product->status}}</span><br>
                        <span>{{$product->nobel_category}}</span><br>
                        <span>{{$product->university}}</span><br>
                        <span>{{$product->publication}}</span><br>
                        <span>{{$product->semester}}</span><br>
                        <span>{{$product->edition}}</span><br>
                        <span>{{$product->price}}</span><br>
                        <span>{{$product->quantity}}</span><br>
                        <span>{!! html_entity_decode($product->description) !!}</span><br>
                        <span>{!! html_entity_decode($product->excerpt) !!}</span><br>

                        <h3>User Details</h3>
                        <span>{{$user->name}}</span><br>
                        <span>{{$user->phone_number}}</span><br>
                        <span>{{$user->email}}</span><br>
                        <span>{{$user->address}}</span><br>
                        {{ Form::model($product, ['url' => route('dashboard.product.approve', $product->id), 'method' => 'PUT','files' => true]) }}
                        <input type="hidden" value="active" name="status" id="status">
                        <button type="submit" class="btn btn-success btn-xs btn-mini">
                            <i class="fa fa-check"></i>Approve
                        </button>
                        {{ Form::close() }}
                        @include('admin.partials.common.delete-modal', ['data' => $product, 'name' => 'dashboard.product', 'hard_delete' => true])

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
