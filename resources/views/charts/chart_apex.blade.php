@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/apexcharts/dist/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Apex chart</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Charts</li>
                        <li class="breadcrumb-item active">Apex chart</li>
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
                        <div id="line-chart"></div>
                    </div>
                </div>
            </div>
            <!-- Basic area chart-->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Basic area chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="basic-area"></div>
                    </div>
                </div>
            </div>
            <!-- Dumbbell chart-->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Dumbbell chart </h4>
                    </div>
                    <div class="card-body">
                        <div id="dumbel-chart"></div>
                    </div>
                </div>
            </div>
            <!-- Column chart-->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Column chart </h4>
                    </div>
                    <div class="card-body">
                        <div id="column-chart"></div>
                    </div>
                </div>
            </div>
            <!-- Mixed chart-->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Mixed chart </h4>
                    </div>
                    <div class="card-body">
                        <div id="mixed-chart"></div>
                    </div>
                </div>
            </div>
            <!-- Pyramid chart-->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Pyramid chart </h4>
                    </div>
                    <div class="card-body">
                        <div id="pyramid-chart"></div>
                    </div>
                </div>
            </div>
            <!-- Bubble chart-->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>3D Bubble chart </h4>
                    </div>
                    <div class="card-body">
                        <div id="bubble-chart"></div>
                    </div>
                </div>
            </div>
            <!-- Polar chart-->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Polar chart </h4>
                    </div>
                    <div class="card-body">
                        <div id="polar-chart"></div>
                    </div>
                </div>
            </div>
            <!-- Candle chart-->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Candle chart </h4>
                    </div>
                    <div class="card-body">
                        <div id="candle-chart"></div>
                    </div>
                </div>
            </div>
            <!-- Pie chart-->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Pie chart </h4>
                    </div>
                    <div class="card-body mx-auto">
                        <div id="pie-chart"></div>
                    </div>
                </div>
            </div>
            <!-- Donut chart-->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Donut chart </h4>
                    </div>
                    <div class="card-body mx-auto">
                        <div id="donut-chart"></div>
                    </div>
                </div>
            </div>
            <!-- Radial chart-->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Radial chart </h4>
                    </div>
                    <div class="card-body mx-auto">
                        <div id="radial-chart"></div>
                    </div>
                </div>
            </div>
            <!-- Radar chart-->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Radar chart </h4>
                    </div>
                    <div class="card-body mx-auto">
                        <div id="radar-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/vendors/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/apexchart/apexchart-custom.js') }}"></script>
@endsection
