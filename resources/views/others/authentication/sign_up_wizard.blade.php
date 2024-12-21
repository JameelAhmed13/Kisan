@extends('others.others_layout.master')

@section('others_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/wowjs/css/libs/animate.css') }}">
@endsection

@section('others_content')
    <div class="container-fluid wizard-4">
        <div class="row">
            <div class="col-lg-3 col-md-4 position-relative">
                <ul class="anchor">
                    <li><a class="logo text-start ps-0" href="{{ route('admin.dashboard') }}"><img class="img-fluid for-light"
                                src="{{ asset('assets/images/logo/logo.png') }}" alt="looginpage"><img class="img-fluid for-dark m-auto"
                                src="{{ asset('assets/images/logo/dark-logo.png') }}" alt="logo"></a></li>
                    <li>
                        <div class="progresscont">
                            <div class="circleblocks">
                                <div class="user-profile">
                                    <div class="aboutblock">
                                        <div class="circulo activecirculo text-center"><i class="fas fa-user"></i></div>
                                        <div class="user-content">
                                            <h4 class="font-primary">About</h4>
                                            <h6>Add personal details</h6>
                                        </div>
                                    </div>
                                    <div class="addressblock">
                                        <div class="circulo text-center"><i class="fas fa-location-arrow"></i></div>
                                        <div class="user-content">
                                            <h4 class="font-primary">Address</h4>
                                            <h6>Add additional info</h6>
                                        </div>
                                    </div>
                                    <div class="verifyblock">
                                        <div class="circulo text-center"><i class="far fa-id-card"></i></div>
                                        <div class="user-content">
                                            <h4 class="font-primary">Verify</h4>
                                            <h6>Complete.. !</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><img class="img-fluid w-100" src="{{ asset('assets/images/login/icon.png') }}" alt="looginpage"></li>
                </ul>
            </div>
            <div class="col-lg-9 col-md-8 p-0">
                <div class="step-container login-card">
                    <div>
                        <div class="wizard-title text-center">
                            <h2>Sign up to account</h2>
                            <h5 class="text-muted mb-4">Enter your email &amp; password to login</h5>
                        </div>
                        <div class="login-main">
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar" id="progresswizard" role="progressbar" style="width: 15%;"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <form class="theme-form">
                                <input type="hidden" name="_token" value="iJquRbgH4Np4OcWzjk8Bd03CaexHzse7gz2vHrml">
                                <div class="registration-content">
                                    <div id="aboutcont" data-progress="15%">
                                        <div class="form-group">
                                            <label class="col-form-label" for="firstname">First Name</label>
                                            <input class="form-control" id="firstname" type="text" name="firstname"
                                                required="" placeholder="Johan">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label" for="lastname">Last Name </label>
                                            <input class="form-control" id="lastname" type="text" name="lastname"
                                                required="" placeholder="Deo">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label" for="phone">phone</label>
                                            <input class="form-control" id="phone" type="text" name="phone"
                                                required="" placeholder="123456745">
                                        </div>
                                    </div>
                                    <div id="addrescont" data-progress="50%">
                                        <div class="form-group">
                                            <label class="col-form-label" for="email">Email address</label>
                                            <input class="form-control" id="email" type="text" name="email"
                                                required="" placeholder="name@example.com"><small
                                                class="form-text text-muted" id="emailHelp">We&apos;ll never share your
                                                email with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label" for="password">Password</label>
                                            <input class="form-control" id="password" type="text" name="password"
                                                required="" placeholder="password">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label" for="repassword">Confirm Password</label>
                                            <input class="form-control" id="repassword" type="text" name="repassword"
                                                required="" placeholder="Enter again">
                                        </div>
                                    </div>
                                    <div id="verifycont" data-progress="85%">
                                        <div class="form-group">
                                            <label class="col-form-label" for="birthday">Birthday:</label>
                                            <input class="form-control" id="birthday" type="date">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label" for="state">State</label>
                                            <input class="form-control" id="state" type="text" name="state"
                                                value="Ontario" required="">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Country </label>
                                            <select class="selectpicker countrypicker form-control"
                                                name="country_residence">
                                                <option value="">Canada</option>
                                                <option value="">United States</option>
                                                <option value="">United Kingdom</option>
                                                <option value="">Germany</option>
                                                <option value="">France</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 wizard-navigation">
                                    <div class="p-2">
                                        <button class="btn m-1 btn-outline-primary btn-lg" id="prevbtn"
                                            type="button">Previous</button>
                                    </div>
                                    <div>
                                        <button class="btn m-1 btn-primary btn-lg btn-lg text-center" id="nextbtn"
                                            type="button">Next</button>
                                        <button class="btn btn-primary btn-lg" id="submitForm" name="submitForm"
                                            type="submit">Finish</button>
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
    <script src="{{ asset('assets/js/tooltip-custom.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/react/umd/react.production.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/react-dom/umd/react-dom.production.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-wizard/custom-wizard.js') }}"></script>
    <script src="{{ asset('assets/js/theme-customizer/customizer.js') }}"></script>
@endsection
