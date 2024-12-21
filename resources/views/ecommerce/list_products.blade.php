@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/simple-datatables/dist/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Product List</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active">Product List</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid list-products">
        <div class="row">
            <div class="col-sm-12">
                <!-- Invoice menu-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Individual column searching (text inputs)</h4><span>The searching functionality provided by
                            DataTables is useful for quickly search through the information in the table - however the
                            search is global, and you may wish to present controls that search on specific columns.</span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive theme-scrollbar product-table">
                            <table class="display" id="basic-3">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Details</th>
                                        <th>Amount</th>
                                        <th>Stock</th>
                                        <th>Start date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="{{ route('admin.product_page') }}"><img
                                                    src="{{ asset('assets/images/ecommerce/product-table-1.png') }}"
                                                    alt=""></a></td>
                                        <td> <a href="{{ route('admin.product_page') }}">
                                                <h6>Black Shirt</h6>
                                            </a><span>Vida Loca - Gray Checks Fit Men's Casual Shirt.</span></td>
                                        <td>$12</td>
                                        <td><span class="font-success">In Stock</span></td>
                                        <td>2022/05/21</td>
                                        <td>
                                            <button class="btn btn-danger btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                            <button class="btn btn-primary btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('admin.product_page') }}"><img
                                                    src="{{ asset('assets/images/ecommerce/product-table-2.png') }}"
                                                    alt=""></a></td>
                                        <td> <a href="{{ route('admin.product_page') }}">
                                                <h6>Yellow T-shirt</h6>
                                            </a><span>Wild West - Yellow Cotton Blend Regular Fit Men's Formal
                                                T-Shirt</span></td>
                                        <td>$15</td>
                                        <td><span class="font-primary">Low Stock</span></td>
                                        <td>2022/08/15</td>
                                        <td>
                                            <button class="btn btn-danger btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                            <button class="btn btn-primary btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('admin.product_page') }}"><img
                                                    src="{{ asset('assets/images/ecommerce/product-table-3.png') }}"
                                                    alt=""></a></td>
                                        <td> <a href="{{ route('admin.product_page') }}">
                                                <h6>Blackish Top</h6>
                                            </a><span>aask - Black Polyester Blend Women's Fit &amp; Flare T-shirt.</span>
                                        </td>
                                        <td>$20</td>
                                        <td><span class="font-danger">Out of stock</span></td>
                                        <td>2022/05/12</td>
                                        <td>
                                            <button class="btn btn-danger btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                            <button class="btn btn-primary btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('admin.product_page') }}"><img
                                                    src="{{ asset('assets/images/ecommerce/product-table-4.png') }}"
                                                    alt=""></a></td>
                                        <td> <a href="{{ route('admin.product_page') }}">
                                                <h6>Brown Casual Shirt</h6>
                                            </a><span>R L F - Brown Cotton Blend Men's A-Line Shirt</span></td>
                                        <td>$14</td>
                                        <td><span class="font-primary">Low Stock</span></td>
                                        <td>2022/12/16</td>
                                        <td>
                                            <button class="btn btn-danger btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                            <button class="btn btn-primary btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('admin.product_page') }}"><img
                                                    src="{{ asset('assets/images/ecommerce/product-table-5.png') }}"
                                                    alt=""></a></td>
                                        <td> <a href="{{ route('admin.product_page') }}">
                                                <h6>Black &amp; white Dress</h6>
                                            </a><span>Women's Black &amp; White Collection Dress.</span></td>
                                        <td>$25</td>
                                        <td><span class="font-success">In Stock</span></td>
                                        <td>2022/01/15</td>
                                        <td>
                                            <button class="btn btn-danger btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                            <button class="btn btn-primary btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('admin.product_page') }}"><img
                                                    src="{{ asset('assets/images/ecommerce/product-table-6.png') }}"
                                                    alt=""></a></td>
                                        <td> <a href="{{ route('admin.product_page') }}">
                                                <h6>Red Blazer For Winter</h6>
                                            </a><span>Womens's Red Winter Season Collection Blazer.</span></td>
                                        <td>$10</td>
                                        <td><span class="font-primary">Low Stock</span></td>
                                        <td>2022/08/10</td>
                                        <td>
                                            <button class="btn btn-danger btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                            <button class="btn btn-primary btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('admin.product_page') }}"><img
                                                    src="{{ asset('assets/images/ecommerce/product-table-1.png') }}"
                                                    alt=""></a></td>
                                        <td> <a href="{{ route('admin.product_page') }}">
                                                <h6>Yellow Plain T-shirt</h6>
                                            </a><span>Wild West - Yellow Cotton Blend Regular Fit Men's Formal
                                                T-Shirt.</span></td>
                                        <td>$12</td>
                                        <td><span class="font-success">In Stock</span></td>
                                        <td>2022/05/21</td>
                                        <td>
                                            <button class="btn btn-danger btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                            <button class="btn btn-primary btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('admin.product_page') }}"><img
                                                    src="{{ asset('assets/images/ecommerce/product-table-2.png') }}"
                                                    alt=""></a></td>
                                        <td> <a href="{{ route('admin.product_page') }}">
                                                <h6>Blackish Top</h6>
                                            </a><span>aask - Black Polyester Blend Women's Fit &amp; Flare T-shirt.</span>
                                        </td>
                                        <td>$15</td>
                                        <td><span class="font-primary">Low Stock</span></td>
                                        <td>2022/08/15</td>
                                        <td>
                                            <button class="btn btn-danger btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                            <button class="btn btn-primary btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('admin.product_page') }}"><img
                                                    src="{{ asset('assets/images/ecommerce/product-table-3.png') }}"
                                                    alt=""></a></td>
                                        <td> <a href="{{ route('admin.product_page') }}">
                                                <h6>Women's T-shirt</h6>
                                            </a><span>Women's Black T-shirt</span></td>
                                        <td>$20</td>
                                        <td><span class="font-danger">Out of stock</span></td>
                                        <td>2022/05/12</td>
                                        <td>
                                            <button class="btn btn-danger btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                            <button class="btn btn-primary btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('admin.product_page') }}"><img
                                                    src="{{ asset('assets/images/ecommerce/product-table-4.png') }}"
                                                    alt=""></a></td>
                                        <td> <a href="{{ route('admin.product_page') }}">
                                                <h6>Brown Shirt</h6>
                                            </a><span>Men's Brown Shirt</span></td>
                                        <td>$14</td>
                                        <td><span class="font-primary">Low Stock</span></td>
                                        <td>2022/12/16</td>
                                        <td>
                                            <button class="btn btn-danger btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                            <button class="btn btn-primary btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('admin.product_page') }}"><img
                                                    src="{{ asset('assets/images/ecommerce/product-table-4.png') }}"
                                                    alt=""></a></td>
                                        <td> <a href="{{ route('admin.product_page') }}">
                                                <h6>Brown Casual Shirt</h6>
                                            </a><span>R L F - Brown Cotton Blend Men's A-Line Shirt</span></td>
                                        <td>$14</td>
                                        <td><span class="font-primary">Low Stock</span></td>
                                        <td>2022/12/16</td>
                                        <td>
                                            <button class="btn btn-danger btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                            <button class="btn btn-primary btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('admin.product_page') }}"><img
                                                    src="{{ asset('assets/images/ecommerce/product-table-5.png') }}"
                                                    alt=""></a></td>
                                        <td> <a href="{{ route('admin.product_page') }}">
                                                <h6>Black &amp; white Dress</h6>
                                            </a><span>Women's Black &amp; White Collection Dress.</span></td>
                                        <td>$25</td>
                                        <td><span class="font-success">In Stock</span></td>
                                        <td>2022/01/15</td>
                                        <td>
                                            <button class="btn btn-danger btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                            <button class="btn btn-primary btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('admin.product_page') }}"><img
                                                    src="{{ asset('assets/images/ecommerce/product-table-6.png') }}"
                                                    alt=""></a></td>
                                        <td> <a href="{{ route('admin.product_page') }}">
                                                <h6>Red Blazer For Winter</h6>
                                            </a><span>Womens's Red Winter Season Collection Blazer.</span></td>
                                        <td>$10</td>
                                        <td><span class="font-primary">Low Stock</span></td>
                                        <td>2022/08/10</td>
                                        <td>
                                            <button class="btn btn-danger btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                            <button class="btn btn-primary btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('admin.product_page') }}"><img
                                                    src="{{ asset('assets/images/ecommerce/product-table-1.png') }}"
                                                    alt=""></a></td>
                                        <td> <a href="{{ route('admin.product_page') }}">
                                                <h6>Black Shirt</h6>
                                            </a><span>Vida Loca - Gray Checks Fit Men's Casual Shirt.</span></td>
                                        <td>$12</td>
                                        <td><span class="font-success">In Stock</span></td>
                                        <td>2022/05/21</td>
                                        <td>
                                            <button class="btn btn-danger btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                            <button class="btn btn-primary btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('admin.product_page') }}"><img
                                                    src="{{ asset('assets/images/ecommerce/product-table-2.png') }}"
                                                    alt=""></a></td>
                                        <td> <a href="{{ route('admin.product_page') }}">
                                                <h6>Yellow T-shirt</h6>
                                            </a><span>Wild West - Yellow Cotton Blend Regular Fit Men's Formal
                                                T-Shirt</span></td>
                                        <td>$15</td>
                                        <td><span class="font-primary">Low Stock</span></td>
                                        <td>2022/08/15</td>
                                        <td>
                                            <button class="btn btn-danger btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                            <button class="btn btn-primary btn-xs" type="button"
                                                data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/vendors/simple-datatables/dist/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/js/product/product-list-custom.js') }}"></script>
@endsection
