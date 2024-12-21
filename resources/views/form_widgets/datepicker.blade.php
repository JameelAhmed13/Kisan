@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flatpickr/dist/flatpickr.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Datepicker</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Widgets</li>
                        <li class="breadcrumb-item active">Datepicker</li>
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
                        <h4>Default Calender</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.main-inline-calender</code><span>class through
                                set all css property.</span></p>
                    </div>
                    <div class="card-body card-wrapper">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="input-group main-inline-calender">
                                    <input class="form-control mb-2" id="inline-calender" type="date">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Bootstrap Calender</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.form-control</code><span>class through set all
                                css property.</span></p>
                    </div>
                    <div class="card-body card-wrapper">
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label">Date and time</label>
                            <div class="col-md-9">
                                <input class="form-control digits" id="example-datetime-local-input" type="datetime-local"
                                    value="2024-05-03T18:45:00">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label">Date</label>
                            <div class="col-md-9">
                                <input class="form-control digits" type="date" value="2024-05-01">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label">Month</label>
                            <div class="col-md-9">
                                <input class="form-control digits" type="month" value="2024-01">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label">Week</label>
                            <div class="col-md-9">
                                <input class="form-control digits" type="week" value="2024-W09">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label">Time</label>
                            <div class="col-md-9">
                                <input class="form-control digits" type="time" value="21:45:00">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Date Picker</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.flatpickr-input </code><span>through create
                                date picker with javascript.</span></p>
                    </div>
                    <div class="card-body main-flatpickr">
                        <div class="card-wrapper border rounded-3">
                            <form class="timepicker-wrapper">
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">Default Date </label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group flatpicker-calender">
                                            <input class="form-control" id="datetime-local" type="date"
                                                value="2024-05-03">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">Human Friendly </label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group flatpicker-calender">
                                            <input class="form-control" id="human-friendly" type="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">Min-Max Value</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group flatpicker-calender">
                                            <input class="form-control" id="min-max" type="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">Disabled Dates</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group flatpicker-calender">
                                            <input class="form-control" id="disabled-date" type="date"
                                                value="2024-05-03">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">Multiples Dates</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group flatpicker-calender">
                                            <input class="form-control" id="multiple-date" type="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">Customizing Conjunction</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group flatpicker-calender">
                                            <input class="form-control" id="customize-date" type="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start"> Range</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group flatpicker-calender">
                                            <input class="form-control" id="range-date" type="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start"> Preloading Dates</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group flatpicker-calender">
                                            <input class="form-control" id="preloading-date" type="date">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Time Picker</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.flatpickr-input</code><span>through create
                                time picker with javascript.</span></p>
                    </div>
                    <div class="card-body main-flatpickr">
                        <div class="card-wrapper border rounded-3">
                            <form class="timepicker-wrapper">
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">Time Picker</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group">
                                            <input class="form-control" id="time-picker" type="time" value="12:00">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">24-hour Time Picker</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group">
                                            <input class="form-control" id="twenty-four-hour" type="time"
                                                value="12:05">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">Time Picker W/Limits</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group">
                                            <input class="form-control" id="limit-time" type="time" value="16:10">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">Preloading Time</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group">
                                            <input class="form-control" id="preloading-time" type="time">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">TimePicker with Limited Time
                                        Range</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group">
                                            <input class="form-control" id="limit-time-range" type="time">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">TimePicker with Min/Max Time
                                        Range</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group flatpicker-calender">
                                            <input class="form-control" id="limit-min-max-range" type="time">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xxl-3 box-col-12 text-start">Date With Time</label>
                                    <div class="col-xxl-9 box-col-12">
                                        <div class="input-group flatpicker-calender">
                                            <input class="form-control" id="datetime-local1" type="date">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/flatpickr/dist/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-flatpickr.js') }}"></script>
@endsection
