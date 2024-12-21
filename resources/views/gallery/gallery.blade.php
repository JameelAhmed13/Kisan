@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe/dist/photoswipe.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Gallery</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Gallery</li>
                        <li class="breadcrumb-item active">Gallery</li>
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
                        <h4>Image Gallery</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                    </div>
                    <div class="gallery my-gallery card-body row mb-0" itemscope="">
                        <div class="pswp-gallery col-xl-3 col-md-4 col-6"><a href="{{ asset('assets/images/big-lightgallery/1.jpg') }}"
                                data-pswp-width="1875" data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/1.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-3 col-md-4 col-6"><a href="{{ asset('assets/images/big-lightgallery/2.jpg') }}"
                                data-pswp-width="1875" data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/2.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-3 col-md-4 col-6"><a href="{{ asset('assets/images/big-lightgallery/3.jpg') }}"
                                data-pswp-width="1875" data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/3.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-3 col-md-4 col-6"><a href="{{ asset('assets/images/big-lightgallery/4.jpg') }}"
                                data-pswp-width="1875" data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/4.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-3 col-md-4 col-6"><a href="{{ asset('assets/images/big-lightgallery/5.jpg') }}"
                                data-pswp-width="1875" data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/5.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-3 col-md-4 col-6"><a href="{{ asset('assets/images/big-lightgallery/6.jpg') }}"
                                data-pswp-width="1875" data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/6.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-3 col-md-4 col-6"><a href="{{ asset('assets/images/big-lightgallery/7.jpg') }}"
                                data-pswp-width="1875" data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/7.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-3 col-md-4 col-6"><a href="{{ asset('assets/images/big-lightgallery/8.jpg') }}"
                                data-pswp-width="1875" data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/8.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-3 col-md-4 col-6"><a href="{{ asset('assets/images/big-lightgallery/9.jpg') }}"
                                data-pswp-width="1875" data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/9.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-3 col-md-4 col-6"><a href="{{ asset('assets/images/big-lightgallery/10.jpg') }}"
                                data-pswp-width="1875" data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/10.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-3 col-md-4 col-6"><a
                                href="{{ asset('assets/images/big-lightgallery/11.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/11.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-3 col-md-4 col-6"><a
                                href="{{ asset('assets/images/big-lightgallery/12.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/12.jpg') }}" alt=""></a></div>
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
    <script type="module" src="{{ asset('assets/js/photoswipe/photoswipe-custom.js') }}"></script>
@endsection
