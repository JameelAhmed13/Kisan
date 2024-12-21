@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid basic_table">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Blogs Management</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Laravel Example</li>
                        <li class="breadcrumb-item active">Blogs Management</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xxl-6 box-col-12">
            <div class="card role-management">
                <div class="card-body">
                    <div class="blog-card">
                        <div class="blog-card-content">
                            <h4>Good day, {{ \Illuminate\Support\Str::title(auth()->user()->first_name ?? '') }} {{ \Illuminate\Support\Str::title(auth()->user()->last_name ?? '') }}</h4>
                            <p>Welcome to the Edmin ! We are glad that you have visited our dashboard.</p>
                            <div class="d-flex">
                                <div class="blog-tags m-0">
                                    <div class="tags-icon bg-light-primary">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/iconly-sprite.svg#multi-user') }}"></use>
                                        </svg>
                                    </div>
                                    <div class="tag-details">
                                        <h2 class="total-num counter">{{ sprintf("%02d",\App\Models\Category::all()->count()) }}</h2>
                                        <p>Total Categories</p>
                                    </div>
                                </div>
                                <div class="blog-tags m-0">
                                    <div class="tags-icon bg-light-secondary">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/iconly-sprite.svg#tags') }}"></use>
                                        </svg>
                                    </div>
                                    <div class="tag-details">
                                        <h2 class="total-num counter txt-secondary">{{ sprintf("%02d",\App\Models\Tag::all()->count()) }}</h2>
                                        <p>Total Tags</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-card-image">
                            <img src="{{ asset('assets/images/blog-management.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-md-4 box-col-4">
            <div class="card">
                <div class="card-body border-b-primary border-2">
                    <div class="upcoming-box">
                        <div class="upcoming-icon bg-light-primary">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/iconly-sprite.svg#Ticket') }}"></use>
                            </svg>
                        </div>
                        <p>Blog</p>
                        <a href="{{ route('admin.blog.create') }}" class="btn btn-primary">{{ __('Add Blog') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-md-4 box-col-4">
            <div class="card">
                <div class="card-body border-b-secondary border-2">
                    <div class="upcoming-box">
                        <div class="upcoming-icon bg-light-secondary">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/iconly-sprite.svg#tags') }}"></use>
                            </svg>
                        </div>
                        <p>Tag</p>
                        <a href="{{ route('admin.tag.create') }}" class="btn btn-secondary">{{ __('Add Tag') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-md-4 box-col-4">
            <div class="card">
                <div class="card-body border-b-tertiary border-2">
                    <div class="upcoming-box">
                        <div class="upcoming-icon bg-light-tertiary">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/iconly-sprite.svg#Category') }}"></use>
                            </svg>
                        </div>
                        <p>Category</p>
                        <a href="{{ route('admin.category.index') }}" class="btn btn-tertiary">{{ __('Add Category') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block row">
                    <div class="role-table">
                        <div class="table-responsive p-3">
                            {!! $dataTable->table() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon-clipart.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
    {!! $dataTable->scripts() !!}
@endsection
