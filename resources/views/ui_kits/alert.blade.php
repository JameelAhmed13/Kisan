@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Alert</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Alert</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <!-- Color alert-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Link with dark color alerts</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>data-bs-title,
                                data-bs-trigger=&quot;click&quot;</code><span> to the content under the HTML tag with click
                                event.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <p class="mb-1">Primary Alert</p>
                                <div class="alert alert-primary dark" role="alert">
                                    <p class="mb-0">This is a <a class="alert-link text-white" href="#">Primary
                                            alert</a> with an example link.Check it out.</p>
                                </div>
                                <p class="mb-1">Secondary Alert</p>
                                <div class="alert alert-secondary dark" role="alert">
                                    <p class="mb-0">This is a <a class="alert-link text-white" href="#">Secondary
                                            alert</a> with an example link. Check it out.</p>
                                </div>
                                <p class="mb-1">Tertiary Alert</p>
                                <div class="alert alert-tertiary dark" role="alert">
                                    <p class="mb-0">This is a <a class="alert-link text-white" href="#">Tertiary
                                            alert</a> with an example link. Check it out.</p>
                                </div>
                                <p class="mb-1">Success Alert</p>
                                <div class="alert alert-success dark" role="alert">
                                    <p class="mb-0">This is a <a class="alert-link text-white" href="#">Success
                                            alert </a> with an example link. Check it out.</p>
                                </div>
                                <p class="mb-1">Info Alert</p>
                                <div class="alert alert-info dark mb-lg-0" role="alert">
                                    <p class="mb-0">This is a <a class="alert-link text-white" href="#">Info alert
                                        </a> with an example link. Check it out.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <p class="mb-1">Warning Alert</p>
                                <div class="alert alert-warning dark" role="alert">
                                    <p class="mb-0">This is a <a class="alert-link text-white" href="#">Warning
                                            alert </a> with an example link. Check it out.</p>
                                </div>
                                <p class="mb-1">Danger Alert</p>
                                <div class="alert alert-danger dark" role="alert">
                                    <p class="mb-0">This is a <a class="alert-link text-white" href="#">Danger alert
                                        </a> with an example link. Check it out.</p>
                                </div>
                                <p class="mb-1">Light Alert</p>
                                <div class="alert alert-light text-dark" role="alert">
                                    <p class="mb-0">This is a <a class="alert-link" href="#">Light alert </a> with
                                        an example link. Check it out.</p>
                                </div>
                                <p class="mb-1">Dark Alert</p>
                                <div class="alert alert-dark dark mb-0" role="alert">
                                    <p class="mb-0">This is a <a class="alert-link text-white" href="#">Dark alert
                                        </a> with an example link. Check it out.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Light color alert-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Link with light color alerts</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.alert-link</code><span> utility class to
                                quickly provide matching colored links within any alert.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <p class="mb-1">Primary Alert</p>
                                <div class="alert alert-light-primary" role="alert">
                                    <p class="mb-0">This is a <a class="alert-link font-primary" href="#">Primary
                                            alert</a> with an example link.Check it out.</p>
                                </div>
                                <p class="mb-1">Secondary Alert</p>
                                <div class="alert alert-light-secondary" role="alert">
                                    <p class="mb-0">This is a <a class="alert-link font-secondary"
                                            href="#">Secondary alert</a> with an example link. Check it out.</p>
                                </div>
                                <p class="mb-1">Tertiary Alert</p>
                                <div class="alert alert-light-tertiary" role="alert">
                                    <p class="mb-0">This is a <a class="alert-link font-tertiary"
                                            href="#">Tertiary alert</a> with an example link. Check it out.</p>
                                </div>
                                <p class="mb-1">Success Alert</p>
                                <div class="alert alert-light-success" role="alert">
                                    <p class="mb-0">This is a <a class="alert-link font-success" href="#">Success
                                            alert </a> with an example link. Check it out.</p>
                                </div>
                                <p class="mb-1">Info Alert</p>
                                <div class="alert alert-light-info dark mb-lg-0" role="alert">
                                    <p class="mb-0">This is a <a class="alert-link font-info" href="#">Info alert
                                        </a> with an example link. Check it out.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <p class="mb-1">Warning Alert</p>
                                <div class="alert alert-light-warning" role="alert">
                                    <p class="mb-0">This is a <a class="alert-link font-warning" href="#">Warning
                                            alert </a> with an example link. Check it out.</p>
                                </div>
                                <p class="mb-1">Danger Alert</p>
                                <div class="alert alert-light-danger" role="alert">
                                    <p class="mb-0">This is a <a class="alert-link font-danger" href="#">Danger
                                            alert </a> with an example link. Check it out.</p>
                                </div>
                                <p class="mb-1">Light Alert</p>
                                <div class="alert alert-light-light" role="alert">
                                    <p class="mb-0">This is a <a class="alert-link font-dark" href="#">Light
                                            alert </a> with an example link. Check it out.</p>
                                </div>
                                <p class="mb-1">Dark Alert</p>
                                <div class="alert alert-light-dark dark mb-0 font-light" role="alert">
                                    <p class="mb-0">This is a <a class="alert-link font-light" href="#">Dark
                                            alert </a> with an example link. Check it out.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Outline alert-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Color alert with outline</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>border-*</code><span> utility class to quickly
                                provide matching border and border-width within any alert.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="alert font-primary border-primary alert-dismissible fade show" role="alert">
                            <svg class="feather">
                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#clock') }}"></use>
                            </svg>
                            <p class="text-truncate">One of <strong>YouTube&apos;s</strong>most crucial ranking factors is
                                Watch Time.
                                <button class="btn-close" type="button" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </p>
                        </div>
                        <div class="alert font-secondary border-secondary outline-2x alert-dismissible fade show alert-icons"
                            role="alert">
                            <svg class="feather">
                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#thumbs-up') }}"></use>
                            </svg>
                            <p class="text-truncate"><b> Well done! </b>You successfully read this important message.
                                <button class="btn-close" type="button" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </p>
                        </div>
                        <div class="alert font-tertiary border-tertiary outline-2x alert-dismissible fade show alert-icons mb-0"
                            role="alert">
                            <svg class="feather">
                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#heart') }}"></use>
                            </svg>
                            <p class="text-truncate"><b> Yahoo! </b>You can check in on some of those fields below.
                                <button class="btn-close" type="button" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Alerts with icons and text actions-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Alerts with icons and text actions</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.dismiss-text</code><span> class to add dismiss
                                text instead of icon.</span></p>
                    </div>
                    <div class="card-body dark-txt">
                        <div class="alert border-success alert-dismissible fade show p-0" role="alert">
                            <div class="alert-arrow bg-success">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#clock') }}"></use>
                                </svg>
                            </div>
                            <p class="text-truncate">Your time Over after <strong class="font-dark">5</strong> minute</p>
                            <button class="p-0 border-0 me-2 ms-auto" type="button" data-bs-dismiss="alert"
                                aria-label="Close"><span class="bg-success px-3 py-1"
                                    aria-hidden="true">Check</span></button>
                        </div>
                        <div class="alert border-info alert-dismissible fade show p-0" role="alert">
                            <div class="alert-arrow bg-info">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#heart') }}"></use>
                                </svg>
                            </div>
                            <p class="text-truncate">Oh snap! Change a few things up <strong class="font-dark">
                                    Notification check</strong></p>
                            <button class="p-0 border-0 me-2 ms-auto" type="button" data-bs-dismiss="alert"
                                aria-label="Close"><span class="bg-info text-white px-3 py-1"
                                    aria-hidden="true">Alert</span></button>
                        </div>
                        <div class="alert border-warning alert-dismissible fade show p-0 mb-0" role="alert">
                            <div class="alert-arrow bg-warning">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#youtube') }}"></use>
                                </svg>
                            </div>
                            <p class="text-truncate">One of<strong class="font-dark"> YouTube's</strong>most crucial
                                ranking factors is Watch Time.</p>
                            <button class="p-0 border-0 me-2 ms-auto" type="button" data-bs-dismiss="alert"
                                aria-label="Close"><span class="bg-warning text-white px-3 py-1"
                                    aria-hidden="true">Show</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Live alert-->
                <div class="card height_equal">
                    <div class="card-header pb-0">
                        <h4>Live alert</h4>
                        <p class="desc mb-0 mt-1"><span>Click the button below to show an alert,then dismiss it with the
                                built-in close button.</span><code></code><span></span></p>
                    </div>
                    <div class="card-body live-dark">
                        <div id="liveAlertPlaceholder">
                            <div class="alert alert-light-info mb-3 alert-dismissible" role="alert">
                                <div class="text-truncate">Oh snap! Change a few things up Notification check</div>
                                <button class="btn-close" type="button" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                        <button class="btn btn-dark mt-3" id="liveAlertBtn" type="button">Show live alert</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Left border alert-->
                <div class="card height_equal">
                    <div class="card-header pb-0">
                        <h4>Border direction alert</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.b-l-*, b-t-*</code><span>for different color
                                with direction border.</span></p>
                    </div>
                    <div class="card-body live-dark">
                        <div class="alert alert-light-primary alert-dismissible b-l-primary" role="alert">
                            <svg class="feather">
                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#help-circle') }}"></use>
                            </svg>
                            <p class="text-truncate">You can check in on some of those fields below.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                        <div class="alert alert-light-secondary alert-dismissible b-t-secondary mb-0" role="alert">
                            <svg class="feather">
                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#help-circle') }}"></use>
                            </svg>
                            <p class="text-truncate">Well done! You successfully read this important message.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Additional content-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Additional content</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.alert , .bg-light-*</code><span> utility class
                                to quickly provide additional content within any alerts.</span></p>
                    </div>
                    <div class="card-body dark-alert">
                        <div class="alert bg-light-primary default-border" role="alert">
                            <h5 class="alert-heading pb-2">Please! Check your notifications</h5>
                            <p>The duty of notification is imposed upon the head of the family, and also upon the medical
                                practitioner who may be in attendance on the patient.</p>
                            <hr>
                            <p class="mb-0">The emergency notification system is free and is available in all 50 states.
                            </p>
                        </div>
                        <div class="alert bg-light-secondary default-border" role="alert">
                            <h5 class="alert-heading pb-2">Something went wrong! Please, chrome update.</h5>
                            <p>The duty of notification is imposed upon the head of the family, and also upon the medical
                                practitioner who may be in attendance on the patient.</p>
                            <hr>
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and
                                tidy.</p>
                        </div>
                        <div class="alert bg-light-tertiary mb-0 default-border" role="alert">
                            <h5 class="alert-heading pb-2">Please! Hidden cameras were not installed.</h5>
                            <p>Due to increasingly accessible technology, hidden cameras have grown in popularity among
                                regular people in recent years.</p>
                            <hr>
                            <p class="mb-0">Consider moving clocks and plush animals from your area if you think they may
                                be concealing cameras because they are both portable items.</p>
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
    <script src="{{ asset('assets/js/alert.js') }}"></script>
@endsection
