@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>FAQ</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">FAQ</li>
                        <li class="breadcrumb-item active">FAQ</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 box-col-6">
                <div class="card bg-primary height_equal">
                    <div class="card-body">
                        <div class="d-flex faq-widgets">
                            <div class="flex-grow-1">
                                <h4>Articles</h4>
                                <p>How little experience or technical knowledge you currently have. The web is a very big
                                    place, and if you are the typical internet user, you probably visit several websites
                                    every day.us.</p>
                            </div>
                            <svg class="feather">
                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 box-col-6">
                <div class="card bg-primary height_equal">
                    <div class="card-body">
                        <div class="d-flex faq-widgets">
                            <div class="flex-grow-1">
                                <h4>Knowledgebase</h4>
                                <p>A Website Designing course enables learners to use essential designing and programming
                                    tools required to do the job. The curriculum is a blend of various themes.parturient
                                    montes, nascetur ridiculus mus.</p>
                            </div>
                            <svg class="feather">
                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#book-open') }}"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 box-col-12">
                <div class="card bg-primary height_equal">
                    <div class="card-body">
                        <div class="d-flex faq-widgets">
                            <div class="flex-grow-1">
                                <h4>Support</h4>
                                <p>The customer support industry is renaissance. Customer support as a specialty is coming
                                    into its own, offering companies a competitive advantage that’s difficult to copy.</p>
                            </div>
                            <svg class="feather">
                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#aperture') }}"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="header-faq">
                    <h4 class="mb-0">Quick Questions are answered</h4>
                </div>
                <div class="row default-according style-1 faq-accordion accordion accordion-flush" id="accordionoc">
                    <div class="col-xl-8 xl-60 col-lg-6 col-md-7">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="accordion-button btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseicon" aria-expanded="false" aria-controls="collapseicon"><i
                                            class="fa-regular fa-circle-question"></i> Integrating WordPress with Your
                                        Website?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseicon" aria-labelledby="collapseicon"
                                data-bs-parent="#accordionoc">
                                <div class="card-body">How you approach this process will depend on which web host you use.
                                    For example, a lot of hosting providers use cPanel, which includes an option to set up
                                    subdomains with just a few clicks.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="accordion-button btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseicon2" aria-expanded="false"
                                        aria-controls="collapseicon2"><i class="fa-regular fa-circle-question"></i>
                                        WordPress Site Maintenance ?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseicon2" data-bs-parent="#accordionoc">
                                <div class="card-body">We’ve just published a detailed on how to backup your WordPress
                                    website, however, if you’re in a hurry, here’s a quick solution.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="accordion-button btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseicon3" aria-expanded="false"
                                        aria-controls="collapseicon2"><i class="fa-regular fa-circle-question"></i>Meta Tags
                                        in WordPress ?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseicon3" data-bs-parent="#accordionoc">
                                <div class="card-body">Manually adding meta tags in WordPress is relatively simple. For this
                                    demo, we’ll use the example from the WordPress Codex. Imagine you’re Harriet Smith, a
                                    veterinarian who blogs about their animal stories on WordPress.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="accordion-button btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseicon4" aria-expanded="false"
                                        aria-controls="collapseicon2"><i class="fa-regular fa-circle-question"></i>
                                        WordPress in Your Language ?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseicon4" data-bs-parent="#accordionoc">
                                <div class="card-body">As of version 4.0, you can have WordPress automatically install the
                                    language of your choice during the installation process.</div>
                            </div>
                        </div>
                        <div class="faq-title">
                            <h6>Intellectual Property</h6>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="accordion-button btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseicon5" aria-expanded="false"><i
                                            class="fa-regular fa-circle-question"></i> WordPress Site Maintenance
                                        ?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseicon5" aria-labelledby="collapseicon5"
                                data-bs-parent="#accordionoc">
                                <div class="card-body">We’ve just published a detailed on how to backup your WordPress
                                    website, however, if you’re in a hurry, here’s a quick solution.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="accordion-button btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseicon7" aria-expanded="false"
                                        aria-controls="collapseicon2"><i class="fa-regular fa-circle-question"></i>
                                        WordPress in Your Language ?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseicon7" data-bs-parent="#accordionoc">
                                <div class="card-body">As of version 4.0, you can have WordPress automatically install the
                                    language of your choice during the installation process.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="accordion-button btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseicon8" aria-expanded="false"
                                        aria-controls="collapseicon2"><i
                                            class="fa-regular fa-circle-question"></i>Integrating WordPress with Your
                                        Website ?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseicon8" data-bs-parent="#accordionoc">
                                <div class="card-body">How you approach this process will depend on which web host you use.
                                    For example, a lot of hosting providers use cPanel, which includes an option to set up
                                    subdomains with just a few clicks.</div>
                            </div>
                        </div>
                        <div class="faq-title">
                            <h6>Selling And Buying</h6>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="accordion-button btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseicon9" aria-expanded="false"><i
                                            class="fa-regular fa-circle-question"></i> WordPress Site Maintenance
                                        ?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseicon9" aria-labelledby="collapseicon9"
                                data-bs-parent="#accordionoc">
                                <div class="card-body">We’ve just published a detailed on how to backup your WordPress
                                    website, however, if you’re in a hurry, here’s a quick solution</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="accordion-button btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseicon10" aria-expanded="false"
                                        aria-controls="collapseicon2"><i class="fa-regular fa-circle-question"></i>Meta
                                        Tags in WordPress ?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseicon10" data-bs-parent="#accordionoc">
                                <div class="card-body">Manually adding meta tags in WordPress is relatively simple. For
                                    this demo, we’ll use the example from the WordPress Codex. Imagine you’re Harriet Smith,
                                    a veterinarian who blogs about their animal stories on WordPress.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="accordion-button btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseicon11" aria-expanded="false"
                                        aria-controls="collapseicon2"><i
                                            class="fa-regular fa-circle-question"></i>Validating a Website ?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseicon11" data-bs-parent="#accordionoc">
                                <div class="card-body">Validating a website is the process of ensuring that the pages on
                                    the website conform to the norms or standards defined by various organizations.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="accordion-button btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseicon12" aria-expanded="false"
                                        aria-controls="collapseicon2"><i class="fa-regular fa-circle-question"></i>Know
                                        Your Sources ?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseicon12" data-bs-parent="#accordionoc">
                                <div class="card-body">A book or set of books giving information on many subjects or on
                                    many aspects of one subject. Some are intended as an entry point into research for a
                                    general audience, some provide detailed information.</div>
                            </div>
                        </div>
                        <div class="faq-title">
                            <h6>User Accounts</h6>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="accordion-button btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseicon13" aria-expanded="false"><i
                                            class="fa-regular fa-circle-question"></i>Integrating WordPress with Your
                                        Website ?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseicon13" aria-labelledby="collapseicon13"
                                data-bs-parent="#accordionoc">
                                <div class="card-body">How you approach this process will depend on which web host you use.
                                    For example, a lot of hosting providers use cPanel, which includes an option to set up
                                    subdomains with just a few clicks.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="accordion-button btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseicon14" aria-expanded="false"
                                        aria-controls="collapseicon2"><i
                                            class="fa-regular fa-circle-question"></i>WordPress Site Maintenance ?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseicon14" data-bs-parent="#accordionoc">
                                <div class="card-body">We’ve just published a detailed on how to backup your WordPress
                                    website, however, if you’re in a hurry, here’s a quick solution.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="accordion-button btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseicon16" aria-expanded="false"
                                        aria-controls="collapseicon2"><i class="fa-regular fa-circle-question"></i>
                                        WordPress in Your Language ?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseicon16" data-bs-parent="#accordionoc">
                                <div class="card-body">As of version 4.0, you can have WordPress automatically install the
                                    language of your choice during the installation process.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="accordion-button btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseicon17" aria-expanded="false"
                                        aria-controls="collapseicon2"><i class="fa-regular fa-circle-question"></i>
                                        Validating a Website ?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseicon17" data-bs-parent="#accordionoc">
                                <div class="card-body">Validating a website is the process of ensuring that the pages on
                                    the website conform to the norms or standards defined by various organizations.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="accordion-button btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseicon18" aria-expanded="false"
                                        aria-controls="collapseicon2"><i class="fa-regular fa-circle-question"></i>Meta
                                        Tags in WordPress ?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseicon18" data-bs-parent="#accordionoc">
                                <div class="card-body">Manually adding meta tags in WordPress is relatively simple. For
                                    this demo, we’ll use the example from the WordPress Codex. Imagine you’re Harriet Smith,
                                    a veterinarian who blogs about their animal stories on WordPress.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 xl-40 col-lg-6 col-md-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-mb-faq xs-mt-search">
                                    <div class="card-header faq-header pb-0">
                                        <h4 class="ps-0">Search articles</h4><i
                                            class="fa-regular fa-circle-question"></i>
                                    </div>
                                    <div class="card-body faq-body">
                                        <div class="faq-form">
                                            <input class="form-control" type="text" placeholder="Search..">
                                            <svg class="feather search-icon">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#search') }}">
                                                </use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card card-mb-faq">
                                    <div class="card-header faq-header pb-0">
                                        <h4>Navigation</h4><i class="fa-solid fa-gear"></i>
                                    </div>
                                    <div class="card-body faq-body">
                                        <div class="navigation-btn"><a class="btn btn-primary"
                                                href="javascript:void(0)"><i class="fa-solid fa-message m-r-10"></i>Ask
                                                Question</a></div>
                                        <div class="navigation-option">
                                            <ul>
                                                <li><a href="javascript:void(0)"><i
                                                            class="fa-solid fa-pen-to-square"></i>Tutorials</a></li>
                                                <li><a href="javascript:void(0)"><i class="fa-solid fa-globe"></i>Help
                                                        center</a></li>
                                                <li><a href="javascript:void(0)"><i
                                                            class="fa-solid fa-book-open-reader"></i>Knowledgebase</a></li>
                                                <li><a href="javascript:void(0)"><i
                                                            class="fa-solid fa-file-lines"></i>Articles</a><span
                                                        class="badge badge-primary rounded-pill pull-right">42</span></li>
                                                <li><a href="javascript:void(0)"><i class="fa-brands fa-youtube"></i>Video
                                                        Tutorials</a><span
                                                        class="badge badge-primary rounded-pill pull-right">648</span></li>
                                                <li><a href="javascript:void(0)"><i
                                                            class="fa-solid fa-comment-sms"></i>Ask our community</a></li>
                                                <li><a href="javascript:void(0)"><i
                                                            class="fa-solid fa-envelope"></i>Contact us</a></li>
                                            </ul>
                                            <hr>
                                            <ul>
                                                <li><a href="javascript:void(0)"><i
                                                            class="fa-solid fa-comment-sms"></i>Ask our community</a></li>
                                                <li><a href="javascript:void(0)"><i
                                                            class="fa-solid fa-envelope"></i>Contact us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header faq-header pb-0">
                                        <h4 class="d-inline-block">Latest Updates</h4><span
                                            class="pull-right d-inline-block">See All</span>
                                    </div>
                                    <div class="card-body faq-body">
                                        <div class="d-flex updates-faq-main">
                                            <div class="updates-faq"><i class="fa-solid fa-rotate-right font-primary"></i>
                                            </div>
                                            <div class="flex-grow-1 updates-bottom-time">
                                                <p><a class="font-primary" href="javascript:void(0)">David Linner
                                                    </a>requested money back for a double debit card charge</p>
                                                <p>10 minutes ago</p>
                                            </div>
                                        </div>
                                        <div class="d-flex updates-faq-main">
                                            <div class="updates-faq"><i class="fa-solid fa-dollar-sign font-primary"></i>
                                            </div>
                                            <div class="flex-grow-1 updates-bottom-time">
                                                <p>All sellers have received monthly payouts</p>
                                                <p>2 hours ago</p>
                                            </div>
                                        </div>
                                        <div class="d-flex updates-faq-main">
                                            <div class="updates-faq"><i class="fa-solid fa-link font-primary"></i></div>
                                            <div class="flex-grow-1 updates-bottom-time">
                                                <p>User Christopher <a class="font-primary"
                                                        href="javascript:void(0)">Wallace</a> is on hold and awaiting for
                                                    staff reply</p>
                                                <p>45 minutes ago</p>
                                            </div>
                                        </div>
                                        <div class="d-flex updates-faq-main">
                                            <div class="updates-faq"><i class="fa-solid fa-check font-primary"></i></div>
                                            <div class="flex-grow-1 updates-bottom-time">
                                                <p>Ticket #43683 has been closed by <a class="font-primary"
                                                        href="javascript:void(0)">Victoria Wilson</a></p>
                                                <p>Dec 7, 11:48</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="header-faq">
                    <h4 class="mb-0">Featured Tutorials</h4>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-md-6 box-col-6">
                        <div class="card features-faq product-box">
                            <div class="faq-image product-img"><img class="img-fluid"
                                    src="{{ asset('assets/images/faq/1.jpg') }}" alt="">
                                <div class="product-hover">
                                    <ul>
                                        <li><i class="icon-link"></i></li>
                                        <li><i class="icon-import"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5>Web Design</h5>
                                <p>A Web Designing course belongs to the field of Computer It enables students to learn
                                    various techniques.</p>
                            </div>
                            <div class="card-footer"><span>Dec 15, 2022</span><span class="pull-right"><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star font-primary"></i></span></div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 box-col-6">
                        <div class="card features-faq product-box">
                            <div class="faq-image product-img"><img class="img-fluid"
                                    src="{{ asset('assets/images/faq/2.jpg') }}" alt="">
                                <div class="product-hover">
                                    <ul>
                                        <li><i class="icon-link"></i></li>
                                        <li><i class="icon-import"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5>Web Development</h5>
                                <p>A Web Development course belongs to the field of Computer It enables students to learn
                                    various techniques.</p>
                            </div>
                            <div class="card-footer"><span>Dec 15, 2022</span><span class="pull-right"><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star-o font-primary"></i></span></div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 box-col-6">
                        <div class="card features-faq product-box">
                            <div class="faq-image product-img"><img class="img-fluid"
                                    src="{{ asset('assets/images/faq/3.jpg') }}" alt="">
                                <div class="product-hover">
                                    <ul>
                                        <li><i class="icon-link"></i></li>
                                        <li><i class="icon-import"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5>UI Design</h5>
                                <p>User interface design (UI) is the design for machines and software, such as mobile
                                    devices, computers.</p>
                            </div>
                            <div class="card-footer"><span>Dec 15, 2022</span><span class="pull-right"><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star font-primary"></i></span></div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 box-col-6">
                        <div class="card features-faq product-box">
                            <div class="faq-image product-img"><img class="img-fluid"
                                    src="{{ asset('assets/images/faq/4.jpg') }}" alt="">
                                <div class="product-hover">
                                    <ul>
                                        <li><i class="icon-link"></i></li>
                                        <li><i class="icon-import"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5>UX Design</h5>
                                <p>User Experience design (UX) is the design for machines and software, such as mobile
                                    devices, computers.</p>
                            </div>
                            <div class="card-footer"><span>Dec 15, 2022</span><span class="pull-right"><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star-half-o font-primary"></i></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="header-faq">
                    <h4 class="mb-0">Latest articles and videos</h4>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <svg class="feather m-r-30">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#codepen') }}">
                                                </use>
                                            </svg>
                                            <div class="flex-grow-1">
                                                <h5 class="f-w-500">Article Base Video</h5>
                                                <p>The web is a very big place, and if you are the typical internet base
                                                    user.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <svg class="feather m-r-30">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#codepen') }}">
                                                </use>
                                            </svg>
                                            <div class="flex-grow-1">
                                                <h5 class="f-w-500">Knows your sources</h5>
                                                <p>A book giving information on many subjects or on many aspects of one
                                                    subject.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <svg class="feather m-r-30">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#codepen') }}">
                                                </use>
                                            </svg>
                                            <div class="flex-grow-1">
                                                <h5 class="f-w-500">Sources credible/reliable</h5>
                                                <p>Simple demos of frequently asked questions about using the information
                                                    resources</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <svg class="feather m-r-30">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                </use>
                                            </svg>
                                            <div class="flex-grow-1">
                                                <h5 class="f-w-500">Validate website</h5>
                                                <p> Website is the process of ensuring that the pages on the website
                                                    conform.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <svg class="feather m-r-30">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                </use>
                                            </svg>
                                            <div class="flex-grow-1">
                                                <h5 class="f-w-500"> Tailwind Design</h5>
                                                <p> Tailwind is so low-level, it never encourages you to design the same
                                                    site twice.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <svg class="feather m-r-30">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                </use>
                                            </svg>
                                            <div class="flex-grow-1">
                                                <h5 class="f-w-500">Knows your sources</h5>
                                                <p>A book giving information on many subjects or on many aspects of one
                                                    subject.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="row">
                            <div class="col-xl-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <svg class="feather m-r-30">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#youtube') }}">
                                                </use>
                                            </svg>
                                            <div class="flex-grow-1">
                                                <h5 class="f-w-500">Sources Demos</h5>
                                                <p> Simple demos of frequently asked questions about using the information
                                                    resources</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <svg class="feather m-r-30">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#youtube') }}">
                                                </use>
                                            </svg>
                                            <div class="flex-grow-1">
                                                <h5 class="f-w-500"> Validate Html</h5>
                                                <p>Website is the process of ensuring that the pages on the website conform.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <svg class="feather m-r-30">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#youtube') }}">
                                                </use>
                                            </svg>
                                            <div class="flex-grow-1">
                                                <h5 class="f-w-500">Web Design</h5>
                                                <p>Web is so high-level, it never encourages you to design the same site
                                                    twice</p>
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
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
