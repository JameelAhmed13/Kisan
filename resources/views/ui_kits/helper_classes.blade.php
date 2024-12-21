@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Helper Classes</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Helper Classes</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <!-- Style-border Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Styles in Borders</h4>
                        <p class="desc mb-0 mt-1"><span>Use the different styles of borders like</span><code>border
                                radius/border-color/border-width</code><span>Use of any components.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-lg-3 col-sm-6">
                                <div class="border-wrapper h-100 dark-helper">
                                    <h5 class="mb-3">Border radius class</h5>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-0 bg-light solid-border"></div><span>.b-r-0</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-1 bg-light solid-border"></div><span>.b-r-1</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-2 bg-light solid-border"></div><span>.b-r-2</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-3 bg-light solid-border"></div><span>.b-r-3</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-4 bg-light solid-border"></div><span>.b-r-4</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-5 bg-light solid-border"></div><span>.b-r-5</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-6 bg-light solid-border"></div><span>.b-r-6</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-7 bg-light solid-border"></div><span>.b-r-7</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-8 bg-light solid-border"></div><span>.b-r-8</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-9 bg-light solid-border"></div><span>.b-r-9</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-10 bg-light solid-border"></div><span>.b-r-10</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="border-wrapper h-100 dark-helper">
                                    <h5 class="mb-3">Border color</h5>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-primary border"></div><span>.border-primary</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-secondary border"></div><span>.border-secondary</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-tertiary border"></div><span>.border-tertiary</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-success border"></div><span>.border-success</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-danger border"></div><span>.border-danger</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-warning border"></div><span>.border-warning</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-info border"></div><span>.border-info</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-dark border"></div><span>.border-dark</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="border-wrapper h-100 dark-helper">
                                    <h5 class="mb-3">Border-width</h5>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-w-1 solid-border"></div><span>.b-w-1</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-w-2 solid-border"></div><span>.b-w-2</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-w-3 solid-border"></div><span>.b-w-3</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-w-4 solid-border"></div><span>.b-w-4</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-w-5 solid-border"></div><span>.b-w-5</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-w-6 solid-border"></div><span>.b-w-6</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-w-7 solid-border"></div><span>.b-w-7</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-w-8 solid-border"></div><span>.b-w-8</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-w-9 solid-border"></div><span>.b-w-9</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-w-10 solid-border"></div><span>.b-w-10 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="border-wrapper h-100 dark-helper">
                                    <h5 class="mb-3">Text colors</h5>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text solid-border font-primary">C </div>
                                        <span>.font-primary</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text solid-border font-secondary">C </div>
                                        <span>.font-secondary</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text solid-border font-tertiary">C </div>
                                        <span>.font-tertiary</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text solid-border font-success">C </div>
                                        <span>.font-success</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text solid-border font-danger">C </div>
                                        <span>.font-danger</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text solid-border font-warning">C </div>
                                        <span>.font-warning</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text solid-border font-info">C </div>
                                        <span>.font-info</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text solid-border font-dark">C </div>
                                        <span>.font-dark</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text solid-border font-light bg-dark">C </div>
                                        <span>.font-light</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Border color Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Border and Displays</h4>
                        <p class="desc mb-0 mt-1"><span>Use all direction</span><code>.b-t-*/ .b-b-*/ .b-l-*/
                                .b-r-*</code><span>border components.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xl-4 col-sm-6">
                                <div class="border-wrapper h-100">
                                    <h5 class="mb-3">Additive border </h5>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light solid-border"></div><span>.border</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border-top"></div><span>.border-top</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border-bottom"></div><span>.border-bottom</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border-start"></div><span>.border-start</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border-end"></div><span>.border-end</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="border-wrapper h-100">
                                    <h5 class="mb-3">Subtractive border</h5>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light solid-border border-0"> </div>
                                        <span>.border-0</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light solid-border border-top-0"> </div>
                                        <span>.border-top-0</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light solid-border border-end-0"> </div>
                                        <span>.border-end-0</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light solid-border border-bottom-0"> </div>
                                        <span>.border-bottom-0</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light solid-border border-start-0"> </div>
                                        <span>.border-start-0</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12">
                                <div class="border-wrapper h-100">
                                    <h5 class="mb-3">Additive radius</h5>
                                    <div class="helper-common-box">
                                        <div class="helper-radius radius-wrapper rounded"></div><span>.rounded</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-radius radius-wrapper rounded-top"></div>
                                        <span>.rounded-top</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-radius radius-wrapper rounded-end"></div>
                                        <span>.rounded-end</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-radius radius-wrapper rounded-bottom"></div>
                                        <span>.rounded-bottom</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-radius radius-wrapper rounded-start"></div>
                                        <span>.rounded-start</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-radius radius-wrapper rounded-pill"></div>
                                        <span>.rounded-pill</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-radius radius-wrapper rounded-circle"></div>
                                        <span>.rounded-circle</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-radius radius-wrapper rounded-0"></div><span>.rounded-0 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Background colors Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Styles in Borders</h4>
                        <p class="desc mb-0 mt-1"><span>Use the different styles of borders like</span><code>border
                                radius/border-color/border-width.</code><span>Use of any components.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xl-6 col-sm-6">
                                <div class="border-wrapper h-100">
                                    <h5 class="mb-3">Dark background</h5>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-primary"></div><span>.bg-primary </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-secondary"></div><span>.bg-secondary </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-tertiary"></div><span>.bg-tertiary </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-success"></div><span>.bg-success </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-danger"></div><span>.bg-danger </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-warning"></div><span>.bg-warning </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-info"></div><span>.bg-info </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-dark"></div><span>.bg-dark </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light"></div><span>.bg-light </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-6">
                                <div class="border-wrapper h-100">
                                    <h5 class="mb-3">Light backgrounds</h5>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light-primary"> </div><span>.bg-light-primary </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light-secondary"></div><span>.bg-light-secondary</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light-tertiary"></div><span>.bg-light-tertiary</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light-success"></div><span>.bg-light-success</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light-danger"></div><span>.bg-light-danger</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light-warning"></div><span>.bg-light-warning</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light-info"></div><span>.bg-light-info</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light-dark"></div><span>.bg-light-dark</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light-light"></div><span>.bg-light-light</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Border color Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Border color</h4>
                        <p class="desc mb-0 mt-1"><span>Use all direction</span><code>.b-t-*/ .b-b-*/ .b-l-*/
                                .b-r-*</code><span>border components.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="gradient-border">
                            <div class="helper-common-box">
                                <div class="helper-box b-t-primary solid-border fill-wrapper"></div>
                                <span>.b-t-primary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-primary solid-border fill-wrapper"></div>
                                <span>.b-b-primary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-primary solid-border fill-wrapper"></div>
                                <span>.b-l-primary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-primary solid-border fill-wrapper"></div>
                                <span>.b-r-primary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-secondary solid-border fill-wrapper"></div>
                                <span>.b-t-secondary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-secondary solid-border fill-wrapper"></div>
                                <span>.b-b-secondary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-secondary solid-border fill-wrapper"></div>
                                <span>.b-l-secondary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-secondary solid-border fill-wrapper"></div>
                                <span>.b-r-secondary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-tertiary solid-border fill-wrapper"></div>
                                <span>.b-t-tertiary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-tertiary solid-border fill-wrapper"></div>
                                <span>.b-b-tertiary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-tertiary solid-border fill-wrapper"></div>
                                <span>.b-l-tertiary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-tertiary solid-border fill-wrapper"></div>
                                <span>.b-r-tertiary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-success solid-border fill-wrapper"></div>
                                <span>.b-t-success</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-success solid-border fill-wrapper"></div>
                                <span>.b-b-success</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-success solid-border fill-wrapper"></div>
                                <span>.b-l-success</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-success solid-border fill-wrapper"></div>
                                <span>.b-r-success</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-danger solid-border fill-wrapper"></div><span>.b-t-danger</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-danger solid-border fill-wrapper"></div><span>.b-b-danger</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-danger solid-border fill-wrapper"></div><span>.b-l-danger</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-danger solid-border fill-wrapper"></div><span>.b-r-danger</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-warning solid-border fill-wrapper"></div>
                                <span>.b-t-warning</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-warning solid-border fill-wrapper"></div>
                                <span>.b-b-warning</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-warning solid-border fill-wrapper"></div>
                                <span>.b-l-warning</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-warning solid-border fill-wrapper"></div>
                                <span>.b-r-warning</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-info solid-border fill-wrapper"></div><span>.b-t-info</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-info solid-border fill-wrapper"></div><span>.b-b-info</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-info solid-border fill-wrapper"></div><span>.b-l-info</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-info solid-border fill-wrapper"></div><span>.b-r-info</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-dark solid-border fill-wrapper"></div><span>.b-t-dark</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-dark solid-border fill-wrapper"></div><span>.b-b-dark</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-dark solid-border fill-wrapper"></div><span>.b-l-dark</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-dark solid-border fill-wrapper"></div><span>.b-r-dark</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-light solid-border fill-wrapper"></div><span>.b-t-light</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-light solid-border fill-wrapper"></div><span>.b-b-light</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-light solid-border fill-wrapper"></div><span>.b-l-light</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-light solid-border fill-wrapper"></div><span>.b-r-light</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Image Size Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Images Sizes</h4>
                        <p class="desc mb-0 mt-1"><span>Use the width and height of images class like:</span><code>.img-* ,
                                .img-h-*</code><span>.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="gradient-border gap-3"><img class="img-30 img-h-30"
                                src="{{ asset('assets/images/avatar/5.jpg') }}" alt="img-size-30"><img class="img-40 img-h-40"
                                src="{{ asset('assets/images/avatar/5.jpg') }}" alt="img-size-40"><img class="img-50 img-h-50"
                                src="{{ asset('assets/images/avatar/5.jpg') }}" alt="img-size-50"><img class="img-60 img-h-60"
                                src="{{ asset('assets/images/avatar/5.jpg') }}" alt="img-size-60"><img class="img-70 img-h-70"
                                src="{{ asset('assets/images/avatar/5.jpg') }}" alt="img-size-70"><img class="img-80 img-h-80"
                                src="{{ asset('assets/images/avatar/5.jpg') }}" alt="img-size-80"><img class="img-90 img-h-90"
                                src="{{ asset('assets/images/avatar/5.jpg') }}" alt="img-size-90"><img class="img-100 img-h-100"
                                src="{{ asset('assets/images/avatar/5.jpg') }}" alt="img-size-100"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Font-Style Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Font Style</h4>
                        <p class="desc mb-0 mt-1"><span>Use the font-style
                                like:</span><code>.f-s-*[normal/italic/oblique/initial/inherit]</code><span>.</span></p>
                    </div>
                    <div class="card-body height_equal">
                        <p class="f-s-normal">This is a <strong>.f-s-normal</strong> font-style</p>
                        <p class="f-s-italic">This is a <strong>.f-s-italic</strong> font-style</p>
                        <p class="f-s-oblique">This is a <strong>.f-s-oblique</strong> font-style</p>
                        <p class="f-s-initial">This is a <strong>.f-s-initial</strong> font-style</p>
                        <p class="f-s-inherit mb-0">This is a <strong>.f-s-inherit</strong> font-style</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <!-- Font Weight card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Font weight</h4>
                        <p class="desc mb-0 mt-1"><span>Using, </span><code>f-w-*</code><span> class, you can change the
                                font weight.</span></p>
                    </div>
                    <div class="card-body d-flex flex-column gap-3">
                        <h1 class="f-w-700">You can set bolder font weight Heading 1 using<code> f-w-700</code></h1>
                        <h2 class="f-w-600">You can set bold font weight Heading 2 using<code> f-w-600</code></h2>
                        <h3 class="f-w-500">You can set medium font weight Heading 3 using<code> f-w-500</code></h3>
                        <h4 class="f-w-400">You can set normal font weight Heading 4 using<code> f-w-400</code></h4>
                        <h5 class="f-w-300">You can set light font weight Heading 5 using<code> f-w-300</code></h5>
                        <h6 class="f-w-100">You can set light font weight Heading 6 using<code> f-w-100</code></h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <!-- Text Color Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Text Color</h4>
                        <p class="desc mb-0 mt-1"><span>You can Give text color by using,
                            </span><code>font-*</code><span>Class.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-column gap-2">
                            <p class="font-primary mb-0">This is Primary text You can archive this
                                adding<code>.font-primary</code> class</p>
                            <p class="font-secondary mb-0">This is Secondary text You can archive this
                                adding<code>.font-secondary</code> class</p>
                            <p class="font-tertiary mb-0">This is Tertiary text You can archive this
                                adding<code>.font-tertiary</code> class</p>
                            <p class="font-success mb-0">This is Success text You can archive this
                                adding<code>.font-success</code> class</p>
                            <p class="font-info mb-0">This is Info text You can archive this adding<code>.font-info</code>
                                class</p>
                            <p class="font-warning mb-0">This is Warning text You can archive this
                                adding<code>.font-warning</code> class</p>
                            <p class="font-danger mb-0">This is Danger text You can archive this
                                adding<code>.font-danger</code> class</p>
                            <p class="font-dark mb-0">This is Dark text You can archive this adding<code>.font-dark</code>
                                class</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Font-Size Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Font Size</h4>
                        <p class="desc mb-0 mt-1"><span>Use the font-size for</span><code>.f-*
                                [14/16/18/20/22/24/26/28/30/32/34/36/38/40]</code><span>.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="gradient-border">
                            <div class="font-wrapper solid-border">
                                <div class="f-12">Font-size .f-12</div>
                            </div>
                            <div class="font-wrapper solid-border">
                                <div class="f-14">Font-size .f-14</div>
                            </div>
                            <div class="font-wrapper solid-border">
                                <div class="f-16">Font-size .f-16</div>
                            </div>
                            <div class="font-wrapper solid-border">
                                <div class="f-18">Font-size .f-18</div>
                            </div>
                            <div class="font-wrapper solid-border">
                                <div class="f-20">Font-size .f-20</div>
                            </div>
                            <div class="font-wrapper solid-border">
                                <div class="f-22">Font-size .f-22</div>
                            </div>
                            <div class="font-wrapper solid-border">
                                <div class="f-24">Font-size .f-24</div>
                            </div>
                            <div class="font-wrapper solid-border">
                                <div class="f-26">Font-size .f-26</div>
                            </div>
                            <div class="font-wrapper solid-border">
                                <div class="f-28">Font-size .f-28</div>
                            </div>
                            <div class="font-wrapper solid-border">
                                <div class="f-30">Font-size .f-30</div>
                            </div>
                            <div class="font-wrapper solid-border">
                                <div class="f-32">Font-size .f-32</div>
                            </div>
                            <div class="font-wrapper solid-border">
                                <div class="f-34">Font-size .f-34</div>
                            </div>
                            <div class="font-wrapper solid-border">
                                <div class="f-36">Font-size .f-36</div>
                            </div>
                            <div class="font-wrapper solid-border">
                                <div class="f-38">Font-size .f-38</div>
                            </div>
                            <div class="font-wrapper solid-border">
                                <div class="f-40">Font-size .f-40</div>
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
