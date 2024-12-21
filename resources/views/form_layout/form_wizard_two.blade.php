@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Step Form Wizard</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Layout</li>
                        <li class="breadcrumb-item active">Step Form Wizard</li>
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
                    <div class="card-header">
                        <h4>Custom horizontal wizard</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                    </div>
                    <div class="card-body">
                        <div class="horizontal-wizard-wrapper">
                            <div class="row g-3">
                                <div class="col-12 main-horizontal-header">
                                    <div class="nav nav-pills horizontal-options" id="horizontal-wizard-tab" role="tablist"
                                        aria-orientation="vertical"><a class="nav-link active" id="wizard-info-tab"
                                            data-bs-toggle="pill" href="#wizard-info" role="tab"
                                            aria-controls="wizard-info" aria-selected="true">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard"><i class="fa fa-user"></i></div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Personal info</h6>
                                                </div>
                                            </div>
                                        </a><a class="nav-link" id="bank-wizard-tab" data-bs-toggle="pill"
                                            href="#bank-wizard" role="tab" aria-controls="bank-wizard"
                                            aria-selected="false">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard"><i class="fa fa-chain-broken"></i></div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Connect bank account</h6>
                                                </div>
                                            </div>
                                        </a><a class="nav-link" id="inquiry-wizard-tab" data-bs-toggle="pill"
                                            href="#inquiry-wizard" role="tab" aria-controls="inquiry-wizard"
                                            aria-selected="false">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard"><i class="fa-solid fa-people-group"></i>
                                                </div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Inquiries</h6>
                                                </div>
                                            </div>
                                        </a><a class="nav-link" id="successful-wizard-tab" data-bs-toggle="pill"
                                            href="#successful-wizard" role="tab" aria-controls="successful-wizard"
                                            aria-selected="false">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard"><i class="fa-solid fa-people-group"></i>
                                                </div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Completed </h6>
                                                </div>
                                            </div>
                                        </a></div>
                                </div>
                                <div class="col-12">
                                    <div class="tab-content dark-field" id="horizontal-wizard-tabContent">
                                        <div class="tab-pane fade show active" id="wizard-info" role="tabpanel"
                                            aria-labelledby="wizard-info-tab">
                                            <form class="row g-3 needs-validation" novalidate="">
                                                <div class="col-xl-4 col-sm-6">
                                                    <label class="form-label" for="customFirstname">First Name<span
                                                            class="font-danger">*</span></label>
                                                    <input class="form-control" id="customFirstname" type="text"
                                                        placeholder="Enter first name" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6">
                                                    <label class="form-label" for="customLastname">Last Name<span
                                                            class="font-danger">*</span></label>
                                                    <input class="form-control" id="customLastname" type="text"
                                                        placeholder="Enter last name" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-xl-4 col-12">
                                                    <label class="form-label" for="customEmail">Email<span
                                                            class="font-danger">*</span></label>
                                                    <input class="form-control" id="customEmail" type="email"
                                                        required="" placeholder="edmin@example.com">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-xl-5 col-sm-4 form theme-form">
                                                    <label class="form-label" for="customState-wizard">State</label>
                                                    <select class="form-select" id="customState-wizard" required="">
                                                        <option selected="" disabled="" value="">Choose...
                                                        </option>
                                                        <option>USA </option>
                                                        <option>U.K </option>
                                                        <option>U.S</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please select a valid state.</div>
                                                </div>
                                                <div class="col-xl-3 col-sm-4">
                                                    <label class="form-label" for="custom-zipcode">Zip Code</label>
                                                    <input class="form-control" id="custom-zipcode" type="text"
                                                        required="">
                                                    <div class="invalid-feedback">Please provide a valid zip.</div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="customContact1">Contact Number</label>
                                                    <input class="form-control" id="customContact1" type="number"
                                                        placeholder="Enter number" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="checkbox-checked form-check-inline form-check">
                                                        <input class="form-check-input" id="invalid-check-wizard"
                                                            type="checkbox" value="" required="">
                                                        <label class="form-check-label mb-0"
                                                            for="invalid-check-wizard">Agree to terms and
                                                            conditions</label>
                                                        <div class="invalid-feedback">You must agree before submitting.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <button class="btn btn-primary">Continue</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="bank-wizard" role="tabpanel"
                                            aria-labelledby="bank-wizard-tab">
                                            <form class="row g-3 needs-validation" novalidate="">
                                                <div class="col-sm-6 bank-search">
                                                    <label class="form-label" for="aadharnumber-wizard">Aadhaar
                                                        Number<span class="font-danger">*</span></label>
                                                    <input class="form-control" id="aadharnumber-wizard" type="Search"
                                                        placeholder="xxxx xxxx xxxx xxxx" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-sm-6 bank-search">
                                                    <label class="form-label" for="pan-wizard">PAN<span
                                                            class="font-danger">*</span></label>
                                                    <input class="form-control" id="pan-wizard" type="Search"
                                                        placeholder="xxxxxxxxxx" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-12">
                                                    <h6>Choose from these popular banks</h6>
                                                    <div class="bank-selection">
                                                        <div class="form-check radio ps-0">
                                                            <ul class="radio-wrapper">
                                                                <li>
                                                                    <input class="form-check-input" id="radio-wizard-1"
                                                                        type="radio" name="radio2" value="option2">
                                                                    <label class="form-check-label"
                                                                        for="radio-wizard-1"><img class="img-fluid"
                                                                            src="{{ asset('assets/images/forms/hdfc.png') }}"
                                                                            alt="HDFC"><span>ABC BANK</span></label>
                                                                </li>
                                                                <li>
                                                                    <input class="form-check-input" id="radio-wizard-2"
                                                                        type="radio" name="radio2" value="option2"
                                                                        checked="">
                                                                    <label class="form-check-label"
                                                                        for="radio-wizard-2"><img class="img-fluid"
                                                                            src="{{ asset('assets/images/forms/Bank-of-Baroda.png') }}"
                                                                            alt="Bank-of-Baroda"><span>XYZ
                                                                            BANK</span></label>
                                                                </li>
                                                                <li>
                                                                    <input class="form-check-input" id="radio-wizard-3"
                                                                        type="radio" name="radio2" value="option2">
                                                                    <label class="form-check-label"
                                                                        for="radio-wizard-3"><img class="img-fluid"
                                                                            src="{{ asset('assets/images/forms/idbi.png') }}"
                                                                            alt="IDBI"><span>PQR BANK</span></label>
                                                                </li>
                                                                <li>
                                                                    <input class="form-check-input" id="radio-wizard-4"
                                                                        type="radio" name="radio2" value="option2">
                                                                    <label class="form-check-label"
                                                                        for="radio-wizard-4"><img class="img-fluid"
                                                                            src="{{ asset('assets/images/forms/rbl.png') }}"
                                                                            alt="RBL"><span>DEF BANK</span></label>
                                                                </li>
                                                                <li>
                                                                    <input class="form-check-input" id="radio-wizard-5"
                                                                        type="radio" name="radio2" value="option2">
                                                                    <label class="form-check-label"
                                                                        for="radio-wizard-5"><img class="img-fluid"
                                                                            src="{{ asset('assets/images/forms/us-bank.png') }}"
                                                                            alt="US"><span>MNO BANK</span></label>
                                                                </li>
                                                                <li>
                                                                    <input class="form-check-input" id="radio-wizard-6"
                                                                        type="radio" name="radio2" value="option2">
                                                                    <label class="form-check-label"
                                                                        for="radio-wizard-6"><img class="img-fluid"
                                                                            src="{{ asset('assets/images/forms/axis.png') }}"
                                                                            alt="Axis"><span>WXY BANK</span></label>
                                                                </li>
                                                                <li>
                                                                    <input class="form-check-input" id="radio-wizard-7"
                                                                        type="radio" name="radio2" value="option2">
                                                                    <label class="form-check-label"
                                                                        for="radio-wizard-7"><img class="img-fluid"
                                                                            src="{{ asset('assets/images/forms/SCB.png') }}"
                                                                            alt="SCB"><span>STD BANK</span></label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <button class="btn btn-primary">Previous</button>
                                                    <button class="btn btn-primary">Continue</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="inquiry-wizard" role="tabpanel"
                                            aria-labelledby="inquiry-wizard-tab">
                                            <form class="row g-3 needs-validation" novalidate="">
                                                <div class="col-12 inquiries-form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p class="f-w-500 mb-3">Select the option how you want to
                                                                receive important notifications.</p>
                                                            <div class="choose-option">
                                                                <div class="form-check form-check-inline radio">
                                                                    <label class="d-block" for="notification1">
                                                                        <input class="radio-primary me-2"
                                                                            id="notification1" type="radio"
                                                                            name="radio5" value="option1">Featured Items
                                                                    </label>
                                                                </div>
                                                                <div class="form-check form-check-inline radio">
                                                                    <label class="d-block" for="notification2">
                                                                        <input class="radio-primary me-2"
                                                                            id="notification2" type="radio"
                                                                            name="radio5" value="option2">Newsletters
                                                                    </label>
                                                                </div>
                                                                <div class="form-check form-check-inline radio">
                                                                    <label class="d-block" for="notification3">
                                                                        <input class="radio-primary me-2"
                                                                            id="notification3" type="radio"
                                                                            name="radio5" value="option3">Notifications
                                                                    </label>
                                                                </div>
                                                                <div class="form-check form-check-inline radio">
                                                                    <label class="d-block" for="notification4">
                                                                        <input class="radio-primary me-2"
                                                                            id="notification4" type="radio"
                                                                            name="radio5" value="option4">Blogs
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row g-3">
                                                                <div class="col-12">
                                                                    <label class="form-label">Email<span
                                                                            class="font-danger">*</span></label>
                                                                    <input class="form-control" type="text"
                                                                        placeholder="org@support.com" required="required">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label" for="customContact2">Contact
                                                                        Number</label>
                                                                    <input class="form-control" id="customContact2"
                                                                        type="number" placeholder="Enter number"
                                                                        required="">
                                                                    <div class="valid-feedback">Looks good!</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label f-w-500" for="FormControlTextarea2">If no,
                                                        could you please describe?</label>
                                                    <textarea class="form-control" id="FormControlTextarea2" rows="3"></textarea>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <button class="btn btn-primary">Previous</button>
                                                    <button class="btn btn-primary">Continue </button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="successful-wizard" role="tabpanel"
                                            aria-labelledby="successful-wizard-tab">
                                            <div class="form-completed"><img src="{{ asset('assets/images/gif/successful.gif') }}"
                                                    alt="successful">
                                                <h6>Successfully Completed</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Business vertical wizard</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                    </div>
                    <div class="card-body">
                        <div class="horizontal-wizard-wrapper vertical-options vertical-variations">
                            <div class="row g-3">
                                <div class="col-xl-3 main-horizontal-header">
                                    <div class="nav nav-pills horizontal-options" id="vertical-n-wizard-tab"
                                        role="tablist" aria-orientation="vertical"><a class="nav-link active"
                                            id="wizard-n-info-tab" data-bs-toggle="pill" href="#wizard-n-info"
                                            role="tab" aria-controls="wizard-n-info" aria-selected="true">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard bg-light-primary"><span>1</span></div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Choose account</h6>
                                                </div>
                                            </div>
                                        </a><a class="nav-link" id="bank-n-wizard-tab" data-bs-toggle="pill"
                                            href="#bank-n-wizard" role="tab" aria-controls="bank-n-wizard"
                                            aria-selected="false">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard bg-light-primary"><span>2</span></div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Business settings</h6>
                                                </div>
                                            </div>
                                        </a><a class="nav-link" id="inquiry-n-wizard-tab" data-bs-toggle="pill"
                                            href="#inquiry-n-wizard" role="tab" aria-controls="inquiry-n-wizard"
                                            aria-selected="false">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard bg-light-primary"><span>3</span></div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Contact details</h6>
                                                </div>
                                            </div>
                                        </a><a class="nav-link" id="pay-n-wizard-tab" data-bs-toggle="pill"
                                            href="#pay-n-wizard" role="tab" aria-controls="pay-n-wizard"
                                            aria-selected="false">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard bg-light-primary"><span>4</span></div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Pay details</h6>
                                                </div>
                                            </div>
                                        </a><a class="nav-link" id="successful-n-wizard-tab" data-bs-toggle="pill"
                                            href="#successful-n-wizard" role="tab"
                                            aria-controls="successful-n-wizard" aria-selected="false">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard bg-light-primary"><span>5</span></div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Completed</h6>
                                                </div>
                                            </div>
                                        </a></div>
                                </div>
                                <div class="col-xl-9">
                                    <div class="tab-content dark-field" id="vertical-n-wizard-tabContent">
                                        <div class="tab-pane fade show active" id="wizard-n-info" role="tabpanel"
                                            aria-labelledby="wizard-n-info-tab">
                                            <form class="row g-3 needs-validation" novalidate="">
                                                <div class="col-12">
                                                    <h4>Select the type of account</h4>
                                                    <p>It has long been known that distracting information on a page will
                                                        lose a reader's attention.</p>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check radio ps-0 select-account">
                                                        <ul class="radio-wrapper">
                                                            <li>
                                                                <input class="form-check-input" id="radioOptionWizard1"
                                                                    type="radio" name="radio2" value="option2">
                                                                <label class="form-check-label mb-0"
                                                                    for="radioOptionWizard1"><i
                                                                        class="fa fa-university"></i><span
                                                                        class="d-flex flex-column"><span>Business
                                                                        </span><span>Search your business information please
                                                                            check it</span></span></label>
                                                            </li>
                                                            <li>
                                                                <input class="form-check-input" id="radioOptionWizard2"
                                                                    type="radio" name="radio2" value="option2"
                                                                    checked="">
                                                                <label class="form-check-label mb-0"
                                                                    for="radioOptionWizard2"><i
                                                                        class="fa fa-user"></i><span
                                                                        class="d-flex flex-column"><span>Personal
                                                                        </span><span>Search your personal information please
                                                                            check it</span></span></label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <button class="btn btn-primary">Continue</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="bank-n-wizard" role="tabpanel"
                                            aria-labelledby="bank-n-wizard-tab">
                                            <form class="row g-3 needs-validation" novalidate="">
                                                <div class="col-md-6">
                                                    <label class="form-label" for="AccountName">Account Name<span
                                                            class="font-danger">*</span></label>
                                                    <input class="form-control" id="AccountName" type="text"
                                                        required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Email<span
                                                            class="font-danger">*</span></label>
                                                    <input class="form-control" type="text"
                                                        placeholder="org@superrito.com" required="required">
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label" for="example-description">Select a project
                                                        and write a description for it</label>
                                                    <textarea class="form-control" id="example-description" rows="3"></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <section class="main-upgrade">
                                                        <div><i class="fa fa-rocket"></i>
                                                            <h4 class="mb-2">Select team size with <span
                                                                    class="font-primary">projects</span></h4>
                                                            <p class="text-muted mb-2">Agile teams are cross-functional and
                                                                made up of 5-11 on a regular basis team member.</p>
                                                        </div>
                                                        <div class="variation-box">
                                                            <div class="selection-box">
                                                                <input type="checkbox">
                                                                <div class="custom--mega-checkbox">
                                                                    <ul class="flex-column">
                                                                        <li>Tivo </li>
                                                                        <li class="font-primary">2-3 Members </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="selection-box">
                                                                <input type="checkbox">
                                                                <div class="custom--mega-checkbox">
                                                                    <ul class="flex-column">
                                                                        <li>Edmin</li>
                                                                        <li class="font-primary">4-5 Members </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="selection-box">
                                                                <input type="checkbox">
                                                                <div class="custom--mega-checkbox">
                                                                    <ul class="flex-column">
                                                                        <li>Multikart</li>
                                                                        <li class="font-primary">2 Members </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="selection-box">
                                                                <input type="checkbox" checked="">
                                                                <div class="custom--mega-checkbox">
                                                                    <ul class="flex-column">
                                                                        <li>Roxo</li>
                                                                        <li class="font-primary">1 Members </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <button class="btn btn-primary">Previous</button>
                                                    <button class="btn btn-primary">Continue</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="inquiry-n-wizard" role="tabpanel"
                                            aria-labelledby="inquiry-n-wizard-tab">
                                            <form class="row g-3 needs-validation" novalidate="">
                                                <div class="col-12">
                                                    <h6>Contact details</h6>
                                                    <p>Please visit the documentation page if you require further
                                                        information.</p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="validationCustom-select">Organization
                                                        Name<span class="font-danger">*</span></label>
                                                    <input class="form-control" id="validationCustom-select"
                                                        type="text" placeholder="Gekko &amp; Co." required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label">Email<span
                                                            class="font-danger">*</span></label>
                                                    <input class="form-control" type="text"
                                                        placeholder="org@support.com" required="required">
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label" for="validationCustom-select">Join
                                                        organization type<span class="font-danger">*</span></label>
                                                    <select class="form-select f-w-400 f-14 text-gray"
                                                        aria-label="Default select example">
                                                        <option selected="" disabled>Join organization type</option>
                                                        <option value="1">Technology</option>
                                                        <option value="2">Culture</option>
                                                        <option value="3">NGO </option>
                                                        <option value="3">Environment</option>
                                                        <option value="3">Life cycle</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label" for="organizationDescription">Organization
                                                        description</label>
                                                    <textarea class="form-control" id="organizationDescription" placeholder="Share your problems and another issues"
                                                        required=""></textarea>
                                                    <div class="invalid-feedback">Please enter a message in the box.</div>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <button class="btn btn-primary">Previous</button>
                                                    <button class="btn btn-primary">Continue </button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="pay-n-wizard" role="tabpanel"
                                            aria-labelledby="pay-n-wizard-tab">
                                            <form class="row g-3 needs-validation" novalidate="">
                                                <div class="col-md-6">
                                                    <label class="form-label" for="cardHolder">Card Holder</label>
                                                    <input class="form-control" id="cardHolder" type="text"
                                                        required="">
                                                    <div class="invalid-feedback">Please enter your valid name</div>
                                                    <div class="valid-feedback">
                                                        Looks's Good!</div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label" for="cardNumber">Card Number</label>
                                                    <input class="form-control" id="cardNumber" type="text"
                                                        required="" placeholder="xxxx xxxx xxxx xxxx">
                                                    <div class="invalid-feedback">Please enter your valid number</div>
                                                    <div class="valid-feedback">
                                                        Looks's Good!</div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-3">
                                                        <div class="col-md-6">
                                                            <label class="form-label"
                                                                for="expiration">Expiration(MM/YY)</label>
                                                            <div class="row g-3">
                                                                <div class="col-md-6">
                                                                    <input class="form-control" id="expiration"
                                                                        type="number" required=""
                                                                        placeholder="xx/xx">
                                                                    <div class="invalid-feedback">Please enter your valid
                                                                        number</div>
                                                                    <div class="valid-feedback">
                                                                        Looks's Good!</div>
                                                                </div>
                                                                <div class="col-md-6 form theme-form">
                                                                    <select class="form-select f-w-400 f-14 text-gray"
                                                                        aria-label="Default select example">
                                                                        <option selected="" disabled>Year</option>
                                                                        <option value="1">2024</option>
                                                                        <option value="2">2024</option>
                                                                        <option value="3">2025</option>
                                                                        <option value="3">2026</option>
                                                                        <option value="3">2027</option>
                                                                        <option value="3">2028</option>
                                                                        <option value="3">2029</option>
                                                                        <option value="3">2030</option>
                                                                        <option value="3">2031</option>
                                                                        <option value="3">2032</option>
                                                                        <option value="3">2033</option>
                                                                        <option value="3">2034</option>
                                                                        <option value="3">2035</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="cvvNumber-1">CVV Number</label>
                                                            <input class="form-control" id="cvvNumber-1" type="text"
                                                                required="">
                                                            <div class="invalid-feedback">Please enter your valid number
                                                            </div>
                                                            <div class="valid-feedback">
                                                                Looks's Good!</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input" id="invalidCheckboxWizard"
                                                            type="checkbox" value="" required="">
                                                        <label class="form-check-label mb-0"
                                                            for="invalidCheckboxWizard">Agree to terms and
                                                            conditions</label>
                                                        <div class="invalid-feedback">You must agree before submitting.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <button class="btn btn-primary">Previous</button>
                                                    <button class="btn btn-primary">Continue </button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="successful-n-wizard" role="tabpanel"
                                            aria-labelledby="successful-n-wizard-tab">
                                            <div class="form-completed"><img src="{{ asset('assets/images/gif/successful.gif') }}"
                                                    alt="successful">
                                                <h6>Successfully Completed </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Custom vertical wizard</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                    </div>
                    <div class="card-body">
                        <div class="horizontal-wizard-wrapper vertical-options">
                            <div class="row g-3">
                                <div class="col-md-3 main-horizontal-header">
                                    <div class="nav nav-pills horizontal-options" id="vertical-wizard-tab" role="tablist"
                                        aria-orientation="vertical"><a class="nav-link active" id="wizard-v-info-tab"
                                            data-bs-toggle="pill" href="#wizard-v-info" role="tab"
                                            aria-controls="wizard-v-info" aria-selected="true">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard"><i class="fa fa-user"></i></div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Personal info</h6>
                                                </div>
                                            </div>
                                        </a><a class="nav-link" id="bank-v-wizard-tab" data-bs-toggle="pill"
                                            href="#bank-v-wizard" role="tab" aria-controls="bank-v-wizard"
                                            aria-selected="false">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard"><i class="fa fa-chain-broken"></i></div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Connect bank account</h6>
                                                </div>
                                            </div>
                                        </a><a class="nav-link" id="inquiry-v-wizard-tab" data-bs-toggle="pill"
                                            href="#inquiry-v-wizard" role="tab" aria-controls="inquiry-v-wizard"
                                            aria-selected="false">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard"><i class="fa-solid fa-people-group"></i>
                                                </div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Inquiries</h6>
                                                </div>
                                            </div>
                                        </a><a class="nav-link" id="successful-v-wizard-tab" data-bs-toggle="pill"
                                            href="#successful-v-wizard" role="tab"
                                            aria-controls="successful-v-wizard" aria-selected="false">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard"><i class="fa-solid fa-people-group"></i>
                                                </div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Completed </h6>
                                                </div>
                                            </div>
                                        </a></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="tab-content dark-field" id="vertical-wizard-tabContent">
                                        <div class="tab-pane fade show active" id="wizard-v-info" role="tabpanel"
                                            aria-labelledby="wizard-v-info-tab">
                                            <form class="row g-3 needs-validation" novalidate="">
                                                <div class="col-xxl-4 col-sm-6">
                                                    <label class="form-label" for="validation-firstname-wizard">First
                                                        name<span class="font-danger">*</span></label>
                                                    <input class="form-control" id="validation-firstname-wizard"
                                                        type="text" placeholder="Enter first name" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-xxl-4 col-sm-6">
                                                    <label class="form-label" for="validation-lastname-wizard">Last
                                                        name<span class="font-danger">*</span></label>
                                                    <input class="form-control" id="validation-lastname-wizard"
                                                        type="text" placeholder="Enter last name" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-xxl-4 col-md-6">
                                                    <label class="form-label" for="validation-email-wizard">Email<span
                                                            class="font-danger">*</span></label>
                                                    <input class="form-control" id="validation-email-wizard"
                                                        type="email" required="" placeholder="edmin@example.com">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-xxl-5 col-md-6 form theme-form">
                                                    <label class="form-label" for="validation-states">State</label>
                                                    <select class="form-select" id="validation-states" required="">
                                                        <option selected="" disabled="" value="">Choose...
                                                        </option>
                                                        <option>USA </option>
                                                        <option>U.K </option>
                                                        <option>U.S</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please select a valid state.</div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <label class="form-label" for="wizard-zipcode">Zip Code</label>
                                                    <input class="form-control" id="wizard-zipcode" type="text"
                                                        required="">
                                                    <div class="invalid-feedback">Please provide a valid zip.</div>
                                                </div>
                                                <div class="col-xxl-4 col-md-6">
                                                    <label class="form-label" for="contact-wizard">Contact Number</label>
                                                    <input class="form-control" id="contact-wizard" type="number"
                                                        placeholder="Enter number" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="checkbox-checked form-check-inline form-check">
                                                        <input class="form-check-input" id="validation-check-wizard"
                                                            type="checkbox" value="" required="">
                                                        <label class="form-check-label mb-0 d-block"
                                                            for="validation-check-wizard">Agree to terms and
                                                            conditions</label>
                                                        <div class="invalid-feedback">You must agree before submitting.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <button class="btn btn-primary">Continue</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="bank-v-wizard" role="tabpanel"
                                            aria-labelledby="bank-v-wizard-tab">
                                            <form class="row g-3 needs-validation" novalidate="">
                                                <div class="col-md-6 bank-search">
                                                    <label class="form-label" for="aadhar-number-wizard1">Aadhaar
                                                        Number<span class="font-danger">*</span></label>
                                                    <input class="form-control" id="aadhar-number-wizard1" type="Search"
                                                        placeholder="xxxx xxxx xxxx xxxx" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-md-6 bank-search">
                                                    <label class="form-label" for="pan-wizard-1">PAN<span
                                                            class="font-danger">*</span></label>
                                                    <input class="form-control" id="pan-wizard-1" type="Search"
                                                        placeholder="xxxxxxxxxx" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-12">
                                                    <h6>Choose from these popular banks</h6>
                                                    <div class="bank-selection">
                                                        <div class="form-check radio ps-0">
                                                            <ul class="radio-wrapper">
                                                                <li>
                                                                    <input class="form-check-input" id="abc-bank"
                                                                        type="radio" name="radio2" value="option2">
                                                                    <label class="form-check-label" for="abc-bank"><img
                                                                            src="{{ asset('assets/images/forms/hdfc.png') }}"
                                                                            alt="HDFC"><span>ABC BANK</span></label>
                                                                </li>
                                                                <li>
                                                                    <input class="form-check-input" id="xyz-bank"
                                                                        type="radio" name="radio2" value="option2"
                                                                        checked="">
                                                                    <label class="form-check-label" for="xyz-bank"><img
                                                                            src="{{ asset('assets/images/forms/Bank-of-Baroda.png') }}"
                                                                            alt="Bank-of-Baroda"><span>XYZ
                                                                            BANK</span></label>
                                                                </li>
                                                                <li>
                                                                    <input class="form-check-input" id="pqr-bank"
                                                                        type="radio" name="radio2" value="option2">
                                                                    <label class="form-check-label" for="pqr-bank"><img
                                                                            src="{{ asset('assets/images/forms/idbi.png') }}"
                                                                            alt="IDBI"><span>PQR BANK</span></label>
                                                                </li>
                                                                <li>
                                                                    <input class="form-check-input" id="def-bank"
                                                                        type="radio" name="radio2" value="option2">
                                                                    <label class="form-check-label" for="def-bank"><img
                                                                            src="{{ asset('assets/images/forms/rbl.png') }}"
                                                                            alt="RBL"><span>DEF BANK</span></label>
                                                                </li>
                                                                <li>
                                                                    <input class="form-check-input" id="mno-bank"
                                                                        type="radio" name="radio2" value="option2">
                                                                    <label class="form-check-label" for="mno-bank"><img
                                                                            src="{{ asset('assets/images/forms/us-bank.png') }}"
                                                                            alt="US"><span>MNO BANK</span></label>
                                                                </li>
                                                                <li>
                                                                    <input class="form-check-input" id="wxy-bank"
                                                                        type="radio" name="radio2" value="option2">
                                                                    <label class="form-check-label" for="wxy-bank"><img
                                                                            src="{{ asset('assets/images/forms/axis.png') }}"
                                                                            alt="Axis"><span>WXY BANK</span></label>
                                                                </li>
                                                                <li>
                                                                    <input class="form-check-input" id="std-bank"
                                                                        type="radio" name="radio2" value="option2">
                                                                    <label class="form-check-label" for="std-bank"><img
                                                                            src="{{ asset('assets/images/forms/SCB.png') }}"
                                                                            alt="SCB"><span>STD BANK</span></label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <button class="btn btn-primary">Previous</button>
                                                    <button class="btn btn-primary">Continue</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="inquiry-v-wizard" role="tabpanel"
                                            aria-labelledby="inquiry-v-wizard-tab">
                                            <form class="row g-3 needs-validation" novalidate="">
                                                <div class="col-12 inquiries-form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p class="f-w-500 mb-3">Select the option how you want to
                                                                receive important notifications.</p>
                                                            <div class="choose-option">
                                                                <div class="form-check form-check-inline radio ps-0">
                                                                    <label class="d-block" for="radioSelect1">
                                                                        <input class="radio-primary me-2"
                                                                            id="radioSelect1" type="radio"
                                                                            name="radio5" value="option1">Featured Items
                                                                    </label>
                                                                </div>
                                                                <div class="form-check form-check-inline radio ps-0">
                                                                    <label class="d-block" for="radioSelect2">
                                                                        <input class="radio-primary me-2"
                                                                            id="radioSelect2" type="radio"
                                                                            name="radio5" value="option2">Newsletters
                                                                    </label>
                                                                </div>
                                                                <div class="form-check form-check-inline radio ps-0">
                                                                    <label class="d-block" for="radioSelect3">
                                                                        <input class="radio-primary me-2"
                                                                            id="radioSelect3" type="radio"
                                                                            name="radio5" value="option3">Notifications
                                                                    </label>
                                                                </div>
                                                                <div class="form-check form-check-inline radio ps-0">
                                                                    <label class="d-block" for="radioSelect4">
                                                                        <input class="radio-primary me-2"
                                                                            id="radioSelect4" type="radio"
                                                                            name="radio5" value="option4">Blogs
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row g-3">
                                                                <div class="col-12">
                                                                    <label class="form-label">Email<span
                                                                            class="font-danger">*</span></label>
                                                                    <input class="form-control" type="text"
                                                                        placeholder="org@support.com" required="required">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label" for="customContact">Contact
                                                                        Number</label>
                                                                    <input class="form-control" id="customContact"
                                                                        type="number" placeholder="Enter number"
                                                                        required="">
                                                                    <div class="valid-feedback">Looks good!</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label f-w-500" for="formControlTextareaWizard">If
                                                        no, could you please describe?</label>
                                                    <textarea class="form-control" id="formControlTextareaWizard" rows="3"></textarea>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <button class="btn btn-primary">Previous</button>
                                                    <button class="btn btn-primary">Continue </button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="successful-v-wizard" role="tabpanel"
                                            aria-labelledby="successful-v-wizard-tab">
                                            <div class="form-completed"><img src="{{ asset('assets/images/gif/successful.gif') }}"
                                                    alt="successful">
                                                <h6>Successfully Completed </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Business horizontal wizard</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                    </div>
                    <div class="card-body">
                        <div class="horizontal-wizard-wrapper vertical-variations">
                            <div class="row g-3">
                                <div class="col-12 main-horizontal-header">
                                    <div class="nav nav-pills horizontal-options" id="business-n-wizard-tab"
                                        role="tablist" aria-orientation="vertical"><a class="nav-link active"
                                            id="business-n-info-tab" data-bs-toggle="pill" href="#business-n-info"
                                            role="tab" aria-controls="business-n-info" aria-selected="true">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard"><span>1</span></div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Choose account</h6>
                                                </div>
                                            </div>
                                        </a><a class="nav-link" id="business-bank-wizard-tab" data-bs-toggle="pill"
                                            href="#business-bank-wizard" role="tab"
                                            aria-controls="business-bank-wizard" aria-selected="false">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard"><span>2</span></div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Business settings</h6>
                                                </div>
                                            </div>
                                        </a><a class="nav-link" id="business-inquiry-wizard-tab" data-bs-toggle="pill"
                                            href="#business-inquiry-wizard" role="tab"
                                            aria-controls="business-inquiry-wizard" aria-selected="false">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard"><span>3</span></div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Contact details</h6>
                                                </div>
                                            </div>
                                        </a><a class="nav-link" id="business-pay-wizard-tab" data-bs-toggle="pill"
                                            href="#business-pay-wizard" role="tab"
                                            aria-controls="business-pay-wizard" aria-selected="false">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard"><span>4</span></div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Pay details</h6>
                                                </div>
                                            </div>
                                        </a><a class="nav-link" id="business-successful-wizard-tab" data-bs-toggle="pill"
                                            href="#business-successful-wizard" role="tab"
                                            aria-controls="business-successful-wizard" aria-selected="false">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard"><span>5</span></div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Completed</h6>
                                                </div>
                                            </div>
                                        </a></div>
                                </div>
                                <div class="col-12">
                                    <div class="tab-content dark-field" id="business-n-wizard-tabContent">
                                        <div class="tab-pane fade show active" id="business-n-info" role="tabpanel"
                                            aria-labelledby="business-n-info-tab">
                                            <form class="row g-3 needs-validation" novalidate="">
                                                <div class="col-12">
                                                    <h4>Select the type of account</h4>
                                                    <p>It has long been known that distracting information on a page will
                                                        lose a reader's attention.</p>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check radio ps-0 select-account">
                                                        <ul class="radio-wrapper">
                                                            <li>
                                                                <input class="form-check-input" id="radio-icon"
                                                                    type="radio" name="radio2" value="option2">
                                                                <label class="form-check-label mb-0" for="radio-icon"><i
                                                                        class="fa fa-university"></i><span
                                                                        class="d-flex flex-column"><span>Business
                                                                        </span><span>Search your business information please
                                                                            check it</span></span></label>
                                                            </li>
                                                            <li>
                                                                <input class="form-check-input" id="radio-icon4"
                                                                    type="radio" name="radio2" value="option2"
                                                                    checked="">
                                                                <label class="form-check-label mb-0"
                                                                    for="radio-icon4"><i class="fa fa-user"></i><span
                                                                        class="d-flex flex-column"><span>Personal
                                                                        </span><span>Search your personal information please
                                                                            check it</span></span></label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <button class="btn btn-primary">Continue</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="business-bank-wizard" role="tabpanel"
                                            aria-labelledby="business-bank-wizard-tab">
                                            <form class="row g-3 needs-validation" novalidate="">
                                                <div class="col-md-6">
                                                    <label class="form-label" for="validationAccountName">Account
                                                        Name<span class="font-danger">*</span></label>
                                                    <input class="form-control" id="validationAccountName"
                                                        type="text" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Email<span
                                                            class="font-danger">*</span></label>
                                                    <input class="form-control" type="text"
                                                        placeholder="org@superrito.com" required="required">
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label" for="FormControlTextarea-a">Select a
                                                        project and write a description for it</label>
                                                    <textarea class="form-control" id="FormControlTextarea-a" rows="3"></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <section class="main-upgrade">
                                                        <div><i class="fa fa-rocket"></i>
                                                            <h4 class="mb-2">Select team size with <span
                                                                    class="font-primary">projects</span></h4>
                                                            <p class="text-muted mb-2">Agile teams are cross-functional
                                                                and made up of 5-11 on a regular basis team member.</p>
                                                        </div>
                                                        <div class="variation-box">
                                                            <div class="selection-box">
                                                                <input type="checkbox">
                                                                <div class="custom--mega-checkbox">
                                                                    <ul class="flex-column">
                                                                        <li>Tivo </li>
                                                                        <li class="font-primary">2-3 Members </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="selection-box">
                                                                <input type="checkbox">
                                                                <div class="custom--mega-checkbox">
                                                                    <ul class="flex-column">
                                                                        <li>Edmin</li>
                                                                        <li class="font-primary">4-5 Members </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="selection-box">
                                                                <input type="checkbox">
                                                                <div class="custom--mega-checkbox">
                                                                    <ul class="flex-column">
                                                                        <li>Multikart</li>
                                                                        <li class="font-primary">2 Members </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="selection-box">
                                                                <input type="checkbox" checked="">
                                                                <div class="custom--mega-checkbox">
                                                                    <ul class="flex-column">
                                                                        <li>Roxo</li>
                                                                        <li class="font-primary">1 Members </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <button class="btn btn-primary">Previous</button>
                                                    <button class="btn btn-primary">Continue</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="business-inquiry-wizard" role="tabpanel"
                                            aria-labelledby="business-inquiry-wizard-tab">
                                            <form class="row g-3 needs-validation" novalidate="">
                                                <div class="col-12">
                                                    <h4>Contact details</h4>
                                                    <p>Please visit the documentation page if you require further
                                                        information.</p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="OrganizationName">Organization
                                                        Name<span class="font-danger">*</span></label>
                                                    <input class="form-control" id="OrganizationName" type="text"
                                                        placeholder="Gekko &amp; Co." required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label">Email<span
                                                            class="font-danger">*</span></label>
                                                    <input class="form-control" type="text"
                                                        placeholder="org@support.com" required="required">
                                                </div>
                                                <div class="col-12 form theme-form">
                                                    <label class="form-label" for="validationCustom-select">Join
                                                        organization type<span class="font-danger">*</span></label>
                                                    <select class="form-select f-w-400 f-14 text-gray"
                                                        aria-label="Default select example">
                                                        <option selected="" disabled>Join organization type</option>
                                                        <option value="1">Technology</option>
                                                        <option value="2">Culture</option>
                                                        <option value="3">NGO </option>
                                                        <option value="3">Environment</option>
                                                        <option value="3">Life cycle</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label" for="validationTextarea">Organization
                                                        description</label>
                                                    <textarea class="form-control" id="validationTextarea" placeholder="Share your problems and another issues"
                                                        required=""></textarea>
                                                    <div class="invalid-feedback">Please enter a message in the box.</div>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <button class="btn btn-primary">Previous</button>
                                                    <button class="btn btn-primary">Continue </button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="business-pay-wizard" role="tabpanel"
                                            aria-labelledby="business-pay-wizard-tab">
                                            <form class="row g-3 needs-validation" novalidate="">
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="cardHolder1">Card Holder</label>
                                                    <input class="form-control" id="cardHolder1" type="text"
                                                        required="">
                                                    <div class="invalid-feedback">Please enter your valid name</div>
                                                    <div class="valid-feedback">
                                                        Looks's Good!</div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="cardNumber12">Card Number</label>
                                                    <input class="form-control" id="cardNumber12" type="text"
                                                        required="" placeholder="xxxx xxxx xxxx xxxx">
                                                    <div class="invalid-feedback">Please enter your valid number</div>
                                                    <div class="valid-feedback">
                                                        Looks's Good!</div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-3">
                                                        <div class="col-md-6">
                                                            <label class="form-label"
                                                                for="validationCustom-d">Expiration(MM/YY)</label>
                                                            <div class="row g-3">
                                                                <div class="col-md-6">
                                                                    <input class="form-control" id="validationCustom-d"
                                                                        type="number" required=""
                                                                        placeholder="xx/xx">
                                                                    <div class="invalid-feedback">Please enter your valid
                                                                        number</div>
                                                                    <div class="valid-feedback">
                                                                        Looks's Good!</div>
                                                                </div>
                                                                <div class="col-md-6 form theme-form">
                                                                    <select class="form-select f-w-400 f-14 text-gray"
                                                                        aria-label="Default select example">
                                                                        <option selected="" disabled>Year</option>
                                                                        <option value="1">2024</option>
                                                                        <option value="2">2024</option>
                                                                        <option value="3">2025</option>
                                                                        <option value="3">2026</option>
                                                                        <option value="3">2027</option>
                                                                        <option value="3">2028</option>
                                                                        <option value="3">2029</option>
                                                                        <option value="3">2030</option>
                                                                        <option value="3">2031</option>
                                                                        <option value="3">2032</option>
                                                                        <option value="3">2033</option>
                                                                        <option value="3">2034</option>
                                                                        <option value="3">2035</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="cvvNumber-2">CVV
                                                                Number</label>
                                                            <input class="form-control" id="cvvNumber-2"
                                                                type="text" required="">
                                                            <div class="invalid-feedback">Please enter your valid number
                                                            </div>
                                                            <div class="valid-feedback">
                                                                Looks's Good!</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input" id="invalidCheck67"
                                                            type="checkbox" value="" required="">
                                                        <label class="form-check-label mb-0" for="invalidCheck67">Agree
                                                            to terms and conditions</label>
                                                        <div class="invalid-feedback">You must agree before submitting.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <button class="btn btn-primary">Previous</button>
                                                    <button class="btn btn-primary">Continue </button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="business-successful-wizard" role="tabpanel"
                                            aria-labelledby="business-successful-wizard-tab">
                                            <div class="form-completed"><img src="{{ asset('assets/images/gif/successful.gif') }}"
                                                    alt="successful">
                                                <h6>Successfully Completed </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
