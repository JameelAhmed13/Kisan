@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Tooltip</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Tooltip</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <!-- Basic Tooltip-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Basic Tooltip</h4>
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
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>data-bs-toggle</code><span> to add tooltip
                                attribute.</span></p>
                    </div>
                    <div class="card-body">
                        <button class="example-popover btn btn-primary mb-0 me-0" type="button" data-bs-container="body"
                            data-bs-toggle="tooltip" data-bs-placement="top" title=""
                            data-bs-original-title="Surprise!!! Thank you for hovering...">It&apos;s magic please hover
                            me... </button>
                        <h4 class="mb-1 py-4 pb-0">Inline Tooltip Content</h4>
                        <p class="mb-0">Here, is some content about tooltips that you can set the <a
                                class="font-primary fw-bold" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="tooltip" data-bs-original-title="popover text">tooltip</a> inside the content
                            with help of tooltip and also you can add
                            <button class="btn btn-secondary border-0 px-3 py-1 me-0 mb-0" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Button Tooltip!!"
                                data-bs-original-title="" title="">button </button> .Tooltips helps you to add more
                            and more content. A tooltip is often used to specify extra information about something when the
                            user moves the mouse pointer over an element
                        </p>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="tooltip">&lt;!--You can use attribute (data-bs-target='tooltip') to  used tooltips.--&gt;
    &lt;button class="example-popover btn btn-primary mb-0 me-0" type="button" data-container="body" data-bs-toggle="tooltip" data-bs-placement="top" title="Surprise!!! Thank you for hovering..."&gt;It's magic please hover me... &lt;/button&gt;
    &lt;h5 class="mb-1 py-4 pb-0"&gt;Inline Tooltip Content&lt;/h5&gt;
    &lt;p&gt;
       Here, is some content about tooltips that you can set the&lt;a class="font-primary fw-bold" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="tooltip" data-bs-original-title="popover text"&gt; tooltip&lt;/a&gt; inside the content with help of tooltip and also you can add
    &lt;button class="btn btn-success text-white border-0 px-3 py-1 me-0 mb-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="button"&gt;button &lt;/button&gt; .Tooltips helps you to add more and more content. A tooltip is often used to specify extra information about something when the user moves the mouse pointer over an element
    &lt;/p&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Colored Tooltip-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Colored Tooltip</h4>
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
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>btn- *</code><span> to change background
                                color.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="common-flex colored-tooltip">
                            <button class="mb-0 me-0 btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-custom-class="custom-tooltip" data-bs-title="Primary Color Tooltip"
                                data-bs-original-title="" title="">Primary</button>
                            <button class="mb-0 me-0 btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-custom-class="custom-tooltip" data-bs-title="Secondary Color Tooltip"
                                data-bs-original-title="" title="">Secondary</button>
                            <button class="mb-0 me-0 btn btn-tertiary" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-custom-class="custom-tooltip" data-bs-title="Tertiary Color Tooltip"
                                data-bs-original-title="" title="">Tertiary</button>
                            <button class="mb-0 me-0 btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-custom-class="custom-tooltip" data-bs-title="Success Color Tooltip"
                                data-bs-original-title="" title="">Success</button>
                            <button class="mb-0 me-0 btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-custom-class="custom-tooltip" data-bs-title="Danger Color Tooltip"
                                data-bs-original-title="" title="">Danger</button>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="colored-tooltip">&lt;!--You can use attribute (data-bs-target='tooltip') to  used tooltips.--&gt;
    &lt;button class="mb-0 me-0 btn btn-primary" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Primary"&gt;Primary&lt;/button&gt;
    &lt;button class="mb-0 me-0 btn btn-secondary" type=" button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Secondary"&gt;Secondary&lt;/button&gt;
    &lt;button class="mb-0 me-0 btn btn-success" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Success"&gt;Success&lt;/button&gt;
    &lt;button class="mb-0 me-0 btn btn-warning text-black" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Warning"&gt;Warning&lt;/button&gt;
    &lt;button class="mb-0 me-0 btn btn-danger" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Danger"&gt;Danger&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Direction Tooltip-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Tooltip directions</h4>
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
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>data-bs-placement=*</code><span>to tooltip
                                direction change.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="common-flex">
                            <button class="btn btn-primary rounded-pill mb-0 me-0" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                data-bs-original-title="Tooltip on top">Tooltip on top</button>
                            <button class="btn btn-secondary rounded-pill mb-0 me-0" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="right" title=""
                                data-bs-original-title="Tooltip on right">Tooltip on right</button>
                            <button class="btn btn-tertiary rounded-pill mb-0 me-0" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                data-bs-original-title="Tooltip on bottom">Tooltip on bottom</button>
                            <button class="btn btn-info rounded-pill mb-0 me-0" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="left" title="" data-bs-original-title="Tooltip on left">Tooltip
                                on left</button>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="dark-tooltip">&lt;!--You can use attribute (data-bs-target='tooltip') to  used tooltips.--&gt;
    &lt;button class="btn btn-primary mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top"&gt;Tooltip on top&lt;/button&gt;
    &lt;button class="btn btn-secondary mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right"&gt;Tooltip on right&lt;/button&gt;
    &lt;button class="btn btn-success mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom"&gt;Tooltip on bottom&lt;/button&gt;
    &lt;button class="btn btn-warning mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left"&gt;Tooltip on left&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- HTML Tooltip-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>HTML elements with click event</h4>
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
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>data-bs-title,
                                data-bs-trigger=&quot;click&quot;</code><span> to the content under the HTML tag with click
                                event.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="common-flex">
                            <button class="btn btn-primary mb-0 me-0" type="button" data-bs-toggle="tooltip"
                                data-bs-trigger="click" data-bs-custom-class="custom-tooltip" data-bs-html="true"
                                data-bs-placement="top"
                                data-bs-title="&amp;lt; em &amp;gt;Thank&amp;lt;/em&amp;gt; &amp;lt; u &amp;gt;you&amp;lt;/ul&amp;gt;"
                                data-bs-original-title="" title="">Notifications Received</button>
                            <button class="btn btn-warning mb-0 me-0" type="button" data-bs-toggle="tooltip"
                                data-bs-trigger="click" data-bs-placement="top" data-bs-html="true"
                                data-bs-title="&amp;lt; b &amp;gt;Thank&amp;lt;/ b &amp;gt; &amp;lt; em &amp;gt;you&amp;lt;/em&amp;gt;"
                                data-bs-original-title="" title="">Last Warning</button>
                            <button class="btn btn-danger mb-0 me-0" type="button" data-bs-toggle="tooltip"
                                data-bs-trigger="click" data-bs-placement="top" data-bs-html="true"
                                data-bs-title="&amp;lt; em &amp;gt;Thank&amp;lt;/em&amp;gt; &amp;lt; u &amp;gt;you&amp;lt;/ul&amp;gt;"
                                data-bs-original-title="" title="">It&apos;s Danger</button>
                            <button class="btn btn-info mb-0 me-0" type="button" data-bs-toggle="tooltip"
                                data-bs-trigger="click" data-bs-placement="top" data-bs-html="true"
                                data-bs-title="&amp;lt; b &amp;gt;Thank&amp;lt;/ b &amp;gt; &amp;lt; em &amp;gt;you&amp;lt;/em&amp;gt;"
                                data-bs-original-title="" title="">Coming soon</button>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="click-tooltip">&lt;!--You can use attribute (data-bs-target='click') to  used tooltips.--&gt;
    &lt;button class="btn btn-primary mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-trigger="click" data-bs-custom-class="custom-tooltip" data-bs-html="true" data-bs-placement="top" data-bs-title="&lt; em &gt;Thank&lt;/em&gt; &lt; u &gt;you&lt;/ul&gt;" data-bs-original-title="" title="" aria-describedby="tooltip348788"&gt;Notifications Received&lt;/button&gt;
    &lt;button class="btn btn-warning mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-trigger="click" data-bs-placement="top" data-bs-html="true" data-bs-title="&lt; b &gt;Thank&lt;/ b &gt; &lt; em &gt;you&lt;/em&gt;" data-bs-original-title="" title="" aria-describedby="tooltip851095"&gt;Last Warning&lt;/button&gt;
    &lt;button class="btn btn-danger mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-trigger="click" data-bs-placement="top" data-bs-html="true" data-bs-title="&lt; em &gt;Thank&lt;/em&gt; &lt; u &gt;you&lt;/ul&gt;" data-bs-original-title="" title="" aria-describedby="tooltip891699"&gt;It's Danger&lt;/button&gt;
    &lt;button class="btn btn-info mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-trigger="click" data-bs-placement="top" data-bs-html="true" data-bs-title="&lt; b &gt;Thank&lt;/ b &gt; &lt; em &gt;you&lt;/em&gt;" data-bs-original-title="" title="" aria-describedby="tooltip260145"&gt;Coming soon&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Filled Tooltip-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Filled Tooltip</h4>
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
                        <p class="desc mb-0 mt-1"><span>Tooltip in hover effect through fill dark
                                color</span><code>.[.btn-outline-*]</code><span> to button tag.</span></p>
                    </div>
                    <div class="card-body fill-tooltip">
                        <div class="common-flex">
                            <button class="btn btn-outline-primary mb-0 me-0" type="button" data-bs-toggle="tooltip"
                                data-bs-html="true" data-bs-placement="top" data-bs-title="Tooltip Primary"
                                data-bs-original-title="" title="">Tooltip Primary</button>
                            <button class="btn btn-outline-secondary mb-0 me-0" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-html="true" data-bs-title="Tooltip Secondary"
                                data-bs-original-title="" title="">Tooltip Secondary</button>
                            <button class="btn btn-outline-success mb-0 me-0" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-html="true" data-bs-title="Tooltip Success"
                                data-bs-original-title="" title="">Tooltip Success</button>
                            <button class="btn btn-outline-warning mb-0 me-0" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-html="true" data-bs-title="Tooltip Warning"
                                data-bs-original-title="" title="">Tooltip Warning</button>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="filled-tooltip">&lt;!--You can use attribute (data-bs-target='tooltip') to  used tooltips.--&gt;
    &lt;button class="btn btn-outline-primary mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="top" data-bs-title="Tooltip Primary"&gt;Tooltip Primary&lt;/button&gt;
    &lt;button class="btn btn-outline-secondary mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-title="Tooltip Secondary"&gt;Tooltip Secondary&lt;/button&gt;
    &lt;button class="btn btn-outline-success mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-title="Tooltip Success"&gt;Tooltip Success&lt;/button&gt;
    &lt;button class="btn btn-outline-info mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-title="Tooltip Info"&gt;Tooltip Info&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <!-- HTML Tooltip-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Wonky Tooltip</h4>
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
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.wonky-tooltip ,
                                .input-group&quot;</code><span>add animation to shake the tooltip.</span></p>
                    </div>
                    <div class="card-body wonky-tooltip">
                        <form>
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Username"
                                    aria-label="Username"><span class="input-group-text bg-primary">
                                    <svg class="svg-w-20 svg-white">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Profile') }}"></use>
                                    </svg><span class="tooltip bg-white default-border font-primary">Username must consist
                                        of "Number or special characters"</span></span>
                            </div>
                            <div class="input-group">
                                <input class="form-control" type="password" placeholder="Password"
                                    aria-label="Password"><span class="input-group-text bg-secondary">
                                    <svg class="svg-w-20 svg-white">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Password') }}"></use>
                                    </svg><span class="tooltip bg-white default-border font-secondary">Minimum 8 characters
                                        password contains combination</span></span>
                            </div>
                        </form>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="wonky-tooltip">&lt;!--You can use .wonky-tooltip , .input-group"', 'add animation to shake the tooltip.--&gt;
    &lt; div class="input-group"&gt;
    &lt; input class="form-control" type="text" placeholder="Username" aria-label="Username"&gt;
    &lt; span class="input-group-text bg-primary"&gt;
    &lt; svg class="svg-w-20 svg-white"&gt;
    &lt; use href="{{ asset('assets/svg/iconly-sprite.svg#Profile') }}"&gt;&lt;/ use &gt;&lt;/ svg &gt;
    &lt; span class="tooltip bg-white default-border font-primary"&gt;Username must consist of "Number or special characters"&lt;/ span &gt;&lt;/ span &gt;&lt;/ div &gt;
    &lt; div class="input-group"&gt;
    &lt; input class="form-control" type="text" placeholder="Password" aria-label="Password"&gt;
    &lt; span class="input-group-text bg-secondary"&gt;
    &lt; svg class="svg-w-20 svg-white"&gt;
    &lt; use href="{{ asset('assets/svg/iconly-sprite.svg#Password') }}"&gt;&lt;/ use &gt;&lt;/ svg &gt;
    &lt; span class="tooltip bg-white default-border font-secondary"&gt;Minimum 8 characters password contains combination&lt;/ span &gt;&lt;/ span &gt;&lt;/ div &gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5">
                <!-- Image Tooltip-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Image Tooltip</h4>
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
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>data-bs-title,
                                data-bs-trigger=&quot;click&quot;</code><span> to the image with click event.</span></p>
                    </div>
                    <div class="card-body">
                        <ul class="common-flex">
                            <li><img src="{{ asset('assets/images/social/1.png') }}" alt=""
                                    data-bs-toggle="tooltip" data-bs-trigger="click" data-bs-title="Facebook !!"></li>
                            <li> <img src="{{ asset('assets/images/social/2.png') }}" alt=""
                                    data-bs-toggle="tooltip" data-bs-trigger="click" data-bs-title="Instagram !!"></li>
                            <li> <img src="{{ asset('assets/images/social/3.png') }}" alt=""
                                    data-bs-toggle="tooltip" data-bs-trigger="click" data-bs-title="Twitter !!"></li>
                            <li> <img src="{{ asset('assets/images/social/4.png') }}" alt=""
                                    data-bs-toggle="tooltip" data-bs-trigger="click" data-bs-title="Youtube !!"></li>
                        </ul>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="img-tooltip">&lt;!--You can use attribute (data-bs-trigger='click') to  used tooltips.--&gt;
    &lt; li &gt; &lt; img src="{{ asset('assets/images/social/1.png') }}" alt="" data-bs-toggle="tooltip" data-bs-trigger="click" data-bs-title="Facebook !!"&gt;&lt;/ li &gt;
    &lt; li &gt; &lt; img src="{{ asset('assets/images/social/2.png') }}" alt="" data-bs-toggle="tooltip" data-bs-trigger="click" data-bs-title="Instagram !!"&gt;&lt;/ li &gt;
    &lt; li &gt; &lt; img src="{{ asset('assets/images/social/3.png') }}" alt="" data-bs-toggle="tooltip" data-bs-trigger="click" data-bs-title="Twitter !!"&gt;&lt;/ li &gt;
    &lt; li &gt; &lt; img src="{{ asset('assets/images/social/4.png') }}" alt="" data-bs-toggle="tooltip" data-bs-trigger="click" data-bs-title="Youtube !!"&gt;&lt;/ li &gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/tooltip-custom.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/clipboard/dist/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard-script.js') }}"></script>
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
@endsection
