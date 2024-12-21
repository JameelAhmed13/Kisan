@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Mega Options</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Controls</li>
                        <li class="breadcrumb-item active">Mega Options</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid mega-option">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Variation radio</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>radio</code><span>attribute through create
                                variation of radio designs.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xl-4 col-md-6">
                                <div class="card-wrapper default-border rounded-3 h-100 checkbox-checked">
                                    <h6 class="sub-title">Select your payment method</h6>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <label class="d-block">
                                                <input class="radio radio-primary" id="ptm11" type="radio"
                                                    name="radio1" value="option1">BOB
                                            </label>
                                        </div>
                                        <div class="payment-second"><img class="img-fluid"
                                                src="{{ asset('assets/images/ecommerce/card.png') }}" alt="card"></div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <label class="d-block">
                                                <input class="radio radio-primary" id="ptm22" type="radio"
                                                    name="radio1" value="option1" checked="">MasterCard
                                            </label>
                                        </div>
                                        <div class="payment-second"><img class="img-fluid"
                                                src="{{ asset('assets/images/ecommerce/mastercard.png') }}" alt="card"></div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <label class="d-block">
                                                <input class="radio radio-primary" id="ptm33" type="radio"
                                                    name="radio1" value="option1">Paypal
                                            </label>
                                        </div>
                                        <div class="payment-second"><img class="img-fluid"
                                                src="{{ asset('assets/images/ecommerce/paypal.png') }}" alt="card"></div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <label class="d-block">
                                                <input class="radio radio-primary" id="ptm44" type="radio"
                                                    name="radio1" value="option1">VISA
                                            </label>
                                        </div>
                                        <div class="payment-second"><img class="img-fluid"
                                                src="{{ asset('assets/images/ecommerce/visa.png') }}" alt="card"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card-wrapper default-border rounded-3 h-100 checkbox-checked">
                                    <h6 class="sub-title">What are the most important things to learn about web design?</h6>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <label class="d-block">
                                                <input class="radio radio-primary" id="ptm101" type="radio"
                                                    name="radio3" value="option1">A. HTML
                                            </label>
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <label class="d-block">
                                                <input class="radio radio-primary" id="ptm201" type="radio"
                                                    name="radio3" value="option1">B. CSS
                                            </label>
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <label class="d-block">
                                                <input class="radio radio-primary" id="ptm301" type="radio"
                                                    name="radio3" value="option1" checked="">C. Javascript
                                            </label>
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <label class="d-block">
                                                <input class="radio radio-primary" id="ptm401" type="radio"
                                                    name="radio3" value="option1">D. Above the all
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card-wrapper default-border rounded-3 h-100 checkbox-checked">
                                    <h6 class="sub-title">Radios With Creative Options & SVG Icons</h6>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <label class="d-block">
                                                <input class="radio radio-primary" id="ptm100" type="radio"
                                                    name="radio2" value="option1">The notification icon displayed new
                                                messages.
                                            </label>
                                        </div>
                                        <div class="payment-second">
                                            <svg class="feather stroke-danger">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#bell') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <label class="d-block">
                                                <input class="radio radio-primary" id="ptm200" type="radio"
                                                    name="radio2" value="option1">The download icon indicated completion.
                                            </label>
                                        </div>
                                        <div class="payment-second">
                                            <svg class="feather stroke-success">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#calendar') }}">
                                                </use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <label class="d-block">
                                                <input class="radio radio-primary" id="ptm300" type="radio"
                                                    name="radio2" value="option1" checked="">The tag icon allowed
                                                easy categorization.
                                            </label>
                                        </div>
                                        <div class="payment-second">
                                            <svg class="feather stroke-dark">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#tag') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <label class="d-block">
                                                <input class="radio radio-primary" id="ptm400" type="radio"
                                                    name="radio2" value="option1">The email icon was inaccessibly
                                                located.
                                            </label>
                                        </div>
                                        <div class="payment-second">
                                            <svg class="feather stroke-primary">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#mail') }}"></use>
                                            </svg>
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
                    <div class="card-header pb-0">
                        <h4>Variation checkbox</h4>
                        <p class="desc mb-0 mt-1"><span>We can create any creative design by
                                using</span><code>(type=checkbox)</code><span>attribute.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xl-4 col-md-5">
                                <div class="card-wrapper default-border rounded-3 h-100 checkbox-checked">
                                    <h6 class="sub-title">Which of the following activities do you enjoy doing in your free
                                        time?</h6>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <label class="d-block">
                                                <input class="checkbox checkbox-primary" id="check-a"
                                                    type="checkbox">Reading
                                            </label>
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <label class="d-block">
                                                <input class="checkbox checkbox-primary" id="check-b" type="checkbox"
                                                    checked="">Watching TV
                                            </label>
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <label class="d-block">
                                                <input class="checkbox checkbox-danger" id="check-c"
                                                    type="checkbox">Listening to music
                                            </label>
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <label class="d-block">
                                                <input class="checkbox checkbox-danger" id="check-d"
                                                    type="checkbox">Playing video games
                                            </label>
                                        </div>
                                    </div>
                                    <div class="payment-wrapper">
                                        <div class="payment-first">
                                            <label class="d-block">
                                                <input class="checkbox checkbox-primary" id="check-e"
                                                    type="checkbox">Painting/Drawing
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-7">
                                <div class="card-wrapper default-border rounded-3 h-100 checkbox-checked">
                                    <section class="main-upgrade">
                                        <div> <i class="fa fa-rocket"></i>
                                            <h5 class="mb-2">It&apos;s time to <span class="font-primary">upgrade</span>
                                            </h5>
                                            <p class="text-muted mb-2">Select the theme that best suits your requirements,
                                                and you're ready to go!</p>
                                        </div>
                                        <div class="variation-box">
                                            <div class="selection-box">
                                                <input id="feature1" type="checkbox">
                                                <div class="custom--mega-checkbox bg-light-primary">
                                                    <ul class="d-flex flex-column">
                                                        <li>Voxo</li>
                                                        <li class="font-primary">270 Sales</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="selection-box">
                                                <input id="feature2" type="checkbox">
                                                <div class="custom--mega-checkbox bg-light-primary">
                                                    <ul class="d-flex flex-column">
                                                        <li>Edmin</li>
                                                        <li class="font-primary">4.8K Sales</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="selection-box">
                                                <input id="feature3" type="checkbox">
                                                <div class="custom--mega-checkbox bg-light-primary">
                                                    <ul class="d-flex flex-column">
                                                        <li>Multikart </li>
                                                        <li class="font-primary">2.6k Sales</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="selection-box">
                                                <input id="feature4" type="checkbox" checked="">
                                                <div class="custom--mega-checkbox bg-light-primary">
                                                    <ul class="d-flex flex-column">
                                                        <li>Viho</li>
                                                        <li class="font-primary">2k Sales</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xxl-6 box-col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Default style</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span>This option is show by default you do not
                                need to add any extra class.</span></p>
                    </div>
                    <div class="card-body megaoptions-border-space-sm">
                        <form class="mega-inline">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20 pb-0">
                                            <label class="d-block" for="radio14">
                                                <input class="radio radio-border-primary radio-primary" id="radio14"
                                                    type="radio" name="radio1" value="option1">COD
                                            </label>
                                            <div class="flex-grow-1"><span
                                                    class="badge badge-primary pull-right digits">50 INR</span></div>
                                        </div><span class="p-20 pt-0">Estimated 2 Day Shipping ( Duties end tax may be due
                                            delivery )</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20 pb-0">
                                            <label class="d-block" for="radio13">
                                                <input class="radio radio-border-secondary radio-secondary" id="radio13"
                                                    type="radio" name="radio1" value="option1">Fast
                                            </label>
                                            <div class="flex-grow-1"><span
                                                    class="badge badge-secondary pull-right digits">100 INR</span></div>
                                        </div><span class="p-20 pt-0">Estimated 1 Day Shipping ( Duties end tax may be due
                                            delivery )</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary m-r-15" type="submit">Submit</button>
                        <button class="btn bg-light" type="submit">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xxl-6 box-col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Without borders style</h4>
                        <p class="desc mb-0 mt-1"><span>By adding</span><code>.plain-style-*.mega-inline-*</code><span>You
                                can archive this style</span></p>
                    </div>
                    <div class="card-body">
                        <form class="mega-inline plain-style">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20 pb-0">
                                            <label class="d-block" for="checkbox11">
                                                <input class="checkbox checkbox-border-warning checkbox-warning"
                                                    id="checkbox11" type="checkbox" checked="">$39
                                            </label>
                                            <div class="flex-grow-1"><span
                                                    class="badge badge-warning pull-right digits">100 MBPS</span></div>
                                        </div><span class="p-20 pt-0">Plans for 2/4/6 months are offered to new
                                            clients.</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20 pb-0">
                                            <label class="d-block" for="checkbox22">
                                                <input class="checkbox checkbox-border-info checkbox-info" id="checkbox22"
                                                    type="checkbox">$50
                                            </label>
                                            <div class="flex-grow-1"><span
                                                    class="badge badge-info pull-right digits">Hired</span></div>
                                        </div><span class="p-20 pt-0">Plans for 2 years projects offered to new
                                            clients.</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-warning m-r-15" type="submit">Submit</button>
                        <button class="btn btn-light-warning" type="submit">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xxl-6 box-col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Solid border style</h4>
                        <p class="desc mb-0 mt-1"><span>Use
                                the</span><code>.default-border-style-*.mega-inline-*</code><span>you can archive this
                                style.</span></p>
                    </div>
                    <div class="card-body megaoptions-border-space-sm checkbox-checked">
                        <form class="mega-inline default-border-style">
                            <div class="row flex-column">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="p-20">
                                            <div class="form-check">
                                                <input class="form-check-input" id="flexRadioDefault1" type="radio"
                                                    name="flexRadioDefault">
                                                <label class="form-check-label" for="flexRadioDefault1"> <span
                                                        class="flex-grow-1"><span class="d-flex list-behavior-1"><span
                                                                class="flex-shrink-0"><img class="tab-img img-fluid"
                                                                    src="{{ asset('assets/images/blog/img.png') }}"
                                                                    alt="home"></span><span class="flex-grow-1"> <span
                                                                    class="mb-0">We provide end to end digital solutions,
                                                                    right from designing your website/application
                                                                    development: Domain, Web Hosting, Email Hosting
                                                                    Registration.</span></span></span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="p-20">
                                            <div class="form-check">
                                                <input class="form-check-input" id="flexRadioDefault2" type="radio"
                                                    name="flexRadioDefault" checked="">
                                                <label class="form-check-label" for="flexRadioDefault2"><span
                                                        class="flex-grow-1"><span class="d-flex list-behavior-1"><span
                                                                class="flex-shrink-0"> <img class="tab-img img-fluid"
                                                                    src="{{ asset('assets/images/blog/blog.jpg') }}"
                                                                    alt="home"></span><span class="flex-grow-1"><span
                                                                    class="mb-0">When someone visits your homepage, your
                                                                    design should inspire them to stay. Therefore, your
                                                                    value proposition should be established on the homepage
                                                                    for visitors.</span></span></span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary m-r-15" type="submit">Submit</button>
                        <button class="btn bg-light" type="submit">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xxl-6 box-col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Offer style border</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.offer-style -*.mega-inline-*</code><span>you
                                can archive this style.</span></p>
                    </div>
                    <div class="card-body megaoptions-border-space-sm checkbox-checked">
                        <form class="mega-inline offer-style">
                            <div class="row flex-column">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="p-20">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="inlineCheckbox1" type="checkbox"
                                                    value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1"> <span
                                                        class="flex-grow-1"><span class="d-flex list-behavior-1"><span
                                                                class="flex-shrink-0"><img class="tab-img img-fluid"
                                                                    src="{{ asset('assets/images/email-template/11.jpg') }}"
                                                                    alt="fruits"></span><span class="flex-grow-1"> <span
                                                                    class="mb-0">Fruits are an essential part of a
                                                                    healthy diet, and offer many health benefits. They're
                                                                    packed with vitamins, minerals, and fiber, which can
                                                                    help improve
                                                                    digestion.</span></span></span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="p-20">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="inlineCheckbox2" type="checkbox"
                                                    checked="">
                                                <label class="form-check-label" for="inlineCheckbox2"> <span
                                                        class="flex-grow-1"><span class="d-flex list-behavior-1"><span
                                                                class="flex-shrink-0"> <img class="tab-img img-fluid"
                                                                    src="{{ asset('assets/images/email-template/10.jpg') }}"
                                                                    alt="flowers"></span><span class="flex-grow-1"><span
                                                                    class="mb-0">Flowers have long been used to express
                                                                    feelings and sentiments, and each bloom has its own
                                                                    distinct significance. For instance, while daisies
                                                                    signify innocence and
                                                                    purity.</span></span></span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-success m-r-15" type="submit">Submit</button>
                        <button class="btn btn-light-success" type="submit">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Inline style</h4>
                        <p class="desc mb-0 mt-1"><span>For Create inline megaoption
                                add</span><code>.mega-inline</code><span>class in form tag</span></p>
                    </div>
                    <div class="card-body megaoptions-border-space-sm">
                        <form class="mega-inline">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20 pb-0">
                                            <label class="d-block" for="radio19">
                                                <input class="radio radio-border-warning radio-warning" id="radio19"
                                                    type="radio" name="radio1" value="option1">COD
                                            </label>
                                            <div class="flex-grow-1"><span
                                                    class="badge badge-warning pull-right digits">50 INR</span></div>
                                        </div><span class="p-20 pt-0">Estimated 14-20 Day Shipping ( Duties end taxes may
                                            be due upon delivery )</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20 pb-0">
                                            <label class="d-block" for="radio20">
                                                <input class="radio radio-border-secondary radio-secondary" id="radio20"
                                                    type="radio" name="radio1" value="option1">Fast
                                            </label>
                                            <div class="flex-grow-1"><span
                                                    class="badge badge-secondary pull-right digits">100 INR</span></div>
                                        </div><span class="p-20 pt-0">Estimated 1 Day Shipping ( Duties end taxes may be
                                            due upon delivery )</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20 pb-0">
                                            <label class="d-block" for="radio21">
                                                <input class="radio radio-border-secondary radio-secondary" id="radio21"
                                                    type="radio" name="radio1" value="option1">Standard
                                            </label>
                                            <div class="flex-grow-1"><span
                                                    class="badge badge-secondary pull-right digits">80 INR</span></div>
                                        </div><span class="p-20 pt-0">Estimated 3 Day Shipping ( Duties end taxes may be
                                            due upon delivery )</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20 pb-0">
                                            <label class="d-block" for="radio22">
                                                <input class="radio radio-border-warning radio-warning" id="radio22"
                                                    type="radio" name="radio1" value="option1">Local
                                            </label>
                                            <div class="flex-grow-1"><span
                                                    class="badge badge-warning pull-right digits">Free</span></div>
                                        </div><span class="p-20 pt-0">Estimated 15 Day Shipping ( Duties end taxes may be
                                            due upon delivery )</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-warning m-r-15" type="submit">Submit</button>
                        <button class="btn btn-light-warning" type="submit">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xxl-6 box-col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Vertical style</h4>
                        <p class="desc mb-0 mt-1"><span>vertical style in mega-options. Use
                                the</span><code>.mega-vertical</code><span>class through created vertical alignments.</span>
                        </p>
                    </div>
                    <div class="card-body">
                        <form class="mega-vertical">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="mega-title m-b-5">Delivery Option</p>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20 pb-0">
                                            <label class="d-block" for="radio23">
                                                <input class="radio radio-border-primary radio-primary" id="radio23"
                                                    type="radio" name="radio5" value="option1">COD
                                            </label>
                                            <div class="flex-grow-1"><span
                                                    class="badge badge-primary pull-right digits">50 INR</span></div>
                                        </div><span class="p-20 pt-0">Estimated 10 to 15 Day Shipping ( Duties end tax may
                                            be due delivery )</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20 pb-0">
                                            <label class="d-block" for="radio24">
                                                <input class="radio radio-border-secondary radio-secondary" id="radio24"
                                                    type="radio" name="radio5" value="option1">Fast
                                            </label>
                                            <div class="flex-grow-1"><span
                                                    class="badge badge-secondary pull-right digits">100 INR</span></div>
                                        </div><span class="p-20 pt-0">Estimated 10 to 12 Day Shipping ( Duties end tax may
                                            be due delivery )</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20 pb-0">
                                            <label class="d-block" for="radio25">
                                                <input class="radio radio-border-success radio-success" id="radio25"
                                                    type="radio" name="radio5" value="option1">STANDARD
                                            </label>
                                            <div class="flex-grow-1"><span
                                                    class="badge badge-success pull-right digits">80 INR</span></div>
                                        </div><span class="p-20 pt-0">Estimated 3 to 5 Day Shipping ( Duties end tax may be
                                            due delivery )</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="d-flex p-20 pb-0">
                                            <label class="d-block" for="radio5">
                                                <input class="radio radio-border-info radio-info" id="radio5"
                                                    type="radio" name="radio5" value="option1">LOCAL
                                            </label>
                                            <div class="flex-grow-1"><span
                                                    class="badge badge-info pull-right digits">Free</span></div>
                                        </div><span class="p-20 pt-0">Estimated 3 to 5 Day Shipping ( Duties end taxes may
                                            be due upon delivery )</span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <p class="mega-title m-b-5">Buying Option</p>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card mb-0">
                                        <div class="d-flex p-20 pb-0">
                                            <label class="d-block" for="radio26">
                                                <input class="radio radio-border-warning radio-warning" id="radio26"
                                                    type="radio" name="radio7" value="option1"
                                                    checked="">Pixelstrap
                                            </label>
                                            <div class="flex-grow-1"><span
                                                    class="badge badge-warning pull-right digits">250 INR</span></div>
                                        </div><span class="p-20 pt-0 rating-star-wrapper"><i
                                                class="icofont icofont-star font-warning"></i><i
                                                class="icofont icofont-star font-warning"></i><i
                                                class="icofont icofont-star font-warning"></i><i
                                                class="icofont icofont-star font-warning"></i><i
                                                class="icofont icofont-star font-warning m-r-5"></i>5 start rating</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card mb-0">
                                        <div class="d-flex p-20 pb-0">
                                            <label class="d-block" for="radio27">
                                                <input class="radio radio-border-danger radio-danger" id="radio27"
                                                    type="radio" name="radio7" value="option1">Multikart
                                            </label>
                                            <div class="flex-grow-1"><span
                                                    class="badge badge-danger pull-right digits">150 INR</span></div>
                                        </div><span class="p-20 pt-0 rating-star-wrapper"><i
                                                class="icofont icofont-star font-warning"></i><i
                                                class="icofont icofont-star font-warning"></i><i
                                                class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i
                                                class="icofont icofont-star m-r-5"></i>2 start rating</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary m-r-15" type="submit">Submit</button>
                        <button class="btn bg-light" type="submit">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xxl-6 box-col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Horizontal style</h4>
                        <p class="desc mb-0 mt-1"><span>horizontal style in mega-options. Use
                                the</span><code>.mega-horizontal</code><span>class through created horizontal
                                alignments.</span></p>
                    </div>
                    <div class="card-body">
                        <form class="mega-horizontal">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mega-title">Delivery Option</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="card">
                                        <div class="d-flex p-20 pb-0">
                                            <label class="d-block" for="radio30">
                                                <input class="radio radio-border-primary radio-primary" id="radio30"
                                                    type="radio" name="radio22" value="option1">COD
                                            </label>
                                            <div class="flex-grow-1"><span
                                                    class="badge badge-primary pull-right digits">50 INR</span></div>
                                        </div><span class="p-20 pt-0">Estimated 5 Day Shipping ( Duties end tax may be due
                                            delivery )</span>
                                    </div>
                                </div>
                                <div class="col-sm-9 offset-sm-3">
                                    <div class="card">
                                        <div class="d-flex p-20 pb-0">
                                            <label class="d-block" for="radio31">
                                                <input class="radio radio-border-secondary radio-secondary" id="radio31"
                                                    type="radio" name="radio22" value="option1" checked="">Fast
                                            </label>
                                            <div class="flex-grow-1"><span
                                                    class="badge badge-secondary pull-right digits">100 INR</span></div>
                                        </div><span class="p-20 pt-0">Estimated 1 Day Shipping ( Duties end tax may be due
                                            delivery )</span>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <p class="mega-title">Buying Option</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="card">
                                        <div class="d-flex p-20 pb-0">
                                            <label class="d-block" for="radio32">
                                                <input class="radio radio-border-success radio-success" id="radio32"
                                                    type="radio" name="radio23" value="option1">Pixelstrap
                                            </label>
                                            <div class="flex-grow-1"><span
                                                    class="badge badge-success pull-right digits">250 INR</span></div>
                                        </div><span class="p-20 pt-0 rating-star-wrapper"><i
                                                class="icofont icofont-star font-warning"></i><i
                                                class="icofont icofont-star font-warning"></i><i
                                                class="icofont icofont-star font-warning"></i><i
                                                class="icofont icofont-star font-warning"></i><i
                                                class="icofont icofont-star font-warning m-r-5"></i>5 start rating</span>
                                    </div>
                                </div>
                                <div class="col-sm-9 offset-sm-3">
                                    <div class="card mb-0">
                                        <div class="d-flex p-20 pb-0">
                                            <label class="d-block" for="radio33">
                                                <input class="radio radio-border-info radio-info" id="radio33"
                                                    type="radio" name="radio23" value="option1" checked="">Tivo
                                            </label>
                                            <div class="flex-grow-1"><span class="badge badge-info pull-right digits">150
                                                    INR</span></div>
                                        </div><span class="p-20 pt-0 rating-star-wrapper"><i
                                                class="icofont icofont-star font-warning"></i><i
                                                class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i
                                                class="icofont icofont-star"></i><i
                                                class="icofont icofont-star m-r-5"></i>1 start rating</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary m-r-15" type="submit">Submit</button>
                        <button class="btn bg-light" type="submit">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
@endsection
