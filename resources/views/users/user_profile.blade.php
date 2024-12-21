@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>User Profile</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid user-profile">
        <div class="row">
            <div class="col-sm-12">
                <div class="card hovercard text-center">
                    <div class="cardheader"><img alt="" src="{{ asset('assets/images/avatar/cover.jpg') }}"></div>
                    <div class="user-image">
                        <div class="avatar"><img alt="" src="{{ asset('assets/images/avatar/profile2.jpg') }}"></div>
                        <div class="icon-wrapper"><i class="icofont icofont-pencil-alt-5"></i></div>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                                        <div class="ttl-info text-start">
                                            <h6><i class="fa-solid fa-envelope"></i>   Email</h6>
                                            <span>{{$user->email}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ttl-info text-start">
                                            <h6><i class="fa-solid fa-calendar-days"></i>   BOD</h6><span>02 January
                                                2000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                                <div class="user-designation">
                                    <div class="title"><a target="_blank" href="">{{$user->name}}</a></div>
                                    <div class="desc">{{$user->roles[0]->roleName}}</div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ttl-info text-start">
                                            <h6><i class="fa-solid fa-phone"></i>   Contact Us</h6><span>Pakistan +92
                                                336-898-6688</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ttl-info text-start">
                                            <h6><i class="fa fa-location-arrow"></i>   Location</h6><span>Airport Road Ultra Soft</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="social-media">
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
                                <div class="col-6 text-md-end border-right">
                                    <div class="follow-num counter" id="count4">250</div><span>Follower</span>
                                </div>
                                <div class="col-6 text-md-start">
                                    <div class="follow-num counter" id="count5">3000</div><span>Following</span>
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
    <script src="{{ asset('assets/js/counter/counter-user.js') }}"></script>
@endsection
