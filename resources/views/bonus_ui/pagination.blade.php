@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Pagination</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Pagination</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <!-- default pagination start-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Default Pagination</h4>
                        <p class="desc mb-0 mt-1"><span>You can set pagination using</span><code> aria-label=&quot;Search
                                results pages. </code><span></span></p>
                    </div>
                    <div class="card-body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-primary pagination-border-primary">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- default pagination End-->
            </div>
            <div class="col-md-6">
                <!-- Pagination With Active Start-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Pagination With Active And Disabled</h4>
                        <p class="desc mb-0 mt-1"><span>for links that appear un-clickable and</span><code> .disabled ,
                                .active </code><span>to indicate the current page.</span></p>
                    </div>
                    <div class="card-body">
                        <nav aria-label="...">
                            <ul class="pagination pagination-success pagination-border-success">
                                <li class="page-item disabled"><a class="page-link" href="javascript:void(0)"
                                        tabindex="-1">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">2 </a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Pagination With Active End-->
            </div>
            <div class="col-md-6">
                <!-- Pagination With Icons Start-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Pagination With Icons</h4>
                        <p class="desc mb-0 mt-1"><span>Use an icon or symbol in place of text for some pagination
                                links.</span><code></code><span></span></p>
                    </div>
                    <div class="card-body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-secondary pagination-border-secondary">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)"
                                        aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">...</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">20</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next"><span
                                            aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Pagination With Icons End-->
            </div>
            <div class="col-md-6">
                <!-- Rounded Pagination Start-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Rounded Pagination</h4>
                        <p class="desc mb-0 mt-1"><span>Used in rounded
                                pagination</span><code>[.rounded-circle]</code><span></span></p>
                    </div>
                    <div class="card-body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-tertiary pagination-border-tertiary gap-2">
                                <li class="page-item"><a class="page-link rounded-circle" href="javascript:void(0)"
                                        aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                <li class="page-item"><a class="page-link rounded-circle" href="javascript:void(0)">1</a>
                                </li>
                                <li class="page-item"><a class="page-link rounded-circle" href="javascript:void(0)">2</a>
                                </li>
                                <li class="page-item"><a class="page-link rounded-circle"
                                        href="javascript:void(0)">...</a></li>
                                <li class="page-item"><a class="page-link rounded-circle"
                                        href="javascript:void(0)">20</a></li>
                                <li class="page-item"><a class="page-link rounded-circle" href="javascript:void(0)"
                                        aria-label="Next"><span aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Rounded Pagination End-->
            </div>
            <div class="col-xxl-6">
                <!-- Pagination Alignment Start-->
                <!-- Pagination Alignment menu-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Pagination Alignment</h4>
                        <p class="desc mb-0 mt-1"><span>Change the alignment of pagination components with flexbox
                                utilities. For example, with </span><code>.justify-content-center:</code><span>.</span></p>
                    </div>
                    <div class="card-body">
                        <nav class="mb-4" aria-label="Page navigation example">
                            <ul class="pagination pagination-border-primary pagination-primary pagination">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                            </ul>
                        </nav>
                        <nav class="mb-4" aria-label="Page navigation example">
                            <ul
                                class="pagination pagination justify-content-center pagination-border-secondary pagination-secondary">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">I</a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">II</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">III</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                            </ul>
                        </nav>
                        <nav class="mb-0" aria-label="Page navigation example">
                            <ul
                                class="pagination pagination justify-content-end pagination-border-success pagination-success">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">i</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">ii</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">iii</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Pagination Alignment Ends-->
            </div>
            <div class="col-xxl-6">
                <!-- Pagination Alignment Start-->
                <!-- Pagination Alignment menu-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Pagination Sizing</h4>
                        <p class="desc mb-0 mt-1"><span>Use</span><code>
                                [pagination-lg/pagination-md/pagination-lg]</code><span>for additional sizes.</span></p>
                    </div>
                    <div class="card-body">
                        <nav class="mb-4" aria-label="Page navigation example">
                            <ul class="pagination pagination-lg pagination-info pagination-border-info">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                            </ul>
                        </nav>
                        <nav class="mb-4" aria-label="Page navigation example">
                            <ul class="pagination pagination-md pagination-info pagination-border-info">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                            </ul>
                        </nav>
                        <nav class="mb-0" aria-label="Page navigation example">
                            <ul class="pagination pagination-sm pagination-info pagination-border-info">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Pagination Alignment Ends-->
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
@endsection
