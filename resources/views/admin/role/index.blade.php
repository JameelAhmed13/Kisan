@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid basic_table">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Roles Management</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Authentication</li>
                        <li class="breadcrumb-item active">Roles Management</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-6 box-col-12">
                <div class="card role-management">
                    <div class="card-body">
                        <div class="blog-card">
                            <div class="blog-card-content">
                                <div class="role-details">
                                    <div class="role-profile">
                                        <img src="{{ asset('assets/images/avatar/profile3.jpg') }}" alt="Ticket-star">
                                    </div>
                                    <div class="role-profile-details">
                                        <h3>Welcome back {{ \Illuminate\Support\Str::title(auth()->user()->name ?? '') }} !</h3>
                                    </div>
                                </div>
                                <div class="blog-tags">
                                    <div class="tags-icon bg-light-primary">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/iconly-sprite.svg#multi-user') }}"></use>
                                        </svg>
                                    </div>
                                    <div class="tag-details">
                                        <h2 class="total-num counter">{{ $users }}</h2>
                                        <p>Total Users</p>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card-image">
                                <img src="{{ asset('assets/images/role-management.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 box-col-6">
                <div class="card">
                    <div class="card-body border-b-primary border-2">
                        <div class="upcoming-box">
                            <div class="upcoming-icon bg-light-primary">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Pie') }}"></use>
                                </svg>
                            </div>
                            <p>Role</p>
                            <a href="{{ route('admin.role.create') }}" class="btn btn-primary">{{ __('Add Role') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 box-col-6">
                <div class="card">
                    <div class="card-body border-b-secondary border-2">
                        <div class="upcoming-box">
                            <div class="upcoming-icon bg-light-secondary">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#user-plus') }}"></use>
                                </svg>
                            </div>
                            <p>User</p>
                            <a href="{{ route('admin.user.create') }}" class="btn btn-secondary">{{ __('Add User') }}</a>
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
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>

    {!! $dataTable->scripts() !!}
@endsection
