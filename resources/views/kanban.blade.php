@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Kanban Board</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Apps</li>
                        <li class="breadcrumb-item active">Kanban-board</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts -->
    <div class="container-fluid jkanban-container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Default Kanban</h4>
                    </div>
                    <div class="card-body pb-0">
                        <div class="default-kanban" id="demo1"></div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card custom-board">
                    <div class="card-header pb-0">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <h4>Custom Board</h4>
                            </div>
                        </div>
                        <p class="mb-0">| colors, gutter, click on board&apos;s item and restricting which boards to drag
                            items to </p>
                    </div>
                    <div class="card-body pb-0">
                        <div class="custom-board" id="demo2"></div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card api-board">
                    <div class="card-header pb-0">
                        <h4>API</h4>
                        <p class="mb-0">add item, add board, delete board: </p>
                    </div>
                    <div class="card-body">
                        <div class="api-board" id="demo3"></div>
                        <button class="btn btn-primary" id="addDefault">Add &quot;Default&quot; board</button>
                        <button class="btn btn-success" id="addToDo">Add element in &quot;To Do&quot; Board</button>
                        <button class="btn btn-danger" id="removeBoard">Remove &quot;Done&quot; Board</button>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card note p-20">jKanban is Pure agnostic Javascript plugin for Kanban boards for more options
                    please refer <a class="font-primary" href="http://www.riccardotartaglia.it/jkanban/"
                        target="_blank">jkanban Official site </a>And <a class="font-primary"
                        href="https://github.com/riktar/jkanban" target="_blank">github link</a></div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/jkanban/jkanban.js') }}"></script>
    <script src="{{ asset('assets/js/jkanban/custom.js') }}"></script>
@endsection
