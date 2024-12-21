@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe/dist/photoswipe.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Masonry Gallery</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Gallery</li>
                        <li class="breadcrumb-item active">Masonry Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 box-col-12">
                <!-- gallery mixin-->
                <div class="card gallery-grid">
                    <div class="card-header pb-0">
                        <h4>Masonry Gallery</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                    </div>
                    <div class="card-body photoswipe-pb-responsive">
                        <div class="masonry-gallery row grid gallery" id="aniimated-thumbnials" itemscope="">
                            <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-masonry/1.jpg') }}" data-pswp-width="1875" data-pswp-height="2500"
                                    target="_blank"><img class="img-thumbnail" src="{{ asset('assets/images/masonry/1.jpg') }}"
                                        itemprop="thumbnail" alt="Image description"></a></figure>
                            <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-masonry/2.jpg') }}" data-pswp-width="1875" data-pswp-height="2500"
                                    target="_blank"><img class="img-thumbnail" src="{{ asset('assets/images/masonry/2.jpg') }}"
                                        itemprop="thumbnail" alt="Image description"></a></figure>
                            <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-masonry/3.jpg') }}" data-pswp-width="1875" data-pswp-height="2500"
                                    target="_blank"><img class="img-thumbnail" src="{{ asset('assets/images/masonry/3.jpg') }}"
                                        itemprop="thumbnail" alt="Image description"></a></figure>
                            <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-masonry/4.jpg') }}" data-pswp-width="1875" data-pswp-height="2500"
                                    target="_blank"><img class="img-thumbnail" src="{{ asset('assets/images/masonry/4.jpg') }}"
                                        itemprop="thumbnail" alt="Image description"></a></figure>
                            <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-masonry/5.jpg') }}" data-pswp-width="1875" data-pswp-height="2500"
                                    target="_blank"><img class="img-thumbnail" src="{{ asset('assets/images/masonry/5.jpg') }}"
                                        itemprop="thumbnail" alt="Image description"></a></figure>
                            <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-masonry/6.jpg') }}" data-pswp-width="1875" data-pswp-height="2500"
                                    target="_blank"><img class="img-thumbnail" src="{{ asset('assets/images/masonry/6.jpg') }}"
                                        itemprop="thumbnail" alt="Image description"></a></figure>
                            <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-masonry/7.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/masonry/7.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a></figure>
                            <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-masonry/8.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/masonry/8.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a></figure>
                            <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-masonry/9.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/masonry/9.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a></figure>
                            <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-masonry/10.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/masonry/10.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a></figure>
                            <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-masonry/11.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/masonry/11.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a></figure>
                            <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-masonry/12.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/masonry/12.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a></figure>
                            <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-masonry/13.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/masonry/13.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a></figure>
                            <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-masonry/14.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/masonry/14.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a></figure>
                            <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-masonry/15.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/masonry/15.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a></figure>
                            <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-masonry/1.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/masonry/1.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a></figure>
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
    <script type="module" src="{{ asset('assets/js/vendors/masonry-layout/dist/masonry.pkgd.min.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/masonry/masonry-gallery.js') }}"></script>
@endsection
