@extends('others.others_layout.master')

@section('others_css')
@endsection

@section('others_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5 login_two_image"> </div>
            <div class="col-xl-7 p-0">
                <div class="login-card login-dark login-bg">
                    <div>
                        <div><a class="logo text-center" href="{{ route('admin.dashboard') }}"><img class="img-fluid for-light"
                                    src="{{ asset('assets/images/logo/logo.png') }}" alt="looginpage"><img class="for-dark m-auto"
                                    src="{{ asset('assets/images/logo/dark-logo.png') }}" alt="logo"></a></div>
                        <div class="login-main">
                            <form class="theme-form">
                                <h2 class="text-center">Sign in to account</h2>
                                <p class="text-center">Enter your email &amp; password to login</p>
                                <div class="form-group">
                                    <label class="col-form-label">Email Address</label>
                                    <input class="form-control" type="email" required="" placeholder="Test@gmail.com">
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
                                    <div class="form-check checkbox-solid-info">
                                        <input class="form-check-input" id="solid6" type="checkbox">
                                        <label class="form-check-label" for="solid6">Remember password</label>
                                    </div><a class="link-two" href="{{ route('admin.forget_password') }}">Forgot password?</a>
                                    <div class="text-end mt-3"><a class="btn btn-primary btn-block w-100 text-white"
                                            href="{{ route('admin.dashboard') }}">Sign in</a></div>
                                </div>
                                <div class="login-social-title">
                                    <h6>Or Sign in with </h6>
                                </div>
                                <div class="form-group">
                                    <ul class="login-social">
                                        <li><a href="https://www.linkedin.com" target="_blank"><i
                                                    class="icon-linkedin"></i></a></li>
                                        <li><a href="https://twitter.com" target="_blank"><i class="icon-twitter"></i></a>
                                        </li>
                                        <li><a href="https://www.facebook.com" target="_blank"><i
                                                    class="icon-facebook"></i></a></li>
                                        <li><a href="https://www.instagram.com" target="_blank"><i
                                                    class="icon-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2"
                                        href="{{ route('admin.sign_up') }}">Create Account</a></p>
                                <script>
                                    (function() {
                                        'use strict';
                                        window.addEventListener('load', function() {
                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                            var forms = document.getElementsByClassName('needs-validation');
                                            // Loop over them and prevent submission
                                            var validation = Array.prototype.filter.call(forms, function(form) {
                                                form.addEventListener('submit', function(event) {
                                                    if (form.checkValidity() === false) {
                                                        event.preventDefault();
                                                        event.stopPropagation();
                                                    }
                                                    form.classList.add('was-validated');
                                                }, false);
                                            });
                                        }, false);
                                    })();
                                </script>
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
