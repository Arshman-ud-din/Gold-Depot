@extends('layout.web.app')


@section('content')
    <section class="cart-section sec-pd fix-pading">
        <div class="container">
            <div class="row">
                <div class="col-12 m-0">
                    <div class="sub-sec">
                        <h1 class="cart-hd">Checkout</h1>
                        <div class="return-area">
                            <p>
                                Returning customer?
                            </p>
                            <a href="{{ route('login') }}">Click here to login</a>
                        </div>
                    </div>
                </div>


            </div>
            <form action="{{ route('checkout.store') }}" method="post" class="mt-5">
                @csrf
                <div class="row justify-content-between">
                    <div class="col-lg-3 col-md-6 col-12 m-0">
                        <div class="checkout-card-area">
                            <h4>SHIPPING DETAILS</h4>
                            <h5>required fields</h5>
                            <div class="mb-2">
                                <label for="">Full Name</label>
                                <input type="text" name="fullname" class="" value="{{old('fullname')}}">
                                @error('fullname')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">Country</label>
                                <input type="text" name="country" value="{{old('country')}}" class="">
                                @error('country')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">Street Address</label>
                                <input type="text" name="street_address" value="{{old('street_address')}}" class="">
                                @error('street_address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">State</label>
                                <input type="text" name="state" value="{{old('state')}}" class="">
                                @error('state')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">Postal Code/ ZIP</label>
                                <div class="postal-area">
                                    <input type="text" name="postal_code" value="{{old('postal_code')}}" class="">
                                    @error('postal_code')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <span>Enter ZIP for City & State</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 m-0">
                        <div class="checkout-card-area ">
                            <h4>CONTACT INFORMATION</h4>
                            <h5>required fields</h5>
                            <div class="mb-2">
                                <label for="">Email</label>
                                <input type="text" name="email" value="{{old('email')}}" class="">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">Phone</label>
                                <input type="text" name="phone_number" value="{{old('phone_number')}}" class="">
                                @error('phone_number')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">City</label>
                                <input type="text" name="city" value="{{old('city')}}" class="">
                                @error('city')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="mt-5 mb-3">
                                <h4>ADDITIONAL OPTIONS</h4>
                                <div class="note-area">
                                    <textarea></textarea>
                                </div>

                                <button class="add-address-btn note-btn p-0" type="button"><i class="fa-solid fa-plus"></i>
                                    Add a note to this order</button>
                                <div class="coupan-area">
                                    <input type="text">
                                    <button class="primary-btn mt-0">apply</button>
                                </div>
                                <button class="add-address-btn coupan-btn p-0" type="button"><i
                                        class="fa-solid fa-plus"></i> Apply a coupon code</button>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 m-0">
                        <div class="checkout-card-area contactarea">
                            <h4>Your Order</h4>
                            <h5></h5>
                            <div class="total total-area">
                                <div class="sub-total">
                                    @if (isset($products))
                                        @foreach ($products as $product)
                                            <div class="row align-items-center ">

                                                <div class="col-lg-6 col-md-5 col-6 m-0">
                                                    <h4 class="subttl-hd" name="title">{{ $product['title'] }}</h4>
                                                </div>
                                                <div class="col-lg-6 col-md-5 col-6 m-0">
                                                    <p class="subttl-para" name="item_total">{{ $product['item_total'] }}
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif


                                </div>
                                <div class="sub-total">
                                    <div class="row align-items-center ">
                                        <div class="col-lg-6 col-md-5 col-6 m-0">
                                            <h4 class="subttl-hd">Basic × 1</h4>
                                        </div>
                                        <div class="col-lg-6 col-md-5 col-6 m-0">
                                            <p class="subttl-para">$599.99</p>
                                        </div>
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
                                <div class="sub-total">
                                    <div class="row align-items-center ">
                                        <div class="col-lg-6 col-md-5 col-6 m-0">
                                            <h4 class="subttl-hd">Total</h4>
                                        </div>
                                        <div class="col-lg-6 col-md-5 col-6 m-0">
                                            @if (isset($products))
                                                <p class="subttl-para" name="cartitemstotal">{{ $cartitemstotal }}</p>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <h4>PAYMENT METHOD</h4>
                                    <label class="form-check-label payment-radio" for="flexRadioDefault1">
                                        <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                            id="flexRadioDefault1" onclick="toggleCardInput()">
                                        Cash on Delivery
                                    </label>
                                </div>
                                <div class="card-main-area">
                                    <div class="mb-2">
                                        <input type="text" class="" placeholder="Card Number">
                                    </div>
                                    <div class="mb-2 card-input-area ">
                                        <input type="text" class="" placeholder="M M">
                                        <input type="text" class="" placeholder="YY">
                                        <input type="text" class="" placeholder="CVC">
                                    </div>
                                </div>
                                <label class="form-check-label payment-radio tearm-label" for="flexRadioDefault2">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="flexRadioDefault2">
                                    I have read and agree to the website terms and conditions
                                </label>
                                <button class="primary-btn" type="submit">Place
                                    Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

<script>
    var notBtn = document.querySelector(".note-btn");
    var icon = notBtn.querySelector("i");
    var noteArea = document.querySelector(".note-area");
    var cpBtn = document.querySelector(".coupan-btn");
    var icon2 = cpBtn.querySelector("i");
    var cpArea = document.querySelector(".coupan-area");


    notBtn.addEventListener("click", function() {
        noteArea.classList.toggle("active")
        if (icon.classList.contains("fa-plus")) {
            icon.classList.remove("fa-plus");
            icon.classList.add("fa-minus");
        } else {
            icon.classList.remove("fa-minus");
            icon.classList.add("fa-plus");
        }
    })




    cpBtn.addEventListener("click", function() {
        cpArea.classList.toggle("active")
        if (icon2.classList.contains("fa-plus")) {
            icon2.classList.remove("fa-plus");
            icon2.classList.add("fa-minus");
        } else {
            icon2.classList.remove("fa-minus");
            icon2.classList.add("fa-plus");
        }
    })


    function toggleCardInput() {
        var checkbox = document.getElementById("flexRadioDefault1");
        var cardInputArea = document.querySelector(".card-main-area");

        if (checkbox.checked) {
            cardInputArea.style.display = "none";
        } else {
            cardInputArea.style.display = "block";
        }
    }
</script>
