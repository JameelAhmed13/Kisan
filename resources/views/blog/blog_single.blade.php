@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Blog Single</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Blog</li>
                        <li class="breadcrumb-item active">Blog Single</li>
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
                    <div class="card-body">
                        <div class="blog-single">
                            <div class="blog-box blog-details"><img class="img-fluid w-100"
                                    src="{{ asset('assets/images/blog/blog-single.jpg') }}" alt="blog-main">
                                <div class="blog-details">
                                    <ul class="blog-social">
                                        <li>25 July 2024</li>
                                        <li><i class="icofont icofont-user"></i>Mark <span>Jecno </span></li>
                                        <li><i class="icofont icofont-thumbs-up"></i>02<span>Hits</span></li>
                                        <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                                    </ul>
                                    <h4>The Harpeth rises in the westernmost part of Rutherford County, just to the east of
                                        the community of College Grove in eastern Williamson County.</h4>
                                    <div class="single-blog-content-top">
                                        <p>From the east coast to the west, each river has its own beauty and character.
                                            Each river has its own story. Take a look at some America’s best rivers and some
                                            of the rivers we’re working to protect. And learn some facts about your favorite
                                            rivers. The Harpeth River and its tributaries are home to rich freshwater
                                            biodiversity, including more than 50 species of fish and 30 species of mussels
                                        </p>
                                        <p>The Harpeth River flows through the heart of downtown Franklin, the 14th fastest
                                            growing city in the United States, and traverses Williamson County, one of the
                                            fastest growing counties in Tennessee. This rapid development has already caused
                                            harm to the river from adding treated sewage, increasing stormwater runoff, and
                                            withdrawing water.The river’s impairment is caused by dangerously low levels of
                                            dissolved oxygen driven by high concentrations of nutrients – particularly
                                            phosphorus – that fuel oxygen-hungry algal blooms that can lead to toxic
                                            conditions.</p>
                                    </div>
                                </div>
                            </div>
                            <section class="comment-box">
                                <h4>Comment</h4>
                                <hr>
                                <ul>
                                    <li>
                                        <div class="d-flex align-self-center"><img class="align-self-center"
                                                src="{{ asset('assets/images/avatar/1.jpg') }}" alt="Generic placeholder image">
                                            <div class="flex-grow-1">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h6 class="mt-0">Jolio Mark<span> ( Designer )</span></h6>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <ul class="comment-social float-start float-md-end">
                                                            <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                                                            <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p>The best thing is location and drive through the forest. The resort is
                                                    35km from Ramnagar. The gardens are well kept and maintained. Its a good
                                                    place for relaxation away from the city noise. The staff is very
                                                    friendly and overall we had a really good & fun time, thanks to staff
                                                    member - Bhairav, Rajat, Gunanand, Lokesh & everyone else. And also we
                                                    went for an adventurous night safari and saw barking deers, tuskar
                                                    elephant.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <div class="d-flex"><img class="align-self-center"
                                                        src="{{ asset('assets/images/avatar/2.jpg') }}" alt="Generic placeholder image">
                                                    <div class="flex-grow-1">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <h6 class="mt-0">Jolio Mark<span> ( Designer )</span></h6>
                                                            </div>
                                                        </div>
                                                        <p>There are many variations of passages of Lorem Ipsum available,
                                                            but the majority have suffered alteration in some form, by
                                                            injected humour, or randomised words which don't look even
                                                            slightly believable. If you are going to use a passage of Lorem
                                                            Ipsum, you need to be sure there isn't anything embarrassing
                                                            hidden in the middle of text.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="d-flex"><img class="align-self-center"
                                                src="{{ asset('assets/images/avatar/3.jpg') }}" alt="Generic placeholder image">
                                            <div class="flex-grow-1">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h6 class="mt-0">Jolio Mark<span> ( Designer )</span></h6>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <ul class="comment-social float-start float-md-end">
                                                            <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                                                            <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p>From the east coast to the west, each river has its own beauty and
                                                    character. Each river has its own story. There are many variations of
                                                    passages of Lorem Ipsum available, but the majority have suffered
                                                    alteration in some form, by injected humour, or randomised words which
                                                    don't look even slightly believable. If you are going to use a passage
                                                    of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                                    hidden in the middle of text.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex"><img class="align-self-center"
                                                src="{{ asset('assets/images/avatar/6.jpg') }}" alt="Generic placeholder image">
                                            <div class="flex-grow-1">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h6 class="mt-0">Jolio Mark<span> ( Designer )</span></h6>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <ul class="comment-social float-start float-md-end">
                                                            <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                                                            <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p>Clean resort with maintained garden but rooms are average Lack of
                                                    communication between the staff members. Receptionsit full of attitude.
                                                    Arrogant staff. Except good view there is nothing great in this
                                                    property.Resort is 35 kms away from Ramnagar Town.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex"><img class="align-self-center"
                                                src="{{ asset('assets/images/avatar/9.jpg') }}" alt="Generic placeholder image">
                                            <div class="flex-grow-1">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h6 class="mt-0">Jolio Mark<span> ( Designer )</span></h6>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <ul class="comment-social float-start float-md-end">
                                                            <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                                                            <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p>Harpeth rises in the westernmost part of Rutherford County, just to the
                                                    east of the community of College Grove in eastern Williamson County.but
                                                    the majority have suffered alteration in some form, by injected humour,
                                                    or randomised words which don't look even slightly believable. If you
                                                    are going to use a passage of Lorem Ipsum, you need to be sure there
                                                    isn't anything embarrassing hidden in the middle of text.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </section>
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
