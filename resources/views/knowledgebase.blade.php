@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Knowledgebase</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Knowledgebase</li>
                        <li class="breadcrumb-item active">Knowledgebase</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid table-space">
        <div class="row">
            <div class="col-12 position-relative">
                <div class="knowledgebase-bg"><img class="bg-img-cover bg-center"
                        src="{{ asset('assets/images/knowledgebase/bg_1.jpg') }}" alt="looginpage"></div>
                <div class="knowledgebase-search">
                    <div>
                        <h3>How Can I help you?</h3>
                        <form class="form-inline" action="#" method="get">
                            <div class="form-group w-100">
                                <svg class="feather">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#search') }}"></use>
                                </svg>
                                <input class="form-control-plaintext w-100" type="text" placeholder="Type question here"
                                    title="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card bg-primary height_equal">
                    <div class="card-body">
                        <div class="d-flex faq-widgets">
                            <div class="flex-grow-1">
                                <h4>Articles</h4>
                                <p>How little experience or technical knowledge you currently have. The web is a very big
                                    place, and if you are the typical internet user, you probably visit several websites
                                    every day.</p>
                            </div>
                            <svg class="feather">
                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#book-open') }}"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card bg-primary height_equal">
                    <div class="card-body">
                        <div class="d-flex faq-widgets">
                            <div class="flex-grow-1">
                                <h4>Knowledgebase</h4>
                                <p>A Website Designing course enables learners to use essential designing and programming
                                    tools required to do the job. The curriculum is a blend of various themes.</p>
                            </div>
                            <svg class="feather">
                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#aperture') }}"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card bg-primary height_equal">
                    <div class="card-body">
                        <div class="d-flex faq-widgets">
                            <div class="flex-grow-1">
                                <h4>Support</h4>
                                <p>The customer support industry is renaissance. Customer support as a specialty is coming
                                    into its own, offering companies a competitive advantage that’s difficult to copy.</p>
                            </div>
                            <svg class="feather">
                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="header-faq">
                    <h5 class="mb-0">Browse articles by category</h5>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Browse Articles</h5>
                            </div>
                            <div class="card-body">
                                <div class="row browse g-sm-4 g-3">
                                    <div class="col-xl-4 xl-50 col-md-6">
                                        <div class="browse-articles">
                                            <h6><span>
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#archive') }}">
                                                        </use>
                                                    </svg></span>Quick Questions are answered</h6>
                                            <ul>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Lorem Ipsum is simply dummy text of the
                                                            printing</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Lorem Ipsum has been the industry's standard
                                                            dummy </span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>When an unknown printer took a galley
                                                        </span><span class="badge badge-primary pull-right">New</span></a>
                                                </li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>But also the leap into electronic
                                                            typesetting, </span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right') }}">
                                                                </use>
                                                            </svg></span><span>See More (40)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-50 col-md-6">
                                        <div class="browse-articles">
                                            <h6><span>
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#archive') }}">
                                                        </use>
                                                    </svg></span> Integrating WordPress with Your Website</h6>
                                            <ul>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>It was popularised in the 1960s with the
                                                            release</span><span
                                                            class="badge badge-primary pull-right">Review</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Etraset sheets containing Lorem Ipsum
                                                            passages</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Desktop publishing software like Aldus
                                                            PageMaker </span><span
                                                            class="badge badge-primary pull-right">Articles</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Making this the first true generator on the
                                                            Internet.</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right') }}">
                                                                </use>
                                                            </svg></span><span>See More (90)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-50 col-md-6">
                                        <div class="browse-articles">
                                            <h6><span>
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#archive') }}">
                                                        </use>
                                                    </svg></span>WordPress Site Maintenance</h6>
                                            <ul>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Lorem, ipsum dolor sit amet consectetur
                                                            adipisicing</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Normal distribution of letters, as opposed to
                                                            using </span><span
                                                            class="badge badge-primary pull-right">Closed</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Lorem Ipsum, you need to be sure there isn't
                                                            anything </span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Repetition, injected humour, or non words
                                                            etc</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right') }}">
                                                                </use>
                                                            </svg></span><span>See More (50)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-50 col-md-6">
                                        <div class="browse-articles browse-bottom">
                                            <h6><span>
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#archive') }}">
                                                        </use>
                                                    </svg></span> Meta Tags in WordPress</h6>
                                            <ul>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Nemo enim ipsam voluptatem quia voluptas sit
                                                        </span><span
                                                            class="badge badge-primary pull-right">Popular</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Ipsum quia dolor sit amet,
                                                            consectetur</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Sed quia non numquam eius modi tempora
                                                            incidunt</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Lorem eum fugiat quo voluptas nulla
                                                            pariatu</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right') }}">
                                                                </use>
                                                            </svg></span><span>See More (90)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-50 col-md-6">
                                        <div class="browse-articles browse-bottom">
                                            <h6><span>
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#archive') }}">
                                                        </use>
                                                    </svg></span>WordPress in Your Language</h6>
                                            <ul>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Desktop publishing software like Aldus
                                                            PageMaker</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Etraset sheets containing Lorem Ipsum
                                                            passages</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>It was popularised in the 1960s with the
                                                            release</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Making this the first true generator on the
                                                            Internet</span><span
                                                            class="badge badge-primary pull-right">Closed</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right') }}">
                                                                </use>
                                                            </svg></span><span>See More (50)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-50 col-md-6">
                                        <div class="browse-articles browse-bottom">
                                            <h6><span>
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#archive') }}">
                                                        </use>
                                                    </svg></span>Know Your Sources</h6>
                                            <ul>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>The point of using Lorem Ipsum </span></a>
                                                </li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>It has a more-or-less normal distribution of
                                                            letters</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Et harum quidem rerum facilis est et
                                                            expedita</span><span
                                                            class="badge badge-primary pull-right">Article</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Nam libero tempore, cum soluta nobis est
                                                            eligendi </span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right') }}">
                                                                </use>
                                                            </svg></span><span>See More (26)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-50 col-md-6">
                                        <div class="browse-articles browse-bottom">
                                            <h6><span>
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#archive') }}">
                                                        </use>
                                                    </svg></span>Validating a Website</h6>
                                            <ul>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>When our power of choice is untrammelled
                                                        </span><span
                                                            class="badge badge-primary pull-right">Review</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>It will frequently occur that pleasures
                                                        </span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>who fail in their duty through weakness
                                                        </span><span
                                                            class="badge badge-primary pull-right">Closed</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span> At vero eos et accusamus et iusto
                                                        </span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right') }}">
                                                                </use>
                                                            </svg></span><span>See More (10)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-50 col-md-6">
                                        <div class="browse-articles browse-bottom">
                                            <h6><span>
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#archive') }}">
                                                        </use>
                                                    </svg></span>Quick Questions are answered</h6>
                                            <ul>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Quis autem vel eum iure reprehenderit
                                                        </span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Ducimus blanditiis praesentium
                                                            voluptatum</span><span
                                                            class="badge badge-primary pull-right">Popular</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Omnis voluptas assumenda est</span><span
                                                            class="badge badge-primary pull-right">Review</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Produces no resultant pleasure</span></a>
                                                </li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right') }}">
                                                                </use>
                                                            </svg></span><span>See More (21)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-100">
                                        <div class="browse-articles browse-bottom">
                                            <h6><span>
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#archive') }}">
                                                        </use>
                                                    </svg></span>Integrating WordPress with Your Website</h6>
                                            <ul>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Lorem Ipsum passage, and going
                                                            through</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>The first line of Lorem Ipsum, Lorem ipsum
                                                        </span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>Thus comes from a line in section</span></a>
                                                </li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                                </use>
                                                            </svg></span><span>First true generator on the
                                                            Internet</span><span class="badge badge-primary pull-right">On
                                                            hold</span></a></li>
                                                <li><a href="#"><span>
                                                            <svg class="feather">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right') }}">
                                                                </use>
                                                            </svg></span><span>See More (34)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="header-faq">
                    <h5 class="mb-0">Featured Tutorials</h5>
                </div>
                <div class="row">
                    <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                        <div class="card features-faq product-box">
                            <div class="faq-image product-img"><img class="img-fluid" src="{{ asset('assets/images/faq/1.jpg') }}"
                                    alt="">
                                <div class="product-hover">
                                    <ul>
                                        <li><i class="icon-link"></i></li>
                                        <li><i class="icon-import"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5> Web Design</h5>
                                <p>A Web Designing course belongs to the field of Computer Science and IT. It enables
                                    students to learn</p>
                            </div>
                            <div class="card-footer"><span>Dec 15, 2022</span><span class="pull-right"><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star font-primary"></i></span></div>
                        </div>
                    </div>
                    <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                        <div class="card features-faq product-box">
                            <div class="faq-image product-img"><img class="img-fluid" src="{{ asset('assets/images/faq/2.jpg') }}"
                                    alt="">
                                <div class="product-hover">
                                    <ul>
                                        <li><i class="icon-link"></i></li>
                                        <li><i class="icon-import"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5>Web Development</h5>
                                <p>This course is designed to start you on a path toward future studies in web development
                                    and design.</p>
                            </div>
                            <div class="card-footer"><span>Dec 15, 2022</span><span class="pull-right"><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa-regular fa-star fa-fw font-primary"></i></span></div>
                        </div>
                    </div>
                    <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                        <div class="card features-faq product-box">
                            <div class="faq-image product-img"><img class="img-fluid" src="{{ asset('assets/images/faq/3.jpg') }}"
                                    alt="">
                                <div class="product-hover">
                                    <ul>
                                        <li><i class="icon-link"></i></li>
                                        <li><i class="icon-import"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5>UI Design</h5>
                                <p>User interface design (UI) is the design for machines and software, such as mobile
                                    devices, computers.</p>
                            </div>
                            <div class="card-footer"><span>Dec 15, 2022</span><span class="pull-right"><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star font-primary"></i></span></div>
                        </div>
                    </div>
                    <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                        <div class="card features-faq product-box">
                            <div class="faq-image product-img"><img class="img-fluid" src="{{ asset('assets/images/faq/4.jpg') }}"
                                    alt="">
                                <div class="product-hover">
                                    <ul>
                                        <li><i class="icon-link"></i></li>
                                        <li><i class="icon-import"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5> UX Design</h5>
                                <p>A Web Designing course belongs to the field of Computer Science and IT. It enables
                                    students to learn</p>
                            </div>
                            <div class="card-footer"><span>Dec 15, 2022</span><span class="pull-right"><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                        class="fa-solid fa-star-half-stroke fa-fw font-primary"></i></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="header-faq">
                    <h5 class="mb-0">Latest articles and videos</h5>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex articles-icons">
                                            <svg class="feather m-r-20">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#codepen') }}">
                                                </use>
                                            </svg>
                                            <div class="flex-grow-1">
                                                <h6 class="f-w-600">Using Video</h6>
                                                <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                                                    tellus.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex articles-icons">
                                            <svg class="feather m-r-20">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#codepen') }}">
                                                </use>
                                            </svg>
                                            <div class="flex-grow-1">
                                                <h6 class="f-w-600">Vel illum qu</h6>
                                                <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                                                    tellus.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex articles-icons">
                                            <svg class="feather m-r-20">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#codepen') }}">
                                                </use>
                                            </svg>
                                            <div class="flex-grow-1">
                                                <h6 class="f-w-600"> Cum sociis natoqu</h6>
                                                <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                                                    tellus. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex articles-icons">
                                            <svg class="feather m-r-20">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                </use>
                                            </svg>
                                            <div class="flex-grow-1">
                                                <h6 class="f-w-600"> Donec pede justo</h6>
                                                <p> Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                                                    tellus. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex articles-icons">
                                            <svg class="feather m-r-20">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                </use>
                                            </svg>
                                            <div class="flex-grow-1">
                                                <h6 class="f-w-600"> Nam quam nunc</h6>
                                                <p> Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                                                    tellus.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex articles-icons">
                                            <svg class="feather m-r-20">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-text') }}">
                                                </use>
                                            </svg>
                                            <div class="flex-grow-1">
                                                <h6 class="f-w-600">Using Video </h6>
                                                <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                                                    tellus.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="row">
                            <div class="col-xl-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex articles-icons">
                                            <svg class="feather m-r-20">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#youtube') }}">
                                                </use>
                                            </svg>
                                            <div class="flex-grow-1">
                                                <h6 class="f-w-600"> Vel illum qu</h6>
                                                <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                                                    tellus.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex articles-icons">
                                            <svg class="feather m-r-20">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#youtube') }}">
                                                </use>
                                            </svg>
                                            <div class="flex-grow-1">
                                                <h6 class="f-w-600"> Cum sociis natoqu</h6>
                                                <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                                                    tellus.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex articles-icons">
                                            <svg class="feather m-r-20">
                                                <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#youtube') }}">
                                                </use>
                                            </svg>
                                            <div class="flex-grow-1">
                                                <h6 class="f-w-600">Donec pede justo</h6>
                                                <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                                                    tellus.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
@endsection
