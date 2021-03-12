
    @extends('admin.layout.admin')

@section('content')
    <div class="container" style="height: max-content">
        <div class="row-fluid">
            <div class="span12">
                @include('admin.'.$commonView.'.form')
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
