@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Ribbons</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Ribbons</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-Fluid Starts-->
    <div class="container-fluid">
        <!-- Ribbon Left Side -->
        <div class="row">
            <div class="col-sm-12 col-xl-12">
                <!-- Left Ribbons Start-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Variations Of Left Ribbons</h4>
                        <p class="desc mb-0 mt-1"><span>Use the class of</span><code> .ribbon-* / [.ribbon-*]
                            </code><span>[ribbon-space-bottom/ribbon-clip/ribbon-vertical-left/ribbon-bookmark/ribbon-clip-bottom/ribbon-vertical-left]
                                through create ribbons and all ribbon colors are available.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-wrapper solid-border border-1 h-100 bg-light-primary">
                                    <div class="ribbon ribbon-primary ribbon-space-bottom">SAVE 10%</div>
                                    <p><em class="font-danger">Ribbon designs</em> have been a part of web design. There is
                                        a design for you in this collection, regardless of whether you use <em
                                            class="font-danger">CSS ribbons </em> to identify your items.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-wrapper solid-border border-1 h-100 bg-light-secondary">
                                    <div class="ribbon ribbon-secondary ribbon-clip">SAVE 50%</div>
                                    <p>The <em class="font-danger">ribbon and tag</em> frequently appear together because
                                        they have similar features that capture attention and make wonderful spaces for
                                        vital information.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div
                                    class="ribbon-vertical-left-wrapper vertical-lp-space solid-border border-1 h-100 bg-light-warning">
                                    <div class="ribbon ribbon-warning ribbon-vertical-left">
                                        <svg class="ticket-star-icon">
                                            <use href="{{ asset('assets/svg/iconly-sprite.svg#Ticket-star') }}"></use>
                                        </svg>
                                    </div>
                                    <p>The <em class="font-danger">ribbons</em> have also been utilised by certain inventive
                                        developers in the menu and navigation choices.The possibilities are endless when it
                                        comes to creativity. </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-wrapper solid-border border-1 h-100 bg-light-info">
                                    <div class="ribbon ribbon-info ribbon-bookmark">Cashback 20%</div>
                                    <p> Although the majority of the <em class="font-danger">ribbon components</em> on this
                                        list have static, straightforward styles, we have also gathered dynamic ribbons.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-wrapper-bottom clip-bp-space solid-border border-1 h-100 bg-light-dark">
                                    <div class="ribbon ribbon-dark ribbon-clip-bottom">40% OFF</div>
                                    <p>Edge <em class="font-danger">ribbon </em>among the most often used <em
                                            class="font-danger">ribbon styles is CSS.</em> This design's author provides you
                                        with a short piece of code that has room for several optional components and
                                        effects.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div
                                    class="ribbon-vertical-left-wrapper vertical-lp-space solid-border border-1 h-100 bg-light-danger">
                                    <div class="ribbon ribbon-bookmark ribbon-danger ribbon-vertical-left">
                                        <svg class="bell-icon">
                                            <use href="{{ asset('assets/svg/iconly-sprite.svg#Bell') }}"></use>
                                        </svg>
                                    </div>
                                    <p>The entire ribbon and other components seem clean since they were created entirely
                                        with CSS. You may utilize the <em class="font-danger">ribbons</em> as cards to
                                        deliver the material.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Left Ribbons End              -->
            </div>
        </div>
        <!-- Ribbon Right Side -->
        <div class="row">
            <div class="col-sm-12 col-xl-12">
                <!-- Right Ribbons Start-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Variations Of Right Ribbons</h4>
                        <p class="desc mb-0 mt-1"><span>Use the class of</span><code> .ribbon-* / [.ribbon-*]
                            </code><span>[ribbon-right/ribbon-clip-right/ribbon-vertical-right/ribbon-bookmark/ribbon-clip-bottom-right/ribbon-vertical-right]
                                through create ribbons and all ribbon colors are available.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-wrapper solid-border border-1 h-100 bg-light-dark">
                                    <div class="ribbon ribbon-dark ribbon-right">50% OFF</div>
                                    <p>The <em class="font-danger">ribbon and tag</em> frequently appear together because
                                        they have similar features that capture attention and make wonderful spaces for
                                        vital information.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-wrapper-right solid-border border-1 h-100 bg-light-primary">
                                    <div class="ribbon ribbon-primary ribbon-clip-right ribbon-right">SAVE 50%</div>
                                    <p>Since very early times, <em class="font-danger">ribbon designs</em> have been a part
                                        of web design. There is a design for you in this collection, regardless of whether
                                        you use <em class="font-danger">CSS ribbons </em> to identify your items.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div
                                    class="ribbon-wrapper ribbon-vertical-right-wrapper vertical-rp-space solid-border border-1 h-100 bg-light-secondary">
                                    <div class="ribbon ribbon-secondary ribbon-vertical-right ribbon-bookmark">
                                        <svg class="bag-icon">
                                            <use href="{{ asset('assets/svg/iconly-sprite.svg#Bag') }}"></use>
                                        </svg>
                                    </div>
                                    <p>The entire ribbon and other components seem clean since they were created entirely
                                        with CSS. You may utilize the <em class="font-danger">ribbons</em> as cards to
                                        deliver the material. </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-wrapper solid-border border-1 h-100 bg-light-warning">
                                    <div class="ribbon ribbon-bookmark ribbon-warning ribbon-right">SAVE 20%</div>
                                    <p>Edge <em class="font-danger">ribbon </em>among the most often used <em
                                            class="font-danger">ribbon styles is CSS.</em> This design's author provides you
                                        with a short piece of code that has room for several optional components and
                                        effects.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div
                                    class="ribbon-wrapper-bottom clip-bp-space solid-border border-1 h-100 bg-light-success">
                                    <div class="ribbon ribbon-success ribbon-clip-bottom-right">Cashback 10%</div>
                                    <p> Although the majority of the <em class="font-danger">ribbon components</em> on this
                                        list have static, straightforward styles, we have also gathered dynamic ribbons.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div
                                    class="ribbon-wrapper ribbon-vertical-right-wrapper vertical-rp-space solid-border border-1 h-100 bg-light-danger">
                                    <div class="ribbon ribbon-danger ribbon-vertical-right">
                                        <svg class="star-icon">
                                            <use href="{{ asset('assets/svg/iconly-sprite.svg#Star') }}"></use>
                                        </svg>
                                    </div>
                                    <p>The <em class="font-danger">ribbons</em> have also been utilized by certain inventive
                                        developers in the menu and navigation choices. The possibilities are endless when it
                                        comes to creativity.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Ribbons End-->
            </div>
        </div>
    </div>
    <!-- Container-Fluid Ends-->
@endsection

@section('scripts')
@endsection
