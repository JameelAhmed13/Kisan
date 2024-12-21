@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>ChartJS</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Charts</li>
                        <li class="breadcrumb-item active">ChartJS</li>
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
                        <h4>Basic Bar chart</h4>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="myBarGraph"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Basic Line chart</h4>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="myLineGraph"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Radar Graph</h4>
                    </div>
                    <div class="card-body">
                        <div class="chart-container chart-block">
                            <canvas id="radar-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Line Chart</h4>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Donut Graph</h4>
                    </div>
                    <div class="card-body">
                        <div class="chart-container chart-block">
                            <canvas id="myDonutChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Polar Chart</h4>
                    </div>
                    <div class="card-body">
                        <div class="chart-container chart-block">
                            <canvas id="myRadarChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/vendors/chart.js/dist/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/js/chartjs/chartjs-custom.js') }}"></script>
@endsection
