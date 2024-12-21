@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Progress Bar</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Progress Bar</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <!-- Basic Progress Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Basic Progress Bars</h4>
                        <p class="desc mb-0 mt-1"><span>Progress components are built with two HTML elements, some CSS to
                                set the width, and a few attributes. We use the</span><code>.progress ,
                                progress-bar</code><span>requires an inline style, utility class, or custom CSS to set their
                                width.</span></p>
                    </div>
                    <div class="card-body progress-showcase">
                        <div class="row">
                            <div class="col">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                        aria-valuemax="100"> </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-tertiary" role="progressbar" style="width: 75%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Stripped Progress Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Progress bars striped</h4>
                        <p class="desc mb-0 mt-1"><span>Add</span><code>.progress-bar-striped , progress-bar</code><span>to
                                apply a stripe via CSS gradient over the progress bars background color Using CSS
                                Effects.</span></p>
                    </div>
                    <div class="card-body progress-showcase">
                        <div class="row">
                            <div class="col">
                                <div class="progress">
                                    <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                                        style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-secondary" role="progressbar"
                                        style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-tertiary" role="progressbar"
                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                        style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Stripped Progress Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Progress bars animated</h4>
                        <p class="desc mb-0 mt-1"><span>The striped gradient can also be animated.
                                Add</span><code>.progress-bar-animated , progress-bar</code><span>to animate the stripes
                                right to left via CSS3 animations.</span></p>
                    </div>
                    <div class="card-body progress-showcase">
                        <div class="row">
                            <div class="col">
                                <div class="progress">
                                    <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar"
                                        style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar-animated progress-bar-striped bg-secondary"
                                        role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar-animated progress-bar-striped bg-tertiary" role="progressbar"
                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar-animated progress-bar-striped bg-success" role="progressbar"
                                        style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Multiple bars Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Multiple bars</h4>
                        <p class="desc mb-0 mt-1"><span>Include multiple progress bars in a progress component if you need
                                to apply a stripe via CSS gradient over</span><code></code><span>the progress bars
                                background color Using CSS Effects.</span></p>
                    </div>
                    <div class="card-body progress-showcase">
                        <div class="row">
                            <div class="col">
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 30%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-tertiary" role="progressbar" style="width: 15%"
                                        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 10%"
                                        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 10%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-tertiary" role="progressbar" style="width: 10%"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 10%"
                                        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 10%"
                                        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 10%"
                                        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-light" role="progressbar" style="width: 20%"
                                        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Step Progress Bar-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Progress with number steps</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.position-absolute</code><span>to set progress
                                numbers steps.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="position-relative mx-3 my-4 progress-number">
                            <div class="progress progress-wrapper">
                                <div class="progress-bar" role="progressbar" aria-label="Progress" style="width: 50%;"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                <button
                                    class="position-absolute top-0 start-0 translate-middle btn-sm btn-primary rounded-circle"
                                    type="button">1</button>
                                <button
                                    class="position-absolute top-0 start-50 translate-middle btn-sm btn-primary rounded-circle"
                                    type="button">2</button>
                                <button
                                    class="progress-btn position-absolute top-0 start-100 translate-middle btn-sm rounded-circle"
                                    type="button">3</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Custom progress bars-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Custom progress bars</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.progress-bar-animated ,
                                .progress-bar-striped</code><span>to animate the stripes right to left.</span></p>
                    </div>
                    <div class="card-body progress-showcase">
                        <div class="row">
                            <div class="col">
                                <h5 class="mb-2 f-w-500">0% Getting Started </h5>
                                <div class="progress mb-4">
                                    <div class="progress-bar-animated progress-bar-striped text-center" role="progressbar"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"> </div>
                                </div>
                                <h5 class="mb-2 f-w-500">30% Getting Uploading...</h5>
                                <div class="progress mb-4">
                                    <div class="progress-bar-animated progress-bar-striped bg-primary text-center"
                                        role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                        aria-valuemax="100">30%</div>
                                </div>
                                <h5 class="mb-2 f-w-500">60% Getting Pause...</h5>
                                <div class="progress mb-4">
                                    <div class="progress-bar-animated progress-bar-striped bg-secondary text-center"
                                        role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                        aria-valuemax="100">60%</div>
                                </div>
                                <h5 class="mb-2 f-w-500">70% Getting Uploading...</h5>
                                <div class="progress mb-4">
                                    <div class="progress-bar-animated progress-bar-striped bg-tertiary text-center"
                                        role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                        aria-valuemax="100">70%</div>
                                </div>
                                <h5 class="mb-2 f-w-500">100% Completed</h5>
                                <div class="progress">
                                    <div class="progress-bar-animated progress-bar-striped bg-success text-center"
                                        role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                        aria-valuemax="100">100%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Small progress bars-->
                <div class="card height_equal">
                    <div class="card-header pb-0">
                        <h4>Small progress bars</h4>
                        <p class="desc mb-0 mt-1"><span>Use</span><code>.sm-progress-bar</code><span>class to change
                                progress size to small.</span></p>
                    </div>
                    <div class="card-body progress-showcase progress-b-space">
                        <div class="row">
                            <div class="col">
                                <div class="progress sm-progress-bar overflow-visible mt-4">
                                    <div class="progress-bar-animated small-progressbar bg-primary rounded-pill progress-bar-striped"
                                        role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                        aria-valuemax="100"><span class="font-primary progress-label">30 MB
                                            Data</span><span class="animate-circle"></span></div>
                                </div>
                                <div class="progress sm-progress-bar overflow-visible">
                                    <div class="progress-bar-animated small-progressbar bg-primary rounded-pill progress-bar-striped"
                                        role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100"><span class="font-primary progress-label">50 MB
                                            Data</span><span class="animate-circle"></span></div>
                                </div>
                                <div class="progress sm-progress-bar overflow-visible">
                                    <div class="progress-bar-animated small-progressbar bg-primary rounded-pill progress-bar-striped"
                                        role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                        aria-valuemax="100"><span class="font-primary progress-label">75 MB
                                            Data</span><span class="animate-circle"></span></div>
                                </div>
                                <div class="progress sm-progress-bar overflow-visible">
                                    <div class="progress-bar-animated small-progressbar bg-primary rounded-pill progress-bar-striped"
                                        role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100"><span class="font-primary progress-label">90 MB
                                            Data</span><span class="animate-circle"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Large progress bars-->
                <div class="card height_equal">
                    <div class="card-header pb-0">
                        <h4>Large progress bars</h4>
                        <p class="desc mb-0 mt-1"><span>Use</span><code>.lg-progress-bar</code><span>class to change
                                progress size to large.</span></p>
                    </div>
                    <div class="card-body progress-showcase">
                        <div class="row">
                            <div class="col">
                                <div class="progress lg-progress-bar">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                </div>
                                <div class="progress lg-progress-bar">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                </div>
                                <div class="progress lg-progress-bar">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                </div>
                                <div class="progress lg-progress-bar">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Custom height progress bars-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Custom height progress bars</h4>
                        <p class="desc mb-0 mt-1"><span>Set a height value on the</span><code>.progress</code><span>for
                                custom-height.</span></p>
                    </div>
                    <div class="card-body progress-showcase">
                        <div class="row">
                            <div class="col">
                                <div class="progress" style="height: 2px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress" style="height: 11px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress" style="height: 19px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
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
@endsection
