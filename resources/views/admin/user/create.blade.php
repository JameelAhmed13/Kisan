@extends('others.others_layout.master')
@use('App\Enums\RoleEnum')

@section('others_css')
@endsection

@section('others_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7 login_bs_validation">
                <img class="bg-img-cover bg-center" src="{{ asset('assets/images/avatar/signup.jpg') }}" alt="looginpage"></div>
                <div class="col-xl-5 p-0">
                <div class="login-card login-dark login-bg">
                    <div>
                        <div>
                            <a class="logo text-center" href="{{ route('admin.dashboard') }}">
                                <img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo.png') }}" alt="looginpage">
                                <img class="for-dark m-auto" src="{{ asset('assets/images/logo/dark-logo.png') }}" alt="logo">
                            </a>
                        </div>
                        <div class="login-main">
                            <form class="theme-form" action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h2 class="text-center">Sign in to account</h2>
                                <p class="text-center">Enter your email &amp; password to login</p>
                                <div class="col-sm-12 mb-3">
                                    <label>Name<span> *</span></label>
                                    <input class="form-control" type="text" name="name"
                                           value="{{ isset($user->name) ? $user->name : old('name') }}"
                                           placeholder="Enter First Name">
                                    @error('name')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label>Email <span> *</span></label>
                                    <input class="form-control" type="email" id="email" value="{{ isset($user->email) ? $user->email : old('email') }}" name="email" placeholder="Enter Email">
                                    @error('email')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label>Password <span> *</span></label>
                                    <input class="form-control" type="password" id="password" name="password" placeholder="Enter Password" autocomplete="off">
                                    @error('password')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label>Role <span> *</span></label>
                                    <select class="form-select" name="roleID" class="form-control btn-square">
                                        <option value="" selected disabled hidden>Select Role</option>
                                        @foreach ($roles as $key => $role)
                                            @if ($role->roleName !== RoleEnum::ADMIN)
                                                <option value="{{ $role->roleID }}"
                                                @if (isset($user->roles)) @selected(old('roleID', $user->roles->pluck('roleID')->first()) == $role->roleID) @endif>{{ $role->roleName }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label>Status</label>
                                    <select class="form-select" name="status" class="form-control btn-square">
                                        <option value="1" @if(old('status')=='1' ) selected @endif {{ !($user->status ?? 1) == 0 ? 'selected' : '' }}>{{ __('Active') }}
                                        </option>
                                        <option value="0" @if(old('status')=='0' ) selected @endif {{ ($user->status ?? 1) == 0 ? 'selected' : '' }}>{{ __('Deactive') }}
                                        </option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                        </div>
                                    </div>
                                </div>

                                <p class="mt-5 mb-0 text-center">Already have account?
                                    <a class="ms-2" href="{{ route('login') }}">Sign In</a></p>
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
