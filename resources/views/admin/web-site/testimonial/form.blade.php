@if(isset($model))
    {{ Form::model($model, ['url' => route('dashboard.testimonials.update', $model->id), 'method' => 'PUT','files' => true]) }}
@else
    {{ Form::open(['url' => route('dashboard.testimonials.store'), 'method' => 'post', 'files' => true]) }}
@endif

<div class="grid simple ">
    <div class="grid-title">
        <h4>Testimonial Info</h4>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
        </div>
    </div>
    <div class="grid-body ">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('title', 'Title:', ['class' => 'form-label']) !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('title', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('slug', 'Slug:', ['class' => 'form-label']) !!}
                    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('slug', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('content', 'Content:', ['class' => 'form-label']) !!}
                    {!! Form::textarea('content',null, ['class' => 'form-control text-editor','id'=>'text-editor']) !!}
                    {!! $errors->first('content', '<div class="text-danger">:message</div>') !!}
                </div>

            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('excerpt', 'Excerpt:', ['class' => 'form-label']) !!}
                    {!! Form::text('excerpt', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('excerpt', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('type', 'Type:', ['class' => 'form-label']) !!}
                    {!! Form::select('type',array('testimonial' => 'Testimonial') ,null, ['class' => 'form-control']) !!}
                    {!! $errors->first('type', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

        </div>

    </div>
</div>

<div class="grid simple ">
    <div class="grid-title">
        <h4>Testimonial Image</h4>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
        </div>
    </div>

    <div class="grid-body ">
        <div class="row">


            <div class="col-md-12 col-lg-12">

                @if(isset($model))
                    <img src="{{url(isset($model)?$model->getTestimonialImage():imageNotFound())}}" height="250"
                         id="testimonial_pic_img">

                @else
                    <img src="{{isset($model)?$model->getTestimonialImage():imageNotFound()}}" height="250"
                         id="testimonial_pic_img">
                @endif
            </div>

            <div class="form-group col-md-12 col-lg-12">
                {!! Form::label('slider', 'Image:') !!}
                <small>Size: 1600*622 px</small>
                <input type="file" id="testimonial_pic" name="testimonial_pic_image"
                       onclick="anyFileUploader('testimonial_pic')">
                <small id="slider_help_text" class="help-block"></small>
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0"
                     aria-valuemax="100"
                     aria-valuenow="0">
                    <div id="testimonial_pic_progress" class="progress-bar progress-bar-success"
                         style="width: 0%">
                    </div>
                </div>
                <input type="hidden" id="testimonial_pic_path" name="testimonial_pic" class="form-control"
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
@endpush
