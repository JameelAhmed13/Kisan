@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/css/vendors/choices.js/public/assets/styles/choices.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Typeahead</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Widgets</li>
                        <li class="breadcrumb-item active">Typeahead</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Basic typeahead</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span>This is the simple demo for
                                Typeahead.</span></p>
                    </div>
                    <div class="card-body">
                        <div id="the-basics">
                            <form class="theme-form">
                                <div>
                                    <select class="form-control" id="cities" name="cities">
                                        <option value="">Choose a city</option>
                                        <option value="Leeds">Leeds</option>
                                        <option value="Manchester">Manchester</option>
                                        <option value="London">London</option>
                                        <option value="Sheffield">Sheffield</option>
                                        <option value="Newcastle">Newcastle</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>config</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span>Options added via config with no
                                search</span></p>
                    </div>
                    <div class="card-body">
                        <div id="prefetch">
                            <form class="theme-form">
                                <div>
                                    <select class="form-control" id="choices-single-no-search"
                                        name="choices-single-no-search">
                                        <option value="0">Zero</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Multiple select input</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span>Multiple select input With remove
                                button</span></p>
                    </div>
                    <div class="card-body">
                        <div id="bloodhound">
                            <form class="theme-form">
                                <div>
                                    <select class="form-control" id="choices-multiple-remove-button"
                                        name="choices-multiple-remove-button" multiple="">
                                        <option value="Choice 1" selected="">India</option>
                                        <option value="Choice 2">USA</option>
                                        <option value="Choice 3">Australia</option>
                                        <option value="Choice 4">UEA</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Select one inputs</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span>Select one inputs with Scrolling
                                dropdown</span></p>
                    </div>
                    <div class="card-body">
                        <div id="remote">
                            <form class="theme-form">
                                <div data-test-hook="scrolling-dropdown">
                                    <select class="form-control" id="choices-scrolling-dropdown"
                                        name="choices-scrolling-dropdown">
                                        <option value="Choice 1">Choice 1</option>
                                        <option value="Choice 2">Choice 2</option>
                                        <option value="Choice 3">Choice 3</option>
                                        <option value="Choice 4">Choice 4</option>
                                        <option value="Choice 5">Choice 5</option>
                                        <option value="Choice 6">Choice 6</option>
                                        <option value="Choice 7">Choice 7</option>
                                        <option value="Choice 8">Choice 8</option>
                                        <option value="Choice 9">Choice 9</option>
                                        <option value="Choice 10">Choice 10</option>
                                        <option value="Choice 11">Choice 11</option>
                                        <option value="Choice 12">Choice 12</option>
                                        <option value="Choice 13">Choice 13</option>
                                        <option value="Choice 14">Choice 14</option>
                                        <option value="Choice 15">Choice 15</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Multiple sections with headers</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span>Two datasets that are prefetched, stored,
                                and searched on the client. Highlighting is enabled.</span></p>
                    </div>
                    <div class="card-body">
                        <div id="multiple-datasets">
                            <form class="theme-form">
                                <div>
                                    <select class="form-control" id="choices-multiple-groups" name="choices-multiple-groups"
                                        multiple="">
                                        <option value="">Choose a city</option>
                                        <optgroup label="UK">
                                            <option value="London">London</option>
                                            <option value="Manchester">Manchester</option>
                                            <option value="Liverpool">Liverpool</option>
                                        </optgroup>
                                        <optgroup label="FR">
                                            <option value="Paris">Paris</option>
                                            <option value="Lyon">Lyon</option>
                                            <option value="Marseille">Marseille</option>
                                        </optgroup>
                                        <optgroup label="DE" disabled="">
                                            <option value="Hamburg">Hamburg</option>
                                            <option value="Munich">Munich</option>
                                            <option value="Berlin">Berlin</option>
                                        </optgroup>
                                        <optgroup label="US">
                                            <option value="New York">New York</option>
                                            <option value="Washington" disabled="">Washington</option>
                                            <option value="Michigan">Michigan</option>
                                        </optgroup>
                                        <optgroup label="SP">
                                            <option value="Madrid">Madrid</option>
                                            <option value="Barcelona">Barcelona</option>
                                            <option value="Malaga">Malaga</option>
                                        </optgroup>
                                        <optgroup label="CA">
                                            <option value="Montreal">Montreal</option>
                                            <option value="Toronto">Toronto</option>
                                            <option value="Vancouver">Vancouver</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>RTL Support</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span>Dataset shows in Right Side.</span></p>
                    </div>
                    <div class="card-body">
                        <div id="rtl-support">
                            <form class="theme-form">
                                <div>
                                    <select class="form-control" id="rtl" name="rtl" dir="rtl">
                                        <option value="">Choose a city</option>
                                        <option value="Leeds">Leeds</option>
                                        <option value="Manchester">Manchester</option>
                                        <option value="London">London</option>
                                        <option value="Sheffield">Sheffield</option>
                                        <option value="Newcastle">Newcastle</option>
                                    </select>
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
    <script src="{{ asset('assets/js/vendors/choices.js/public/assets/scripts/choices.js') }}"></script>
    <script src="{{ asset('assets/js/choices.js/typehead-custom.js') }}"></script>
@endsection
