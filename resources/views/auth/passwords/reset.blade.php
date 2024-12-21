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
                                    src="{{ asset('assets/images/logo/logo.png') }}" alt="looginpage"><img
                                    class="img-fluid for-dark" src="{{ asset('assets/images/logo/dark-logo.png') }}"
                                    alt="logo"></a></div>
                        <div class="login-main">
                            <form class="theme-form" method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">

                                <h2>Reset Your Password</h2>
                                <div class="form-group">
                                    <label class="col-form-label">Email Address</label>
                                    <div class="form-input position-relative">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ $email ?? old('email') }}" placeholder="test@gmail.com" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">New Password</label>
                                    <div class="form-input position-relative">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password"
                                            required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="show-hide"><span class="show"></span></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                </div>
                                <button class="btn btn-primary btn-block w-100 mt-3" type="submit">Reset Password </button>
                            </form>
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
