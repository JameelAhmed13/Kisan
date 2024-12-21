@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe/dist/photoswipe.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Image Hover Effects</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Gallery</li>
                        <li class="breadcrumb-item active">Image Hover Effects</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Hover Effect 1</h4>
                    </div>
                    <div class="card-body">
                        <div class="row my-gallery gallery gap-0 mb-0" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-1" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/1.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-1" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/2.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-1" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/3.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-1" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/4.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Hover Effect 2</h4>
                    </div>
                    <div class="card-body">
                        <div class="row my-gallery gallery gap-0 mb-0" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-2" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/1.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-2" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/2.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-2" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/3.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-2" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/4.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Hover Effect 3</h4>
                    </div>
                    <div class="card-body">
                        <div class="row my-gallery gallery gap-0 mb-0" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-3" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/1.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-3" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/2.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-3" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/3.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-3" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/4.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Hover Effect 4</h4>
                    </div>
                    <div class="card-body">
                        <div class="row my-gallery gallery gap-0 mb-0" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-4" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/1.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-4" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/2.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-4" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/3.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-4" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/4.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Hover Effect 5</h4>
                    </div>
                    <div class="card-body">
                        <div class="row my-gallery gallery gap-0 mb-0" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-5" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/1.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-5" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/2.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-5" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/3.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-5" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/4.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Hover Effect 6</h4>
                    </div>
                    <div class="card-body">
                        <div class="row my-gallery gallery gap-0 mb-0" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/1.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/2.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/3.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/4.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Hover Effect 7</h4>
                    </div>
                    <div class="card-body">
                        <div class="row my-gallery gallery gap-0 mb-0" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-7" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/1.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-7" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/2.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-7" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/3.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-7" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/4.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Hover Effect 8</h4>
                    </div>
                    <div class="card-body">
                        <div class="row my-gallery gallery gap-0 mb-0" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-8" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/1.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-8" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/2.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-8" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/3.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-8" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/4.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Hover Effect 9</h4>
                    </div>
                    <div class="card-body">
                        <div class="row my-gallery gallery gap-0 mb-0" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-9" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/1.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-9" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/2.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-9" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/3.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-9" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/4.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Hover Effect 10</h4>
                    </div>
                    <div class="card-body">
                        <div class="row my-gallery gallery gap-0 mb-0" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-10" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/1.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-10" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/2.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-10" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/3.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-10" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/4.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Hover Effect 11</h4>
                    </div>
                    <div class="card-body">
                        <div class="row my-gallery gallery gap-0 mb-0" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-11" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/1.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-11" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/2.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-11" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/3.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-11" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/4.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Hover Effect 12</h4>
                    </div>
                    <div class="card-body">
                        <div class="row my-gallery gallery gap-0 mb-0" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-12" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/1.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-12" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/2.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-12" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/3.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-12" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/4.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Hover Effect 13</h4>
                    </div>
                    <div class="card-body">
                        <div class="row my-gallery gallery gap-0 mb-0" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-13" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/1.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-13" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/2.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-13" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/3.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-13" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/4.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Hover Effect 14</h4>
                    </div>
                    <div class="card-body">
                        <div class="row my-gallery gallery gap-0 mb-0" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-14" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/1.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-14" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/2.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-14" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/3.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-14" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/4.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Hover Effect 15</h4>
                    </div>
                    <div class="card-body">
                        <div class="row my-gallery gallery gap-0 mb-0" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-15" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/1.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-15" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/2.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-15" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/3.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                            <figure class="col-md-3 col-6 img-hover hover-15" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1875"
                                    data-pswp-height="2500" target="_blank">
                                    <div><img src="{{ asset('assets/images/lightgallery/4.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script type="module" src="{{ asset('assets/js/vendors/photoswipe/dist/photoswipe.esm.min.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/vendors/photoswipe/dist/photoswipe-lightbox.esm.min.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/photoswipe/photoswipe-custom.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/gallery-mixin.js') }}"></script>
@endsection
