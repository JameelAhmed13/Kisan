@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe/dist/photoswipe.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/css/vendors/photoswipe-dynamic-caption-plugin/photoswipe-dynamic-caption-plugin.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Search Website</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Search Pages</li>
                        <li class="breadcrumb-item active">Search Website</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid search-page">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <form class="theme-form">
                            <div class="input-group m-0 flex-nowrap">
                                <input class="form-control-plaintext" type="search" placeholder="Pixelstrap .."><span
                                    class="btn bg-primary input-group-text">Search</span>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <ul class="nav nav-tabs search-list" id="top-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="all-link" data-bs-toggle="tab"
                                        href="#all-links" role="tab" aria-selected="true"><i
                                            class="icon-target"></i>All</a></li>
                                <li class="nav-item"><a class="nav-link" id="image-link" data-bs-toggle="tab"
                                        href="#image-links" role="tab" aria-selected="false"><i
                                            class="icon-image"></i>Images</a></li>
                                <li class="nav-item"><a class="nav-link" id="video-link" data-bs-toggle="tab"
                                        href="#video-links" role="tab" aria-selected="false"><i
                                            class="icon-video-clapper"></i>Videos</a></li>
                                <li class="nav-item"><a class="nav-link" id="audios-link" data-bs-toggle="tab"
                                        href="#audios-links" role="tab" aria-selected="false"><i
                                            class="icon-map-alt"></i>Audios</a></li>
                                <li class="nav-item bg-light-success"><a class="nav-link font-success" id="setting-link"
                                        data-bs-toggle="tab" href="#setting-links" role="tab"
                                        aria-selected="false">Settings</a></li>
                                <li class="nav-item bg-light-secondary"><a class="nav-link font-secondary" id="tools-links"
                                        data-bs-toggle="tab" href="#tools-links" role="tab"
                                        aria-selected="false">Tools</a></li>
                            </ul>
                        </div>
                        <div class="tab-content" id="top-tabContent">
                            <div class="search-links tab-pane fade show active" id="all-links" role="tabpanel"
                                aria-labelledby="all-link">
                                <div class="row">
                                    <div class="col-xxl-8 col-xl-6 box-col-12">
                                        <h6 class="mb-2">Search result for "Pixelstrap"</h6>
                                        <div class="info-block"><a
                                                href="">https://themeforest.net/user/pixelstrap/portfolio/</a>
                                            <h6>PixelStrap - Portfolio | ThemeForest</h6>
                                            <p>2020's Best Selling Creative WP Themes. The #1 Source of Premium WP Themes!
                                                ThemeForest 45,000+ WP Themes & Website Templates From $2. Check it Out!
                                            </p>
                                            <div class="star-ratings">
                                                <ul class="search-info">
                                                    <li>3 stars</li>
                                                    <li>590 votes</li>
                                                    <li>Theme</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="info-block"><a href="">PixelStrap - Portfolio |
                                                ThemeForestthemeforest.net › user › </a>
                                            <h6>PixelStrap - Portfolio | ThemeForest</h6>
                                            <p>The #1 marketplace for premium website templates, including themes for
                                                WordPress, Magento, Drupal, Joomla, and more. Create a website, fast.</p>
                                            <div class="star-ratings">
                                                <ul class="search-info">
                                                    <li>3 stars</li>
                                                    <li>590 votes</li>
                                                    <li>Theme</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="info-block"><a
                                                href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                            <h6>Morbi feugiat mauris vel semper fringilla.</h6>
                                            <p>Edmin introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT
                                                Coaching, SAT Coaching in Surat.</p>
                                            <div class="star-ratings">
                                                <ul class="search-info">
                                                    <li><i class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rate-blank"></i><i
                                                            class="icofont icofont-ui-rate-blank"></i></li>
                                                    <li>3 stars</li>
                                                    <li>590 votes</li>
                                                    <li>Theme</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="info-block"><a
                                                href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                            <h6>Morbi feugiat mauris vel semper fringilla.</h6>
                                            <p>Edmin introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT
                                                Coaching, SAT Coaching in Surat.</p>
                                            <div class="star-ratings">
                                                <ul class="search-info">
                                                    <li><i class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rate-blank"></i><i
                                                            class="icofont icofont-ui-rate-blank"></i></li>
                                                    <li>3 stars</li>
                                                    <li>590 votes</li>
                                                    <li>Theme</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-6 box-col-12 mt-4">
                                        <div class="card o-hidden">
                                            <div class="blog-box blog-shadow"><img class="img-fluid"
                                                    src="{{ asset('assets/images/blog/blog.jpg') }}" alt="">
                                                <div class="blog-details">
                                                    <p>25 July 2024</p>
                                                    <h4>Accusamus et iusto odio dignissimos ducimus qui blanditiis.</h4>
                                                    <ul class="blog-social">
                                                        <li><i class="icofont icofont-user"></i>Mark Jecno</li>
                                                        <li><i class="icofont icofont-thumbs-up"></i>2 Hits</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info-block"><a
                                                href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                            <h6>Pixelstrap Website Templates from ThemeForest </h6>
                                            <p>Get 59 pixelstrap website templates on ThemeForest. Buy pixelstrap website
                                                templates from $7. All created by our Global Community of independent Web
                                                ...</p>
                                            <div class="star-ratings">
                                                <ul class="search-info">
                                                    <li><i class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rate-blank"></i><i
                                                            class="icofont icofont-ui-rate-blank"></i></li>
                                                    <li>3 stars</li>
                                                    <li>590 votes</li>
                                                    <li>Theme</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="info-block"><a
                                                href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                            <h6>Morbi feugiat mauris vel semper fringilla.</h6>
                                            <p>Edmin introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT
                                                Coaching, SAT Coaching in Surat.</p>
                                            <div class="star-ratings">
                                                <ul class="search-info">
                                                    <li><i class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rate-blank"></i><i
                                                            class="icofont icofont-ui-rate-blank"></i></li>
                                                    <li>3 stars</li>
                                                    <li>590 votes</li>
                                                    <li>Theme</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 m-t-30">
                                        <nav aria-label="...">
                                            <ul
                                                class="pagination pagination-primary pagination-border-primary justify-content-end">
                                                <li class="page-item disabled"><a class="page-link"
                                                        href="javascript:void(0)" tabindex="-1">Previous</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">1</a></li>
                                                <li class="page-item active"><a class="page-link"
                                                        href="javascript:void(0)">2<span
                                                            class="sr-only">(current)</span></a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">3</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="image-links" role="tabpanel" aria-labelledby="image-link">
                                <div>
                                    <h6 class="mb-2">About 12,120 results (0.50 seconds)</h6>
                                    <div class="my-gallery row gallery-with-description gap-0" id="aniimated-thumbnials"
                                        itemscope="">
                                        <div class="col-xl-3 col-sm-6">
                                            <div class="my-gallery pswp-gallery">
                                                <div class="pswp-gallery__item"><a
                                                        href="{{ asset('assets/images/big-lightgallery/1.jpg') }}"
                                                        data-pswp-width="1669" data-pswp-height="2500"
                                                        target="_blank"><img src="{{ asset('assets/images/lightgallery/1.jpg') }}"
                                                            alt="Demo image 1">
                                                        <div class="caption">
                                                            <h4>Portfolio Title</h4>
                                                            <p>is simply dummy text of the printing and typesetting
                                                                industry. Lorem Ipsum has been the industry's standard
                                                                dummy.</p>
                                                        </div>
                                                    </a>
                                                    <div class="pswp-caption-content">
                                                        <h4>Portfolio Title</h4>
                                                        <p>is simply dummy text of the printing and typesetting industry.
                                                            Lorem Ipsum has been the industry's standard dummy.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6">
                                            <div class="my-gallery pswp-gallery">
                                                <div class="pswp-gallery__item"><a
                                                        href="{{ asset('assets/images/big-lightgallery/2.jpg') }}"
                                                        data-pswp-width="1669" data-pswp-height="2500"
                                                        target="_blank"><img src="{{ asset('assets/images/lightgallery/2.jpg') }}"
                                                            alt="Demo image 1">
                                                        <div class="caption">
                                                            <h4>Portfolio Title</h4>
                                                            <p>is simply dummy text of the printing and typesetting
                                                                industry. Lorem Ipsum has been the industry's standard
                                                                dummy.</p>
                                                        </div>
                                                    </a>
                                                    <div class="pswp-caption-content">
                                                        <h4>Portfolio Title</h4>
                                                        <p>is simply dummy text of the printing and typesetting industry.
                                                            Lorem Ipsum has been the industry's standard dummy.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6">
                                            <div class="my-gallery pswp-gallery">
                                                <div class="pswp-gallery__item"><a
                                                        href="{{ asset('assets/images/big-lightgallery/3.jpg') }}"
                                                        data-pswp-width="1669" data-pswp-height="2500"
                                                        target="_blank"><img src="{{ asset('assets/images/lightgallery/3.jpg') }}"
                                                            alt="Demo image 1">
                                                        <div class="caption">
                                                            <h4>Portfolio Title</h4>
                                                            <p>is simply dummy text of the printing and typesetting
                                                                industry. Lorem Ipsum has been the industry's standard
                                                                dummy.</p>
                                                        </div>
                                                    </a>
                                                    <div class="pswp-caption-content">
                                                        <h4>Portfolio Title</h4>
                                                        <p>is simply dummy text of the printing and typesetting industry.
                                                            Lorem Ipsum has been the industry's standard dummy.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6">
                                            <div class="my-gallery pswp-gallery">
                                                <div class="pswp-gallery__item"><a
                                                        href="{{ asset('assets/images/big-lightgallery/4.jpg') }}"
                                                        data-pswp-width="1669" data-pswp-height="2500"
                                                        target="_blank"><img src="{{ asset('assets/images/lightgallery/4.jpg') }}"
                                                            alt="Demo image 1">
                                                        <div class="caption">
                                                            <h4>Portfolio Title</h4>
                                                            <p>is simply dummy text of the printing and typesetting
                                                                industry. Lorem Ipsum has been the industry's standard
                                                                dummy.</p>
                                                        </div>
                                                    </a>
                                                    <div class="pswp-caption-content">
                                                        <h4>Portfolio Title</h4>
                                                        <p>is simply dummy text of the printing and typesetting industry.
                                                            Lorem Ipsum has been the industry's standard dummy.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6">
                                            <div class="my-gallery pswp-gallery">
                                                <div class="pswp-gallery__item"><a
                                                        href="{{ asset('assets/images/big-lightgallery/5.jpg') }}"
                                                        data-pswp-width="1669" data-pswp-height="2500"
                                                        target="_blank"><img src="{{ asset('assets/images/lightgallery/5.jpg') }}"
                                                            alt="Demo image 1">
                                                        <div class="caption">
                                                            <h4>Portfolio Title</h4>
                                                            <p>is simply dummy text of the printing and typesetting
                                                                industry. Lorem Ipsum has been the industry's standard
                                                                dummy.</p>
                                                        </div>
                                                    </a>
                                                    <div class="pswp-caption-content">
                                                        <h4>Portfolio Title</h4>
                                                        <p>is simply dummy text of the printing and typesetting industry.
                                                            Lorem Ipsum has been the industry's standard dummy.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6">
                                            <div class="my-gallery pswp-gallery">
                                                <div class="pswp-gallery__item"><a
                                                        href="{{ asset('assets/images/big-lightgallery/6.jpg') }}"
                                                        data-pswp-width="1669" data-pswp-height="2500"
                                                        target="_blank"><img src="{{ asset('assets/images/lightgallery/6.jpg') }}"
                                                            alt="Demo image 1">
                                                        <div class="caption">
                                                            <h4>Portfolio Title</h4>
                                                            <p>is simply dummy text of the printing and typesetting
                                                                industry. Lorem Ipsum has been the industry's standard
                                                                dummy.</p>
                                                        </div>
                                                    </a>
                                                    <div class="pswp-caption-content">
                                                        <h4>Portfolio Title</h4>
                                                        <p>is simply dummy text of the printing and typesetting industry.
                                                            Lorem Ipsum has been the industry's standard dummy.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6">
                                            <div class="my-gallery pswp-gallery">
                                                <div class="pswp-gallery__item"><a
                                                        href="{{ asset('assets/images/big-lightgallery/7.jpg') }}"
                                                        data-pswp-width="1669" data-pswp-height="2500"
                                                        target="_blank"><img src="{{ asset('assets/images/lightgallery/7.jpg') }}"
                                                            alt="Demo image 1">
                                                        <div class="caption">
                                                            <h4>Portfolio Title</h4>
                                                            <p>is simply dummy text of the printing and typesetting
                                                                industry. Lorem Ipsum has been the industry's standard
                                                                dummy.</p>
                                                        </div>
                                                    </a>
                                                    <div class="pswp-caption-content">
                                                        <h4>Portfolio Title</h4>
                                                        <p>is simply dummy text of the printing and typesetting industry.
                                                            Lorem Ipsum has been the industry's standard dummy.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6">
                                            <div class="my-gallery pswp-gallery">
                                                <div class="pswp-gallery__item"><a
                                                        href="{{ asset('assets/images/big-lightgallery/8.jpg') }}"
                                                        data-pswp-width="1669" data-pswp-height="2500"
                                                        target="_blank"><img src="{{ asset('assets/images/lightgallery/8.jpg') }}"
                                                            alt="Demo image 1">
                                                        <div class="caption">
                                                            <h4>Portfolio Title</h4>
                                                            <p>is simply dummy text of the printing and typesetting
                                                                industry. Lorem Ipsum has been the industry's standard
                                                                dummy.</p>
                                                        </div>
                                                    </a>
                                                    <div class="pswp-caption-content">
                                                        <h4>Portfolio Title</h4>
                                                        <p>is simply dummy text of the printing and typesetting industry.
                                                            Lorem Ipsum has been the industry's standard dummy.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-t-30">
                                    <nav aria-label="...">
                                        <ul class="pagination pagination-primary pagination-border-primary">
                                            <li class="page-item disabled"><a class="page-link" href="#"
                                                    tabindex="-1">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2 <span
                                                        class="sr-only">(current)</span></a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="video-links" role="tabpanel" aria-labelledby="video-link">
                                <div class="row">
                                    <div class="col-xxl-6 box-col-12">
                                        <h4 class="my-3">About 6,000 results (0.60 seconds)</h4>
                                        <div class="d-flex info-block">
                                            <iframe class="me-3" width="200" height="100"
                                                src="https://www.youtube.com/embed/CJnfAXlBRTE"></iframe>
                                            <div class="flex-grow-1"><a
                                                    href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                                <h6>Edmin introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT
                                                    Coaching, SAT Coaching in Surat.</h6>
                                                <div class="star-ratings">
                                                    <ul class="search-info">
                                                        <li>3 stars</li>
                                                        <li>590 votes</li>
                                                        <li>Theme</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex info-block">
                                            <iframe class="me-3" width="200" height="100"
                                                src="https://www.youtube.com/embed/wpmHZspl4EM"></iframe>
                                            <div class="flex-grow-1"><a
                                                    href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                                <h6>Edmin introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT
                                                    Coaching, SAT Coaching in Surat.</h6>
                                                <div class="star-ratings">
                                                    <ul class="search-info">
                                                        <li>3 stars</li>
                                                        <li>590 votes</li>
                                                        <li>Theme</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex info-block">
                                            <iframe class="me-3" width="200" height="100"
                                                src="https://www.youtube.com/embed/-L4gEk7cOfk"></iframe>
                                            <div class="flex-grow-1"><a
                                                    href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                                <h6>Edmin introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT
                                                    Coaching, SAT Coaching in Surat.</h6>
                                                <div class="star-ratings">
                                                    <ul class="search-info">
                                                        <li>3 stars</li>
                                                        <li>590 votes</li>
                                                        <li>Theme</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 box-col-12">
                                        <h4 class="my-3">About 6,000 results (0.60 seconds)</h4>
                                        <div class="d-flex info-block">
                                            <iframe class="me-3" width="200" height="100"
                                                src="https://www.youtube.com/embed/CJnfAXlBRTE"></iframe>
                                            <div class="flex-grow-1"><a
                                                    href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                                <h6>Edmin introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT
                                                    Coaching, SAT Coaching in Surat.</h6>
                                                <div class="star-ratings">
                                                    <ul class="search-info">
                                                        <li>3 stars</li>
                                                        <li>590 votes</li>
                                                        <li>Theme</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex info-block">
                                            <iframe class="me-3" width="200" height="100"
                                                src="https://www.youtube.com/embed/-L4gEk7cOfk"></iframe>
                                            <div class="flex-grow-1"><a
                                                    href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                                <h6>Edmin introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT
                                                    Coaching, SAT Coaching in Surat.</h6>
                                                <div class="star-ratings">
                                                    <ul class="search-info">
                                                        <li>3 stars</li>
                                                        <li>590 votes</li>
                                                        <li>Theme</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex info-block">
                                            <iframe class="me-3" width="200" height="100"
                                                src="https://www.youtube.com/embed/wpmHZspl4EM"></iframe>
                                            <div class="flex-grow-1"><a
                                                    href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                                <h6>Edmin introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT
                                                    Coaching, SAT Coaching in Surat.</h6>
                                                <div class="star-ratings">
                                                    <ul class="search-info">
                                                        <li>3 stars</li>
                                                        <li>590 votes</li>
                                                        <li>Theme</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 m-t-30">
                                        <div class="job-pagination">
                                            <nav aria-label="...">
                                                <ul class="pagination pagination-primary pagination-border-primary">
                                                    <li class="page-item disabled"><a class="page-link"
                                                            href="javascript:void(0)" tabindex="-1">Previous</a></li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="javascript:void(0)">1</a></li>
                                                    <li class="page-item active"><a class="page-link"
                                                            href="javascript:void(0)">2 </a></li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="javascript:void(0)">Next</a></li>
                                                </ul>
                                            </nav>
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
