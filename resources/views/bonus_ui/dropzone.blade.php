@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/filepond/filepond.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/filepond/filepond-plugin-image-preview.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone/dist/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Dropzone</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Dropzone</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Default File Upload</h4>
                        <p class="desc mb-0 mt-1"><span>We use the create method to turn a</span><code>&lt;input
                                type=&quot;file&quot;&gt; , [https://pqina.nl/filepond/]</code><span>into a FilePond drop
                                area.</span></p>
                    </div>
                    <div class="card-body">
                        <input class="no-preview" type="file">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Image Preview</h4>
                        <p class="desc mb-0 mt-1"><span>We use the create method to turn a</span><code>&lt;input
                                type=&quot;file&quot;&gt; , [https://pqina.nl/filepond/]</code><span>into a FilePond drop
                                area.</span></p>
                    </div>
                    <div class="card-body">
                        <input class="show-preview" type="file">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Single File Upload</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.dropzone</code><span>class through create
                                upload files</span></p>
                    </div>
                    <div class="card-body">
                        <form class="dropzone" id="singleFileUpload" action="/upload.php">
                            <div class="dropzone-wrapper">
                                <div class="dz-message needsclick"><i class="icon-cloud-up"></i>
                                    <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just
                                        a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Multi File Upload</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.dropzone</code><span>class through create
                                upload files</span></p>
                    </div>
                    <div class="card-body">
                        <form class="dropzone dropzone-secondary bg-light-secondary" id="multiFileUpload" action="/upload.php">
                            <div class="dz-message needsclick"><i class="icon-cloud-up"></i>
                                <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a
                                    demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/filepond/filepond-plugin-image-preview.js') }}"></script>
    <script src="{{ asset('assets/js/filepond/filepond-plugin-file-rename.js') }}"></script>
    <script src="{{ asset('assets/js/filepond/filepond-plugin-image-transform.js') }}"></script>
    <script src="{{ asset('assets/js/filepond/filepond.js') }}"></script>
    <script src="{{ asset('assets/js/filepond/custom-filepond.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone/dropzone-script.js') }}"></script>
@endsection
