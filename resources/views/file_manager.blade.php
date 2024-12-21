@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>File Manager</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Apps</li>
                        <li class="breadcrumb-item active">File Manager</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 box-col-6">
                <div class="md-sidebar job-sidebar"><a class="btn btn-primary md-sidebar-toggle"
                        href="javascript:void(0)">file filter </a>
                    <div class="md-sidebar-aside custom-scrollbar">
                        <div class="file-sidebar">
                            <div class="card">
                                <div class="card-body">
                                    <ul>
                                        <li>
                                            <div class="btn btn-primary">
                                                <svg class="feather">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#home') }}">
                                                    </use>
                                                </svg>Home
                                            </div>
                                        </li>
                                        <li>
                                            <div class="btn bg-light font-light">
                                                <svg class="feather">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#folder') }}">
                                                    </use>
                                                </svg>All
                                            </div>
                                        </li>
                                        <li>
                                            <div class="btn bg-light font-light">
                                                <svg class="feather">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#clock') }}">
                                                    </use>
                                                </svg>Recent
                                            </div>
                                        </li>
                                        <li>
                                            <div class="btn bg-light font-light">
                                                <svg class="feather">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#star') }}">
                                                    </use>
                                                </svg>Starred
                                            </div>
                                        </li>
                                        <li>
                                            <div class="btn bg-light font-light">
                                                <svg class="feather">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#alert-circle') }}">
                                                    </use>
                                                </svg>Recovery
                                            </div>
                                        </li>
                                        <li>
                                            <div class="btn bg-light font-light">
                                                <svg class="feather">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trash-2') }}">
                                                    </use>
                                                </svg>Deleted
                                            </div>
                                        </li>
                                    </ul>
                                    <hr>
                                    <ul>
                                        <li>
                                            <button class="btn btn-outline-primary">
                                                <svg class="feather">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#database') }}">
                                                    </use>
                                                </svg>Storage
                                            </button>
                                        </li>
                                        <li class="m-t-15">
                                            <div class="progress sm-progress-bar mb-3">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h6 class="f-w-500">25 GB of 100 GB used</h6>
                                        </li>
                                    </ul>
                                    <hr>
                                    <ul>
                                        <li>
                                            <button class="btn btn-outline-primary">
                                                <svg class="feather">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#grid') }}">
                                                    </use>
                                                </svg>Pricing plan
                                            </button>
                                        </li>
                                        <li>
                                            <div class="pricing-plan">
                                                <h6>Trial Version </h6>
                                                <h5>FREE</h5>
                                                <p>100 GB Space </p>
                                                <div class="btn btn-outline-primary btn-xs">Selected</div><img
                                                    class="bg-img"
                                                    src="{{ asset('assets/images/file-manager/folder.png') }}"
                                                    alt="">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-md-12 box-col-12">
                <div class="file-content">
                    <div class="card">
                        <div class="card-header d-md-block d-none">
                            <div class="d-md-flex d-sm-block align-items-center">
                                <form class="form-inline" action="#" method="get">
                                    <div class="form-group d-flex mb-0 align-items-center"><i class="fa fa-search"> </i>
                                        <input class="form-control-plaintext" type="text" placeholder="Search...">
                                    </div>
                                </form>
                                <div class="flex-grow-1 text-end">
                                    <form class="d-inline-flex">
                                        <button class="btn btn-primary plus-square">
                                            <svg class="feather stroke-white ">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#plus-square') }}">
                                                </use>
                                            </svg>Add New
                                        </button>
                                        <div style="height: 0px;width: 0px; overflow:hidden;">
                                            <input id="upfile" type="file" onchange="sub(this)">
                                        </div>
                                        <button class="btn btn-outline-primary ms-2 upload">
                                            <svg class="feather stroke-primary">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#upload') }}">
                                                </use>
                                            </svg>Upload
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body file-manager">
                            <h5 class="mb-2">Quick Access</h5>
                            <ul class="quick-file d-flex flex-row">
                                <li>
                                    <div class="quick-box"><i class="fa-brands fa-youtube fa-fw font-danger"></i></div>
                                    <h6 class="mb-2">Videos</h6>
                                </li>
                                <li>
                                    <div class="quick-box"><i class="fa fa-th font-info"></i></div>
                                    <h6 class="mb-2">Apps</h6>
                                </li>
                                <li>
                                    <div class="quick-box"><i class="fa fa-file-text font-secondary"></i></div>
                                    <h6 class="mb-2">Document</h6>
                                </li>
                                <li>
                                    <div class="quick-box"><i class="fa fa-music font-warning"></i></div>
                                    <h6 class="mb-2">Music</h6>
                                </li>
                                <li>
                                    <div class="quick-box"><i class="fa fa-download font-primary"></i></div>
                                    <h6 class="mb-2">Download</h6>
                                </li>
                                <li>
                                    <div class="quick-box"><i class="fa fa-folder font-info"></i></div>
                                    <h6 class="mb-2">Folder</h6>
                                </li>
                                <li>
                                    <div class="quick-box"><i class="fa fa-file-archive font-secondary"></i></div>
                                    <h6 class="mb-2">Zip File</h6>
                                </li>
                                <li>
                                    <div class="quick-box"><i class="fa fa-trash font-danger"></i></div>
                                    <h6 class="mb-2">Trash</h6>
                                </li>
                            </ul>
                            <h5 class="mt-4 mb-2">Folders</h5>
                            <ul class="folder">
                                <li class="folder-box">
                                    <div class="d-block"><i class="f-44 fa fa-file-archive font-warning"></i><i
                                            class="fa fa-ellipsis-v me-0 f-14 ellips"></i>
                                        <div class="mt-3">
                                            <h6 class="mb-2">Tivo admin</h6>
                                            <p>20 file<span class="pull-right"> <i class="fa fa-clock"> </i> 2 Hour
                                                    ago</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="folder-box">
                                    <div class="d-block"><i class="f-44 fa fa-folder font-warning"></i><i
                                            class="fa fa-ellipsis-v me-0 f-14 ellips"></i>
                                        <div class="mt-3">
                                            <h6 class="mb-2">Viho admin</h6>
                                            <p>14 file<span class="pull-right"> <i class="fa fa-clock"> </i> 3 Hour
                                                    ago</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="folder-box">
                                    <div class="d-block"><i class="f-44 fa fa-file-archive font-warning"></i><i
                                            class="fa fa-ellipsis-v me-0 f-14 ellips"></i>
                                        <div class="mt-3">
                                            <h6 class="mb-2">Unice admin</h6>
                                            <p>15 file<span class="pull-right"> <i class="fa fa-clock"> </i> 3 Day
                                                    ago</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="folder-box">
                                    <div class="d-block"><i class="f-44 fa fa-folder font-warning"></i><i
                                            class="fa fa-ellipsis-v me-0 f-14 ellips"></i>
                                        <div class="mt-3">
                                            <h6 class="mb-2">Koho admin</h6>
                                            <p>10 file<span class="pull-right"> <i class="fa fa-clock"> </i> 1 Day
                                                    ago</span></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <h5 class="mt-4 mb-2 mb-2 mb-2">Files </h5>
                            <ul class="d-flex flex-row files-content">
                                <li class="folder-box d-flex align-items-center">
                                    <div class="d-flex align-items-center files-list">
                                        <div class="flex-shrink-0 file-left"><i class="f-22 fa fa-folder font-info"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-2">Logo.psd</h6>
                                            <p>7 Hour ago, 2.0 MB</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="folder-box d-flex align-items-center">
                                    <div class="d-flex align-items-center files-list">
                                        <div class="flex-shrink-0 file-left"><i
                                                class="f-22 fa fa-file-excel font-success"></i></div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-2">Backend.xls</h6>
                                            <p>2 Day ago, 3.0 GB</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="folder-box d-flex align-items-center">
                                    <div class="d-flex align-items-center files-list">
                                        <div class="flex-shrink-0 file-left"><i
                                                class="f-22 fa fa-file-archive font-warning"></i></div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-2">Project.zip</h6>
                                            <p>1 Day ago, 1.9 GB</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="folder-box d-flex align-items-center">
                                    <div class="d-flex align-items-center files-list">
                                        <div class="flex-shrink-0 file-left"><i
                                                class="f-22 fa fa-folder font-primary"></i></div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-2">Report.font</h6>
                                            <p>1 Day ago, 0.9 KB </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
@endsection

@section('scripts')
    <script type="module" src="{{ asset('assets/js/md-sidebar.js') }}"></script>
@endsection
