@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Creative Card</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Creative Card</li>
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
                    <div class="card-header b-l-primary border-bottom">
                        <h4>Border Left</h4>
                        <p class="desc mb-0 mt-1"><span>Use the class of</span><code>.b-l-*</code><span>for left
                                border.</span></p>
                    </div>
                    <div class="card-body">
                        <p>Us Technology offers web & mobile development solutions for all industry verticals.Include a
                            short form using fields that'll help your business understand who's contacting
                            them.<br><strong>Visit Us: </strong> 2600 Hollywood Blvd,Florida, United States-
                            33020<br><strong>Mail Us:</strong>contact@us@gmail.com<br><strong>Contact Number: </strong>(954)
                            357-7760</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header b-r-secondary border-bottom">
                        <h4>Border Right</h4>
                        <p class="desc mb-0 mt-1"><span>Use the class of</span><code>.b-r-*</code><span>for left
                                border.</span></p>
                    </div>
                    <div class="card-body">
                        <p>Us Technology offers web & mobile development solutions for all industry verticals.Include a
                            short form using fields that'll help your business understand who's contacting them. </p>
                        <form>
                            <label class="form-label" for="exampleFormControlInput1">Email address</label>
                            <input class="form-control" id="exampleFormControlInput1" type="email"
                                placeholder="youremail@gmail.com">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header b-t-tertiary border-bottom">
                        <h4>Border top</h4>
                        <p class="desc mb-0 mt-1"><span>Use the class of</span><code>.b-t-*</code><span>for left
                                border.</span></p>
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
                <div class="card">
                    <div class="card-header b-b-info">
                        <h4>Border bottom</h4>
                        <p class="desc mb-0 mt-1"><span>Use the class of</span><code>.b-b-*</code><span>for left
                                border.</span></p>
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
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header b-l-primary b-w-3">
                        <h4>border primary state</h4>
                        <p class="desc mb-0 mt-1"><span>Use the class of</span><code>b-l-*, .border-3</code><span>is used to
                                increase the width of the border.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="list-group"><a class="list-group-item list-group-item-action active"
                                href="javascript:void(0)"><img class="rounded-circle" src="{{ asset('assets/images/avatar/1.jpg') }}"
                                    alt="user">Teresa J. Mosteller</a><a class="list-group-item list-group-item-action"
                                href="javascript:void(0)"><img class="rounded-circle" src="{{ asset('assets/images/avatar/3.jpg') }}"
                                    alt="user">Gloria D. Acheson</a><a class="list-group-item list-group-item-action"
                                href="javascript:void(0)"><img class="rounded-circle" src="{{ asset('assets/images/avatar/5.jpg') }}"
                                    alt="user">Bryan A. Owens</a></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header b-w-3 b-t-warning">
                        <h4>border warning state</h4>
                        <p class="desc mb-0 mt-1"><span>Use the class of</span><code>.b-t-*,.border-3</code><span>is used to
                                increase the width of the border.</span></p>
                    </div>
                    <div class="card-body">
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item font-primary fw-bold">Known for delivery of useful and usable
                                solutions</li>
                            <li class="list-group-item font-danger fw-bold">Solve your problem with us</li>
                            <li class="list-group-item font-success fw-bold">Certified Professionals</li>
                            <li class="list-group-item font-warning fw-bold">Growth-Driven </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header b-r-success b-w-3">
                        <h4>border success state</h4>
                        <p class="desc mb-0 mt-1"><span>Use the class of</span><code>.b-r-*,.border-3</code><span>is used to
                                increase the width of the border.</span></p>
                    </div>
                    <div class="card-body scroll-demo">
                        <ol class="list-group list-group-numbered scroll-rtl">
                            <li class="list-group-item d-flex align-items-start flex-wrap">
                                <div class="ms-2 me-auto">Stella Nowland</div><span
                                    class="badge bg-warning rounded-pill p-2">Freelance</span>
                            </li>
                            <li class="list-group-item d-flex align-items-start flex-wrap">
                                <div class="ms-2 me-auto">Lola Stanford</div><span
                                    class="badge bg-danger text-white rounded-pill p-2">Issue</span>
                            </li>
                            <li class="list-group-item d-flex align-items-start flex-wrap">
                                <div class="ms-2 me-auto">Caitlin Coungeau</div><span
                                    class="badge bg-primary text-white rounded-pill p-2">Social</span>
                            </li>
                            <li class="list-group-item d-flex align-items-start flex-wrap">
                                <div class="ms-2 me-auto">Graciela McClaran</div><span
                                    class="badge bg-danger text-white rounded-pill p-2">Issue</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card card-absolute">
                    <div class="card-header bg-secondary">
                        <h5>Absolute Card</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex list-behavior-1 align-items-center">
                            <div class="flex-shrink-0"><img class="tab-img img-fluid" src="{{ asset('assets/images/blog/img.png') }}"
                                    alt="home"></div>
                            <div class="flex-grow-1">
                                <p class="mb-xl-0 mb-sm-4">We provide end to end digital solutions, right from designing
                                    your website/application development: Domain, Web Hosting, Email Hosting Registration,
                                    Search Engine Optimization and other Internet Marketing, Renewal of Services timely and
                                    effectively.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card card-absolute">
                    <div class="card-header bg-tertiary">
                        <h5>Color State</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex list-behavior-1 align-items-center">
                            <div class="flex-shrink-0"> <img class="tab-img img-fluid"
                                    src="{{ asset('assets/images/blog/blog.jpg') }}" alt="home"></div>
                            <div class="flex-grow-1">
                                <p class="mb-xl-0 mb-sm-4">When someone visits your homepage, your design should inspire
                                    them to stay. Therefore, your value proposition should be established on the homepage
                                    for visitors to select to stay on your website.Building trust, expressing value,to the
                                    next step all depend on a page's design.</p>
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
