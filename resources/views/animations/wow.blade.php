@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/wowjs/css/site.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/wowjs/css/libs/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe/dist/photoswipe.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Wow Animation</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Animation</li>
                        <li class="breadcrumb-item active">Wow Animation</li>
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
                        <h4>WOW animation</h4>
                        <p class="desc mb-0 mt-1"><span>For more detailed follow below
                                steps</span><code></code><span>.</span></p>
                    </div>
                    <div class="gallery my-gallery card-body row animation-style" itemscope="">
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow rollIn"><a
                                href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/1.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow bounceInDown center"><a
                                href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/2.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow lightSpeedIn"><a
                                href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/3.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow rollIn center"><a
                                href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/4.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow pulse"><a
                                href="{{ asset('assets/images/big-lightgallery/5.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/5.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow bounceInRight center"><a
                                href="{{ asset('assets/images/big-lightgallery/6.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/6.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow bounceInLeft"><a
                                href="{{ asset('assets/images/big-lightgallery/7.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/7.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow flipInX center"><a
                                href="{{ asset('assets/images/big-lightgallery/8.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/8.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow bounceInRight"><a
                                href="{{ asset('assets/images/big-lightgallery/9.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/9.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow rollIn center"><a
                                href="{{ asset('assets/images/big-lightgallery/10.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/10.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow shake"><a
                                href="{{ asset('assets/images/big-lightgallery/11.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/11.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow swing center"><a
                                href="{{ asset('assets/images/big-lightgallery/12.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/12.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow rollIn"><a
                                href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/1.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow bounceInUp center"><a
                                href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/2.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow lightSpeedIn"><a
                                href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/3.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow rollIn center"><a
                                href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/4.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow pulse"><a
                                href="{{ asset('assets/images/big-lightgallery/5.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/5.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow flip"><a
                                href="{{ asset('assets/images/big-lightgallery/6.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/6.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow lightSpeedIn center"><a
                                href="{{ asset('assets/images/big-lightgallery/7.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/7.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow bounce"><a
                                href="{{ asset('assets/images/big-lightgallery/8.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/8.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow bounceInUp center"><a
                                href="{{ asset('assets/images/big-lightgallery/9.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/9.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow bounceInRight"><a
                                href="{{ asset('assets/images/big-lightgallery/10.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/10.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow rollIn center"><a
                                href="{{ asset('assets/images/big-lightgallery/11.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/11.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow bounceInRight center"><a
                                href="{{ asset('assets/images/big-lightgallery/12.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/12.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow rollIn"><a
                                href="{{ asset('assets/images/big-lightgallery/1.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/1.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow bounceInDown center"><a
                                href="{{ asset('assets/images/big-lightgallery/2.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/2.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow bounceInRight"><a
                                href="{{ asset('assets/images/big-lightgallery/3.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/3.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow bounceInRight center"><a
                                href="{{ asset('assets/images/big-lightgallery/4.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/4.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow rollIn"><a
                                href="{{ asset('assets/images/big-lightgallery/5.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/5.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow bounceInLeft center"><a
                                href="{{ asset('assets/images/big-lightgallery/6.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/6.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow lightSpeedIn"><a
                                href="{{ asset('assets/images/big-lightgallery/7.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/7.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow pulse"><a
                                href="{{ asset('assets/images/big-lightgallery/8.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/8.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow slideInRight"><a
                                href="{{ asset('assets/images/big-lightgallery/9.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/9.jpg') }}" alt=""></a></div>
                        <div class="pswp-gallery col-xl-2 col-md-3 col-6 wow slideInRight"><a
                                href="{{ asset('assets/images/big-lightgallery/10.jpg') }}" data-pswp-width="1875"
                                data-pswp-height="2500" target="_blank"><img class="img-thumbnail"
                                    src="{{ asset('assets/images/lightgallery/10.jpg') }}" alt=""></a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <!-- Step 1-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4> <span class="badge badge-primary rounded-pill me-2">1</span>Setup Wow.Js</h4>
                        <p class="desc mt-1"><span>(You can link to another CSS animation library by changing wow.js
                                settings)</span></p>
                    </div>
                    <div class="card-body">
                        <div> <code>&lt;link rel="stylesheet" href="assets/css/vendors/wowjs/css/libs/animate.css"
                                &gt;</code></div>
                    </div>
                </div>
                <!-- Step 2-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4> <span class="badge badge-primary rounded-pill me-2">2</span>Link And Activate Wow.Js</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            &lt; script src="js/wow.min.js" &gt; &lt; /script &gt; 
                            <br>&lt; script &gt; <br> 
                                <code>&nbsp; WOW.init();</code>
                            <br>
                            &lt; /script &gt;</div>
                    </div>
                </div>
                <!-- Step 3-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4> <span class="badge badge-primary rounded-pill me-2">3</span>Make An Element Revealable</h4>
                        <p class="desc mt-1"><span>(You can change this CSS class in the WOW settings to avoid name
                                conflicts.)</span></p>
                    </div>
                    <div class="card-body">
                        <div>
                            &lt; div class="wow" &gt; <br><code>Content to Reveal Here</code><br>&lt; /div &gt;</div>
                    </div>
                </div>
                <!-- Step 4 -->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4> <span class="badge badge-primary rounded-pill me-2">4</span>Choose The Animation Style</h4>
                        <p class="desc mt-1"><span>Pick an animation style in Animate.css , then add the CSS class to the
                                HTML element.</span></p>
                    </div>
                    <div class="card-body">
                        <div>
                            &lt; div class="wow" &gt; <br><code>Content to Reveal Here</code><br>&lt; /div &gt;</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header wow-title pb-0">
                        <h4> <span class="badge badge-success rounded-pill me-2">Extra</span>Advance Options</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="line">
                                <p><strong>data-wow-duration: </strong>Change the animation
                                    duration<br><strong>data-wow-delay: </strong>Delay before the animation
                                    starts<br><strong>data-wow-offset: </strong>Distance to start the animation (related to
                                    the browser bottom)<br><strong>data-wow-iteration: </strong>Number of times the
                                    animation is repeated<br></p>
                                <pre class="mb-0 mt-2">&lt;section class="wow slideInLeft" data-wow-duration="2s" data-wow-delay="5s"&gt;<br> &lt;/section&gt;<br> &lt;section class="wow slideInRight" data-wow-offset="10" data-wow-iteration="10"&gt;<br> &lt;/section&gt;</pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header wow-title pb-0">
                        <h4> <span class="badge badge-tertiary rounded-pill me-2">Settings</span>Customize Settings</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="line">
                                <p><strong>boxClass: </strong>Class name that reveals the hidden box when user scrolls.</p>
                                <p><strong>animateClass: </strong>Class name that triggers the CSS animations (’animated’ by
                                    default for the animate.css library)</p>
                                <p><strong>offset: </strong>Define the distance between the bottom of browser viewport and
                                    the top of hidden box.<br>When the user scrolls and reach this distance the hidden box
                                    is revealed.</p>
                                <p><strong>mobile: </strong>Turn on/off wow.js on mobile devices.</p>
                                <p><strong>live: </strong>consatantly check for new WOW elements on the page.</p>
                                <pre class="mb-0 mt-2">wow = new WOW(<br> {<br> boxClass: 'wow', // default<br> animateClass: 'animated', // default<br> offset: 0, // default<br> mobile: true, // default<br> live: true // default<br> }<br> )<br> wow.init();                    </pre>
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
    <script src="{{ asset('assets/js/vendors/wowjs/dist/wow.js') }}"></script>
    <script src="{{ asset('assets/js/wow-custom.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/vendors/photoswipe/dist/photoswipe.esm.min.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/vendors/photoswipe/dist/photoswipe-lightbox.esm.min.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/photoswipe/photoswipe-custom.js') }}"></script>
@endsection
