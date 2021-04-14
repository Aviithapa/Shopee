@extends('admin.layout.app')

@section('content')
    <div>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
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
                                <th>Email</th>
                                <th>Address</th>
                                <th>phoneNumber</th>
                                <th>Message</th>
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
            ajax: '{{ route($commonRoute.'.index') }}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name '},
                {data: 'email', name: 'email'},
                {data: 'address', name: 'address'},
                {data: 'phoneNumber', name: 'phoneNumber'},
                {data: 'message', name: 'message'},
                {className: 'td-actions', data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    </script>
@endpush
