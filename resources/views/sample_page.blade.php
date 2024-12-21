@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Sample Page</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">Sample Page</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Sample Card</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-3 pills-blogger">
                            <div class="blog-wrapper"> <img class="blog-img img-100"
                                    src="{{ asset('assets/images/dashboard2/product/headphones.png') }}" alt="head-phone"></div>
                            <div class="blog-content">
                                <p> <em class="font-primary fw-bold">Smart headphones</em> — also called smart earbuds or
                                    hearable — are high-tech in-ear devices that do more than transmit audio. These
                                    headphones are usually wireless, and they can sync up with your phone, tablet, computer
                                    or other Bluetooth-enabled device. The main appeal of hearables is convenience, as they
                                    allow you to complete common tasks without directly accessing your phone or computer.
                                    Smart wireless headphones sync up to other devices using Bluetooth technology, and many
                                    of their features rely on data from your smartphone or computer.</p>
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