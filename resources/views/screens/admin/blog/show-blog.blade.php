@extends('layout.admin.app')

@section('content')
    <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">All Blogs</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Blogs</li>
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
                                <h3 class="card-title">All Blogs</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered custom-dashboard-table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blog as $blogs)
                                            <tr class="align-middle">
                                                <td>{{ $blogs->id }}</td>
                                                <td>{{ $blogs->title }}</td>
                                                <td>
                                                    <img src="{{ asset('images/blog/' . $blogs->img) }}" alt=""
                                                        style="width: 100px; height: auto;">
                                                </td>
                                                <td> {{ $blogs->description }}</td>
                                                <td> <a href="{{ route('adminblog.edit', $blogs->id) }}" type="button"
                                                        class="btn btn-success">Edit</a>
                                                    <a href="{{ route('adminblog.delete', $blogs->id) }}" type="button"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                            <script>
                                const notyf = new Notyf();

                                @if (session()->has('blogaddsuccess'))
                                    notyf.success("{{ session('blogaddsuccess') }}");
                                @endif

                                @if (session()->has('blogupdate'))
                                    notyf.success("{{ session('blogupdate') }}");
                                @endif

                                @if (session()->has('blodelete'))
                                    notyf.success("{{ session('blodelete') }}");
                                @endif

                                @if (session()->has('error'))
                                    notyf.error("{{ session('error') }}");
                                @endif
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
