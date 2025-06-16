@extends('layout.admin.app')

@section('content')
    <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">All Carousel Images</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Carousel Images</li>
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
                                <h3 class="card-title">All Carousel Images</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered custom-dashboard-table">
                                    <thead>
                                        <tr>
                                            <th>Images</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($carouselimages as $carouselimage)
                                            <tr class="align-middle">

                                                <td>
                                                    <img src="{{ asset('images/carousel/' . $carouselimage->images) }}"
                                                        alt="" style="width: 100px; height: auto;">
                                                </td>
                                                <td> <a type="button"
                                                        href="{{ route('admincarousel.edit', $carouselimage->id) }}"
                                                        class="btn btn-success">Edit</a>
                                                    <a type="button"
                                                        href="{{ route('admincarousel.delete', $carouselimage->id) }}"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                            <script>
                                const notyf = new Notyf();

                                @if (session()->has('createcarousel'))
                                    notyf.success("{{ session('blogaddsuccess') }}");
                                @endif

                                @if (session()->has('updatecarousel'))
                                    notyf.success("{{ session('blogupdate') }}");
                                @endif

                                @if (session()->has('deletecarousel'))
                                    notyf.success("{{ session('blodelete') }}");
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
