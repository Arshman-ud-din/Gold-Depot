@extends('layout.web.app')


@section('content')
    <section class="about-sec silver-bg-inner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="inner-banner-hd">{{ $cat->name }}</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="recom-sec fix-pading silver">
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
                                    <button class="cart-btn"><i class="fa-solid fa-cart-shopping"></i> Add
                                            To
                                            Cart</button>
                                    <button class="cart-btn"><i class="fa-solid fa-code-compare"></i> Compare</button>

                                </div>
                            </div>

                        </a>
                    </div>
                @endforeach









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
