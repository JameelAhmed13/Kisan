@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Cart</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active">Cart</li>
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
                        <h4>Cart</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="order-history table-responsive wishlist">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Prdouct</th>
                                            <th>Prdouct Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Action</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="img-fluid img-40"
                                                    src="{{ asset('assets/images/product/1.png') }}" alt="#"></td>
                                            <td>
                                                <div class="product-name"><a href="{{ route('admin.product_page') }}">Long Top</a>
                                                </div>
                                            </td>
                                            <td>$21</td>
                                            <td>
                                                <div class="touchspin-wrapper">
                                                    <button class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                            class="fa fa-minus"> </i></button>
                                                    <input class="input-touchspin spin-outline-primary" type="number"
                                                        value="5">
                                                    <button class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                            class="fa fa-plus"> </i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <svg class="feather stroke-danger">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x-circle') }}">
                                                    </use>
                                                </svg>
                                            </td>
                                            <td>$12456</td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid img-40"
                                                    src="{{ asset('assets/images/product/13.png') }}" alt="#"></td>
                                            <td>
                                                <div class="product-name"><a href="{{ route('admin.product_page') }}">Fancy
                                                        watch</a></div>
                                            </td>
                                            <td>$50</td>
                                            <td>
                                                <div class="touchspin-wrapper">
                                                    <button class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                            class="fa fa-minus"> </i></button>
                                                    <input class="input-touchspin spin-outline-primary" type="number"
                                                        value="5">
                                                    <button class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                            class="fa fa-plus"> </i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <svg class="feather stroke-danger">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x-circle') }}">
                                                    </use>
                                                </svg>
                                            </td>
                                            <td>$12456</td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid img-40"
                                                    src="{{ asset('assets/images/product/4.png') }}" alt="#"></td>
                                            <td>
                                                <div class="product-name"><a href="{{ route('admin.product_page') }}">Man
                                                        shoes</a></div>
                                            </td>
                                            <td>$11</td>
                                            <td>
                                                <div class="touchspin-wrapper">
                                                    <button class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                            class="fa fa-minus"> </i></button>
                                                    <input class="input-touchspin spin-outline-primary" type="number"
                                                        value="5">
                                                    <button class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                            class="fa fa-plus"> </i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <svg class="feather stroke-danger">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#x-circle') }}">
                                                    </use>
                                                </svg>
                                            </td>
                                            <td>$12456</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <div class="input-group">
                                                    <input class="form-control me-2" type="text"
                                                        placeholder="Enter coupan code"><a class="btn btn-primary"
                                                        href="javascript:void(0)">Apply</a>
                                                </div>
                                            </td>
                                            <td class="total-amount">
                                                <h6 class="m-0 text-end"><span class="f-w-600">Total Price :</span></h6>
                                            </td>
                                            <td><span>$6935.00 </span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-end" colspan="5"><a
                                                    class="btn btn-secondary cart-btn-transform"
                                                    href="{{ route('admin.product') }}">continue shopping</a></td>
                                            <td><a class="btn btn-success cart-btn-transform" href="{{ route('admin.checkout') }}">check
                                                    out</a></td>
                                        </tr>
                                    </tbody>
                                </table>
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
