@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/wowjs/css/libs/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Feather Icons</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ 'assets/svg/iconly-sprite.svg#Home' }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Icons</li>
                        <li class="breadcrumb-item active">Feather Icons</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <!-- Feather icon-->
                <div class="card">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h4>Feather Icons</h4>
                    </div>
                    <div class="card-body">
                        <div class="row icon-event feather-icons icon-lists">
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#activity') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>activity</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#airplay') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>airplay</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#alert-circle') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>alert-circle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#alert-octagon') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>alert-octagon</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#alert-triangle') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>alert-triangle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#align-center') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>align-center</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#align-justify') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>align-justify</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#align-left') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>align-left</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#align-right') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>align-right</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#anchor') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>anchor</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#aperture') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>aperture</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#archive') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>archive</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-down-circle') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>arrow-down-circle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-down-left') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>arrow-down-left</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-down-right') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>arrow-down-right</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-down') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>arrow-down</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-left-circle') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>arrow-left-circle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-left') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>arrow-left</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>arrow-right-circle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>arrow-right</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-up-circle') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>arrow-up-circle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-up-left') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>arrow-up-left</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-up-right') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>arrow-up-right</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-up') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>arrow-up</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#at-sign') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>at-sign</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#award') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>award</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#bar-chart-2') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>bar-chart-2</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#bar-chart') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>bar-chart</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#battery-charging') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>battery-charging</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#battery') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>battery</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#bell-off') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>bell-off</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#bell') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>bell</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#bluetooth') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>bluetooth</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#bold') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>bold</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#book-open') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>book-open</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#book') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>book</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#bookmark') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>bookmark</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#box') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>box</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#briefcase') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>briefcase</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#calendar') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>calendar</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#camera-off') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>camera-off</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#camera') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>camera</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#cast') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>cast</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>check-circle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-square') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>check-square</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>check</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevron-down') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>chevron-down</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevron-left') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>chevron-left</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevron-right') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>chevron-right</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevron-up') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>chevron-up</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-down') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>chevrons-down</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-left') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>chevrons-left</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-right') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>chevrons-right</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-up') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>chevrons-up</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chrome') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>chrome</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#circle') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>circle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#clipboard') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>clipboard</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#clock') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>clock</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#cloud-drizzle') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>cloud-drizzle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#cloud-lightning') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>cloud-lightning</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#cloud-off') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>cloud-off</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#cloud-rain') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>cloud-rain</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#cloud-snow') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>cloud-snow</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#cloud') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>cloud</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#code') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>code</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#codepen') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>codepen</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#coffee') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>coffee</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#command') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>command</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#compass') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>compass</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#copy') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>copy</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#corner-down-left') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>corner-down-left</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#corner-down-right') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>corner-down-right</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#corner-left-down') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>corner-left-down</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#corner-left-up') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>corner-left-up</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#corner-right-down') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>corner-right-down</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#corner-right-up') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>corner-right-up</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#corner-up-left') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>corner-up-left</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#corner-up-right') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>corner-up-right</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#cpu') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>cpu</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#credit-card') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>credit-card</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#crop') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>crop</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#crosshair') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>crosshair</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#database') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>database</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#delete') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>delete</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#disc') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>disc</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#dollar-sign') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>dollar-sign</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#download-cloud') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>download-cloud</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#download') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>download</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#droplet') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>droplet</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#edit-2') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>edit-2</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#edit-3') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>edit-3</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#edit') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>edit</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#external-link') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>external-link</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#eye-off') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>eye-off</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#eye') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>eye</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#facebook') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>facebook</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#fast-forward') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>fast-forward</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#feather') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>feather</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-minus') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>file-minus</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-plus') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>file-plus</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>file-text</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>file</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#film') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>film</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#filter') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>filter</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#flag') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>flag</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#folder-minus') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>folder-minus</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#folder-plus') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>folder-plus</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#folder') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>folder</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#gift') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>gift</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#git-branch') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>git-branch</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#git-commit') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>git-commit</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#git-merge') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>git-merge</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#git-pull-request') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>git-pull-request</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#github') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>github</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#gitlab') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>gitlab</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#globe') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>globe</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#grid') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>grid</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#hard-drive') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>hard-drive</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#hash') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>hash</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#headphones') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>headphones</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#heart') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>heart</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#help-circle') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>help-circle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#home') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>home</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#image') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>image</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#inbox') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>inbox</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#info') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>info</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#instagram') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>instagram</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#italic') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>italic</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#layers') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>layers</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#layout') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>layout</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#life-buoy') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>life-buoy</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link-2') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>link-2</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>link</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#linkedin') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>linkedin</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#list') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>list</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#loader') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>loader</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#lock') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>lock</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#log-in') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>log-in</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#log-out') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>log-out</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#mail') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>mail</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#map-pin') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>map-pin</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#map') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>map</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#maximize-2') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>maximize-2</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#maximize') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>maximize</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#menu') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>menu</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#message-circle') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>message-circle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#message-square') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>message-square</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#mic-off') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>mic-off</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#mic') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>mic</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#minimize-2') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>minimize-2</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#minimize') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>minimize</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#minus-circle') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>minus-circle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#minus-square') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>minus-square</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#minus') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>minus</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#monitor') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>monitor</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#moon') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>moon</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-horizontal') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>more-horizontal</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-vertical') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>more-vertical</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#move') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>move</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#music') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>music</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#navigation-2') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>navigation-2</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#navigation') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>navigation</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#octagon') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>octagon</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#package') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>package</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#paperclip') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>paperclip</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#pause-circle') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>pause-circle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#pause') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>pause</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#percent') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>percent</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#phone-call') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>phone-call</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#phone-forwarded') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>phone-forwarded</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#phone-incoming') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>phone-incoming</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#phone-missed') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>phone-missed</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#phone-off') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>phone-off</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#phone-outgoing') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>phone-outgoing</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#phone') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>phone</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#pie-chart') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>pie-chart</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#play-circle') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>play-circle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#play') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>play</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#plus-circle') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>plus-circle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#plus-square') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>plus-square</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#plus') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>plus</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#pocket') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>pocket</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#power') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>power</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#printer') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>printer</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#radio') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>radio</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#refresh-ccw') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>refresh-ccw</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#refresh-cw') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>refresh-cw</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#repeat') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>repeat</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#rewind') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>rewind</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#rotate-ccw') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>rotate-ccw</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#rotate-cw') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>rotate-cw</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg') }}#rss"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>rss</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#save') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>save</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#scissors') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>scissors</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#search') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>search</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#send') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>send</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#server') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>server</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#settings') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>settings</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#share-2') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>share-2</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#share') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>share</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#shield-off') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>shield-off</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#shield') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>shield</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#shopping-bag') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>shopping-bag</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#shopping-cart') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>shopping-cart</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#shuffle') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>shuffle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#sidebar') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>sidebar</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#skip-back') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>skip-back</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#skip-forward') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>skip-forward</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#slack') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>slack</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#slash') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>slash</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#sliders') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>sliders</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#smartphone') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>smartphone</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#speaker') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>speaker</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#square') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>square</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#star') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>star</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#stop-circle') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>stop-circle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#sun') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>sun</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#sunrise') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>sunrise</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#sunset') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>sunset</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#tablet') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>tablet</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#tag') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>tag</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#target') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>target</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#terminal') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>terminal</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#thermometer') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>thermometer</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#thumbs-down') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>thumbs-down</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#thumbs-up') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>thumbs-up</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#toggle-left') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>toggle-left</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#toggle-right') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>toggle-right</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trash-2') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>trash-2</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trash') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>trash</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trending-down') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>trending-down</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trending-up') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>trending-up</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#triangle') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>triangle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#truck') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>truck</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#tv') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>tv</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#twitter') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>twitter</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#type') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>type</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#umbrella') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>umbrella</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#underline') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>underline</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#unlock') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>unlock</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#upload-cloud') }}">
                                        </use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>upload-cloud</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#upload') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>upload</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#user-check') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>user-check</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#user-minus') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>user-minus</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#user-plus') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>user-plus</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#user-x') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>user-x</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#user') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>user</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#users') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>users</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#video-off') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>video-off</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#video') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>video</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#voicemail') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>voicemail</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#volume-1') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>volume-1</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#volume-2') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>volume-2</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#volume-x') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>volume-x</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#volume') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>volume</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#watch') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>watch</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#wifi-off') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>wifi-off</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#wifi') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>wifi</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#wind') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>wind</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x-circle') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>x-circle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x-square') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>x-square</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>x</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#youtube') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>youtube</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#zap-off') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>zap-off</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#zap') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>zap</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#zoom-in') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>zoom-in</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#zoom-out') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>zoom-out</h6>
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
    <div class="icon-hover-bottom position-fixed fa-fa-icon-show-div opecity-0">
        <div class="container-fluid">
          <div class="row">
            <div class="icon-popup">
              <div class="close-icon"><i class="icofont icofont-close"></i></div>
              <div class="icon-first"><i id="icon_main"></i></div>
              <div class="icon-class">
                <label class="icon-title">data-feather</label><span id="fclass1"></span>
              </div>
              <div class="icon-last icon-last">
                <label class="icon-title">Markup</label>
                <div class="form-inline">
                  <div class="form-group">
                    <input class="inp-val form-control m-r-10" id="input_copy" type="text" value="" readonly="readonly">
                    <button class="btn btn-primary notification" onclick="myFunction()">Copy text</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/icons/feather-icon-clipart.js') }}"></script>
<script src="{{ asset('assets/js/vendors/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('assets/js/icons/icons-notify.js') }}"></script>
@endsection
