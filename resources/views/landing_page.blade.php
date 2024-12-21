<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Edmin admin is super flexible, powerful, clean &amp; modern responsive bootstrap admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Edmin admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <title>Edmin - Premium Admin Template</title>
    <!-- Favicon icon-->
    <link rel="icon" href="{{ asset('assets/images/favicon/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.png') }}" type="image/x-icon">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&amp;family=Dancing+Script:wght@700&amp;family=Lobster&amp;display=swap"
        rel="stylesheet">
    <!-- Font awesome icon css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/@fortawesome/fontawesome-free/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/@fortawesome/fontawesome-free/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/@fortawesome/fontawesome-free/css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/@fortawesome/fontawesome-free/css/regular.css') }}">
    <!-- Ico Icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/@icon/icofont/icofont.css') }}">
    <!-- Themify Icon css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/css/vendors/themify-icons/themify-icons/css/themify.css') }}">
    <!-- Animation css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css/animate.css') }}">
    <!-- Animate css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/wowjs/css/libs/animate.css') }}">
    <!-- App css-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="landing-page">
    <!-- tap to top-->
    <div class="tap-top">
        <svg class="feather">
            <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-up') }}"></use>
        </svg>
    </div>
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <!-- Page Body Start-->
        <!-- header start-->
        <header class="landing-header">
            <div class="container-fluid fluid-space">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-light p-0" id="navbar-example2"><a class="navbar-brand"
                                href="javascript:void(0)"> <img class="img-fluid logo-size"
                                    src="{{ asset('assets/images/logo/landing-logo.png') }}" alt=""></a>
                            <ul class="landing-menu nav nav-pills">
                                <li class="nav-item menu-back">back<i class="fa fa-angle-right"></i></li>
                                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#page">Page</a></li>
                                <li class="nav-item"><a class="nav-link" href="#frameworks">Frameworks</a></li>
                                <li class="nav-item"><a class="nav-link" href="#feature">Feature</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="https://docs.pixelstrap.net/admin/edmin/document/"
                                        target="_blank">Documentation</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="https://docs.google.com/forms/d/e/1FAIpQLSe6hKUXw_By-pg7yabL0FxoTM02ZPTxoXy8PE3yboRuUCuyeA/viewform"
                                        target="_blank">Hire us</a></li>
                            </ul>
                            <div class="buy-block"><a class="btn-landing btn-primary"
                                    href="https://themeforest.net/user/pixelstrap/portfolio" target="_blank">Buy Now</a>
                                <div class="toggle-menu"><i class="fa fa-bars"></i></div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end-->
        <!--home-section-start-->
        <section class="landing-home" id="home">
            <div class="container-fluid fluid-space h-100">
                <div class="row h-100">
                    <div class="col-12 col-lg-5 home-left order-1 order-lg-0">
                        <div class="landing-title text-center text-lg-start">
                            <h5 class="sub-title font-primary"><img class="html-gif img-fluid img-32"
                                    src="{{ asset('assets/images/landing/check.gif') }}" alt="">Kick Start
                                Your Project using</h5>
                            <h2 class="header-title">
                                Edmin-Multipurpose Bootstrap Admin <span class="gradient-1">Dashboard
                                </span>&nbsp;Template </h2>
                            <p class="mx-0">Edmin is Perfect Admin template for any business. it has all features and
                                modules to create your amazing C-panel. this template for selling Default, Ecommerce
                                etc...... </p>
                            <div class="main-buttons"><a class="wow pulse" href="{{ route('admin.dashboard') }}" target="_blank"
                                    data-bs-placement="top" data-bs-toggle="tooltip" aria-label="HTML"
                                    data-bs-original-title="HTML"><img class="img-fluid"
                                        src="{{ asset('assets/images/landing/icon/html/html.png') }}"
                                        alt=""></a><a class="wow pulse" href="#" target="_blank"
                                    data-bs-placement="top" data-bs-toggle="tooltip" aria-label="Angular"
                                    data-bs-original-title="Angular"><img class="img-fluid"
                                        src="{{ asset('assets/images/landing/icon/angular/angular.png') }}" alt=""></a><a
                                    class="wow pulse" href="#" target="_blank" data-bs-placement="top"
                                    data-bs-toggle="tooltip" aria-label="React" data-bs-original-title="React"><img
                                        class="img-fluid" src="{{ asset('assets/images/landing/icon/react/React-icon.png') }}"
                                        alt=""></a></div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 home-right">
                        <div class="landing-image"><img class="img-fluid home-img"
                                src="{{ asset('assets/images/landing/home.png') }}" alt="">
                            <ul class="animate-img">
                                <li class="right-img"><img class="img-fluid"
                                        src="{{ asset('assets/images/landing/overview.png') }}" alt=""></li>
                                <li class="left-img"><img class="img-fluid"
                                        src="{{ asset('assets/images/landing/product.png') }}" alt=""></li>
                                <li class="left-gif"><img class="img-fluid" src="{{ asset('assets/images/landing/new.gif') }}"
                                        alt=""></li>
                                <li class="sub-title"><span>Fantastic</span></li>
                                <li class="arrow-decore"><img src="{{ asset('assets/images/landing/arrow.png') }}"
                                        alt=""></li>
                                <li class="outline-text">
                                    <h2>3+ Dashboard</h2>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--home-section-end-->
        <!--page-section-start-->
        <section class="section-py-space landing-page-design" id="page">
            <div class="title-style-1 text-center wow pulse">
                <h2 class="main-title">Creative Layout</h2><img src="{{ asset('assets/images/landing/shape-1.png') }}"
                    alt="">
                <p class="description-title">We comes up with most creative and useful main general purpose dashboard
                    template</p>
            </div>
            <div class="container-fluid fluid-space">
                <div class="row justify-content-center g-5">
                    <div class="col-lg-4 col-md-6 wow pulse">
                        <div class="layout-box">
                            <div class="img-wrraper">
                                <div class="layout-img"><a href="{{ route('admin.dashboard') }}" target="_blank"><img
                                            class="img-fluid w-100" src="{{ asset('assets/images/landing/layout/1.png') }}"
                                            alt=""></a></div>
                                <div class="demo-btn gap-2">
                                    <div class="link-btn"><a class="default-view" href="{{ route('admin.dashboard') }}"
                                            data-attr="default" target="_blank"> <img class="img-fluid"
                                                src="{{ asset('assets/images/landing/svg/1.svg') }}" alt=""></a></div>
                                    <div class="link-btn"><a href="#" target="_blank"> <img class="img-fluid"
                                                src="{{ asset('assets/images/landing/svg/2.svg') }}" alt=""></a></div>
                                    <div class="link-btn"><a href="#" target="_blank"> <img class="img-fluid"
                                                src="{{ asset('assets/images/landing/svg/3.svg') }}" alt=""></a></div>
                                </div>
                            </div>
                            <div class="layout-btn"><a class="btn btn-primary" href="{{ route('admin.dashboard') }}">Default</a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow pulse">
                        <div class="layout-box">
                            <div class="img-wrraper">
                                <div class="layout-img"><a href="{{ route('admin.ecommerce_dashboard') }}" target="_blank"><img
                                            class="img-fluid w-100" src="{{ asset('assets/images/landing/layout/2.png') }}"
                                            alt=""></a></div>
                                <div class="demo-btn gap-2">
                                    <div class="link-btn"><a class="default-view" href="{{ route('admin.ecommerce_dashboard') }}"
                                            data-attr="default" target="_blank"> <img class="img-fluid"
                                                src="{{ asset('assets/images/landing/svg/1.svg') }}" alt=""></a></div>
                                    <div class="link-btn"><a href="#" target="_blank"> <img class="img-fluid"
                                                src="{{ asset('assets/images/landing/svg/2.svg') }}" alt=""></a></div>
                                    <div class="link-btn"><a href="#" target="_blank"> <img class="img-fluid"
                                                src="{{ asset('assets/images/landing/svg/3.svg') }}" alt=""></a></div>
                                </div>
                            </div>
                            <div class="layout-btn"><a class="btn btn-primary" href="{{ route('admin.ecommerce_dashboard') }}">Ecommerce</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow pulse">
                        <div class="layout-box">
                            <div class="img-wrraper">
                                <div class="layout-img"><a href="{{ route('admin.project_dashboard') }}" target="_blank"><img
                                            class="img-fluid w-100" src="{{ asset('assets/images/landing/layout/3.png') }}"
                                            alt=""></a></div>
                                <div class="demo-btn gap-2">
                                    <div class="link-btn"><a class="default-view" href="{{ route('admin.project_dashboard') }}"
                                            data-attr="default" target="_blank"> <img class="img-fluid"
                                                src="{{ asset('assets/images/landing/svg/1.svg') }}" alt=""></a></div>
                                    <div class="link-btn"><a href="#" target="_blank"> <img class="img-fluid"
                                                src="{{ asset('assets/images/landing/svg/2.svg') }}" alt=""></a></div>
                                    <div class="link-btn"><a href="#" target="_blank"> <img class="img-fluid"
                                                src="{{ asset('assets/images/landing/svg/3.svg') }}" alt=""></a></div>
                                </div>
                            </div>
                            <div class="layout-btn"><a class="btn btn-primary" href="{{ route('admin.project_dashboard') }}">Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page-section-end-->
        <!-- frameworks-section-start-->
        <section class="section-py-space framework-section" id="frameworks">
            <div class="container-fluid fluid-space">
                <div class="row">
                    <div class="col-sm-12 wow pulse">
                        <div class="title-style-1 text-center">
                            <h2 class="main-title">Top Frameworks</h2><img src="{{ asset('assets/images/landing/shape-1.png') }}"
                                alt="">
                            <p class="description-title">We comes up with most creative and useful main general purpose
                                dashboard template</p>
                        </div>
                    </div>
                    <div class="col-sm-12 framworks">
                        <ul class="nav nav-tabs frame-tab justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active d-flex" id="html-tab" data-bs-toggle="tab"
                                    data-bs-target="#html" type="button" role="tab" aria-controls="html"
                                    aria-selected="true"><img src="{{ asset('assets/images/landing/icon/html/html.png') }}"
                                        alt=""><span class="text-start nav-text">HTML</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link d-flex" id="angular-tab" data-bs-toggle="tab"
                                    data-bs-target="#angular" type="button" role="tab" aria-controls="angular"
                                    aria-selected="false"><img src="{{ asset('assets/images/landing/icon/angular/angular.png') }}"
                                        alt=""><span class="text-start nav-text">Angular</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link d-flex" id="react-tab" data-bs-toggle="tab"
                                    data-bs-target="#react" type="button" role="tab" aria-controls="react"
                                    aria-selected="false"><img
                                        src="{{ asset('assets/images/landing/icon/react/React-icon.png') }}" alt=""><span
                                        class="text-start nav-text">React</span></button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="html" role="tabpanel"
                                aria-labelledby="html-tab">
                                <ul class="framworks-list">
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('assets/images/landing/framework/html/bootstrap.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Bootstrap 5</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('assets/images/landing/framework/html/css.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">CSS</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('assets/images/landing/framework/html/sass.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Sass</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('assets/images/landing/framework/html/pug.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Pug</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('assets/images/landing/framework/html/npm.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">NPM</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('assets/images/landing/framework/html/chart.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Charts</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('assets/images/landing/framework/html/gulp.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Gulp</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('assets/images/landing/framework/html/starter-kit.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Starter Kit</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('assets/images/landing/framework/html/ui-kits.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">40+ UI Kits</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('assets/images/landing/framework/html/builder.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Builders</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('assets/images/landing/framework/html/11-icon.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">11 Icon Sets</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('assets/images/landing/framework/html/forms.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Forms</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('assets/images/landing/framework/html/table.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Tables</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('assets/images/landing/framework/html/app.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">17+ Apps</h5>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="angular" role="tabpanel" aria-labelledby="angular-tab">
                                <ul class="framworks-list">
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/angular/logo.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Angular 17</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/angular/Typescript.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Typescript</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/angular/scss.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">scss</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/angular/jQuery.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">No Jquery</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/angular/Router.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Router</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/angular/Ng-Bootstrap.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Ng- Bootstrap</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/angular/ngx-translate.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">i18 ngx- translate</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/angular/ng-apexcharts.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">ng-apexcharts</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/angular/Chartist.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Chartist</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/angular/map.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Google Map</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/angular/gallery.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Gallery</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/angular/Ecommerce.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Ecommerce</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/angular/ng-google-charts.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">ng-google-charts</h5>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="react" role="tabpanel" aria-labelledby="react-tab">
                                <ul class="framworks-list">
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/react/React-icon.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">React 18</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/react/React-i18next.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">React-i18next</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/react/Reactstrap.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">React Strap</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/react/scss.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Sass</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/react/React-redux.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">React-Redux</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/react/React-icons.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">React-icons</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/react/React-hook.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">React-hook-form</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/react/Typescript.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Typescript</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/react/bootstrap.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Bootstrap</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/react/React-router.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">React-router-dom</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/react/Charts.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Charts</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/react/map.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Map</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/react/Crud.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Crud</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/react/gallery.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Gallery</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/react/React-icon.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">State and Props</h5>
                                    </li>
                                    <li class="box">
                                        <div><img src="{{ asset('assets/images/landing/framework/react/9App.png') }}"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">9+ App</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--frameworks-section-end-->
        <!-- application-section-start-->
        <section class="section-py-space application-section">
            <div class="container-fluid fluid-space">
                <div class="row">
                    <div class="col-sm-12 wow pulse">
                        <div class="title-style-1 text-center">
                            <h2 class="main-title">Usefull Application</h2><img
                                src="{{ asset('assets/images/landing/shape-1.png') }}" alt="">
                            <p class="description-title">Edmin admin template provides 3 workable application and
                                designs of other applications.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 application">
                        <div class="row application-block g-5">
                            <div class="col-lg-4 col-md-6 wow pulse">
                                <div class="demo-box">
                                    <div class="img-wrraper"><a href="{{ route('admin.social_app') }}" target="_blank"><img
                                                class="img-fluid" src="{{ asset('assets/images/landing/application/1.png') }}"
                                                alt=""></a></div>
                                    <div class="demo-detail"><a class="btn btn-primary btn-outline-primary"
                                            href="{{ route('admin.social_app') }}" target="_blank">Social App</a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow pulse">
                                <div class="demo-box">
                                    <div class="img-wrraper"><a href="{{ route('admin.knowledgebase') }}" target="_blank"><img
                                                class="img-fluid" src="{{ asset('assets/images/landing/application/2.png') }}"
                                                alt=""></a></div>
                                    <div class="demo-detail"><a class="btn btn-primary btn-outline-primary"
                                            href="{{ route('admin.knowledgebase') }}" target="_blank">Knowledgebase </a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow pulse">
                                <div class="demo-box">
                                    <div class="img-wrraper"><a href="{{ route('admin.support_ticket') }}" target="_blank"><img
                                                class="img-fluid" src="{{ asset('assets/images/landing/application/3.png') }}"
                                                alt=""></a></div>
                                    <div class="demo-detail"><a class="btn btn-primary btn-outline-primary"
                                            href="{{ route('admin.support_ticket') }}" target="_blank">Support Ticket</a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow pulse">
                                <div class="demo-box">
                                    <div class="img-wrraper"><a href="{{ route('admin.letter_box') }}" target="_blank"><img
                                                class="img-fluid" src="{{ asset('assets/images/landing/application/4.png') }}"
                                                alt=""></a></div>
                                    <div class="demo-detail"><a class="btn btn-primary btn-outline-primary"
                                            href="{{ route('admin.letter_box') }}" target="_blank">Email Dashboard </a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow pulse">
                                <div class="demo-box">
                                    <div class="img-wrraper"><a href="{{ route('admin.to_do') }}" target="_blank"><img
                                                class="img-fluid" src="{{ asset('assets/images/landing/application/5.png') }}"
                                                alt=""></a></div>
                                    <div class="demo-detail"><a class="btn btn-primary btn-outline-primary"
                                            href="{{ route('admin.to_do') }}" target="_blank">To-Do</a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow pulse">
                                <div class="demo-box">
                                    <div class="img-wrraper"><a href="{{ route('admin.job_cards_view') }}" target="_blank"><img
                                                class="img-fluid" src="{{ asset('assets/images/landing/application/6.png') }}"
                                                alt=""></a></div>
                                    <div class="demo-detail"><a class="btn btn-primary btn-outline-primary"
                                            href="{{ route('admin.job_cards_view') }}" target="_blank">Job Search</a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow pulse">
                                <div class="demo-box">
                                    <div class="img-wrraper"><a href="{{ route('admin.product_page') }}" target="_blank"><img
                                                class="img-fluid" src="{{ asset('assets/images/landing/application/7.png') }}"
                                                alt=""></a></div>
                                    <div class="demo-detail"><a class="btn btn-primary btn-outline-primary"
                                            href="{{ route('admin.product_page') }}" target="_blank">Ecommerce </a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow pulse">
                                <div class="demo-box">
                                    <div class="img-wrraper"><a href="{{ route('admin.kanban') }}" target="_blank"><img
                                                class="img-fluid" src="{{ asset('assets/images/landing/application/8.png') }}"
                                                alt=""></a></div>
                                    <div class="demo-detail"><a class="btn btn-primary btn-outline-primary"
                                            href="{{ route('admin.kanban') }}" target="_blank">Kanban </a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow pulse">
                                <div class="demo-box">
                                    <div class="img-wrraper"><a href="{{ route('admin.file_manager') }}" target="_blank"><img
                                                class="img-fluid" src="{{ asset('assets/images/landing/application/9.png') }}"
                                                alt=""></a></div>
                                    <div class="demo-detail"><a class="btn btn-primary btn-outline-primary"
                                            href="{{ route('admin.file_manager') }}" target="_blank">File Manager </a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow pulse">
                                <div class="demo-box">
                                    <div class="img-wrraper"><a href="{{ route('admin.project_list') }}" target="_blank"><img
                                                class="img-fluid" src="{{ asset('assets/images/landing/application/10.png') }}"
                                                alt=""></a></div>
                                    <div class="demo-detail"><a class="btn btn-primary btn-outline-primary"
                                            href="{{ route('admin.project_list') }}" target="_blank">Project </a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow pulse">
                                <div class="demo-box">
                                    <div class="img-wrraper"><a href="{{ route('admin.contacts') }}" target="_blank"><img
                                                class="img-fluid" src="{{ asset('assets/images/landing/application/11.png') }}"
                                                alt=""></a></div>
                                    <div class="demo-detail"><a class="btn btn-primary btn-outline-primary"
                                            href="{{ route('admin.contacts') }}" target="_blank">Contacts </a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow pulse">
                                <div class="demo-box">
                                    <div class="img-wrraper"><a href="{{ route('admin.chat_private') }}" target="_blank"><img
                                                class="img-fluid" src="{{ asset('assets/images/landing/application/12.png') }}"
                                                alt=""></a></div>
                                    <div class="demo-detail"><a class="btn btn-primary btn-outline-primary"
                                            href="{{ route('admin.chat_private') }}" target="_blank">Chat</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- application-section-end-->
        <!-- features-section-start-->
        <section class="section-py-space features-section" id="feature">
            <div class="container-fluid fluid-space">
                <div class="row">
                    <div class="col-sm-12 wow pulse">
                        <div class="title-style-1 text-center">
                            <h2 class="main-title">Unique Features</h2><img src="{{ asset('assets/images/landing/shape-1.png') }}"
                                alt="">
                            <p class="description-title">We are using scss 7-1 tire folder structure for this admin
                                template</p>
                        </div>
                    </div>
                </div>
                <div class="row g-3 g-sm-5 feature-content">
                    <div class="col-xxl-3 col-lg-4 col-sm-6 wow flipInX">
                        <div class="feature-box">
                            <div>
                                <div class="icon-wrraper bg-1">
                                    <svg class="svg-w-25">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#landing-html') }}"></use>
                                    </svg>
                                </div>
                                <h4 class="mb-1">Quality & Clean Code</h4>
                                <p>All you need to know of using clean code as a manager to make your team and your
                                    software awesome.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-6 wow flipInX">
                        <div class="feature-box">
                            <div>
                                <div class="icon-wrraper bg-2">
                                    <svg class="svg-w-25">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#landing-bootstrap') }}"></use>
                                    </svg>
                                </div>
                                <h4 class="mb-1">Bootstrap v5.0</h4>
                                <p>Bootstrap is built on designed to be responsive 12- column grids, it automatically
                                    adjusts the layout.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-6 wow flipInX">
                        <div class="feature-box">
                            <div>
                                <div class="icon-wrraper bg-3">
                                    <svg class="svg-w-25">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#handmade-landing') }}"></use>
                                    </svg>
                                </div>
                                <h4 class="mb-1">Handmade icons</h4>
                                <p>let’s learn how to use our own svg icons in edmin admin template. icon system with
                                    svg sprites</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-6 wow flipInX">
                        <div class="feature-box">
                            <div>
                                <div class="icon-wrraper bg-4">
                                    <svg class="svg-w-25">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#landing-components') }}"></use>
                                    </svg>
                                </div>
                                <h4 class="mb-1">Limitless components</h4>
                                <p>The limitless laypout collection and ui kit library is the biggest collection of
                                    layout for web design</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-6 wow flipInX">
                        <div class="feature-box">
                            <div>
                                <div class="icon-wrraper bg-5">
                                    <svg class="svg-w-25">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#landing-customizer') }}"></use>
                                    </svg>
                                </div>
                                <h4 class="mb-1">Easy Customizable</h4>
                                <p>Easy step-by-step guide for beginners. customize your layout, settings and content
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-6 wow flipInX">
                        <div class="feature-box">
                            <div>
                                <div class="icon-wrraper bg-6">
                                    <svg class="svg-w-25">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#landing-responsive') }}"></use>
                                    </svg>
                                </div>
                                <h4 class="mb-1">Responsive & user-Friendly</h4>
                                <p>Use responsive design to connect with all device users start designing your website
                                    for mobile devices.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-6 wow flipInX">
                        <div class="feature-box">
                            <div>
                                <div class="icon-wrraper bg-7">
                                    <svg class="svg-w-25">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#landing-support') }}"></use>
                                    </svg>
                                </div>
                                <h4 class="mb-1">Premium support</h4>
                                <p>Bwe are always be their for your support and you are facing some issues you can
                                    create ticket.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-6 wow flipInX">
                        <div class="feature-box">
                            <div>
                                <div class="icon-wrraper bg-8">
                                    <svg class="svg-w-25">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#landing-colors') }}"></use>
                                    </svg>
                                </div>
                                <h4 class="mb-1">Colors Options</h4>
                                <p>edmin provide unlimited main color option.other colors can change easily using sass
                                    variables</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features-section-end-->
        <!-- support-section-start-->
        <section class="section-py-space support-section">
            <div class="title-style-1 text-center wow pulse">
                <h2 class="main-title">Premium Support</h2><img src="{{ asset('assets/images/landing/shape-1.png') }}"
                    alt="">
                <p class="description-title">“fast issue resolution, and dedicated experts for a seamless experience”
                </p>
            </div>
            <div class="container-fluid fluid-space">
                <div class="row align-items-center">
                    <div class="col-lg-5 wow bounceInLeft order-1 order-lg-0">
                        <div class="landing-title text-start">
                            <h5 class="sub-title font-primary mb-2">Our License</h5>
                            <h2>we give it as we think that excellent support is needed</h2>
                            <p class="mx-0">Check our reviews for fast and accurate support to ensure support. we
                                offer premium assistance around-the-clock for any bugs you encounter. and we’ll do best
                                to help you out with any future updates for free.</p><a
                                class="btn btn-primary f-w-700 support-button" href="https://support.pixelstrap.com/"
                                target="_blank">Support</a>
                        </div>
                    </div>
                    <div class="col-lg-7 support-img wow bounceInRight text-center text-lg-end"><img class="img-1"
                            src="{{ asset('assets/images/landing/support.png') }}" alt=""><img class="img-2"
                            src="{{ asset('assets/images/landing/arrow-2.png') }}" alt=""></div>
                </div>
            </div>
        </section>
        <!-- support-section-end-->
        <!-- footer-section-start-->
        <section class="landing-footer section-py-space" id="footer">
            <div class="triangle"></div>
            <ul class="shape">
                <li class="shape1"><img class="img-fluid" src="{{ asset('assets/images/landing/footer/shape1.png') }}"
                        alt=""></li>
                <li class="shape2"><img class="img-fluid" src="{{ asset('assets/images/landing/footer/shape2.png') }}"
                        alt=""></li>
                <li class="shape3"><img class="img-fluid" src="{{ asset('assets/images/landing/footer/shape3.png') }}"
                        alt=""></li>
                <li class="shape4"><img class="img-fluid" src="{{ asset('assets/images/landing/footer/shape4.png') }}"
                        alt=""></li>
                <li class="shape5"><img class="img-fluid" src="{{ asset('assets/images/landing/footer/shape5.png') }}"
                        alt=""></li>
                <li class="shape6"><img class="img-fluid" src="{{ asset('assets/images/landing/footer/shape6.png') }}"
                        alt=""></li>
                <li class="shape7"><img class="img-fluid" src="{{ asset('assets/images/landing/footer/shape1.png') }}"
                        alt=""></li>
                <li class="shape8"><img class="img-fluid" src="{{ asset('assets/images/landing/footer/shape1.png') }}"
                        alt=""></li>
                <li class="shape9"><img class="img-fluid" src="{{ asset('assets/images/landing/footer/shape7.png') }}"
                        alt=""></li>
                <li class="shape10"><img class="img-fluid" src="{{ asset('assets/images/landing/footer/shape7.png') }}"
                        alt=""></li>
            </ul><a class="footer-logo" href="{{ route('admin.dashboard') }}"><img class="img-fluid"
                    src="{{ asset('assets/images/landing/logo/footer-logo.png') }}" alt="logo"></a>
            <ul class="star-rate">
                <li><i class="fa fa-star font-warning"></i></li>
                <li><i class="fa fa-star font-warning"></i></li>
                <li><i class="fa fa-star font-warning"></i></li>
                <li><i class="fa fa-star font-warning"> </i></li>
                <li><i class="fa-regular fa-star font-warning"> </i></li>
            </ul>
            <h2>The Edmin Bootstrap admin theme trusted by many developers world wide.</h2>
            <div class="btn-footer"><a class="btn btn-lg btn-primary" target="_blank" href="{{ route('admin.dashboard') }}"
                    data-bs-original-title="" title="">Check Now</a><a class="btn btn-lg btn-secondary"
                    target="_blank" href="https://themeforest.net/user/pixelstrap/portfolio"
                    data-bs-original-title="" title="">Buy Now</a></div>
        </section>
        <!-- footer-section-end-->
    </div>
    <!-- jquery-->
    <script src="{{ asset('assets/js/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- bootstrap js-->
    <script src="{{ asset('assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('assets/js/landing/landing.js') }}"></script>
    <!-- Wow js-->
    <script src="{{ asset('assets/js/vendors/wowjs/dist/wow.js') }}"></script>
    <script src="{{ asset('assets/js/wow-custom.js') }}"></script>
</body>

</html>
