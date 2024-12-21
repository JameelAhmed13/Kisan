@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/chartist/dist/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Chartist</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Charts</li>
                        <li class="breadcrumb-item active">Chartist</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- Basic line chart-->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Basic line chart</h4>
                    </div>
                    <div class="card-body">
                        <div class="ct-chart chartist-container" id="ct-1"></div>
                    </div>
                </div>
            </div>
            <!-- Advanced Smil Animations-->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Advanced Smil Animations</h4>
                    </div>
                    <div class="card-body">
                        <div class="ct-chart chartist-container" id="ct-2"></div>
                    </div>
                </div>
            </div>
            <!-- Animating a Donut with Svg.animate-->
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Animating a Donut with Svg.animate</h4>
                    </div>
                    <div class="card-body">
                        <div class="chartist-container" id="ct-8"></div>
                    </div>
                </div>
            </div>
            <!-- Bi-polar Line chart with area only-->
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Bi-polar Line chart with area only</h4>
                    </div>
                    <div class="card-body">
                        <div class="chartist-container" id="ct-5"></div>
                    </div>
                </div>
            </div>
            <!-- Line chart with area-->
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Line chart with area</h4>
                    </div>
                    <div class="card-body">
                        <div class="chartist-container" id="ct-4"></div>
                    </div>
                </div>
            </div>
            <!-- Bi-polar bar chart-->
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Bi-polar bar chart</h4>
                    </div>
                    <div class="card-body">
                        <div class="chartist-container" id="ct-9"></div>
                    </div>
                </div>
            </div>
            <!-- Stacked bar chart-->
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Stacked bar chart</h4>
                    </div>
                    <div class="card-body">
                        <div class="chartist-container" id="ct-10"></div>
                    </div>
                </div>
            </div>
            <!-- Horizontal bar chart-->
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Horizontal bar chart</h4>
                    </div>
                    <div class="card-body">
                        <div class="chartist-container" id="ct-11"></div>
                    </div>
                </div>
            </div>
            <!-- Extreme responsive configuration-->
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Extreme responsive configuration</h4>
                    </div>
                    <div class="card-body">
                        <div class="chartist-container" id="ct-12"></div>
                    </div>
                </div>
            </div>
            <!-- ADD PEAK CIRCLES USING THE DRAW EVENTS-->
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Add peak circles using the draw events</h4>
                    </div>
                    <div class="card-body">
                        <div class="chartist-container" id="ct-6"></div>
                    </div>
                </div>
            </div>
            <!-- Holes in data-->
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Holes in data</h4>
                    </div>
                    <div class="card-body">
                        <div class="chartist-container" id="ct-7"></div>
                    </div>
                </div>
            </div>
            <!-- Filled holes in data-->
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Filled holes in data</h4>
                    </div>
                    <div class="card-body">
                        <div class="chartist-container" id="ct-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/vendors/chartist/dist/index.umd.js') }}"></script>
    <script src="{{ asset('assets/js/chartist/chartist-custom.js') }}"></script>
@endsection
