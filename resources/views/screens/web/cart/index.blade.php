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
                                @foreach ($items as $k => $item)
                                    <tr class="tr-hover cart-item">
                                        <td class="pr-title d-flex mt-2">
                                            <span>
                                                <img class="img-fluid" src="{{ asset('images/featured/' . $item['featured_img']) }}"
                                                    alt="" width="60">
                                            </span>
                                            <span class="ms-2"><strong>{{ $item['title'] }}</strong></span>
                                        </td>

                                        <td class="pr-title">
                                            <strong>Rs. {{ $item['price'] }}</strong>
                                        </td>

                                        <td class="pr-title counter d-flex">
                                            <button class="count-btn decrement cart-update-button">-</button>
                                            <input type="number" class="count"
                                                value="{{ $item['item_quantity'] ?? $item['quantity'] }}" data-id="{{ $k }}">
                                            <button class="count-btn increment cart-update-button">+</button>
                                        </td>

                                        <td class="pr-title">
                                            @if (isset($item['group_variants']) && is_array($item['group_variants']))
                                                @foreach ($item['group_variants'] as $attrName => $variants)
                                                    <select class="form-control mb-2 variant-dropdown" name="variants"
                                                        data-previousitemid="{{ $k }}" data-attr="{{ $attrName }}">
                                                        @foreach ($variants as $variant)
                                                            <option value="{{ $variant['id'] }}" data-price="{{ $variant['price'] }}"
                                                                data-variant="{{ $variant['name'] }}">
                                                                {{ $variant['name'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                @endforeach
                                            @endif
                                        </td>

                                        <td class="item-total">Rs. {{ $item['item_total'] }}</td>

                                        <td class="pr-title">
                                            <button class="delete-btn" data-id="{{ $k }}" id="cart-delete-button" type="button">
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
        $(document).ready(function () {
            $('.counter .increment').click(function () {
                var countElement = $(this).siblings('.count');
                var count = Number(countElement.val());
                count++;
                countElement.val(count);
            });

            $('.counter .decrement').click(function () {
                var countElement = $(this).siblings('.count');
                var count = Number(countElement.val());
                if (count > 0) {
                    count--;
                    countElement.val(count);
                }
            });
        });

        $(document).ready(function () {
            $(document).on('click', '#cart-delete-button', function (e) {
                e.preventDefault();

                let ele = $(this);
                let id = ele.data('id');

                $.ajax({
                    type: 'GET',
                    url: "{{ route('cart.delete') }}",
                    data: {
                        productId: id
                    },
                    success: function (response) {
                        if (response.success === true) {
                            Swal.fire({
                                title: 'Deleted!',
                                text: response.message,
                                icon: 'success',
                                timer: 1500,
                                showConfirmButton: false
                            });

                            // ✅ Remove row from UI
                            ele.closest("tr").remove();

                            // ✅ Update totals in header
                            $('#cart-total').text('Rs. ' + response.cart.total);
                            $('#cart-count').text(response.cart.count);
                        } else {
                            Swal.fire('Error', response.message, 'error');
                        }
                    },
                    error: function () {
                        Swal.fire('Error', 'Something went wrong while deleting item.', 'error');
                    }
                });
            });
        });




        $(document).ready(function () {
            let options = [];

            // Handle variant dropdown change
            $(document).on("change", ".variant-dropdown", function () {
                let selectedOption = $(this).find(":selected");
                let variantName = selectedOption.data("variant");
                let attrName = $(this).data("attr");
                let variantprice = selectedOption.data("price");
                let previousitemid = $(this).data("previousitemid");
                // console.log(variantprice);

                const obj = {
                    attrName: attrName,
                    previousitemid: previousitemid,
                    variantName: variantName,
                    variantprice: variantprice,
                    variantID: $(this).val()
                };

                const existingIndex = options.findIndex(item => item.attrName === obj.attrName);
                if (existingIndex !== -1) {
                    options[existingIndex] = obj;
                } else {
                    options.push(obj);
                }

                let $row = $(this).closest('.cart-item');
                let quantity = parseInt($row.find('.count').val());

                updateCart(previousitemid, quantity, options, $row);
            });

            // Handle quantity update
            $(document).on('click', '.cart-update-button', function (e) {
                e.preventDefault();

                let $row = $(this).closest('.cart-item');
                let $input = $row.find('.count');
                let quantity = parseInt($input.val());
                let productId = $input.data('id');

                updateCart(productId, quantity, options, $row);
            });

            // Reusable function to call cart.update
            function updateCart(previousitemid, quantity, variantOptions, $row) {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('cart.update') }}",
                    data: {
                        _token: '{{ csrf_token() }}',
                        previousitemid: previousitemid,
                        quantity: quantity,
                        variant: variantOptions
                    },
                    success: function (response) {
                        if (response.success === true) {
                            const updatedCart = response.cart;
                            const itemKey = Object.keys(updatedCart.items).find(key => key.includes(previousitemid));
                            const updatedItem = updatedCart.items[itemKey];

                            $row.find('.item-total').text('Rs. ' + updatedItem.item_total);
                            $('#cart-total').text('Rs. ' + updatedCart.total);
                            $('#cart-count').text(updatedCart.count);
                        }
                    }
                });
            }
        });


    </script>
@endpush