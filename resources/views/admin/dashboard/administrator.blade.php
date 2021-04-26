
@extends('admin.layout.app')

@section('content')

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="tiles white">
                    <div class="tiles-body">
                        <div class="tiles-title"> <strong>New Book Requests</strong></div>
                        <br>
                        <table class="table table-hover table-condensed" id="basic-data-table">
                            <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($book_created as $key => $book_created)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>
                                        {{$book_created->name}}
                                    </td>
                                    <td>
                                        {{$book_created->category}}
                                    </td>
                                    <td>
                                        {{$book_created->status}}
                                    </td>
                                    <td>
                                        {{ Form::model($book_created, ['url' => route('dashboard.product.approve', $book_created->id), 'method' => 'PUT','files' => true]) }}
                                        <input type="hidden" value="active" name="status" id="status">
                                        <button type="submit" class="btn btn-success btn-xs btn-mini">
                                            <i class="fa fa-check"></i>Approve
                                        </button>
                                        {{ Form::close() }}
                                        <br>
                                        @include('admin.partials.common.delete-modal', ['data' => $book_created, 'name' => 'dashboard.product', 'hard_delete' => true])
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
