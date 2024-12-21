@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Popover</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Popover</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <!-- Basic Popover-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Basic popover</h4>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icon-more-alt"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>data-bs-toggle/=&quot;popover&quot;</code><span>
                                through popover above buttons.</span></p>
                    </div>
                    <div class="card-body common-flex popover-wrapper">
                        <button class="btn btn-primary example-popover mb-0 me-0" type="button" data-bs-toggle="popover"
                            data-bs-placement="left" title=""
                            data-bs-content="If the package restore doesn't help, you can look at the Output window in the Visual Studio."
                            data-bs-original-title="Basic Popover">Hurry Up! </button>
                        <button class="example-popover btn btn-success mb-0 me-0" type="button" data-bs-trigger="hover"
                            data-container="body" data-bs-toggle="popover" data-bs-placement="bottom" title=""
                            data-offset="-20px -20px"
                            data-bs-content=" Several utility instruction sets have been featured in the Bootstrap 4 to promote very easy learning for beginners in the business of web building."
                            data-bs-original-title="Hover Popover">Hover tooltip</button><a class="btn btn-secondary"
                            tabindex="0" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title=""
                            data-bs-title="Dismissible popover"
                            data-bs-content="You are able to even develop and suggest improvements to the Bootstrap 4 before its final version is delivered."
                            data-bs-original-title="Dismissible popover">Dismissible popover</a>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="hover-variations">&lt;!--You can use attribute (data-bs-toggle='popover') through make popover on buttons.--&gt;
    &lt;div class="card-body common-flex"&gt;
    &lt;button class="btn btn-primary example-popover mb-0 me-0" type="button" data-bs-toggle="popover" title="Basic Popover" data-bs-content="If the package restore doesn't help, you can look at the Output window in the Visual Studio."&gt;Hurry Up! &lt;/button&gt;
    &lt;button class="example-popover btn btn-success mb-0 me-0" type="button" data-bs-trigger="hover" data-container="body" data-bs-toggle="popover" data-bs-placement="bottom" title="Hover Popover" data-offset="-20px -20px" data-bs-content=" Several utility instruction sets have been featured in the Bootstrap 4 to promote very easy learning for beginners in the business of web building."&gt;Hover tooltip&lt;/button&gt;
    &lt;a class="btn btn-lg btn-secondary" tabindex="0" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="Dismissible popover" data-bs-title="Dismissible popover" data-bs-content="You are able to even develop and suggest improvements to the Bootstrap 4 before its final version is delivered."&gt;Dismissible popover&lt;/a&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Popover direction-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Popover direction</h4>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icon-more-alt"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>data-bs-placement/=top</code><span>through
                                popover direction above buttons.</span></p>
                    </div>
                    <div class="card-body common-flex popover-wrapper">
                        <button class="example-popover btn btn-tertiary mb-0 me-0" type="button"
                            data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" title=""
                            data-bs-content="Popovers need the tooltip plugin considering that a dependency."
                            data-bs-original-title="Popover On Top">Popover on top</button>
                        <button class="example-popover btn btn-danger mb-0 me-0" type="button" data-bs-container="body"
                            data-bs-toggle="popover" data-bs-placement="right" title=""
                            data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself."
                            data-bs-original-title="Popover On Right">Popover on right</button>
                        <button class="example-popover btn btn-info mb-0 me-0" type="button" data-bs-container="body"
                            data-bs-toggle="popover" data-bs-placement="bottom" title=""
                            data-bs-content="Identify container:to evade rendering problems in more complex components (like Bootstrap input groups, button groups, etc)."
                            data-bs-original-title="Popover On Bottom">Popover on bottom</button>
                        <button class="example-popover btn btn-dark mb-0 me-0" type="button" data-bs-container="body"
                            data-bs-toggle="popover" data-bs-placement="left" title=""
                            data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself."
                            data-bs-original-title="Popover On Left">Popover on left</button>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="direction-variations">&lt;!--You can use attribute (data-bs-toggle='popover') through make popover on buttons(top/bottom/left/right).--&gt;
    &lt;button class="example-popover btn btn-warning mb-0 me-0" type="button" data-container="body" data-bs-toggle="popover" data-bs-placement="top" title="Popover On Top" data-bs-content="Popovers need the tooltip plugin considering that a dependency."&gt;Popover on top&lt;/button&gt;
    &lt;button class="example-popover btn btn-danger mb-0 me-0" type="button" data-container="body" data-bs-toggle="popover" data-bs-placement="right" title="Popover On Right" data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself."&gt;Popover on right&lt;/button&gt;
    &lt;button class="example-popover btn btn-info mb-0 me-0" type="button" data-container="body" data-bs-toggle="popover" data-bs-placement="bottom" title="Popover On Bottom" data-bs-content="Identify container:to evade rendering problems in more complex components (like Bootstrap input groups, button groups, etc)."&gt;Popover on bottom&lt;/button&gt;
    &lt;button class="example-popover btn btn-dark mb-0 me-0" type="button" data-container="body" data-bs-toggle="popover" data-bs-placement="left" title="Popover On Left" data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself."&gt;Popover on left&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Popover offset-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Popover offset</h4>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icon-more-alt"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>data-bs-offset/=&quot;*&quot;</code><span>
                                through popover direction above buttons.</span></p>
                    </div>
                    <div class="card-body common-flex popover-wrapper">
                        <button class="btn btn-secondary mb-0 me-0" type="button" data-bs-offset="50,0"
                            data-bs-toggle="popover" data-bs-delay-show="5000" title=""
                            data-bs-content="And here's some amazing content. It's very engaging. Right?"
                            data-kt-initialized="1" data-bs-original-title="Popover title">Popover offset 50</button>
                        <button class="example-popover btn btn-dark mb-0 me-0" type="button" data-bs-offset="-50,0"
                            data-container="body" data-bs-toggle="popover" data-bs-placement="left" title=""
                            data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself."
                            data-bs-original-title="Popover On Left">Popover offset -50</button>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="offset-variations">&lt;!--You can use data-bs-offset="" through set popover offset --&gt;
    &lt;button class="btn btn-secondary mb-0 me-0" type="button" data-bs-offset="50,0" data-bs-toggle="popover" data-bs-delay-show="5000" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?" data-kt-initialized="1"&gt;Popover offset 50
    &lt;/button&gt;
    &lt;button class="example-popover btn btn-dark mb-0 me-0" type="button" data-bs-offset="-50,0" data-container="body" data-bs-toggle="popover" data-bs-placement="left" title="Popover On Left" data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself."&gt;Popover offset -50
    &lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/popover-custom.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/clipboard/dist/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard-script.js') }}"></script>
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
@endsection
