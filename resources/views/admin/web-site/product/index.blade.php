@extends('web.layouts.app')

@section('content')
    <div class="container" style="margin-top: 30px">
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <a href="{{route($commonRoute.'.create')}}"  class="btn btn-info btn-cons">
                            <i class="fa fa-plus-square"></i> Add New
                        </a>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                        </div>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed" id="data-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Image</th>
                                <th class="disabled-sorting">Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('dashboard.product.index') }}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'category', name: 'category'},
                {data: 'product_image', name: 'product_image'},
//                {data: 'status', name: 'status'},
                {className: 'td-actions', data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    </script>
@endpush
