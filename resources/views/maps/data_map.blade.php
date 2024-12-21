@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Data Map</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Maps</li>
                        <li class="breadcrumb-item active">Data Map</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Basic Map</h4>
                    </div>
                    <div class="card-body">
                        <div class="data-basic-map" id="map-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Choropleth Map</h4>
                    </div>
                    <div class="card-body">
                        <div class="choropleth-map" id="basic_choropleth"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Bubble Map</h4>
                    </div>
                    <div class="card-body">
                        <div class="data-map" id="bubbles"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Projection Map</h4>
                    </div>
                    <div class="card-body">
                        <div class="data-map-glob" id="projection_map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/vendors/datamaps/src/js/components/d3/d3.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/datamaps/src/js/components/topojson/topojson.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/datamaps/dist/datamaps.world.min.js') }}"></script>
    <script src="{{ asset('assets/js/datamap-custom.js') }}"></script>
@endsection
