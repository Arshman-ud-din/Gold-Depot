@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Shopping Cart</h1>

    @if(isset($items) && count($items) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>
                            <img src="{{ $item['featured_img'] }}" alt="{{ $item['title'] }}" width="50">
                            {{ $item['title'] }}
                        </td>
                        <td>${{ number_format($item['price'], 2) }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>${{ number_format($item['item_total'], 2) }}</td>
                        <td>
                            <button class="btn btn-danger" onclick="deleteItem('{{ $item['id'] }}')">Remove</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h3>Total: ${{ number_format($cart['total'], 2) }}</h3>
        <h3>Items Count: {{ $cart['count'] }}</h3>
    @else
        <p>Your cart is empty.</p>
    @endif
</div>

<script>
    function deleteItem(productId) {
        fetch('/cart/delete', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ productId: productId })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert(data.message);
            }
        });
    }
</script>
@endsection