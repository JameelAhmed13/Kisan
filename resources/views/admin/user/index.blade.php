@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Users Management</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Authentication</li>
                        <li class="breadcrumb-item active">Users Management</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid basic_table">
        <div class="row">
            <div class="col-xxl-2 col-lg-4 box-col-4">
                <div class="card user-management">
                    <div class="card-body bg-primary">
                        <div class="blog-tags">
                            <div class="tags-icon">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Pie') }}"></use>
                                </svg>
                            </div>
                            <div class="tag-details">
                                <h2 class="total-num counter">{{ $roles }}</h2>
                                <p>Total Roles</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-lg-8 box-col-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Total Users by Role</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="total-num counter">
                                    <div class="d-flex by-role custom-scrollbar">
                                        @foreach ($allRoles as $role)
                                            <div>
                                                <div class="total-user bg-light-primary">
                                                    <h5> {{ $role->roleName }} </h5>
                                                    <span class="total-num counter">{{ sprintf("%02d",$role->users->count()) }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-sm-6 box-col-6">
                <div class="card user-role">
                    <div class="card-body border-b-primary border-2">
                        <div class="upcoming-box">
                            <div class="upcoming-icon bg-light-primary">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#user-plus') }}"></use>
                                </svg>
                            </div>
                            <p>User</p>
                            <a href="{{ route('admin.user.create') }}" class="btn btn-primary">{{ __('Add user') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-sm-6 box-col-6">
                <div class="card user-role">
                    <div class="card-body border-b-secondary border-2">
                        <div class="upcoming-box">
                            <div class="upcoming-icon bg-light-secondary">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Pie') }}"></use>
                                </svg>
                            </div>
                            <p>Role</p>
                            <a href="{{ route('admin.role.create') }}" class="btn btn-secondary">{{ __('Add role') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block row">
                        <div class="user-table">
                            <div class="table-responsive p-3">
                                {!! $dataTable->table() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
<script src="{{ asset('assets/js/datatables.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
<script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>

{!! $dataTable->scripts() !!}
@endsection
