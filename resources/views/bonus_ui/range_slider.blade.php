@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/rangeslider/rSlider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Range Slider</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Range Slider</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid range-slider">
        <div class="row">
            <div class="col-xl-6">
                <div class="card range_4 height_equal">
                    <div class="card-header pb-0">
                        <h4>Default range slider</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.slider</code><span>class. and edmin used Io
                                range slider.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="slider-container">
                            <div class="range-slider_thumb" id="slider_thumb"></div>
                            <div class="range-slider_line">
                                <div class="range-slider_line-fill" id="slider_line"></div>
                            </div>
                            <input class="range-slider_input" id="slider_input" type="range" value="20" min="0"
                                max="100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card range_1 height_equal">
                    <div class="card-header pb-0">
                        <h4>Steps Range Slider</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.slider</code><span>class. and edmin used Io
                                range slider.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="slider-container">
                            <input class="slider" id="slider" type="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card range_2">
                    <div class="card-header pb-0">
                        <h4>Min Max Value</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.slider</code><span>class. and edmin used Io
                                range slider.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="slider-container">
                            <input class="slider" id="slider2" type="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card range_3">
                    <div class="card-header pb-0">
                        <h4>Manipulating UI</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.slider</code><span>class. and edmin used Io
                                range slider.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="slider-container">
                            <input class="slider" id="slider3" type="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card range_5">
                    <div class="card-header pb-0">
                        <h4>Disabled</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.slider</code><span>class. and edmin used Io
                                range slider.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="slider-container">
                            <input class="slider" id="slider4" type="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card range_6">
                    <div class="card-header pb-0">
                        <h4>Prefix</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.slider</code><span>class. and edmin used Io
                                range slider.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="slider-container">
                            <input class="slider" id="slider5" type="text">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/range-slider/rSlider.min.js') }}"></script>
    <script src="{{ asset('assets/js/rangeslider/rangeslider.js') }}"></script>
@endsection
