@extends('layout.web.app')


@section('content')
    <section class="hero-banner">
        <div class="banner-slider">
            @foreach ($carouselimages as $carouselimage)
                {{-- <img src="{{ asset('images/carousel/' . $carouselimage->images) }}" alt=""> --}}
                <div class="slider-item-banner"
                    style="background-image: url({{ asset('images/carousel/' . $carouselimage->images) }});">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-10 col-12">
                                <div class="banner-content">
                                    <h1 class="primary-hd">Gold Depot</h1>
                                    <h2 class="secondary-hd">Store Has It ALL!</h2>
                                    <p class="para white">CALL US for ANY COIN! Is there a certain special order item that
                                        you
                                        want? We'll send it!
                                        Gold Depot Store is also a Certified Industry Wholesaler and CCE Market Maker. CALL
                                        US
                                        1-800-733-8813 ASK to speak with one of our senior numismatic representatives Today!
                                    </p>
                                    <a href="{{ route('shop.index') }}" class="primary-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>



                    {{-- @if (auth()->user()->role == 'admin')
                    <span class="top-link">/</span>
                    <a href="{{ route('adminhome.index') }}" class="top-link">Dashboard</a>
                @endif --}}



                </div>
            @endforeach


            {{-- @if (session()->has('success'))
                <div class="alert alert-success">

                    {{ session('success') }}
                </div>
            @endif --}}



            {{--
            <script>
                        alert("hello");

            </script> --}}

        </div>
        <div class="banner-slider-btn">
            <button class="prev-btn"><i class="fa-solid fa-caret-left"></i></button>
            <button class="next-btn"><i class="fa-solid fa-caret-right"></i></button>
        </div>
    </section>
    <section class="financial-section fix-pading">
        <!-- <img class="img-fluid financial-img" src="./assets/images/financial-img.png" alt="">
                                                                            <img class="img-fluid financial-img-2" src="./assets/images/financial-img2.png" alt=""> -->

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-md-12 col-12">
                    <div class="text-center">
                        <h2 class="section-hd-primary">Our Categories</h2>
                        <h3 class="section-hd-secondary">Guiding Your Financial Journey</h3>
                        <p class="para ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque iste autem veniam
                            debitis accusantium <br> velit neque dignissimos unde ex quibusdam saepe minima obcaecati
                            provident</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-11 col-md-11 col-12">
                    <div class="financial-slider pt-5">
                        <div class="financial-item">
                            <div class="bit-coin-img-area">
                                <img class="img-fluid" src="{{ asset('assets/web/images/bit1.png') }}" alt="">
                            </div>
                            <div class="inner-financial-content text-center">
                                <div class="">
                                    <h4 class="inner-financial-hd">NEW <br>
                                        ARRIVALS</h4>
                                    <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt
                                        ut
                                        labore et dolore
                                        magna aliqua.</p>
                                    <a href="#" class="more-link">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="financial-item">
                            <div class="bit-coin-img-area">
                                <img class="img-fluid" src="{{ asset('assets/web/images/bitSilver.png') }}" alt="">
                            </div>
                            <div class="inner-financial-content text-center">
                                <div class="">
                                    <h4 class="inner-financial-hd">AMERICAN SILVER
                                        EAGLES</h4>
                                    <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt
                                        ut
                                        labore et dolore
                                        magna aliqua.</p>
                                    <a href="#" class="more-link">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="financial-item">
                            <div class="bit-coin-img-area">
                                <img class="img-fluid" src="{{ asset('assets/web/images/bitSilver3.png') }}" alt="">
                            </div>
                            <div class="inner-financial-content text-center">
                                <div class="">
                                    <h4 class="inner-financial-hd">MORGAN SILVER
                                        DOLLARS</h4>
                                    <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt
                                        ut
                                        labore et dolore
                                        magna aliqua.</p>
                                    <a href="#" class="more-link">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="financial-item">
                            <div class="bit-coin-img-area graded">
                                <img class="img-fluid" src="{{ asset('assets/web/images/bitSilver2.png') }}" alt="">
                            </div>
                            <div class="inner-financial-content text-center">
                                <div class="">
                                    <h4 class="inner-financial-hd">GRADED GOLD AND
                                        SILVER COINS</h4>
                                    <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt
                                        ut
                                        labore et dolore
                                        magna aliqua.</p>
                                    <a href="#" class="more-link">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="financial-item">
                            <div class="bit-coin-img-area">
                                <img class="img-fluid" src="{{ asset('assets/web/images/bitSilver.png') }}" alt="">
                            </div>
                            <div class="inner-financial-content text-center">
                                <div class="">
                                    <h4 class="inner-financial-hd">AMERICAN SILVER
                                        EAGLES</h4>
                                    <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt
                                        ut
                                        labore et dolore
                                        magna aliqua.</p>
                                    <a href="#" class="more-link">Learn More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>


    </section>
    <div class="shipping-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="shiiping-area">
                        <h4 class="shipping-hd">Free Shipping Over <span>$199</span></h4>
                        <p class="shipping-para">$9.95 Shipping Under $199</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="shiiping-area">
                        <h4 class="shipping-hd"><span>350,000+</span> Customer Reviews
                        </h4>
                        <p class="shipping-para">4.8/5 Satisfaction Rating</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="shiiping-area last">
                        <h4 class="shipping-hd">Over <span>$10 Billion</span> Sold
                        </h4>
                        <p class="shipping-para">4.8/5 Satisfaction Rating</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                <p class="shipping-para pr"><strong>{{ $product->price }}</strong></p>
                                <div class="cart-btn-area">
                                    <button class="cart-btn"><i class="fa-solid fa-cart-shopping"></i> Add To
                                        Cart</button>
                                    <button class="cart-btn"><i class="fa-solid fa-code-compare"></i> Compare</button>

                                </div>
                            </div>

                        </a>
                    </div>
                @endforeach

                <div class="col-12">
                    <div class="mt-5 text-center">
                        <a href="{{ route('shop.index') }}" class="primary-btn">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-md-11 col-12">
                    <div class="dollar-sec">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-12">
                                    <div class="dollar-img-area">
                                        <img class="img-fluid" src="{{ asset('assets/web/images/dollar2.png') }}"
                                            alt="">
                                        <img class="img-fluid" src="{{ asset('assets/web/images/dollar1.png') }}"
                                            alt="">
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
    </section>
    <section class="review-sec fix-pading">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 col-12">
                    <div class="text-center">
                        <h2 class="section-hd-primary">Our Reviews</h2>
                        <h3 class="section-hd-secondary">Excellence in every ounce</h3>
                        <p class="para ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque iste autem veniam
                            debitis accusantium <br> velit neque dignissimos unde ex quibusdam saepe minima obcaecati
                            provident</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="review-slider">
                        @foreach ($reviews as $review)
                            <div class="review-item">
                                <p class="para">{{ $review->review }}</p>
                                <div class="rev-img-area">
                                    <div>
                                        <img src="{{ asset('assets/web/images/revimg.png') }}" alt="">
                                    </div>
                                    <div>
                                        <h5 class="rev-hd">{{ $review->fullname }}</h5>
                                        <p class="para">Customer</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <div class="banner-slider-btn-rev">
                        <button class="prev-btn-rev"><i class="fa-solid fa-caret-left"></i></button>
                        <button class="next-btn-rev"><i class="fa-solid fa-caret-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="standared-sec fix-pading pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 col-12">
                    <div class="text-center">
                        <h2 class="section-hd-primary">Our Blogs</h2>
                        <h3 class="section-hd-secondary">The Gold Standard of Flavor</h3>
                        <p class="para ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque iste autem veniam
                            debitis accusantium <br> velit neque dignissimos unde ex quibusdam saepe minima obcaecati
                            provident</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <div class="position-relative">
                            <div class="stander-slider mt-5">
                                @foreach ($blogs as $blog)
                                    <div class="stand-item">
                                        <img class="img-fluid" src="{{ asset('images/blog/' . $blog->img) }}"
                                            alt="">
                                        <div class="mt-3">
                                            <h4 class="stand-hd">
                                                {{ $blog->title }}</h4>
                                            <p class="para mb-2">
                                                {{ $blog->description }}</p>
                                            <a href="#" class="read-more">Read More</a>
                                        </div>

                                    </div>
                                @endforeach

                            </div>
                            <div class="banner-slider-btn-rev">
                                <button class="prev-btn-stand"><i class="fa-solid fa-caret-left"></i></button>
                                <button class="next-btn-stand"><i class="fa-solid fa-caret-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    @if (session()->has('reviewsuccess'))
        <script>
            Swal.fire({
                title: 'Success',
                text: "{{ session('reviewsuccess') }}",
                icon: "success",
                showConfirmButton: false,
                timer: 1500

            });
        </script>
    @endif

    @if (session()->has('ordersuccess'))
        <script>
            Swal.fire({
                title: 'Success',
                text: "{{ session('ordersuccess') }}",
                icon: "success",
                showConfirmButton: false,
                timer: 2500

            });
        </script>
    @endif
    @if (session()->has('successregister'))
        <script>
            Swal.fire({
                title: 'Success',
                text: "{{ session('successregister') }}",
                icon: "success",
                showConfirmButton: false,
                timer: 2500

            });
        </script>
    @endif
    @if (session()->has('userlogin'))
        <script>
            Swal.fire({
                title: 'Success',
                text: "{{ session('userlogin') }}",
                icon: "success",
                showConfirmButton: false,
                timer: 2500

            });
        </script>
    @endif

    @if (session()->has('successforgot'))
        <script>
            Swal.fire({
                title: 'Success',
                text: "{{ session('successforgot') }}",
                icon: "success",
                showConfirmButton: false,
                timer: 2500

            });
        </script>
    @endif
@endpush
