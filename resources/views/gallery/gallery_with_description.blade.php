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
                <h3>Gallery Grid With Description</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Gallery</li>
                        <li class="breadcrumb-item active">Gallery Grid With Description</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <!-- gallery mixin-->
                <div class="card gallery-grid">
                    <div class="card-header pb-0">
                        <h4>Image Gallery With Description</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                    </div>
                    <div class="my-gallery card-body row gallery-with-description mb-0" itemscope="">
                        <div class="col-xl-3 col-sm-6">
                            <div class="my-gallery pswp-gallery">
                                <div class="pswp-gallery__item"><a
                                        href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1669"
                                        data-pswp-height="2500" target="_blank"><img
                                            src="{{ asset('assets/images/lightgallery/1.jpg') }}" alt="Demo image 1">
                                        <div class="caption">
                                            <h4>Portfolio Title</h4>
                                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                                has been the industry's standard dummy.</p>
                                        </div>
                                    </a>
                                    <div class="pswp-caption-content">
                                        <h4>Portfolio Title</h4>
                                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                            been the industry's standard dummy.</p>
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
                                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                                has been the industry's standard dummy.</p>
                                        </div>
                                    </a>
                                    <div class="pswp-caption-content">
                                        <h4>Portfolio Title</h4>
                                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                            been the industry's standard dummy.</p>
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
                                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                                has been the industry's standard dummy.</p>
                                        </div>
                                    </a>
                                    <div class="pswp-caption-content">
                                        <h4>Portfolio Title</h4>
                                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                            been the industry's standard dummy.</p>
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
                                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                                has been the industry's standard dummy.</p>
                                        </div>
                                    </a>
                                    <div class="pswp-caption-content">
                                        <h4>Portfolio Title</h4>
                                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                            been the industry's standard dummy.</p>
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
                                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                                has been the industry's standard dummy.</p>
                                        </div>
                                    </a>
                                    <div class="pswp-caption-content">
                                        <h4>Portfolio Title</h4>
                                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                            been the industry's standard dummy.</p>
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
                                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                                has been the industry's standard dummy.</p>
                                        </div>
                                    </a>
                                    <div class="pswp-caption-content">
                                        <h4>Portfolio Title</h4>
                                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                            been the industry's standard dummy.</p>
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
                                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                                has been the industry's standard dummy.</p>
                                        </div>
                                    </a>
                                    <div class="pswp-caption-content">
                                        <h4>Portfolio Title</h4>
                                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                            been the industry's standard dummy.</p>
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
                                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                                has been the industry's standard dummy.</p>
                                        </div>
                                    </a>
                                    <div class="pswp-caption-content">
                                        <h4>Portfolio Title</h4>
                                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                            been the industry's standard dummy.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="my-gallery pswp-gallery">
                                <div class="pswp-gallery__item"><a
                                        href="{{ asset('assets/images/big-lightgallery/9.jpg') }}" data-pswp-width="1669"
                                        data-pswp-height="2500" target="_blank"><img
                                            src="{{ asset('assets/images/lightgallery/9.jpg') }}" alt="Demo image 1">
                                        <div class="caption">
                                            <h4>Portfolio Title</h4>
                                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                                has been the industry's standard dummy.</p>
                                        </div>
                                    </a>
                                    <div class="pswp-caption-content">
                                        <h4>Portfolio Title</h4>
                                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                            been the industry's standard dummy.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="my-gallery pswp-gallery">
                                <div class="pswp-gallery__item"><a
                                        href="{{ asset('assets/images/big-lightgallery/10.jpg') }}"
                                        data-pswp-width="1669" data-pswp-height="2500" target="_blank"><img
                                            src="{{ asset('assets/images/lightgallery/10.jpg') }}" alt="Demo image 1">
                                        <div class="caption">
                                            <h4>Portfolio Title</h4>
                                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                                has been the industry's standard dummy.</p>
                                        </div>
                                    </a>
                                    <div class="pswp-caption-content">
                                        <h4>Portfolio Title</h4>
                                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                            been the industry's standard dummy.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="my-gallery pswp-gallery">
                                <div class="pswp-gallery__item"><a
                                        href="{{ asset('assets/images/big-lightgallery/11.jpg') }}"
                                        data-pswp-width="1669" data-pswp-height="2500" target="_blank"><img
                                            src="{{ asset('assets/images/lightgallery/11.jpg') }}" alt="Demo image 1">
                                        <div class="caption">
                                            <h4>Portfolio Title</h4>
                                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                                has been the industry's standard dummy.</p>
                                        </div>
                                    </a>
                                    <div class="pswp-caption-content">
                                        <h4>Portfolio Title</h4>
                                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                            been the industry's standard dummy.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="my-gallery pswp-gallery">
                                <div class="pswp-gallery__item"><a
                                        href="{{ asset('assets/images/big-lightgallery/12.jpg') }}"
                                        data-pswp-width="1669" data-pswp-height="2500" target="_blank"><img
                                            src="{{ asset('assets/images/lightgallery/12.jpg') }}" alt="Demo image 1">
                                        <div class="caption">
                                            <h4>Portfolio Title</h4>
                                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                                has been the industry's standard dummy.</p>
                                        </div>
                                    </a>
                                    <div class="pswp-caption-content">
                                        <h4>Portfolio Title</h4>
                                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                            been the industry's standard dummy.</p>
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
    <script type="module"
        src="{{ asset('assets/js/vendors/photoswipe-dynamic-caption-plugin/photoswipe-dynamic-caption-plugin.esm.js') }}">
    </script>
    <script type="module" src="{{ asset('assets/js/photoswipe/photoswipe-caption.js') }}"></script>
@endsection
