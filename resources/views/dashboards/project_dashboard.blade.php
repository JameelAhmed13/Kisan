@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/apexcharts/dist/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Project Dashboard</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Project Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid project-dashboard">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="card total-project">
                    <div class="card-header border-dash-bottom">
                        <h4>Total Project</h4>
                        <div class="card-icon">
                            <h3 class="f-w-600">3051</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 custom-width">
                                <div class="customer-chart" id="customer-chart"></div>
                            </div>
                            <div class="col-6">
                                <ul class="project-details">
                                    <li class="d-flex align-items-center mt-3 justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="circle-dot-primary"><span></span></div>
                                            <p class="ms-2 f-w-500">Completed Project</p>
                                        </div><span class="ms-1 f-w-500">321</span>
                                    </li>
                                    <li class="d-flex align-items-center mt-3 justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="circle-dot-secondary"><span></span></div>
                                            <p class="ms-2 f-w-500">Inprogress</p>
                                        </div><span class="ms-1 f-w-500">876</span>
                                    </li>
                                    <li class="d-flex align-items-center mt-3 justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="circle-dot-tertiary"><span></span></div>
                                            <p class="ms-2 f-w-500">Yet to Start</p>
                                        </div><span class="ms-1 f-w-500">645</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card total-revenue">
                    <div class="card-header border-dash-bottom">
                        <h4>Total Revenue</h4>
                        <div class="card-icon">
                            <h3 class="f-w-600">$983731</h3>
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <div class="revenuechart" id="revenuechart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card client-card">
                    <div class="card-header border-dash-bottom">
                        <h4>Total Clients</h4>
                        <div class="card-icon">
                            <h3 class="f-w-600">7465</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-block">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="team-member">
                                    <div class="customers d-inline-block avatar-group">
                                        <ul>
                                            <li class="d-inline-block"><img class="img-52 b-r-8"
                                                    src="{{ asset('assets/images/user/7.jpg') }}" alt="#"></li>
                                            <li class="d-inline-block"><img class="img-52 b-r-8"
                                                    src="{{ asset('assets/images/user/7.jpg') }}" alt="#"></li>
                                            <li class="d-inline-block"><img class="img-52 b-r-8"
                                                    src="{{ asset('assets/images/user/7.jpg') }}" alt="#"></li>
                                            <li class="d-inline-block"><span class="img-52 img-h-52 b-r-10">+4 </span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="project-chart">
                                    <div class="project" id="project"> </div>
                                </div>
                            </div>
                            <div class="client-btn d-flex justify-content-between"><a class="btn btn-secondary"
                                    href="{{ route('admin.letter_box') }}">All Clients</a><a class="btn btn-primary px-5 px-lg-3 px-md-2"
                                    href="{{ route('admin.list_products') }}">Invite</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 col-xxl-5">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Projects Overview</h4>
                        <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown03" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown03"><a
                                    class="dropdown-item" href="#">Weekly</a><a class="dropdown-item"
                                    href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                        </div>
                    </div>
                    <div class="card-body pb-xl-0">
                        <div class="project-overview" id="project-overview"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-8 col-xxl-7">
                <!-- task menu-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Tasks</h4>
                        <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown02" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown02"><a
                                    class="dropdown-item" href="#">Weekly</a><a class="dropdown-item"
                                    href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                        </div>
                    </div>
                    <div class="card-body pt-0 task-table">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="flex-shrink-0">
                                                    <svg class="svg-w-19">
                                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#playbutton') }}">
                                                        </use>
                                                    </svg>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="f-w-500">Begin from</h6>
                                                    <div class="font-light mt-1 timer">
                                                        <svg class="feather me-1">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="f-w-400 f-13">7.00 am</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><a href="{{ route('admin.user_profile') }}">
                                                <h6 class="f-w-500">Search Inspiration For Project</h6>
                                            </a>
                                            <ul class="mt-1">
                                                <li>
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#paperclip') }}">
                                                        </use>
                                                    </svg><span class="f-w-400 f-13">www.dribbble.com</span>
                                                </li>
                                                <li>
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#message-square') }}">
                                                        </use>
                                                    </svg><span class="font-light f-w-400">6 comments</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <h6 class="f-w-500">60% complete</h6>
                                            <div class="progress-showcase mt-2">
                                                <div class="progress sm-progress-bar progress-border-primary">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="task-icon-button">
                                                <button class="btn edge-btn f-13 w-75 btn-light-primary">
                                                    <svg class="svg-w-19">
                                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#watch') }}">
                                                        </use>
                                                    </svg><span>Reminder</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="flex-shrink-0">
                                                    <svg class="svg-w-19">
                                                        <use
                                                            href="{{ asset('assets/svg/iconly-sprite.svg#pushbutton') }}">
                                                        </use>
                                                    </svg>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="f-w-500">Begin from</h6>
                                                    <div class="font-light mt-1 timer">
                                                        <svg class="feather me-1">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="f-w-400 f-13">8.03 am</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><a href="{{ route('admin.user_profile') }}">
                                                <h6 class="f-w-500">Look for Project Ideas</h6>
                                            </a>
                                            <ul class="mt-1">
                                                <li>
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#paperclip') }}">
                                                        </use>
                                                    </svg><span class="f-w-400 f-13">www.dribbble.com</span>
                                                </li>
                                                <li>
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#message-square') }}">
                                                        </use>
                                                    </svg><span class="font-light f-w-400">5 comments</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <h6 class="f-w-500">80% complete</h6>
                                            <div class="progress-showcase mt-2">
                                                <div class="progress sm-progress-bar progress-border-secondary">
                                                    <div class="progress-bar" role="progressbar" style="width: 70%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="task-icon-button">
                                                <button class="btn edge-btn f-13 w-75 btn-light-primary">
                                                    <svg class="svg-w-19">
                                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#watch') }}">
                                                        </use>
                                                    </svg><span>Reminder</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="flex-shrink-0">
                                                    <svg class="svg-w-19">
                                                        <use
                                                            href="{{ asset('assets/svg/iconly-sprite.svg#playbutton') }}">
                                                        </use>
                                                    </svg>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="f-w-500">Begin from</h6>
                                                    <div class="font-light mt-1 timer">
                                                        <svg class="feather me-1">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="f-w-400 f-13">4.12 am</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><a href="{{ route('admin.user_profile') }}">
                                                <h6 class="f-w-500">How can i find inspiration?</h6>
                                            </a>
                                            <ul class="mt-1">
                                                <li>
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#paperclip') }}">
                                                        </use>
                                                    </svg><span class="f-w-400 f-13">www.dribbble.com</span>
                                                </li>
                                                <li>
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#message-square') }}">
                                                        </use>
                                                    </svg><span class="font-light f-w-400">4 comments</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <h6 class="f-w-500">40% complete</h6>
                                            <div class="progress-showcase mt-2">
                                                <div class="progress sm-progress-bar progress-border-tertiary">
                                                    <div class="progress-bar" role="progressbar" style="width: 30%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="task-icon-button">
                                                <button class="btn edge-btn f-13 w-75 btn-light-primary">
                                                    <svg class="svg-w-19">
                                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#watch') }}">
                                                        </use>
                                                    </svg><span>Reminder</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="flex-shrink-0">
                                                    <svg class="svg-w-19">
                                                        <use
                                                            href="{{ asset('assets/svg/iconly-sprite.svg#playbutton') }}">
                                                        </use>
                                                    </svg>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="f-w-500">Begin from</h6>
                                                    <div class="font-light mt-1 timer">
                                                        <svg class="feather me-1">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="f-w-400 f-13">7.30 am</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><a href="{{ route('admin.user_profile') }}">
                                                <h6 class="f-w-500">Can i execute my idea?</h6>
                                            </a>
                                            <ul class="mt-1">
                                                <li>
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#paperclip') }}">
                                                        </use>
                                                    </svg><span class="f-w-400 f-13">www.dribbble.com</span>
                                                </li>
                                                <li>
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#message-square') }}">
                                                        </use>
                                                    </svg><span class="font-light f-w-400">9 comments</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <h6 class="f-w-500">50% complete</h6>
                                            <div class="progress-showcase mt-2">
                                                <div class="progress sm-progress-bar progress-border-primary">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="task-icon-button">
                                                <button class="btn edge-btn f-13 w-75 btn-light-primary">
                                                    <svg class="svg-w-19">
                                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#watch') }}">
                                                        </use>
                                                    </svg><span>Reminder</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Task menu-->
                        <div class="card list-card">
                            <div class="card-header pb-0">
                                <h4>To-do list</h4>
                                <div class="dropdown icon-dropdown">
                                    <button class="btn dropdown-toggle" id="userdropdown05" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown05"><a
                                            class="dropdown-item" href="#">Weekly</a><a class="dropdown-item"
                                            href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li class="list-item">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check checkbox checkbox-solid-primary">
                                                <input class="form-check-input" type="checkbox" id="solid5">
                                                <label class="form-check-label" for="solid5"></label>
                                            </div>
                                            <h5 class="f-w-500">so powerfully and metaphysically</h5>
                                        </div>
                                        <div>
                                            <button class="btn edge-btn f-12 w-100 btn-light-primary">Today</button>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check checkbox checkbox-solid-primary">
                                                <input class="form-check-input" type="checkbox" checked id="solid4">
                                                <label class="form-check-label" for="solid4"></label>
                                            </div>
                                            <h5 class="f-w-500">Create a website page using a prototype.</h5>
                                        </div>
                                        <div>
                                            <button class="btn edge-btn f-12 w-100 btn-light-primary">Today</button>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check checkbox checkbox-solid-primary">
                                                <input class="form-check-input" type="checkbox" id="solid3">
                                                <label class="form-check-label" for="solid3"></label>
                                            </div>
                                            <h5 class="f-w-500">Create a new landing page.</h5>
                                        </div>
                                        <div>
                                            <button class="btn edge-btn f-12 w-100 btn-light-secondary">3 Days</button>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check checkbox checkbox-solid-primary">
                                                <input class="form-check-input" type="checkbox" id="solid2">
                                                <label class="form-check-label" for="solid2"></label>
                                            </div>
                                            <h5 class="f-w-500">Complete the medical ui system idea.</h5>
                                        </div>
                                        <div>
                                            <button class="btn edge-btn f-12 w-100 btn-light-secondary">3 Days</button>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check checkbox checkbox-solid-primary">
                                                <input class="form-check-input" type="checkbox" id="solid1">
                                                <label class="form-check-label" for="solid1"></label>
                                            </div>
                                            <h5 class="f-w-500">Make a new landing page.</h5>
                                        </div>
                                        <div>
                                            <button class="btn edge-btn f-12 w-100 btn-light-secondary">3 Days</button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4>Activity report</h4>
                                <div class="dropdown icon-dropdown">
                                    <button class="btn dropdown-toggle" id="userdropdown01" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown01"><a
                                            class="dropdown-item" href="#">Weekly</a><a class="dropdown-item"
                                            href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-container chart-height">
                                    <div id="activity-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="row">
                            <!-- Task menu-->
                            <div class="col-xl-12">
                                <div class="card esatae-card card-hover">
                                    <div class="card-body">
                                        <div class="esatae-body d-flex align-items-center gap-4">
                                            <div class="d-flex gap-3 align-items-center">
                                                <div class="flex-shrink-0 bg-primary">
                                                    <svg class="svg-w-24">
                                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#dash-home') }}">
                                                        </use>
                                                    </svg>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="f-w-500">Home Estate</h6><span class="f-w-400 f-13">Web
                                                        Design</span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="d-flex">
                                                    <h6 class="f-w-500">Progress </h6><span
                                                        class="f-w-500 f-14">50%</span>
                                                </div>
                                                <div class="progress mt-2 progress-striped-primary">
                                                    <div class="progress-bar" style="width: 55%" role="progressbar"
                                                        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="customer d-inline-block avatar-group text-end">
                                                <ul>
                                                    <li class="d-inline-block"><img class="img-40 b-r-10"
                                                            src="{{ asset('assets/images/avatar/6.jpg') }}"
                                                            alt=""></li>
                                                    <li class="d-inline-block"><img class="img-40 b-r-10"
                                                            src="{{ asset('assets/images/user/8.jpg') }}" alt="">
                                                    </li>
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
                                                        <use
                                                            href="{{ asset('assets/svg/iconly-sprite.svg#dash-development') }}">
                                                        </use>
                                                    </svg>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="f-w-500">Development</h6><span
                                                        class="f-w-400 f-13">Coding</span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="d-flex">
                                                    <h6 class="f-w-500">Progress </h6><span
                                                        class="f-w-500 f-14">40%</span>
                                                </div>
                                                <div class="progress mt-2 progress-striped-secondary">
                                                    <div class="progress-bar" style="width: 55%" role="progressbar"
                                                        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="customer d-inline-block avatar-group text-end">
                                                <ul>
                                                    <li class="d-inline-block"><img class="img-40 b-r-10"
                                                            src="{{ asset('assets/images/user/6.jpg') }}" alt="">
                                                    </li>
                                                    <li class="d-inline-block"><img class="img-40 b-r-10"
                                                            src="{{ asset('assets/images/user/9.jpg') }}" alt="">
                                                    </li>
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
                                                        <use
                                                            href="{{ asset('assets/svg/iconly-sprite.svg#dash-vector') }}">
                                                        </use>
                                                    </svg>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="f-w-500">NFT Design</h6><span
                                                        class="f-w-400 f-13">Design</span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="d-flex">
                                                    <h6 class="f-w-500">Progress </h6><span
                                                        class="f-w-500 f-14">90%</span>
                                                </div>
                                                <div class="progress mt-2 progress-striped-tertiary">
                                                    <div class="progress-bar" style="width: 55%" role="progressbar"
                                                        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="customer d-inline-block avatar-group text-end">
                                                <ul>
                                                    <li class="d-inline-block"><img class="img-40 b-r-10"
                                                            src="{{ asset('assets/images/avatar/11.jpg') }}"
                                                            alt=""></li>
                                                    <li class="d-inline-block"><img class="img-40 b-r-10"
                                                            src="{{ asset('assets/images/user/3.jpg') }}" alt="">
                                                    </li>
                                                    <li class="d-inline-block"><span class="b-r-10">+3</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <!-- Bookmark menu-->
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4>Team Members</h4>
                                <div class="dropdown icon-dropdown">
                                    <button class="btn dropdown-toggle" id="userdropdown04" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown04"><a
                                            class="dropdown-item" href="#">Weekly</a><a class="dropdown-item"
                                            href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body team-table pt-0">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Client Name</th>
                                                <th>Designation</th>
                                                <th>Task</th>
                                                <th>Graph</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="flex-shrink-0"><img class="img-40 b-r-10"
                                                                src="{{ asset('assets/images/avatar/10.jpg') }}"
                                                                alt=""></div>
                                                        <div class="flex-grow-1"><a href="{{ route('admin.user_profile') }}">
                                                                <h6 class="f-w-500">Rick Novak</h6><span
                                                                    class="font-light f-w-400 f-13">rick35@gmail.com</span>
                                                            </a></div>
                                                    </div>
                                                </td>
                                                <td>Website</td>
                                                <td>256</td>
                                                <td>
                                                    <div class="team-chart">
                                                        <div id="team-chart1"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="flex-shrink-0"><img class="img-40 b-r-10"
                                                                src="{{ asset('assets/images/avatar/11.jpg') }}"
                                                                alt=""></div>
                                                        <div class="flex-grow-1"><a href="{{ route('admin.user_profile') }}">
                                                                <h6 class="f-w-500">Susan Connor</h6><span
                                                                    class="font-light f-w-400 f-13">susan6@gmail.com</span>
                                                            </a></div>
                                                    </div>
                                                </td>
                                                <td>Mobile App</td>
                                                <td>145</td>
                                                <td>
                                                    <div class="team-chart">
                                                        <div id="team-chart2"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="flex-shrink-0"><img class="img-40 b-r-10"
                                                                src="{{ asset('assets/images/avatar/1.jpg') }}"
                                                                alt=""></div>
                                                        <div class="flex-grow-1"><a href="{{ route('admin.user_profile') }}">
                                                                <h6 class="f-w-500">Roger Lum</h6><span
                                                                    class="font-light f-w-400 f-13">roger8@gmail.com</span>
                                                            </a></div>
                                                    </div>
                                                </td>
                                                <td>Wordpress</td>
                                                <td>956</td>
                                                <td>
                                                    <div class="team-chart">
                                                        <div id="team-chart3"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="flex-shrink-0"><img class="img-40 b-r-10"
                                                                src="{{ asset('assets/images/avatar/3.jpg') }}"
                                                                alt=""></div>
                                                        <div class="flex-grow-1"><a href="{{ route('admin.user_profile') }}">
                                                                <h6 class="f-w-500">Jeff Johnson</h6><span
                                                                    class="font-light f-w-400 f-13">jeff761@gmail.com</span>
                                                            </a></div>
                                                    </div>
                                                </td>
                                                <td>Nft Web Page</td>
                                                <td>324</td>
                                                <td>
                                                    <div class="team-chart">
                                                        <div id="team-chart4"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-4">
                <!-- timeline mixin-->
                <div class="card calendar-box">
                    <div class="card-header border-dash-bottom">
                        <h4>Today</h4><span>UI/UX designer</span>
                        <div class="card-icon"><a class="btn btn-primary" href="{{ route('admin.calendar_basic') }}">Add Task</a></div>
                    </div>
                    <div class="card-body">
                        <div class="border-dash-bottom" id="calendar"></div>
                        <div class="row align-items-center">
                            <div class="col-2">
                                <ul class="d-flex flex-column gap-4">
                                    <li> <span class="font-light">10:00 </span></li>
                                    <li> <span class="font-light">11:00</span></li>
                                    <li> <span class="font-light">12:00</span></li>
                                    <li> <span class="font-light">13:00</span></li>
                                    <li> <span class="font-light">14:00</span></li>
                                </ul>
                            </div>
                            <div class="col-10 timeline-items">
                                <div class="timeline-box d-flex align-items-center b-w-39 b-t-primary">
                                    <div class="flex-grow-1">
                                        <h6 class="f-15 f-w-600 mb-1">Design meeting</h6>
                                        <div class="font-light">
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#clock') }}">
                                                </use>
                                            </svg><span class="font-light f-w-400 f-14">2 hours</span>
                                        </div>
                                    </div>
                                    <div class="team-member text-end">
                                        <div class="customers d-inline-block avatar-group">
                                            <ul>
                                                <li class="d-inline-block"><img class="img-38 b-r-8"
                                                        src="{{ asset('assets/images/user/13.jpg') }}" alt="#">
                                                </li>
                                                <li class="d-inline-block"><img class="img-38 b-r-8"
                                                        src="{{ asset('assets/images/user/6.jpg') }}" alt="#">
                                                </li>
                                                <li class="d-inline-block"><img class="img-38 b-r-8"
                                                        src="{{ asset('assets/images/user/3.jpg') }}" alt="#">
                                                </li>
                                                <li class="d-inline-block"><span class="b-r-10">+4</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <div class="timeline-box d-flex align-items-center b-w-39 b-t-secondary">
                                    <div class="flex-grow-1">
                                        <h6 class="f-15 f-w-600 mb-1">Weekly scurm Meeting</h6>
                                        <div class="font-light">
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#clock') }}">
                                                </use>
                                            </svg><span class="font-light f-w-400 f-14">2 hours</span>
                                        </div>
                                    </div>
                                    <div class="team-member text-end">
                                        <div class="customers d-inline-block avatar-group">
                                            <ul>
                                                <li class="d-inline-block"><img class="img-38 b-r-8"
                                                        src="{{ asset('assets/images/user/14.jpg') }}" alt="#">
                                                </li>
                                                <li class="d-inline-block"><img class="img-38 b-r-8"
                                                        src="{{ asset('assets/images/user/9.jpg') }}" alt="#">
                                                </li>
                                                <li class="d-inline-block"><img class="img-38 b-r-8"
                                                        src="{{ asset('assets/images/user/11.jpg') }}" alt="#">
                                                </li>
                                                <li class="d-inline-block"><span class="b-r-10">+2</span></li>
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
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/vendors/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard-3.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/custom-datepicker.js') }}"></script>
@endsection
