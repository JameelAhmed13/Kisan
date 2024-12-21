@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Pricing</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">ECommerce</li>
                        <li class="breadcrumb-item active">Pricing</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid range-slider">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Become member</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                    </div>
                    <div class="card-body">
                        <div class="row pricing-block">
                            <div class="col-lg-3 col-md-6">
                                <div class="pricingtable">
                                    <div class="pricingtable-header">
                                        <h3 class="title">Standard</h3>
                                    </div>
                                    <div class="price-value"><span class="currency">$</span><span class="amount">10</span><span
                                            class="duration">/mo</span></div>
                                    <ul class="pricing-content">
                                        <li>50GB Disk Space</li>
                                        <li>50 Email Accounts</li>
                                        <li>Maintenance</li>
                                        <li>15 Subdomains</li>
                                    </ul>
                                    <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="#">Sign
                                            Up</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="pricingtable">
                                    <div class="pricingtable-header">
                                        <h3 class="title">Premium</h3>
                                    </div>
                                    <div class="price-value"><span class="currency">$</span><span class="amount">20</span><span
                                            class="duration">/mo</span></div>
                                    <ul class="pricing-content">
                                        <li>10% on all product</li>
                                        <li>50 Email Accounts</li>
                                        <li>Maintenance</li>
                                        <li>15 Subdomains</li>
                                    </ul>
                                    <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="#">Sign
                                            Up</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="pricingtable">
                                    <div class="pricingtable-header">
                                        <h3 class="title">Auther pack</h3>
                                    </div>
                                    <div class="price-value"><span class="currency">$</span><span class="amount">75</span><span
                                            class="duration">/mo</span></div>
                                    <ul class="pricing-content">
                                        <li>Upload 75 product</li>
                                        <li>75 Email Accounts</li>
                                        <li>Maintenance</li>
                                        <li>15 Subdomains</li>
                                    </ul>
                                    <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="#">Sign
                                            Up</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="pricingtable">
                                    <div class="pricingtable-header">
                                        <h3 class="title">Auther pack</h3>
                                    </div>
                                    <div class="price-value"><span class="currency">$</span><span class="amount">50</span><span
                                            class="duration">/mo</span></div>
                                    <ul class="pricing-content">
                                        <li>Upload 50 product</li>
                                        <li>50 Email Accounts</li>
                                        <li>Maintenance</li>
                                        <li>15 Subdomains</li>
                                    </ul>
                                    <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="#">Sign
                                            Up</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Simple Pricing Card</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                    </div>
                    <div class="card-body pricing-content">
                        <div class="row g-sm-4 g-3">
                            <div class="col-xl-3 col-sm-6 xl-50 box-col-6">
                                <div class="card text-center pricing-simple">
                                    <div class="card-body">
                                        <h3>Standard</h3>
                                        <h2>$15</h2>
                                        <h6 class="mb-0">Standard Plan</h6>
                                    </div><a class="btn btn-lg btn-primary btn-block" href="#">Purchase</a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 xl-50 box-col-6">
                                <div class="card text-center pricing-simple">
                                    <div class="card-body">
                                        <h3>Business</h3>
                                        <h2>$25</h2>
                                        <h6 class="mb-0">Business Plan</h6>
                                    </div><a class="btn btn-lg btn-primary btn-block" href="#">Purchase</a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 xl-50 box-col-6">
                                <div class="card text-center pricing-simple">
                                    <div class="card-body">
                                        <h3>Premium</h3>
                                        <h2>$35</h2>
                                        <h6 class="mb-0">Premium Plan</h6>
                                    </div><a class="btn btn-lg btn-primary btn-block" href="#">Purchase</a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 xl-50 box-col-6">
                                <div class="card text-center pricing-simple">
                                    <div class="card-body">
                                        <h3>Extra</h3>
                                        <h2>$45</h2>
                                        <h6 class="mb-0">Extra Plan</h6>
                                    </div><a class="btn btn-lg btn-primary btn-block" href="#">Purchase</a>
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
