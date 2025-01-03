@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe/dist/photoswipe.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe-dynamic-caption-plugin/photoswipe-dynamic-caption-plugin.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Social App</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Apps</li>
                        <li class="breadcrumb-item active">Social App</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid user-profile social-app-profile">
        <div class="row">
            <div class="col-sm-12 box-col-12">
                <div class="card hovercard text-center">
                    <div class="cardheader socialheader"></div>
                    <div class="user-image">
                        <div class="avatar"><img alt="" src="{{ asset('assets/images/avatar/1.jpg') }}"></div>
                        <div class="icon-wrapper"><i class="icofont icofont-pencil-alt-5"></i></div>
                        <ul class="share-icons">
                            <li><a class="social-icon bg-primary" href="#"><i
                                        class="fa-regular fa-face-smile"></i></a></li>
                            <li><a class="social-icon bg-secondary" href="#"><i class="fa-brands fa-weixin"></i></a>
                            </li>
                            <li><a class="social-icon bg-warning" href="#"><i class="fa fa-share-alt"></i></a></li>
                        </ul>
                    </div>
                    <div class="info market-tabs p-0">
                        <ul class="nav nav-tabs border-tab tabs-scoial" id="top-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="top-timeline" data-bs-toggle="tab"
                                    href="#timeline" role="tab" aria-controls="timeline"
                                    aria-selected="true">Timeline</a></li>
                            <li class="nav-item"><a class="nav-link" id="top-about" data-bs-toggle="tab" href="#about"
                                    role="tab" aria-controls="about" aria-selected="false">About</a></li>
                            <li class="nav-item">
                                <div class="user-designation"></div>
                                <div class="title"><a target="_blank" href="">ElANA</a></div>
                                <div class="desc mt-2">general manager</div>
                            </li>
                            <li class="nav-item"><a class="nav-link" id="top-friends" data-bs-toggle="tab" href="#friends"
                                    role="tab" aria-controls="friends" aria-selected="false">Friends</a></li>
                            <li class="nav-item"><a class="nav-link" id="top-photos" data-bs-toggle="tab" href="#photos"
                                    role="tab" aria-controls="photos" aria-selected="false">Photos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" id="top-tabContent">
            <div class="tab-pane fade show active" id="timeline" role="tabpanel" aria-labelledby="timeline">
                <div class="row">
                    <div class="col-xl-3 xl-40 col-lg-12 col-md-5 box-col-4">
                        <div class="default-according style-1 faq-accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header accordion" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-start accordion-button" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">My Profile</button>
                                    </h2>
                                </div>
                                <div class="collapse show" id="collapseOne" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="card-body socialprofile filter-cards-view">
                                        <div class="d-flex align-items-start"><img
                                                class="img-50 img-fluid m-r-20 rounded-circle"
                                                src="{{ asset('assets/images/avatar/1.jpg') }}" alt="">
                                            <div class="flex-grow-1">
                                                <h6 class="font-primary f-w-600">My Page</h6><span
                                                    class="d-block"><span><i class="fa-regular fa-comments"></i><span
                                                            class="px-2">Messages<span
                                                                class="badge rounded-pill badge-light ms-2">9</span></span></span></span><span
                                                    class="d-block"><span><i class="fa-regular fa-bell"></i><span
                                                            class="px-2">notification<span
                                                                class="badge rounded-pill badge-light ms-2">9</span></span></span></span>
                                            </div>
                                        </div>
                                        <div class="social-btngroup d-flex">
                                            <button class="btn btn-primary text-center" type="button">Likes</button>
                                            <button class="btn bg-light-primary text-center ms-2"
                                                type="button">View</button>
                                        </div>
                                        <div class="likes-profile text-center">
                                            <h5> <span class="font-light"><i class="fa fa-heart font-danger"></i>
                                                    884</span></h5>
                                        </div>
                                        <div class="text-center">35 New Likes This Week</div>
                                        <div class="customers text-center social-group">
                                            <ul>
                                                <li class="d-inline-block"><img class="img-40 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/1.jpg') }}" alt=""
                                                        data-container="body" data-bs-toggle="tooltip"
                                                        title="Johny Waston"></li>
                                                <li class="d-inline-block"><img class="img-40 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/3.jpg') }}" alt=""
                                                        data-container="body" data-bs-toggle="tooltip" title="Andew Jon">
                                                </li>
                                                <li class="d-inline-block"><img class="img-40 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/4.jpg') }}" alt=""
                                                        data-container="body" data-bs-toggle="tooltip"
                                                        title="Comeren Diaz"></li>
                                                <li class="d-inline-block"><img class="img-40 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/5.jpg') }}" alt=""
                                                        data-container="body" data-bs-toggle="tooltip"
                                                        title="Bucky Barnes"></li>
                                                <li class="d-inline-block"><img class="img-40 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/6.jpg') }}" alt=""
                                                        data-container="body" data-bs-toggle="tooltip"
                                                        title="Jason Borne"></li>
                                                <li class="d-inline-block"><img class="img-40 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/7.jpg') }}" alt=""
                                                        data-container="body" data-bs-toggle="tooltip"
                                                        title="Comeren Diaz"></li>
                                            </ul>
                                        </div><img class="img-fluid mt-5" alt=""
                                            src="{{ asset('assets/images/social-app/timeline-3.png') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header accordion" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-start accordion-button" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">Mutual Friends</button>
                                    </h2>
                                </div>
                                <div class="collapse show" id="collapseTwo" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="card-body social-status filter-cards-view">
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/8.jpg') }}" alt="">
                                            <div class="social-status social-online"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Bucky
                                                    Barnes</span><span class="d-block">winter@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/9.jpg') }}" alt="">
                                            <div class="social-status social-busy"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Sarah Loren</span><span
                                                    class="d-block">barnes@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/1.jpg') }}" alt="">
                                            <div class="social-status social-offline"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Jason Borne</span><span
                                                    class="d-block">jasonb@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/2.jpg') }}" alt="">
                                            <div class="social-status social-offline"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Comeren
                                                    Diaz</span><span class="d-block">comere@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/3.jpg') }}" alt="">
                                            <div class="social-status social-online"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Andew Jon</span><span
                                                    class="d-block">andrewj@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/4.jpg') }}" alt="">
                                            <div class="social-status social-busy"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Johny
                                                    Waston</span><span class="d-block">johny@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/5.jpg') }}" alt="">
                                            <div class="social-status social-offline"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Johny
                                                    William</span><span class="d-block">johnyw@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/7.jpg') }}" alt="">
                                            <div class="social-status social-online"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Bucky
                                                    Barnes</span><span class="d-block">winter@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/1.jpg') }}" alt="">
                                            <div class="social-status social-busy"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Sarah Loren</span><span
                                                    class="d-block">barnes@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/2.jpg') }}" alt="">
                                            <div class="social-status social-offline"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Jason Borne</span><span
                                                    class="d-block">jasonb@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/3.jpg') }}" alt="">
                                            <div class="social-status social-offline"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Comeren
                                                    Diaz</span><span class="d-block">comere@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/4.jpg') }}" alt="">
                                            <div class="social-status social-online"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Andew Jon</span><span
                                                    class="d-block">andrewj@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/5.jpg') }}" alt="">
                                            <div class="social-status social-busy"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Johny
                                                    Waston</span><span class="d-block">johny@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/6.jpg') }}" alt="">
                                            <div class="social-status social-offline"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Johny
                                                    William</span><span class="d-block">johnyw@gmail.com</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header accordion" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-start accordion-button" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="true" aria-controls="collapseThree">Activity Feed</button>
                                    </h2>
                                </div>
                                <div class="collapse show" id="collapseThree" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="card-body social-status filter-cards-view">
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/7.jpg') }}" alt="">
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Andew Jon</span>
                                                <p>Commented on Shaun Park's <a class="font-primary"
                                                        href="#">Photo</a></p><span class="light-span">20 min
                                                    Ago</span>
                                            </div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/8.jpg') }}" alt="">
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Johny Waston</span>
                                                <p>Commented on Shaun Park's <a class="font-primary"
                                                        href="#">Photo</a></p><span class="light-span">1 hour
                                                    Ago</span>
                                            </div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/9.jpg') }}" alt="">
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Comeren Diaz</span>
                                                <p>Commented on Shaun Park's <a class="font-primary"
                                                        href="#">Photo</a></p><span class="light-span">1 days
                                                    Ago</span>
                                            </div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/1.jpg') }}" alt="">
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Sarah Loren</span>
                                                <p>Commented on Shaun Park's <a class="font-primary"
                                                        href="#">Photo</a></p><span class="light-span">2 days
                                                    Ago</span>
                                            </div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/2.jpg') }}" alt="">
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Johny Waston</span>
                                                <p>Commented on Shaun Park's <a class="font-primary"
                                                        href="#">Photo</a></p><span class="light-span">5 days
                                                    Ago</span>
                                            </div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/3.jpg') }}" alt="">
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Comeren Diaz</span>
                                                <p>Commented on Shaun Park's <a class="font-primary"
                                                        href="#">Photo</a></p><span class="light-span">6 days
                                                    Ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 xl-60 col-lg-12 col-md-7 box-col-8">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="new-users-social">
                                            <div class="d-flex"><img class="rounded-circle image-radius m-r-15"
                                                    src="{{ asset('assets/images/avatar/4.jpg') }}" alt="">
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0 f-w-700">ELANA</h6>
                                                    <p>January, 12,2024</p>
                                                </div><span class="pull-right mt-0">
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-vertical') }}">
                                                        </use>
                                                    </svg></span>
                                            </div>
                                        </div><img class="img-fluid" alt=""
                                            src="{{ asset('assets/images/social-app/timeline-1.png') }}">
                                        <div class="timeline-content">
                                            <p>The only way to do something in depth is to work hard. I've always thought of
                                                the T-shirt as the Alpha of the fashion alphabet. My breakfast is very
                                                important. Everything I do is a matter of heart, body and soul.</p>
                                            <div class="like-content"><span><i
                                                        class="fa fa-heart font-danger"></i></span><span
                                                    class="pull-right comment-number"><span>20 </span><span><i
                                                            class="fa fa-share-alt"></i></span></span><span
                                                    class="pull-right comment-number"><span>10 </span><span><i
                                                            class="fa-regular fa-comments"></i></span></span></div>
                                            <div class="social-chat">
                                                <div class="your-msg">
                                                    <div class="d-flex"><img
                                                            class="img-50 img-fluid m-r-20 rounded-circle" alt=""
                                                            src="{{ asset('assets/images/avatar/1.jpg') }}">
                                                        <div class="flex-grow-1"><span class="f-w-600">Jason Borne <span>1
                                                                    Year Ago <i
                                                                        class="fa fa-reply font-primary"></i></span></span>
                                                            <p>we are working for the dance and sing songs. this car is very
                                                                awesome for the youngster. please vote this car and like our
                                                                post</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="other-msg">
                                                    <div class="d-flex"><img
                                                            class="img-50 img-fluid m-r-20 rounded-circle" alt=""
                                                            src="{{ asset('assets/images/avatar/2.jpg') }}">
                                                        <div class="flex-grow-1"><span class="f-w-600">Alexendra Dhadio
                                                                <span>1 Month Ago <i
                                                                        class="fa fa-reply font-primary"></i></span></span>
                                                            <p>yes, really very awesome car i see the features of this car
                                                                in the official website of #Mercedes-Benz and really
                                                                impressed :-)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="other-msg">
                                                    <div class="d-flex"><img
                                                            class="img-50 img-fluid m-r-20 rounded-circle" alt=""
                                                            src="{{ asset('assets/images/avatar/3.jpg') }}">
                                                        <div class="flex-grow-1"><span class="f-w-600">Olivia Jon <span>15
                                                                    Days Ago <i
                                                                        class="fa fa-reply font-primary"></i></span></span>
                                                            <p>i like lexus cars, lexus cars are most beautiful with the
                                                                awesome features, but this car is really outstanding than
                                                                lexus</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="your-msg">
                                                    <div class="d-flex"><img
                                                            class="img-50 img-fluid m-r-20 rounded-circle" alt=""
                                                            src="{{ asset('assets/images/avatar/4.jpg') }}">
                                                        <div class="flex-grow-1"><span class="f-w-600">Issa Bell <span>1
                                                                    Year Ago <i
                                                                        class="fa fa-reply font-primary"></i></span></span>
                                                            <p>we are working for the dance and sing songs. this car is very
                                                                awesome for the youngster. please vote this car and like our
                                                                post</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center"><a href="#">More comments</a></div>
                                            </div>
                                            <div class="comments-box">
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/5.jpg') }}">
                                                    <div class="flex-grow-1">
                                                        <div class="input-group text-box">
                                                            <input class="form-control input-txt-bx" type="text"
                                                                name="message-to-send" placeholder="Post Your comments">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-transparent" type="button"><i
                                                                        class="fa-regular fa-face-smile"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="new-users-social">
                                            <div class="d-flex"><img class="rounded-circle image-radius m-r-15"
                                                    src="{{ asset('assets/images/avatar/6.jpg') }}" alt="">
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0 f-w-700">ELANA</h6>
                                                    <p>January, 12,2024</p>
                                                </div><span class="pull-right mt-0">
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-vertical') }}">
                                                        </use>
                                                    </svg></span>
                                            </div>
                                        </div><img class="img-fluid" alt=""
                                            src="{{ asset('assets/images/social-app/timeline-2.png') }}">
                                        <div class="timeline-content">
                                            <p>I've always thought of the T-shirt as the Alpha of the fashion alphabet. My
                                                breakfast is very important. Everything I do is a matter of heart, body and
                                                soul. The only way to do something in depth is to work hard.</p>
                                            <div class="like-content"><span><i
                                                        class="fa fa-heart font-danger"></i></span><span
                                                    class="pull-right comment-number"><span>20 </span><span><i
                                                            class="fa fa-share-alt"></i></span></span><span
                                                    class="pull-right comment-number"><span>10 </span><span><i
                                                            class="fa-regular fa-comments"></i></span></span></div>
                                            <div class="social-chat">
                                                <div class="your-msg">
                                                    <div class="d-flex"><img
                                                            class="img-50 img-fluid m-r-20 rounded-circle" alt=""
                                                            src="{{ asset('assets/images/avatar/1.jpg') }}">
                                                        <div class="flex-grow-1"><span class="f-w-600">Jason Borne <span>1
                                                                    Year Ago <i
                                                                        class="fa fa-reply font-primary"></i></span></span>
                                                            <p>we are working for the dance and sing songs. this car is very
                                                                awesome for the youngster. please vote this car and like our
                                                                post</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="your-msg">
                                                    <div class="d-flex"><img
                                                            class="img-50 img-fluid m-r-20 rounded-circle" alt=""
                                                            src="{{ asset('assets/images/avatar/2.jpg') }}">
                                                        <div class="flex-grow-1"><span class="f-w-600">Issa Bell <span>1
                                                                    Year Ago <i
                                                                        class="fa fa-reply font-primary"></i></span></span>
                                                            <p>we are working for the dance and sing songs. this car is very
                                                                awesome for the youngster. please vote this car and like our
                                                                post</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center"><a href="#">More comments</a></div>
                                            </div>
                                            <div class="comments-box">
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/3.jpg') }}">
                                                    <div class="flex-grow-1">
                                                        <div class="input-group text-box">
                                                            <input class="form-control input-txt-bx" type="text"
                                                                name="message-to-send" placeholder="Post Your comments">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-transparent" type="button"><i
                                                                        class="fa-regular fa-face-smile"></i></button>
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
                    <div class="col-xl-3 xl-100 box-col-12">
                        <div class="default-according style-1 faq-accordion job-accordion" id="accordionoc1">
                            <div class="row">
                                <div class="col-xl-12 xl-50 box-col-6">
                                    <div class="card">
                                        <div class="card-header accordion">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link accordion-button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseicon2" aria-expanded="true"
                                                    aria-controls="collapseicon2">Profile Intro</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="collapseicon2" aria-labelledby="collapseicon2"
                                            data-bs-parent="#accordion">
                                            <div class="card-body filter-cards-view"><span
                                                    class="f-w-600 mb-2 d-block">About Me :</span>
                                                <p class="mb-3">
                                                    Hi, I’m elana, I’m 30 and I work as a
                                                    web Designer for the “Daydreams”
                                                    Agency in Pier 56.
                                                </p><span class="f-w-600 mb-2 d-block">Favourite TV shows :</span>
                                                <p class="mb-3">
                                                    Breaking Good, RedDevil, People of
                                                    Interest, The Running Dead,
                                                    Found, American Guy.
                                                </p><span class="f-w-600 mb-2 d-block">Favourite Music Bands :</span>
                                                <p class="mb-3">
                                                    Breaking Good, RedDevil, People of
                                                    Interest, The Running Dead,
                                                    Found, American Guy.
                                                </p>
                                                <div class="social-network theme-form"><span class="f-w-600">Social
                                                        Networks</span>
                                                    <button class="btn social-btn btn-fb mb-2 text-center"><i
                                                            class="fa-brands fa-facebook-f m-r-5"></i>Facebook</button>
                                                    <button class="btn social-btn btn-twitter mb-2 text-center"><i
                                                            class="fa-brands fa-twitter m-r-5"></i>Twitter</button>
                                                    <button class="btn social-btn btn-google text-center"><i
                                                            class="fa-brands fa-dribbble m-r-5"></i>Dribbble</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 xl-50 box-col-6">
                                    <div class="card">
                                        <div class="card-header accordion">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link accordion-button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseicon3" aria-expanded="true"
                                                    aria-controls="collapseicon3">Followers</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="collapseicon3" aria-labelledby="collapseicon3"
                                            data-bs-parent="#accordion">
                                            <div class="card-body social-list filter-cards-view">
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/4.jpg') }}">
                                                    <div class="flex-grow-1"><span class="d-block">Bucky Barnes</span><a
                                                            href="#">Add Friend</a></div>
                                                </div>
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/5.jpg') }}">
                                                    <div class="flex-grow-1"><span class="d-block">Sarah Loren</span><a
                                                            href="#">Add Friend</a></div>
                                                </div>
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/6.jpg') }}">
                                                    <div class="flex-grow-1"><span class="d-block">Jason Borne</span><a
                                                            href="#">Add Friend</a></div>
                                                </div>
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/7.jpg') }}">
                                                    <div class="flex-grow-1"><span class="d-block">Comeren Diaz</span><a
                                                            href="#">Add Friend</a></div>
                                                </div>
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/8.jpg') }}">
                                                    <div class="flex-grow-1"><span class="d-block">Andew Jon</span><a
                                                            href="#">Add Friend</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 xl-50 box-col-6">
                                    <div class="card">
                                        <div class="card-header accordion">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link accordion-button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseicon10" aria-expanded="true"
                                                    aria-controls="collapseicon10">Followings</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="collapseicon10" aria-labelledby="collapseicon10"
                                            data-bs-parent="#accordion">
                                            <div class="card-body social-list filter-cards-view">
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/9.jpg') }}">
                                                    <div class="flex-grow-1"><span class="d-block">Sarah Loren</span><a
                                                            href="#">Add Friend</a></div>
                                                </div>
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/1.jpg') }}">
                                                    <div class="flex-grow-1"><span class="d-block">Bucky Barnes</span><a
                                                            href="#">Add Friend</a></div>
                                                </div>
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/2.jpg') }}">
                                                    <div class="flex-grow-1"><span class="d-block">Comeren Diaz</span><a
                                                            href="#">Add Friend</a></div>
                                                </div>
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/3.jpg') }}">
                                                    <div class="flex-grow-1"><span class="d-block">Jason Borne</span><a
                                                            href="#">Add Friend</a></div>
                                                </div>
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/4.jpg') }}">
                                                    <div class="flex-grow-1"><span class="d-block">Andew Jon</span><a
                                                            href="#">Add Friend</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 xl-50 box-col-6">
                                    <div class="card">
                                        <div class="card-header accordion">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link accordion-button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseicon4" aria-expanded="true"
                                                    aria-controls="collapseicon4">Latest Photos</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="collapseicon4" data-bs-parent="#accordion"
                                            aria-labelledby="collapseicon4">
                                            <div class="card-body photos filter-cards-view px-0">
                                                <ul class="text-center">
                                                    <li>
                                                        <div class="latest-post"><img class="img-fluid" alt=""
                                                                src="{{ asset('assets/images/social-app/post-1.png') }}"></div>
                                                    </li>
                                                    <li>
                                                        <div class="latest-post"><img class="img-fluid" alt=""
                                                                src="{{ asset('assets/images/social-app/post-2.png') }}"></div>
                                                    </li>
                                                    <li>
                                                        <div class="latest-post"><img class="img-fluid" alt=""
                                                                src="{{ asset('assets/images/social-app/post-3.png"') }}></div>
                                                    </li>
                                                    <li>
                                                        <div class="latest-post"><img class="img-fluid" alt=""
                                                                src="{{ asset('assets/images/social-app/post-4.png') }}"></div>
                                                    </li>
                                                    <li>
                                                        <div class="latest-post"><img class="img-fluid" alt=""
                                                                src="{{ asset('assets/images/social-app/post-5.png') }}"></div>
                                                    </li>
                                                    <li>
                                                        <div class="latest-post"><img class="img-fluid" alt=""
                                                                src="{{ asset('assets/images/social-app/post-6.png') }}"></div>
                                                    </li>
                                                    <li>
                                                        <div class="latest-post"><img class="img-fluid" alt=""
                                                                src="{{ asset('assets/images/social-app/post-7.png') }}"></div>
                                                    </li>
                                                    <li>
                                                        <div class="latest-post"><img class="img-fluid" alt=""
                                                                src="{{ asset('assets/images/social-app/post-') }}8.png"></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 xl-50 box-col-6">
                                    <div class="card">
                                        <div class="card-header accordion">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link accordion-button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseicon13" aria-expanded="true"
                                                    aria-controls="collapseicon13">Friends</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="collapseicon13" data-bs-parent="#accordion"
                                            aria-labelledby="collapseicon13">
                                            <div class="card-body avatar-showcase filter-cards-view">
                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/3.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/5.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/1.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/2.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/3.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/6.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/1.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/10.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/1.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/4.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/11.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/8.jpg') }}" alt="#"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 xl-50 box-col-6">
                                    <div class="card"><img class="img-fluid"
                                            src="{{ asset('assets/images/social-app/timeline-4.png') }}" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about">
                <div class="row">
                    <div class="col-xl-3 xl-40 col-lg-12 col-md-6 box-col-4">
                        <div class="default-according style-1 faq-accordion accordion" id="accordionExample1">
                            <div class="card">
                                <div class="card-header" id="headingOneone">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-start accordion-button" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOneone"
                                            aria-expanded="true" aria-controls="collapseOneone">My Profile</button>
                                    </h2>
                                </div>
                                <div class="collapse show" id="collapseOneone" aria-labelledby="headingOneone"
                                    data-bs-parent="#accordionExample1">
                                    <div class="card-body socialprofile filter-cards-view">
                                        <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                src="{{ asset('assets/images/avatar/1.jpg') }}" alt="">
                                            <div class="flex-grow-1">
                                                <h6 class="font-primary f-w-600">My Page</h6><span
                                                    class="d-block"><span><i class="fa-regular fa-comments"> </i><span
                                                            class="px-2">Messages<span
                                                                class="badge rounded-pill badge-light ms-2">9</span></span></span></span><span
                                                    class="d-block"><span><i class="fa-regular fa-bell"> </i><span
                                                            class="px-2">notification<span
                                                                class="badge rounded-pill badge-light ms-2">9</span></span></span></span>
                                            </div>
                                        </div>
                                        <div class="social-btngroup d-flex">
                                            <button class="btn btn-primary text-center" type="button">Likes</button>
                                            <button class="btn bg-light-primary text-center ms-2"
                                                type="button">View</button>
                                        </div>
                                        <div class="likes-profile text-center">
                                            <h5> <span class="font-light"> <i class="fa fa-heart font-danger"></i>
                                                    884</span></h5>
                                        </div>
                                        <div class="text-center">35 New Likes This Week</div>
                                        <div class="customers text-center social-group">
                                            <ul>
                                                <li class="d-inline-block"><img class="img-40 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/2.jpg') }}" alt=""
                                                        data-container="body" data-bs-toggle="tooltip" title=""
                                                        data-original-title="Johny Waston"></li>
                                                <li class="d-inline-block"><img class="img-40 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/3.jpg') }}" alt=""
                                                        data-container="body" data-bs-toggle="tooltip" title=""
                                                        data-original-title="Andew Jon"></li>
                                                <li class="d-inline-block"><img class="img-40 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/4.jpg') }}" alt=""
                                                        data-container="body" data-bs-toggle="tooltip" title=""
                                                        data-original-title="Comeren Diaz"></li>
                                                <li class="d-inline-block"><img class="img-40 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/5.jpg') }}" alt=""
                                                        data-container="body" data-bs-toggle="tooltip" title=""
                                                        data-original-title="Bucky Barnes"></li>
                                                <li class="d-inline-block"><img class="img-40 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/6.jpg') }}" alt=""
                                                        data-container="body" data-bs-toggle="tooltip" title=""
                                                        data-original-title="Jason Borne"></li>
                                                <li class="d-inline-block"><img class="img-40 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/7.jpg') }}" alt=""
                                                        data-container="body" data-bs-toggle="tooltip" title=""
                                                        data-original-title="Comeren Diaz"></li>
                                            </ul>
                                        </div><img class="img-fluid mt-5" alt=""
                                            src="{{ asset('assets/images/social-app/timeline-3.png') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwotwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-start collapsed accordion-button"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwotwo"
                                            aria-expanded="true" aria-controls="collapseTwotwo">Mutual Friends</button>
                                    </h2>
                                </div>
                                <div class="collapse show" id="collapseTwotwo" aria-labelledby="headingTwotwo"
                                    data-bs-parent="#accordionExample1">
                                    <div class="card-body social-status filter-cards-view">
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/1.jpg') }}" alt="">
                                            <div class="social-status social-online"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Bucky
                                                    Barnes</span><span class="d-block">winter@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/2.jpg') }}" alt="">
                                            <div class="social-status social-busy"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Sarah Loren</span><span
                                                    class="d-block">barnes@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/3.jpg') }}" alt="">
                                            <div class="social-status social-offline"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Jason Borne</span><span
                                                    class="d-block">jasonb@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/4.jpg') }}" alt="">
                                            <div class="social-status social-offline"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Comeren
                                                    Diaz</span><span class="d-block">comere@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/5.jpg') }}" alt="">
                                            <div class="social-status social-online"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Andew Jon</span><span
                                                    class="d-block">andrewj@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/6.jpg') }}" alt="">
                                            <div class="social-status social-busy"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Johny
                                                    Waston</span><span class="d-block">johny@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/7.jpg') }}" alt="">
                                            <div class="social-status social-offline"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Johny
                                                    William</span><span class="d-block">johnyw@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/8.jpg') }}" alt="">
                                            <div class="social-status social-online"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Bucky
                                                    Barnes</span><span class="d-block">winter@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/9.jpg') }}" alt="">
                                            <div class="social-status social-busy"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Sarah Loren</span><span
                                                    class="d-block">barnes@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/1.jpg') }}" alt="">
                                            <div class="social-status social-offline"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Jason Borne</span><span
                                                    class="d-block">jasonb@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/2.jpg') }}" alt="">
                                            <div class="social-status social-offline"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Comeren
                                                    Diaz</span><span class="d-block">comere@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/3.jpg') }}" alt="">
                                            <div class="social-status social-online"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Andew Jon</span><span
                                                    class="d-block">andrewj@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/5.jpg') }}" alt="">
                                            <div class="social-status social-busy"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Johny
                                                    Waston</span><span class="d-block">johny@gmail.com</span></div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/6.jpg') }}" alt="">
                                            <div class="social-status social-offline"></div>
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Johny
                                                    William</span><span class="d-block">johnyw@gmail.com</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThreeThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-start collapsed accordion-button"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeThree"
                                            aria-expanded="true" aria-controls="collapseThreeThree">Activity Feed</button>
                                    </h2>
                                </div>
                                <div class="collapse show" id="collapseThreeThree" aria-labelledby="headingThreeThree"
                                    data-bs-parent="#accordionExample1">
                                    <div class="card-body social-status filter-cards-view">
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/1.jpg') }}" alt="">
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Andew Jon</span>
                                                <p>Commented on Shaun Park's <a href="#">Photo</a></p><span
                                                    class="light-span">20 min Ago</span>
                                            </div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/2.jpg') }}" alt="">
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Johny Waston</span>
                                                <p>Commented on Shaun Park's <a href="#">Photo</a></p><span
                                                    class="light-span">1 hour Ago</span>
                                            </div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/3.jpg') }}" alt="">
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Comeren Diaz</span>
                                                <p>Commented on Shaun Park's <a href="#">Photo</a></p><span
                                                    class="light-span">1 days Ago</span>
                                            </div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/4.jpg') }}" alt="">
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Sarah Loren</span>
                                                <p>Commented on Shaun Park's <a href="#">Photo</a></p><span
                                                    class="light-span">2 days Ago</span>
                                            </div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/5.jpg') }}" alt="">
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Johny Waston</span>
                                                <p>Commented on Shaun Park's <a href="#">Photo</a></p><span
                                                    class="light-span">5 days Ago</span>
                                            </div>
                                        </div>
                                        <div class="d-flex"><img class="img-50 rounded-circle m-r-15"
                                                src="{{ asset('assets/images/avatar/6.jpg') }}" alt="">
                                            <div class="flex-grow-1"><span class="f-w-600 d-block">Comeren Diaz</span>
                                                <p>Commented on Shaun Park's <a href="#">Photo</a></p><span
                                                    class="light-span">6 days Ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 xl-60 col-lg-12 col-md-6 box-col-8e">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Pepole You May Know</h5>
                                    </div>
                                    <div class="card-body avatar-showcase">
                                        <div class="pepole-knows">
                                            <ul>
                                                <li>
                                                    <div class="add-friend text-center"><img
                                                            class="img-60 img-fluid rounded-circle" alt=""
                                                            src="{{ asset('assets/images/avatar/7.jpg') }}"><span
                                                            class="d-block">Jason Borne</span>
                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="add-friend text-center"><img
                                                            class="img-60 img-fluid rounded-circle" alt=""
                                                            src="{{ asset('assets/images/avatar/8.jpg') }}"><span
                                                            class="d-block">Anna Mull</span>
                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="add-friend text-center"><img
                                                            class="img-60 img-fluid rounded-circle" alt=""
                                                            src="{{ asset('assets/images/avatar/9.jpg') }}"><span
                                                            class="d-block">Dion Cast</span>
                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="add-friend text-center"><img
                                                            class="img-60 img-fluid rounded-circle" alt=""
                                                            src="{{ asset('assets/images/avatar/1.jpg') }}"><span
                                                            class="d-block">Karlene Lex</span>
                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="add-friend text-center"><img
                                                            class="img-60 img-fluid rounded-circle" alt=""
                                                            src="{{ asset('assets/images/avatar/2.jpg') }}"><span
                                                            class="d-block">Vella Chism</span>
                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="add-friend text-center"><img
                                                            class="img-60 img-fluid rounded-circle" alt=""
                                                            src="{{ asset('assets/images/avatar/3.jpg') }}"><span
                                                            class="d-block">Wai Schalk</span>
                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="add-friend text-center"><img
                                                            class="img-60 img-fluid rounded-circle" alt=""
                                                            src="{{ asset('assets/images/avatar/4.jpg') }}"><span
                                                            class="d-block">Karlene Lex</span>
                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header social-header">
                                        <h5> <span>Hobbies and Interests</span><span class="pull-right">
                                                <svg class="feather">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-vertical') }}">
                                                    </use>
                                                </svg></span></h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row details-about">
                                            <div class="col-sm-6">
                                                <div class="your-details"><span
                                                        class="f-w-600 mb-2 d-block">Hobbies:</span>
                                                    <p>I like to ride the bike to work, swimming, and working out. I also
                                                        like reading design magazines, go to museums, and binge watching a
                                                        good tv show while it’s raining outside.</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="your-details your-details-xs"><span
                                                        class="f-w-600 mb-2 d-block">Favourite Music Bands /
                                                        Artists:</span>
                                                    <p>Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a
                                                        Revenge.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row details-about">
                                            <div class="col-sm-6">
                                                <div class="your-details"><span class="f-w-600 mb-2 d-block">Favourite
                                                        TV Shows:</span>
                                                    <p>Breaking Good, RedDevil, People of Interest, The Running Dead, Found,
                                                        American Guy.</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="your-details your-details-xs"><span
                                                        class="f-w-600 mb-2 d-block">Favourite Books:</span>
                                                    <p>The Crime of the Century, Egiptian Mythology 101, The Scarred Wizard,
                                                        Lord of the Wings, Amongst Gods, The Oracle, A Tale of Air and
                                                        Water.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row details-about">
                                            <div class="col-sm-6">
                                                <div class="your-details"><span class="f-w-600 mb-2 d-block">Favourite
                                                        Movies:</span>
                                                    <p>Idiocratic, The Scarred Wizard and the Fire Crown, Crime Squad Ferrum
                                                        Man.</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="your-details your-details-xs"><span
                                                        class="f-w-600 mb-2 d-block">Favourite Writers:</span>
                                                    <p>Martin T. Georgeston, Jhonathan R. Token, Ivana Rowle, Alexandr
                                                        Platt, Marcus Roth.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row details-about">
                                            <div class="col-sm-6">
                                                <div class="your-details"><span class="f-w-600 mb-2 d-block">Favourite
                                                        Games:</span>
                                                    <p>The First of Us, Assassin’s Squad, Dark Assylum, NMAK16, Last Cause
                                                        4, Grand Snatch Auto.</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="your-details your-details-xs"><span
                                                        class="f-w-600 mb-2 d-block">Other Interests:</span>
                                                    <p>Swimming, Surfing, SEdmin Diving, Anime, Photography, Tattoos, Street
                                                        Art.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header social-header">
                                        <h5> <span>Education and Employement</span><span class="pull-right">
                                                <svg class="feather">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-vertical') }}">
                                                    </use>
                                                </svg></span></h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row details-about">
                                            <div class="col-sm-6">
                                                <div class="your-details"><span class="f-w-600">The New College of
                                                        Design</span>
                                                    <p>2001 - 2006</p>
                                                    <p>Breaking Good, RedDevil, People of Interest, The Running Dead, Found,
                                                        American Guy.</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="your-details your-details-xs"><span class="f-w-600">Digital
                                                        Design Intern</span>
                                                    <p>2006-2008</p>
                                                    <p>Digital Design Intern for the “Multimedz” agency. Was in charge of
                                                        the communication with the clients.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row details-about">
                                            <div class="col-sm-6">
                                                <div class="your-details"><span class="f-w-600">Rembrandt
                                                        Institute</span>
                                                    <p>2008</p>
                                                    <p>Five months Digital Illustration course. Professor: Leonardo Stagg.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="your-details your-details-xs"><span class="f-w-600">UI/UX
                                                        Designer</span>
                                                    <p>2001 - 2006</p>
                                                    <p>Breaking Good, RedDevil, People of Interest, The Running Dead, Found,
                                                        American Guy.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row details-about">
                                            <div class="col-sm-6">
                                                <div class="your-details"><span class="f-w-600">The Digital
                                                        College</span>
                                                    <p>2010</p>
                                                    <p>6 months intensive Motion Graphics course. After Effects and Premire.
                                                        Professor: Donatello Urtle.</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="your-details your-details-xs"><span class="f-w-600">The New
                                                        College of Design</span>
                                                    <p>2008 - 2013</p>
                                                    <p>UI/UX Designer for the “Daydreams” agency.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Viewed Your Profile</h5>
                                    </div>
                                    <div class="card-body avatar-showcase">
                                        <div class="pepole-knows">
                                            <ul>
                                                <li>
                                                    <div class="add-friend text-center"><img
                                                            class="img-60 img-fluid rounded-circle" alt=""
                                                            src="{{ asset('assets/images/avatar/9.jpg') }}"><span
                                                            class="d-block">Jason Borne</span>
                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="add-friend text-center"><img
                                                            class="img-60 img-fluid rounded-circle" alt=""
                                                            src="{{ asset('assets/images/avatar/8.jpg') }}"><span
                                                            class="d-block">Anna Mull</span>
                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="add-friend text-center"><img
                                                            class="img-60 img-fluid rounded-circle" alt=""
                                                            src="{{ asset('assets/images/avatar/7.jpg') }}"><span
                                                            class="d-block">Dion Cast</span>
                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="add-friend text-center"><img
                                                            class="img-60 img-fluid rounded-circle" alt=""
                                                            src="{{ asset('assets/images/avatar/6.jpg') }}"><span
                                                            class="d-block">Karlene Lex</span>
                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="add-friend text-center"><img
                                                            class="img-60 img-fluid rounded-circle" alt=""
                                                            src="{{ asset('assets/images/avatar/5.jpg') }}"><span
                                                            class="d-block">Vella Chism</span>
                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="add-friend text-center"><img
                                                            class="img-60 img-fluid rounded-circle" alt=""
                                                            src="{{ asset('assets/images/avatar/4.jpg') }}"><span
                                                            class="d-block">Wai Schalk</span>
                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="add-friend text-center"><img
                                                            class="img-60 img-fluid rounded-circle" alt=""
                                                            src="{{ asset('assets/images/avatar/3.jpg') }}"><span
                                                            class="d-block">Karlene Lex</span>
                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Activity Log</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="activity-log">
                                            <div class="my-activity">
                                                <h6 class="f-w-600 mb-3">Today</h6>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#thumbs-up') }}">
                                                            </use>
                                                        </svg></span>Comeren Diaz likes your photos.</p>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#user-plus') }}">
                                                            </use>
                                                        </svg></span>Karlene Lex and Comeren Diaz now friends.</p>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#message-square') }}">
                                                            </use>
                                                        </svg></span>Sarah Loren wrote on your timeline </p>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#thumbs-up') }}">
                                                            </use>
                                                        </svg></span>Johny Waston likes your post's.</p>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#user-plus') }}">
                                                            </use>
                                                        </svg></span>Andew Jon became friends with Comeren Diaz.</p>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#user-plus') }}">
                                                            </use>
                                                        </svg></span>Johny Waston became friends with Bucky Barnes.</p>
                                            </div>
                                            <div class="my-activity">
                                                <h6 class="f-w-600 mb-3">25 December</h6>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#thumbs-up') }}">
                                                            </use>
                                                        </svg></span>Comeren Diaz likes your photos.</p>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#thumbs-up') }}">
                                                            </use>
                                                        </svg></span>Johny Waston likes your post's.</p>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#user-plus') }}">
                                                            </use>
                                                        </svg></span>Karlene Lex and Comeren Diaz now friends.</p>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#user-plus') }}">
                                                            </use>
                                                        </svg></span>Johny Waston became friends with Bucky Barnes.</p>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#message-square') }}">
                                                            </use>
                                                        </svg></span>Sarah Loren wrote on your timeline </p>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#message-square') }}">
                                                            </use>
                                                        </svg></span>Comeren Diaz wrote on your timeline</p>
                                            </div>
                                            <div class="my-activity">
                                                <h6 class="f-w-600 mb-3">8 september</h6>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#thumbs-up') }}">
                                                            </use>
                                                        </svg></span>Comeren Diaz likes your photos.</p>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#thumbs-up') }}">
                                                            </use>
                                                        </svg></span>Johny Waston likes your post's.</p>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#user-plus') }}">
                                                            </use>
                                                        </svg></span>Karlene Lex and Comeren Diaz now friends.</p>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#user-plus') }}">
                                                            </use>
                                                        </svg></span>Johny Waston became friends with Bucky Barnes.</p>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#message-square') }}">
                                                            </use>
                                                        </svg></span>Sarah Loren wrote on your timeline </p>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#user-plus') }}">
                                                            </use>
                                                        </svg></span>Andew Jon became friends with Comeren Diaz.</p>
                                            </div>
                                            <div class="my-activity">
                                                <h6 class="f-w-600 mb-3">6 June</h6>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#thumbs-up') }}">
                                                            </use>
                                                        </svg></span>Comeren Diaz likes your photos.</p>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#user-plus') }}">
                                                            </use>
                                                        </svg></span>Karlene Lex and Comeren Diaz now friends.</p>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#message-square') }}">
                                                            </use>
                                                        </svg></span>Sarah Loren wrote on your timeline </p>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#thumbs-up') }}">
                                                            </use>
                                                        </svg></span>Johny Waston likes your post's.</p>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#user-plus') }}">
                                                            </use>
                                                        </svg></span>Andew Jon became friends with Comeren Diaz.</p>
                                                <p><span>
                                                        <svg class="feather m-r-20">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#user-plus') }}">
                                                            </use>
                                                        </svg></span>Johny Waston became friends with Bucky Barnes.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 xl-100 box-col-12">
                        <div class="default-according style-1 faq-accordion job-accordion accordion" id="accordionoc3">
                            <div class="row">
                                <div class="col-xl-12 xl-50 box-col-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link accordion-button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseicon7" aria-expanded="true"
                                                    aria-controls="collapseicon7">Profile Intro</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="collapseicon7" aria-labelledby="collapseicon7"
                                            data-bs-parent="#accordion" aria-controls="collapseicon7">
                                            <div class="card-body filter-cards-view"><span
                                                    class="f-w-600 mb-2 d-block">About Me :</span>
                                                <p class="mb-3">
                                                    Hi, I’m elana, I’m 30 and I work as a
                                                    web Designer for the “Daydreams”
                                                    Agency in Pier 56.
                                                </p><span class="f-w-600 mb-2 d-block">Favourite TV shows :</span>
                                                <p class="mb-3">
                                                    Breaking Good, RedDevil, People of
                                                    Interest, The Running Dead,
                                                    Found, American Guy.
                                                </p><span class="f-w-600 mb-2 d-block">Favourite Music Bands :</span>
                                                <p class="mb-3">
                                                    Breaking Good, RedDevil, People of
                                                    Interest, The Running Dead,
                                                    Found, American Guy.
                                                </p>
                                                <div class="social-network theme-form"><span class="f-w-600">Social
                                                        Networks</span>
                                                    <button class="btn social-btn btn-fb mb-2 text-center"><i
                                                            class="fa-brands fa-facebook-f m-r-5"></i>Facebook</button>
                                                    <button class="btn social-btn btn-twitter mb-2 text-center"><i
                                                            class="fa-brands fa-twitter m-r-5"></i>Twitter</button>
                                                    <button class="btn social-btn btn-google text-center"><i
                                                            class="fa-brands fa-dribbble m-r-5"></i>Dribbble</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 xl-50 box-col-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link accordion-button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseicon8" aria-expanded="true"
                                                    aria-controls="collapseicon8">Followers</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="collapseicon8" aria-labelledby="collapseicon8"
                                            data-bs-parent="#accordion">
                                            <div class="card-body social-list filter-cards-view">
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/1.jpg') }}">
                                                    <div class="flex-grow-1"><span class="d-block">Bucky Barnes</span><a
                                                            href="#">Add Friend</a></div>
                                                </div>
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/2.jpg') }}">
                                                    <div class="flex-grow-1"><span class="d-block">Sarah Loren</span><a
                                                            href="#">Add Friend</a></div>
                                                </div>
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/3.jpg') }}">
                                                    <div class="flex-grow-1"><span class="d-block">Jason Borne</span><a
                                                            href="#">Add Friend</a></div>
                                                </div>
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/4.jpg') }}">
                                                    <div class="flex-grow-1"><span class="d-block">Comeren Diaz</span><a
                                                            href="#">Add Friend</a></div>
                                                </div>
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/5.jpg') }}">
                                                    <div class="flex-grow-1"><span class="d-block">Andew Jon</span><a
                                                            href="#">Add Friend</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 xl-50 box-col-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link accordion-button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseicon11" aria-expanded="true"
                                                    aria-controls="collapseicon11">Followings</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="collapseicon11"
                                            aria-labelledby="collapseicon11" data-bs-parent="#accordion">
                                            <div class="card-body social-list filter-cards-view">
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/9.jpg') }}">
                                                    <div class="flex-grow-1"><span class="d-block">Sarah Loren</span><a
                                                            href="#">Add Friend</a></div>
                                                </div>
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/8.jpg') }}">
                                                    <div class="flex-grow-1"><span class="d-block">Bucky Barnes</span><a
                                                            href="#">Add Friend</a></div>
                                                </div>
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/7.jpg') }}">
                                                    <div class="flex-grow-1"><span class="d-block">Comeren Diaz</span><a
                                                            href="#">Add Friend</a></div>
                                                </div>
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/6.jpg') }}">
                                                    <div class="flex-grow-1"><span class="d-block">Jason Borne</span><a
                                                            href="#">Add Friend</a></div>
                                                </div>
                                                <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                        alt="" src="{{ asset('assets/images/avatar/5.jpg') }}">
                                                    <div class="flex-grow-1"><span class="d-block">Andew Jon</span><a
                                                            href="#">Add Friend</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 xl-50 box-col-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link accordion-button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseicon9" aria-expanded="true"
                                                    aria-controls="collapseicon9">Latest Photos</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="collapseicon9" data-bs-parent="#accordion"
                                            aria-labelledby="collapseicon9">
                                            <div class="card-body photos filter-cards-view px-0">
                                                <ul class="text-center">
                                                    <li>
                                                        <div class="latest-post"><img class="img-fluid" alt=""
                                                                src="{{ asset('assets/images/social-app/post-1.png') }}"></div>
                                                    </li>
                                                    <li>
                                                        <div class="latest-post"><img class="img-fluid" alt=""
                                                                src="{{ asset('assets/images/social-app/post-2.png') }}"></div>
                                                    </li>
                                                    <li>
                                                        <div class="latest-post"><img class="img-fluid" alt=""
                                                                src="{{ asset('assets/images/social-app/post-3.png') }}"></div>
                                                    </li>
                                                    <li>
                                                        <div class="latest-post"><img class="img-fluid" alt=""
                                                                src="{{ asset('assets/images/social-app/post-4.png') }}"></div>
                                                    </li>
                                                    <li>
                                                        <div class="latest-post"><img class="img-fluid" alt=""
                                                                src="{{ asset('assets/images/social-app/post-5.png') }}"></div>
                                                    </li>
                                                    <li>
                                                        <div class="latest-post"><img class="img-fluid" alt=""
                                                                src="{{ asset('assets/images/social-app/post-6.png') }}"></div>
                                                    </li>
                                                    <li>
                                                        <div class="latest-post"><img class="img-fluid" alt=""
                                                                src="{{ asset('assets/images/social-app/post-7.png') }}"></div>
                                                    </li>
                                                    <li>
                                                        <div class="latest-post"><img class="img-fluid" alt=""
                                                                src="{{ asset('assets/images/social-app/post-8.png') }}"></div>
                                                    </li>
                                                    <li>
                                                        <div class="latest-post"><img class="img-fluid" alt=""
                                                                src="{{ asset('assets/images/social-app/post-9.png') }}"></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 xl-50 box-col-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link accordion-button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseicon15" aria-expanded="true"
                                                    aria-controls="collapseicon15">Friends</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="collapseicon15" data-bs-parent="#accordion"
                                            aria-labelledby="collapseicon15">
                                            <div class="card-body avatar-showcase filter-cards-view">
                                                <div class="d-inline-block friend-pic"><img
                                                        class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/1.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img
                                                        class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/2.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img
                                                        class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/3.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img
                                                        class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/4.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img
                                                        class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/5.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img
                                                        class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/6.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img
                                                        class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/7.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img
                                                        class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/8.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img
                                                        class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/9.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img
                                                        class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/1.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img
                                                        class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/2.jpg') }}" alt="#"></div>
                                                <div class="d-inline-block friend-pic"><img
                                                        class="img-50 rounded-circle"
                                                        src="{{ asset('assets/images/avatar/3.jpg') }}" alt="#"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 xl-50 box-col-6">
                                    <div class="card"><img class="img-fluid"
                                            src="{{ ASSET('assets/images/social-app/timeline-4.png') }}" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="friends" role="tabpanel" aria-labelledby="friends">
                <div class="row">
                    <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                        <div class="card social-profile">
                            <div class="card-body">
                                <div class="social-img-wrap">
                                    <div class="social-img"><img src="{{ asset('assets/images/avatar/1.jpg') }}" alt="profile">
                                    </div>
                                    <div class="edit-icon">
                                        <svg class="feather stroke-primary">
                                            <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="social-details">
                                    <h4 class="mb-1"><a class="f-20" href="{{ route('admin.social_app') }}">Brooklyn Simmons</a>
                                    </h4><span class="font-light">@brookly.simmons</span>
                                    <ul class="card-social">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa-brands fa-facebook-f font-primary"></i></a></li>
                                        <li><a href="https://accounts.google.com/" target="_blank"><i
                                                    class="fa-brands fa-google-plus-g font-primary"></i></a></li>
                                        <li><a href="https://twitter.com/" target="_blank"><i
                                                    class="fa-brands fa-twitter font-primary"></i></a></li>
                                        <li><a href="https://www.instagram.com/" target="_blank"><i
                                                    class="fa-brands fa-instagram font-primary"></i></a></li>
                                        <li><a href="https://rss.app/" target="_blank"><i
                                                    class="fa fa-rss font-primary"></i></a></li>
                                    </ul>
                                    <ul class="social-follow">
                                        <li>
                                            <h5 class="mb-0">1,908</h5><span class="font-light">Posts</span>
                                        </li>
                                        <li>
                                            <h5 class="mb-0">34.0k</h5><span class="font-light">Followers</span>
                                        </li>
                                        <li>
                                            <h5 class="mb-0">897</h5><span class="font-light">Following</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                        <div class="card social-profile">
                            <div class="card-body">
                                <div class="social-img-wrap">
                                    <div class="social-img"><img src="{{ asset('assets/images/avatar/2.jpg') }}" alt="profile">
                                    </div>
                                    <div class="edit-icon">
                                        <svg class="feather stroke-primary">
                                            <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="social-details">
                                    <h4 class="mb-1"><a class="f-20" href="{{ route('admin.social_app') }}">Mark Jecno</a></h4>
                                    <span class="font-light">@mark.jeco</span>
                                    <ul class="card-social">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa-brands fa-facebook-f font-primary"></i></a></li>
                                        <li><a href="https://accounts.google.com/" target="_blank"><i
                                                    class="fa-brands fa-google-plus-g font-primary"></i></a></li>
                                        <li><a href="https://twitter.com/" target="_blank"><i
                                                    class="fa-brands fa-twitter font-primary"></i></a></li>
                                        <li><a href="https://www.instagram.com/" target="_blank"><i
                                                    class="fa-brands fa-instagram font-primary"></i></a></li>
                                        <li><a href="https://rss.app/" target="_blank"><i
                                                    class="fa fa-rss font-primary"></i></a></li>
                                    </ul>
                                    <ul class="social-follow">
                                        <li>
                                            <h5 class="mb-0">875</h5><span class="font-light">Posts</span>
                                        </li>
                                        <li>
                                            <h5 class="mb-0">12.0k</h5><span class="font-light">Followers</span>
                                        </li>
                                        <li>
                                            <h5 class="mb-0">1400</h5><span class="font-light">Following</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                        <div class="card social-profile">
                            <div class="card-body">
                                <div class="social-img-wrap">
                                    <div class="social-img"><img src="{{ asset('assets/images/avatar/3.jpg') }}" alt="profile">
                                    </div>
                                    <div class="edit-icon">
                                        <svg class="feather stroke-primary">
                                            <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="social-details">
                                    <h4 class="mb-1"><a class="f-20" href="{{ route('admin.social_app') }}">Dev John</a></h4><span
                                        class="font-light">@john.dev</span>
                                    <ul class="card-social">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa-brands fa-facebook-f font-primary"></i></a></li>
                                        <li><a href="https://accounts.google.com/" target="_blank"><i
                                                    class="fa-brands fa-google-plus-g font-primary"></i></a></li>
                                        <li><a href="https://twitter.com/" target="_blank"><i
                                                    class="fa-brands fa-twitter font-primary"></i></a></li>
                                        <li><a href="https://www.instagram.com/" target="_blank"><i
                                                    class="fa-brands fa-instagram font-primary"></i></a></li>
                                        <li><a href="https://rss.app/" target="_blank"><i
                                                    class="fa fa-rss font-primary"></i></a></li>
                                    </ul>
                                    <ul class="social-follow">
                                        <li>
                                            <h5 class="mb-0">1,274</h5><span class="font-light">Posts</span>
                                        </li>
                                        <li>
                                            <h5 class="mb-0">15.0k</h5><span class="font-light">Followers</span>
                                        </li>
                                        <li>
                                            <h5 class="mb-0">1874</h5><span class="font-light">Following</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                        <div class="card social-profile">
                            <div class="card-body">
                                <div class="social-img-wrap">
                                    <div class="social-img"><img src="{{ asset('assets/images/avatar/4.jpg') }}" alt="profile">
                                    </div>
                                    <div class="edit-icon">
                                        <svg class="feather stroke-primary">
                                            <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="social-details">
                                    <h4 class="mb-1"><a class="f-20" href="{{ route('admin.social_app') }}">Johan Deo</a></h4>
                                    <span class="font-light">@deo.johan</span>
                                    <ul class="card-social">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa-brands fa-facebook-f font-primary"></i></a></li>
                                        <li><a href="https://accounts.google.com/" target="_blank"><i
                                                    class="fa-brands fa-google-plus-g font-primary"></i></a></li>
                                        <li><a href="https://twitter.com/" target="_blank"><i
                                                    class="fa-brands fa-twitter font-primary"></i></a></li>
                                        <li><a href="https://www.instagram.com/" target="_blank"><i
                                                    class="fa-brands fa-instagram font-primary"></i></a></li>
                                        <li><a href="https://rss.app/" target="_blank"><i
                                                    class="fa fa-rss font-primary"></i></a></li>
                                    </ul>
                                    <ul class="social-follow">
                                        <li>
                                            <h5 class="mb-0">500</h5><span class="font-light">Posts</span>
                                        </li>
                                        <li>
                                            <h5 class="mb-0">8.0k</h5><span class="font-light">Followers</span>
                                        </li>
                                        <li>
                                            <h5 class="mb-0">570</h5><span class="font-light">Following</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                        <div class="card social-profile">
                            <div class="card-body">
                                <div class="social-img-wrap">
                                    <div class="social-img"><img src="{{ asset('assets/images/avatar/5.jpg') }}" alt="profile">
                                    </div>
                                    <div class="edit-icon">
                                        <svg class="feather stroke-primary">
                                            <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="social-details">
                                    <h4 class="mb-1"><a class="f-20" href="{{ route('admin.social_app') }}">Douglas Reichel</a>
                                    </h4><span class="font-light">@reichel.douglas</span>
                                    <ul class="card-social">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa-brands fa-facebook-f font-primary"></i></a></li>
                                        <li><a href="https://accounts.google.com/" target="_blank"><i
                                                    class="fa-brands fa-google-plus-g font-primary"></i></a></li>
                                        <li><a href="https://twitter.com/" target="_blank"><i
                                                    class="fa-brands fa-twitter font-primary"></i></a></li>
                                        <li><a href="https://www.instagram.com/" target="_blank"><i
                                                    class="fa-brands fa-instagram font-primary"></i></a></li>
                                        <li><a href="https://rss.app/" target="_blank"><i
                                                    class="fa fa-rss font-primary"></i></a></li>
                                    </ul>
                                    <ul class="social-follow">
                                        <li>
                                            <h5 class="mb-0">460</h5><span class="font-light">Posts</span>
                                        </li>
                                        <li>
                                            <h5 class="mb-0">2k</h5><span class="font-light">Followers</span>
                                        </li>
                                        <li>
                                            <h5 class="mb-0">350</h5><span class="font-light">Following</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                        <div class="card social-profile">
                            <div class="card-body">
                                <div class="social-img-wrap">
                                    <div class="social-img"><img src="{{ asset('assets/images/avatar/6.jpg') }}" alt="profile">
                                    </div>
                                    <div class="edit-icon">
                                        <svg class="feather stroke-primary">
                                            <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="social-details">
                                    <h4 class="mb-1"><a class="f-20" href="{{ route('admin.social_app') }}">Lisa lillian</a></h4>
                                    <span class="font-light">@lisa.lillian</span>
                                    <ul class="card-social">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa-brands fa-facebook-f font-primary"></i></a></li>
                                        <li><a href="https://accounts.google.com/" target="_blank"><i
                                                    class="fa-brands fa-google-plus-g font-primary"></i></a></li>
                                        <li><a href="https://twitter.com/" target="_blank"><i
                                                    class="fa-brands fa-twitter font-primary"></i></a></li>
                                        <li><a href="https://www.instagram.com/" target="_blank"><i
                                                    class="fa-brands fa-instagram font-primary"></i></a></li>
                                        <li><a href="https://rss.app/" target="_blank"><i
                                                    class="fa fa-rss font-primary"></i></a></li>
                                    </ul>
                                    <ul class="social-follow">
                                        <li>
                                            <h5 class="mb-0">547</h5><span class="font-light">Posts</span>
                                        </li>
                                        <li>
                                            <h5 class="mb-0">3.5k</h5><span class="font-light">Followers</span>
                                        </li>
                                        <li>
                                            <h5 class="mb-0">822</h5><span class="font-light">Following</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                        <div class="card social-profile">
                            <div class="card-body">
                                <div class="social-img-wrap">
                                    <div class="social-img"><img src="{{ asset('assets/images/avatar/7.jpg') }}" alt="profile">
                                    </div>
                                    <div class="edit-icon">
                                        <svg class="feather stroke-primary">
                                            <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="social-details">
                                    <h4 class="mb-1"><a class="f-20" href="{{ route('admin.social_app') }}">Olivia rose</a></h4>
                                    <span class="font-light">@rose.olivia</span>
                                    <ul class="card-social">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa-brands fa-facebook-f font-primary"></i></a></li>
                                        <li><a href="https://accounts.google.com/" target="_blank"><i
                                                    class="fa-brands fa-google-plus-g font-primary"></i></a></li>
                                        <li><a href="https://twitter.com/" target="_blank"><i
                                                    class="fa-brands fa-twitter font-primary"></i></a></li>
                                        <li><a href="https://www.instagram.com/" target="_blank"><i
                                                    class="fa-brands fa-instagram font-primary"></i></a></li>
                                        <li><a href="https://rss.app/" target="_blank"><i
                                                    class="fa fa-rss font-primary"></i></a></li>
                                    </ul>
                                    <ul class="social-follow">
                                        <li>
                                            <h5 class="mb-0">868</h5><span class="font-light">Posts</span>
                                        </li>
                                        <li>
                                            <h5 class="mb-0">1k</h5><span class="font-light">Followers</span>
                                        </li>
                                        <li>
                                            <h5 class="mb-0">742</h5><span class="font-light">Following</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                        <div class="card social-profile">
                            <div class="card-body">
                                <div class="social-img-wrap">
                                    <div class="social-img"><img src="{{ asset('assets/images/avatar/8.jpg') }}" alt="profile">
                                    </div>
                                    <div class="edit-icon">
                                        <svg class="feather stroke-primary">
                                            <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="social-details">
                                    <h4 class="mb-1"><a class="f-20" href="{{ route('admin.social_app') }}">Sarah Karen</a></h4>
                                    <span class="font-light">@karen.sarah</span>
                                    <ul class="card-social">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa-brands fa-facebook-f font-primary"></i></a></li>
                                        <li><a href="https://accounts.google.com/" target="_blank"><i
                                                    class="fa-brands fa-google-plus-g font-primary"></i></a></li>
                                        <li><a href="https://twitter.com/" target="_blank"><i
                                                    class="fa-brands fa-twitter font-primary"></i></a></li>
                                        <li><a href="https://www.instagram.com/" target="_blank"><i
                                                    class="fa-brands fa-instagram font-primary"></i></a></li>
                                        <li><a href="https://rss.app/" target="_blank"><i
                                                    class="fa fa-rss font-primary"></i></a></li>
                                    </ul>
                                    <ul class="social-follow">
                                        <li>
                                            <h5 class="mb-0">972</h5><span class="font-light">Posts</span>
                                        </li>
                                        <li>
                                            <h5 class="mb-0">2.5k</h5><span class="font-light">Followers</span>
                                        </li>
                                        <li>
                                            <h5 class="mb-0">864</h5><span class="font-light">Following</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="photos">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card gallery-grid">
                            <div class="my-gallery card-body row gallery-with-description" itemscope="">
                                <div class="col-xl-3 col-sm-6">
                                    <div class="my-gallery pswp-gallery">
                                        <div class="pswp-gallery__item"><a
                                                href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1669"
                                                data-pswp-height="2500" target="_blank"><img
                                                    src="{{ asset('assets/images/lightgallery/1.jpg') }}" alt="Demo image 1">
                                                <div class="caption">
                                                    <h4>Portfolio Title</h4>
                                                    <p>is simply dummy text of the printing and typesetting industry. Lorem
                                                        Ipsum has been the industry's standard dummy.</p>
                                                </div>
                                            </a>
                                            <div class="pswp-caption-content">
                                                <h4>Portfolio Title</h4>
                                                <p>is simply dummy text of the printing and typesetting industry. Lorem
                                                    Ipsum has been the industry's standard dummy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="my-gallery pswp-gallery">
                                        <div class="pswp-gallery__item"><a
                                                href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1669"
                                                data-pswp-height="2500" target="_blank"><img
                                                    src="{{ asset('assets/images/lightgallery/2.jpg') }}" alt="Demo image 1">
                                                <div class="caption">
                                                    <h4>Portfolio Title</h4>
                                                    <p>is simply dummy text of the printing and typesetting industry. Lorem
                                                        Ipsum has been the industry's standard dummy.</p>
                                                </div>
                                            </a>
                                            <div class="pswp-caption-content">
                                                <h4>Portfolio Title</h4>
                                                <p>is simply dummy text of the printing and typesetting industry. Lorem
                                                    Ipsum has been the industry's standard dummy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="my-gallery pswp-gallery">
                                        <div class="pswp-gallery__item"><a
                                                href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1669"
                                                data-pswp-height="2500" target="_blank"><img
                                                    src="{{ asset('assets/images/lightgallery/3.jpg') }}" alt="Demo image 1">
                                                <div class="caption">
                                                    <h4>Portfolio Title</h4>
                                                    <p>is simply dummy text of the printing and typesetting industry. Lorem
                                                        Ipsum has been the industry's standard dummy.</p>
                                                </div>
                                            </a>
                                            <div class="pswp-caption-content">
                                                <h4>Portfolio Title</h4>
                                                <p>is simply dummy text of the printing and typesetting industry. Lorem
                                                    Ipsum has been the industry's standard dummy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="my-gallery pswp-gallery">
                                        <div class="pswp-gallery__item"><a
                                                href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1669"
                                                data-pswp-height="2500" target="_blank"><img
                                                    src="{{ asset('assets/images/lightgallery/4.jpg') }}" alt="Demo image 1">
                                                <div class="caption">
                                                    <h4>Portfolio Title</h4>
                                                    <p>is simply dummy text of the printing and typesetting industry. Lorem
                                                        Ipsum has been the industry's standard dummy.</p>
                                                </div>
                                            </a>
                                            <div class="pswp-caption-content">
                                                <h4>Portfolio Title</h4>
                                                <p>is simply dummy text of the printing and typesetting industry. Lorem
                                                    Ipsum has been the industry's standard dummy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="my-gallery pswp-gallery">
                                        <div class="pswp-gallery__item"><a
                                                href="{{ asset('assets/images/big-lightgallery/5.jpg') }}" data-pswp-width="1669"
                                                data-pswp-height="2500" target="_blank"><img
                                                    src="{{ asset('assets/images/lightgallery/5.jpg') }}" alt="Demo image 1">
                                                <div class="caption">
                                                    <h4>Portfolio Title</h4>
                                                    <p>is simply dummy text of the printing and typesetting industry. Lorem
                                                        Ipsum has been the industry's standard dummy.</p>
                                                </div>
                                            </a>
                                            <div class="pswp-caption-content">
                                                <h4>Portfolio Title</h4>
                                                <p>is simply dummy text of the printing and typesetting industry. Lorem
                                                    Ipsum has been the industry's standard dummy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="my-gallery pswp-gallery">
                                        <div class="pswp-gallery__item"><a
                                                href="{{ asset('assets/images/big-lightgallery/6.jpg') }}" data-pswp-width="1669"
                                                data-pswp-height="2500" target="_blank"><img
                                                    src="{{ asset('assets/images/lightgallery/6.jpg') }}" alt="Demo image 1">
                                                <div class="caption">
                                                    <h4>Portfolio Title</h4>
                                                    <p>is simply dummy text of the printing and typesetting industry. Lorem
                                                        Ipsum has been the industry's standard dummy.</p>
                                                </div>
                                            </a>
                                            <div class="pswp-caption-content">
                                                <h4>Portfolio Title</h4>
                                                <p>is simply dummy text of the printing and typesetting industry. Lorem
                                                    Ipsum has been the industry's standard dummy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="my-gallery pswp-gallery">
                                        <div class="pswp-gallery__item"><a
                                                href="{{ asset('assets/images/big-lightgallery/7.jpg') }}" data-pswp-width="1669"
                                                data-pswp-height="2500" target="_blank"><img
                                                    src="{{ asset('assets/images/lightgallery/7.jpg') }}" alt="Demo image 1">
                                                <div class="caption">
                                                    <h4>Portfolio Title</h4>
                                                    <p>is simply dummy text of the printing and typesetting industry. Lorem
                                                        Ipsum has been the industry's standard dummy.</p>
                                                </div>
                                            </a>
                                            <div class="pswp-caption-content">
                                                <h4>Portfolio Title</h4>
                                                <p>is simply dummy text of the printing and typesetting industry. Lorem
                                                    Ipsum has been the industry's standard dummy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="my-gallery pswp-gallery">
                                        <div class="pswp-gallery__item"><a
                                                href="{{ asset('assets/images/big-lightgallery/8.jpg') }}" data-pswp-width="1669"
                                                data-pswp-height="2500" target="_blank"><img
                                                    src="{{ asset('assets/images/lightgallery/8.jpg') }}" alt="Demo image 1">
                                                <div class="caption">
                                                    <h4>Portfolio Title</h4>
                                                    <p>is simply dummy text of the printing and typesetting industry. Lorem
                                                        Ipsum has been the industry's standard dummy.</p>
                                                </div>
                                            </a>
                                            <div class="pswp-caption-content">
                                                <h4>Portfolio Title</h4>
                                                <p>is simply dummy text of the printing and typesetting industry. Lorem
                                                    Ipsum has been the industry's standard dummy.</p>
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
    <script type="module" src="{{ asset('assets/js/vendors/photoswipe/dist/photoswipe.esm.min.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/vendors/photoswipe/dist/photoswipe-lightbox.esm.min.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/vendors/photoswipe-dynamic-caption-plugin/photoswipe-dynamic-caption-plugin.esm.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/photoswipe/photoswipe-caption.js') }}"></script>
@endsection
