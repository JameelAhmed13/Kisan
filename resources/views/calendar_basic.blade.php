@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/calendar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Calender</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Apps</li>
                        <li class="breadcrumb-item active">Calender Basic</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid calendar-basic">
        <div class="card">
            <div class="card-body">
                <div class="row" id="wrap">
                    <div class="col-xxl-3 box-col-12">
                        <div class="md-sidebar mb-3"><a class="btn btn-primary md-sidebar-toggle"
                                href="javascript:void(0)">calendar filter</a>
                            <div class="md-sidebar-aside job-left-aside custom-scrollbar">
                                <div id="external-events">
                                    <h4>Draggable Events</h4>
                                    <div id="external-events-list">
                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                            <div class="fc-event-main"> <i class="fa fa-birthday-cake me-2"></i>Birthday
                                                Party</div>
                                        </div>
                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                            <div class="fc-event-main"> <i class="fa fa-user me-2"></i>Meeting With Team.
                                            </div>
                                        </div>
                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                            <div class="fc-event-main"> <i class="fa fa-plane me-2"></i>Tour & Picnic</div>
                                        </div>
                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                            <div class="fc-event-main"> <i class="fa fa-file-text me-2"></i>Reporting
                                                Schedule</div>
                                        </div>
                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                            <div class="fc-event-main"> <i class="fa fa-briefcase me-2"></i>Lunch & Break
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <input class="checkbox-primary" id="drop-remove" type="checkbox">
                                        <label for="drop-remove">remove after drop</label>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 box-col-12">
                        <div class="calendar-default" id="calendar-container">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/vendors/fullcalendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/fullcalendar/calendar-custom.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/md-sidebar.js') }}"></script>
@endsection
