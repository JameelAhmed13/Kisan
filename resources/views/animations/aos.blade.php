@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/wowjs/css/libs/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/aos/dist/aos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe/dist/photoswipe.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>AOS Animation</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Animation</li>
                        <li class="breadcrumb-item active">AOS Animation</li>
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
                        <h4>AOS animation</h4>
                        <p class="desc mb-0 mt-1"><span>For more detailed follow below
                                steps</span><code></code><span>.</span></p>
                    </div>
                    <div class="gallery my-gallery card-body row animation-style" itemscope="">
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="fade-down"><a
                                href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/1.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="zoom-out-down"><a
                                href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/2.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="flip-down"><a
                                href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/3.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="fade-up"><a
                                href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/4.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="flip-down"><a
                                href="{{ asset('assets/images/big-lightgallery/5.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/5.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="fade-up"><a
                                href="{{ asset('assets/images/big-lightgallery/6.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/6.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="flip-down"><a
                                href="{{ asset('assets/images/big-lightgallery/7.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/7.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="fade-up"><a
                                href="{{ asset('assets/images/big-lightgallery/8.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/8.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="flip-down"><a
                                href="{{ asset('assets/images/big-lightgallery/9.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/9.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="fade-up"><a
                                href="{{ asset('assets/images/big-lightgallery/10.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/10.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="flip-down"><a
                                href="{{ asset('assets/images/big-lightgallery/11.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/11.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="fade-up"><a
                                href="{{ asset('assets/images/big-lightgallery/12.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/12.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="flip-down"><a
                                href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/1.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="flip-left"><a
                                href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/2.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="flip-down"><a
                                href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/3.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="zoom-out"><a
                                href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/4.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="flip-right"><a
                                href="{{ asset('assets/images/big-lightgallery/5.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/5.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="zoom-out"><a
                                href="{{ asset('assets/images/big-lightgallery/10.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/10.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="zoom-out-up"><a
                                href="{{ asset('assets/images/big-lightgallery/6.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/6.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="zoom-out-down"><a
                                href="{{ asset('assets/images/big-lightgallery/7.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/7.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="flip-down"><a
                                href="{{ asset('assets/images/big-lightgallery/8.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/8.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="slide-up"><a
                                href="{{ asset('assets/images/big-lightgallery/9.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/9.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="flip-down"><a
                                href="{{ asset('assets/images/big-lightgallery/10.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/10.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="fade-up"><a
                                href="{{ asset('assets/images/big-lightgallery/11.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/11.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="flip-down"><a
                                href="{{ asset('assets/images/big-lightgallery/12.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/12.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="fade-up"><a
                                href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/1.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="flip-down"><a
                                href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/2.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="flip-left"><a
                                href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/3.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="flip-down"><a
                                href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/4.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="flip-left"><a
                                href="{{ asset('assets/images/big-lightgallery/5.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/5.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="flip-down"><a
                                href="{{ asset('assets/images/big-lightgallery/9.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/9.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="zoom-out"><a
                                href="{{ asset('assets/images/big-lightgallery/6.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/6.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="flip-right"><a
                                href="{{ asset('assets/images/big-lightgallery/7.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/7.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="zoom-out"><a
                                href="{{ asset('assets/images/big-lightgallery/8.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/8.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="zoom-out-up"><a
                                href="{{ asset('assets/images/big-lightgallery/9.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/9.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 box-col-3" data-aos="flip-down"><a
                                href="{{ asset('assets/images/big-lightgallery/10.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/10.jpg') }}" alt=""></a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <!-- init aos-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Init AOS</h4>
                    </div>
                    <div class="card-body">
                        <div><span class="comment">// The Below Function is example of how to initlize reveal</span>
                            <div class="line"><span></span> &lt;script&gt;
                                <span></span><br><code>AOS.init();</code><br><span> &lt;</span> /script <span> &gt; </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- how to use-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>How To Use It?</h4>
                        <p class="desc mb-0 mt-1"><span>All you have to do is to
                                add</span><code>data-aos</code><span>attribute to html element, like so:</span></p>
                    </div>
                    <div class="card-body">
                        <div class="font-primary"><span> &lt;</span> div data-aos="animation_name" <span> &gt;</span>
                        </div>
                    </div>
                </div>
                <!-- advanced setting-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Advanced Settings</h4>
                        <p class="desc mb-0 mt-1"><span>These settings can be set both on certain elements, or as default
                                while initializing script (in options object without</span><code>data-
                                part</code><span>).</span></p>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>Attribute</th>
                                    <th>Description</th>
                                    <th>Example value</th>
                                    <th>Default value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><em><code>data-aos-offset</code></em></td>
                                    <td>Change offset to trigger animations sooner or later (px)</td>
                                    <td>200</td>
                                    <td>120</td>
                                </tr>
                                <tr>
                                    <td><em><code>data-aos-duration</code></em></td>
                                    <td>*Duration of animation (ms)</td>
                                    <td>600</td>
                                    <td>400</td>
                                </tr>
                                <tr>
                                    <td><em><code>data-aos-easing</code></em></td>
                                    <td>Choose timing function to ease elements in different ways</td>
                                    <td>ease-in-sine</td>
                                    <td>ease</td>
                                </tr>
                                <tr>
                                    <td><em><code>data-aos-delay</code></em></td>
                                    <td>Delay animation (ms)</td>
                                    <td>300</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td><em><code>data-aos-anchor</code></em></td>
                                    <td>Anchor element, whose offset will be counted to trigger animation instead of actual
                                        elements offset</td>
                                    <td>#selector</td>
                                    <td>null</td>
                                </tr>
                                <tr>
                                    <td><em><code>data-aos-anchor-placement</code></em></td>
                                    <td>Anchor placement - which one position of element on the screen should trigger
                                        animation</td>
                                    <td>top-center</td>
                                    <td>top-bottom</td>
                                </tr>
                                <tr>
                                    <td><em><code>data-aos-once</code></em></td>
                                    <td>Choose wheter animation should fire once, or every time you scroll up/down to
                                        element</td>
                                    <td>true</td>
                                    <td>false</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <!-- Animation-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Animation</h4>
                        <p class="desc mb-0 mt-1"><span>There are serveral predefined animations you can use
                                already:</span><code></code><span>.</span></p>
                    </div>
                    <div class="card-body">
                        <ol class="line">
                            <li>
                                <h5>Fade animations:</h5>
                                <ol class="ps-4 mb-4 list-circle">
                                    <li>fade</li>
                                    <li>fade-up</li>
                                    <li>fade-down</li>
                                    <li>fade-left</li>
                                    <li>fade-right</li>
                                    <li>fade-up-right</li>
                                    <li>fade-up-left</li>
                                    <li>fade-down-right</li>
                                    <li>fade-down-left</li>
                                </ol>
                            </li>
                            <li>
                                <h5>Flip animations:</h5>
                                <ol class="ps-4 mb-4 list-circle">
                                    <li>flip-up</li>
                                    <li>flip-down</li>
                                    <li>flip-left</li>
                                    <li>flip-right</li>
                                </ol>
                            </li>
                            <li>
                                <h5>Slide animations:</h5>
                                <ol class="ps-4 mb-4 list-circle">
                                    <li>slide-up</li>
                                    <li>slide-down</li>
                                    <li>slide-left</li>
                                    <li>slide-right</li>
                                </ol>
                            </li>
                            <li>
                                <h5>Zoom animations:</h5>
                                <ol class="ps-4 list-circle">
                                    <li>zoom-in</li>
                                    <li>zoom-in-up</li>
                                    <li>zoom-in-down</li>
                                    <li>zoom-in-left</li>
                                    <li>zoom-in-right</li>
                                    <li>zoom-out</li>
                                    <li>zoom-out-up</li>
                                    <li>zoom-out-down</li>
                                    <li>zoom-out-left</li>
                                    <li>zoom-out-right</li>
                                </ol>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <!-- Animation-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Anchor placement:</h4>
                        <p class="desc mb-0 mt-1"><span>For more detailed follow below
                                steps</span><code></code><span>.</span></p>
                    </div>
                    <div class="card-body">
                        <ol class="ps-4 list-circle line mb-0">
                            <li>top-bottom</li>
                            <li>top-center</li>
                            <li>top-top</li>
                            <li>center-bottom</li>
                            <li>center-center</li>
                            <li>center-top</li>
                            <li>bottom-bottom</li>
                            <li>bottom-center</li>
                            <li>bottom-top</li>
                        </ol>
                    </div>
                </div>
                <!-- Animation-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Easing functions:</h4>
                        <p class="desc mb-0 mt-1"><span>For more detailed follow below
                                steps</span><code></code><span>.</span></p>
                    </div>
                    <div class="card-body">
                        <ol class="ps-4 list-circle line mb-0">
                            <li>linear</li>
                            <li>ease</li>
                            <li>ease-in</li>
                            <li>ease-out</li>
                            <li>ease-in-out</li>
                            <li>ease-in-back</li>
                            <li>ease-out-back</li>
                            <li>ease-in-out-back</li>
                            <li>ease-in-sine</li>
                            <li>ease-out-sine</li>
                            <li>ease-in-out-sine</li>
                            <li>ease-in-quad</li>
                            <li>ease-out-quad</li>
                            <li>ease-in-out-quad</li>
                            <li>ease-in-cubic</li>
                            <li>ease-out-cubic</li>
                            <li>ease-in-out-cubic</li>
                            <li>ease-in-quart</li>
                            <li>ease-out-quart</li>
                            <li>ease-in-out-quart</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/vendors/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('assets/js/aos-init.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/vendors/photoswipe/dist/photoswipe.esm.min.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/vendors/photoswipe/dist/photoswipe-lightbox.esm.min.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/photoswipe/photoswipe-custom.js') }}"></script>
@endsection
