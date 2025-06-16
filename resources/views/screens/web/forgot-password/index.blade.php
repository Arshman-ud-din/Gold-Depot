@extends('layout.web.app')

@section('content')
    <section class="about-sec-content fix-pading">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 col-md-10 col-12">
                    <form action="{{ route('forgotpassword') }}" method="post" class="contact-form">
                        @csrf
                        <div class="contact-form-inner">
                            <h3 class="contact-hd">Forgot Password</h3>
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
                                    <button type="submit" class="primary-btn">Forgot Password</button>
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
