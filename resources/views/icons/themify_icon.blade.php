@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/wowjs/css/libs/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Themify Icon</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Icons</li>
                        <li class="breadcrumb-item active">Themify Icon</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <!-- Themify icon-->
                <div class="card">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h4>Arrows and Direction Icons</h4>
                    </div>
                    <div class="card-body">
                        <div class="row icon-event iconly-icons icon-lists">
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-arrow-up"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-arrow-up</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-arrow-right"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-arrow-right</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-arrow-left"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-arrow-left</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-arrow-down"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-arrow-down</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-arrows-vertical"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-arrows-vertical</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-arrows-horizontal"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-arrows-horizontal</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-angle-up"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-angle-up</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-angle-right"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-angle-right</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-angle-left"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-angle-left</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-angle-down"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-angle-down</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-angle-double-up"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-angle-double-up</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-angle-double-right"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-angle-double-right</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-angle-double-left"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-angle-double-left</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-angle-double-down"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-angle-double-down</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-move"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-move</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-fullscreen"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-fullscreen</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-arrow-top-right"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-arrow-top-right</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-arrow-top-left"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-arrow-top-left</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-arrow-circle-up"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-arrow-circle-up</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-arrow-circle-right"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-arrow-circle-right</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-arrow-circle-left"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-arrow-circle-left</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-arrow-circle-down"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-arrow-circle-down</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-arrows-corner"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-arrows-corner</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-split-v"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-split-v</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-split-v-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-split-v-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-split-h"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-split-h</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-hand-point-up"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-hand-point-up</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-hand-point-right"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-hand-point-right</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-hand-point-left"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-hand-point-left</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-hand-point-down"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-hand-point-down</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-back-right"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-back-right</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-back-left"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-back-left</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-exchange-vertical"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-exchange-vertical</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Themify icon-->
                <div class="card">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h4>Web App Icons</h4>
                    </div>
                    <div class="card-body">
                        <div class="row icon-event iconly-icons icon-lists">
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-wand"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-wand</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-save"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-save</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-save-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-save-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-direction"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-direction</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-direction-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-direction-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-user"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-user</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-link"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-link</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-unlink"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-unlink</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-trash"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-trash</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-target"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-target</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-tag"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-tag</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-desktop"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-desktop</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-tablet"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-tablet</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-mobile"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-mobile</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-email"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-email</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-star"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-star</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-spray"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-spray</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-signal"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-signal</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-shopping-cart"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-shopping-cart</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-shopping-cart-full"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-shopping-cart-full</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-settings"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-settings</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-search"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-search</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-zoom-in"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-zoom-in</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-zoom-out"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-zoom-out</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-cut"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-cut</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-ruler"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-ruler</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-ruler-alt-2"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-ruler-alt-2</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-ruler-pencil"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-ruler-pencil</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-ruler-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-ruler-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-bookmark"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-bookmark</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-bookmark-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-bookmark-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-reload"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-reload</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-plus"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-plus</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-minus"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-minus</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-close"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-close</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-pin"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-pin</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-pencil"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-pencil</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-pencil-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-pencil-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-paint-roller"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-paint-roller</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-paint-bucket"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-paint-bucket</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-medall"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-medall</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-medall-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-medall-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-marker"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-marker</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-marker-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-marker-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-lock"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-lock</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-unlock"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-unlock</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-location-arrow"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-location-arrow</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-layout"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-layout</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-layers"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-layers</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-layers-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-layers-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-key"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-key</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-image"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-image</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-heart"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-heart</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-heart-broken"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-heart-broken</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-hand-stop"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-hand-stop</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-hand-open"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-hand-open</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-hand-drag"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-hand-drag</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-flag"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-flag</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-flag-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-flag-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-flag-alt-2"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-flag-alt-2</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-eye"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-eye</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-import"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-import</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-export"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-export</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-cup"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-cup</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-crown"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-crown</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-comments"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-comments</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-comment"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-comment</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-comment-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-comment-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-thought"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-thought</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-clip"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-clip</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-check"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-check</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-check-box"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-check-box</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-camera"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-camera</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-announcement"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-announcement</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-brush"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-brush</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-brush-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-brush-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-palette"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-palette</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-briefcase"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-briefcase</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-bolt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-bolt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-bolt-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-bolt-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-blackboard"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-blackboard</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-bag"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-bag</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-world"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-world</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-wheelchair"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-wheelchair</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-car"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-car</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-truck"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-truck</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-timer"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-timer</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-ticket"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-ticket</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-thumb-up"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-thumb-up</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-thumb-down"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-thumb-down</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-stats-up"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-stats-up</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-stats-down"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-stats-down</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-shine"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-shine</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-shift-right"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-shift-right</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-shift-left"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-shift-left</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-shift-right-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-shift-right-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-shift-left-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-shift-left-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-shield"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-shield</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-notepad"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-notepad</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-server"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-server</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-pulse"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-pulse</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-printer"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-printer</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-power-off"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-power-off</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-plug"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-plug</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-pie-chart"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-pie-chart</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-panel"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-panel</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-package"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-package</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-music"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-music</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-music-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-music-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-mouse"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-mouse</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-mouse-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-mouse-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-money"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-money</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-microphone"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-microphone</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-menu"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-menu</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-menu-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-menu-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-map"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-map</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-map-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-map-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-location-pin"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-location-pin</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-light-bulb"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-light-bulb</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-info"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-info</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-infinite"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-infinite</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-id-badge"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-id-badge</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-hummer"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-hummer</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-home"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-home</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-help"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-help</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-headphone"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-headphone</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-harddrives"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-harddrives</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-harddrive"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-harddrive</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-gift"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-gift</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-game"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-game</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-filter"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-filter</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-files"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-files</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-file"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-file</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-zip"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-zip</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-folder"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-folder</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-envelope"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-envelope</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-dashboard"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-dashboard</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-cloud"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-cloud</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-cloud-up"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-cloud-up</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-cloud-down"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-cloud-down</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-clipboard"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-clipboard</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-calendar"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-calendar</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-book"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-book</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-bell"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-bell</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-basketball"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-basketball</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-bar-chart"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-bar-chart</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-bar-chart-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-bar-chart-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-archive"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-archive</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-anchor"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-anchor</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-alert"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-alert</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-alarm-clock"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-alarm-clock</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-agenda"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-agenda</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-write"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-write</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-wallet"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-wallet</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-video-clapper"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-video-clapper</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-video-camera"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-video-camera</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-vector"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-vector</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-support"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-support</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-stamp"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-stamp</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-slice"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-slice</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-shortcode"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-shortcode</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-receipt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-receipt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-pin2"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-pin2</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-pin-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-pin-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-pencil-alt2"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-pencil-alt2</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-eraser"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-eraser</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-more"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-more</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-more-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-more-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-microphone-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-microphone-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-magnet"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-magnet</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-line-double"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-line-double</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-line-dotted"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-line-dotted</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-line-dashed"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-line-dashed</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-ink-pen"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-ink-pen</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-info-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-info-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-help-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-help-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-headphone-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-headphone-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-gallery"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-gallery</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-face-smile"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-face-smile</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-face-sad"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-face-sad</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-credit-card"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-credit-card</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-comments-smiley"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-comments-smiley</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-time"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-time</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-share"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-share</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-share-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-share-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-rocket"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-rocket</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-new-window"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-new-window</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-rss"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-rss</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-rss-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-rss-alt</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Themify icon-->
                <div class="card">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h4>Control Icons</h4>
                    </div>
                    <div class="card-body">
                        <div class="row icon-event iconly-icons icon-lists">
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-control-stop"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-control-stop</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-control-shuffle"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-control-shuffle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-control-play"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-control-play</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-control-pause"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-control-pause</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-control-forward"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-control-forward</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-control-backward"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-control-backward</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-volume"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-volume</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-control-skip-forward"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-control-skip-forward</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-control-skip-backward"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-control-skip-backward</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-control-record"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-control-record</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-control-eject"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-control-eject</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Themify icon-->
                <div class="card">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h4>Control Icons</h4>
                    </div>
                    <div class="card-body">
                        <div class="row icon-event iconly-icons icon-lists">
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-paragraph"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-paragraph</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-uppercase"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-uppercase</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-underline"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-underline</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-text"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-text</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-Italic"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-Italic</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-smallcap"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-smallcap</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-list"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-list</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-list-ol"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-list-ol</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-align-right"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-align-right</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-align-left"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-align-left</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-align-justify"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-align-justify</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-align-center"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-align-center</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-quote-right"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-quote-right</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-quote-left"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-quote-left</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Themify icon-->
                <div class="card">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h4>Control Icons</h4>
                    </div>
                    <div class="card-body">
                        <div class="row icon-event iconly-icons icon-lists">
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-flickr"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-flickr</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-flickr-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-flickr-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-instagram"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-instagram</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-google"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-google</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-github"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-github</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-facebook"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-facebook</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-dropbox"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-dropbox</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-dropbox-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-dropbox-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-dribbble"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-dribbble</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-apple"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-apple</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-android"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-android</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-yahoo"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-yahoo</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-trello"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-trello</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-stack-overflow"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-stack-overflow</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-soundcloud"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-soundcloud</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-sharethis"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-sharethis</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-sharethis-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-sharethis-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-reddit"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-reddit</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-microsoft"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-microsoft</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-microsoft-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-microsoft-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-linux"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-linux</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-jsfiddle"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-jsfiddle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-joomla"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-joomla</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-html5"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-html5</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-css3"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-css3</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-drupal"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-drupal</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-wordpress"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-wordpress</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-tumblr"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-tumblr</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-tumblr-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-tumblr-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-skype"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-skype</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-youtube"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-youtube</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-vimeo"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-vimeo</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-vimeo-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-vimeo-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-twitter"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-twitter</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-twitter-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-twitter-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-linkedin"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-linkedin</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-pinterest"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-pinterest</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-pinterest-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-pinterest-alt</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-themify-logo"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-themify-logo</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-themify-favicon"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-themify-favicon</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3">
                                <div class="card d-flex align-items-center flex-column default-border"><i
                                        class="icofont icon-themify-favicon-alt"></i>
                                    <div class="flex-grow-1">
                                        <h6>icon-themify-favicon-alt</h6>
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
    <div class="icon-hover-bottom position-fixed fa-fa-icon-show-div">
        <div class="container-fluid">
            <div class="row">
                <div class="icon-popup">
                    <div class="close-icon"><i class="icofont icofont-close"></i></div>
                    <div class="icon-first"><i class="fa-2x" id="icon_main"></i></div>
                    <div class="icon-class">
                        <label class="icon-title">Class</label><span id="fclass1"></span>
                    </div>
                    <div class="icon-last icon-last">
                        <label class="icon-title">Markup</label>
                        <div class="form-inline">
                            <div class="form-group">
                                <input class="inp-val form-control m-r-10" id="input_copy" type="text"
                                    value="" readonly="readonly">
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
    <script src="{{ asset('assets/js/vendors/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/icon-clipart.js') }}"></script>
    <script src="{{ asset('assets/js/icons/icons-notify.js') }}"></script>
@endsection
