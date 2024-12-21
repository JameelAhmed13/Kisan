@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Tag &amp; Pills</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Tag &amp; Pills</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <!-- Context-badge Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Badges contextual variations</h4>
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
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.badge</code><span>utility class to make more
                                badges.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="badge-spacing"><span class="badge badge-primary">Primary</span><span
                                class="badge badge-secondary">Secondary</span><span
                                class="badge badge-tertiary">Tertiary</span><span
                                class="badge badge-success">Success</span><span class="badge badge-info">Info</span><span
                                class="badge badge-warning">Warning</span><span
                                class="badge badge-danger">Danger</span><span
                                class="badge badge-light text-dark">Light</span><span
                                class="badge badge-dark tag-pills-sm-mb">Dark</span></div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="badge-variations">&lt;!--You can use badge-* class through change the colors of badges (primary/secondary/success...).--&gt;
    &lt;span  class="badge badge-primary"&gt;Primary&lt;/span&gt;
    &lt;span  class="badge badge-secondary"&gt;Secondary&lt;/span&gt;
    &lt;span  class="badge badge-tertiary"&gt;Tertiary&lt;/span&gt;
    &lt;span  class="badge badge-success"&gt;Success&lt;/span&gt;
    &lt;span  class="badge badge-info"&gt;Info&lt;/span&gt;
    &lt;span  class="badge badge-warning"&gt;Warning&lt;/span&gt;
    &lt;span  class="badge badge-danger"&gt;Danger&lt;/span&gt;
    &lt;span  class="badge badge-light text-dark"&gt;Light&lt;/span&gt;
    &lt;span  class="badge badge-dark tag-pills-sm-mb"&gt;Dark&lt;/span&gt;        </code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Context-pill Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Pills contextual variations</h4>
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
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.rounded-pill</code><span> utility class to make
                                badges more rounded.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="badge-spacing"><span class="badge badge-primary rounded-pill">Primary</span><span
                                class="badge badge-secondary rounded-pill">Secondary</span><span
                                class="badge badge-tertiary rounded-pill">Tertiary</span><span
                                class="badge badge-success rounded-pill">Success</span><span
                                class="badge badge-info rounded-pill">Info</span><span
                                class="badge badge-warning rounded-pill">Warning</span><span
                                class="badge badge-danger rounded-pill">Danger</span><span
                                class="badge badge-light text-dark rounded-pill">Light</span><span
                                class="badge badge-dark tag-pills-sm-mb rounded-pill">Dark</span></div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="pills-variations">&lt;!--You can use .rounded-pill class through change the rounded badges (rounded-pill).--&gt;
    &lt;span  class="badge badge-primary rounded-pill"&gt;Primary&lt;/span&gt;
    &lt;span  class="badge badge-secondary rounded-pill"&gt;Secondary&lt;/span&gt;
    &lt;span  class="badge badge-tertiary rounded-pill"&gt;Tertiary&lt;/span&gt;
    &lt;span  class="badge badge-success rounded-pill"&gt;Success&lt;/span&gt;
    &lt;span  class="badge badge-info rounded-pill"&gt;Info&lt;/span&gt;
    &lt;span  class="badge badge-warning rounded-pill"&gt;Warning&lt;/span&gt;
    &lt;span  class="badge badge-danger rounded-pill"&gt;Danger&lt;/span&gt;
    &lt;span  class="badge badge-light text-dark rounded-pill"&gt;Light&lt;/span&gt;
    &lt;span  class="badge badge-dark tag-pills-sm-mb rounded-pill"&gt;Dark&lt;/span&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Context-pill Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Number of badge</h4>
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
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.badge</code><span> utility class to make
                                badges more rounded with a larger border-radius.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="badge-spacing"><span class="badge badge-primary">1</span><span
                                class="badge badge-secondary">2</span><span class="badge badge-tertiary">3</span><span
                                class="badge badge-success">4</span><span class="badge badge-info">5</span><span
                                class="badge badge-warning">6</span><span class="badge badge-danger">7</span><span
                                class="badge badge-light text-dark">8</span><span
                                class="badge badge-dark tag-pills-sm-mb">9</span></div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="number-of-badge">&lt;!--You can use badge-* class through make badges (Numbered Badges).--&gt;
    &lt; span class="badge badge-primary"&gt;1&lt;/span&gt;
    &lt; span class="badge badge-secondary"&gt;2&lt;/span&gt;
    &lt; span class="badge badge-tertiary"&gt;3&lt;/span&gt;
    &lt; span class="badge badge-success"&gt;4&lt;/span&gt;
    &lt; span class="badge badge-info"&gt;5&lt;/span&gt;
    &lt; span class="badge badge-warning"&gt;6&lt;/span&gt;
    &lt; span class="badge badge-danger"&gt;7&lt;/span&gt;
    &lt; span class="badge badge-light text-dark"&gt;8&lt;/span&gt;
    &lt; span class="badge badge-dark tag-pills-sm-mb"&gt;9&lt;/span&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Context-pill Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Number of pills tags</h4>
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
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.rounded-pill</code><span> utility class to
                                make badges more rounded with a larger border-radius.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="badge-spacing"><span
                                class="badge badge-primary rounded-pill badge-p-space">1</span><span
                                class="badge badge-secondary rounded-pill badge-p-space">2</span><span
                                class="badge badge-tertiary rounded-pill badge-p-space">3</span><span
                                class="badge badge-success rounded-pill badge-p-space">4</span><span
                                class="badge badge-info rounded-pill badge-p-space">5</span><span
                                class="badge badge-warning rounded-pill badge-p-space">6</span><span
                                class="badge badge-danger rounded-pill badge-p-space">7</span><span
                                class="badge badge-light text-dark rounded-pill badge-p-space">8</span><span
                                class="badge badge-dark tag-pills-sm-mb rounded-pill badge-p-space">9</span></div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="number-of-pills">&lt;!--You can use .rounded-circle class through change the circled badges (rounded-circle).--&gt;
    &lt; span class="badge badge-primary rounded-pill badge-p-space"&gt;1&lt;/span&gt;
    &lt; span class="badge badge-secondary rounded-pill badge-p-space"&gt;2&lt;/span&gt;
    &lt; span class="badge badge-tertiary rounded-pill badge-p-space"&gt;3&lt;/span&gt;
    &lt; span class="badge badge-success rounded-pill badge-p-space"&gt;4&lt;/span&gt;
    &lt; span class="badge badge-info rounded-pill badge-p-space"&gt;5&lt;/span&gt;
    &lt; span class="badge badge-warning rounded-pill badge-p-space"&gt;6&lt;/span&gt;
    &lt; span class="badge badge-danger rounded-pill badge-p-space"&gt;7&lt;/span&gt;
    &lt; span class="badge badge-light text-dark rounded-pill badge-p-space"&gt;8&lt;/span&gt;
    &lt; span class="badge badge-dark tag-pills-sm-mb rounded-pill badge-p-space"&gt;9&lt;/span&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Context-pill Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Badge tags with icons</h4>
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
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.badge</code><span> utility class to make more
                                icons.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="badge-spacing"><a class="badge b-ln-height badge-primary p-2" href="#">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#activity') }}"></use>
                                </svg></a><a class="badge b-ln-height badge-secondary p-2" href="#">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#headphones') }}"></use>
                                </svg></a><a class="badge b-ln-height badge-tertiary p-2" href="#">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}"></use>
                                </svg></a><a class="badge b-ln-height badge-success p-2" href="#">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#github') }}"></use>
                                </svg></a><a class="badge b-ln-height badge-info p-2" href="#">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#award') }}"></use>
                                </svg></a><a class="badge b-ln-height badge-warning p-2" href="#">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#dollar-sign') }}"></use>
                                </svg></a><a class="badge b-ln-height badge-danger p-2" href="#">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#heart') }}"></use>
                                </svg></a><a class="badge b-ln-height badge-light text-dark p-2" href="#">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#mail') }}"></use>
                                </svg></a><a class="badge b-ln-height badge-dark p-2" href="#">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#airplay') }}"></use>
                                </svg></a></div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="badge-icons">&lt;!--You can use data-feather icons through change the icons badges.--&gt;
    &lt; a class="badge b-ln-height badge-primary p-2" href="#"&gt;
    &lt; svg class="feather"&gt;
    &lt; use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#activity') }}"&gt;&lt;/use&gt;&lt;/svg&gt;&lt;/a&gt;
    &lt; a class="badge b-ln-height badge-secondary p-2" href="#"&gt;
    &lt; svg class="feather"&gt;
    &lt; use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#headphones') }}"&gt;&lt;/use&gt;&lt;/svg&gt;&lt;/a&gt;
    &lt; a class="badge b-ln-height badge-tertiary p-2" href="#"&gt;
    &lt; svg class="feather"&gt;
    &lt; use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}"&gt;&lt;/use&gt;&lt;/svg&gt;&lt;/a&gt;
    &lt; a class="badge b-ln-height badge-success p-2" href="#"&gt;
    &lt; svg class="feather"&gt;
    &lt; use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#github') }}"&gt;&lt;/use&gt;&lt;/svg&gt;&lt;/a&gt;
    &lt; a class="badge b-ln-height badge-info p-2" href="#"&gt;
    &lt; svg class="feather"&gt;
    &lt; use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#award') }}"&gt;&lt;/use&gt;&lt;/svg&gt;&lt;/a&gt;
    &lt; a class="badge b-ln-height badge-warning p-2" href="#"&gt;
    &lt; svg class="feather"&gt;
    &lt; use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#dollar-sign') }}"&gt;&lt;/use&gt;&lt;/svg&gt;&lt;/a&gt;
    &lt; a class="badge b-ln-height badge-danger p-2" href="#"&gt;
    &lt; svg class="feather"&gt;
    &lt; use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#heart') }}"&gt;&lt;/use&gt;&lt;/svg&gt;&lt;/a&gt;
    &lt; a class="badge b-ln-height badge-light text-dark p-2" href="#"&gt;
    &lt; svg class="feather"&gt;
    &lt; use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#mail') }}"&gt;&lt;/use&gt;&lt;/svg&gt;&lt;/a&gt;
    &lt; a class="badge b-ln-height badge-dark p-2" href="#"&gt;
    &lt; svg class="feather"&gt;
    &lt; use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#airplay') }}"&gt;&lt;/use&gt;&lt;/svg&gt;&lt;/a&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Context-pill Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Rounded pills with icons</h4>
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
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.badge</code><span> utility class to make more
                                icons.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="badge-spacing"><a class="badge b-ln-height badge-primary rounded-pill p-2"
                                href="#">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#activity') }}"></use>
                                </svg></a><a class="badge b-ln-height badge-secondary rounded-pill p-2" href="#">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#headphones') }}"></use>
                                </svg></a><a class="badge b-ln-height badge-tertiary rounded-pill p-2" href="#">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}"></use>
                                </svg></a><a class="badge b-ln-height badge-success rounded-pill p-2" href="#">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#github') }}"></use>
                                </svg></a><a class="badge b-ln-height badge-info rounded-pill p-2" href="#">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#award') }}"></use>
                                </svg></a><a class="badge b-ln-height badge-warning rounded-pill p-2" href="#">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#dollar-sign') }}"></use>
                                </svg></a><a class="badge b-ln-height badge-danger rounded-pill p-2" href="#">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#heart') }}"></use>
                                </svg></a><a class="badge b-ln-height badge-light text-dark rounded-pill p-2"
                                href="#">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#mail') }}"></use>
                                </svg></a><a class="badge b-ln-height badge-dark rounded-pill p-2" href="#">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#airplay') }}"></use>
                                </svg></a></div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="rounded-icons">&lt;!--You can use .rounded-circle class through change the icons badge.--&gt;
    &lt; a class="badge b-ln-height badge-primary rounded-pill p-2" href="#"&gt;
    &lt; svg class="feather"&gt;&lt; svg href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#activity') }}"&gt;&lt;/ use&gt;&lt;/svg&gt;&lt;/ a&gt;| &lt; a class="badge b-ln-height badge-secondary rounded-pill p-2" href="#"&gt;
    &lt; svg class="feather"&gt;&lt; svg href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#headphones') }}"&gt;&lt;/ use&gt;&lt;/svg&gt;&lt;/ a&gt;| &lt; a class="badge b-ln-height badge-tertiary rounded-pill p-2" href="#"&gt;
    &lt; svg class="feather"&gt;&lt; svg href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}"&gt;&lt;/ use&gt;&lt;/svg&gt;&lt;/ a&gt;| &lt; a class="badge b-ln-height badge-success rounded-pill p-2" href="#"&gt;
    &lt; svg class="feather"&gt;&lt; svg href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#github') }}"&gt;&lt;/ use&gt;&lt;/svg&gt;&lt;/ a&gt;| &lt; a class="badge b-ln-height badge-info rounded-pill p-2" href="#"&gt;
    &lt; svg class="feather"&gt;&lt; svg href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#award') }}"&gt;&lt;/ use&gt;&lt;/svg&gt;&lt;/ a&gt;| &lt; a class="badge b-ln-height badge-warning rounded-pill p-2" href="#"&gt;
    &lt; svg class="feather"&gt;&lt; svg href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#dollar-sign') }}"&gt;&lt;/ use&gt;&lt;/svg&gt;&lt;/ a&gt;| &lt; a class="badge b-ln-height badge-danger rounded-pill p-2" href="#"&gt;
    &lt; svg class="feather"&gt;&lt; svg href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#heart') }}"&gt;&lt;/ use&gt;&lt;/svg&gt;&lt;/ a&gt;| &lt; a class="badge b-ln-height badge-light text-dark rounded-pill p-2" href="#"&gt;
    &lt; svg class="feather"&gt;&lt; svg href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#mail') }}"&gt;&lt;/ use&gt;&lt;/svg&gt;&lt;/ a&gt;| &lt; a class="badge b-ln-height badge-dark rounded-pill p-2" href="#"&gt;
    &lt; svg class="feather"&gt;&lt; svg href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#airplay') }}"&gt;&lt;/ use&gt;&lt;/svg&gt;&lt;/ a&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Touchspin Badges-->
                <div class="card touchspin-badge">
                    <div class="card-header pb-0">
                        <h4>Touchspin Badges</h4>
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
                        <p class="desc mb-0 mt-1">
                            <span>Use</span><code>.main-touchspin,.increment-touchspin</code><span>for change the
                                value.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="touchspin-wrapper">
                            <div class="menu-icon">
                                <svg class="svg-w-20 stroke-dark">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Bell') }}"></use>
                                </svg>
                            </div><span class="badge badge-primary main-touchspin" id="inputData1">3</span>
                            <button class="decrement-touchspin btn-touchspin btn-outline-primary me-3">
                                <svg class="svg-w-16 stroke-dark">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#minus') }}"></use>
                                </svg>
                            </button>
                            <button class="increment-touchspin btn-touchspin btn-outline-primary">
                                <svg class="svg-w-16 stroke-dark">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#plus') }}"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="touchspin-badge">&lt;!--You can use .main-touchspin,.increment-touchspin', 'for change the value.--&gt;
    &lt; div class="touchspin-wrapper"&gt;
    &lt; div class="menu-icon"&gt;
    &lt; svg class="svg-w-20 stroke-dark"&gt;
    &lt; use href="{{ asset('assets/svg/iconly-sprite.svg#Bell') }}"&gt;&lt;/use&gt;&lt;/svg&gt;&lt;/div&gt;
    &lt; span class="badge badge-primary main-touchspin" id="inputData1"&gt;3&lt;/span&gt;
    &lt; button class="decrement-touchspin btn-touchspin btn-outline-primary"&gt;
    &lt; svg class="svg-w-16 stroke-dark"&gt;
    &lt; use href="{{ asset('assets/svg/iconly-sprite.svg#minus') }}"&gt;&lt;/use&gt;&lt;/svg&gt;&lt;/button&gt;
    &lt; button class="increment-touchspin btn-touchspin btn-outline-primary"&gt;
    &lt; svg class="svg-w-16 stroke-dark"&gt;
    &lt; use href="{{ asset('assets/svg/iconly-sprite.svg#plus') }}"&gt;&lt;/use&gt;&lt;/svg&gt;&lt;/button&gt;&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Animated Badges-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Animated Badges</h4>
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
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.bg-common-*, animated-badge,
                                .dote-*</code><span>for add animation on badges.</span></p>
                    </div>
                    <div class="card-body animated-badge">
                        <ul class="d-flex">
                            <li class="bg-common-primary"><span class="dote-primary"></span>
                                <svg class="svg-w-20">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg>
                            </li>
                            <li class="bg-common-secondary"><span class="dote-secondary"></span>
                                <svg class="svg-w-20">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Star') }}"></use>
                                </svg>
                            </li>
                            <li class="bg-common-tertiary"><span class="dote-tertiary"></span>
                                <svg class="svg-w-20">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Bag') }}"></use>
                                </svg>
                            </li>
                            <li class="bg-common-info"><span class="dote-info"></span>
                                <svg class="svg-w-20">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Bell') }}"></use>
                                </svg>
                            </li>
                        </ul>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="animated-badge">&lt;!--You can use .bg-common-*, animated-badge, .dote-*', 'for add animation on badges.--&gt;
    &lt;li class="bg-common-primary"&gt;
    &lt;span class="dote-primary"&gt;&lt;/span&gt;
    &lt;svgclass="svg-w-20"&gt;
    &lt;use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"&gt;&lt;/use&gt; &lt;/svg&gt;&lt;/li&gt;
    &lt;li class="bg-common-secondary"&gt;
    &lt;span class="dote-secondary"&gt;&lt;/span&gt;
    &lt;svgclass="svg-w-20"&gt;
    &lt;use href="{{ asset('assets/svg/iconly-sprite.svg#Star') }}"&gt;&lt;/use&gt;&lt;/svg&gt;&lt;/li&gt;
    &lt;li class="bg-common-tertiary"&gt;
    &lt;span class="dote-tertiary"&gt;&lt;/span&gt;
    &lt;svgclass="svg-w-20"&gt;
    &lt;use href="{{ asset('assets/svg/iconly-sprite.svg#Bag') }}"&gt;&lt;/use&gt;&lt;/svg&gt;&lt;/li&gt;
    &lt;li class="bg-common-info"&gt;
    &lt;span class="dote-info"&gt;&lt;/span&gt;
    &lt;svgclass="svg-w-20"&gt;
    &lt;use href="{{ asset('assets/svg/iconly-sprite.svg#Bell') }}"&gt;&lt;/use&gt; &lt;/svg&gt;&lt;/li&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Center Badges-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Center Badges</h4>
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
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.badge, .badge-* , center-badge</code><span>for
                                center mode badges.</span></p>
                    </div>
                    <div class="card-body">
                        <ul class="d-flex center-badge">
                            <li class="border-info"><span class="badge badge-info">New</span>
                                <svg class="svg-w-24 stroke-info">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Category') }}"></use>
                                </svg>
                            </li>
                            <li class="border-success"><span class="badge badge-success">Update</span>
                                <svg class="svg-w-24 stroke-success">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Chart') }}"></use>
                                </svg>
                            </li>
                            <li class="border-primary"><span class="badge badge-primary">Latest</span>
                                <svg class="svg-w-24 stroke-primary">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Ticket-star') }}"></use>
                                </svg>
                            </li>
                            <li class="border-danger"><span class="badge badge-danger">Error</span>
                                <svg class="svg-w-24 stroke-danger">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Danger') }}"></use>
                                </svg>
                            </li>
                        </ul>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="center-badge">&lt;!--You can use .badge, .badge-* , center-badge', 'for center mode badges.--&gt;
    &lt;li class="border-info"&gt;
    &lt;span class="badge badge-info"&gt;New&lt;/span&gt;
    &lt;svg class="svg-w-24 stroke-info"&gt;
    &lt;use href="{{ asset('assets/svg/iconly-sprite.svg#Category') }}"&gt;&lt;/use&gt;&lt;/svg&gt;&lt;/li&gt;
    &lt;li class="border-success"&gt;
    &lt;span class="badge badge-success"&gt;Update&lt;/span&gt;
    &lt;svg class="svg-w-24 stroke-success"&gt;
    &lt;use href="{{ asset('assets/svg/iconly-sprite.svg#Chart') }}"&gt;&lt;/use&gt;&lt;/svg&gt;&lt;/li&gt;
    &lt;li class="border-primary"&gt;
    &lt;span class="badge badge-primary"&gt;Latest&lt;/span&gt;
    &lt;svg class="svg-w-24 stroke-primary"&gt;
    &lt;use href="{{ asset('assets/svg/iconly-sprite.svg#Ticket-star') }}"&gt;&lt;/use&gt;&lt;/svg&gt;&lt;/li&gt;
    &lt;li class="border-danger"&gt;
    &lt;span class="badge badge-danger"&gt;Error&lt;/span&gt;
    &lt;svg class="svg-w-24 stroke-danger"&gt;
    &lt;use href="{{ asset('assets/svg/iconly-sprite.svg#Danger') }}"&gt;&lt;/use&gt;&lt;/svg&gt;&lt;/li&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Badge Heading Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Badge headings example</h4>
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
                        <p class="desc mb-0 mt-1"><span>All html headings,</span><code>&lt;h1&gt; ..
                                &lt;h6&gt;</code><span>are available in .badge tags.</span></p>
                    </div>
                    <div class="card-body">
                        <h1 class="badge-heading">Badge Heading 1<span class="badge badge-primary">Latest</span></h1>
                        <h2 class="badge-heading">Badge Heading 2<span class="badge badge-secondary">Trending</span></h2>
                        <h3 class="badge-heading">Badge Heading 3<span class="badge badge-tertiary">Checkout</span></h3>
                        <h4 class="badge-heading">Badge Heading 4<span class="badge badge-success">New</span></h4>
                        <h5 class="badge-heading">Badge Heading 5<span class="badge badge-warning">Inbox</span></h5>
                        <h6 class="badge-heading">Badge Heading 6<span class="badge badge-danger">Login</span></h6>
                        <p class="badge-heading pb-0 mb-0">Badge Paragraph<span class="badge badge-dark">Logout</span></p>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="badge-headings">&lt;!--You can use headings with .badge class.--&gt;
    &lt;h1 class="badge-heading"&gt;Badge Heading 1&lt;span class="badge badge-primary"&gt;Latest&lt;/span&gt;&lt;/h1&gt;
    &lt;h2 class="badge-heading"&gt;Badge Heading 2&lt;span class="badge badge-secondary"&gt;Trending&lt;/span&gt;&lt;/h2&gt;
    &lt;h3 class="badge-heading"&gt;Badge Heading 3&lt;span class="badge badge-success"&gt;Checkout&lt;/span&gt;&lt;/h3&gt;
    &lt;h4 class="badge-heading"&gt;Badge Heading 4&lt;span class="badge badge-warning"&gt;Inbox&lt;/span&gt;&lt;/h4&gt;
    &lt;h5 class="badge-heading"&gt;Badge Heading 5&lt;span class="badge badge-danger"&gt;Login&lt;/span&gt;&lt;/h5&gt;
    &lt;h6 class="badge-heading pb-0"&gt;Badge Heading 6&lt;span class="badge badge-dark"&gt;Logout&lt;/span&gt;&lt;/h6&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Badge Heading Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Badges as part buttons</h4>
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
                        <p class="desc mb-0 mt-1"><span>All html button,</span><code>.btn , .badge</code><span>are
                                available.</span></p>
                    </div>
                    <div class="card-body button-badge">
                        <div class="badge-spacing flex-column align-items-start">
                            <button class="btn btn-primary d-flex align-items-center" type="button">Messages <span
                                    class="badge rounded-circle btn-p-space badge-light text-dark ms-2">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#mail') }}"></use>
                                    </svg></span></button>
                            <button class="btn btn-secondary d-flex align-items-center" type="button">Notifications <span
                                    class="badge rounded-circle btn-p-space badge-light text-dark ms-2">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#bell') }}"></use>
                                    </svg></span></button>
                            <button class="btn btn-tertiary d-flex align-items-center" type="button">Update available
                                <span class="badge rounded-circle btn-p-space badge-light text-dark ms-2">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#settings') }}"></use>
                                    </svg></span></button>
                            <button class="btn btn-success d-flex align-items-center" type="button">Playing Now <span
                                    class="badge rounded-circle btn-p-space badge-light text-dark ms-2">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#music') }}"></use>
                                    </svg></span></button>
                            <button class="btn btn-info d-flex align-items-center" type="button">1.2 GB Used <span
                                    class="badge rounded-circle btn-p-space badge-light text-dark ms-2">
                                    <svg class="feather">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#alert-triangle') }}">
                                        </use>
                                    </svg></span></button>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="badge-as-part-btn">&lt;!--You can use badge-* class with any icons used.(badge-icons/headings).--&gt;
    &lt;div class="badge-spacing flex-column align-items-start"&gt;
    &lt;button class="btn btn-primary d-flex align-items-center" type="button"&gt;Messages &lt;span class="badge rounded-circle btn-p-space badge-light text-dark ms-2"&gt;&lt;i data-feather="mail"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/button&gt;
    &lt;button class="btn btn-secondary d-flex align-items-center" type="button"&gt;Notifications &lt;span class="badge rounded-circle btn-p-space badge-light text-dark ms-2"&gt;&lt;i data-feather="bell"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/button&gt;
    &lt;button class="btn btn-success d-flex align-items-center" type="button"&gt;Update available &lt;span class="badge rounded-circle btn-p-space badge-light text-dark ms-2"&gt;&lt;i data-feather="settings"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/button&gt;
    &lt;button class="btn btn-info d-flex align-items-center" type="button"&gt;Playing Now &lt;span class="badge rounded-circle btn-p-space badge-light text-dark ms-2"&gt;&lt;i data-feather="music"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/button&gt;
    &lt;button class="btn btn-warning text-dark d-flex align-items-center" type="button"&gt;1.2 GB Used &lt;span class="badge rounded-circle btn-p-space badge-light text-dark ms-2"&gt;&lt;i data-feather="alert-triangle"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/button&gt;</code></pre>
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
