@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/swiper/swiper-bundle.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Product Page</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">ECommerce</li>
                        <li class="breadcrumb-item active">Product Page</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row product-page-main p-0">
            <div class="box-col-6 col-md-6 col-xxl-4">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="product-slider swiper-container slider2" id="sync1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="{{ asset('assets/images/ecommerce/01.jpg') }}"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/ecommerce/02.jpg') }}"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/ecommerce/04.jpg') }}"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/ecommerce/05.jpg') }}"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/ecommerce/06.jpg') }}"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/ecommerce/07.jpg') }}"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/ecommerce/08.jpg') }}"
                                        alt=""></div>
                            </div>
                        </div>
                        <div class="swiper-container slider-thumbnail" id="sync2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="{{ asset('assets/images/ecommerce/01.jpg') }}"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/ecommerce/02.jpg') }}"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/ecommerce/04.jpg') }}"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/ecommerce/05.jpg') }}"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/ecommerce/06.jpg') }}"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/ecommerce/07.jpg') }}"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/ecommerce/08.jpg') }}"
                                        alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-col-6 order-xxl-0 order-1 col-xxl-5">
                <div class="card">
                    <div class="card-body">
                        <div class="product-page-details">
                            <h3 class="f-28 f-w-600">Women Pink shirt.</h3>
                        </div>
                        <div class="product-price">$26.00
                            <del>$350.00 </del>
                        </div>
                        <ul class="product-color">
                            <li class="bg-primary"></li>
                            <li class="bg-secondary"></li>
                            <li class="bg-success"></li>
                            <li class="bg-info"></li>
                            <li class="bg-warning"> </li>
                        </ul>
                        <hr>
                        <p>Rock Paper Scissors Various Dots Half Sleeves Girl’s Regular Fit T-Shirt I 100% Cotton T Shirt
                            with Half Sleeve Round Neck I Regular Wear Solid Kids Tees and Black Sleeve.</p>
                        <hr>
                        <div>
                            <table class="product-page-width table-borderless">
                                <tbody>
                                    <tr>
                                        <td> <b>Brand &nbsp;&nbsp;&nbsp;:</b></td>
                                        <td>Pixelstrap</td>
                                    </tr>
                                    <tr>
                                        <td> <b>Availability &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                                        <td class="font-success">In stock</td>
                                    </tr>
                                    <tr>
                                        <td> <b>Seller &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                                        <td>ABC</td>
                                    </tr>
                                    <tr>
                                        <td> <b>Fabric &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                                        <td>Cotton</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <h6 class="product-title">share it</h6>
                            </div>
                            <div class="col-md-8">
                                <div class="product-icon">
                                    <ul class="product-social">
                                        <li class="d-inline-block"><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa-brands fa-facebook-f"></i></a></li>
                                        <li class="d-inline-block"><a href="https://accounts.google.com/"
                                                target="_blank"><i class="fa-brands fa-google-plus-g"></i></a></li>
                                        <li class="d-inline-block"><a href="https://twitter.com/" target="_blank"><i
                                                    class="fa-brands fa-twitter"></i></a></li>
                                        <li class="d-inline-block"><a href="https://www.instagram.com/"
                                                target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li class="d-inline-block"><a href="https://rss.app/" target="_blank"><i
                                                    class="fa fa-rss"></i></a></li>
                                    </ul>
                                    <form class="d-inline-block f-right"></form>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <h6 class="product-title">Rate Now</h6>
                            </div>
                            <div class="col-md-8">
                                <div class="d-flex gap-5">
                                    <div class="rating"><span class="rating-value"></span><i
                                            class="rating-star fa-solid fa-star"></i><i
                                            class="rating-star fa-solid fa-star"></i><i
                                            class="rating-star fa-solid fa-star"></i><i
                                            class="rating-star fa-regular fa-star"></i><i
                                            class="rating-star fa-regular fa-star"></i></div><span>(250 review)</span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="m-t-15 btn-showcase"><a class="btn btn-primary" href="{{ route('admin.cart') }}"
                                title=""> <i class="fa fa-shopping-basket me-1"></i>Add To Cart</a><a
                                class="btn btn-success" href="{{ route('admin.checkout') }}" title=""> <i
                                    class="fa fa-shopping-cart me-1"></i>Buy
                                Now</a><a class="btn btn-secondary" href="{{ route('admin.list_wish') }}"> <i
                                    class="fa fa-heart me-1"></i>Add To WishList</a></div>
                    </div>
                </div>
            </div>
            <div class="box-col-12 col-md-6 col-xxl-3">
                <div class="card">
                    <div class="card-body">
                        <!-- side-bar colleps block stat-->
                        <div class="filter-block">
                            <h4>Brand</h4>
                            <ul>
                                <li>Clothing</li>
                                <li>Bags</li>
                                <li>Footwear</li>
                                <li>Watches</li>
                                <li>ACCESSORIES</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="collection-filter-block">
                            <ul class="pro-services">
                                <li>
                                    <div class="d-flex">
                                        <svg class="feather">
                                            <use
                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#truck') }}">
                                            </use>
                                        </svg>
                                        <div class="flex-grow-1">
                                            <h5>Free Shipping </h5>
                                            <p>Free Shipping World Wide</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <svg class="feather">
                                            <use
                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#clock') }}">
                                            </use>
                                        </svg>
                                        <div class="flex-grow-1">
                                            <h5>24 X 7 Service </h5>
                                            <p>Online Service For New Customer</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <svg class="feather">
                                            <use
                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#gift') }}">
                                            </use>
                                        </svg>
                                        <div class="flex-grow-1">
                                            <h5>Festival Offer </h5>
                                            <p>New Online Special Festival</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <svg class="feather">
                                            <use
                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#credit-card') }}">
                                            </use>
                                        </svg>
                                        <div class="flex-grow-1">
                                            <h5>Online Payment </h5>
                                            <p>Contrary To Popular Belief. </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="row product-page-main m-2">
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs border-tab nav-primary mb-0" id="top-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab"
                                        href="#top-home" role="tab" aria-controls="top-home"
                                        aria-selected="false">Febric</a>
                                    <div class="material-border"></div>
                                </li>
                                <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab"
                                        href="#top-profile" role="tab" aria-controls="top-profile"
                                        aria-selected="false">Video</a>
                                    <div class="material-border"></div>
                                </li>
                                <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab"
                                        href="#top-contact" role="tab" aria-controls="top-contact"
                                        aria-selected="true">Details</a>
                                    <div class="material-border"></div>
                                </li>
                                <li class="nav-item"><a class="nav-link" id="brand-top-tab" data-bs-toggle="tab"
                                        href="#top-brand" role="tab" aria-controls="top-brand"
                                        aria-selected="true">Brand</a>
                                    <div class="material-border"></div>
                                </li>
                            </ul>
                            <div class="tab-content" id="top-tabContent">
                                <div class="tab-pane fade active show" id="top-home" role="tabpanel"
                                    aria-labelledby="top-home-tab">
                                    <p class="mb-0 m-t-20">Refresh your wardrobe with this chic top. With an eye-catching
                                        square neck, this top also features pretty puff sleeves. Stunning pink colour
                                        Classic solid pattern Square neck Elasticated puff sleeves Belt included, Polyester
                                        fabric, machine wash..&quot;</p>
                                    <p class="mb-0 m-t-20">Tee Stores is an Indian contemporary clothing brand. The product
                                        pages display a fine quality fabric with colorful description. We offer many vivid
                                        designs, art, styles that &quot;combine heritage with modernity, simplicity,
                                        playfulness and street style&quot;.&quot;</p>
                                </div>
                                <div class="tab-pane fade" id="top-profile" role="tabpanel"
                                    aria-labelledby="profile-top-tab">
                                    <p class="mb-0 m-t-20">
                                        <iframe class="me-3" width="200" height="100"
                                            src="https://www.youtube.com/embed/CJnfAXlBRTE"></iframe>
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="top-contact" role="tabpanel"
                                    aria-labelledby="contact-top-tab">
                                    <p class="mb-0 m-t-20">Rock Paper Scissors Various Dots Half Sleeves Girl’s Regular Fit
                                        T-Shirt I 100% Cotton T Shirt with Half Sleeve Round Neck I Regular Wear Solid Kids
                                        Tees and Black Sleeve.</p>
                                </div>
                                <div class="tab-pane fade" id="top-brand" role="tabpanel"
                                    aria-labelledby="brand-top-tab">
                                    <p class="mb-0 m-t-20">Product Dimensions : 18 x 18 x 4 cm<br>Date First Available : 31
                                        March 2022<br>Manufacturer : Tee Stores<br>Item part number : TS-WT721-XS-WHITE</p>
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
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/product/custom-swiper.js') }}"></script>
@endsection
