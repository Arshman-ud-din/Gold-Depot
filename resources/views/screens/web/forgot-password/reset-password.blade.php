@extends('layout.web.app')

@section('content')
    <section class="about-sec-content fix-pading">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 col-md-10 col-12">
                    <form action="{{ route('resetpassword') }}" method="post" class="contact-form">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="contact-form-inner">
                            <h3 class="contact-hd">Reset Password</h3>
                            <div class="row">
                                <div class="col-12">
                                    <input type="email" name="email" class="form-input" value="{{$email}}" placeholder="Email" readonly>
                                    @error('email')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                 <div class="col-12">
                                    <input type="password" name="password" class="form-input"   placeholder="Password">
                                    @error('password')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                 <div class="col-12">
                                    <input type="password" name="password_confirmation" class="form-input"   placeholder="Confirmed Password" >
                                    @error('password_confirmation')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="primary-btn">Reset Password</button>
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
