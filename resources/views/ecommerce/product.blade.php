@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/rangeslider/rSlider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/swiper/swiper-bundle.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Product</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">ECommerce</li>
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid product-wrapper">
        <div class="product-grid">
            <div class="feature-products">
                <div class="row">
                    <div class="col-md-6 products-total">
                        <div class="square-product-setting d-inline-block"><a class="icon-grid grid-layout-view"
                                href="#" data-original-title="" title="">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#grid') }}"></use>
                                </svg></a></div>
                        <div class="square-product-setting d-inline-block"><a class="icon-grid m-0 list-layout-view"
                                href="#" data-original-title="" title="">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#list') }}"></use>
                                </svg></a></div><span class="d-none-productlist filter-toggle">
                            Filters<span class="ms-2">
                                <svg class="feather toggle-data">
                                    <use
                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevron-down') }}">
                                    </use>
                                </svg></span></span>
                        <div class="grid-options d-inline-block">
                            <ul>
                                <li><a class="product-2-layout-view" href="#" data-original-title=""
                                        title=""><span class="line-grid line-grid-1 bg-primary"></span><span
                                            class="line-grid line-grid-2 bg-primary"></span></a></li>
                                <li><a class="product-3-layout-view" href="#" data-original-title=""
                                        title=""><span class="line-grid line-grid-3 bg-primary"></span><span
                                            class="line-grid line-grid-4 bg-primary"></span><span
                                            class="line-grid line-grid-5 bg-primary"></span></a></li>
                                <li><a class="product-4-layout-view" href="#" data-original-title=""
                                        title=""><span class="line-grid line-grid-6 bg-primary"></span><span
                                            class="line-grid line-grid-7 bg-primary"></span><span
                                            class="line-grid line-grid-8 bg-primary"></span><span
                                            class="line-grid line-grid-9 bg-primary"></span></a></li>
                                <li><a class="product-6-layout-view" href="#" data-original-title=""
                                        title=""><span class="line-grid line-grid-10 bg-primary"></span><span
                                            class="line-grid line-grid-11 bg-primary"></span><span
                                            class="line-grid line-grid-12 bg-primary"></span><span
                                            class="line-grid line-grid-13 bg-primary"></span><span
                                            class="line-grid line-grid-14 bg-primary"></span><span
                                            class="line-grid line-grid-15 bg-primary"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 text-sm-end"><span class="f-w-600 m-r-5">Showing Products 1 - 24 Of 200
                            Results</span>
                        <div class="select2-drpdwn-product select-options d-inline-block">
                            <select class="form-control btn-square" name="select">
                                <option value="opt1">Featured</option>
                                <option value="opt2">Lowest Prices</option>
                                <option value="opt3">Highest Prices</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="product-sidebar">
                            <div class="filter-section">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="mb-0 f-w-600">Filters<span class="pull-right"><i
                                                    class="fa fa-chevron-down toggle-data"></i></span></h6>
                                    </div>
                                    <div class="left-filter">
                                        <div class="card-body filter-cards-view animate-chk">
                                            <div class="product-filter">
                                                <h6 class="f-w-600">Category</h6>
                                                <div class="checkbox-animated mt-0">
                                                    <label class="d-block" for="edo-ani5">
                                                        <input class="checkbox-primary" id="edo-ani5" type="checkbox"
                                                            data-original-title="" title="">Man Shirt
                                                    </label>
                                                    <label class="d-block" for="edo-ani6">
                                                        <input class="checkbox-primary" id="edo-ani6" type="checkbox"
                                                            data-original-title="" title="">Man Jeans
                                                    </label>
                                                    <label class="d-block" for="edo-ani7">
                                                        <input class="checkbox-primary" id="edo-ani7" type="checkbox"
                                                            data-original-title="" title="">Woman Top
                                                    </label>
                                                    <label class="d-block" for="edo-ani8">
                                                        <input class="checkbox-primary" id="edo-ani8" type="checkbox"
                                                            data-original-title="" title="">Woman Jeans
                                                    </label>
                                                    <label class="d-block" for="edo-ani9">
                                                        <input class="checkbox-primary" id="edo-ani9" type="checkbox"
                                                            data-original-title="" title="">Man T-shirt
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="product-filter">
                                                <h6 class="f-w-600">Brand</h6>
                                                <div class="checkbox-animated mt-0">
                                                    <label class="d-block" for="chk-ani">
                                                        <input class="checkbox-primary" id="chk-ani" type="checkbox"
                                                            data-original-title="" title=""> Levi's
                                                    </label>
                                                    <label class="d-block" for="chk-ani1">
                                                        <input class="checkbox-primary" id="chk-ani1" type="checkbox"
                                                            data-original-title="" title="">Diesel
                                                    </label>
                                                    <label class="d-block" for="chk-ani2">
                                                        <input class="checkbox-primary" id="chk-ani2" type="checkbox"
                                                            data-original-title="" title="">Lee
                                                    </label>
                                                    <label class="d-block" for="chk-ani3">
                                                        <input class="checkbox-primary" id="chk-ani3" type="checkbox"
                                                            data-original-title="" title="">Hudson
                                                    </label>
                                                    <label class="d-block" for="chk-ani4">
                                                        <input class="checkbox-primary" id="chk-ani4" type="checkbox"
                                                            data-original-title="" title="">Denizen
                                                    </label>
                                                    <label class="d-block" for="chk-ani5">
                                                        <input class="checkbox-primary" id="chk-ani5" type="checkbox"
                                                            data-original-title="" title="">Spykar
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="product-filter slider-product">
                                                <h6 class="f-w-600">Colors</h6>
                                                <div class="color-selector">
                                                    <ul>
                                                        <li class="white"></li>
                                                        <li class="gray"></li>
                                                        <li class="black"></li>
                                                        <li class="orange"></li>
                                                        <li class="green"></li>
                                                        <li class="pink"></li>
                                                        <li class="yellow"></li>
                                                        <li class="blue"></li>
                                                        <li class="red"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-filter pb-0">
                                                <h6 class="f-w-600">Price</h6>
                                                <div class="slider-container">
                                                    <input class="slider" id="slider6" type="text">
                                                </div>
                                                <h6 class="f-w-600">New Products</h6>
                                            </div>
                                            <div class="product-filter pb-0 product-page">
                                                <div class="swiper-container">
                                                    <div class="swiper-wrapper" id="testimonial">
                                                        <div class="swiper-slide">
                                                            <div class="product-box row">
                                                                <div class="product-img col-md-4"><img
                                                                        class="img-fluid img-100"
                                                                        src="{{ asset('assets/images/ecommerce/01.jpg') }}"
                                                                        alt="" data-original-title=""
                                                                        title=""></div>
                                                                <div class="product-details col-md-8 text-start"><span><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning"></i></span>
                                                                    <p class="mb-0">Woman T-shirt</p>
                                                                    <div class="product-price">$100.00</div>
                                                                </div>
                                                            </div>
                                                            <div class="product-box row">
                                                                <div class="product-img col-md-4"><img
                                                                        class="img-fluid img-100"
                                                                        src="{{ asset('assets/images/ecommerce/02.jpg') }}"
                                                                        alt="" data-original-title=""
                                                                        title=""></div>
                                                                <div class="product-details col-md-8 text-start"><span><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning"></i></span>
                                                                    <p class="mb-0">Beauty Fashion</p>
                                                                    <div class="product-price">$150.00</div>
                                                                </div>
                                                            </div>
                                                            <div class="product-box row">
                                                                <div class="product-img col-md-4"><img
                                                                        class="img-fluid img-100"
                                                                        src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                                                                        alt="" data-original-title=""
                                                                        title=""></div>
                                                                <div class="product-details col-md-8 text-start"><span><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning"></i></span>
                                                                    <p class="mb-0">VOXATI</p>
                                                                    <div class="product-price">$200.00</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="product-box row">
                                                                <div class="product-img col-md-4"><img
                                                                        class="img-fluid img-100"
                                                                        src="{{ asset('assets/images/ecommerce/01.jpg') }}"
                                                                        alt="" data-original-title=""
                                                                        title=""></div>
                                                                <div class="product-details col-md-8 text-start"><span><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning"></i></span>
                                                                    <p class="mb-0">Fancy Shirt</p>
                                                                    <div class="product-price">$100.00</div>
                                                                </div>
                                                            </div>
                                                            <div class="product-box row">
                                                                <div class="product-img col-md-4"><img
                                                                        class="img-fluid img-100"
                                                                        src="{{ asset('assets/images/ecommerce/02.jpg') }}"
                                                                        alt="" data-original-title=""
                                                                        title=""></div>
                                                                <div class="product-details col-md-8 text-start"><span><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning"></i></span>
                                                                    <p class="mb-0">Fancy Shirt</p>
                                                                    <div class="product-price">$100.00</div>
                                                                </div>
                                                            </div>
                                                            <div class="product-box row">
                                                                <div class="product-img col-md-4"><img
                                                                        class="img-fluid img-100"
                                                                        src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                                                                        alt="" data-original-title=""
                                                                        title=""></div>
                                                                <div class="product-details col-md-8 text-start"><span><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning me-1"></i><i
                                                                            class="fa fa-star font-warning"></i></span>
                                                                    <p class="mb-0">Fancy Shirt</p>
                                                                    <div class="product-price">$100.00 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-button-next"></div>
                                                    <div class="swiper-button-prev"></div>
                                                </div>
                                            </div>
                                            <div class="product-filter text-center"><img class="img-fluid banner-product"
                                                    src="{{ asset('assets/images/ecommerce/banner.jpg') }}"
                                                    alt="" data-original-title="" title=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <form>
                            <div class="form-group m-0">
                                <input class="form-control" type="search" placeholder="Search.." data-original-title=""
                                    title="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="product-wrapper-grid">
                <div class="row list-collection">
                    <!-- Product menu-->
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div></div><img class="img-fluid" src="{{ asset('assets/images/ecommerce/01.jpg') }}"
                                        alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter1"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-modal modal fade" id="exampleModalCenter1">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/01.jpg') }}"
                                                            alt=""></div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                                                <h4>Women's Top</h4>
                                                            </a>
                                                            <div class="product-price"><span>$50.00</span>
                                                                <del>$35.00</del>
                                                            </div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-600">Product Details</h6>
                                                                <p class="mb-0">Rock Paper Scissors Women Tank Top High
                                                                    Neck Cotton Top Stylish Women Top..</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul>
                                                                    <li>
                                                                        <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-600">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper">
                                                                        <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus"> </i></button>
                                                                        <input class="input-touchspin spin-outline-primary"
                                                                            type="number" value="5">
                                                                        <button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"> </i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div class="addcart-btn"><a class="btn btn-primary me-2"
                                                                        href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                        class="btn btn-primary"
                                                                        href="{{ route('admin.product_page') }}">View Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                        <h4>Women's Top</h4>
                                    </a>
                                    <p class="pro-detail">Regular Flare Fit Women's white Top</p>
                                    <p class="product-title">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry&apos;s standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen
                                        book
                                    </p>
                                    <div class="product-price"><span>$50.00</span>
                                        <del>$35.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div class="ribbon ribbon-danger">sale</div><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter2"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-modal modal fade" id="exampleModalCenter2">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/02.jpg') }}"
                                                            alt=""></div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                                                <h4>Men's Jacket</h4>
                                                            </a>
                                                            <div class="product-price"><span>$45.00</span>
                                                                <del>$50.00</del>
                                                            </div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-600">Product Details</h6>
                                                                <p class="mb-0">Lorate Solid Men's Fashion Full Sleeves
                                                                    Latest Jacket for Men With Button Closure Long Sleeve
                                                                    Casual Torn Lycra Denim Jacket.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul>
                                                                    <li>
                                                                        <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-600">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper">
                                                                        <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus"> </i></button>
                                                                        <input class="input-touchspin spin-outline-primary"
                                                                            type="number" value="5">
                                                                        <button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"> </i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div class="addcart-btn"><a class="btn btn-primary me-2"
                                                                        href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                        class="btn btn-primary"
                                                                        href="{{ route('admin.product_page') }}">View Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                        <h4>Men's Jacket</h4>
                                    </a>
                                    <p class="pro-detail">Regular Flare Fit men's white Top</p>
                                    <p class="product-title">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry&apos;s standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen
                                        book
                                    </p>
                                    <div class="product-price"><span>$45.00</span>
                                        <del>$50.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div></div><img class="img-fluid" src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                                        alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter3"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-modal modal fade" id="exampleModalCenter3">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                                                            alt=""></div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                                                <h4>Black, White Dress</h4>
                                                            </a>
                                                            <div class="product-price"><span>$87.00</span>
                                                                <del>$52.00</del>
                                                            </div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-600">Product Details</h6>
                                                                <p class="mb-0">Ravaiyaa - Attitude is everything Cotton
                                                                    Women's Dresses One Top Button T-Shirt.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul>
                                                                    <li>
                                                                        <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-600">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper">
                                                                        <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus"> </i></button>
                                                                        <input class="input-touchspin spin-outline-primary"
                                                                            type="number" value="5">
                                                                        <button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"> </i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div class="addcart-btn"><a class="btn btn-primary me-2"
                                                                        href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                        class="btn btn-primary"
                                                                        href="{{ route('admin.product_page') }}">View Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                        <h4>Black, White Dress</h4>
                                    </a>
                                    <p class="pro-detail">White Cotton Regular Fabric Fit Dress</p>
                                    <p class="product-title">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry&apos;s standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen
                                        book
                                    </p>
                                    <div class="product-price"><span>$87.00</span>
                                        <del>$52.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div class="ribbon ribbon-success ribbon-right">50%</div><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/04.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter4"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-modal modal fade" id="exampleModalCenter4">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/04.jpg') }}"
                                                            alt=""></div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                                                <h4>Denim Jacket</h4>
                                                            </a>
                                                            <div class="product-price"><span>$56.00</span>
                                                                <del>$45.00</del>
                                                            </div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-600">Product Details</h6>
                                                                <p class="mb-0">It is a long established fact that a
                                                                    reader will be distracted by the readable content of a
                                                                    page when looking at its layout.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul>
                                                                    <li>
                                                                        <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-600">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper">
                                                                        <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus"> </i></button>
                                                                        <input class="input-touchspin spin-outline-primary"
                                                                            type="number" value="5">
                                                                        <button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"> </i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div class="addcart-btn"><a class="btn btn-primary me-2"
                                                                        href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                        class="btn btn-primary"
                                                                        href="{{ route('admin.product_page') }}">View Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                        <h4>Denim Jacket</h4>
                                    </a>
                                    <p class="pro-detail">Men's Regular Blue Denim Jacket.</p>
                                    <p class="product-title">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry&apos;s standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen
                                        book
                                    </p>
                                    <div class="product-price"><span>$56.00</span>
                                        <del>$45.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div class="ribbon ribbon-success ribbon-right">50%</div><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/05.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter5"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-modal modal fade" id="exampleModalCenter5">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/05.jpg') }}"
                                                            alt=""></div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                                                <h4>Black, White Dress.</h4>
                                                            </a>
                                                            <div class="product-price"><span>$25.00</span>
                                                                <del>$45.00</del>
                                                            </div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-600">Product Details</h6>
                                                                <p class="mb-0">Lorate Solid women's Fashion red winter
                                                                    Latest collection for women blazer.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul>
                                                                    <li>
                                                                        <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-600">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper">
                                                                        <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus"> </i></button>
                                                                        <input class="input-touchspin spin-outline-primary"
                                                                            type="number" value="5">
                                                                        <button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"> </i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div class="addcart-btn"><a class="btn btn-primary me-2"
                                                                        href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                        class="btn btn-primary"
                                                                        href="{{ route('admin.product_page') }}">View Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                        <h4>Black, White Dress.</h4>
                                    </a>
                                    <p class="pro-detail">Women's Black &amp; White Collection Dress.</p>
                                    <p class="product-title">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry&apos;s standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen
                                        book
                                    </p>
                                    <div class="product-price"><span>$25.00</span>
                                        <del>$45.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div></div><img class="img-fluid" src="{{ asset('assets/images/ecommerce/06.jpg') }}"
                                        alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter6"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-modal modal fade" id="exampleModalCenter6">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/06.jpg') }}"
                                                            alt=""></div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                                                <h4>Red Blazer For Winter</h4>
                                                            </a>
                                                            <div class="product-price"><span>$36.00</span>
                                                                <del>$35.00</del>
                                                            </div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-600">Product Details</h6>
                                                                <p class="mb-0">Rock Paper Scissors women's Tank Top High
                                                                    Neck Cotton Top Stylish Women Top..</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul>
                                                                    <li>
                                                                        <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-600">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper">
                                                                        <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus"> </i></button>
                                                                        <input class="input-touchspin spin-outline-primary"
                                                                            type="number" value="5">
                                                                        <button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"> </i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div class="addcart-btn"><a class="btn btn-primary me-2"
                                                                        href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                        class="btn btn-primary"
                                                                        href="{{ route('admin.product_page') }}">View Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                        <h4>Red Blazer For Winter</h4>
                                    </a>
                                    <p class="pro-detail">Womens's Red Winter Collection Blazer.</p>
                                    <p class="product-title">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry&apos;s standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen
                                        book
                                    </p>
                                    <div class="product-price"><span>$36.00</span>
                                        <del>$35.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div class="ribbon ribbon-danger">sale</div><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/07.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter7"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-modal modal fade" id="exampleModalCenter7">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/07.jpg') }}"
                                                            alt=""></div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                                                <h4>Men Formal Wear</h4>
                                                            </a>
                                                            <div class="product-price"><span>$60.00</span>
                                                                <del>$63.00</del>
                                                            </div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-600">Product Details</h6>
                                                                <p class="mb-0">Full Sleeves Latest Jacket for Men With
                                                                    Button Closure Long Sleeve Casual Torn Lycra Denim
                                                                    Jacket.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul>
                                                                    <li>
                                                                        <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-600">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper">
                                                                        <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus"> </i></button>
                                                                        <input class="input-touchspin spin-outline-primary"
                                                                            type="number" value="5">
                                                                        <button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"> </i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div class="addcart-btn"><a class="btn btn-primary me-2"
                                                                        href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                        class="btn btn-primary"
                                                                        href="{{ route('admin.product_page') }}">View Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                        <h4>Men Formal Wear</h4>
                                    </a>
                                    <p class="pro-detail">Men's Business Formal Suit Wear.</p>
                                    <p class="product-title">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry&apos;s standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen
                                        book
                                    </p>
                                    <div class="product-price"><span>$60.00</span>
                                        <del>$63.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div></div><img class="img-fluid" src="{{ asset('assets/images/ecommerce/08.jpg') }}"
                                        alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter8"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-modal modal fade" id="exampleModalCenter8">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/08.jpg') }}"
                                                            alt=""></div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                                                <h4>Men's Formal Shirt</h4>
                                                            </a>
                                                            <div class="product-price"><span>$78.00</span>
                                                                <del>$95.00</del>
                                                            </div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-600">Product Details</h6>
                                                                <p class="mb-0">Ravaiyaa - Attitude is everything Cotton
                                                                    Men's Formal One Top Shirt.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul>
                                                                    <li>
                                                                        <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-600">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper">
                                                                        <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus"> </i></button>
                                                                        <input class="input-touchspin spin-outline-primary"
                                                                            type="number" value="5">
                                                                        <button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"> </i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div class="addcart-btn"><a class="btn btn-primary me-2"
                                                                        href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                        class="btn btn-primary"
                                                                        href="{{ route('admin.product_page') }}">View Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                        <h4>Men's Formal Shirt</h4>
                                    </a>
                                    <p class="pro-detail">Gray Denim Regular Men's Denim Shirt.</p>
                                    <p class="product-title">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry&apos;s standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen
                                        book
                                    </p>
                                    <div class="product-price"><span>$78.00</span>
                                        <del>$95.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div></div><img class="img-fluid" src="{{ asset('assets/images/ecommerce/04.jpg') }}"
                                        alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter9"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-modal modal fade" id="exampleModalCenter9">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/04.jpg') }}"
                                                            alt=""></div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                                                <h4>Denim Jacket</h4>
                                                            </a>
                                                            <div class="product-price"><span>$85.00</span>
                                                                <del>$90.00</del>
                                                            </div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-600">Product Details</h6>
                                                                <p class="mb-0">Rock Paper Scissors Womens Tank Top High
                                                                    Neck Cotton Top Stylish Women Top..</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul>
                                                                    <li>
                                                                        <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-600">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper">
                                                                        <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus"> </i></button>
                                                                        <input class="input-touchspin spin-outline-primary"
                                                                            type="number" value="5">
                                                                        <button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"> </i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div class="addcart-btn"><a class="btn btn-primary me-2"
                                                                        href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                        class="btn btn-primary"
                                                                        href="{{ route('admin.product_page') }}">View Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                        <h4>Denim Jacket</h4>
                                    </a>
                                    <p class="pro-detail">Men's Regular Blue Denim Jacket.</p>
                                    <p class="product-title">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry&apos;s standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen
                                        book
                                    </p>
                                    <div class="product-price"><span>$85.00</span>
                                        <del>$90.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div class="ribbon ribbon-success ribbon-right">50%</div><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/03.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter10"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-modal modal fade" id="exampleModalCenter10">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                                                            alt=""></div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                                                <h4>Black, White Dress</h4>
                                                            </a>
                                                            <div class="product-price"><span>$38.00</span>
                                                                <del>$45.00</del>
                                                            </div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-600">Product Details</h6>
                                                                <p class="mb-0">Symbol Men's Solid Regular Fit Full
                                                                    Sleeve Formal Shirt, Cotton Regular Fit Men's Casual
                                                                    Shirt.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul>
                                                                    <li>
                                                                        <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-600">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper">
                                                                        <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus"> </i></button>
                                                                        <input class="input-touchspin spin-outline-primary"
                                                                            type="number" value="5">
                                                                        <button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"> </i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div class="addcart-btn"><a class="btn btn-primary me-2"
                                                                        href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                        class="btn btn-primary"
                                                                        href="{{ route('admin.product_page') }}">View Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                        <h4>Black, White Dress</h4>
                                    </a>
                                    <p class="pro-detail">White Cotton Regular Fabric Fit Dress</p>
                                    <p class="product-title">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry&apos;s standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen
                                        book
                                    </p>
                                    <div class="product-price"><span>$38.00</span>
                                        <del>$45.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div></div><img class="img-fluid" src="{{ asset('assets/images/ecommerce/02.jpg') }}"
                                        alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter11"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-modal modal fade" id="exampleModalCenter11">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/02.jpg') }}"
                                                            alt=""></div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                                                <h4>Men's Jacket</h4>
                                                            </a>
                                                            <div class="product-price"><span>$96.00</span>
                                                                <del>$35.00</del>
                                                            </div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-600">Product Details</h6>
                                                                <p class="mb-0">Womens Tank Top High Neck Cotton Top
                                                                    Stylish Women Top..</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul>
                                                                    <li>
                                                                        <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-600">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper">
                                                                        <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus"> </i></button>
                                                                        <input class="input-touchspin spin-outline-primary"
                                                                            type="number" value="5">
                                                                        <button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"> </i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div class="addcart-btn"><a class="btn btn-primary me-2"
                                                                        href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                        class="btn btn-primary"
                                                                        href="{{ route('admin.product_page') }}">View Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                        <h4>Men's Jacket</h4>
                                    </a>
                                    <p class="pro-detail">Regular Flare Fit men's white Top</p>
                                    <p class="product-title">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry&apos;s standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen
                                        book
                                    </p>
                                    <div class="product-price"><span>$96.00</span>
                                        <del>$35.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div class="ribbon ribbon-danger">sale</div><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/01.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter12"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-modal modal fade" id="exampleModalCenter12">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/01.jpg') }}"
                                                            alt=""></div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                                                <h4>Women's Top</h4>
                                                            </a>
                                                            <div class="product-price"><span>$70.00</span>
                                                                <del>$45.00</del>
                                                            </div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-600">Product Details</h6>
                                                                <p class="mb-0">Full Sleeves Latest Jacket for Men With
                                                                    Button Closure Long Sleeve Casual Torn Lycra Denim
                                                                    Jacket.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul>
                                                                    <li>
                                                                        <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn"
                                                                            type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-600">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper">
                                                                        <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus"> </i></button>
                                                                        <input
                                                                            class="input-touchspin spin-outline-primary"
                                                                            type="number" value="5">
                                                                        <button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"> </i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div class="addcart-btn"><a class="btn btn-primary me-2"
                                                                        href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                        class="btn btn-primary"
                                                                        href="{{ route('admin.product_page') }}">View Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                        <h4>Women's Top</h4>
                                    </a>
                                    <p class="pro-detail">Regular Flare Fit Women's white Top</p>
                                    <p class="product-title">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry&apos;s standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen
                                        book
                                    </p>
                                    <div class="product-price"><span>$70.00</span>
                                        <del>$45.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div class="ribbon ribbon-danger">sale</div><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/08.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter13"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-modal modal fade" id="exampleModalCenter13">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/08.jpg') }}"
                                                            alt=""></div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                                                <h4>Men's Formal Shirt</h4>
                                                            </a>
                                                            <div class="product-price"><span>$80.00</span>
                                                                <del>$100.00</del>
                                                            </div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-600">Product Details</h6>
                                                                <p class="mb-0">Full Sleeves Latest Jacket for Men With
                                                                    Button Closure Long Sleeve Casual Torn Lycra Denim
                                                                    Jacket.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul>
                                                                    <li>
                                                                        <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn"
                                                                            type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-600">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper">
                                                                        <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus"> </i></button>
                                                                        <input
                                                                            class="input-touchspin spin-outline-primary"
                                                                            type="number" value="5">
                                                                        <button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"> </i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div class="addcart-btn"><a class="btn btn-primary me-2"
                                                                        href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                        class="btn btn-primary"
                                                                        href="{{ route('admin.product_page') }}">View Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                        <h4>Men's Formal Shirt</h4>
                                    </a>
                                    <p class="pro-detail">Gray Denim Regular Men's Denim Shirt.</p>
                                    <p class="product-title">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry&apos;s standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen
                                        book
                                    </p>
                                    <div class="product-price"><span>$80.00</span>
                                        <del>$100.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div></div><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/07.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter14"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-modal modal fade" id="exampleModalCenter14">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/07.jpg') }}"
                                                            alt=""></div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                                                <h4>Men Formal Wear</h4>
                                                            </a>
                                                            <div class="product-price"><span>$55.00</span>
                                                                <del>$60.00</del>
                                                            </div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-600">Product Details</h6>
                                                                <p class="mb-0">Ravaiyaa - Attitude is everything Cotton
                                                                    Women's Dresses One Top Button T-Shirt.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul>
                                                                    <li>
                                                                        <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn"
                                                                            type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-600">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper">
                                                                        <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus"> </i></button>
                                                                        <input
                                                                            class="input-touchspin spin-outline-primary"
                                                                            type="number" value="5">
                                                                        <button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"> </i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div class="addcart-btn"><a class="btn btn-primary me-2"
                                                                        href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                        class="btn btn-primary"
                                                                        href="{{ route('admin.product_page') }}">View Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                        <h4>Men Formal Wear</h4>
                                    </a>
                                    <p class="pro-detail">Men's Business Formal Suit Wear.</p>
                                    <p class="product-title">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry&apos;s standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen
                                        book
                                    </p>
                                    <div class="product-price"><span>$55.00</span>
                                        <del>$60.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div class="ribbon ribbon-success ribbon-right">50%</div><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/06.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter15"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-modal modal fade" id="exampleModalCenter15">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/06.jpg') }}"
                                                            alt=""></div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                                                <h4>Red Blazer For Winter</h4>
                                                            </a>
                                                            <div class="product-price"><span>$38.00</span>
                                                                <del>$45.00</del>
                                                            </div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-600">Product Details</h6>
                                                                <p class="mb-0">Lorate Solid Men's Fashion Full Sleeves
                                                                    Latest Jacket for Men With Button Closure Long Sleeve
                                                                    Casual Torn Lycra Denim Jacket.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul>
                                                                    <li>
                                                                        <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn"
                                                                            type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-600">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper">
                                                                        <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus"> </i></button>
                                                                        <input
                                                                            class="input-touchspin spin-outline-primary"
                                                                            type="number" value="5">
                                                                        <button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"> </i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div class="addcart-btn"><a class="btn btn-primary me-2"
                                                                        href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                        class="btn btn-primary"
                                                                        href="{{ route('admin.product_page') }}">View Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                        <h4>Red Blazer For Winter</h4>
                                    </a>
                                    <p class="pro-detail">Womens's Red Winter Collection Blazer.</p>
                                    <p class="product-title">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry&apos;s standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen
                                        book
                                    </p>
                                    <div class="product-price"><span>$38.00</span>
                                        <del>$45.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div></div><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/05.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a href="{{ route('admin.cart') }}"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter16"><i
                                                        class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-modal modal fade" id="exampleModalCenter16">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/05.jpg') }}"
                                                            alt=""></div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                                                <h4>Black, White Dress.</h4>
                                                            </a>
                                                            <div class="product-price"><span>$45.00</span>
                                                                <del>$35.00</del>
                                                            </div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-600">Product Details</h6>
                                                                <p class="mb-0">Rock Paper Scissors Women Tank Top High
                                                                    Neck Cotton Top Stylish Women Top..</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul>
                                                                    <li>
                                                                        <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn"
                                                                            type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-600">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper">
                                                                        <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus"> </i></button>
                                                                        <input
                                                                            class="input-touchspin spin-outline-primary"
                                                                            type="number" value="5">
                                                                        <button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"> </i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div class="addcart-btn"><a class="btn btn-primary me-2"
                                                                        href="{{ route('admin.cart') }}">Add to Cart</a><a
                                                                        class="btn btn-primary"
                                                                        href="{{ route('admin.product_page') }}">View Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details"><a href="{{ route('admin.product_page') }}">
                                        <h4>Black, White Dress.</h4>
                                    </a>
                                    <p class="pro-detail">Women's Black &amp; White Collection Dress.</p>
                                    <p class="product-title">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry&apos;s standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen
                                        book
                                    </p>
                                    <div class="product-price"><span>$45.00</span>
                                        <del>$35.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal menu-->
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/vendors/range-slider/rSlider.min.js') }}"></script>
    <script src="{{ asset('assets/js/rangeslider/rangeslider.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/product/product-tab.js') }}"></script>
    <script src="{{ asset('assets/js/product/custom-product.js') }}"></script>
@endsection
