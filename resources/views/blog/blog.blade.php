@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Blog Details</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Blog</li>
                        <li class="breadcrumb-item active">Blog Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 set-col-12 box-col-12">
                <div class="card">
                    <div class="blog-box blog-shadow"><img class="img-fluid" src="{{ asset('assets/images/blog/blog.jpg') }}"
                            alt="">
                        <div class="blog-details">
                            <p>25 July 2024</p>
                            <h4>Accusamus et iusto odio dignissimos ducimus qui blanditiis.</h4>
                            <ul class="blog-social">
                                <li><i class="icofont icofont-user"></i>Mark Jecno</li>
                                <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                                <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 set-col-12 box-col-12">
                <div class="card">
                    <div class="blog-box blog-list row">
                        <div class="col-sm-5"><img class="img-fluid sm-100-w" src="{{ asset('assets/images/blog/blog-2.jpg') }}"
                                alt=""></div>
                        <div class="col-sm-7">
                            <div class="blog-details">
                                <div class="blog-date"><span>02</span> January 2024</div>
                                <h6>Perspiciatis unde omnis iste natus</h6>
                                <div class="blog-bottom-content">
                                    <ul class="blog-social">
                                        <li>by: Admin</li>
                                        <li>0 Hits</li>
                                    </ul>
                                    <hr>
                                    <p class="mt-0">inventore veritatis et quasi architecto beatae vitae dicta sunt
                                        explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="blog-box blog-list row">
                        <div class="col-sm-5"><img class="img-fluid sm-100-w" src="{{ asset('assets/images/blog/blog-3.jpg') }}"
                                alt=""></div>
                        <div class="col-sm-7">
                            <div class="blog-details">
                                <div class="blog-date"><span>03</span> January 2024</div>
                                <h6>Perspiciatis unde omnis iste natus</h6>
                                <div class="blog-bottom-content">
                                    <ul class="blog-social">
                                        <li>by: Admin</li>
                                        <li>02 Hits</li>
                                    </ul>
                                    <hr>
                                    <p class="mt-0">inventore veritatis et quasi architecto beatae vitae dicta sunt
                                        explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3 box-col-6">
                <div class="card">
                    <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog"
                            src="{{ asset('assets/images/blog/blog-5.jpg') }}" alt="">
                        <div class="blog-details-main">
                            <ul class="blog-social">
                                <li>9 April 2024</li>
                                <li>by: Admin</li>
                                <li>0 Hits</li>
                            </ul>
                            <hr>
                            <h6 class="blog-bottom-details">Perspiciatis unde omnis iste natus error sit.Dummy text</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3 box-col-6">
                <div class="card">
                    <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog"
                            src="{{ asset('assets/images/blog/blog-6.jpg') }}" alt="">
                        <div class="blog-details-main">
                            <ul class="blog-social">
                                <li>9 April 2024</li>
                                <li>by: Admin</li>
                                <li>0 Hits</li>
                            </ul>
                            <hr>
                            <h6 class="blog-bottom-details">Perspiciatis unde omnis iste natus error sit.Dummy text</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3 box-col-6">
                <div class="card">
                    <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog"
                            src="{{ asset('assets/images/blog/blog-5.jpg') }}" alt="">
                        <div class="blog-details-main">
                            <ul class="blog-social">
                                <li>9 April 2024</li>
                                <li>by: Admin</li>
                                <li>0 Hits</li>
                            </ul>
                            <hr>
                            <h6 class="blog-bottom-details">Perspiciatis unde omnis iste natus error sit.Dummy text</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3 box-col-6">
                <div class="card">
                    <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog"
                            src="{{ asset('assets/images/blog/blog-6.jpg') }}" alt="">
                        <div class="blog-details-main">
                            <ul class="blog-social">
                                <li>9 April 2024</li>
                                <li>by: Admin</li>
                                <li>0 Hits</li>
                            </ul>
                            <hr>
                            <h6 class="blog-bottom-details">Perspiciatis unde omnis iste natus error sit.Dummy text</h6>
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
