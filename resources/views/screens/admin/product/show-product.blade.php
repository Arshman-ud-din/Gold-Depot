@extends('layout.admin.app')

@section('content')
    <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Total Products</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Total Products</li>
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
                                <h3 class="card-title">All Products </h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered custom-dashboard-table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>title</th>
                                            <th>Featured Image</th>
                                            <th>Categories</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Varient</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($products as $product)
                                            <tr class="align-middle">
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->title }}</td>
                                                <td><img src="{{ asset('images/featured/' . $product->featured_img) }}"
                                                        style="width: 100px; height: auto;" alt=""> </td>
                                                <td> {{ $product->category->name }}</td>
                                                <td> {{ $product->quantity }}</td>
                                                <td> {{ $product->price }}</td>
                                                <td><a href="{{route('adminproduct.productdetail', $product->id)}}"> View Varient </a></td>
                                                <td> <a href="{{ route('adminproduct.edit', $product->id) }}" type="button"
                                                        class="btn btn-success">Edit</a>
                                                    <a href="{{ route('adminproduct.delete', $product->id) }}"
                                                        type="button" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <script>
                                const notyf = new Notyf();

                                @if (session()->has('productsuccess'))
                                    notyf.success("{{ session('productsuccess') }}");
                                @endif

                                @if (session()->has('deleteproduct'))
                                    notyf.success("{{ session('deleteproduct') }}");
                                @endif

                                @if (session()->has('updateproduct'))
                                    notyf.success("{{ session('updateproduct') }}");
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
