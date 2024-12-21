@extends('layouts.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid basic_table">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Tags Management</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Laravel Example</li>
                        <li class="breadcrumb-item active">Tags Management</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card role-management">
                    <div class="card-body">
                        <div class="blog-card">
                            <div class="blog-card-content">
                                <div class="role-details">
                                    <div class="role-profile">
                                        <img src="{{ asset('assets/images/avatar/4.jpg') }}" alt="Ticket-star">
                                    </div>
                                    <div class="role-profile-details">
                                        <h3>Welcome back {{ \Illuminate\Support\Str::title(auth()->user()->first_name ?? '') }} {{ \Illuminate\Support\Str::title(auth()->user()->last_name ?? '') }}!</h3>
                                    </div>
                                </div>
                                <div class="blog-tags">
                                    <div class="tags-icon bg-light-primary">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/iconly-sprite.svg#Ticket') }}"></use>
                                        </svg>
                                    </div>
                                    <div class="tag-details">
                                        <h2 class="total-num counter">{{ sprintf("%02d",\App\Models\Blog::all()->count()) }}</h2>
                                        <p>Total Blogs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card-image">
                                <img src="{{ asset('assets/images/user-management.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body border-b-primary border-2">
                        <div class="upcoming-box">
                            <div class="upcoming-icon bg-light-primary">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Ticket') }}"></use>
                                </svg>
                            </div>
                            <p>Blog</p>
                            <a href="{{ route('admin.blog.create') }}" class="btn btn-primary">{{ __('Add blog') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body border-b-secondary border-2">
                        <div class="upcoming-box">
                            <div class="upcoming-icon bg-light-secondary">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#tags') }}"></use>
                                </svg>
                            </div>
                            <p>Tag</p>
                            <a href="{{ route('admin.tag.create') }}" class="btn btn-secondary">{{ __('Add tag') }}</a>
                        </div>
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
<script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
<script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
{!! $dataTable->scripts() !!}
@endsection
