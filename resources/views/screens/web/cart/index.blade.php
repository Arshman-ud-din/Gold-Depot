@extends('layout.web.app')


@section('content')
    <section class="cart-section sec-pd fix-pading">
        <div class="container">
            <div class="row">
                <div class="col-12 m-0">
                    <div class="sub-sec">
                        <h1 class="cart-hd">Shopping Cart</h1>
                        <div class="return-area">
                            <p>
                                Returning customer?
                            </p>
                            <a href="{{ route('login') }}">Click here to login</a>
                        </div>
                        {{-- @dd(session('cart')) --}}
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="parent-table-area">
                        <table class="cart-table mt-3">
                            <tr>
                                <th class="">
                                    ITEMS
                                </th>
                                <th class="">
                                    PRICE
                                </th>
                                <th class="qty-th">
                                    QUANTITY
                                </th>
                                <th class="qty-th">
                                    Variants
                                </th>
                                <th class="">
                                    TOTAL
                                </th>
                                <th class="">

                                </th>
                            </tr>

                            {{-- @dd(session('cart')); --}}

                            {{-- @php
                                $product_detail = session('cart');

                                dd($product_detail);
                            @endphp --}}


                            @if (isset($items))
                                @foreach ($items as $item)
                                    <tr class="tr-hover">
                                        <td class="pr-title d-flex mt-2">
                                            <span><img class="img-fluid"
                                                    src="{{ asset('images/featured/' . $item['featured_img']) }}"
                                                    alt="" width="60"></span>
                                            <span class="ms-2"><strong>{{ $item['title'] }}</strong></span>
                                        </td>
                                        <td class="pr-title"><span><strong>Rs. {{ $item['price'] }}</strong></span></td>
                                        <td class="pr-title counter d-flex cart-item">
                                            <button class="count-btn decrement cart-update-button">-</button>
                                            <input type="number" class="count" value="{{ $item['quantity'] }}"
                                                data-id="{{ $item['id'] }}">
                                            <button class="count-btn increment cart-update-button">+</button>
                                        </td>
                                        <td class="item-total">
                                            @if (is_array($item['variant']))
                                                <select class="form-control" name="option">
                                                    <option disabled selected> select any option </option>
                                                    @foreach ($item['variant'] as $productvariants)
                                                        <option selected disabled>
                                                            {{ $productvariants['variantName'] }}</option>
                                                    @endforeach
                                                    {{-- @foreach ($variants as $variant)
                                                        <option>
                                                            {{ $variant->name }}</option>
                                                    @endforeach --}}
                                                </select>
                                            @endif
                                        </td>
                                        <td class="item-total">Rs. {{ $item['item_total'] }}</td>

                                        <td class="pr-title">
                                            <button class="delete-btn" data-id="{{ $item['id'] }}" id="cart-delete-button"
                                                type="button">
                                                <i class="fa-solid fa-xmark"></i>
                                            </button>

                                        </td>

                                    </tr>
                                @endforeach
                            @endif

                        </table>
                    </div>
                </div>
                <div class="col-12 offset-lg-8 col-lg-4">
                    <div class="total total-area">
                        <div class="sub-total">
                            <div class="row align-items-center ">
                                <div class="col-lg-6 col-md-5 col-6 m-0">
                                    <h4 class="subttl-hd">Total Products</h4>
                                </div>
                                @if (isset($items))
                                    <div class="col-lg-6 col-md-5 col-6 m-0">
                                        <p class="subttl-para" id="cart-count">{{ $productcount }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="sub-total">
                            <div class="row align-items-center ">
                                <div class="col-lg-6 col-md-5 col-6 m-0">
                                    <h4 class="subttl-hd">Total Price</h4>
                                </div>
                                @if (isset($items))
                                    <div class="col-lg-6 col-md-5 col-6 m-0">
                                        <p class="subttl-para" id="cart-total">{{ $cartitemstotal }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="sub-total">
                            <div class="row align-items-center ">
                                <div class="col-lg-6 col-md-5 col-6 m-0">
                                    <h4 class="subttl-hd">SHIPPING</h4>
                                </div>
                                <div class="col-lg-6 col-md-5 col-6 m-0">
                                    <p class="subttl-para">FREE SHIPPING</p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="sub-total">
                            <div class="row align-items-center ">
                                <div class="col-lg-6 col-md-5 col-6 m-0">
                                    <h4 class="subttl-hd">SALES</h4>
                                </div>
                                <div class="col-lg-6 col-md-5 col-6 m-0">
                                    <p class="subttl-para">$23</p>
                                </div>
                            </div>
                        </div>
                        <div class="sub-total">
                            <div class="row align-items-center ">
                                <div class="col-lg-6 col-md-5 col-6 m-0">
                                    <h4 class="subttl-hd">COUPON</h4>
                                </div>
                                <div class="col-lg-6 col-md-5 col-6 m-0">
                                    <p class="subttl-para">ADD</p>
                                </div>
                            </div>
                        </div> --}}
                        <div class="mt-5">
                            <a class="primary-btn" href="{{ route('checkout.create') }}" class="white">Check Out </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('scripts')
    <script>
        $(document).ready(function() {
            $('.counter .increment').click(function() {
                var countElement = $(this).siblings('.count');
                var count = Number(countElement.val());
                count++;
                countElement.val(count);
            });

            $('.counter .decrement').click(function() {
                var countElement = $(this).siblings('.count');
                var count = Number(countElement.val());
                if (count > 0) {
                    count--;
                    countElement.val(count);
                }
            });
        });

        $(document).ready(function() {
            $(document).on('click', '#cart-delete-button', function(e) {
                e.preventDefault();

                var ele = $(this);
                var id = ele.data('id');

                $.ajax({
                    type: 'GET',
                    url: "{{ route('cart.delete') }}",
                    data: {
                        productId: id
                    },
                    success: function(response) {
                        console.log("Delete response:", response);
                        if (response.success == true) {
                            Swal.fire({
                                title: 'Deleted!',
                                text: response.message,
                                icon: 'success',
                                timer: 1500,
                                showConfirmButton: false
                            });

                            ele.closest("tr").remove();

                            const updatedCart = response.cart;

                            $('#cart-total').text('Rs. ' + updatedCart.total);

                            $('#cart-count').text(updatedCart.count);
                        } else {
                            alert(response.message);
                        }
                    },

                });
            });
        });





        $(document).ready(function() {
            $(document).on('click', '.cart-update-button', function(e) {
                e.preventDefault();

                let $row = $(this).closest('.cart-item');
                let $input = $row.find('.count');
                let quantity = parseInt($input.val());
                let productId = $input.data('id');


                $input.val(quantity);

                $.ajax({
                    type: 'POST',
                    url: "{{ route('cart.update') }}",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: productId,
                        quantity: quantity
                    },
                    success: function(response) {
                        if (response.success === true) {
                            const updatedCart = response.cart;
                            const updatedItem = updatedCart.items[productId];

                            $row.find('.item-total').text('Rs. ' + updatedItem.item_total);
                            // $('.item-total').text('Rs. ' + updatedItem.item_total);
                            $('#cart-total').text('Rs. ' + updatedCart.total);
                            $('#cart-count').text(updatedCart.count);

                        }
                    },

                });
            });
        });
    </script>
@endpush
