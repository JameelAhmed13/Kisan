@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Touchspin</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Widgets</li>
                        <li class="breadcrumb-item active">Touchspin</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Default touchspin</h4>
                        <p class="desc mb-0 mt-1"><span>Use
                                the</span><code>.decrement-touchspin-*.increment-touchspin-*</code><span>class.</span></p>
                    </div>
                    <div class="card-body common-flex">
                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin touchspin-primary"><i class="fa fa-minus">
                                </i></button>
                            <input class="input-touchspin spin-outline-primary" type="number" value="0">
                            <button class="increment-touchspin btn-touchspin touchspin-primary"><i class="fa fa-plus">
                                </i></button>
                        </div>
                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin touchspin-secondary"><i class="fa fa-minus">
                                </i></button>
                            <input class="input-touchspin spin-outline-secondary" type="number" value="2">
                            <button class="increment-touchspin btn-touchspin touchspin-secondary"><i class="fa fa-plus">
                                </i></button>
                        </div>
                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin touchspin-success"><i class="fa fa-minus">
                                </i></button>
                            <input class="input-touchspin spin-outline-success" type="number" value="1">
                            <button class="increment-touchspin btn-touchspin touchspin-success"><i class="fa fa-plus">
                                </i></button>
                        </div>
                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin touchspin-danger"><i class="fa fa-minus">
                                </i></button>
                            <input class="input-touchspin spin-outline-danger" type="number" value="8">
                            <button class="increment-touchspin btn-touchspin touchspin-danger"><i class="fa fa-plus">
                                </i></button>
                        </div>
                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin touchspin-warning"><i class="fa fa-minus">
                                </i></button>
                            <input class="input-touchspin spin-outline-warning" type="number" value="3">
                            <button class="increment-touchspin btn-touchspin touchspin-warning"><i class="fa fa-plus">
                                </i></button>
                        </div>
                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin touchspin-info"><i
                                    class="fa fa-minus"></i></button>
                            <input class="input-touchspin spin-outline-info" type="number" value="9">
                            <button class="increment-touchspin btn-touchspin touchspin-info"><i class="fa fa-plus">
                                </i></button>
                        </div>
                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin touchspin-dark"><i class="fa fa-minus">
                                </i></button>
                            <input class="input-touchspin spin-outline-dark" type="number" value="4">
                            <button class="increment-touchspin btn-touchspin touchspin-dark"><i class="fa fa-plus">
                                </i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Outlined touchspin</h4>
                        <p class="desc mb-0 mt-1"><span>Use
                                the</span><code>.decrement-touchspin-*.increment-touchspin-*</code><span>class.</span></p>
                    </div>
                    <div class="card-body common-flex">
                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin spin-border-primary"><i class="fa fa-minus">
                                </i></button>
                            <input class="input-touchspin spin-outline-primary" type="number" value="0">
                            <button class="increment-touchspin btn-touchspin spin-border-primary"><i class="fa fa-plus">
                                </i></button>
                        </div>
                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin spin-border-secondary"><i class="fa fa-minus">
                                </i></button>
                            <input class="input-touchspin spin-outline-secondary" type="number" value="2">
                            <button class="increment-touchspin btn-touchspin spin-border-secondary"><i class="fa fa-plus">
                                </i></button>
                        </div>
                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin spin-border-success"><i class="fa fa-minus">
                                </i></button>
                            <input class="input-touchspin spin-outline-success" type="number" value="1">
                            <button class="increment-touchspin btn-touchspin spin-border-success"><i class="fa fa-plus">
                                </i></button>
                        </div>
                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin spin-border-danger"><i class="fa fa-minus">
                                </i></button>
                            <input class="input-touchspin spin-outline-danger" type="number" value="8">
                            <button class="increment-touchspin btn-touchspin spin-border-danger"><i class="fa fa-plus">
                                </i></button>
                        </div>
                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin spin-border-warning"><i class="fa fa-minus">
                                </i></button>
                            <input class="input-touchspin spin-outline-warning" type="number" value="3">
                            <button class="increment-touchspin btn-touchspin spin-border-warning"><i class="fa fa-plus">
                                </i></button>
                        </div>
                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin spin-border-info"><i
                                    class="fa fa-minus"></i></button>
                            <input class="input-touchspin spin-outline-info" type="number" value="9">
                            <button class="increment-touchspin btn-touchspin spin-border-info"><i class="fa fa-plus">
                                </i></button>
                        </div>
                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin spin-border-dark"><i class="fa fa-minus">
                                </i></button>
                            <input class="input-touchspin spin-outline-dark" type="number" value="4">
                            <button class="increment-touchspin btn-touchspin spin-border-dark"><i class="fa fa-plus">
                                </i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Icons with prefix and postfix</h4>
                        <p class="desc mb-0 mt-1"><span>Use
                                the</span><code>.decrement-touchspin-*.increment-touchspin-*</code><span>class.</span></p>
                    </div>
                    <div class="card-body common-flex pre-post-touchspin">
                        <div class="input-group">
                            <button class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                    class="fa fa-minus"></i></button><span class="input-group-text">$</span>
                            <input class="input-touchspin spin-outline-primary" type="number" value="0">
                            <button class="increment-touchspin btn-touchspin touchspin-primary"><i class="fa fa-plus">
                                </i></button>
                        </div>
                        <div class="input-group">
                            <button class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                    class="fa fa-minus"></i></button>
                            <input class="input-touchspin spin-outline-primary" type="number" value="0"><span
                                class="input-group-text">%</span>
                            <button class="increment-touchspin btn-touchspin touchspin-primary"><i
                                    class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Buttons with prefix and postfix</h4>
                        <p class="desc mb-0 mt-1"><span>Use
                                the</span><code>.decrement-touchspin-*.increment-touchspin-*</code><span>class.</span></p>
                    </div>
                    <div class="card-body common-flex pre-post-touchspin bg-touchspin">
                        <div class="input-group">
                            <button class="decrement-touchspin btn-touchspin touchspin-warning"><i
                                    class="fa fa-minus"></i></button>
                            <button class="btn-outline-warning" id="button-addon1" type="button">Pre</button>
                            <input class="input-touchspin spin-outline-primary" type="number" value="0">
                            <button class="increment-touchspin btn-touchspin touchspin-warning"><i class="fa fa-plus">
                                </i></button>
                        </div>
                        <div class="input-group">
                            <button class="decrement-touchspin btn-touchspin touchspin-warning"><i
                                    class="fa fa-minus"></i></button>
                            <input class="input-touchspin spin-outline-primary" type="number" value="0">
                            <button class="btn-outline-warning" id="button-addon2" type="button">Post</button>
                            <button class="increment-touchspin btn-touchspin touchspin-warning"><i
                                    class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Rounded touchspin</h4>
                        <p class="desc mb-0 mt-1"><span>Use
                                the</span><code>.decrement-touchspin-*.increment-touchspin-*</code><span>class.</span></p>
                    </div>
                    <div class="card-body common-flex rounded-touchspin">
                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                    class="fa fa-angle-left"> </i></button>
                            <input class="input-touchspin spin-outline-primary" type="number" value="0">
                            <button class="increment-touchspin btn-touchspin touchspin-primary"><i
                                    class="fa fa-angle-right"></i></button>
                        </div>
                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin touchspin-secondary"><i
                                    class="fa fa-angle-left"></i></button>
                            <input class="input-touchspin spin-outline-secondary" type="number" value="2">
                            <button class="increment-touchspin btn-touchspin touchspin-secondary"><i
                                    class="fa fa-angle-right"> </i></button>
                        </div>
                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin touchspin-success"><i
                                    class="fa fa-angle-left"></i></button>
                            <input class="input-touchspin spin-outline-success" type="number" value="1">
                            <button class="increment-touchspin btn-touchspin touchspin-success"><i
                                    class="fa fa-angle-right"> </i></button>
                        </div>
                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin touchspin-danger"><i
                                    class="fa fa-angle-left"> </i></button>
                            <input class="input-touchspin spin-outline-danger" type="number" value="8">
                            <button class="increment-touchspin btn-touchspin touchspin-danger"><i
                                    class="fa fa-angle-right"> </i></button>
                        </div>
                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin touchspin-warning"><i
                                    class="fa fa-angle-left"> </i></button>
                            <input class="input-touchspin spin-outline-warning" type="number" value="3">
                            <button class="increment-touchspin btn-touchspin touchspin-warning"><i
                                    class="fa fa-angle-right"> </i></button>
                        </div>
                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin touchspin-info"><i
                                    class="fa fa-angle-left"></i></button>
                            <input class="input-touchspin spin-outline-info" type="number" value="9">
                            <button class="increment-touchspin btn-touchspin touchspin-info"><i class="fa fa-angle-right">
                                </i></button>
                        </div>
                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin touchspin-dark"><i
                                    class="fa fa-angle-left"></i></button>
                            <input class="input-touchspin spin-outline-dark" type="number" value="4">
                            <button class="increment-touchspin btn-touchspin touchspin-dark"><i
                                    class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
