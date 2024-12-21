@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Buttons</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item active">Buttons</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-Fluid Starts-->
    <div class="container-fluid">
        <div class="row buttons-tab">
            <div class="col-md-6">
                <!-- Buttons Style Start-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Buttons Style</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="nav flex-column nav-pills nav-success card-wrapper bg-light-primary rounded-3"
                                    id="ver-pills-tab1" role="tablist" aria-orientation="vertical"><a
                                        class="nav-link active" id="deafult-buttons-tab" data-bs-toggle="pill"
                                        href="#deafult-buttons" role="tab" aria-controls="deafult-buttons"
                                        aria-selected="true">
                                        <div class="circle-dot-primary"> <span></span></div>Default Buttons
                                    </a><a class="nav-link" id="flat-buttons-tab" data-bs-toggle="pill" href="#flat-buttons"
                                        role="tab" aria-controls="flat-buttons" aria-selected="false">
                                        <div class="circle-dot-primary"> <span></span></div>Flat Buttons
                                    </a><a class="nav-link" id="edge-buttons-tab" data-bs-toggle="pill" href="#edge-buttons"
                                        role="tab" aria-controls="edge-buttons" aria-selected="false">
                                        <div class="circle-dot-primary"> <span></span></div>Edge Buttons
                                    </a><a class="nav-link" id="raised-buttons-tab" data-bs-toggle="pill"
                                        href="#raised-buttons" role="tab" aria-controls="raised-buttons"
                                        aria-selected="false">
                                        <div class="circle-dot-primary"> <span></span></div>Raised Buttons
                                    </a><a class="nav-link" id="outline-buttons-tab" data-bs-toggle="pill"
                                        href="#outline-buttons" role="tab" aria-controls="outline-buttons"
                                        aria-selected="false">
                                        <div class="circle-dot-primary"> <span> </span></div>Outline Buttons
                                    </a><a class="nav-link" id="gradient-buttons-tab" data-bs-toggle="pill"
                                        href="#gradient-buttons" role="tab" aria-controls="gradient-buttons"
                                        aria-selected="false">
                                        <div class="circle-dot-primary"> <span></span></div>Gradient Buttons
                                    </a></div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="tab-content" id="ver-pills-tabContent1">
                                    <div class="tab-pane fade show active" id="deafult-buttons" role="tabpanel"
                                        aria-labelledby="deafult-buttons-tab">
                                        <!-- Default Buttons Start-->
                                        <!-- Default Buttons Menu-->
                                        <div class="btn-showcase row">
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-primary" type="button" data-bs-toggle="tooltip"
                                                    title="btn btn-primary">Primary Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-secondary" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-secondary">Secondary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-tertiary" type="button" data-bs-toggle="tooltip"
                                                    title="btn btn-tertiary">Tertiary Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-success" type="button" data-bs-toggle="tooltip"
                                                    title="btn btn-success">Success Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-info" type="button" data-bs-toggle="tooltip"
                                                    title="btn btn-info">Info Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-warning" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-warning">Warning
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-danger" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-danger">Danger Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 font-dark btn-light" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-light">Light Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-dark" type="button" data-bs-toggle="tooltip"
                                                    title="btn btn-dark">Dark Button</button>
                                            </div>
                                        </div>
                                        <!-- Default Buttons End-->
                                    </div>
                                    <div class="tab-pane fade" id="flat-buttons" role="tabpanel"
                                        aria-labelledby="flat-buttons-tab">
                                        <!-- Flat Buttons Start-->
                                        <!-- Flat Buttons Menu-->
                                        <div class="btn-showcase row">
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 flat-btn btn-primary" type="button"
                                                    data-bs-toggle="tooltip" title="btn flat-btn btn-primary">Primary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 flat-btn btn-secondary" type="button"
                                                    data-bs-toggle="tooltip" title="btn flat-btn btn-secondary">Secondary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 flat-btn btn-tertiary" type="button"
                                                    data-bs-toggle="tooltip" title="btn flat-btn btn-tertiary">Tertiary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 flat-btn btn-success" type="button"
                                                    data-bs-toggle="tooltip" title="btn flat-btn btn-success">Success
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 flat-btn btn-info" type="button"
                                                    data-bs-toggle="tooltip" title="btn flat-btn btn-info">Info
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 flat-btn btn-warning" type="button"
                                                    data-bs-toggle="tooltip" title="btn flat-btn btn-warning">Warning
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 flat-btn btn-danger" type="button"
                                                    data-bs-toggle="tooltip" title="btn flat-btn btn-danger">Danger
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 flat-btn font-dark btn-light" type="button"
                                                    data-bs-toggle="tooltip" title="btn flat-btn btn-light">Light
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 flat-btn btn-dark" type="button"
                                                    data-bs-toggle="tooltip" title="btn flat-btn btn-dark">Dark
                                                    Button</button>
                                            </div>
                                        </div>
                                        <!-- Flat Buttons End-->
                                    </div>
                                    <div class="tab-pane fade" id="edge-buttons" role="tabpanel"
                                        aria-labelledby="edge-buttons-tab">
                                        <!-- Edge Buttons Start-->
                                        <!-- Edge Buttons Menu-->
                                        <div class="btn-showcase row">
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 edge-btn btn-primary" type="button"
                                                    data-bs-toggle="tooltip" title="btn edge-btn btn-primary">Primary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 edge-btn btn-secondary" type="button"
                                                    data-bs-toggle="tooltip" title="btn edge-btn btn-secondary">Secondary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 edge-btn btn-tertiary" type="button"
                                                    data-bs-toggle="tooltip" title="btn edge-btn btn-tertiary">Tertiary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 edge-btn btn-success" type="button"
                                                    data-bs-toggle="tooltip" title="btn edge-btn btn-success">Success
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 edge-btn btn-info" type="button"
                                                    data-bs-toggle="tooltip" title="btn edge-btn btn-info">Info
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 edge-btn btn-warning" type="button"
                                                    data-bs-toggle="tooltip" title="btn edge-btn btn-warning">Warning
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 edge-btn btn-danger" type="button"
                                                    data-bs-toggle="tooltip" title="btn edge-btn btn-danger">Danger
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 edge-btn font-dark btn-light" type="button"
                                                    data-bs-toggle="tooltip" title="btn edge-btn btn-light">Light
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 edge-btn btn-dark" type="button"
                                                    data-bs-toggle="tooltip" title="btn edge-btn btn-dark">Dark
                                                    Button</button>
                                            </div>
                                        </div>
                                        <!-- Edge Buttons End-->
                                    </div>
                                    <div class="tab-pane fade" id="raised-buttons" role="tabpanel"
                                        aria-labelledby="raised-buttons-tab">
                                        <!-- Raised Buttons Start-->
                                        <!-- Raised Buttons Menu-->
                                        <div class="btn-showcase row">
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-primary btn-raised-primary" type="button"
                                                    data-bs-toggle="tooltip"
                                                    title="btn btn-primary btn-raised-primary">Primary Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-secondary btn-raised-secondary" type="button"
                                                    data-bs-toggle="tooltip"
                                                    title="btn btn-secondary btn-raised-secondary">Secondary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-tertiary btn-raised-tertiary" type="button"
                                                    data-bs-toggle="tooltip"
                                                    title="btn btn-tertiary btn-raised-tertiary">Tertiary Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-success btn-raised-success" type="button"
                                                    data-bs-toggle="tooltip"
                                                    title="btn btn-success btn-raised-success">Success Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-info btn-raised-info" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-info btn-raised-info">Info
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-warning btn-raised-warning" type="button"
                                                    data-bs-toggle="tooltip"
                                                    title="btn btn-warning btn-raised-warning">Warning Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-danger btn-raised-danger" type="button"
                                                    data-bs-toggle="tooltip"
                                                    title="btn btn-danger btn-raised-danger">Danger Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 font-dark btn-light btn-raised-light"
                                                    type="button" data-bs-toggle="tooltip"
                                                    title="btn btn-light btn-raised-light">Light Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-dark btn-raised-dark" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-dark btn-raised-dark">Dark
                                                    Button</button>
                                            </div>
                                        </div>
                                        <!-- Raised Buttons End-->
                                    </div>
                                    <div class="tab-pane fade" id="outline-buttons" role="tabpanel"
                                        aria-labelledby="outline-buttons-tab">
                                        <!-- Outline Buttons Start-->
                                        <!-- Outline Buttons Menu-->
                                        <div class="btn-showcase row">
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-primary btn-outline-primary" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-outline-primary">Primary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-secondary btn-outline-secondary" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-outline-secondary">Secondary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-tertiary btn-outline-tertiary" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-outline-tertiary">Tertiary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-success btn-outline-success" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-outline-success">Success
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-info btn-outline-info" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-outline-info">Info
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-warning btn-outline-warning" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-outline-warning">Warning
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-danger btn-outline-danger" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-outline-danger">Danger
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 font-dark btn-light btn-outline-light"
                                                    type="button" data-bs-toggle="tooltip"
                                                    title="btn btn-outline-light">Light Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-dark btn-outline-dark" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-outline-dark">Dark
                                                    Button</button>
                                            </div>
                                        </div>
                                        <!-- Outline Buttons End-->
                                    </div>
                                    <div class="tab-pane fade" id="gradient-buttons" role="tabpanel"
                                        aria-labelledby="gradient-buttons-tab">
                                        <!-- Gradient Buttons Start-->
                                        <!-- Gradient Buttons Menu -->
                                        <div class="btn-showcase row">
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-primary btn-primary-gradien" type="button"
                                                    data-bs-toggle="tooltip"
                                                    title="btn btn-primary btn-primary-gradien">Primary Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-secondary btn-secondary-gradien" type="button"
                                                    data-bs-toggle="tooltip"
                                                    title="btn btn-secondary btn-secondary-gradien">Secondary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-tertiary btn-tertiary-gradien" type="button"
                                                    data-bs-toggle="tooltip"
                                                    title="btn btn-tertiary btn-tertiary-gradien">Tertiary Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-success btn-success-gradien" type="button"
                                                    data-bs-toggle="tooltip"
                                                    title="btn btn-success btn-success-gradien">Success Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-info btn-info-gradien" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-info btn-info-gradien">Info
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-warning btn-warning-gradien" type="button"
                                                    data-bs-toggle="tooltip"
                                                    title="btn btn-warning btn-warning-gradien">Warning Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-danger btn-danger-gradien" type="button"
                                                    data-bs-toggle="tooltip"
                                                    title="btn btn-danger btn-danger-gradien">Danger Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 font-dark btn-light btn-light-gradien"
                                                    type="button" data-bs-toggle="tooltip"
                                                    title="btn btn-light btn-light-gradien">Light Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-dark btn-dark-gradien" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-dark btn-dark-gradien">Dark
                                                    Button</button>
                                            </div>
                                        </div>
                                        <!-- Gradient Buttons End-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Buttons Style End-->
            </div>
            <div class="col-md-6">
                <!-- Buttons Size Start-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Buttons Size</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="nav flex-column nav-pills nav-success card-wrapper bg-light-secondary rounded-3"
                                    id="ver-pills-tab" role="tablist" aria-orientation="vertical"><a
                                        class="nav-link active" id="deafult-size-buttons-tab" data-bs-toggle="pill"
                                        href="#deafult-size-buttons" role="tab" aria-controls="deafult-size-buttons"
                                        aria-selected="true">
                                        <div class="circle-dot-secondary"> <span></span></div>Default Size
                                    </a><a class="nav-link" id="large-buttons-tab" data-bs-toggle="pill"
                                        href="#large-buttons" role="tab" aria-controls="large-buttons"
                                        aria-selected="false">
                                        <div class="circle-dot-secondary"> <span></span></div>Large Buttons
                                    </a><a class="nav-link" id="small-buttons-tab" data-bs-toggle="pill"
                                        href="#small-buttons" role="tab" aria-controls="small-buttons"
                                        aria-selected="false">
                                        <div class="circle-dot-secondary"> <span></span></div>Small Buttons
                                    </a><a class="nav-link" id="extra-small-buttons-tab" data-bs-toggle="pill"
                                        href="#extra-small-buttons" role="tab" aria-controls="extra-small-buttons"
                                        aria-selected="false">
                                        <div class="circle-dot-secondary"> <span></span></div>Extra Small
                                    </a></div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="tab-content" id="ver-pills-tabContent">
                                    <div class="tab-pane fade show active" id="deafult-size-buttons" role="tabpanel"
                                        aria-labelledby="deafult-size-buttons-tab">
                                        <!-- Default Buttons Start-->
                                        <!-- Default Buttons Menu-->
                                        <div class="btn-showcase row">
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-primary" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-primary">Primary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-secondary" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-secondary">Secondary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-tertiary" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-tertiary">Tertiary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-success" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-success">Success
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-info" type="button" data-bs-toggle="tooltip"
                                                    title="btn btn-info">Info Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-warning" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-warning">Warning
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-danger" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-danger">Danger Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 font-dark btn-light" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-light">Light Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-dark" type="button" data-bs-toggle="tooltip"
                                                    title="btn btn-dark">Dark Button</button>
                                            </div>
                                        </div>
                                        <!-- Default Buttons End-->
                                    </div>
                                    <div class="tab-pane fade" id="large-buttons" role="tabpanel"
                                        aria-labelledby="large-buttons-tab">
                                        <!-- Large Buttons Start-->
                                        <!-- Large Buttons Menu-->
                                        <div class="btn-showcase row">
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-lg btn-primary" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-primary btn-lg">Primary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-lg btn-secondary" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-secondary btn-lg">Secondary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-lg btn-tertiary" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-tertiary btn-lg">Tertiary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-lg btn-success" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-success btn-lg">Success
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-lg btn-info" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-info btn-lg">Info
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-lg btn-warning" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-warning btn-lg">Warning
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-lg btn-danger" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-danger btn-lg">Danger
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-lg font-dark btn-light" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-light btn-lg">Light
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-lg btn-dark" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-dark btn-lg">Dark
                                                    Button</button>
                                            </div>
                                        </div>
                                        <!-- Large Buttons End-->
                                    </div>
                                    <div class="tab-pane fade" id="small-buttons" role="tabpanel"
                                        aria-labelledby="small-buttons-tab">
                                        <!-- Small Buttons Start-->
                                        <!-- Small Buttons Menu-->
                                        <div class="btn-showcase row">
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-sm btn-primary" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-primary btn-sm">Primary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-sm btn-secondary" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-secondary btn-sm">Secondary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-sm btn-tertiary" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-tertiary btn-sm">Tertiary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-sm btn-success" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-success btn-sm">Success
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-sm btn-info" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-info btn-sm">Info
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-sm btn-warning" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-warning btn-sm">Warning
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-sm btn-danger" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-danger btn-sm">Danger
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-sm font-dark btn-light" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-light btn-sm">Light
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-sm btn-dark" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-dark btn-sm">Dark
                                                    Button</button>
                                            </div>
                                        </div>
                                        <!-- Small Buttons End-->
                                    </div>
                                    <div class="tab-pane fade" id="extra-small-buttons" role="tabpanel"
                                        aria-labelledby="extra-small-buttons-tab">
                                        <!-- Extra-Small Buttons Start-->
                                        <!-- Extra-Small Buttons Menu-->
                                        <div class="btn-showcase row">
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-xs btn-primary" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-primary btn-xs">Primary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-xs btn-secondary" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-secondary btn-xs">Secondary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-xs btn-tertiary" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-tertiary btn-xs">Tertiary
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-xs btn-success" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-success btn-xs">Success
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-xs btn-info" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-info btn-xs">Info
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-xs btn-warning" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-warning btn-xs">Warning
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-xs btn-danger" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-danger btn-xs">Danger
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-xs font-dark btn-light" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-light btn-xs">Light
                                                    Button</button>
                                            </div>
                                            <div class="text-center col-12 col-sm-6 col-md-12">
                                                <button class="btn m-1 btn-xs btn-dark" type="button"
                                                    data-bs-toggle="tooltip" title="btn btn-dark btn-xs">Dark
                                                    Button</button>
                                            </div>
                                        </div>
                                        <!-- Extra-Small Buttons End-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Buttons Size End-->
            </div>
            <div class="col-sm-12">
                <!-- Buttons Description Start-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Buttons Description</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="mb-1"><span>Use <code>.btn</code> class for Bootstrap state buttons </span></p>
                                <p class="mb-1"><span>Use <code>.flat-btn</code> class for Flate buttons</span></p>
                                <p class="mb-1"><span>Use <code>.edge-btn</code> class for Edge buttons</span></p>
                                <p class="mb-1"><span>Use <code>.btn-lg , .btn-sm , .btn-xs</code> class for Different
                                        size button</span></p>
                                <p class="mb-1"><span>Use <code>.disabled </code> class or<code>disabled </code>
                                        attribute for Disabled state</span></p>
                                <p class="mb-1"><span>Use <code>.btn-outline-*</code> class for Border buttons</span></p>
                                <p class="mb-1"><span>Use <code>.btn-outline-*-2x</code> class for Bold Outline
                                        button</span></p>
                                <p class="mb-1"><span>Use <code>.btn-light-*</code> class for Light Background
                                        Color.</span></p>
                                <p class="mb-1"><span>Use <code>.btn-*-gradien</code> class for gradien button </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Buttons Discription End-->
            </div>
        </div>
    </div>
    <!-- Container-Fluid Ends-->
@endsection

@section('scripts')
@endsection
