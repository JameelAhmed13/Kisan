@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Avatars</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Avatars</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <!-- Size Avatar-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Sizes</h4>
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
                        <p class="desc mb-0 mt-1"><span>Using</span><code>.img- * (70/80/90/100)</code><span>class you can
                                set the size of avatar</span></p>
                    </div>
                    <div class="card-body">
                        <div class="avatar-showcase">
                            <div class="avatars">
                                <div class="avatar"><img class="rounded-circle img-100" src="{{ asset('assets/images/avatar/1.jpg') }}"
                                        alt="#"></div>
                                <div class="avatar"><img class="rounded-circle img-90" src="{{ asset('assets/images/avatar/2.jpg') }}"
                                        alt="#"></div>
                                <div class="avatar"><img class="rounded-circle img-80" src="{{ asset('assets/images/avatar/3.jpg') }}"
                                        alt="#"></div>
                                <div class="avatar"><img class="rounded-circle img-70" src="{{ asset('assets/images/avatar/4.jpg') }}"
                                        alt="#"></div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="avatar-size">&lt;!--You can use img-* class through change the size of avatar (70/80/90/100).--&gt;
    &lt;div class="avatar"&gt;
    &lt;img class="img-100 rounded-circle" src="{{ asset('assets/images/avatar/1.jpg') }}" alt="#"&gt;
    &lt;/div&gt;
    &lt;div class="avatar"&gt;
    &lt;img class="img-90 rounded-circle" src="{{ asset('assets/images/avatar/2.jpg') }}" alt="#"&gt;
    &lt;/div&gt;
    &lt;div class="avatar"&gt;
    &lt;img class="img-80 rounded-circle" src="{{ asset('assets/images/avatar/3.jpg') }}" alt="#"&gt;
    &lt;/div&gt;
    &lt;div class="avatar"&gt;
    &lt;img class="img-70 rounded-circle" src="{{ asset('assets/images/avatar/4.jpg') }}" alt="#"&gt;
    &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <!-- Status Avatar-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Status Indicator</h4>
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
                        <p class="desc mb-0 mt-1"><span>Using</span><code>.status-* (online/offline/dnd)</code><span>class
                                you can set status of avatar.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="avatar-showcase">
                            <div class="avatars">
                                <div class="avatar"><img class="rounded-circle img-100" src="{{ asset('assets/images/avatar/3.jpg') }}"
                                        alt="#">
                                    <div class="status status-online"></div>
                                </div>
                                <div class="avatar"><img class="rounded-circle img-90" src="{{ asset('assets/images/avatar/4.jpg') }}"
                                        alt="#">
                                    <div class="status status-dnd"></div>
                                </div>
                                <div class="avatar"><img class="rounded-circle img-80" src="{{ asset('assets/images/avatar/5.jpg') }}"
                                        alt="#">
                                    <div class="status status-offline"></div>
                                </div>
                                <div class="avatar"><img class="rounded-circle img-70"
                                        src="{{ asset('assets/images/avatar/2.jpg') }}" alt="#">
                                    <div class="status status-online"></div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="avatar-indicator">&lt;!-- You can use status-* class through the set status (online/offline/dnd). --&gt;
    &lt;div class="avatar"&gt;
    &lt;img class="img-100 rounded-circle" src="{{ asset('assets/images/avatar/3.jpg') }}" alt="#"&gt;
    &lt;div class="status bg-success"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="avatar"&gt;
    &lt;img class="img-90 rounded-circle" src="{{ asset('assets/images/avatar/4.jpg') }}" alt="#"&gt;
    &lt;div class="status bg-warning"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="avatar"&gt;&lt;img class="img-80 rounded-circle" src="{{ asset('assets/images/avatar/5.jpg') }}" alt="#"&gt;
    &lt;div class="status bg-danger"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="avatar"&gt;&lt;img class="img-70 rounded-circle" src="{{ asset('assets/images/avatar/2.jpg') }}" alt="#"&gt;
    &lt;div class="status bg-success"&gt;&lt;/div&gt;
    &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <!-- Shape Avatar-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Shapes</h4>
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
                        <p class="desc mb-0 mt-1"><span>Using</span><code>.b-r-* (0/20/30/40)</code><span>class you can set
                                shape of avatar.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="avatar-showcase">
                            <div class="avatars">
                                <div class="avatar"><img class="img-100 b-r-0" src="{{ asset('assets/images/avatar/4.jpg') }}"
                                        alt="#"></div>
                                <div class="avatar"><img class="img-90 b-r-20" src="{{ asset('assets/images/avatar/5.jpg') }}"
                                        alt="#"></div>
                                <div class="avatar"><img class="img-80 b-r-30" src="{{ asset('assets/images/avatar/6.jpg') }}"
                                        alt="#"></div>
                                <div class="avatar"><img class="img-70 b-r-40" src="{{ asset('assets/images/avatar/7.jpg') }}"
                                        alt="#"></div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="avatar-shapes">&lt;!-- Give the shape to avatar using .b-r-* class. (15/25/30/35). --&gt;
    &lt;div class="avatar"&gt;
    &lt;img class="img-100 b-r-8" src="{{ asset('assets/images/avatar/4.jpg') }}" alt="#"&gt;
    &lt;/div&gt;
    &lt;div class="avatar"&gt;
    &lt;img class="img-90 b-r-30" src="{{ asset('assets/images/avatar/5.jpg') }}" alt="#"&gt;
    &lt;/div&gt;
    &lt;div class="avatar"&gt;
    &lt;img class="img-80 b-r-35" src="{{ asset('assets/images/avatar/6.jpg') }}" alt="#"&gt;
    &lt;/div&gt;
    &lt;div class="avatar"&gt;
    &lt;img class="img-70 rounded-circle" src="{{ asset('assets/images/avatar/7.jpg') }}" alt="#"&gt;
    &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-md-12">
                <!-- Group Avatar-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Grouping</h4>
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
                        <p class="desc mb-0 mt-1"><span>You can set the group of avatars like </span><code>.img-*
                                (40/50/60/80/100) , .b-r-* (8/30/35)</code><span>class.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="avatar-showcase">
                            <div class="avatars">
                                <div class="customers d-inline-block avatar-group">
                                    <ul>
                                        <li class="d-inline-block"><img class="img-100 b-r-8"
                                                src="{{ asset('assets/images/avatar/4.jpg') }}" alt="#"></li>
                                        <li class="d-inline-block"><img class="img-80 b-r-20"
                                                src="{{ asset('assets/images/avatar/5.jpg') }}" alt="#"></li>
                                        <li class="d-inline-block"><img class="img-50 b-r-25"
                                                src="{{ asset('assets/images/avatar/7.jpg') }}" alt="#"></li>
                                    </ul>
                                </div>
                                <div class="customers d-inline-block avatar-group">
                                    <ul>
                                        <li class="d-inline-block"><img class="img-60 b-r-30"
                                                src="{{ asset('assets/images/avatar/2.jpg') }}" alt="#"></li>
                                        <li class="d-inline-block"><img class="img-80 b-r-0"
                                                src="{{ asset('assets/images/avatar/6.jpg') }}" alt="#"></li>
                                        <li class="d-inline-block"><img class="img-60 b-r-30"
                                                src="{{ asset('assets/images/avatar/8.jpg') }}" alt="#"></li>
                                    </ul>
                                </div>
                                <div class="customers d-inline-block avatar-group">
                                    <ul>
                                        <li class="d-inline-block"><img class="img-40 b-r-30"
                                                src="{{ asset('assets/images/avatar/4.jpg') }}" alt="#"></li>
                                        <li class="d-inline-block"><img class="img-40 b-r-30"
                                                src="{{ asset('assets/images/avatar/5.jpg') }}" alt="#"></li>
                                        <li class="d-inline-block"><img class="img-40 b-r-30"
                                                src="{{ asset('assets/images/avatar/8.jpg') }}" alt="#"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="avatar-grouping">&lt;!-- You can set the group of avatars use img-* and .b-r-* class (40/50/60/80/100) and (8/30/35). --&gt;
    &lt;div class="customers d-inline-block avatar-group"&gt;
    &lt;ul&gt;
    &lt;li class="d-inline-block"&gt;
    &lt;img class="img-100 b-r-8" src="{{ asset('assets/images/avatar/4.jpg') }}" alt="#"&gt;
    &lt;/li&gt;
    &lt;li class="d-inline-block"&gt;
    &lt;img class="img-80 b-r-30" src="{{ asset('assets/images/avatar/5.jpg') }}" alt="#"&gt;
    &lt;/li&gt;
    &lt;li class="d-inline-block"&gt;
    &lt;/li&gt;&lt;img class="img-50 b-r-35" src="{{ asset('assets/images/avatar/7.jpg') }}" alt="#"&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="customers d-inline-block avatar-group"&gt;
    &lt;ul&gt;
    &lt;li class="d-inline-block"&gt;
    &lt;img class="img-60 rounded-circle" src="{{ asset('assets/images/avatar/2.jpg') }}" alt="#"&gt;
    &lt;/li&gt;
    &lt;li class="d-inline-block"&gt;
    &lt;img class="b-r-8 img-80" src="{{ asset('assets/images/avatar/6.jpg') }}" alt="#"&gt;
    &lt;/li&gt;
    &lt;li class="d-inline-block"&gt;
    &lt;img class="img-60 rounded-circle" src="{{ asset('assets/images/avatar/8.jpg') }}" alt="#"&gt;
    &lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="customers d-inline-block avatar-group"&gt;
    &lt;ul&gt;
    &lt;li class="d-inline-block"&gt;
    &lt;img class="img-40 rounded-circle" src="{{ asset('assets/images/avatar/4.jpg') }}" alt=""&gt;
    &lt;/li&gt;
    &lt;li class="d-inline-block"&gt;
    &lt;img class="img-40 rounded-circle" src="{{ asset('assets/images/avatar/5.jpg') }}" alt=""&gt;
    &lt;/li&gt;
    &lt;li class="d-inline-block"&gt;
    &lt;img class="img-40 rounded-circle" src="{{ asset('assets/images/avatar/8.jpg') }}" alt=""&gt;
    &lt;/li&gt;
    &lt;/ul&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <!-- Ratio Avatar-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Ratio</h4>
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
                        <p class="desc mb-0 mt-1"><span>Give the ratio to avatar using</span><code>.ratio , img-*
                                (70/80/90/100)</code><span>class.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="avatar-showcase">
                            <div class="avatars">
                                <div class="avatar ratio"><img class="img-100 b-r-8" src="{{ asset('assets/images/avatar/4.jpg') }}"
                                        alt="#"></div>
                                <div class="avatar ratio"><img class="img-90 b-r-8" src="{{ asset('assets/images/avatar/5.jpg') }}"
                                        alt="#"></div>
                                <div class="avatar ratio"><img class="img-80 b-r-8" src="{{ asset('assets/images/avatar/1.jpg') }}"
                                        alt="#"></div>
                                <div class="avatar ratio"><img class="img-70 b-r-8" src="{{ asset('assets/images/avatar/7.jpg') }}"
                                        alt="#"></div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="avatar-ratio">&lt;!-- You can use b-r-* class through the set status (70/80/90/100). --&gt;
    &lt;div class="avatars"&gt;
    &lt;div class="avatar ratio"&gt;
    &lt;img class="b-r-8 img-100" src="{{ asset('assets/images/avatar/4.jpg') }}" alt="#"&gt;
    &lt;/div&gt;
    &lt;div class="avatar ratio"&gt;
    &lt;img class="b-r-8 img-90" src="{{ asset('assets/images/avatar/5.jpg') }}" alt="#"&gt;
    &lt;/div&gt;
    &lt;div class="avatar ratio"&gt;
    &lt;img class="b-r-8 img-80" src="{{ asset('assets/images/avatar/1.jpg') }}" alt="#"&gt;
    &lt;/div&gt;
    &lt;div class="avatar ratio"&gt;
    &lt;img class="b-r-8 img-70" src="{{ asset('assets/images/avatar/7.jpg') }}" alt="#"&gt;
    &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <!-- Counter avatar-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Grouping With Counter</h4>
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
                        <p class="desc mb-0 mt-1"><span>Set the group with counter </span><code>.img-* ,
                                .b-r-*</code><span>class.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="avatar-showcase">
                            <div class="avatars">
                                <div class="customers d-inline-block avatar-group">
                                    <ul class="d-flex">
                                        <li class="d-inline-block"><img class="img-40 b-r-10"
                                                src="{{ asset('assets/images/avatar/4.jpg') }}" alt="#"></li>
                                        <li class="d-inline-block"><img class="img-40 b-r-10"
                                                src="{{ asset('assets/images/avatar/5.jpg') }}" alt="#"></li>
                                        <li class="d-inline-block"><img class="img-40 b-r-10"
                                                src="{{ asset('assets/images/avatar/6.jpg') }}" alt="#"></li>
                                        <li class="d-inline-block"><span class="b-r-10">+4</span></li>
                                    </ul>
                                </div>
                                <div class="customers d-inline-block avatar-group">
                                    <ul class="d-flex">
                                        <li class="d-inline-block"><img class="img-40 b-r-30"
                                                src="{{ asset('assets/images/avatar/4.jpg') }}" alt="#"></li>
                                        <li class="d-inline-block"><img class="img-40 b-r-30"
                                                src="{{ asset('assets/images/avatar/5.jpg') }}" alt="#"></li>
                                        <li class="d-inline-block"><img class="img-40 b-r-30"
                                                src="{{ asset('assets/images/avatar/8.jpg') }}" alt="#"></li>
                                        <li class="d-inline-block"><span class="b-r-30">+2</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="avatar-showcase">&lt;!-- You can use status-* class through the set status (.img-* , .b-r-*'). --&gt;
    &lt;div class="avatar-showcase"&gt;
    &lt;div class="avatars"&gt;
    &lt;div class="customers d-inline-block avatar-group"&gt;
    &lt;ul class="d-flex"&gt;
    &lt;li class="d-inline-block"&gt;
    &lt;img class="img-40 b-r-10" src="{{ asset('assets/images/avatar/4.jpg') }}" alt="#"&gt;
    &lt;/li&gt;
    &lt;li class="d-inline-block"&gt;
    &lt;img class="img-40 b-r-10" src="{{ asset('assets/images/avatar/5.jpg') }}" alt="#"&gt;
    &lt;/li&gt;
    &lt;li class="d-inline-block"&gt;
    &lt;img class="img-40 b-r-10" src="{{ asset('assets/images/avatar/6.jpg') }}" alt="#"&gt;
    &lt;/li&gt;
    &lt;li class="d-inline-block"&gt;
    &lt;span class="b-r-10"&gt;+4
    &lt;/span&gt;
    &lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="customers d-inline-block avatar-group"&gt;
    &lt;ul class="d-flex"&gt;
    &lt;li class="d-inline-block"&gt;
    &lt;img class="img-40 b-r-30" src="{{ asset('assets/images/avatar/4.jpg') }}" alt="#"&gt;
    &lt;/li&gt;
    &lt;li class="d-inline-block"&gt;
    &lt;img class="img-40 b-r-30" src="{{ asset('assets/images/avatar/5.jpg') }}" alt="#"&gt;
    &lt;/li&gt;
    &lt;li class="d-inline-block"&gt;
    &lt;img class="img-40 b-r-30" src="{{ asset('assets/images/avatar/8.jpg') }}" alt="#"&gt;
    &lt;/li&gt;
    &lt;li class="d-inline-block"&gt;
    &lt;span class="b-r-30"&gt;+2
    &lt;/span&gt;
    &lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;/div&gt;
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
    <script src="{{ asset('assets/js/vendors/clipboard/dist/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard-script.js') }}"></script>
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
@endsection
