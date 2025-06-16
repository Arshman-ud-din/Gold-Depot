@extends('layout.admin.app')

@section('content')
    <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">All Catrgories</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Categories</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12"> <!-- full width -->
                        <div class="card table-card mb-4">
                            <div class="card-header">
                                <h3 class="card-title"> All Categories</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered custom-dashboard-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category Name</th>
                                            <th>Category Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr class="align-middle">
                                                <td>{{ $category->id }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td><img src="{{ asset('images/' . $category->image) }}"
                                                        style="width: 100px; height: auto;" alt=""></td>
                                                <td> <a href="{{ route('admincategory.edit', $category->id) }}"
                                                        type="button" class="btn btn-success">Edit</a>
                                                    <a href="{{ route('admincategory.delete', $category->id) }}"
                                                        type="button" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <script>
                                const notyf = new Notyf();

                                @if (session()->has('addcategorysuccess'))
                                    notyf.success("{{ session('addcategorysuccess') }}");
                                @endif

                                @if (session()->has('updatesuccess'))
                                    notyf.success("{{ session('updatesuccess') }}");
                                @endif

                                @if (session()->has('daletesuccess'))
                                    notyf.success("{{ session('daletesuccess') }}");
                                @endif

                                // @if (session()->has('error'))
                                //     notyf.error("{{ session('error') }}");
                                // @endif
                            </script>
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-end">
                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
