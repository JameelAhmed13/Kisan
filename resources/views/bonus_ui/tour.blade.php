@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/@sjmc11/tourguidejs/dist/css/tour.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Tour</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Tour</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid user-profile">
        <div class="row">
            <div class="col-xl-12">
                <!-- tour profile section-->
                <div class="card hovercard text-center">
                    <div class="cardheader"></div>
                    <div class="user-image">
                        <div class="avatar"><img alt="" src="{{ asset('assets/images/avatar/5.jpg') }}"
                                data-tg-tour="This is Edmin Profile 👋" data-tg-order="0"></div>
                        <div class="icon-wrapper"><i class="icofont icofont-pencil-alt-5"
                                data-tg-tour="Change Edmin profile image here" data-tg-order="1"></i></div>
                    </div>
                    <div class="info">
                        <div class="row g-3" data-tg-tour="This is User profile details" data-tg-order="2">
                            <div class="col-sm-6 col-xl-4 order-sm-1 order-xl-0">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="text-start tour-email">
                                            <h5 class="tour-mb-space f-w-500"><i class="fa fa-envelope"></i>   Email</h5>
                                            <span>William@jourrapide.com</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-start ttl-sm-mb-0 tour-email">
                                            <h5 class="tour-mb-space f-w-500"><i class="fa fa-calendar"></i>   BOD</h5>
                                            <span>02 January 1988</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-4 order-sm-0 order-xl-1">
                                <div class="user-designation tour-email">
                                    <div class="title"><a target="_blank" href="">William C. Jennings</a></div>
                                    <div class="desc mt-2"> Web Designer</div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4 order-sm-2 order-xl-2">
                                <div class="row g-3">
                                    <div class="col-md-6 mt-0 mt-sm-3">
                                        <div class="text-start ttl-xs-mt tour-email">
                                            <h5 class="tour-mb-space f-w-500"><i class="fa fa-phone"></i>   Contact Us</h5>
                                            <span>US 310-273-0666</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-start ttl-sm-mb-0 tour-email">
                                            <h5 class="tour-mb-space f-w-500"><i
                                                    class="fa fa-location-arrow"></i>   Location</h5><span>4377 Libby Street
                                                Beverly Hills</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="social-media" data-tg-tour="This is your social details" data-tg-order="3">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="https://accounts.google.com/" target="_blank"><i
                                            class="fa-brands fa-google-plus-g"></i></a></li>
                                <li class="list-inline-item"><a href="https://twitter.com/" target="_blank"><i
                                            class="fa-brands fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fa-brands fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="https://rss.app/" target="_blank"><i
                                            class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <div class="follow">
                            <div class="row">
                                <div class="col-6 border-end">
                                    <div class="follow-num counter">25.8K</div><span>Follower</span>
                                </div>
                                <div class="col-6">
                                    <div class="follow-num counter">65.2M</div><span>Following</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- tour second section-->
                <div class="card">
                    <div class="card-body profile-img-style" data-tg-tour="This is your first post" data-tg-order="4">
                        <div class="row g-2">
                            <div class="col-sm-8">
                                <div class="d-flex"><img class="img-thumbnail rounded-circle me-3"
                                        src="{{ asset('assets/images/avatar/5.jpg') }}" alt="Generic placeholder image">
                                    <div class="flex-grow-1 align-self-center">
                                        <h5 class="mt-0 user-name">William C. Jennings</h5>
                                        <div class="tour-wrapper"><span>25 Jan</span><i
                                                class="tour-dot font-light fa fa-circle"></i><span class="font-danger">6
                                                min read</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 align-self-center mt-0 text-end">
                                <div class="social-media social-tour">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="https://www.facebook.com/"
                                                target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="https://accounts.google.com/"
                                                target="_blank"><i class="fa-brands fa-google-plus-g"></i></a></li>
                                        <li class="list-inline-item"><a href="https://twitter.com/" target="_blank"><i
                                                    class="fa-brands fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="https://www.instagram.com/"
                                                target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="https://rss.app/" target="_blank"><i
                                                    class="fa fa-rss"></i></a></li>
                                    </ul>
                                    <div class="float-sm-end"><small>3 min ago</small></div>
                                </div>
                            </div>
                            <hr>
                            <h5 class="pb-2">Wonderful piece that successfully conveys the magnificence of the mountains
                                and the natural world.</h5>
                            <p class="block-ellipsis">English Romantic painter, printer, and watercolourist <em
                                    class="font-danger">William C. Jennings</em> Is most renowned for his expressive
                                colorization, creative landscapes, and stormy, sometimes violent maritime works. However,
                                this moody image of the Devil's Bridge in Switzerland, close to the Gotthard Pass, feels
                                incredibly authentic and accurately depicts historical occasions when Russian general
                                Suvorov crossed the Alps and fought not only far larger enemy troops!</p>
                            <div class="mt-3" id="aniimated-thumbnails"><a href="javascript:void(0)"><img
                                        class="img-fluid rounded"
                                        src="{{ asset('assets/images/other-images/profile-style-img3.png') }}" alt="gallery"></a>
                                <p class="block-ellipsis pt-3">The curved canvas is enclosed in a complex frame that the
                                    artist created but that his buddy Gottlieb Christian Kuhn carved. A variety of Christian
                                    symbols are depicted on the frame, including the faces of five infant angels, a star,
                                    grapes, vines, corn, and God's eye.Many of the Romantic elements and subjects that he
                                    would explore throughout his career are present in this work, one of his earliest, most
                                    notable of which is the landscape's significant significance. In spite of the
                                    altarpiece's inclusion of a crucifix, the emphasis is<a class="font-danger"
                                        href="{{ route('admin.user_profile') }}" target="_blank"> Read More</a></p>
                            </div>
                            <div class="like-comment mt-4">
                                <ul class="list-inline">
                                    <li class="list-inline-item b-r-gray pe-3 me-3">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-heart"></i></a>  Like</label>
                                    </li>
                                    <li class="list-inline-item b-r-gray pe-3 me-3">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-comment"></i></a>  Comment</label>
                                    </li>
                                    <li class="list-inline-item">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-paper-plane"></i></a>  Share</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- tour third section-->
                <div class="card">
                    <div class="card-body profile-img-style">
                        <div class="row g-2">
                            <div class="col-sm-8">
                                <div class="d-flex"><img class="img-thumbnail rounded-circle me-3"
                                        src="{{ asset('assets/images/avatar/5.jpg') }}" alt="Generic placeholder image">
                                    <div class="flex-grow-1 align-self-center">
                                        <h5 class="mt-0 user-name">William C. Jennings</h5>
                                        <div class="tour-wrapper"><span>25 Jan</span><i
                                                class="tour-dot font-light fa fa-circle"></i><span class="font-danger">1
                                                min read</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 align-self-center mt-0 text-end">
                                <div class="social-media social-tour" data-tg-tour="This is your social details"
                                    data-tg-order="5">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="https://www.facebook.com/"
                                                target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="https://accounts.google.com/"
                                                target="_blank"><i class="fa-brands fa-google-plus-g"></i></a></li>
                                        <li class="list-inline-item"><a href="https://twitter.com/" target="_blank"><i
                                                    class="fa-brands fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="https://www.instagram.com/"
                                                target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="https://rss.app/" target="_blank"><i
                                                    class="fa fa-rss"></i></a></li>
                                    </ul>
                                    <div class="float-sm-end"><small>10 Hours ago</small></div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <p class="block-ellipsis">Nature, in the broadest sense, is the physical world or universe.
                            "Nature" can refer to the phenomena of the physical world, and also to life in general. The
                            study of nature is a large, if not the only, part of science. Although humans are part of
                            nature, human activity is often understood as a separate category from other natural phenomena.
                        </p>
                        <div class="row g-3 mt-3 pictures" id="aniimated-thumbnails-2"><a class="col-sm-6"
                                href="javascript:void(0)">
                                <div class="tour-blog"><img class="img-fluid rounded"
                                        src="{{ asset('assets/images/other-images/mountain.jpg') }}" alt="mountain"></div>
                            </a><a class="col-sm-6" href="javascript:void(0)">
                                <div class="tour-blog"><img class="img-fluid rounded"
                                        src="{{ asset('assets/images/other-images/sea.jpg') }}" alt="sea"></div>
                            </a></div>
                        <div class="like-comment mt-4">
                            <ul class="list-inline">
                                <li class="list-inline-item b-r-gray pe-3 me-3">
                                    <label class="m-0"><a href="#"> <i
                                                class="fa fa-heart"></i></a>  Like</label>
                                </li>
                                <li class="list-inline-item b-r-gray pe-3 me-3">
                                    <label class="m-0"><a href="#"><i
                                                class="fa fa-comment"></i></a>  Comment</label>
                                </li>
                                <li class="list-inline-item">
                                    <label class="m-0"><a href="#"><i
                                                class="fa fa-paper-plane"></i></a>  Share</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- tour forth section-->
                <div class="card">
                    <div class="card-body profile-img-style">
                        <div class="row g-2">
                            <div class="col-sm-8">
                                <div class="d-flex"><img class="img-thumbnail rounded-circle me-3"
                                        src="{{ asset('assets/images/avatar/5.jpg') }}" alt="Generic placeholder image">
                                    <div class="flex-grow-1 align-self-center">
                                        <h5 class="mt-0 user-name">William C. Jennings</h5>
                                        <div class="tour-wrapper"><span>09 Dec</span><i
                                                class="tour-dot font-light fa fa-circle"></i><span class="font-danger">2
                                                min read</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 align-self-center mt-0 text-end">
                                <div class="social-media social-tour">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="https://www.facebook.com/"
                                                target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="https://accounts.google.com/"
                                                target="_blank"><i class="fa-brands fa-google-plus-g"></i></a></li>
                                        <li class="list-inline-item"><a href="https://twitter.com/" target="_blank"><i
                                                    class="fa-brands fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="https://www.instagram.com/"
                                                target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="https://rss.app/" target="_blank"><i
                                                    class="fa fa-rss"></i></a></li>
                                    </ul>
                                    <div class="float-sm-end"><small>9 Month ago</small></div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <p class="block-ellipsis">Nature has a role in our lives. We are a part of everything since we
                            sprang from a seed and the ground, but we are quickly losing the perception that we are animals
                            much like the rest. Is it possible to feel something when you gaze at, appreciate, and hear a
                            tree? Can you pay attention to the tiny weed, the creeper climbing the wall, the light on the
                            leaves, and the numerous shadows? All of this must be understood, and one must have a feeling of
                            connectedness with the natural world around them. Despite living in a town, there are still a
                            few trees here and there. The next garden's bloom could not be well-kept.</p>
                        <div class="like-comment mt-4">
                            <ul class="list-inline">
                                <li class="list-inline-item b-r-gray pe-3 me-3">
                                    <label class="m-0"><a href="#"><i class="fa fa-heart"></i></a>  Like</label>
                                </li>
                                <li class="list-inline-item b-r-gray pe-3 me-3">
                                    <label class="m-0"><a href="#"><i
                                                class="fa fa-comment"></i></a>  Comment</label>
                                </li>
                                <li class="list-inline-item">
                                    <label class="m-0"><a href="#"><i
                                                class="fa fa-paper-plane"></i></a>  Share</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- tour last section-->
                <div class="card">
                    <div class="card-body profile-img-style">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="d-flex"><img class="img-thumbnail rounded-circle me-3"
                                        src="{{ asset('assets/images/avatar/5.jpg') }}" alt="Generic placeholder image">
                                    <div class="flex-grow-1 align-self-center">
                                        <h5 class="mt-0 user-name">William C. Jennings</h5>
                                        <div class="tour-wrapper"><span>02 Feb</span><i
                                                class="tour-dot font-light fa fa-circle"></i><span class="font-danger">5
                                                min read</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 align-self-center mt-0 text-end">
                                <div class="social-media social-tour">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="https://www.facebook.com/"
                                                target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="https://accounts.google.com/"
                                                target="_blank"><i class="fa-brands fa-google-plus-g"></i></a></li>
                                        <li class="list-inline-item"><a href="https://twitter.com/" target="_blank"><i
                                                    class="fa-brands fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="https://www.instagram.com/"
                                                target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="https://rss.app/" target="_blank"><i
                                                    class="fa fa-rss"></i></a></li>
                                    </ul>
                                    <div class="float-sm-end"><small>2 Yours ago</small></div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12 col-xl-4">
                                    <div id="aniimated-thumbnails-3"><a href="javascript:void(0)"><img
                                                class="img-fluid rounded"
                                                src="{{ asset('assets/images/other-images/sidebar-bg.jpg') }}" alt="nature"
                                                data-tg-tour="This is your last post image 🎉" data-tg-order="6"></a>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <p class="block-ellipsis pt-xl-0 pt-3">The wind gives life to the planet. This
                                        unobservable, enigmatic energy has the power to revitalize a setting. Its absence
                                        can cause the world to become serenely motionless. Its strength is scarcely visible
                                        on bare mountain summits, but it becomes obvious in woods and on the water. Winds
                                        may be violent and even harmful. When we investigate it carefully Nature is not a
                                        destination. Home is here. Garry Snyder In a very real sense, our home, or natural
                                        environment, is made up of mountains and valleys, the seas and the sky, the sun and
                                        the soil, the trees and the flowers. Growing up in the contemporary, civilized
                                        environment, it's simple to start believing</p>
                                    <div class="like-comment mt-4">
                                        <ul class="list-inline">
                                            <li class="list-inline-item b-r-gray pe-3">
                                                <label class="m-0"><a href="#"><i
                                                            class="fa fa-heart"></i></a>  Like</label>
                                            </li>
                                            <li class="list-inline-item b-r-gray pe-3">
                                                <label class="m-0"><a href="#"><i
                                                            class="fa fa-comment"></i></a>  Comment</label>
                                            </li>
                                            <li class="list-inline-item">
                                                <label class="m-0"><a href="#"><i
                                                            class="fa fa-paper-plane"></i></a>  Share</label>
                                            </li>
                                        </ul>
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
    <script src="{{ asset('assets/js/vendors/@sjmc11/tourguidejs/dist/tour.js') }}"></script>
    <script src="{{ asset('assets/js/tour-custom.js') }}"></script>
@endsection
