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
                            <form class="theme-form">
                                <h2>Reset Your Password</h2>
                                <div class="form-group">
                                    <label class="col-form-label">New Password</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="password" required=""
                                            placeholder="*********">
                                        <div class="show-hide"><span class="show"></span></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Retype Password</label>
                                    <input class="form-control" type="password" name="password" required=""
                                        placeholder="*********">
                                </div>
                                <div class="form-group mb-0 checkbox-checked">
                                    <div class="form-check checkbox-solid-info">
                                        <input class="form-check-input" id="solid6" type="checkbox">
                                        <label class="form-check-label" for="solid6">Remember password</label>
                                    </div>
                                    <button class="btn btn-primary btn-block w-100 mt-3" type="submit">Done </button>
                                </div>
                                <p class="mt-4 mb-0">Don't have account?<a class="ms-2"
                                        href="{{ route('admin.sign_up') }}">Create
                                        Account</a></p>
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
