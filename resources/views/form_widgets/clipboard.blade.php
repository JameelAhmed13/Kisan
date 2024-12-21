@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Clipboard</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Widgets</li>
                        <li class="breadcrumb-item active">Clipboard</li>
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
                        <h4>Clipboard on text input</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                    </div>
                    <div class="card-body">
                        <div class="clipboaard-container">
                            <p class="f-16">Cut/copy from text input</p>
                            <input class="form-control" id="clipboardExample1" type="text"
                                placeholder="type some text to copy / cut">
                            <div class="mt-3 text-end">
                                <button class="btn btn-primary btn-clipboard" type="button" data-clipboard-action="copy"
                                    data-clipboard-target="#clipboardExample1"><i class="fa fa-copy"></i> Copy</button>
                                <button class="btn btn-secondary btn-clipboard-cut" type="button"
                                    data-clipboard-action="cut" data-clipboard-target="#clipboardExample1"><i
                                        class="fa fa-cut"></i> Cut</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Clipboard on textarea</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                    </div>
                    <div class="card-body">
                        <div class="clipboaard-container">
                            <p class="f-16">Cut/copy from textarea</p>
                            <textarea class="form-control f-14" id="clipboardExample2" rows="3" spellcheck="false">A web designer must always enhance their work since creating websites is a creative effort. Therefore, a web designer must be more imaginative to produce exceptional results. Blogs about web design assist web designers in learning about new technologies, offer lessons, news, direction for a freebie, and much more. These blogs allow web designers to stay creative and improve their abilities. Therefore, advice from web design blogs is required to improve your business.</textarea>
                            <div class="mt-3 text-end">
                                <button class="btn btn-warning btn-clipboard" type="button" data-clipboard-action="copy"
                                    data-clipboard-target="#clipboardExample2"><i class="fa fa-copy"></i> Copy</button>
                                <button class="btn btn-success btn-clipboard-cut" type="button" data-clipboard-action="cut"
                                    data-clipboard-target="#clipboardExample2"><i class="fa fa-cut"></i> Cut</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Clipboard on paragraph</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                    </div>
                    <div class="card-body">
                        <div class="clipboaard-container">
                            <p class="f-16">Copy from paragraph</p>
                            <h6 class="solid-border rounded card-body f-w-300" id="clipboardExample3">
                                On that day, hopes and dreams were crushed.
                                Even though it should have been anticipated, it nonetheless
                                surprised me. The warning indicators have been disregarded in favour of the slim chance that
                                it would actually occur. From a hopeful prospect, it had evolved into an unquestionable
                                conviction that it must be fate. That was up until it wasn't,
                                at which point all of the aspirations and dreams collapsed.
                            </h6>
                            <div class="mt-3 text-end">
                                <button class="btn btn-info btn-clipboard" type="button" data-clipboard-action="copy"
                                    data-clipboard-target="#clipboardExample3"><i class="fa fa-copy"></i> Copy</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Copy portion from paragraph</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                    </div>
                    <div class="card-body">
                        <div class="clipboaard-container">
                            <p class="f-16">Copy portion from paragraph</p>
                            <h6 class="solid-border rounded card-body f-w-300"><span class="bg-primary text-white p-1"
                                    id="clipboardExample4">Web design is the process of creating websites </span>that are
                                visible online. Take a website design course to learn how to
                                create an appealing and responsive website. In the discipline of web design,
                                there are degree, diploma, postgraduate degree, and certificate programmes.
                                A web designer is responsible for a website's look, feel, and occasionally even content.
                            </h6>
                            <div class="mt-3 text-end">
                                <button class="btn btn-secondary btn-clipboard" type="button" data-clipboard-action="copy"
                                    data-clipboard-target="#clipboardExample4"><i class="fa fa-copy"></i> Copy highlighted
                                    text</button>
                            </div>
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
    <script src="{{ asset('assets/js/vendors/clipboard/dist/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard-script.js') }}"></script>
@endsection