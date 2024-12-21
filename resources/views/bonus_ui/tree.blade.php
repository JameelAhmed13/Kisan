@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Tree View</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Tree View</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Basic Tree</h4>
                        <p class="desc mb-0 mt-1"><span>Use the dynamic tree view with
                                checkboxes.</span><code></code><span></span></p>
                    </div>
                    <div class="card-body">
                        <div class="tree-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Disabled Tree</h4>
                        <p class="desc mb-0 mt-1"><span>Use the dynamic tree view with
                                checkboxes.</span><code></code><span></span></p>
                    </div>
                    <div class="card-body">
                        <div class="disabled-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/tree/tree.js') }}"></script>
    <script src="{{ asset('assets/js/tree/tree.min.js') }}"></script>
    <script src="{{ asset('assets/js/tree/tree-custom.js') }}"></script>
@endsection
