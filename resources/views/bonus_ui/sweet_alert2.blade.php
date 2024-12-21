@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Sweet Alert</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Sweet Alert</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <!-- Basic Sweetalert-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Basic Sweetalert</h4>
                    </div>
                    <div class="card-body">
                        <div class="common-flex">
                            <button class="btn btn-primary sweet-1" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);">Click it!</button>
                            <button class="btn btn-secondary sweet-2" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-2']);">Title with text!</button>
                            <button class="btn btn-info sweet-4" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-4']);">Informational</button>
                            <button class="btn btn-tertiary sweet-5" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-5']);">Warning alert!</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Basic Sweetalert-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Advance Sweetalert</h4>
                    </div>
                    <div class="card-body">
                        <div class="common-flex">
                            <button class="btn btn-warning sweet-12" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-12']);">Questions state</button>
                            <button class="btn btn-secondary sweet-13" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-13']);">Toast Alert</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Unique Sweetalert-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Unique Sweetalert</h4>
                    </div>
                    <div class="card-body">
                        <div class="common-flex">
                            <button class="btn btn-danger sweet-7" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-7']);">Danger mode</button>
                            <button class="btn btn-warning sweet-6" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-6']);">Animation Alert</button>
                            <button class="btn btn-primary sweet-14" type="button"
                                onclick="_gaq.push(['_trackEvent', 'sweet-14']);">Timer</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Basic Sweetalert-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Direction Sweetalert</h4>
                    </div>
                    <div class="card-body">
                        <div class="common-flex">
                            <button class="btn btn-info sweet-17" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-17']);">Top Left</button>
                            <button class="btn btn-primary sweet-16" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-16']);">Top Right</button>
                            <button class="btn btn-secondary sweet-18" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-18']);">Bottom Left</button>
                            <button class="btn btn-tertiary sweet-19" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-19']);">Bottom Right</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- input-sweetalert-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Input sweetalert</h4>
                    </div>
                    <div class="card-body">
                        <div class="common-flex">
                            <button class="btn btn-success sweet-22" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-22']);">Text Input</button>
                            <button class="btn btn-tertiary sweet-8" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-8']);">Login Email</button>
                            <button class="btn btn-info sweet-23" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-23']);">URL</button>
                            <button class="btn btn-danger sweet-24" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-24']);">Password</button>
                            <button class="btn btn-warning sweet-25" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-25']);">Textarea</button>
                            <button class="btn btn-primary sweet-26" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-26']);">Select Input</button>
                            <button class="btn btn-secondary sweet-27" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-27']);">Radio Input</button>
                            <button class="btn btn-dark sweet-28" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-28']);">Checkbox Input</button>
                            <button class="btn font-dark bg-light sweet-29" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-29']);">Range</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <!-- Github Avatar-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Github Avatar</h4>
                    </div>
                    <div class="card-body">
                        <div class="common-flex">
                            <button class="btn btn-primary sweet-11" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-11']);">Ajax alert</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <!-- RTL Support-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>RTL Support</h4>
                    </div>
                    <div class="card-body">
                        <div class="common-flex">
                            <button class="btn btn-secondary sweet-15" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);">RTL Alert</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <!-- Message Timer-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Message Timer</h4>
                    </div>
                    <div class="card-body">
                        <div class="common-flex">
                            <button class="btn btn-tertiary sweet-20" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-20']);">Message Timer</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <!-- Modal with Images-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Modal with Images</h4>
                    </div>
                    <div class="card-body">
                        <div class="common-flex">
                            <button class="btn btn-info sweet-21" type="button"
                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-21']);">Modal with
                                Images</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/sweetalert/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert/sweetalert-custom.js') }}"></script>
@endsection
