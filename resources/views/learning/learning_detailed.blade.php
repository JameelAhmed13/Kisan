@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid job-cards-view">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Detailed Course</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Learning</li>
                        <li class="breadcrumb-item active">Detailed Course</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-9 xl-60 order-xl-0 order-1 box-col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="blog-single">
                            <div class="blog-box blog-details"><img class="img-fluid w-100"
                                    src="{{ asset('assets/images/faq/learning-1.png') }}" alt="blog-main">
                                <div class="blog-details">
                                    <ul class="blog-social">
                                        <li>25 July 2024</li>
                                        <li><i class="icofont icofont-user"></i>Mark <span>Jecno </span></li>
                                        <li><i class="icofont icofont-thumbs-up"></i>02<span>Hits</span></li>
                                        <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                                    </ul>
                                    <h4>Knowledge can be defined as awareness of facts or as practical skills. there is wide
                                        agreement among philosophers that it is a form of true belief.</h4>
                                    <div class="single-blog-content-top">
                                        <p>Knowledge can be defined as awareness of facts or as practical skills, and may
                                            also refer to familiarity with objects or situations. Knowledge of facts, also
                                            called propositional knowledge, is often defined as true belief that is distinct
                                            from opinion or guesswork by virtue of justification. While there is wide
                                            agreement among philosophers that it is a form of true belief, many
                                            controversies in philosophy focus on justification: whether it is needed at all,
                                            how to understand it, and whether something else besides it is needed.</p>
                                        <p>Knowledge can be produced in many different ways. The most important source is
                                            perception, which refers to the usage of the five senses. Many theorists also
                                            include introspection as a source of knowledge, not of external physical
                                            objects, but of one's own mental states. Other sources often discussed include
                                            memory, rational intuition, inference, and testimony. According to
                                            foundationalism, some of these sources are basic in the sense that they can
                                            justify beliefs without depending on other mental states. This claim is rejected
                                            by coherentists.</p>
                                    </div>
                                </div>
                            </div>
                            <section class="comment-box">
                                <h4>Comment</h4>
                                <hr>
                                <ul>
                                    <li>
                                        <div class="d-flex align-self-center"><img class="align-self-center"
                                                src="{{ asset('assets/images/avatar/3.jpg') }}"
                                                alt="Generic placeholder image">
                                            <div class="flex-grow-1">
                                                <div class="row">
                                                    <div class="col-md-4 xl-100">
                                                        <h6 class="mt-0">Jolio Mark<span> ( Designer )</span></h6>
                                                    </div>
                                                    <div class="col-md-8 xl-100">
                                                        <ul
                                                            class="comment-social float-start float-md-end learning-comment">
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
                                                        src="{{ asset('assets/images/avatar/6.jpg') }}"
                                                        alt="Generic placeholder image">
                                                    <div class="flex-grow-1">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <h6 class="mt-0">Mark Jolio<span> ( Designer )</span></h6>
                                                            </div>
                                                        </div>
                                                        <p>The best thing is location and drive through the forest. The
                                                            resort is 35km from Ramnagar. The gardens are well kept and
                                                            maintained. Its a good place for relaxation away from the city
                                                            noise. The staff is very friendly and overall we had a really
                                                            good & fun time, thanks to staff member - Bhairav, Rajat,
                                                            Gunanand, Lokesh & everyone else. And also we went for an
                                                            adventurous night safari and saw barking deers, tuskar elephant.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="d-flex"><img class="align-self-center"
                                                src="{{ asset('assets/images/avatar/9.jpg') }}"
                                                alt="Generic placeholder image">
                                            <div class="flex-grow-1">
                                                <div class="row">
                                                    <div class="col-md-4 xl-100">
                                                        <h6 class="mt-0">John deo<span> ( Designer )</span></h6>
                                                    </div>
                                                    <div class="col-md-8 xl-100">
                                                        <ul
                                                            class="comment-social float-start float-md-end learning-comment">
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
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 xl-40 box-col-12 learning-filter">
                <div class="md-sidebar"><a class="btn btn-primary email-aside-toggle md-sidebar-toggle">Learning filter</a>
                    <div class="md-sidebar-aside job-left-aside custom-scrollbar">
                        <div class="default-according style-1 faq-accordion job-accordion accordion accordion-flush"
                            id="accordionoc">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="accordion-button btn btn-link" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseicon" aria-expanded="true"
                                                    aria-controls="collapseicon">Find Course</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="collapseicon" aria-labelledby="collapseicon"
                                            data-bs-parent="#accordion">
                                            <div class="card-body filter-cards-view animate-chk">
                                                <div class="job-filter">
                                                    <div class="faq-form">
                                                        <input class="form-control" type="text" placeholder="Search.."><i
                                                            class="fa-solid fa-magnifying-glass search-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="checkbox-animated">
                                                    <div class="learning-header"><span class="f-w-600">Categories</span>
                                                    </div>
                                                    <label class="d-block" for="chk-ani">
                                                        <input class="checkbox-primary" id="chk-ani" type="checkbox">
                                                        Accounting
                                                    </label>
                                                    <label class="d-block" for="chk-ani0">
                                                        <input class="checkbox-primary" id="chk-ani0" type="checkbox">
                                                        Design
                                                    </label>
                                                    <label class="d-block" for="chk-ani1">
                                                        <input class="checkbox-primary" id="chk-ani1" type="checkbox">
                                                        Development
                                                    </label>
                                                    <label class="d-block" for="chk-ani2">
                                                        <input class="checkbox-primary" id="chk-ani2" type="checkbox">
                                                        Management
                                                    </label>
                                                </div>
                                                <div class="checkbox-animated mt-0">
                                                    <div class="learning-header"><span class="f-w-600">Duration</span>
                                                    </div>
                                                    <label class="d-block" for="chk-ani6">
                                                        <input class="checkbox-primary" id="chk-ani6" type="checkbox">
                                                        0-50 hours
                                                    </label>
                                                    <label class="d-block" for="chk-ani7">
                                                        <input class="checkbox-primary" id="chk-ani7" type="checkbox">
                                                        50-100 hours
                                                    </label>
                                                    <label class="d-block" for="chk-ani8">
                                                        <input class="checkbox-primary" id="chk-ani8" type="checkbox">
                                                        100+ hours
                                                    </label>
                                                </div>
                                                <div class="checkbox-animated mt-0">
                                                    <div class="learning-header"><span class="f-w-600">Price</span></div>
                                                    <label class="d-block" for="edo-ani">
                                                        <input class="radio-primary" id="edo-ani" type="radio"
                                                            name="rdo-ani" checked=""> All Courses
                                                    </label>
                                                    <label class="d-block" for="edo-ani1">
                                                        <input class="radio-primary" id="edo-ani1" type="radio"
                                                            name="rdo-ani" checked=""> Paid Courses
                                                    </label>
                                                    <label class="d-block" for="edo-ani2">
                                                        <input class="radio-primary" id="edo-ani2" type="radio"
                                                            name="rdo-ani" checked=""> Free Courses
                                                    </label>
                                                </div>
                                                <div class="checkbox-animated mt-0">
                                                    <div class="learning-header"><span class="f-w-600">Status</span></div>
                                                    <label class="d-block" for="chk-ani3">
                                                        <input class="checkbox-primary" id="chk-ani3" type="checkbox">
                                                        Registration
                                                    </label>
                                                    <label class="d-block" for="chk-ani4">
                                                        <input class="checkbox-primary" id="chk-ani4" type="checkbox">
                                                        Progress
                                                    </label>
                                                    <label class="d-block" for="chk-ani5">
                                                        <input class="checkbox-primary" id="chk-ani5" type="checkbox">
                                                        Completed
                                                    </label>
                                                </div>
                                                <button class="btn btn-primary text-center" type="button">Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="accordion-button btn btn-link" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseicon1" aria-expanded="true"
                                                    aria-controls="collapseicon1">Categories</button>
                                            </h5>
                                        </div>
                                        <div class="collapse card-body px-0 show" id="collapseicon1"
                                            aria-labelledby="collapseicon1" data-bs-parent="#accordion">
                                            <div class="categories">
                                                <div class="learning-header"><span class="f-w-600">Design</span></div>
                                                <ul>
                                                    <li><a href="#">UI Design </a><span
                                                            class="badge badge-primary pull-right">28</span></li>
                                                    <li><a href="#">UX Design </a><span
                                                            class="badge badge-primary pull-right">35</span></li>
                                                    <li><a href="#">Interface Design </a><span
                                                            class="badge badge-primary pull-right">17</span></li>
                                                    <li><a href="#">User Experience </a><span
                                                            class="badge badge-primary pull-right">26</span></li>
                                                </ul>
                                            </div>
                                            <div class="categories pt-0">
                                                <div class="learning-header"><span class="f-w-600">Development</span>
                                                </div>
                                                <ul>
                                                    <li><a href="#">Frontend Development</a><span
                                                            class="badge badge-primary pull-right">48</span></li>
                                                    <li><a href="#">Backend Development</a><span
                                                            class="badge badge-primary pull-right">19</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="accordion-button btn btn-link" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseicon2" aria-expanded="true"
                                                    aria-controls="collapseicon2">Upcoming Courses</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="collapseicon2" aria-labelledby="collapseicon2"
                                            data-bs-parent="#accordion">
                                            <div class="upcoming-course card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1"><span class="f-w-600">UX
                                                            Development</span><span class="d-block">Course By <a
                                                                class="font-primary" href="#"> Development
                                                                Team</a></span><span class="d-block"><i
                                                                class="fa fa-star font-warning"></i><i
                                                                class="fa fa-star font-warning"></i><i
                                                                class="fa fa-star font-warning"></i><i
                                                                class="fa fa-star font-warning"></i><i
                                                                class="fa fa-star-half-o font-warning"></i></span></div>
                                                    <div>
                                                        <h5 class="mb-0 font-primary">18</h5><span
                                                            class="d-block">Dec</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-grow-1"><span class="f-w-600">Business
                                                            Analyst</span><span class="d-block">Course By <a
                                                                class="font-primary" href="#">Analyst
                                                                Team.</a></span><span class="d-block"><i
                                                                class="fa fa-star font-warning"></i><i
                                                                class="fa fa-star font-warning"></i><i
                                                                class="fa fa-star font-warning"></i><i
                                                                class="fa fa-star font-warning"></i><i
                                                                class="fa fa-star font-warning"></i></span></div>
                                                    <div>
                                                        <h5 class="mb-0 font-primary">28</h5><span
                                                            class="d-block">Dec</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-grow-1"><span class="f-w-600">Web
                                                            Development</span><span class="d-block">Course By <a
                                                                class="font-primary" href="#">Designer
                                                            </a></span><span class="d-block"><i
                                                                class="fa fa-star font-warning"></i><i
                                                                class="fa fa-star font-warning"></i><i
                                                                class="fa fa-star font-warning"></i><i
                                                                class="fa fa-star font-warning"></i><i
                                                                class="fa fa-star-o font-warning"></i></span></div>
                                                    <div>
                                                        <h5 class="mb-0 font-primary">5</h5><span
                                                            class="d-block">Jan</span>
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
        </div>
    </div>
    <!-- Container-fluid end-->
@endsection

@section('scripts')
    <script type="module" src="{{ asset('assets/js/md-sidebar.js') }}"></script>
@endsection
