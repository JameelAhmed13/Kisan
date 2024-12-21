@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone/dist/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill/dist/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/choices.js/public/assets/styles/choices.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Add Post</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Blog</li>
                        <li class="breadcrumb-item active">Add Post</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Post Edit</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                    </div>
                    <div class="card-body add-post">
                        <form class="row needs-validation" novalidate="">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="validationCustom01">Title:</label>
                                    <input class="form-control" id="validationCustom01" type="text"
                                        placeholder="Post Title" required="">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="mb-3">
                                    <label>Type:</label>
                                    <div class="m-checkbox-inline">
                                        <label for="edo-ani">
                                            <input class="radio-primary" id="edo-ani" type="radio" name="rdo-ani"
                                                checked="">Text
                                        </label>
                                        <label for="edo-ani1">
                                            <input class="radio-primary" id="edo-ani1" type="radio" name="rdo-ani">Image
                                        </label>
                                        <label for="edo-ani2">
                                            <input class="radio-primary" id="edo-ani2" type="radio" name="rdo-ani"
                                                checked="">Audio
                                        </label>
                                        <label for="edo-ani3">
                                            <input class="radio-primary" id="edo-ani3" type="radio" name="rdo-ani">Video
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3" data-test-hook="remove-button">
                                    <label class="col-form-label mb-2" for="choices-remove-button">Category:</label>
                                    <select class="form-control col-sm-12" id="choices-remove-button"
                                        name="choices-remove-button" multiple="">
                                        <option value="">Select Your Name</option>
                                        <option value="Choice 1">Lifestyle</option>
                                        <option value="Choice 2">Travel</option>
                                    </select>
                                </div>
                                <div class="email-wrapper">
                                    <div class="theme-form">
                                        <div class="mb-3">
                                            <label>Content:</label>
                                            <div class="toolbar-box">
                                                <div id="toolbar1">
                                                    <button class="ql-bold">Bold </button>
                                                    <button class="ql-italic">Italic </button>
                                                    <button class="ql-underline">underline</button>
                                                    <button class="ql-list" value="ordered">List </button>
                                                    <button class="ql-list" value="bullet"> </button>
                                                    <button class="ql-link"></button>
                                                    <button class="ql-image"></button>
                                                </div>
                                                <div id="editor1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form class="dropzone" id="singleFileUpload" action="/upload.php">
                            <div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
                                <h6 class="mb-0">Drop files here or click to upload.</h6>
                            </div>
                        </form>
                        <div class="btn-showcase text-end blog-btn">
                            <button class="btn btn-primary" type="submit">Post</button>
                            <input class="btn bg-light" type="reset" value="Discard">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone/dropzone-script.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/quill/dist/quill.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/choices.js/public/assets/scripts/choices.js') }}"></script>
    <script src="{{ asset('assets/js/choices.js/add-post-custom.js') }}"></script>
@endsection
