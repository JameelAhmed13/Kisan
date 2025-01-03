@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/wowjs/css/libs/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Validation Forms</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Controls</li>
                        <li class="breadcrumb-item active">Validation Forms</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Tooltip form validation</h4>
                        <p class="desc mb-0 mt-1"><span>If your form layout allows it, you can swap
                                the</span><code>.{valid|invalid}</code><span>-tooltip classes to display validation feedback
                                in a styled tooltip.</span></p>
                    </div>
                    <div class="card-body">
                        <form class="theme-form row g-3 needs-validation custom-input" novalidate="">
                            <div class="col-md-4 position-relative">
                                <label class="form-label" for="validationTooltip01">First name</label>
                                <input class="form-control" id="validationTooltip01" type="text" placeholder="Mark"
                                    required="">
                                <div class="valid-tooltip">Looks good!</div>
                            </div>
                            <div class="col-md-4 position-relative">
                                <label class="form-label" for="validationTooltip02">Last name</label>
                                <input class="form-control" id="validationTooltip02" type="text" placeholder="Otto"
                                    required="">
                                <div class="valid-tooltip">Looks good!</div>
                            </div>
                            <div class="col-md-4 position-relative">
                                <label class="form-label" for="validationTooltipUsername">Username</label>
                                <div class="input-group has-validation"><span class="input-group-text"
                                        id="validationTooltipUsernamePrepend">@</span>
                                    <input class="form-control" id="validationTooltipUsername" type="text"
                                        aria-describedby="validationTooltipUsernamePrepend" required="">
                                    <div class="invalid-tooltip">Please choose a unique and valid username.</div>
                                </div>
                            </div>
                            <div class="col-md-6 position-relative">
                                <label class="form-label" for="validationTooltip03">City</label>
                                <input class="form-control" id="validationTooltip03" type="text" required="">
                                <div class="invalid-tooltip">Please provide a valid city.</div>
                            </div>
                            <div class="col-md-3 position-relative">
                                <label class="form-label" for="validationTooltip04">State</label>
                                <select class="form-select" id="validationTooltip04" required="">
                                    <option selected="" disabled="" value="">Choose...</option>
                                    <option>U.S </option>
                                    <option>Thailand </option>
                                    <option>India </option>
                                    <option>U.K</option>
                                </select>
                                <div class="invalid-tooltip">Please select a valid state.</div>
                            </div>
                            <div class="col-md-3 position-relative">
                                <label class="form-label" for="validationTooltip05">Zip</label>
                                <input class="form-control" id="validationTooltip05" type="text" required="">
                                <div class="invalid-tooltip">Please provide a valid zip.</div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Browser defaults</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span>Not interested in custom validation
                                feedback messages or writing JavaScript to change form behaviors? Depending on your browser
                                and OS,While these feedback styles cannot be styled with CSS, you can still customize the
                                feedback text through JavaScript.</span></p>
                    </div>
                    <div class="card-body custom-input checkbox-checked">
                        <form class="theme-form">
                            <div class="mb-3">
                                <label class="form-label" for="first-name">First name</label>
                                <input class="form-control" id="first-name" type="text" placeholder="First name"
                                    aria-label="First name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Email address</label>
                                <input class="form-control" id="exampleFormControlInput1" type="email"
                                    placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label class="col-sm-12 col-form-label" for="inputPassword2">Password</label>
                                <input class="form-control" id="inputPassword2" type="password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="validationDefault04">State</label>
                                <select class="form-select" id="validationDefault04" required="">
                                    <option selected="" disabled="" value="">Choose...</option>
                                    <option>U.K </option>
                                    <option>Thailand</option>
                                    <option>India </option>
                                    <option>U.S</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="formFile">Choose file</label>
                                <input class="form-control" id="formFile" type="file">
                            </div>
                            <div class="mb-3">
                                <div class="card-wrapper solid-border rounded-3 checkbox-checked">
                                    <h6 class="sub-title fw-bold">Select your payment method</h6>
                                    <div class="radio-form">
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexRadioDefault1" type="radio"
                                                name="flexRadioDefault">
                                            <label class="form-check-label" for="flexRadioDefault1">Visa</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexRadioDefault2" type="radio"
                                                name="flexRadioDefault" checked="">
                                            <label class="form-check-label" for="flexRadioDefault2">MasterCard</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexRadioDefault3" type="radio"
                                                name="flexRadioDefault" checked="">
                                            <label class="form-check-label" for="flexRadioDefault3">Paypal</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="mb-3 checkbox-checked form-check-inline">
                                <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="">
                                <label class="form-check-label" for="flexCheckDefault">I agree to the policies</label>
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" id="flexSwitchCheckDefault" type="checkbox"
                                        role="switch" required="">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Are you sure above
                                        information are true</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Validation form</h4>
                        <p class="desc mb-0 mt-1"><span>Custom feedback styles apply custom colors, borders, focus styles,
                                and background icons to better communicate feedback.Background icons for
                            </span><code>&lt;select&gt;-*.form-select-*</code><span>are only available with.</span></p>
                    </div>
                    <div class="card-body checkbox-checked">
                        <form class="theme-form row g-3 needs-validation custom-input" novalidate="">
                            <div class="col-12">
                                <label class="form-label" for="validationCustom01">First name</label>
                                <input class="form-control" id="validationCustom01" type="text" placeholder="Mark"
                                    required="">
                                <div class="invalid-feedback">Please enter your valid </div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-12">
                                <label class="col-sm-12 col-form-label" for="inputPassword1">Password</label>
                                <input class="form-control" id="inputPassword1" type="password" required="">
                                <div class="invalid-feedback">Please enter your valid password </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="validationCustom04">State</label>
                                <select class="form-select" id="validationCustom04" required="">
                                    <option selected="" disabled="" value="">Choose...</option>
                                    <option>U.K </option>
                                    <option>India </option>
                                    <option>Thailand</option>
                                    <option>Newyork</option>
                                </select>
                                <div class="invalid-feedback">Please select a valid state.</div>
                                <div class="valid-feedback">
                                    Looks's Good! </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="validationCustom03">City</label>
                                <input class="form-control" id="validationCustom03" type="text" required="">
                                <div class="invalid-feedback">Please provide a valid city.</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="validationCustom05">Zip</label>
                                <input class="form-control" id="validationCustom05" type="text" required="">
                                <div class="invalid-feedback">Please provide a valid zip.</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-12">
                                <div class="card-wrapper solid-border rounded-3 checkbox-checked">
                                    <h6 class="sub-title fw-bold">Select your payment method</h6>
                                    <div class="radio-form">
                                        <div class="form-check">
                                            <input class="form-check-input" id="validationFormCheck25" type="radio"
                                                name="radio-stacked" required="">
                                            <label class="form-check-label" for="validationFormCheck25">MaterCard</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="validationFormCheck23" type="radio"
                                                name="radio-stacked" required="">
                                            <label class="form-check-label" for="validationFormCheck23">VISA</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <select class="form-select" required="" aria-label="select example">
                                    <option value="">Select Your Favorite Pixelstrap theme</option>
                                    <option value="1">Tivo</option>
                                    <option value="2">Edmin</option>
                                    <option value="3">Wingo</option>
                                </select>
                                <div class="invalid-feedback">Invalid select feedback</div>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="formFile1">Choose File</label>
                                <input class="form-control" id="formFile1" type="file" aria-label="file example"
                                    required="">
                                <div class="invalid-feedback">Invalid form file selected</div>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="validationTextarea">Description</label>
                                <textarea class="form-control" id="validationTextarea" placeholder="Enter your comment" required=""></textarea>
                                <div class="invalid-feedback">Please enter a message in the textarea.</div>
                            </div>
                            <div class="col-12">
                                <div class="form-check checkbox-checked form-check-inline">
                                    <input class="form-check-input" id="invalidCheck" type="checkbox" value=""
                                        required="">
                                    <label class="form-check-label" for="invalidCheck">Agree to terms and
                                        conditions</label>
                                    <div class="invalid-feedback">You must agree before submitting.</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
@endsection
