@extends('layout.web.app')

@section('content')
    <section class="about-sec-content fix-pading">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 col-md-10 col-12">
                    <form action="{{ route('login') }}" method="post" class="contact-form">
                        @csrf
                        <div class="contact-form-inner">
                            <h3 class="contact-hd">Sign In</h3>
                            <div class="row">
                                <div class="col-12">
                                    <input type="email" name="email" class="form-input" placeholder="Email">
                                    @error('email')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="login-pass-area">
                                        <input type="password" class="form-input password" name="password"
                                            placeholder="Password">
                                        <button class="show-pass" type="button">
                                            <i class="fa-solid fa-eye"></i>
                                        </button>
                                    </div>
                                    @error('passsword')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <a href="{{ route('forgot') }}"
                                    style="padding-left: 2% ; padding-top:2%; color: white;">forgotpassword</a>
                                <div class="col-12">
                                    <button type="submit" class="primary-btn">Sign In</button>
                                </div>
                            </div>
                        </div>
                        {{-- @if (session()->has('loginerror'))
                            <div class="alert alert-danger">
                                {{ session('loginerror') }}
                            </div>
                        @endif --}}
                    </form>
                </div>

            </div>
        </div>

    </section>
@endsection

@push('scripts')
    @if (session()->has('logoutsuccess'))
        <script>
            Swal.fire({
                title: 'Success',
                text: "{{ session('logoutsuccess') }}",
                icon: "success",
                showConfirmButton: false,
                timer: 1500

            });
        </script>
    @endif



    @if (session()->has('loginerror'))
        <script>
            Swal.fire({
                title: 'Success',
                text: "{{ session('loginerror') }}",
                icon: "success",
                showConfirmButton: false,
                timer: 2500

            });
        </script>
    @endif

    @if (session()->has('resetpassword'))
        <script>
            Swal.fire({
                title: 'Success',
                text: "{{ session('resetpassword') }}",
                icon: "success",
                showConfirmButton: false,
                timer: 2500

            });
        </script>
    @endif

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
@endpush
