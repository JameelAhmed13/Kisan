@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Typography</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Typography</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-8 col-xl-12">
                <!-- Basic Heading Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Headings</h4>
                        <p class="desc mb-0 mt-1"><span>All HTML headings, </span><code>H1 .. H6</code><span>are
                                available.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 typography-table">
                                <thead>
                                    <tr>
                                        <th class="pt-0">Code</th>
                                        <th class="pt-0">Font-Size</th>
                                        <th class="pt-0">Pixel</th>
                                        <th class="pt-0">Font Weight</th>
                                        <th class="pt-0">Heading</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>&lt;h1&gt;&lt;/h1&gt;</code></td>
                                        <td>
                                            <h1 class="mb-0">1.875rem</h1>
                                        </td>
                                        <td>
                                            <h1 class="mb-0">30px</h1>
                                        </td>
                                        <td>
                                            <h1 class="mb-0">500</h1>
                                        </td>
                                        <td>
                                            <h1>Heading 1 (MEGA)</h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h2&gt;&lt;/h2&gt;</code></td>
                                        <td>
                                            <h2 class="mb-0">1.625rem</h2>
                                        </td>
                                        <td>
                                            <h2 class="mb-0">26px</h2>
                                        </td>
                                        <td>
                                            <h2 class="mb-0">500</h2>
                                        </td>
                                        <td>
                                            <h2>Heading 2 (XL)</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h3&gt;&lt;/h3&gt;</code></td>
                                        <td>
                                            <h3 class="mb-0">1.375rem</h3>
                                        </td>
                                        <td>
                                            <h3 class="mb-0">22px</h3>
                                        </td>
                                        <td>
                                            <h3 class="mb-0">400</h3>
                                        </td>
                                        <td>
                                            <h3>Heading 3 (LARGE)</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h4&gt;&lt;/h4&gt;</code></td>
                                        <td>
                                            <h4 class="mb-0">1.25rem</h4>
                                        </td>
                                        <td>
                                            <h4 class="mb-0">20px</h4>
                                        </td>
                                        <td>
                                            <h4 class="mb-0">600</h4>
                                        </td>
                                        <td>
                                            <h4>Heading 4 (MEDIUM)</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h5&gt;&lt;/h5&gt;</code></td>
                                        <td>
                                            <h5 class="mb-0">1rem</h5>
                                        </td>
                                        <td>
                                            <h5 class="mb-0">16px</h5>
                                        </td>
                                        <td>
                                            <h5 class="mb-0">400</h5>
                                        </td>
                                        <td>
                                            <h5>Heading 5 (SMALL)</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pb-0"><code>&lt;h6&gt;&lt;/h6&gt;</code></td>
                                        <td class="pb-0">
                                            <h6 class="mb-0">0.875rem</h6>
                                        </td>
                                        <td class="pb-0">
                                            <h6 class="mb-0">14px</h6>
                                        </td>
                                        <td class="pb-0">
                                            <h6 class="mb-0">400</h6>
                                        </td>
                                        <td class="pb-0">
                                            <h6>Heading 6 (EXTRA SMALL)</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-12">
                <!-- Color Heading Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Colored Headings</h4>
                        <p class="desc mb-0 mt-1"><span>All HTML headings, </span><code>H1 .. H6</code><span>are
                                available.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 typography-table">
                                <thead>
                                    <tr>
                                        <th class="pt-0">Code</th>
                                        <th class="pt-0">Heading</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>&lt;h1&gt;&lt;/h1&gt;</code></td>
                                        <td>
                                            <h1><span class="font-primary me-1"> Heading 1</span> Sub Heading</h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h2&gt;&lt;/h2&gt;</code></td>
                                        <td>
                                            <h2><span class="font-secondary me-1"> Heading 1</span> Sub Heading</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h3&gt;&lt;/h3&gt;</code></td>
                                        <td>
                                            <h3><span class="font-tertiary me-1"> Heading 1</span> Sub Heading</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h4&gt;&lt;/h4&gt;</code></td>
                                        <td>
                                            <h4><span class="font-info me-1"> Heading 1</span> Sub Heading</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h5&gt;&lt;/h5&gt;</code></td>
                                        <td>
                                            <h5><span class="font-success me-1"> Heading 1</span> Sub Heading</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pb-0"><code>&lt;h6&gt;&lt;/h6&gt;</code></td>
                                        <td class="pb-0">
                                            <h6><span class="font-danger me-1"> Heading 1</span> Sub Heading</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Font Weight card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Font weight</h4>
                        <p class="desc mb-0 mt-1"><span>Using, </span><code>f-w-*</code><span> class, you can change the
                                font weight.</span></p>
                    </div>
                    <div class="card-body d-flex flex-column gap-3">
                        <h1 class="f-w-700">You can set bolder font weight Heading 1 using<code> f-w-700</code></h1>
                        <h2 class="f-w-600">You can set bold font weight Heading 2 using<code> f-w-600</code></h2>
                        <h3 class="f-w-500">You can set medium font weight Heading 3 using<code> f-w-500</code></h3>
                        <h4 class="f-w-400">You can set normal font weight Heading 4 using<code> f-w-400</code></h4>
                        <h5 class="f-w-300">You can set light font weight Heading 5 using<code> f-w-300</code></h5>
                        <h6 class="f-w-100">You can set light font weight Heading 6 using<code> f-w-100</code></h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Font Weight card-->
                <div class="card listing">
                    <div class="card-header pb-0">
                        <h4>Listing typography</h4>
                        <p class="desc mb-0 mt-1"><span>All typography list:-
                            </span><code>&lt;ul&gt;,&lt;ol&gt;,&lt;dl&gt;</code><span></span></p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper rounded-3 h-100 bg-light-primary">
                                    <h6 class="sub-title f-w-600">Unorder list</h6>
                                    <ul>
                                        <li>One who looks on the bright side of things</li>
                                        <li>One who does something not professionally but for pleasure</li>
                                        <li>A handwriting that cannot be read</li>
                                        <li>One who looks on the bright side of things</li>
                                        <li>The study of ancient writing and scriptures</li>
                                        <li>Creates more sophisticated capabilities for a web page to use coding language.
                                        </li>
                                        <li>Maintaining contact and communicating clearly are also essential. possess
                                            abilities for a designer</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper rounded-3 h-100 bg-light-secondary">
                                    <h6 class="sub-title f-w-600">Order list</h6>
                                    <ol class="mb-0">
                                        <li>UI Kits</li>
                                        <li>Bonus Ui</li>
                                        <li>Animations</li>
                                        <li>
                                            <ol>
                                                <li>Typography</li>
                                                <li>Avatars</li>
                                                <li>Grid</li>
                                                <li>Tag &amp; pills</li>
                                                <li>Alert</li>
                                            </ol>
                                        </li>
                                        <li>Dropdown</li>
                                        <li>Tabs</li>
                                        <li>Accordion</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-md-12 col-xxl-4">
                                <div class="card-wrapper rounded-3 bg-light-tertiary h-100">
                                    <h6 class="sub-title f-w-600">Description list</h6>
                                    <dl class="mb-0">
                                        <dt>The way to get started is to quit talking and begin doing.</dt>
                                        <dd>-Walt Disney</dd>
                                        <dt>Life is what happens when you&apos;re busy making other plans.</dt>
                                        <dd>-John Lennon</dd>
                                        <dt>Whoever is happy will make others happy too. </dt>
                                        <dd>-Anne Frank</dd>
                                        <dt>Life is either a daring adventure or nothing at all.</dt>
                                        <dd>-Helen Keller</dd>
                                        <dt>The purpose of our lives is to be happy.</dt>
                                        <dd class="mb-0">-Dalai Lama</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Display Heading Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Display Heading</h4>
                        <p class="desc mb-0 mt-1"><span>Traditional heading elements are designed to work best in the meat
                                of your page content. When you need a heading to stand out, consider using
                                a</span><code>display heading</code><span>- a larger, slightly more opinionated heading
                                style.</span></p>
                    </div>
                    <div class="card-body d-flex flex-column gap-2">
                        <h2 class="display-1">Display 1</h2>
                        <h2 class="display-2">Display 2</h2>
                        <h2 class="display-3">Display 3</h2>
                        <h2 class="display-4">Display 4</h2>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-12">
                <!-- Inline Typography Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Inline text elements</h4>
                        <p class="desc mb-0 mt-1"><span>Styling for common inline</span><code>HTML
                                5</code><span>elements.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-column gap-2">
                            <p class="mb-0">You can use the mark tag to
                                <mark>highlight</mark> text.
                            </p>
                            <p class="mb-0">
                                <del>This line of text is meant to be treated as deleted text.</del>
                            </p>
                            <p class="mb-0">
                                <s>This line of text is meant to be treated as no longer accurate.</s>
                            </p>
                            <p class="mb-0"><ins>
                                    This line of text is meant to be treated as an addition to the
                                    document.</ins></p>
                            <p class="mb-0">
                                <u>This line of text will render as underlined</u>
                            </p>
                            <p class="mb-0"><small>This line of text is meant to be treated as fine print.</small></p>
                            <p class="mb-0"><strong>This line rendered as bold text.</strong></p>
                            <p class="mb-0"><em>This line rendered as italicized text.</em></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-12">
                <!-- Text Color Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Text Color</h4>
                        <p class="desc mb-0 mt-1"><span>You can Give text color by using,
                            </span><code>font-*</code><span>Class.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-column gap-2">
                            <p class="font-primary mb-0">This is Primary text You can archive this
                                adding<code>.font-primary</code> class</p>
                            <p class="font-secondary mb-0">This is Secondary text You can archive this
                                adding<code>.font-secondary</code> class</p>
                            <p class="font-tertiary mb-0">This is Tertiary text You can archive this
                                adding<code>.font-tertiary</code> class</p>
                            <p class="font-success mb-0">This is Success text You can archive this
                                adding<code>.font-success</code> class</p>
                            <p class="font-info mb-0">This is Info text You can archive this adding<code>.font-info</code>
                                class</p>
                            <p class="font-warning mb-0">This is Warning text You can archive this
                                adding<code>.font-warning</code> class</p>
                            <p class="font-danger mb-0">This is Danger text You can archive this
                                adding<code>.font-danger</code> class</p>
                            <p class="font-dark mb-0">This is Dark text You can archive this adding<code>.font-dark</code>
                                class</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Blockquote Card-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Blockquotes</h4>
                        <p class="desc mb-0 mt-1"><span>The, </span><code>&lt;blockquote&gt;</code><span>tag specifies a
                                section that is quoted from another source.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="figure d-block dark-blockquote text-start">
                            <blockquote class="blockquote mb-2 b-l-primary bg-light-primary">
                                <p class="mb-0 f-16">The only impossible journey is the one you never begin.</p><span
                                    class="blockquote-footer">Tony Robbins</span>
                            </blockquote>
                        </div>
                        <div class="figure d-block dark-blockquote text-center">
                            <blockquote class="blockquote mb-2 bg-light-secondary">
                                <p class="mb-0 f-16">In this life we cannot do great things. We can only do small things
                                    with great love.</p><span class="blockquote-footer">Mother Teresa</span>
                            </blockquote>
                        </div>
                        <div class="figure d-block dark-blockquote text-end">
                            <blockquote class="blockquote mb-0 b-r-tertiary bg-light-tertiary">
                                <p class="mb-0 f-16">Live in the sunshine, swim the sea, drink the wild air.</p><span
                                    class="blockquote-footer">Ralph Waldo Emerson</span>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
@endsection
