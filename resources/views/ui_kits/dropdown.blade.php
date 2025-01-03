@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Dropdown</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Dropdown</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid ui-dropdown">
        <div class="row">
            <div class="col-xl-6">
                <!-- Basic dropdown-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Basic dropdown</h4>
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
                        <p class="desc mb-0 mt-1"><span>When the</span><code>.show</code><span>class add, dropdown
                                appears.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="common-flex">
                            <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Dashboard</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#">Project</a></li>
                                    <li><a class="dropdown-item" href="#">Ecommerce</a></li>
                                    <li><a class="dropdown-item" href="#">Crypto</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"> Ecommerce</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#">Product</a></li>
                                    <li><a class="dropdown-item" href="#">Product details</a></li>
                                    <li><a class="dropdown-item" href="#">Cart</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-tertiary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Ui kits</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#">Typography</a></li>
                                    <li><a class="dropdown-item" href="#">Avatars</a></li>
                                    <li><a class="dropdown-item" href="#">Grid</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Error page</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#">Error 400</a></li>
                                    <li><a class="dropdown-item" href="#">Error 403</a></li>
                                    <li><a class="dropdown-item" href="#">Error 500</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="basic-dropdown">&lt;!--You can use .dropdown-menu and inside added .dropdown-item.*(dropdown list)--&gt;
    &lt;div class="btn-group"&gt;
      &lt;button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dashboard&lt;/button&gt;
      &lt;ul class="dropdown-menu dropdown-block"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Project&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Ecommerce&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Crypto&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
      &lt;button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt; Ecommerce&lt;/button&gt;
      &lt;ul class="dropdown-menu dropdown-block"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Product&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Product details&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Cart&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
      &lt;button class="btn btn-warning text-black dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Ui kits&lt;/button&gt;
      &lt;ul class="dropdown-menu dropdown-block"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Typography&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Avatars&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Grid&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
      &lt;button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Error page&lt;/button&gt;
      &lt;ul class="dropdown-menu dropdown-block"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Error 400&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Error 403&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Error 500&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Rounded dropdown-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Rounded dropdown</h4>
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
                        <p class="desc mb-0 mt-1"><span>When the</span><code>.rounded-pill</code><span>to change rounded
                                dropdowns.</span></p>
                    </div>
                    <div class="card-body rtl-dropdown">
                        <div class="common-flex">
                            <div class="btn-group">
                                <button class="btn btn-primary rounded-pill dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Primary</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#">Dark</a></li>
                                    <li><a class="dropdown-item" href="#">Light</a></li>
                                    <li><a class="dropdown-item" href="#">Lighter</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-success rounded-pill dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Success </button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#">Dark</a></li>
                                    <li><a class="dropdown-item" href="#">Light</a></li>
                                    <li><a class="dropdown-item" href="#">Lighter</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-info rounded-pill dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Info </button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#">Dark</a></li>
                                    <li><a class="dropdown-item" href="#">Light</a></li>
                                    <li><a class="dropdown-item" href="#">Lighter</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-warning rounded-pill dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Warning</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#">Dark</a></li>
                                    <li><a class="dropdown-item" href="#">Light</a></li>
                                    <li><a class="dropdown-item" href="#">Lighter</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-danger rounded-pill dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Danger </button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#">Dark </a></li>
                                    <li><a class="dropdown-item" href="#">Light </a></li>
                                    <li><a class="dropdown-item" href="#">Lighter</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="rounded-dropdown">&lt;!--You can use .dropdown-menu and inside added .dropdown-item.*(dropdown list)--&gt;       
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-primary rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Primary&lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Primary-dark&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Primary-light&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Primary-lighter&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-success rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Success &lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Success dark&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Success light &lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Success lighter &lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-info rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Info &lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Info dark &lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Info light &lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Info lighter &lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-warning rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Warning&lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Warning dark &lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Warning light &lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Warning lighter &lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-danger rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Danger &lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Danger dark &lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Danger light &lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Danger lighter &lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Split dropdown-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Split dropdown</h4>
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
                        <p class="desc mb-0 mt-1"><span>When the split the
                                dropdown</span><code>.dropdown-toggle-split</code><span></span></p>
                    </div>
                    <div class="card-body dropdown-basic me-0">
                        <div class="common-flex">
                            <div class="btn-group">
                                <button class="btn btn-outline-primary" type="button">Widgets</button>
                                <div class="dropdown separated-btn">
                                    <button class="btn btn-primary" type="button">
                                        <svg class="feather">
                                            <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-down') }}">
                                            </use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-content"><a href="#">General</a><a
                                            href="#">Chart</a></div>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-outline-secondary" type="button">Animations</button>
                                <div class="dropdown separated-btn">
                                    <button class="btn btn-secondary" type="button">
                                        <svg class="feather">
                                            <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-down') }}">
                                            </use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-content"><a href="#">Animate </a><a href="#">AOS
                                            animations</a></div>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-outline-tertiary" type="button">Blog</button>
                                <div class="dropdown separated-btn">
                                    <button class="btn btn-tertiary" type="button">
                                        <svg class="feather">
                                            <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-down') }}">
                                            </use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-content"><a href="#">Blog Details</a><a
                                            href="#">Blog Single</a></div>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-outline-success" type="button">Charts</button>
                                <div class="dropdown separated-btn">
                                    <button class="btn btn-success" type="button">
                                        <svg class="feather">
                                            <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-down') }}">
                                            </use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-content"><a href="#">Apex chart</a><a
                                            href="#">Chartist</a></div>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-outline-info" type="button">Email</button>
                                <div class="dropdown separated-btn">
                                    <button class="btn btn-info" type="button">
                                        <svg class="feather">
                                            <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-down') }}">
                                            </use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-content"><a href="#">Email app </a><a href="#">Email
                                            compose</a></div>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-outline-warning" type="button">Icons</button>
                                <div class="dropdown separated-btn">
                                    <button class="btn btn-warning" type="button">
                                        <svg class="feather">
                                            <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-down') }}">
                                            </use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-content"><a href="#">Flag icons </a><a
                                            href="#">Fontawesome icons </a><a href="#">Ico icons</a><a
                                            href="#">Feather icons </a></div>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-outline-danger" type="button">Learning</button>
                                <div class="dropdown separated-btn">
                                    <button class="btn btn-danger" type="button">
                                        <svg class="feather">
                                            <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-down') }}">
                                            </use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-content"><a href="#">Learning List</a><a
                                            href="#">Detailed Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="split-dropdown">&lt;!--You can use .dropdown-menu and inside added .dropdown-item.*(dropdown list)--&gt;  
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-outline-primary" type="button"&gt;Widgets&lt;/button&gt;
    &lt;div class="dropdown separated-btn"&gt;
    &lt;button class="btn btn-primary" type="button"&gt;&lt;i class="icofont icofont-arrow-down"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;div class="dropdown-content"&gt;&lt;a href="#"&gt;General&lt;/a&gt;&lt;a href="#"&gt;Chart&lt;/a&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-outline-secondary" type="button"&gt;Animations&lt;/button&gt;
    &lt;div class="dropdown separated-btn"&gt;
    &lt;button class="btn btn-secondary" type="button"&gt;&lt;i class="icofont icofont-arrow-down"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;div class="dropdown-content"&gt;&lt;a href="#"&gt;Animate &lt;/a&gt;&lt;a href="#"&gt;Scroll reveal &lt;/a&gt;&lt;a href="#"&gt;AOS animations&lt;/a&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-outline-success" type="button"&gt;Charts&lt;/button&gt;
    &lt;div class="dropdown separated-btn"&gt;
    &lt;button class="btn btn-success" type="button"&gt;&lt;i class="icofont icofont-arrow-down"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;div class="dropdown-content"&gt;&lt;a href="#"&gt;Echarts&lt;/a&gt;&lt;a href="#"&gt;Apex chart&lt;/a&gt;&lt;a href="#"&gt;Google chart&lt;/a&gt;&lt;a href="#"&gt;Sparkline chart&lt;/a&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-outline-info" type="button"&gt;Email&lt;/button&gt;
    &lt;div class="dropdown separated-btn"&gt;
    &lt;button class="btn btn-info" type="button"&gt;&lt;i class="icofont icofont-arrow-down"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;div class="dropdown-content"&gt;&lt;a href="#"&gt;Email app &lt;/a&gt;&lt;a href="#"&gt;Email compose&lt;/a&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-outline-warning" type="button"&gt;Icons&lt;/button&gt;
    &lt;div class="dropdown separated-btn"&gt;
    &lt;button class="btn btn-warning" type="button"&gt;&lt;i class="icofont icofont-arrow-down"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;div class="dropdown-content"&gt;&lt;a href="#"&gt;Flag icons &lt;/a&gt;&lt;a href="#"&gt;Fontawesome icons &lt;/a&gt;&lt;a href="#"&gt;Ico icons&lt;/a&gt;&lt;a href="#"&gt;Feather icons &lt;/a&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-outline-danger" type="button"&gt;Learning&lt;/button&gt;
    &lt;div class="dropdown separated-btn"&gt;
    &lt;button class="btn btn-danger" type="button"&gt;&lt;i class="icofont icofont-arrow-down"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;div class="dropdown-content"&gt;&lt;a href="#"&gt;Learning List&lt;/a&gt;&lt;a href="#"&gt;Detailed Course&lt;/a&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <!-- Heading dropdown-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Heading dropdown</h4>
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
                        <p class="desc mb-0 mt-1"><span>Main heading and any sub-content in
                                dropdown.</span><code></code><span></span></p>
                    </div>
                    <div class="card-body rtl-dropdown heading-dropdown">
                        <div class="common-flex">
                            <div class="btn-group">
                                <button class="btn btn-success rounded-pill dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="true">Party</button>
                                <ul class="dropdown-menu dropdown-block default-border p-0"
                                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 37px);"
                                    data-popper-placement="bottom-start">
                                    <li><a class="dropdown-item f-w-500 fs-6" href="#">Party List </a>
                                        <ul>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Balloons</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Cake </a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Ribbons </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="heading-dropdown">&lt;!--You can use .dropdown-menu and inside added .dropdown-item.*(dropdown list)--&gt;  
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-success rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Party&lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block"&gt;
    &lt;li"&gt;&lt;a class="dropdown-item fw-bold fs-6"&gt;Party List &lt;/a&gt;&lt;/li&gt;
    &lt;ul&gt;
    &lt;li&gt; &lt;a class="dropdown-item"&gt;Balloons&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt; &lt;a class="dropdown-item"&gt;Cake &lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/ul&gt;
    &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <!-- Heading dropdown-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>With Input Type</h4>
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
                        <p class="desc mb-0 mt-1"><span>Use the checkbox using dropdown type</span><code>checkbox ,
                                radio</code><span></span></p>
                    </div>
                    <div class="card-body">
                        <div class="common-flex">
                            <btn-group>
                                <button class="btn btn-warning" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="true">Inputs </button>
                                <ul class="dropdown-menu dropdown-block dropdown-wrapper default-border"
                                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(30px, 185px);"
                                    data-popper-placement="bottom-start">
                                    <li>
                                        <div class="input-group rounded-0 border-0 shadow-none">
                                            <div class="input-group-text">
                                                <input class="form-check-input mt-0" type="checkbox" value=""
                                                    aria-label="Checkbox for following text input">
                                            </div><span>Default checkbox</span>
                                        </div>
                                        <div class="input-group rounded-0 border-0 shadow-none">
                                            <div class="input-group-text">
                                                <input class="form-check-input mt-0" type="radio" value=""
                                                    aria-label="Radio button for following text input">
                                            </div><span>Default radio</span>
                                        </div>
                                    </li>
                                </ul>
                            </btn-group>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="input-type-dropdown">&lt;!--You can use .dropdown-menu and inside added .dropdown-item.*(dropdown list)--&gt;  
    &lt;btn-group&gt;
    &lt;button class="btn btn-warning" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Inputs &lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block p-3"&gt;
    &lt;li&gt;
    &lt;div class="input-group mb-2 rounded-0 border-0 shadow-none"&gt;
    &lt;div class="input-group-text"&gt;
    &lt;input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input"&gt;
    &lt;/div&gt;&lt;span&gt;Default checkbox&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="input-group rounded-0 border-0 shadow-none"&gt;
    &lt;div class="input-group-text"&gt;
    &lt;input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input"&gt;
    &lt;/div&gt;&lt;span&gt;Default radio&lt;/span&gt;
    &lt;/div&gt;
    &lt;/li&gt;
    &lt;/ul&gt;
    &lt;/btn-group&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <!-- Heading dropdown-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Dark Dropdown</h4>
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
                        <p class="desc mb-0 mt-1"><span>Main heading and any sub-content in
                                dropdown.</span><code></code><span></span></p>
                    </div>
                    <div class="card-body dropdown-basic m-0">
                        <div class="common-flex dark-dropdown">
                            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Dark Night</button>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-block">
                                <li><a class="dropdown-item" href="#">Dark moon</a></li>
                                <li><a class="dropdown-item" href="#">Dark owl </a></li>
                                <li><a class="dropdown-item" href="#">Nightfall</a></li>
                            </ul>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="dark-dropdown">&lt;!--You can use .dropdown-menu and inside added .dropdown-item.*(dropdown list)--&gt;  
    &lt;button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dark Night&lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-menu-dark dropdown-block"&gt;
    &lt;li&gt;&lt;a class="dropdown-item active" href="#"&gt;Dark moon&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dark owl &lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Nightfall&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Unique dropdown-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Unique dropdown</h4>
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
                        <p class="desc mb-0 mt-1"><span>Unique way to represent form dropdown and text
                                dropdown.</span><code></code><span></span></p>
                    </div>
                    <div class="card-body rtl-dropdown">
                        <div class="common-flex">
                            <div class="btn-group">
                                <button class="btn btn-tertiary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" data-bs-auto-close="outside">Dropdown form</button>
                                <form class="dropdown-menu p-4 form-wrapper dark-form">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleDropdownFormEmail2">Email address</label>
                                        <input class="form-control" id="exampleDropdownFormEmail2" type="email"
                                            placeholder="email@example.com">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleDropdownFormPassword2">Password</label>
                                        <input class="form-control" id="exampleDropdownFormPassword2" type="password"
                                            placeholder="Password">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" id="dropdownCheck2" type="checkbox">
                                            <label class="form-check-label f-14" for="dropdownCheck2">Remember me</label>
                                        </div>
                                    </div>
                                    <button class="btn btn-dark" type="submit">Sign in</button>
                                </form>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Text </button>
                                <div class="dropdown-menu p-4 form-wrapper">
                                    <p>Some example text that&apos;s free-flowing within the dropdown menu.</p>
                                    <p class="mb-0">And this is more example text.</p>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="unique-dropdown">&lt;!--You can use .dropdown-menu and inside added .dropdown-item.*(dropdown list)--&gt;  
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"&gt;Dropdown form&lt;/button&gt;
    &lt;form class="dropdown-menu p-4 form-wrapper"&gt;
    &lt;div class="mb-3"&gt;
    &lt;label class="form-label" for="exampleDropdownFormEmail2"&gt;Email address&lt;/label&gt;
    &lt;input class="form-control" id="exampleDropdownFormEmail2" type="email" placeholder="email@example.com"&gt;
    &lt;/div&gt;
    &lt;div class="mb-3"&gt;
    &lt;label class="form-label" for="exampleDropdownFormPassword2"&gt;Password&lt;/label&gt;
    &lt;input class="form-control" id="exampleDropdownFormPassword2" type="password" placeholder="Password"&gt;
    &lt;/div&gt;
    &lt;div class="mb-3"&gt;
    &lt;div class="form-check"&gt;
    &lt;input class="form-check-input" id="dropdownCheck2" type="checkbox"&gt;
    &lt;label class="form-check-label f-14" for="dropdownCheck2"&gt;Remember me&lt;/label&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;button class="btn btn-dark" type="submit"&gt;Sign in&lt;/button&gt;
    &lt;/form&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Text &lt;/button&gt;
    &lt;div class="dropdown-menu p-4 text-muted form-wrapper"&gt;
    &lt;p&gt;Some example text that&amp;apos;s free-flowing within the dropdown menu.&lt;/p&gt;
    &lt;p class="mb-0"&gt;And this is more example text. &lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Justify contents-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Justify contents</h4>
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
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>text-start/text-center/text-end</code><span> to
                                change dropdown texts.</span></p>
                    </div>
                    <div class="card-body m-0">
                        <div class="common-flex">
                            <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Text-left</button>
                                <ul class="dropdown-menu dropdown-block text-start">
                                    <li><a class="dropdown-item" href="#">Hello..</a></li>
                                    <li><a class="dropdown-item" href="#">How are you?</a></li>
                                    <li><a class="dropdown-item" href="#">What are you doing?</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Text-center</button>
                                <ul class="dropdown-menu dropdown-block text-center">
                                    <li><a class="dropdown-item" href="#">Chocolate</a></li>
                                    <li><a class="dropdown-item" href="#">Ice-cream</a></li>
                                    <li><a class="dropdown-item" href="#">Trophy</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-tertiary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Text-right </button>
                                <ul class="dropdown-menu dropdown-block text-end">
                                    <li><a class="dropdown-item" href="#">I&apos;m fine.</a></li>
                                    <li><a class="dropdown-item" href="#">ohh wow!!</a></li>
                                    <li><a class="dropdown-item" href="#">That&apos;s the good news! </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="justify-dropdown">&lt;!--You can use .dropdown-menu and inside added .dropdown-item.*(dropdown list)--&gt;  
    &lt;div class="common-flex"&gt;
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Text-left&lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block text-start"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Hello..&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;How are you?&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;What are you doing?&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Text-center&lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block text-center"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Chocolate&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Ice-cream&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Trophy&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Text-right &lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block text-end"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;I'm fine.&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;ohh wow!!&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;That's the good news! &lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Heading dropdown-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Alignments</h4>
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
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>dropstart/dropup/dropend</code><span>this class
                                through change dropdown directions.</span></p>
                    </div>
                    <div class="card-body rtl-dropdown">
                        <div class="common-flex">
                            <div class="btn-group dropup">
                                <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Warning top</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#">Be careful </a></li>
                                    <li><a class="dropdown-item" href="#">Notifications</a></li>
                                    <li><a class="dropdown-item" href="#">Beware </a></li>
                                </ul>
                            </div>
                            <div class="btn-group dropend">
                                <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Success right</button>
                                <ul class="dropdown-menu dropdown-block text-end">
                                    <li><a class="dropdown-item" href="#">Good luck </a></li>
                                    <li><a class="dropdown-item" href="#">Good job </a></li>
                                    <li><a class="dropdown-item" href="#">Done!</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Primary bottom</button>
                                <ul class="dropdown-menu dropdown-block text-end">
                                    <li><a class="dropdown-item" href="#">It&apos;s important</a></li>
                                    <li><a class="dropdown-item" href="#">Happy life </a></li>
                                    <li><a class="dropdown-item" href="#">Another work</a></li>
                                </ul>
                            </div>
                            <div class="btn-group dropstart">
                                <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Danger left</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#">Threat </a></li>
                                    <li><a class="dropdown-item" href="#">Dangerous</a></li>
                                    <li><a class="dropdown-item" href="#">Alert </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="alignment-dropdown">&lt;!--You can use .dropdown-menu and inside added .dropdown-item.*(dropdown list)--&gt;  
    &lt;div class="btn-group dropup"&gt;
    &lt;button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Warning top&lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Be careful &lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Notifications&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Beware &lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group dropend"&gt;
    &lt;button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Success right&lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block text-end"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Good luck &lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Good job &lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Done!&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Primary bottom&lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block text-end"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;It's important&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Happy life &lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another work&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group dropstart"&gt;
    &lt;button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Danger left&lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Threat &lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dangerous&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Alert &lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Unique dropdown-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Helper dropdown</h4>
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
                        <p class="desc mb-0 mt-1"><span>Unique way to represent form dropdown and text
                                dropdown.</span><code></code><span></span></p>
                    </div>
                    <div class="card-body rtl-dropdown">
                        <div class="common-flex">
                            <div class="btn-group">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Helper Card</button>
                                <ul class="dropdown-menu dropdown-block p-3 dark-form">
                                    <li>
                                        <h6 class="fs-6 pb-2">Learn More!</h6>
                                        <p class="dropdown-item helper-truncate">There is a lot of information available
                                            here</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Warning Card</button>
                                <ul class="dropdown-menu dropdown-block p-3 dark-form">
                                    <li>
                                        <h6 class="fs-6 pb-2">Warning!</h6>
                                        <p class="dropdown-item helper-truncate">Please! Check your notifications.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Alert Card</button>
                                <ul class="dropdown-menu dropdown-block p-3 dark-form">
                                    <li>
                                        <h6 class="fs-6 pb-2">Danger</h6>
                                        <p class="dropdown-item helper-truncate">It&apos;s a danger path.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="helper-dropdown">&lt;!--You can use .dropdown-menu and inside added .dropdown-item.*(dropdown list)--&gt;  
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Helper Card&lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block p-3 dark-form"&gt;
    &lt;li&gt;
    &lt;h6 class="fs-6 fw-bold pb-2"&gt;Learn More!&lt;/h6&gt;
    &lt;p class="dropdown-item p-0 helper-truncate"&gt; There is a lot of information available here&lt;/p&gt;
    &lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Warning Card&lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block p-3 dark-form"&gt;
    &lt;li&gt;
    &lt;h6 class="fs-6 fw-bold pb-2"&gt;Warning!&lt;/h6&gt;
    &lt;p class="dropdown-item p-0 helper-truncate"&gt; Please! Check your notifications.&lt;/p&gt;
    &lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Alert Card&lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block p-3 dark-form"&gt;
    &lt;li&gt;
    &lt;h6 class="fs-6 fw-bold pb-2"&gt;Danger&lt;/h6&gt;
    &lt;p class="dropdown-item p-0 helper-truncate" href="#"&gt;It's a danger path.&lt;/p&gt;
    &lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Divider dropdown-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Divider dropdown</h4>
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
                        <p class="desc mb-0 mt-1"><span>When the.show class starts, dropdown appears.
                                And</span><code>.dropdown-divider</code><span>to change dropdown section.</span></p>
                    </div>
                    <div class="card-body rtl-dropdown">
                        <div class="common-flex">
                            <div class="btn-group">
                                <button class="btn btn-success rounded-pill dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Wishlist</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#">Shoes </a></li>
                                    <li><a class="dropdown-item" href="#">Bag</a></li>
                                    <li><a class="dropdown-item" href="#">Clothes </a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-primary rounded-pill dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Sports </button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#">Badminton</a></li>
                                    <li><a class="dropdown-item" href="#">Tenis </a></li>
                                    <li><a class="dropdown-item" href="#">Kho-Kho</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-secondary rounded-pill dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Colors </button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#">Orange </a></li>
                                    <li><a class="dropdown-item" href="#">Yellow </a></li>
                                    <li><a class="dropdown-item" href="#">Red </a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="divider-dropdown">&lt;!--You can use .dropdown-menu and inside added .dropdown-item.*(dropdown list)--&gt;  
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-success rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Wishlist&lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Shoes &lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Bag&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Clothes &lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;
    &lt;hr class="dropdown-divider"&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-primary rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Sports &lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Badminton&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Tenis &lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Kho-Kho&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;
    &lt;hr class="dropdown-divider"&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-secondary rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Colors &lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Orange &lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Yellow &lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Red &lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;
    &lt;hr class="dropdown-divider"&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Divider dropdown-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Sizing dropdown</h4>
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
                        <p class="desc mb-0 mt-1"><span>When the.show class starts, dropdown appears.
                                And</span><code>[.btn-lg/.btn-sm/.btn-xs]</code><span>class through button size
                                changed.</span></p>
                    </div>
                    <div class="card-body rtl-dropdown">
                        <div class="common-flex align-items-center">
                            <div class="btn-showcase">
                                <button class="btn btn-info light btn-lg dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Large button </button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#">Small button</a></li>
                                    <li><a class="dropdown-item" href="#">Medium button </a></li>
                                    <li><a class="dropdown-item" href="#">Large button </a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Very large button </a></li>
                                </ul>
                            </div>
                            <div class="btn-showcase">
                                <button class="btn btn-dark light btn-sm dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Small button </button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#">Small button </a></li>
                                    <li><a class="dropdown-item" href="#">Extra small button </a></li>
                                </ul>
                            </div>
                            <div class="btn-showcase">
                                <button class="btn btn-primary light btn-xs dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Extra small button </button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#">Small button </a></li>
                                    <li><a class="dropdown-item" href="#">Extra extra small </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="size-dropdown">&lt;!--You can use .dropdown-menu and inside added .dropdown-item.*(dropdown list)--&gt;  
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-info light btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Large button &lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;
    &lt;hr class="dropdown-divider"&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
    &lt;button class="btn btn-dark light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Small button &lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-block"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;
    &lt;hr class="dropdown-divider"&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;</code></pre>
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
    <script src="{{ asset('assets/js/vendors/clipboard/dist/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard-script.js') }}"></script>
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
@endsection
