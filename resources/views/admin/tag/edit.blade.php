@extends('layouts.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
<div class="container-fluid">
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
                    <li class="breadcrumb-item">Tags</li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card height-equal">
                <div class="card-header">
                    <h4>Edit Tag</h4>
                </div>
                <div class="card-body">
                    <form class="row g-3 custom-input" id="tagForm" action="{{ route('admin.tag.update', $tag->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @include('admin.tag.fields')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-validation/validation.js') }}"></script>
@endsection