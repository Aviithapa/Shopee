@extends('admin.layout.app')

@section('content')
    @include('admin.partials.common.page-title', ['page_title' => 'Add New Faculty'])
    <div>
        <div class="row-fluid">
            <div class="span12">
                @include('admin.web-site.faculty.form')
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
