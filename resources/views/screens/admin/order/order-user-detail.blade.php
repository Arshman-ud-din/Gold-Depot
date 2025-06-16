@extends('layout.admin.app')

@section('content')
    <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Order-User-Detail Tables</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order-User-Detail Tables</li>
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
                                <h3 class="card-title">Order-User-Detail Table</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered custom-dashboard-table">
                                    <thead>
                                        <tr>
                                            <th>Variant Name</th>
                                            <th>Product Name</th>
                                            <th> Product Price </th>
                                            <th> Product Quantity</th>
                                            <th>Total</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order->orderproducts as $product)
                                            @php
                                                $variants = $orderproductVariants->where(
                                                    'order_product_id',
                                                    $product->id,
                                                );
                                                $variantNames = $variants->pluck('name')->implode('  weight  ,   size  ',', ');
                                            @endphp
                                            <tr class="align-middle">
                                                <td>{{ $variantNames }}</td>
                                                <td>{{ $product->product_name }}</td>
                                                <td>{{ $product->product_price }}</td>
                                                <td>{{ $product->product_quantity }}</td>
                                                <td>{{ $product->product_price * $product->product_quantity }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>



                                </table>
                            </div>
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
