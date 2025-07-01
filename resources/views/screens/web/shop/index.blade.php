@extends('layout.web.app')


@section('content')
    <section class="about-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="inner-banner-hd">Shop</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="recom-sec fix-pading">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-10 col-md-12 col-12 mb-5">
                    <div class="text-center">
                        <h2 class="section-hd-primary">Our Featured</h2>
                        <h3 class="section-hd-secondary">RECOMMENDED FOR YOU</h3>
                        <p class="para ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque iste autem veniam
                            debitis accusantium <br> velit neque dignissimos unde ex quibusdam saepe minima obcaecati
                            provident</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="d-flex justify-content-between align-items-center mb-5 sorting-wrapper">
                            <h4 class="text-start text-uppercase mb-0">Filter</h4>
                            <i class="fa-solid fa-filter" style="font-size: 18px"></i>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="container py-5" style="max-width: 700px;">
                                    <!-- Set fixed width like accordion -->


                                    <div class="mb-4">
                                        <label for="sortSelect" class="form-label fw-bold">Sort By Price:</label>
                                        <select id="sortSelect" class="form-select">
                                            <option value="high">High to Low</option>
                                            <option value="low">Low to High</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label for="sortSelect" class="form-label fw-bold">Sort By Date:</label>
                                        <select id="sortSelect" class="form-select">
                                            <option value="low">old to new</option>
                                            <option value="low">new to old</option>
                                        </select>
                                    </div>

                                    <div class="accordion" id="mainAccordion">
                                        <label class="form-label fw-bold">

                                            Sort By Variants:

                                        </label>
                                        @foreach($attr as $index => $attribute)
                                            <!-- Main Accordion 1 -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}"
                                                        aria-expanded="true">
                                                        {{ $attribute->name }}
                                                    </button>
                                                </h2>
                                                <div id="collapse{{ $index }}" class="accordion-collapse collapse">
                                                    <div class="accordion-body">
                                                        @foreach ($attribute->variants as $variant)
                                                            <div
                                                                class="d-flex justify-content-between align-items-center gap-2 mb-2">
                                                                <label class="fw-normal mb-0" id="variant_{{ $variant->id }}">
                                                                    {{ $variant->name }}

                                                                </label>
                                                                <input type="checkbox" class="variant"
                                                                    id="variant{{ $variant->name }}" data-var="{{ $variant->name }}"
                                                                    data-attr="{{ $attribute->name }}">
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Main Accordion 2 -->


                                        @endforeach
                                        <br><br>
                                        <label class="form-label fw-bold">

                                            Sort By Price Range:

                                        </label>

                                        <div class="range-area">
                                            <div class="slider-container">
                                                <input type="range" min="0" max="100" value="0" id="minRange"
                                                    class="slider min-slider"
                                                    style="background: linear-gradient(to right, rgb(193, 193, 193) 0%, rgb(79, 126, 255) 0%, rgb(79, 126, 255) 99%, rgb(221, 221, 221) 99%);">
                                                <input type="range" min="0" max="100" value="100" id="maxRange"
                                                    class="slider max-slider"
                                                    style="background: linear-gradient(to right, rgb(193, 193, 193) 0%, rgb(79, 126, 255) 0%, rgb(79, 126, 255) 99%, rgb(221, 221, 221) 99%);">
                                            </div>
                                            <div class=" d-flex justify-content-between">
                                                <div class="range-values">
                                                    <div class="style-amount">
                                                        $<span id="minValue">0.00</span>
                                                    </div>
                                                    <p>-</p>
                                                    <div class="style-amount">
                                                        $<span id="maxValue">99.00</span>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-9">
                        <div class="row" id="products">
                            @foreach ($products as $product)
                                <div class="col-lg-3 col-md-6 col-12">
                                    <a href="{{ route('product.show', $product->id) }}">
                                        <div class="pro-area">
                                            <div class="text-center mb-3">
                                                <img class="img-fluid bit-img"
                                                    src="{{ asset('images/featured/' . $product->featured_img) }}" alt="">
                                            </div>
                                            <h4 class="inner-financial-hd">{{ $product->title }}</h4>
                                            <div class="raiting-area">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <p class="shipping-para pr"><strong>{{$product->price}}</strong></p>
                                            <div class="cart-btn-area">
                                                <button class="cart-btn"><i class="fa-solid fa-cart-shopping"></i> Add To
                                                    Cart</button>
                                                <button class="cart-btn"><i class="fa-solid fa-code-compare"></i>
                                                    Compare</button>

                                            </div>
                                        </div>

                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>




                </div>
                <div class="row">
                    <div class="col-6">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
    </section>
    <div class="shop-dollar-sec">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-md-11 col-12">
                    <div class="dollar-sec">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-12">
                                    <div class="dollar-img-area">
                                        <img class="img-fluid" src="{{ asset('assets/web/images/dollar2.png') }}" alt="">
                                        <img class="img-fluid" src="{{ asset('assets/web/images/dollar1.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-12">
                                    <div class="dollar-content">
                                        <h3 class="dollar-hd">Home of the Morgan
                                            Dollar Deal!</h3>
                                        <h4 class="dollar-hd-inner">Any Quantity Only $49.99/oz Over Spot</h4>
                                        <p class="para white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="mt-4">
                                            <a href="{{ route('shop.index') }}" class="primary-btn">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                <p class="para news-para">There are many variations of passages of Lorem Ipsum available but
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


        $(document).ready(function () {

            $(document).on("change", ".variant", function () {
                let selectedIds = [];

                $(".variant:checked").each(function () {
                    selectedIds.push($(this).data('var'));
                });

                $.ajax({
                    type: 'POST',
                    url: "{{ route('shop.filter') }}",
                    data: {
                        _token: '{{ csrf_token() }}',
                        variants: selectedIds
                    },
                    success: function (response) {
                        if (response.success === true) {
                            const products = response.products;
                            $('#products').empty();
                            var product = '';

                            products.forEach(function (product) {

                                product = `
                                                                                    <div class="col-lg-3 col-md-6 col-12">
                                                                                        <a href="/product-detail/${product.id}">
                                                                                            <div class="pro-area">
                                                                                                <div class="text-center mb-3">
                                                                                                    <img class="img-fluid bit-img" src="/images/featured/${product.featured_img}" alt="">
                                                                                                </div>
                                                                                                <h4 class="inner-financial-hd">${product.title}</h4>
                                                                                                <div class="raiting-area">
                                                                                                    <i class="fa-solid fa-star"></i>
                                                                                                    <i class="fa-solid fa-star"></i>
                                                                                                    <i class="fa-solid fa-star"></i>
                                                                                                    <i class="fa-solid fa-star"></i>
                                                                                                    <i class="fa-solid fa-star"></i>
                                                                                                </div>
                                                                                                <p class="shipping-para pr"><strong>${product.price}</strong></p>
                                                                                                <div class="cart-btn-area">
                                                                                                    <button class="cart-btn"><i class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                                                                                                    <button class="cart-btn"><i class="fa-solid fa-code-compare"></i> Compare</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                `;
                                $('#products').append(product);
                            });

                            console.log(product);

                            // Replace existing products

                        } else {
                            Swal.fire('Error', response.message, 'error');
                        }
                    },
                });
            });



        })
    </script>



@endpush