@extends('web.layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Category List
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover" id="product_table">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Category Name</th>
                                <th>Added By</th>
                                <th>Created Time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            @forelse ($categories as $category)--}}
{{--                                <tr>--}}
{{--                                    <td>{{ $loop->index + 1 }}</td>--}}
{{--                                    <td>{{ $category->category_name }}</td>--}}
{{--                                    <td>{{ App\User::find($category->added_by)->name }}</td>--}}
{{--                                    <td>{{ $category->created_at->format('d-M-y H:i:s') }}</td>--}}
{{--                                    <td>-</td>--}}
{{--                                </tr>--}}
{{--                            @empty--}}
{{--                                <tr>--}}
{{--                                    <td colspan="6" class="text-center text-danger">No Data Available</td>--}}
{{--                                </tr>--}}
{{--                            @endforelse--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Add Category
                    </div>
{{--                    <div class="card-body">--}}
{{--                        --}}{{-- insert hobar pore success alert ar  jonno --}}
{{--                        @if (session('status'))--}}
{{--                            <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
{{--                                {{ session('status') }}--}}
{{--                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                                    <span aria-hidden="true">&times;</span>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                        <form method="post" action="{{ route('category.store') }}">--}}
                            @csrf
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" class="form-control" placeholder="Enter category name" name="category_name">
                            </div>

                            <button type="submit" class="btn btn-success">Add Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer_scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#product_table').DataTable({
                "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
            });
            $('.deleted_btn').click(function(){
                var goto_link = $(this).val();
                Swal.fire({
                    title: 'Are you sure?',
                    // text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        window.location.href=goto_link;
                    }
                })
            })
        });
    </script>
@endsection
