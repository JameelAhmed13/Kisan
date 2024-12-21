@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2/dist/css/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/pikaday/css/pikaday.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Tasks</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Apps</li>
                        <li class="breadcrumb-item active">Tasks</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid email-wrap bookmark-wrap">
        <div class="row">
            <div class="col-xl-3 box-col-6">
                <div class="md-sidebar email-sidebar"><a class="btn btn-primary md-sidebar-toggle"
                        href="javascript:void(0)">task filter</a>
                    <div class="md-sidebar-aside">
                        <div class="email-left-aside">
                            <div class="card">
                                <div class="card-body">
                                    <div class="email-app-sidebar left-bookmark task-sidebar">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <div class="media-size-email"><img class="me-3 rounded-circle"
                                                    src="{{ asset('assets/images/user/4.jpg') }}" alt=""></div>
                                            <div class="flex-grow-1">
                                                <h6 class="f-w-600">MARK JENCO</h6>
                                                <p>Markjecno@gmail.com</p>
                                            </div>
                                        </div>
                                        <ul class="nav main-menu custom-scrollbar" role="tablist">
                                            <li class="nav-item">
                                                <button class="badge-light-primary btn-block btn-mail w-100" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <svg class="feather me-2">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}">
                                                        </use>
                                                    </svg> New Task
                                                </button>
                                                <div class="modal fade modal-bookmark" id="exampleModal" tabindex="-1"
                                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
                                                                <button class="btn-close" type="button"
                                                                    data-bs-dismiss="modal" aria-label="Close"> </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="form-bookmark needs-validation"
                                                                    id="bookmark-form" novalidate="">
                                                                    <div class="row">
                                                                        <div class="mb-3 mt-0 col-md-12">
                                                                            <label for="task-title">Task Title</label>
                                                                            <input class="form-control" id="task-title"
                                                                                type="text" required=""
                                                                                autocomplete="off">
                                                                        </div>
                                                                        <div class="mb-3 mt-0 col-md-12">
                                                                            <label for="sub-task">Sub task</label>
                                                                            <input class="form-control" id="sub-task"
                                                                                type="text" required=""
                                                                                autocomplete="off">
                                                                        </div>
                                                                        <div class="mb-3 mt-0 col-md-12">
                                                                            <div class="d-flex date-details">
                                                                                <div class="d-inline-block">
                                                                                    <label class="d-block mb-0"
                                                                                        for="chk-ani">
                                                                                        <input class="checkbox-primary"
                                                                                            id="chk-ani"
                                                                                            type="checkbox">Remind on
                                                                                    </label>
                                                                                </div>
                                                                                <div class="d-inline-block">
                                                                                    <input class="form-control"
                                                                                        id="datepicker" type="text"
                                                                                        placeholder="Date"
                                                                                        autocomplete="off">
                                                                                </div>
                                                                                <div class="d-inline-block">
                                                                                    <select class="form-control">
                                                                                        <option>7:00 am</option>
                                                                                        <option>7:30 am</option>
                                                                                        <option>8:00 am</option>
                                                                                        <option>8:30 am</option>
                                                                                        <option>9:00 am</option>
                                                                                        <option>9:30 am</option>
                                                                                        <option>10:00 am</option>
                                                                                        <option>10:30 am</option>
                                                                                        <option>11:00 am</option>
                                                                                        <option>11:30 am</option>
                                                                                        <option>12:00 pm</option>
                                                                                        <option>12:30 pm</option>
                                                                                        <option>1:00 pm</option>
                                                                                        <option>2:00 pm</option>
                                                                                        <option>3:00 pm</option>
                                                                                        <option>4:00 pm</option>
                                                                                        <option>5:00 pm</option>
                                                                                        <option>6:00 pm</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="d-inline-block">
                                                                                    <label class="d-block mb-0">
                                                                                        <input class="checkbox-primary"
                                                                                            type="checkbox">Notification
                                                                                    </label>
                                                                                </div>
                                                                                <div class="d-inline-block">
                                                                                    <label class="d-block mb-0">
                                                                                        <input class="checkbox-primary"
                                                                                            type="checkbox">Mail
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="form-group col">
                                                                                <select class="js-example-basic-single">
                                                                                    <option value="task">My Task</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group col">
                                                                                <select class="js-example-disabled-results"
                                                                                    id="bm-collection">
                                                                                    <option value="general">General
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-md-12 my-0">
                                                                            <textarea class="form-control" required="" autocomplete="off">  </textarea>
                                                                        </div>
                                                                    </div>
                                                                    <input id="index_var" type="hidden" value="6">
                                                                    <button class="btn btn-secondary" id="Bookmark"
                                                                        onclick="submitBookMark()"
                                                                        type="submit">Save</button>
                                                                    <button class="btn btn-primary" type="button"
                                                                        data-bs-dismiss="modal">Cancel</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item"><span class="main-title"> Views</span></li>
                                            <li><a class="active" id="pills-created-tab" data-bs-toggle="pill"
                                                    href="#pills-created" role="tab" aria-controls="pills-created"
                                                    aria-selected="true"><span class="title"> Created by me</span></a>
                                            </li>
                                            <li><a class="show" id="pills-todaytask-tab" data-bs-toggle="pill"
                                                    href="#pills-todaytask" role="tab"
                                                    aria-controls="pills-todaytask" aria-selected="false"><span
                                                        class="title"> Today's Tasks</span></a></li>
                                            <li><a class="show" id="pills-delayed-tab" data-bs-toggle="pill"
                                                    href="#pills-delayed" role="tab" aria-controls="pills-delayed"
                                                    aria-selected="false"><span class="title"> Delayed Tasks</span></a>
                                            </li>
                                            <li><a class="show" id="pills-upcoming-tab" data-bs-toggle="pill"
                                                    href="#pills-upcoming" role="tab" aria-controls="pills-upcoming"
                                                    aria-selected="false"><span class="title">Upcoming Tasks</span></a>
                                            </li>
                                            <li><a class="show" id="pills-weekly-tab" data-bs-toggle="pill"
                                                    href="#pills-weekly" role="tab" aria-controls="pills-weekly"
                                                    aria-selected="false"><span class="title">This week tasks</span></a>
                                            </li>
                                            <li><a class="show" id="pills-monthly-tab" data-bs-toggle="pill"
                                                    href="#pills-monthly" role="tab" aria-controls="pills-monthly"
                                                    aria-selected="false"><span class="title">This month tasks</span></a>
                                            </li>
                                            <li><a class="show" id="pills-assigned-tab" data-bs-toggle="pill"
                                                    href="#pills-assigned" role="tab" aria-controls="pills-assigned"
                                                    aria-selected="false"><span class="title">Assigned to me</span></a>
                                            </li>
                                            <li><a class="show" id="pills-tasks-tab" data-bs-toggle="pill"
                                                    href="#pills-tasks" role="tab" aria-controls="pills-tasks"
                                                    aria-selected="false"><span class="title">My tasks</span></a></li>
                                            <li>
                                                <hr>
                                            </li>
                                            <li><span class="main-title"> Tags<span class="pull-right"><a
                                                            href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#createtag">
                                                            <svg class="feather stroke-primary">
                                                                <use
                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#plus-circle') }}">
                                                                </use>
                                                            </svg></a></span></span></li>
                                            <li><a class="show" id="pills-notification-tab" data-bs-toggle="pill"
                                                    href="#pills-notification" role="tab"
                                                    aria-controls="pills-notification" aria-selected="false"><span
                                                        class="title"> Notification</span></a></li>
                                            <li><a class="show" id="pills-newsletter-tab" data-bs-toggle="pill"
                                                    href="#pills-newsletter" role="tab"
                                                    aria-controls="pills-newsletter" aria-selected="false"><span
                                                        class="title"> Newsletter</span></a></li>
                                            <li><a class="show" id="pills-newsletter-tab" data-bs-toggle="pill"
                                                    href="#pills-newsletter" role="tab"
                                                    aria-controls="pills-newsletter" aria-selected="false"><span
                                                        class="title"> Business</span></a></li>
                                            <li><a class="show" id="pills-newsletter-tab" data-bs-toggle="pill"
                                                    href="#pills-newsletter" role="tab"
                                                    aria-controls="pills-newsletter" aria-selected="false"><span
                                                        class="title"> Holidays</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-md-12 box-col-12">
                <div class="email-right-aside bookmark-tabcontent">
                    <div class="card email-body">
                        <div class="ps-0">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="pills-created" role="tabpanel"
                                    aria-labelledby="pills-created-tab">
                                    <div class="card mb-0">
                                        <div class="card-header d-flex pb-0">
                                            <h4>Created by me</h4><a class="f-w-600 font-primary"
                                                href="javascript:void(0)" onclick="myFunction()">
                                                <svg class="feather me-2">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#printer') }}">
                                                    </use>
                                                </svg>Print</a>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="taskadd">
                                                <div class="table-responsive theme-scrollbar">
                                                    <table class="table">
                                                        <tr>
                                                            <td>
                                                                <h6 class="task_title_0 f-w-600">Documentation</h6>
                                                                <p class="project_name_0">General</p>
                                                            </td>
                                                            <td>
                                                                <p class="task_desc_0">Documentation that is used to
                                                                    explain regarding some attributes of an object.</p>
                                                            </td>
                                                            <td><a class="me-2" href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}">
                                                                        </use>
                                                                    </svg></a><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-horizontal') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                            <td><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trash-2') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h6 class="task_title_0 f-w-600">Kanban design</h6>
                                                                <p class="project_name_0">General</p>
                                                            </td>
                                                            <td>
                                                                <p class="task_desc_0">kanban board is one of the tools
                                                                    that can be used to implement kanban to manage.</p>
                                                            </td>
                                                            <td><a class="me-2" href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}">
                                                                        </use>
                                                                    </svg></a><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-horizontal') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                            <td><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trash-2') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h6 class="task_title_0 f-w-600">User profile</h6>
                                                                <p class="project_name_0">General</p>
                                                            </td>
                                                            <td>
                                                                <p class="task_desc_0">There is some Console error in user
                                                                    profile page.</p>
                                                            </td>
                                                            <td><a class="me-2" href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}">
                                                                        </use>
                                                                    </svg></a><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-horizontal') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                            <td><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trash-2') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h6 class="task_title_0 f-w-600">Set Up</h6>
                                                                <p class="project_name_0">General</p>
                                                            </td>
                                                            <td>
                                                                <p class="task_desc_0">Clone the theme test data file from
                                                                    the GitHub repository.</p>
                                                            </td>
                                                            <td><a class="me-2" href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}">
                                                                        </use>
                                                                    </svg></a><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-horizontal') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                            <td><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trash-2') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h6 class="task_title_0 f-w-600">Client meeting</h6>
                                                                <p class="project_name_0">fs</p>
                                                            </td>
                                                            <td>
                                                                <p class="task_desc_0">Documentation that is used to
                                                                    explain regarding some attributes of an object to the
                                                                    client.</p>
                                                            </td>
                                                            <td><a class="me-2" href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}">
                                                                        </use>
                                                                    </svg></a><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-horizontal') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                            <td><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trash-2') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h6 class="task_title_0 f-w-600">Publish podcast</h6>
                                                                <p class="project_name_0">General</p>
                                                            </td>
                                                            <td>
                                                                <p class="task_desc_0">Digital News Report shows that
                                                                    podcasting is now a worldwide that has become one of the
                                                                    hottest topic.</p>
                                                            </td>
                                                            <td><a class="me-2" href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}">
                                                                        </use>
                                                                    </svg></a><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-horizontal') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                            <td><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trash-2') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h6 class="task_title_0 f-w-600">Testing</h6>
                                                                <p class="project_name_0">General</p>
                                                            </td>
                                                            <td>
                                                                <p class="task_desc_0">There are many tools available for
                                                                    testing websites, we’ve chosen classics: Chrome dev
                                                                    tools.</p>
                                                            </td>
                                                            <td><a class="me-2" href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}">
                                                                        </use>
                                                                    </svg></a><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-horizontal') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                            <td><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trash-2') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id="pills-todaytask" role="tabpanel"
                                    aria-labelledby="pills-todaytask-tab">
                                    <div class="card mb-0">
                                        <div class="card-header d-flex">
                                            <h4>Today's Tasks</h4><a class="font-primary"
                                                href="javascript:void(0)">
                                                <svg class="feather me-2">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#printer') }}">
                                                    </use>
                                                </svg>Print</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="details-bookmark text-center">
                                                <div class="row" id="favouriteData"></div>
                                                <div class="no-favourite"><span>No task due today.</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id="pills-delayed" role="tabpanel"
                                    aria-labelledby="pills-delayed-tab">
                                    <div class="card mb-0">
                                        <div class="card-header d-flex">
                                            <h4 class="mb-0">Delayed Tasks</h4><a class="font-primary"
                                                href="javascript:void(0)">
                                                <svg class="feather me-2">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#printer') }}">
                                                    </use>
                                                </svg>Print</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="details-bookmark text-center"><span>No tasks found.</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id="pills-upcoming" role="tabpanel"
                                    aria-labelledby="pills-upcoming-tab">
                                    <div class="card mb-0">
                                        <div class="card-header d-flex">
                                            <h4 class="mb-0">Upcoming Tasks</h4><a class="font-primary"
                                                href="javascript:void(0)">
                                                <svg class="feather me-2">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#printer') }}">
                                                    </use>
                                                </svg>Print</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="details-bookmark text-center"><span>No tasks found.</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id="pills-weekly" role="tabpanel"
                                    aria-labelledby="pills-weekly-tab">
                                    <div class="card mb-0">
                                        <div class="card-header d-flex">
                                            <h4 class="mb-0">This Week Tasks</h4><a class="font-primary"
                                                href="javascript:void(0)">
                                                <svg class="feather me-2">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#printer') }}">
                                                    </use>
                                                </svg>Print</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="details-bookmark text-center"><span>No tasks found.</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id="pills-monthly" role="tabpanel"
                                    aria-labelledby="pills-monthly-tab">
                                    <div class="card mb-0">
                                        <div class="card-header d-flex">
                                            <h4 class="mb-0">This Month Tasks</h4><a class="font-primary"
                                                href="javascript:void(0)">
                                                <svg class="feather me-2">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#printer') }}">
                                                    </use>
                                                </svg>Print</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="details-bookmark text-center"><span>No tasks found.</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id="pills-assigned" role="tabpanel"
                                    aria-labelledby="pills-assigned-tab">
                                    <div class="card mb-0">
                                        <div class="card-header d-flex pb-0">
                                            <h4 class="mb-0">Assigned to me</h4><a class="font-primary"
                                                href="javascript:void(0)">
                                                <svg class="feather me-2">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#printer') }}">
                                                    </use>
                                                </svg>Print</a>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="taskadd">
                                                <div class="table-responsive theme-scrollbar">
                                                    <table class="table">
                                                        <tr>
                                                            <td>
                                                                <h6 class="task_title_0 f-w-600">Task name</h6>
                                                                <p class="project_name_0">General</p>
                                                            </td>
                                                            <td>
                                                                <p class="task_desc_0">Documentation that is used to
                                                                    explain regarding some attributes of an object.</p>
                                                            </td>
                                                            <td><a class="me-2" href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}">
                                                                        </use>
                                                                    </svg></a><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-horizontal') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                            <td><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trash-2') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h6 class="task_title_0 f-w-600">Task name</h6>
                                                                <p class="project_name_0">General</p>
                                                            </td>
                                                            <td>
                                                                <p class="task_desc_0">There are many tools available for
                                                                    testing websites, we’ve chosen classics: Chrome dev
                                                                    tools.</p>
                                                            </td>
                                                            <td><a class="me-2" href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}">
                                                                        </use>
                                                                    </svg></a><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-horizontal') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                            <td><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trash-2') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h6 class="task_title_0 f-w-600">Task name</h6>
                                                                <p class="project_name_0">General</p>
                                                            </td>
                                                            <td>
                                                                <p class="task_desc_0">Clone the theme test data file from
                                                                    the GitHub repository.</p>
                                                            </td>
                                                            <td><a class="me-2" href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}">
                                                                        </use>
                                                                    </svg></a><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-horizontal') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                            <td><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trash-2') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h6 class="task_title_0 f-w-600">Task name</h6>
                                                                <p class="project_name_0">General</p>
                                                            </td>
                                                            <td>
                                                                <p class="task_desc_0">There is some Console error in user
                                                                    profile page.</p>
                                                            </td>
                                                            <td><a class="me-2" href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}">
                                                                        </use>
                                                                    </svg></a><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-horizontal') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                            <td><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trash-2') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h6 class="task_title_0 f-w-600">Task name</h6>
                                                                <p class="project_name_0">General</p>
                                                            </td>
                                                            <td>
                                                                <p class="task_desc_0">kanban board is one of the tools
                                                                    that can be used to implement kanban to manage.</p>
                                                            </td>
                                                            <td><a class="me-2" href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}">
                                                                        </use>
                                                                    </svg></a><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-horizontal') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                            <td><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trash-2') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id="pills-tasks" role="tabpanel"
                                    aria-labelledby="pills-tasks-tab">
                                    <div class="card mb-0">
                                        <div class="card-header d-flex pb-0">
                                            <h4 class="mb-0">My tasks</h4><a class="font-primary"
                                                href="javascript:void(0)">
                                                <svg class="feather me-2">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#printer') }}">
                                                    </use>
                                                </svg>Print</a>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="taskadd">
                                                <div class="table-responsive theme-scrollbar">
                                                    <table class="table">
                                                        <tr>
                                                            <td>
                                                                <h6 class="task_title_0 f-w-600">Task name</h6>
                                                                <p class="project_name_0">General</p>
                                                            </td>
                                                            <td>
                                                                <p class="task_desc_0">kanban board is one of the tools
                                                                    that can be used to implement kanban to manage.</p>
                                                            </td>
                                                            <td><a class="me-2" href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}">
                                                                        </use>
                                                                    </svg></a><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-horizontal') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                            <td><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trash-2') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h6 class="task_title_0 f-w-600">Task name</h6>
                                                                <p class="project_name_0">General</p>
                                                            </td>
                                                            <td>
                                                                <p class="task_desc_0">There are many tools available for
                                                                    testing websites, we’ve chosen classics: Chrome dev
                                                                    tools.</p>
                                                            </td>
                                                            <td><a class="me-2" href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}">
                                                                        </use>
                                                                    </svg></a><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-horizontal') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                            <td><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trash-2') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h6 class="task_title_0 f-w-600">Task name</h6>
                                                                <p class="project_name_0">General</p>
                                                            </td>
                                                            <td>
                                                                <p class="task_desc_0">Clone the theme test data file from
                                                                    the GitHub repository.</p>
                                                            </td>
                                                            <td><a class="me-2" href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}">
                                                                        </use>
                                                                    </svg></a><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-horizontal') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                            <td><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trash-2') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h6 class="task_title_0 f-w-600">Task name</h6>
                                                                <p class="project_name_0">General</p>
                                                            </td>
                                                            <td>
                                                                <p class="task_desc_0">Documentation that is used to
                                                                    explain regarding some attributes of an object.</p>
                                                            </td>
                                                            <td><a class="me-2" href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}">
                                                                        </use>
                                                                    </svg></a><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-horizontal') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                            <td><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trash-2') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h6 class="task_title_0 f-w-600">Task name</h6>
                                                                <p class="project_name_0">General</p>
                                                            </td>
                                                            <td>
                                                                <p class="task_desc_0">There is some Console error in user
                                                                    profile page.</p>
                                                            </td>
                                                            <td><a class="me-2" href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#link') }}">
                                                                        </use>
                                                                    </svg></a><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#more-horizontal') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                            <td><a href="javascript:void(0)">
                                                                    <svg class="feather">
                                                                        <use
                                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trash-2') }}">
                                                                        </use>
                                                                    </svg></a></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id="pills-notification" role="tabpanel"
                                    aria-labelledby="pills-notification-tab">
                                    <div class="card mb-0">
                                        <div class="card-header d-flex">
                                            <h4 class="mb-0">Notification</h4><a class="font-primary"
                                                href="javascript:void(0)">
                                                <svg class="feather me-2">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#printer') }}">
                                                    </use>
                                                </svg>Print</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="details-bookmark text-center"><span>No tasks found.</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id="pills-newsletter" role="tabpanel"
                                    aria-labelledby="pills-newsletter-tab">
                                    <div class="card mb-0">
                                        <div class="card-header d-flex">
                                            <h4 class="mb-0">Newsletter</h4><a class="font-primary"
                                                href="javascript:void(0)">
                                                <svg class="feather me-2">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#printer') }}">
                                                    </use>
                                                </svg>Print</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="details-bookmark text-center"><span>No tasks found.</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade modal-bookmark" id="createtag" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Create Tag</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-bookmark needs-validation" novalidate="">
                                                    <div class="row">
                                                        <div class="mb-3 mt-0 col-md-12">
                                                            <label>Tag Name</label>
                                                            <input class="form-control" type="text" required=""
                                                                autocomplete="off">
                                                        </div>
                                                        <div class="mt-0 col-md-12">
                                                            <label>Tag color</label>
                                                            <input class="form-color d-block" type="color"
                                                                value="#43B9B2">
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-secondary" type="button">Save</button>
                                                    <button class="btn btn-primary" type="button"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                </form>
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
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/pikaday/pikaday.js') }}"></script>
    <script src="{{ asset('assets/js/pikaday/custom-pikaday.js') }}"></script>
    <script src="{{ asset('assets/js/print.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/md-sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
@endsection
