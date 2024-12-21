@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>User Cards</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active">User Cards</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid user-profile">
        <div class="row">
            <!-- user-->
            <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                    <div class="card-body">
                        <div class="social-img-wrap">
                            <div class="social-img"><img src="{{ asset('assets/images/avatar/1.jpg') }}" alt="profile">
                            </div>
                            <div class="edit-icon">
                                <svg class="feather stroke-primary">
                                    <use
                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}">
                                    </use>
                                </svg>
                            </div>
                        </div>
                        <div class="social-details">
                            <h4 class="mb-1"><a class="f-20" href="{{ route('admin.social_app') }}">Brooklyn Simmons</a></h4><span
                                class="font-light">@brookly.simmons</span>
                            <ul class="card-social">
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f font-primary"></i></a></li>
                                <li><a href="https://accounts.google.com/" target="_blank"><i
                                            class="fa-brands fa-google-plus-g font-primary"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i
                                            class="fa-brands fa-twitter font-primary"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fa-brands fa-instagram font-primary"></i></a></li>
                                <li><a href="https://rss.app/" target="_blank"><i class="fa fa-rss font-primary"></i></a>
                                </li>
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
                                    <use
                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}">
                                    </use>
                                </svg>
                            </div>
                        </div>
                        <div class="social-details">
                            <h4 class="mb-1"><a class="f-20" href="{{ route('admin.social_app') }}">Mark Jecno</a></h4><span
                                class="font-light">@mark.jeco</span>
                            <ul class="card-social">
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f font-primary"></i></a></li>
                                <li><a href="https://accounts.google.com/" target="_blank"><i
                                            class="fa-brands fa-google-plus-g font-primary"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i
                                            class="fa-brands fa-twitter font-primary"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fa-brands fa-instagram font-primary"></i></a></li>
                                <li><a href="https://rss.app/" target="_blank"><i class="fa fa-rss font-primary"></i></a>
                                </li>
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
                                    <use
                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}">
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
                                <li><a href="https://rss.app/" target="_blank"><i class="fa fa-rss font-primary"></i></a>
                                </li>
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
                                    <use
                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}">
                                    </use>
                                </svg>
                            </div>
                        </div>
                        <div class="social-details">
                            <h4 class="mb-1"><a class="f-20" href="{{ route('admin.social_app') }}">Johan Deo</a></h4><span
                                class="font-light">@deo.johan</span>
                            <ul class="card-social">
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f font-primary"></i></a></li>
                                <li><a href="https://accounts.google.com/" target="_blank"><i
                                            class="fa-brands fa-google-plus-g font-primary"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i
                                            class="fa-brands fa-twitter font-primary"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fa-brands fa-instagram font-primary"></i></a></li>
                                <li><a href="https://rss.app/" target="_blank"><i class="fa fa-rss font-primary"></i></a>
                                </li>
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
                                    <use
                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}">
                                    </use>
                                </svg>
                            </div>
                        </div>
                        <div class="social-details">
                            <h4 class="mb-1"><a class="f-20" href="{{ route('admin.social_app') }}">Douglas Reichel</a></h4><span
                                class="font-light">@reichel.douglas</span>
                            <ul class="card-social">
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f font-primary"></i></a></li>
                                <li><a href="https://accounts.google.com/" target="_blank"><i
                                            class="fa-brands fa-google-plus-g font-primary"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i
                                            class="fa-brands fa-twitter font-primary"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fa-brands fa-instagram font-primary"></i></a></li>
                                <li><a href="https://rss.app/" target="_blank"><i class="fa fa-rss font-primary"></i></a>
                                </li>
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
                                    <use
                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}">
                                    </use>
                                </svg>
                            </div>
                        </div>
                        <div class="social-details">
                            <h4 class="mb-1"><a class="f-20" href="{{ route('admin.social_app') }}">Lisa lillian</a></h4><span
                                class="font-light">@lisa.lillian</span>
                            <ul class="card-social">
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f font-primary"></i></a></li>
                                <li><a href="https://accounts.google.com/" target="_blank"><i
                                            class="fa-brands fa-google-plus-g font-primary"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i
                                            class="fa-brands fa-twitter font-primary"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fa-brands fa-instagram font-primary"></i></a></li>
                                <li><a href="https://rss.app/" target="_blank"><i class="fa fa-rss font-primary"></i></a>
                                </li>
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
                                    <use
                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}">
                                    </use>
                                </svg>
                            </div>
                        </div>
                        <div class="social-details">
                            <h4 class="mb-1"><a class="f-20" href="{{ route('admin.social_app') }}">Olivia rose</a></h4><span
                                class="font-light">@rose.olivia</span>
                            <ul class="card-social">
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f font-primary"></i></a></li>
                                <li><a href="https://accounts.google.com/" target="_blank"><i
                                            class="fa-brands fa-google-plus-g font-primary"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i
                                            class="fa-brands fa-twitter font-primary"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fa-brands fa-instagram font-primary"></i></a></li>
                                <li><a href="https://rss.app/" target="_blank"><i class="fa fa-rss font-primary"></i></a>
                                </li>
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
                                    <use
                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}">
                                    </use>
                                </svg>
                            </div>
                        </div>
                        <div class="social-details">
                            <h4 class="mb-1"><a class="f-20" href="{{ route('admin.social_app') }}">Sarah Karen</a></h4><span
                                class="font-light">@karen.sarah</span>
                            <ul class="card-social">
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f font-primary"></i></a></li>
                                <li><a href="https://accounts.google.com/" target="_blank"><i
                                            class="fa-brands fa-google-plus-g font-primary"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i
                                            class="fa-brands fa-twitter font-primary"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fa-brands fa-instagram font-primary"></i></a></li>
                                <li><a href="https://rss.app/" target="_blank"><i class="fa fa-rss font-primary"></i></a>
                                </li>
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
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
@endsection
