@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Basic Card</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Basic Card</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <!-- Default Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Basic Card</h4>
                        <p class="desc mb-0 mt-1"><span>This is a simple basic card using
                                anywhere.</span><code></code><span></span></p>
                    </div>
                    <div class="card-body">
                        <p class="mb-0">Tabs have long been used to show alternative views of the same group of
                            information tabs in software. Known as<em class="font-danger">“module tabs”</em> , these are
                            still used today in web sites. For instance, airline companies such as Ryanair, easyJet and
                            AirMalta use module tabs to enable the user to switch between bookings for flights, hotels and
                            car hire.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Edge Card-->
                <div class="card b-r-15">
                    <div class="card-header pb-0 b-r-15">
                        <h4>Edge Card</h4>
                        <p class="desc mb-0 mt-1"><span>For Edge cards, make
                                the</span><code>.b-r-15[border-radius:15]</code><span>used class.</span></p>
                    </div>
                    <div class="card-body">
                        <p class="mb-0">A navigation bar is a particularly important feature because it allows visitors to
                            quickly and easily find<em class="font-danger"> important pages on your website</em> , like your
                            blog, product pages, pricing, contact info, and documentation. This improves the chances of
                            visitors browsing your site longer, which can boost your page views and reduce your bounce rate.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Default Card-->
                <div class="card shadow-none solid-border height_equal">
                    <div class="card-header pb-0">
                        <h4>Without shadow card</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.shadow-none &amp;.border</code><span>class
                                through shadow removes.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="flex-space flex-wrap align-items-center"><img class="tab-img"
                                src="{{ asset('assets/images/avatar/2.jpg') }}" alt="profile">
                            <p> <strong>Visit Us: </strong> 2600 Hollywood Blvd,Florida, United States-
                                33020<br><strong>Mail Us:</strong> contact@us@gmail.com<br><strong>Contact Number: </strong>
                                (954) 357-7760</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Icon In Heading-->
                <div class="card height_equal">
                    <div class="card-header pb-0">
                        <h4><i class="icofont icofont-library me-2"></i> Icon In Heading</h4>
                        <p class="mt-1 desc mb-0">
                            Use the any icons for heading. <code>[font-awesome/ico-font/feather]</code>.</p>
                    </div>
                    <div class="card-body">
                        <div class="d-flex gap-3 align-items-center list-behavior-1">
                            <div class="flex-shrink-0"><img class="tab-img img-fluid" src="{{ asset('assets/images/blog/img.png') }}"
                                    alt="home"></div>
                            <div class="flex-grow-1 ms-0">
                                <p class="mb-xl-0 mb-sm-4">We provide end to end digital solutions, right from designing
                                    your website/application development: Domain, Web Hosting, Email Hosting Registration,
                                    Search Engine Optimization and other Internet Marketing, Renewal of Services timely and
                                    effectively.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Dark Color Card-->
                <div class="card dark-color-card">
                    <div class="card-header bg-dark border-bottom">
                        <h4>Dark color card</h4>
                        <p class="desc mb-0 mt-1"><span>This is a simple basic card using
                                anywhere.</span><code>.bg-dark</code><span>color for dark background card.</span></p>
                    </div>
                    <div class="card-body bg-dark">
                        <div class="d-flex align-items-center gap-3 pills-blogger">
                            <div class="blog-wrapper"> <img class="blog-img img-100"
                                    src="{{ asset('assets/images/dashboard2/product/headphones.png') }}" alt="head-phone"></div>
                            <div class="blog-content">
                                <p> <em class="font-danger fw-bold">Smart headphones</em> — also called smart earbuds or
                                    hearable — are high-tech in-ear devices that do more than transmit audio. These
                                    headphones are usually wireless, and they can sync up with your phone, tablet, computer
                                    or other Bluetooth-enabled device. The main appeal of hearables is convenience, as they
                                    allow you to complete common tasks without directly accessing your phone or computer.
                                    Smart wireless headphones sync up to other devices using Bluetooth technology, and many
                                    of their features rely on data from your smartphone or computer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-dark border-top">
                        <h6 class="mb-0">Card Footer</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <!-- Secondary header card-->
                <div class="card">
                    <div class="card-header bg-secondary">
                        <h4>Secondary Color Header</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="pb-2 f-w-500">Web Designer </h5>
                        <p class="mb-0">By following instructions and adding your own unique twist and style, you may
                            apply your imagination as a web designer. The majority of the tasks you'll be assigned will have
                            a specific due date and work description, but the reason you were employed was because they need
                            a specialist to inject some much-needed creativity.</p>
                    </div>
                    <div class="card-footer border-top">
                        <h6 class="mb-0 text-end">Edmin Theme</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <!-- Dark Color Card-->
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4>Secondary Color Body</h4>
                    </div>
                    <div class="card-body bg-secondary">
                        <h5 class="pb-2 f-w-500">UX Designer </h5>
                        <p class="mb-0">It is the responsibility of the UX designer to make a product or service useful,
                            pleasurable, and accessible. The word "user experience" is used by various industries, although
                            it is most frequently related to digital design for websites and mobile applications.There is no
                            need for coding in user experience design.</p>
                    </div>
                    <div class="card-footer border-0">
                        <h6 class="mb-0 text-end">Card Footer</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <!-- Dark Color Card-->
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4>Secondary Color Footer</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="pb-2 f-w-500">Web Designer </h5>
                        <p class="mb-0">By following instructions and adding your own unique twist and style, you may
                            apply your imagination as a web designer. The majority of the tasks you'll be assigned will have
                            a specific due date and work description, but the reason you were employed was because they need
                            a specialist to inject some much-needed creativity.</p>
                    </div>
                    <div class="card-footer bg-secondary border-top">
                        <h6 class="mb-0 text-end">Edmin Theme</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
@endsection
