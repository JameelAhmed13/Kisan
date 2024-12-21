@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/todo/todo.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>To-Do</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Apps</li>
                        <li class="breadcrumb-item active">To-Do</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid email-wrap bookmark-wrap todo-wrap">
        <div class="row">
            <div class="col-xl-3 xl-30 box-col-12">
                <div class="email-sidebar md-sidebar"><a class="btn btn-primary email-aside-toggle md-sidebar-toggle">To Do
                        filter</a>
                    <div class="email-left-aside md-sidebar-aside">
                        <div class="card">
                            <div class="card-body">
                                <div class="email-app-sidebar left-bookmark custom-scrollbar">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="media-size-email"><img class="me-3 img-40 rounded-circle"
                                                src="{{ asset('assets/images/avatar/1.jpg') }}" alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6 class="f-w-600">Mark Jecno</h6>
                                            <p>Markjecno@gmail.com</p>
                                        </div>
                                    </div>
                                    <ul class="nav main-menu">
                                        <li class="nav-item">
                                            <button class="btn-primary bg-primary d-block btn-mail w-100">
                                                <svg class="feather me-2">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}">
                                                    </use>
                                                </svg>To Do List
                                            </button>
                                        </li>
                                        <li class="nav-item"> <a href="javascript:void(0)"><span
                                                    class="iconbg badge-light-primary">
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#file-plus') }}">
                                                        </use>
                                                    </svg></span><span class="title ms-2">All Task</span></a></li>
                                        <li class="nav-item"><a href="javascript:void(0)"><span
                                                    class="iconbg badge-light-success">
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}">
                                                        </use>
                                                    </svg></span><span class="title ms-2">Completed</span><span
                                                    class="badge badge-success">3</span></a></li>
                                        <li class="nav-item"><a href="javascript:void(0)"><span
                                                    class="iconbg badge-light-danger">
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#cast') }}">
                                                        </use>
                                                    </svg></span><span class="title ms-2">Pending</span><span
                                                    class="badge badge-danger">2</span></a></li>
                                        <li class="nav-item"><a href="javascript:void(0)"><span
                                                    class="iconbg badge-light-info">
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#activity') }}">
                                                        </use>
                                                    </svg></span><span class="title ms-2">In Process</span><span
                                                    class="badge badge-primary">2</span></a></li>
                                        <li class="nav-item"><a href="javascript:void(0)"><span
                                                    class="iconbg badge-light-danger">
                                                    <svg class="feather">
                                                        <use
                                                            href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#trash') }}">
                                                        </use>
                                                    </svg></span><span class="title ms-2">Trash</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 xl-70 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">To-Do</h3>
                    </div>
                    <div class="card-body">
                        <div class="todo">
                            <div class="todo-list-wrapper">
                                <div class="todo-list-container">
                                    <div class="mark-all-tasks">
                                        <div class="mark-all-tasks-container"><span class="mark-all-btn"
                                                id="mark-all-finished" role="button"><span class="btn-label">Mark all as
                                                    finished</span><span class="action-box completed"><i class="icon"><i
                                                            class="icon-check"></i></i></span></span><span
                                                class="mark-all-btn move-down" id="mark-all-incomplete" role="button"><span
                                                    class="btn-label">Mark all as Incomplete</span><span
                                                    class="action-box"><i class="icon"><i
                                                            class="icon-check"></i></i></span></span></div>
                                        <div class="todo-list-footer ms-2">
                                            <div class="add-task-btn-wrapper"><span class="add-task-btn">
                                                    <button class="btn btn-primary"><i class="icon-plus"></i> Add new
                                                        task</button></span></div>
                                        </div>
                                    </div>
                                    <div class="todo-list-body">
                                        <div class="todo-list-footer">
                                            <div class="new-task-wrapper mb-4">
                                                <textarea id="new-task" placeholder="Enter new task here. . ."></textarea><span class="btn btn-danger cancel-btn"
                                                    id="close-task-panel">Close</span><span
                                                    class="btn btn-success ms-3 add-new-task-btn" id="add-task">Add
                                                    Task</span>
                                            </div>
                                        </div>
                                        <ul id="todo-list">
                                            <li class="task">
                                                <div class="task-container">
                                                    <h4 class="task-label">Check validation involves making sure all your
                                                        tags are properly closed and nested.</h4>
                                                    <div class="d-flex align-items-center gap-4"><span
                                                            class="badge badge-light-primary">In Progress</span>
                                                        <h5 class="assign-name m-0">10 Nov</h5><span
                                                            class="task-action-btn"><span
                                                                class="action-box large delete-btn" title="Delete Task"><i
                                                                    class="icon"><i
                                                                        class="icon-trash"></i></i></span><span
                                                                class="action-box large complete-btn"
                                                                title="Mark Complete"><i class="icon"><i
                                                                        class="icon-check"></i></i></span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="task">
                                                <div class="task-container">
                                                    <h4 class="task-label">Test the outgoing links from all the pages to
                                                        the specific domain under test.</h4>
                                                    <div class="d-flex align-items-center gap-4"><span
                                                            class="badge badge-light-danger">Pending</span>
                                                        <h5 class="assign-name m-0">04 Aug</h5><span
                                                            class="task-action-btn"><span
                                                                class="action-box large delete-btn" title="Delete Task"><i
                                                                    class="icon"><i
                                                                        class="icon-trash"></i></i></span><span
                                                                class="action-box large complete-btn"
                                                                title="Mark Complete"><i class="icon"><i
                                                                        class="icon-check"></i></i></span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="completed task">
                                                <div class="task-container">
                                                    <h4 class="task-label">Test links are used to send emails to admin or
                                                        other users from web pages.</h4>
                                                    <div class="d-flex align-items-center gap-4"><span
                                                            class="badge badge-light-success">Done</span>
                                                        <h5 class="assign-name m-0">25 Feb</h5><span
                                                            class="task-action-btn"><span
                                                                class="action-box large delete-btn" title="Delete Task"><i
                                                                    class="icon"><i
                                                                        class="icon-trash"></i></i></span><span
                                                                class="action-box large complete-btn"
                                                                title="Mark Complete"><i class="icon"><i
                                                                        class="icon-check"></i></i></span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="task">
                                                <div class="task-container">
                                                    <h4 class="task-label">Options to create forms, if any, form deletes a
                                                        view or modify the forms.</h4>
                                                    <div class="d-flex align-items-center gap-4"><span
                                                            class="badge badge-light-primary">In Progress</span>
                                                        <h5 class="assign-name m-0">15 Dec</h5><span
                                                            class="task-action-btn"><span
                                                                class="action-box large delete-btn" title="Delete Task"><i
                                                                    class="icon"><i
                                                                        class="icon-trash"></i></i></span><span
                                                                class="action-box large complete-btn"
                                                                title="Mark Complete"><i class="icon"><i
                                                                        class="icon-check"></i></i></span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="task">
                                                <div class="task-container">
                                                    <h4 class="task-label">Wrong inputs in the forms to the fields in the
                                                        forms.</h4>
                                                    <div class="d-flex align-items-center gap-4"><span
                                                            class="badge badge-light-danger">Pending</span>
                                                        <h5 class="assign-name m-0">11 Nov</h5><span
                                                            class="task-action-btn"><span
                                                                class="action-box large delete-btn" title="Delete Task"><i
                                                                    class="icon"><i
                                                                        class="icon-trash"></i></i></span><span
                                                                class="action-box large complete-btn"
                                                                title="Mark Complete"><i class="icon"><i
                                                                        class="icon-check"></i></i></span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="task completed">
                                                <div class="task-container">
                                                    <h4 class="task-label">Check if the instructions provided are perfect
                                                        to satisfy its purpose.</h4>
                                                    <div class="d-flex align-items-center gap-4"><span
                                                            class="badge badge-light-danger">Pending</span>
                                                        <h5 class="assign-name m-0">04 Sept</h5><span
                                                            class="task-action-btn"><span
                                                                class="action-box large delete-btn" title="Delete Task"><i
                                                                    class="icon"><i
                                                                        class="icon-trash"></i></i></span><span
                                                                class="action-box large complete-btn"
                                                                title="Mark Complete"><i class="icon"><i
                                                                        class="icon-check"></i></i></span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="task">
                                                <div class="task-container">
                                                    <h4 class="task-label">Application server and Database server
                                                        interface.</h4>
                                                    <div class="d-flex align-items-center gap-4"><span
                                                            class="badge badge-light-success">Done</span>
                                                        <h5 class="assign-name m-0">08 July</h5><span
                                                            class="task-action-btn"><span
                                                                class="action-box large delete-btn" title="Delete Task"><i
                                                                    class="icon"><i
                                                                        class="icon-trash"></i></i></span><span
                                                                class="action-box large complete-btn"
                                                                title="Mark Complete"><i class="icon"><i
                                                                        class="icon-check"></i></i></span></span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-popup hide">
                                <p><span class="task"></span><span class="notification-text"></span></p>
                            </div>
                        </div>
                        <!-- HTML Template for tasks-->
                        <script id="task-template" type="tect/template">
                          <li class="task">
                            <div class="task-container">
                              <h4 class="task-label"></h4>
                              <div class="d-flex align-items-center gap-4">
                                <span class="badge badge-light-danger">Pending</span>
                                <h5 class="assign-name">16 Jan</h5>
                                <span class="task-action-btn">
                                  <span class="action-box large delete-btn" title="Delete Task">
                                    <i class="icon"><i class="icon-trash"></i></i>
                                  </span>
                                  <span class="action-box large complete-btn" title="Mark Complete">
                                    <i class="icon"><i class="icon-check"></i></i>
                                  </span>
                                </span>
                              </div>
                            </div>
                          </li>
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script type="module" src="{{ asset('assets/js/md-sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/todo/todo.js') }}"></script>
@endsection
