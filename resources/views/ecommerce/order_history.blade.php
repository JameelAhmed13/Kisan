@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/simple-datatables/dist/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Recent Orders</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active">Recent Orders</li>
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
                        <h4>New Orders</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                    </div>
                    <div class="card-body">
                        <div class="row g-sm-4 g-3">
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-6.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-primary" href="#">Processing</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-5.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-primary" href="#">Processing</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-4.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-primary" href="#">Processing</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-3.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-primary" href="#">Processing</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-2.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-primary" href="#">Processing</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-1.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-primary" href="#">Processing</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-1.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-primary" href="#">Processing</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-6.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-primary" href="#">Processing</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-5.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-primary" href="#">Processing</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Shipped Orders</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                    </div>
                    <div class="card-body">
                        <div class="row g-sm-4 g-3">
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-6.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-success" href="#">Shipped</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-5.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-success" href="#">Shipped</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-4.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-success" href="#">Shipped</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-3.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-success" href="#">Shipped</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-2.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-success" href="#">Shipped</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-1.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-success" href="#">Shipped</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-1.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-success" href="#">Shipped</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-6.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-success" href="#">Shipped</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-5.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-success" href="#">Shipped</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Cancelled Orders</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                    </div>
                    <div class="card-body">
                        <div class="row g-sm-4 g-3">
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-6.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-danger" href="#">Processing</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-5.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-danger" href="#">Cancelled</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-4.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-danger" href="#">Cancelled</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-3.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-danger" href="#">Cancelled</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-2.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-danger" href="#">Cancelled</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-1.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-danger" href="#">Cancelled</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-1.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-danger" href="#">Cancelled</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-6.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-danger" href="#">Cancelled</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="d-flex gap-3"><img class="align-self-center img-fluid img-60"
                                            src="{{ asset('assets/images/ecommerce/product-table-5.png') }}" alt="">
                                        <div class="flex-grow-1">
                                            <div class="product-name">
                                                <h6><a href="#">Women Top</a></h6>
                                            </div>
                                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div>
                                            <div class="price">
                                                <div class="text-muted me-2">Price</div>: 210$
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">In stock</div>
                                            </div><a class="btn btn-xs btn-danger" href="#">Cancelled</a>
                                            <svg class="feather close">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <!-- Invoice menu-->
                <div class="card">
                    <div class="card-header">
                        <h4>Datatable order history</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                    </div>
                    <div class="card-body">
                        <div class="order-history table-responsive">
                            <table class="table table-bordernone display" id="basic-3">
                                <thead>
                                    <tr>
                                        <th scope="col">Prdouct</th>
                                        <th scope="col">Prdouct name</th>
                                        <th scope="col">Size</th>
                                        <th scope="col">Color</th>
                                        <th scope="col">Article number</th>
                                        <th scope="col">Units</th>
                                        <th scope="col">Price</th>
                                        <th scope="col"><i class="fa fa-angle-down"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img class="img-30" src="{{ asset('assets/images/product/1.png') }}" alt=""></td>
                                        <td>
                                            <div class="product-name"><a href="javascript:void(0)">Long Top</a>
                                                <div class="order-process"><span
                                                        class="order-process-circle">Processing</span></div>
                                            </div>
                                        </td>
                                        <td>M</td>
                                        <td>Lavander</td>
                                        <td>4215738</td>
                                        <td>1</td>
                                        <td>$21</td>
                                        <td>
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-vertical') }}">
                                                </use>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-30" src="{{ asset('assets/images/product/2.png') }}" alt=""></td>
                                        <td>
                                            <div class="product-name"><a href="javascript:void(0)">Fancy watch</a>
                                                <div class="order-process"><span
                                                        class="order-process-circle">Processing</span></div>
                                            </div>
                                        </td>
                                        <td>35mm</td>
                                        <td>Blue</td>
                                        <td>5476182</td>
                                        <td>1</td>
                                        <td>$10</td>
                                        <td>
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-vertical') }}">
                                                </use>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-30" src="{{ asset('assets/images/product/3.png') }}" alt=""></td>
                                        <td>
                                            <div class="product-name"><a href="javascript:void(0)">Man shoes</a>
                                                <div class="order-process"><span
                                                        class="order-process-circle">Processing</span></div>
                                            </div>
                                        </td>
                                        <td>8</td>
                                        <td>Black &amp; white</td>
                                        <td> 1756457</td>
                                        <td>1</td>
                                        <td>$18</td>
                                        <td>
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-vertical') }}">
                                                </use>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-30" src="{{ asset('assets/images/product/4.png') }}" alt=""></td>
                                        <td>
                                            <div class="product-name"><a href="javascript:void(0)">Ledis side bag</a>
                                                <div class="order-process"><span
                                                        class="order-process-circle shipped-order">Shipped</span></div>
                                            </div>
                                        </td>
                                        <td>22cm x 18cm</td>
                                        <td>Brown</td>
                                        <td>7451725</td>
                                        <td>1</td>
                                        <td>$13</td>
                                        <td>
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-vertical') }}">
                                                </use>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-30" src="{{ asset('assets/images/product/10.png') }}" alt="">
                                        </td>
                                        <td>
                                            <div class="product-name"><a href="javascript:void(0)">Ledis Slipper</a>
                                                <div class="order-process"><span
                                                        class="order-process-circle shipped-order">Shipped</span></div>
                                            </div>
                                        </td>
                                        <td>6</td>
                                        <td>Brown &amp; white</td>
                                        <td>4127421</td>
                                        <td>1</td>
                                        <td>$6</td>
                                        <td>
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-vertical') }}">
                                                </use>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-30" src="{{ asset('assets/images/product/11.png') }}" alt="">
                                        </td>
                                        <td>
                                            <div class="product-name"><a href="javascript:void(0)">Fancy ledis Jacket</a>
                                                <div class="order-process"><span
                                                        class="order-process-circle shipped-order">Shipped</span></div>
                                            </div>
                                        </td>
                                        <td>Xl</td>
                                        <td>Light gray</td>
                                        <td>3581714</td>
                                        <td>1</td>
                                        <td>$24</td>
                                        <td>
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-vertical') }}">
                                                </use>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-30" src="{{ asset('assets/images/product/12.png') }}" alt="">
                                        </td>
                                        <td>
                                            <div class="product-name"><a href="javascript:void(0)">Ledis Handbagp</a>
                                                <div class="order-process"><span
                                                        class="order-process-circle shipped-order">Shipped</span></div>
                                            </div>
                                        </td>
                                        <td>25cm x 20cm</td>
                                        <td>Black</td>
                                        <td>6748142</td>
                                        <td>1</td>
                                        <td>$14</td>
                                        <td>
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-vertical') }}">
                                                </use>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-30" src="{{ asset('assets/images/product/13.png') }}" alt="">
                                        </td>
                                        <td>
                                            <div class="product-name"><a href="javascript:void(0)">Iphone6 mobile</a>
                                                <div class="order-process"><span
                                                        class="order-process-circle cancel-order">Cancelled</span></div>
                                            </div>
                                        </td>
                                        <td>10cm x 15cm</td>
                                        <td>black</td>
                                        <td>5748214</td>
                                        <td>1</td>
                                        <td>$25</td>
                                        <td>
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-vertical') }}">
                                                </use>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-30" src="{{ asset('assets/images/product/14.png') }}" alt="">
                                        </td>
                                        <td>
                                            <div class="product-name"><a href="javascript:void(0)">Watch</a>
                                                <div class="order-process"><span
                                                        class="order-process-circle cancel-order">Cancelle</span></div>
                                            </div>
                                        </td>
                                        <td>27mm</td>
                                        <td>Brown</td>
                                        <td>2471254</td>
                                        <td>1</td>
                                        <td>$12</td>
                                        <td>
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-vertical') }}">
                                                </use>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-30" src="{{ asset('assets/images/product/15.png') }}" alt="">
                                        </td>
                                        <td>
                                            <div class="product-name"><a href="javascript:void(0)">Slipper</a>
                                                <div class="order-process"><span
                                                        class="order-process-circle cancel-order">Cancelle</span></div>
                                            </div>
                                        </td>
                                        <td>6</td>
                                        <td>Blue</td>
                                        <td>8475112</td>
                                        <td>1</td>
                                        <td>$6</td>
                                        <td>
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-vertical') }}">
                                                </use>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-30" src="{{ asset('assets/images/product/10.png') }}" alt="">
                                        </td>
                                        <td>
                                            <div class="product-name"><a href="javascript:void(0)">Slipper</a>
                                                <div class="order-process"><span
                                                        class="order-process-circle cancel-order">Cancelle</span></div>
                                            </div>
                                        </td>
                                        <td>6</td>
                                        <td>Blue</td>
                                        <td>8475112</td>
                                        <td>1</td>
                                        <td>$6</td>
                                        <td>
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-vertical') }}">
                                                </use>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-30" src="{{ asset('assets/images/product/14.png') }}" alt="">
                                        </td>
                                        <td>
                                            <div class="product-name"><a href="javascript:void(0)">Watch</a>
                                                <div class="order-process"><span
                                                        class="order-process-circle cancel-order">Cancelle</span></div>
                                            </div>
                                        </td>
                                        <td>27mm</td>
                                        <td>Brown</td>
                                        <td>2471254</td>
                                        <td>1</td>
                                        <td>$12</td>
                                        <td>
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-vertical') }}">
                                                </use>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-30" src="{{ asset('assets/images/product/13.png') }}" alt="">
                                        </td>
                                        <td>
                                            <div class="product-name"><a href="javascript:void(0)">Iphone6 mobile</a>
                                                <div class="order-process"><span
                                                        class="order-process-circle cancel-order">Cancelled</span></div>
                                            </div>
                                        </td>
                                        <td>10cm x 15cm</td>
                                        <td>black</td>
                                        <td>5748214</td>
                                        <td>1</td>
                                        <td>$25</td>
                                        <td>
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-vertical') }}">
                                                </use>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-30" src="{{ asset('assets/images/product/12.png') }}" alt="">
                                        </td>
                                        <td>
                                            <div class="product-name"><a href="javascript:void(0)">Ledis Handbagp</a>
                                                <div class="order-process"><span
                                                        class="order-process-circle shipped-order">Shipped</span></div>
                                            </div>
                                        </td>
                                        <td>25cm x 20cm</td>
                                        <td>Black</td>
                                        <td>6748142</td>
                                        <td>1</td>
                                        <td>$14</td>
                                        <td>
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-vertical') }}">
                                                </use>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-30" src="{{ asset('assets/images/product/11.png') }}" alt="">
                                        </td>
                                        <td>
                                            <div class="product-name"><a href="javascript:void(0)">Fancy ledis Jacket</a>
                                                <div class="order-process"><span
                                                        class="order-process-circle shipped-order">Shipped</span></div>
                                            </div>
                                        </td>
                                        <td>Xl</td>
                                        <td>Light gray</td>
                                        <td>3581714</td>
                                        <td>1</td>
                                        <td>$24</td>
                                        <td>
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-vertical') }}">
                                                </use>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-30" src="{{ asset('assets/images/product/15.png') }}" alt="">
                                        </td>
                                        <td>
                                            <div class="product-name"><a href="javascript:void(0)">Ledis Slipper</a>
                                                <div class="order-process"><span
                                                        class="order-process-circle shipped-order">Shipped</span></div>
                                            </div>
                                        </td>
                                        <td>6</td>
                                        <td>Brown &amp; white</td>
                                        <td>4127421</td>
                                        <td>1</td>
                                        <td>$6</td>
                                        <td>
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-vertical') }}">
                                                </use>
                                            </svg>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/vendors/simple-datatables/dist/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/js/product/product-list-custom.js') }}"></script>
    <script src="{{ asset('assets/js/product/custom-order-product.js') }}"></script>
@endsection