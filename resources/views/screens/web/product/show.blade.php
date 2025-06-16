@extends('layout.web.app')


@section('content')
    <div class="details fix-pading">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-12">
                    <div class="detail-img">
                        <img class="img-fluid" src="{{ asset('images/featured/' . $product->featured_img) }}" alt="">
                    </div>
                    <div class="d-flex mt-3 gap-3">
                        @foreach ($product->galleryimages as $image)
                            <img src="{{ asset('images/gallery/' . $image->images) }}" width="100" />
                        @endforeach
                    </div>

                </div>
                <div class="col-lg-6 col-md-5 col-12">
                    <div class="">
                        <h4 class="inner-financial-hd">{{ $product->title }}</h4>
                        <p class="shipping-para pr"><strong>{{ $product->price }}</strong></p>
                        @foreach ($groupedVariants as $attrName => $variants)
                            <label>{{ $attrName }}</label>
                            <br>
                            <select class="form-control" id="{{ $attrName }}" data-attr="{{ $attrName }}"
                                name="option">
                                <option disabled selected> select any option </option>
                                @foreach ($variants as $variant)
                                    <option value="{{ $variant->id }}" data-variant="{{ $variant->name }}">
                                        {{ $variant->name }}</option>
                                @endforeach
                            </select>
                        @endforeach

                        <div class="para my-3">
                            {!! $product->short_description !!}
                        </div>

                        <div class="d-flex align-items-center add-input-area">
                            <input type="number" id="quantity" value="1" class="form-input-add">

                            <button class="primary-btn" type="submit" href="{{ route('cart.add') }}" id="add-to-cart"
                                data-id="{{ $product->id }}">
                                Add To Cart
                            </button>
                        </div>
                        <p class="para">Category: {{ $product->category->name }}</p>
                    </div>
                </div>
            </div>

            <script></script>
            <div class="row">
                <div class="col-12">
                    <div class="review-area-detail">
                        <ul class="review-detail-list">
                            <li class="active" data-tab="description">Description</li>
                            <li data-tab="revuiews">Reviews</li>
                        </ul>
                    </div>
                </div>

                <div class="col-12">
                    <div class="des-content mb-3" data-content="revuiews">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <center>
                                        <h1>Reviews</h1>
                                    </center>

                                    <div class="container my-4">
                                        <h4 class="mb-4">Product Reviews</h4>

                                        @foreach ($product->reviews as $review)
                                            <div class="card mb-3 shadow-sm">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <h5 class="card-title mb-0">{{ $review->fullname }}</h5>
                                                        <small
                                                            class="text-muted">{{ $review->created_at->format('d M Y') }}</small>
                                                    </div>
                                                    <p class="card-text">{{ $review->review }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>



                                    <br><br><br><br>
                                    @if ($orderCount > 0 && auth()->user())
                                        <form action="{{ route('product.productreview', $product->id) }}" method="post"
                                            class="contact-form">
                                            @csrf
                                            <div class="contact-form-inner">
                                                <p class="para white">Be the first to review “20 Peace Dollars, Mixed Dates,
                                                    Brilliant Uncirculated (20 Coin Roll)”
                                                    Your email address will not be published. Required fields are marked *
                                                </p>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <textarea name="review" id="" class="form-input" placeholder="Your Review"></textarea>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-12">
                                                        <input type="text" class="form-input" name="fullname"
                                                            placeholder="Full Name">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-12">
                                                        <input type="email" class="form-input" name="email"
                                                            placeholder="Email">
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-check mt-4">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckDefault">
                                                            <label class="form-check-label white" for="flexCheckDefault">
                                                                Save my name, email, and website in this browser for the
                                                                next
                                                                time I comment.
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="primary-btn" type="submit">SUbmit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    @endif

                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="des-content active" data-content="description">




                        <div class="para my-5">
                            {!! $product->long_description !!}
                        </div>



                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="pro-area">
                        <div class="text-center mb-3">
                            <img class="img-fluid bit-img" src="{{ asset('assets/web/images/silver2.png') }}"
                                alt="">
                        </div>
                        <h4 class="inner-financial-hd">1 oz Silver Bar </h4>
                        <div class="raiting-area">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="shipping-para pr"><strong>$35.12</strong></p>
                        <div class="cart-btn-area">
                            <button class="cart-btn"><i class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            <button class="cart-btn"><i class="fa-solid fa-code-compare"></i> Compare</button>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="pro-area">
                        <div class="text-center mb-3">
                            <img class="img-fluid bit-img" src="{{ asset('assets/web/images/silver3.png') }}"
                                alt="">
                        </div>
                        <h4 class="inner-financial-hd">Asahi 1 oz Silver Round Freedom Liberty </h4>
                        <div class="raiting-area">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="shipping-para pr"><strong>$3.54</strong></p>
                        <div class="cart-btn-area">
                            <button class="cart-btn"><i class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            <button class="cart-btn"><i class="fa-solid fa-code-compare"></i> Compare</button>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="pro-area">
                        <div class="text-center mb-3">
                            <img class="img-fluid bit-img" src="{{ asset('assets/web/images/silver4.png') }}"
                                alt="">
                        </div>
                        <h4 class="inner-financial-hd">1 oz Silver Round</h4>
                        <div class="raiting-area">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="shipping-para pr"><strong>$38.17</strong></p>
                        <div class="cart-btn-area">
                            <button class="cart-btn"><i class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            <button class="cart-btn"><i class="fa-solid fa-code-compare"></i> Compare</button>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="pro-area">
                        <div class="text-center mb-3">
                            <img class="img-fluid bit-img" src="{{ asset('assets/web/images/silver5.png') }}"
                                alt="">
                        </div>
                        <h4 class="inner-financial-hd">2 oz Round Mercury and Buffalo</h4>
                        <div class="raiting-area">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="shipping-para pr"><strong>$70.94</strong></p>
                        <div class="cart-btn-area">
                            <button class="cart-btn"><i class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            <button class="cart-btn"><i class="fa-solid fa-code-compare"></i> Compare</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="logo-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div>
                        <img class="img-fluid" src="{{ asset('assets/web/images/logo1.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="news-area">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-7 col-12">
                                <h4 class="news-hd">Subscribe To Our Email</h4>
                                <h5 class="latest-hd">For Latest News & Updates</h5>
                                <p class="para news-para">There are many variations of passages of Lorem Ipsum available
                                    but
                                </p>
                            </div>
                            <div class="col-lg-6 col-md-5 col-12">
                                <form action="" class="news-later-form">
                                    <input type="text" placeholder="Enter Your Email Address" class="input-form">
                                    <button class="primary-btn mt-5">Submit Now</button>
                                </form>
                            </div>
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
            var options = [];
            $("select[name='option']").on("change", function() {
                let selectedOption = $(this).find(":selected");
                let variantName = selectedOption.data("variant");
                let attrName = $(this).data("attr");
                // console.log(variantName);

                const obj = {
                    attrName: attrName,
                    variantName: variantName,
                    variantID: $(this).val()
                }
                const existingIndex = options.findIndex(item => item.attrName === obj.attrName);

                if (existingIndex !== -1) {
                    options[existingIndex] = obj; // Replace
                } else {
                    options.push(obj); // Add new
                }

                console.log(options);

            })
            $(document).on('click', '#add-to-cart', function(e) {
                let quantity = $('#quantity').val();
                // let variant = $('#variant').val();
                let product_id = $(this).data('id');
                let select_option = options;
                console.log(select_option);

                e.preventDefault();

                console.log(select_option);
                $.ajax({
                    type: 'GET',
                    url: "{{ route('cart.add') }}",
                    data: {
                        quantity: quantity,
                        variant: select_option,
                        productId: product_id

                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                title: 'Success',
                                text: response.message,
                                icon: "success",
                                showConfirmButton: false,
                                timer: 1500

                            });
                        }

                    },
                })
            })
        })
    </script>




    @if (session()->has('successcart'))
        <script>
            swal({
                title: "Message",
                text: "{{ session('successcart') }}",
                icon: "success",
                button: "OK",
                timer: 6000
            });
        </script>
    @endif
@endpush
