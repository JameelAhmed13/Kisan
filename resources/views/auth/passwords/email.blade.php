@extends('others.others_layout.master')

@section('others_css')
@endsection

@section('others_content')  
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="login-card login-dark">
                    <div>
                        <div><a class="logo" href="{{ route('admin.dashboard') }}"><img class="img-fluid for-light"
                                    src="{{ asset('assets/images/logo/logo.png') }}" alt="looginpage"><img class="for-dark"
                                    src="{{ asset('assets/images/logo/dark-logo.png') }}" alt="logo"></a></div>
                        <div class="login-main">
                            <form class="theme-form" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                @if (session('status'))
                                    <div class="alert bg-primary p-2" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <h4 class="f-w-500">Forgot Password</h4>

                                <p>
                                    Please enter your mail id to reset the password
                                </p>
                                <div class="form-group">
                                    <label class="col-form-label">Email Address</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control @error('email') is-invalid @enderror" placeholder="test@gmail.com" type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-end">
                                        <button class="btn btn-primary" type="submit" style="inline-size: -webkit-fill-available;">Send Password Reset Link</button>
                                    </div>
                                </div>
                            </form>

                            <div class="form-group mt-3">
                                <a href="{{ route('login') }}" class="text-center nav-link">
                                    <p>
                                        <i class="fa fa-long-arrow-left"></i>
                                        Back to Login Page
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('others_scripts')
<script src="{{ asset('assets/js/password.js') }}"></script>
@endsection
