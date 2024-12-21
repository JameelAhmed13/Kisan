@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Breadcrumb</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Breadcrumb</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <!-- default breadcrumb start-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Default Breadcrumb</h4>
                        <p class="desc mb-0 mt-1"><span>You can set breadcrumb using</span><code> .breadcrumb
                            </code><span>class.</span></p>
                    </div>
                    <div class="card-body">
                        <nav class="breadcrumb mb-3"><a class="breadcrumb-item" href="javascript:void(0)">Home</a><span
                                class="breadcrumb-item active">Ui Kits</span></nav>
                        <nav class="breadcrumb m-0"><a class="breadcrumb-item" href="javascript:void(0)">Home</a><a
                                class="breadcrumb-item" href="javascript:void(0)">Ui Kits</a><span
                                class="breadcrumb-item active">Alert </span></nav>
                    </div>
                </div>
                <!-- default breadcrumb Ends-->
            </div>
            <div class="col-sm-6">
                <!-- divider breadcrumb start-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Divider Breadcrumb</h4>
                        <p class="desc mb-0 mt-1"><span>You can set breadcrumb using</span><code> .breadcrumb-icon
                            </code><span>class.</span></p>
                    </div>
                    <div class="card-body">
                        <nav class="breadcrumb breadcrumb-icon mb-3"><a class="breadcrumb-item"
                                href="javascript:void(0)">Home</a><span class="breadcrumb-item active">Ui Kits</span></nav>
                        <nav class="breadcrumb breadcrumb-icon m-0"><a class="breadcrumb-item"
                                href="javascript:void(0)">Home</a><a class="breadcrumb-item" href="javascript:void(0)">Ui
                                Kits</a><span class="breadcrumb-item active">Progress</span></nav>
                    </div>
                </div>
                <!-- divider breadcrumb End-->
            </div>
            <div class="col-sm-6">
                <!-- icons breadcrumb start-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>With Icons Breadcrumb</h4>
                        <p class="desc mb-0 mt-1"><span>You can set breadcrumb using</span><code> .breadcrumb
                            </code><span>class.</span></p>
                    </div>
                    <div class="card-body">
                        <ol class="breadcrumb bg-white p-l-0 mb-3">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">
                                    <svg class="home-icon">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                    </svg></a></li>
                            <li class="breadcrumb-item active">Bonus Ui</li>
                        </ol>
                        <ol class="breadcrumb bg-white m-b-0 p-b-0 p-l-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">
                                    <svg class="home-icon">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                    </svg></a></li>
                            <li class="breadcrumb-item">Bonus Ui</li>
                            <li class="breadcrumb-item active">Breadcrumb</li>
                        </ol>
                    </div>
                </div>
                <!-- icons breadcrumb End-->
            </div>
            <div class="col-sm-6">
                <!-- variation breadcrumb start-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Variation Of Breadcrumb</h4>
                        <p class="desc mb-0 mt-1"><span>You can set breadcrumb using</span><code> .breadcrumb
                            </code><span>class through any icons sets.</span></p>
                    </div>
                    <div class="card-body breadcrumb-space">
                        <nav class="breadcrumb breadcrumb-no-divider mb-3 gap-2"><a class="breadcrumb-item mb-1 mb-xl-0"
                                href="javascript:void(0)">Home</a><a class="breadcrumb-item ps-0 mb-1 mb-xl-0"
                                href="javascript:void(0)">Chat</a><span class="breadcrumb-item active ps-0">Video
                                Chat</span></nav>
                        <ol class="breadcrumb bg-white p-l-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">
                                    <svg class="home-icon">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                    </svg></a></li>
                            <li class="breadcrumb-item">Blog</li>
                            <li class="breadcrumb-item active">Blog Details</li>
                        </ol>
                    </div>
                </div>
                <!-- variation breadcrumb End-->
            </div>
            <div class="col-sm-6">
                <!-- Color menu-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Colored Breadcrumb</h4>
                        <p class="desc mb-0 mt-1"><span>You can set breadcrumb using</span><code> .breadcrumb , .bg-*
                            </code><span>class and set background colors like </span></p>
                    </div>
                    <div class="card-body">
                        <ol class="breadcrumb breadcrumb-colored mb-4 bg-primary">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Bonus Ui</a></li>
                            <li class="breadcrumb-item active">Breadcrumb</li>
                        </ol>
                        <ol class="breadcrumb breadcrumb-colored mb-4 bg-secondary">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Icons</a></li>
                            <li class="breadcrumb-item active">Flag-Icon</li>
                        </ol>
                        <ol class="breadcrumb breadcrumb-colored mb-4 bg-tertiary">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Gallery</a></li>
                            <li class="breadcrumb-item active">Gallery-Grid</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <!-- Outline Colored Breadcrumb Start-->
                <!-- Outline menu-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Outline Breadcrumb</h4>
                        <p class="desc mb-0 mt-1"><span>You can set breadcrumb using</span><code> .breadcrumb,
                                .bg-outline-primary</code><span>class and set background colors like </span></p>
                    </div>
                    <div class="card-body">
                        <ol class="breadcrumb breadcrumb-colored mb-4 bg-outline-primary">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Ui Kits</a></li>
                            <li class="breadcrumb-item active">Avatars</li>
                        </ol>
                        <ol class="breadcrumb breadcrumb-colored mb-4 bg-outline-secondary">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Bonus Ui</a></li>
                            <li class="breadcrumb-item active">Rating</li>
                        </ol>
                        <ol class="breadcrumb breadcrumb-colored mb-4 bg-outline-tertiary">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Buttons</a></li>
                            <li class="breadcrumb-item active">Button Group</li>
                        </ol>
                    </div>
                </div>
                <!-- Outline Colored Breadcrumb End-->
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
@endsection
