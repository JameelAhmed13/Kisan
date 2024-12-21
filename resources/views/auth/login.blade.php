@extends('others.others_layout.master')

@section('others_css')
    <style>
        .login-card {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            background-position: center;
            padding: 30px 12px;
            background-size: cover;
        }
    </style>
@endsection

@section('others_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <div class="login-card login-dark" style="background: url('{{asset('assets/images/avatar/logincover.jpg')}} ')">
                    <div>
                        <div>
                            <a class="logo text-center" href="{{ route('admin.dashboard') }}">
                                <img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo.png') }}" alt="looginpage"><img
                                    class="img-fluid for-dark m-auto" src="{{ asset('assets/images/logo/dark-logo.png') }}"
                                    alt="logo">
                            </a>
                        </div>
                        <div class="login-main">
                            <form class="theme-form" action="{{route('login')}}" method="POST">
                                @csrf
                                <h2 class="text-center">Sign in to Account</h2>
                                <p class="text-center">Enter your email &amp; password to login</p>
                                <div class="form-group">
                                    <label class="col-form-label">Email Address</label>
                                    <input class="form-control" type="email" name="email" required="" placeholder="Test@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="password" required=""
                                               placeholder="*********">
                                        <div class="show-hide"><span class="show"> </span></div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 checkbox-checked">
                                    <div class="text-end mt-3">
                                        <button class="btn btn-primary btn-block w-100 text-white">Sign in</button>
                                    </div>
                                </div>
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
