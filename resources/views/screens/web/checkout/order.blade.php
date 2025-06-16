@extends('layout.web.app')

@section('content')
    <div class="container">
        <br><br><br>
        <center>
            <h1>My Orders</h1>
        </center>
        <br><br>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Payment Status</th>
                    <th>Product Total</th>
                    <th>Created At</th>
                    <th>Invoice</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    @foreach ($order->orderproducts as $product)
                        <tr>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $order->status }}</td>
                            <td>{{ $order->total }}</td>
                            <td>{{ $order->created_at->format('d-m-Y') }}</td>
                            <td>
                                <a href="{{ route('checkout.invoice', $order->id) }}" class="btn btn-warning btn-sm">View
                                    Invoice</a>
                            </td>
                        </tr>
                    @endforeach
                @endforeach



            </tbody>
        </table>
    </div>
    <br><br><br>
@endsection
