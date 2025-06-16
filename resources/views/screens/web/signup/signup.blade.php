@extends('layout.web.app')

@section('content')
    <section class="about-sec-content fix-pading">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 col-md-10 col-12">
                    <form method="post" action="{{ route('signup.store') }}" class="contact-form">
                        @csrf
                        <div class="contact-form-inner">
                            <h3 class="contact-hd">Sign Up</h3>
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" class="form-input" value="{{ old('first_name') }}"
                                        name="first_name" placeholder="First Name">
                                    @error('firstname')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-input" value="{{ old('last_name') }}" name="last_name"
                                        placeholder="Last Name">
                                    @error('lastname')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-input" value="{{ old('email') }}" name="email"
                                        placeholder="Email">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="login-pass-area">
                                        <input type="password" class="form-input password" value="{{ old('password') }}"
                                            name="password" placeholder="Password">
                                        <button class="show-pass" type="button">
                                            <i class="fa-solid fa-eye"></i>
                                        </button>
                                    </div>
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="login-pass-area">
                                        <input type="password" class="form-input password"
                                            name="password_confirmation" placeholder="Confirmed Password">
                                        <button class="show-pass" type="button">
                                            <i class="fa-solid fa-eye"></i>
                                        </button>
                                    </div>
                                    @error('password_confirmation')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <input type="number" class="form-input" name="phone_number"
                                        value="{{ old('phone_number') }}" placeholder="Number">
                                    @error('phonenumber')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="primary-btn">Sign Up</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </section>

    <script>
        const showpassword = document.querySelector(".show-pass")
        const inputpassword = document.querySelector(".form-input.password")
        showpassword.addEventListener("click", () => {
            const changeIcon = showpassword.querySelector("i")
            if (inputpassword.type === "password") {
                inputpassword.type = "text"
                changeIcon.classList = "fa-solid fa-eye-slash"
            } else {
                changeIcon.classList = "fa-solid fa-eye"
                inputpassword.type = "password"
            }
        })
    </script>
@endsection
