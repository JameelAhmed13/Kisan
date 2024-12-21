@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Wishlist</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active">Wishlist</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"></div>
            <div class="card">
                <div class="card-header pb-0">
                    <h4>Wishlist</h4>
                    <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                </div>
                <div class="card-body whishlist-main">
                    <div class="row">
                        <!-- Product menu-->
                        <div class="col-xl-2 col-md-4 col-sm-6 col-lg-3">
                            <div class="prooduct-details-box">
                                <div class="d-block"><a href="{{ route('admin.product_page') }}"><img
                                            class="align-self-center img-fluid"
                                            src="{{ asset('assets/images/ecommerce/01.jpg') }}" alt=""></a>
                                    <div class="flex-grow-1">
                                        <div class="product-name"><a href="{{ route('admin.product_page') }}">
                                                <h6>Women's Top</h6>
                                            </a></div>
                                        <div class="rating"><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="price">Price <span>: 220$</span></div>
                                        <div class="avaiabilty">
                                            <div class="font-success">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="{{ route('admin.cart') }}">Move to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6 col-lg-3">
                            <div class="prooduct-details-box">
                                <div class="d-block"><a href="{{ route('admin.product_page') }}"><img
                                            class="align-self-center img-fluid"
                                            src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt=""></a>
                                    <div class="flex-grow-1">
                                        <div class="product-name"><a href="{{ route('admin.product_page') }}">
                                                <h6>Men's Jacket</h6>
                                            </a></div>
                                        <div class="rating"><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                                        </div>
                                        <div class="price">Price <span>: 220$</span></div>
                                        <div class="avaiabilty">
                                            <div class="font-danger">Out of stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="{{ route('admin.cart') }}">Move to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6 col-lg-3">
                            <div class="prooduct-details-box">
                                <div class="d-block"><a href="{{ route('admin.product_page') }}"><img
                                            class="align-self-center img-fluid"
                                            src="{{ asset('assets/images/ecommerce/03.jpg') }}" alt=""></a>
                                    <div class="flex-grow-1">
                                        <div class="product-name"><a href="{{ route('admin.product_page') }}">
                                                <h6>Women's T-shirt</h6>
                                            </a></div>
                                        <div class="rating"><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="price">Price <span>: 220$</span></div>
                                        <div class="avaiabilty">
                                            <div class="font-danger">Out of stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="{{ route('admin.cart') }}">Move to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6 col-lg-3">
                            <div class="prooduct-details-box">
                                <div class="d-block"><a href="{{ route('admin.product_page') }}"><img
                                            class="align-self-center img-fluid"
                                            src="{{ asset('assets/images/ecommerce/04.jpg') }}" alt=""></a>
                                    <div class="flex-grow-1">
                                        <div class="product-name"><a href="{{ route('admin.product_page') }}">
                                                <h6>Denim Jacket</h6>
                                            </a></div>
                                        <div class="rating"><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                                        </div>
                                        <div class="price">Price <span>: 220$</span></div>
                                        <div class="avaiabilty">
                                            <div class="font-success">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="{{ route('admin.cart') }}">Move to
                                            Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6 col-lg-3">
                            <div class="prooduct-details-box">
                                <div class="d-block"><a href="{{ route('admin.product_page') }}"><img
                                            class="align-self-center img-fluid"
                                            src="{{ asset('assets/images/ecommerce/05.jpg') }}" alt=""></a>
                                    <div class="flex-grow-1">
                                        <div class="product-name"><a href="{{ route('admin.product_page') }}">
                                                <h6>Women's Dress</h6>
                                            </a></div>
                                        <div class="rating"><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
                                        </div>
                                        <div class="price">Price <span>: 220$</span></div>
                                        <div class="avaiabilty">
                                            <div class="font-danger">Out of stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="{{ route('admin.cart') }}">Move to
                                            Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6 col-lg-3">
                            <div class="prooduct-details-box">
                                <div class="d-block"><a href="{{ route('admin.product_page') }}"><img
                                            class="align-self-center img-fluid"
                                            src="{{ asset('assets/images/ecommerce/06.jpg') }}" alt=""></a>
                                    <div class="flex-grow-1">
                                        <div class="product-name"><a href="{{ route('admin.product_page') }}">
                                                <h6>Women's Jacket</h6>
                                            </a></div>
                                        <div class="rating"><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="price">Price <span>: 220$</span></div>
                                        <div class="avaiabilty">
                                            <div class="font-success">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="{{ route('admin.cart') }}">Move to
                                            Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6 col-lg-3">
                            <div class="prooduct-details-box">
                                <div class="d-block"><a href="{{ route('admin.product_page') }}"><img
                                            class="align-self-center img-fluid"
                                            src="{{ asset('assets/images/ecommerce/07.jpg') }}" alt=""></a>
                                    <div class="flex-grow-1">
                                        <div class="product-name"><a href="{{ route('admin.product_page') }}">
                                                <h6>Men's Shirt</h6>
                                            </a></div>
                                        <div class="rating"><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                                        </div>
                                        <div class="price">Price <span>: 220$</span></div>
                                        <div class="avaiabilty">
                                            <div class="font-danger">Out of stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="{{ route('admin.cart') }}">Move to
                                            Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6 col-lg-3">
                            <div class="prooduct-details-box">
                                <div class="d-block"><a href="{{ route('admin.product_page') }}"><img
                                            class="align-self-center img-fluid"
                                            src="{{ asset('assets/images/ecommerce/08.jpg') }}" alt=""></a>
                                    <div class="flex-grow-1">
                                        <div class="product-name"><a href="{{ route('admin.product_page') }}">
                                                <h6>Men's Shirt</h6>
                                            </a></div>
                                        <div class="rating"><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                                        </div>
                                        <div class="price">Price <span>: 220$</span></div>
                                        <div class="avaiabilty">
                                            <div class="font-success">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="{{ route('admin.cart') }}">Move to
                                            Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6 col-lg-3">
                            <div class="prooduct-details-box">
                                <div class="d-block"><a href="{{ route('admin.product_page') }}"><img
                                            class="align-self-center img-fluid"
                                            src="{{ asset('assets/images/ecommerce/05.jpg') }}" alt=""></a>
                                    <div class="flex-grow-1">
                                        <div class="product-name"><a href="{{ route('admin.product_page') }}">
                                                <h6>Women's Dress</h6>
                                            </a></div>
                                        <div class="rating"><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
                                        </div>
                                        <div class="price">Price <span>: 220$</span></div>
                                        <div class="avaiabilty">
                                            <div class="font-danger">Out of stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="{{ route('admin.cart') }}">Move to
                                            Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6 col-lg-3">
                            <div class="prooduct-details-box">
                                <div class="d-block"><a href="{{ route('admin.product_page') }}"><img
                                            class="align-self-center img-fluid"
                                            src="{{ asset('assets/images/ecommerce/04.jpg') }}" alt=""></a>
                                    <div class="flex-grow-1">
                                        <div class="product-name"><a href="{{ route('admin.product_page') }}">
                                                <h6>Denim Jacket</h6>
                                            </a></div>
                                        <div class="rating"><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="price">Price <span>: 220$</span></div>
                                        <div class="avaiabilty">
                                            <div class="font-danger">Out of stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="{{ route('admin.cart') }}">Move to
                                            Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6 col-lg-3">
                            <div class="prooduct-details-box">
                                <div class="d-block"><a href="{{ route('admin.product_page') }}"><img
                                            class="align-self-center img-fluid"
                                            src="{{ asset('assets/images/ecommerce/03.jpg') }}" alt=""></a>
                                    <div class="flex-grow-1">
                                        <div class="product-name"><a href="{{ route('admin.product_page') }}">
                                                <h6>Women's T-shirt</h6>
                                            </a></div>
                                        <div class="rating"><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                                        </div>
                                        <div class="price">Price <span>: 220$</span></div>
                                        <div class="avaiabilty">
                                            <div class="font-success">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="{{ route('admin.cart') }}">Move to
                                            Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6 col-lg-3">
                            <div class="prooduct-details-box">
                                <div class="d-block"><a href="{{ route('admin.product_page') }}"><img
                                            class="align-self-center img-fluid"
                                            src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt=""></a>
                                    <div class="flex-grow-1">
                                        <div class="product-name"><a href="{{ route('admin.product_page') }}">
                                                <h6>Men's Jacket</h6>
                                            </a></div>
                                        <div class="rating"><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
                                        </div>
                                        <div class="price">Price <span>: 220$</span></div>
                                        <div class="avaiabilty">
                                            <div class="font-danger">Out of stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="{{ route('admin.cart') }}">Move to
                                            Cart</a>
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
@endsection
