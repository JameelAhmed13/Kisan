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
            <h3>Pages Management</h3>
        </div>
        <div class="col-sm-6">
            <nav>
                <ol class="breadcrumb justify-content-sm-end align-items-center">
                    <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                            <svg class="svg-color">
                                <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                            </svg></a></li>
                    <li class="breadcrumb-item">Laravel Example</li>
                    <li class="breadcrumb-item active">Pages Management</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
    <!-- Container-fluid starts-->
    <div class="container-fluid basic_table">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header text-end">
                        <a href="{{ route('admin.page.create') }}" class="btn btn-primary">{{ __('Add Page') }}</a>
                    </div>
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
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
<script src="{{ asset('assets/js/datatables.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
<script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
{!! $dataTable->scripts() !!}
@endsection
