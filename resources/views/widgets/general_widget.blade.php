@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/apexcharts/dist/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/swiper/swiper-bundle.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>General</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Widgets</li>
                        <li class="breadcrumb-item active">General</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid general-widget">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <!-- Order Delivery-->
                    <div class="col-md-4">
                        <div class="card progress-items">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <div class="d-flex gap-2">
                                            <h5 class="f-18 font-light">Total Sale</h5>
                                            <div class="badge align-items-center d-flex badge-light-danger">
                                                <svg class="feather me-1 pt-0 stroke-danger">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-up-right') }}">
                                                    </use>
                                                </svg><span class="f-w-500">3.4%</span>
                                            </div>
                                        </div>
                                        <h3 class="f-26 f-w-600 mt-3">$ 12,463</h3>
                                    </div>
                                    <div class="flex-shrink-0 bg-light-primary">
                                        <svg class="svg-w-23 fill-primary">
                                            <use href="{{ asset('assets/svg/iconly-sprite.svg#Product-discount') }}"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body progress-card pt-0">
                                <div>
                                    <p class="f-w-500">20% since Last Month</p>
                                </div>
                                <div class="order-chart">
                                    <div class="chart" id="sale-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card progress-items">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <div class="d-flex gap-2">
                                            <h5 class="f-18 font-light">New Orders</h5>
                                            <div class="badge align-items-center d-flex badge-light-success">
                                                <svg class="feather me-1 pt-0 stroke-success">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-down-right') }}">
                                                    </use>
                                                </svg><span class="f-w-500">4.5%</span>
                                            </div>
                                        </div>
                                        <h3 class="f-26 f-w-600 mt-3">$ 51,325</h3>
                                    </div>
                                    <div class="flex-shrink-0 bg-light-secondary">
                                        <svg class="svg-w-30 fill-secondary">
                                            <use href="{{ asset('assets/svg/iconly-sprite.svg#order-product') }}"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body progress-card pt-0">
                                <div>
                                    <p class="f-w-500">14% since Last Month</p>
                                </div>
                                <div class="order-chart">
                                    <div class="chart" id="order-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card progress-items">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <div class="d-flex gap-2">
                                            <h5 class="f-18 font-light">Order Delivery</h5>
                                            <div class="badge align-items-center d-flex badge-light-danger">
                                                <svg class="feather me-1 pt-0 stroke-danger">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-up-right') }}">
                                                    </use>
                                                </svg><span class="f-w-500">2.3%</span>
                                            </div>
                                        </div>
                                        <h3 class="f-26 f-w-600 mt-3">$ 32,587</h3>
                                    </div>
                                    <div class="flex-shrink-0 bg-light-tertiary">
                                        <svg class="svg-w-31 fill-tertiary">
                                            <use href="{{ asset('assets/svg/iconly-sprite.svg#delivery-van') }}"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body progress-card pt-0">
                                <div>
                                    <p class="f-w-500">10% since Last Month</p>
                                </div>
                                <div class="order-chart">
                                    <div class="chart" id="delivery-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card product-offer">
                    <div class="card-header">
                        <h4>Product Offer</h4>
                        <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown01" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown01"><a
                                    class="dropdown-item" href="#">Weekly</a><a class="dropdown-item"
                                    href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item text-center"><img class="img-fluid"
                                            src="{{ asset('assets/images/dashboard2/headphone.png') }}"
                                            alt=""><img class="product-gif img-fluid"
                                            src="{{ asset('assets/images/gif/new.gif') }}" alt="">
                                        <div class="product-content">
                                            <h4><a class="f-18" href="{{ route('admin.product') }}">Wireless Apple Airpods</a></h4>
                                            <h5 class="font-primary f-w-600 f-16 mt-1">$130.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item text-center"><img class="img-fluid"
                                            src="{{ asset('assets/images/dashboard2/9.png') }}" alt=""><img
                                            class="product-gif img-fluid" src="{{ asset('assets/images/gif/new.gif') }}"
                                            alt="">
                                        <div class="product-content">
                                            <h4><a class="f-18" href="{{ route('admin.product') }}">Wireless Apple Airpods</a></h4>
                                            <h5 class="font-primary f-w-600 f-16 mt-1">$130.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item text-center"><img class="img-fluid"
                                            src="{{ asset('assets/images/dashboard2/7.png') }}" alt=""><img
                                            class="product-gif img-fluid" src="{{ asset('assets/images/gif/new.gif') }}"
                                            alt="">
                                        <div class="product-content">
                                            <h4><a class="f-18" href="{{ route('admin.product') }}">Wireless Apple Airpods</a></h4>
                                            <h5 class="font-primary f-w-600 f-16 mt-1">$130.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <!-- Schedule menu-->
                <div class="card schedule-card">
                    <div class="card-header pb-0">
                        <h4>Schedule Time</h4>
                        <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown05" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown05"><a
                                    class="dropdown-item" href="#">Weekly</a><a class="dropdown-item"
                                    href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="d-flex justify-content-between mb-3">
                            <h5>Aug 2024</h5>
                            <div class="d-flex align-items-center gap-2 monthly-time">
                                <h5 class="font-light">Month </h5>
                                <h5 class="font-light">Year</h5>
                            </div>
                        </div>
                        <ul class="schedule-wrapper nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="mon-tab" data-bs-toggle="tab"
                                    href="#mon" role="tab" aria-controls="mon" aria-selected="false"><span>Mo
                                    </span>
                                    <h6>01</h6>
                                </a></li>
                            <li class="nav-item"><a class="nav-link" id="tue-tab" data-bs-toggle="tab" href="#tue"
                                    role="tab" aria-controls="tue" aria-selected="true"><span>Tu </span>
                                    <h6>02</h6>
                                </a></li>
                            <li class="nav-item"><a class="nav-link" id="wed-tab" data-bs-toggle="tab" href="#wed"
                                    role="tab" aria-controls="wed" aria-selected="false"><span>We </span>
                                    <h6>03</h6>
                                </a></li>
                            <li class="nav-item"><a class="nav-link" id="thu-tab" data-bs-toggle="tab" href="#thu"
                                    role="tab" aria-controls="thu" aria-selected="false"><span>Th </span>
                                    <h6>04</h6>
                                </a></li>
                            <li class="nav-item"><a class="nav-link" id="frd-tab" data-bs-toggle="tab" href="#frd"
                                    role="tab" aria-controls="frd" aria-selected="true"><span>Fr </span>
                                    <h6>05</h6>
                                </a></li>
                            <li class="nav-item"><a class="nav-link font-primary" id="sat-tab" data-bs-toggle="tab"
                                    href="#sat" role="tab" aria-controls="sat" aria-selected="false"><span>Sa
                                    </span>
                                    <h6>06</h6>
                                </a></li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="mon" role="tabpanel"
                                aria-labelledby="mon-tab">
                                <ul class="activity-update">
                                    <li class="d-flex align-items-center b-l-primary">
                                        <div class="flex-grow-1"> <span>10:00 to 10:20 am</span>
                                            <h5>Mobile Application Release</h5>
                                            <h6>Hannah</h6>
                                        </div>
                                        <div class="flex-shrink-0"> <img class="img-40 b-r-10"
                                                src="{{ asset('assets/images/avatar/11.jpg') }}" alt=""></div>
                                    </li>
                                    <li class="d-flex align-items-center b-l-secondary">
                                        <div class="flex-grow-1"> <span>12:00 to 01:45 am</span>
                                            <h5>General Meeting</h5>
                                            <h6>Madeleine Lisa</h6>
                                        </div>
                                        <div class="flex-shrink-0"> <img class="img-40 b-r-10"
                                                src="{{ asset('assets/images/avatar/1.jpg') }}" alt=""></div>
                                    </li>
                                    <li class="d-flex align-items-center b-l-tertiary">
                                        <div class="flex-grow-1"> <span>06:00 to 11:30 am</span>
                                            <h5>Client Visit</h5>
                                            <h6>Hemmings Edmunds</h6>
                                        </div>
                                        <div class="flex-shrink-0"> <img class="img-40 b-r-10"
                                                src="{{ asset('assets/images/avatar/3.jpg') }}" alt=""></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tue" role="tabpanel" aria-labelledby="tue-tab">
                                <ul class="activity-update">
                                    <li class="d-flex align-items-center b-l-info">
                                        <div class="flex-grow-1"> <span>12:00 to 02:20 am</span>
                                            <h5>What`s the project report update?</h5>
                                            <h6>Loie Fenter</h6>
                                        </div>
                                        <div class="flex-shrink-0"> <img class="img-40 b-r-10"
                                                src="{{ asset('assets/images/avatar/2.jpg') }}" alt=""></div>
                                    </li>
                                    <li class="d-flex align-items-center b-l-success">
                                        <div class="flex-grow-1"> <span>04:00 to 08:20 am</span>
                                            <h5>James created changelog page</h5>
                                            <h6>Anna Catmire</h6>
                                        </div>
                                        <div class="flex-shrink-0"> <img class="img-40 b-r-10"
                                                src="{{ asset('assets/images/avatar/4.jpg') }}" alt=""></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="wed" role="tabpanel" aria-labelledby="wed-tab">
                                <ul class="activity-update">
                                    <li class="d-flex align-items-center b-l-danger">
                                        <div class="flex-grow-1"> <span>09:00 to 02:20 am</span>
                                            <h5>Dima phizeg edited ACME 2.4</h5>
                                            <h6>Susan Connor</h6>
                                        </div>
                                        <div class="flex-shrink-0"> <img class="img-40 b-r-10"
                                                src="{{ asset('assets/images/avatar/5.jpg') }}" alt=""></div>
                                    </li>
                                    <li class="d-flex align-items-center b-l-dark">
                                        <div class="flex-grow-1"> <span>10:00 to 01:45 am</span>
                                            <h5>Complete the medical ui system idea.</h5>
                                            <h6>Jeff Johnson</h6>
                                        </div>
                                        <div class="flex-shrink-0"> <img class="img-40 b-r-10"
                                                src="{{ asset('assets/images/avatar/6.jpg') }}" alt=""></div>
                                    </li>
                                    <li class="d-flex align-items-center b-l-warning">
                                        <div class="flex-grow-1"> <span>04:00 to 10:30 am</span>
                                            <h5>Make a new landing page.</h5>
                                            <h6>Roger Lum</h6>
                                        </div>
                                        <div class="flex-shrink-0"> <img class="img-40 b-r-10"
                                                src="{{ asset('assets/images/avatar/9.jpg') }}" alt=""></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="thu" role="tabpanel" aria-labelledby="thu-tab">
                                <ul class="activity-update">
                                    <li class="d-flex align-items-center b-l-primary">
                                        <div class="flex-grow-1"> <span>10:00 to 10:20 am</span>
                                            <h5>Mobile Application Release</h5>
                                            <h6>Hannah</h6>
                                        </div>
                                        <div class="flex-shrink-0"> <img class="img-40 b-r-10"
                                                src="{{ asset('assets/images/avatar/11.jpg') }}" alt=""></div>
                                    </li>
                                    <li class="d-flex align-items-center b-l-secondary">
                                        <div class="flex-grow-1"> <span>12:00 to 01:45 am</span>
                                            <h5>General Meeting</h5>
                                            <h6>Madeleine Lisa</h6>
                                        </div>
                                        <div class="flex-shrink-0"> <img class="img-40 b-r-10"
                                                src="{{ asset('assets/images/avatar/1.jpg') }}" alt=""></div>
                                    </li>
                                    <li class="d-flex align-items-center b-l-tertiary">
                                        <div class="flex-grow-1"> <span>06:00 to 11:30 am</span>
                                            <h5>Client Visit</h5>
                                            <h6>Hemmings Edmunds</h6>
                                        </div>
                                        <div class="flex-shrink-0"> <img class="img-40 b-r-10"
                                                src="{{ asset('assets/images/avatar/3.jpg') }}" alt=""></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="frd" role="tabpanel" aria-labelledby="frd-tab">
                                <ul class="activity-update">
                                    <li class="d-flex align-items-center b-l-info">
                                        <div class="flex-grow-1"> <span>12:00 to 02:20 am</span>
                                            <h5>What`s the project report update?</h5>
                                            <h6>Loie Fenter</h6>
                                        </div>
                                        <div class="flex-shrink-0"> <img class="img-40 b-r-10"
                                                src="{{ asset('assets/images/avatar/2.jpg') }}" alt=""></div>
                                    </li>
                                    <li class="d-flex align-items-center b-l-success">
                                        <div class="flex-grow-1"> <span>04:00 to 08:20 am</span>
                                            <h5>James created changelog page</h5>
                                            <h6>Anna Catmire</h6>
                                        </div>
                                        <div class="flex-shrink-0"> <img class="img-40 b-r-10"
                                                src="{{ asset('assets/images/avatar/4.jpg') }}" alt=""></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="sat" role="tabpanel" aria-labelledby="sat-tab">
                                <ul class="activity-update">
                                    <li class="d-flex align-items-center b-l-danger">
                                        <div class="flex-grow-1"> <span>09:00 to 02:20 am</span>
                                            <h5>Dima phizeg edited ACME 2.4</h5>
                                            <h6>Susan Connor</h6>
                                        </div>
                                        <div class="flex-shrink-0"> <img class="img-40 b-r-10"
                                                src="{{ asset('assets/images/avatar/5.jpg') }}" alt=""></div>
                                    </li>
                                    <li class="d-flex align-items-center b-l-dark">
                                        <div class="flex-grow-1"> <span>10:00 to 01:45 am</span>
                                            <h5>Complete the medical ui system idea.</h5>
                                            <h6>Jeff Johnson</h6>
                                        </div>
                                        <div class="flex-shrink-0"> <img class="img-40 b-r-10"
                                                src="{{ asset('assets/images/avatar/6.jpg') }}" alt=""></div>
                                    </li>
                                    <li class="d-flex align-items-center b-l-warning">
                                        <div class="flex-grow-1"> <span>04:00 to 10:30 am</span>
                                            <h5>Make a new landing page.</h5>
                                            <h6>Roger Lum</h6>
                                        </div>
                                        <div class="flex-shrink-0"> <img class="img-40 b-r-10"
                                                src="{{ asset('assets/images/avatar/9.jpg') }}" alt=""></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card sales-summary">
                    <div class="card-header">
                        <h4>Sales Summary</h4>
                        <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown04" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown04"><a
                                    class="dropdown-item" href="#">Weekly</a><a class="dropdown-item"
                                    href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="current-sale-container order-container">
                            <div class="overview-wrapper" id="orderoverview"></div>
                            <div class="back-bar-container">
                                <div id="order-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card invest-card">
                    <div class="card-header">
                        <h4>Total Investment</h4>
                        <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown02" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown02"><a
                                    class="dropdown-item" href="#">Weekly</a><a class="dropdown-item"
                                    href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div id="investment"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-5">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card summary-card">
                            <div class="card-header pb-0">
                                <h4>Task summary</h4>
                                <div class="dropdown icon-dropdown">
                                    <button class="btn dropdown-toggle" id="userdropdown06" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown06"><a
                                            class="dropdown-item" href="#">Weekly</a><a class="dropdown-item"
                                            href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-8 col-sm-8 custom-width-1">
                                        <div class="project-cost">
                                            <h5 class="font-light">
                                                <svg class="svg-w-20 stroke-light me-2">
                                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Chart') }}"></use>
                                                </svg>Estimated project cost
                                            </h5>
                                            <ul class="d-flex">
                                                <li class="card-hover">
                                                    <div class="d-flex bg-light-primary flex-column">
                                                        <div class="flex-shrink-0 border-primary">
                                                            <svg class="svg-w-24 stroke-primary">
                                                                <use href="{{ asset('assets/svg/iconly-sprite.svg#Pie') }}"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="f-w-500">Project</h6>
                                                            <h4 class="f-w-700">32</h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="card-hover">
                                                    <div class="d-flex bg-light-secondary flex-column">
                                                        <div class="flex-shrink-0 border-secondary">
                                                            <svg class="svg-w-24 stroke-secondary">
                                                                <use href="{{ asset('assets/svg/iconly-sprite.svg#Category') }}"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="f-w-500">Assigned</h6>
                                                            <h4 class="f-w-700">78</h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="card-hover">
                                                    <div class="d-flex bg-light-tertiary flex-column">
                                                        <div class="flex-shrink-0 border-tertiary">
                                                            <svg class="svg-w-24 stroke-tertiary">
                                                                <use href="{{ asset('assets/svg/iconly-sprite.svg#Document') }}"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="f-w-500">Completed</h6>
                                                            <h4 class="f-w-700">54</h4>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="task-bottom d-flex align-items-center gap-2">
                                                <h5 class="font-light">Completion rate in terms of time:</h5>
                                                <h2 class="font-primary">83%</h2><span class="badge bg-light f-14">
                                                    <svg class="svg-w-20 stroke-dark me-1">
                                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                                                    </svg>3.4%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-4 custom-width-2">
                                        <h5 class="font-light">
                                            <svg class="svg-w-20 stroke-light me-2">
                                                <use href="{{ asset('assets/svg/iconly-sprite.svg#User') }}"></use>
                                            </svg>Our crew
                                        </h5>
                                        <div class="team-member">
                                            <h5 class="font-light mb-2">Team Members</h5>
                                            <div class="customers d-inline-block avatar-group">
                                                <ul>
                                                    <li class="d-inline-block"><img class="img-40 b-r-8"
                                                            src="{{ asset('assets/images/user/13.jpg') }}" alt="#"></li>
                                                    <li class="d-inline-block"><img class="img-40 b-r-8"
                                                            src="{{ asset('assets/images/user/6.jpg') }}" alt="#"></li>
                                                    <li class="d-inline-block"><img class="img-40 b-r-8"
                                                            src="{{ asset('assets/images/user/3.jpg') }}" alt="#"></li>
                                                    <li class="d-inline-block"><span class="b-r-10">+4</span></li>
                                                </ul>
                                            </div>
                                            <div class="d-flex bg-light">
                                                <div class="flex-grow-1">
                                                    <h6 class="f-16 font-light">Hours</h6>
                                                    <h4>67</h4>
                                                </div>
                                                <div class="team-chart" id="team-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="row">
                    <!-- Task menu-->
                    <div class="col-xl-12">
                        <div class="card esatae-card card-hover">
                            <div class="card-body">
                                <div class="esatae-body d-flex align-items-center gap-4">
                                    <div class="d-flex gap-3 align-items-center">
                                        <div class="flex-shrink-0 bg-primary">
                                            <svg class="svg-w-24">
                                                <use href="{{ asset('assets/svg/iconly-sprite.svg#dash-home') }}"></use>
                                            </svg>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="f-w-500">Home Estate</h6><span class="f-w-400 f-13">Web
                                                Design</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex">
                                            <h6 class="f-w-500">Progress </h6><span class="f-w-500 f-14">50%</span>
                                        </div>
                                        <div class="progress mt-2 progress-striped-primary">
                                            <div class="progress-bar" style="width: 55%" role="progressbar"
                                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="customer d-inline-block avatar-group text-end">
                                        <ul>
                                            <li class="d-inline-block"><img class="img-40 b-r-10"
                                                    src="{{ asset('assets/images/avatar/6.jpg') }}" alt=""></li>
                                            <li class="d-inline-block"><img class="img-40 b-r-10"
                                                    src="{{ asset('assets/images/user/8.jpg') }}" alt=""></li>
                                            <li class="d-inline-block"><span class="b-r-10">+4</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card esatae-card card-hover">
                            <div class="card-body">
                                <div class="esatae-body d-flex align-items-center gap-4">
                                    <div class="d-flex gap-3 align-items-center">
                                        <div class="flex-shrink-0 bg-secondary">
                                            <svg class="svg-w-24">
                                                <use href="{{ asset('assets/svg/iconly-sprite.svg#dash-development') }}"></use>
                                            </svg>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="f-w-500">Development</h6><span class="f-w-400 f-13">Coding</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex">
                                            <h6 class="f-w-500">Progress </h6><span class="f-w-500 f-14">40%</span>
                                        </div>
                                        <div class="progress mt-2 progress-striped-secondary">
                                            <div class="progress-bar" style="width: 55%" role="progressbar"
                                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="customer d-inline-block avatar-group text-end">
                                        <ul>
                                            <li class="d-inline-block"><img class="img-40 b-r-10"
                                                    src="{{ asset('assets/images/user/6.jpg') }}" alt=""></li>
                                            <li class="d-inline-block"><img class="img-40 b-r-10"
                                                    src="{{ asset('assets/images/user/9.jpg') }}" alt=""></li>
                                            <li class="d-inline-block"><span class="b-r-10">+2</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card esatae-card card-hover">
                            <div class="card-body">
                                <div class="esatae-body d-flex align-items-center gap-4">
                                    <div class="d-flex gap-3 align-items-center">
                                        <div class="flex-shrink-0 bg-tertiary">
                                            <svg class="svg-w-24">
                                                <use href="{{ asset('assets/svg/iconly-sprite.svg#dash-vector') }}"></use>
                                            </svg>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="f-w-500">NFT Design</h6><span class="f-w-400 f-13">Design</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex">
                                            <h6 class="f-w-500">Progress </h6><span class="f-w-500 f-14">90%</span>
                                        </div>
                                        <div class="progress mt-2 progress-striped-tertiary">
                                            <div class="progress-bar" style="width: 55%" role="progressbar"
                                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="customer d-inline-block avatar-group text-end">
                                        <ul>
                                            <li class="d-inline-block"><img class="img-40 b-r-10"
                                                    src="{{ asset('assets/images/avatar/11.jpg') }}" alt=""></li>
                                            <li class="d-inline-block"><img class="img-40 b-r-10"
                                                    src="{{ asset('assets/images/user/3.jpg') }}" alt=""></li>
                                            <li class="d-inline-block"><span class="b-r-10">+3</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/vendors/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/general-widget/general-widget.js') }}"></script>
@endsection
