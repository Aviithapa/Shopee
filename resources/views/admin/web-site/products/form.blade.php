@if(isset($model))
    {{ Form::model($model, ['url' => route('dashboard.products.update', $model->id), 'method' => 'PUT','files' => true]) }}
@else
    {{ Form::open(['url' => route('dashboard.products.store'), 'method' => 'post', 'files' => true]) }}
@endif
<link href="{{asset('assets/plugins/jquery-datatable/css/jquery.dataTables.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/plugins/datatables-responsive/css/datatables.responsive.css')}}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{asset('webarch/css/themes/webarch.coporate.css')}}" rel="stylesheet" type="text/css" />

<div class="grid simple ">

    <div class="grid-body ">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('name', 'Book Name:', ['class' => 'form-label']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('category', 'Category:', ['class' => 'form-label']) !!}
                    {!! Form::select('category',$category->pluck('name','name'),null, ['class' => 'form-control']) !!}
                    {!! $errors->first('category', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('excerpt', 'Publication:', ['class' => 'form-label']) !!}
                    {!! Form::text('excerpt', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('excerpt', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('quantity', 'Quantity:', ['class' => 'form-label']) !!}
                    {!! Form::number('quantity',null, ['class' => 'form-control']) !!}
                    {!! $errors->first('quantity', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('price', 'Price:', ['class' => 'form-label']) !!}
                    {!! Form::number('price',null, ['class' => 'form-control']) !!}
                    {!! $errors->first('price', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('discount', 'Discount:', ['class' => 'form-label']) !!}
                    {!! Form::number('discount',null, ['class' => 'form-control']) !!}
                    {!! $errors->first('price', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('content', 'Content:', ['class' => 'form-label']) !!}
                    {!! Form::textarea('content',null, ['class' => 'form-control ckeditor','id'=>'ckeditor']) !!}
                    {!! $errors->first('content', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="grid simple ">
        <div class="grid-title">
            <h4>Image</h4>
            <div class="tools">
                <a href="javascript:;" class="collapse"></a>
            </div>
        </div>

        <div class="grid-body ">
            <div class="row">


                <div class="col-md-12 col-lg-12">
                    @if(isset($model))
                        <img src="{{url(isset($model)?$model->getImage():imageNotFound())}}" height="250" width="250"
                             id="product_image_img">

                    @else
                        <img src="{{isset($model)?$model->getImage():imageNotFound()}}" height="250" width="250"
                             id="product_image_img">
                    @endif
                </div>

                <div class="form-group col-md-12 col-lg-12">
                    {!! Form::label('slider', 'Image:') !!}
                    <small>Size: 1600*622 px</small>
                    <input type="file" id="product_image" name="product_image_image"
                           onclick="anyFileUploader('product_image')">
                    <small id="slider_help_text" class="help-block"></small>
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0"
                         aria-valuemax="100"
                         aria-valuenow="0">
                        <div id="product_image_progress" class="progress-bar progress-bar-success"
                             style="width: 0%">
                        </div>
                    </div>
                    <input type="hidden" id="product_image_path" name="product_image" class="form-control"
                           value="{{isset($model)?$model->image:''}}"/>
                    {!! $errors->first('image', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>


        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary"/>
            <a href="{{URL::previous()}}" class="btn btn-danger">Cancel</a>
        </div>
    </div>
</div>


{{ Form::close() }}


@push('scripts')
    @include('admin.partials.common.file-upload');
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'ckeditor', {
//        filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
//        filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
        } );
    </script>
@endpush
