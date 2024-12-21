@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Invoice 3</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Invoice</li>
                        <li class="breadcrumb-item active">Invoice 3</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-Fluid Starts-->
    <div class="container invoice-2">
        <div class="card">
            <div class="card-body">
                <table class="table-wrapper table-responsive table-borderless theme-scrollbar">
                    <tbody>
                        <tr>
                            <td>
                                <table class="table-responsive table-borderless"
                                    style="width: 100%; background-image: url({{ asset('assets/images/email-template/invoice-3/bg-0.png') }}); background-position: center; background-size:cover; background-repeat:no-repeat; border-radius: 10px;">
                                    <tbody>
                                        <tr>
                                            <td style="padding: 30px 0;"><img class="for-light"
                                                    src="{{ asset('assets/images/logo/logo.png') }}" alt="logo"><img
                                                    class="for-dark" src="{{ asset('assets/images/logo/dark-logo.png') }}"
                                                    alt="logo">
                                                <address
                                                    style="opacity: 0.8; width: 36%; margin-top: 10px; font-style:normal;">
                                                    <span style="font-size: 16px; line-height: 1.5; font-weight: 500;">
                                                        1982 Harvest Lane New York, NY12210
                                                        United State</span></address>
                                            </td>
                                            <td style="text-align:end; padding:30px 30px 30px 0;"><span
                                                    style="display:block; line-height: 1.5; font-size:16px; color: #fff; font-weight:700;">Invoice</span><span
                                                    style="display:block; line-height: 1.5; font-size:16px; color: #fff; font-weight:500;">Receipt
                                                    #1923195</span><span
                                                    style="display:block; line-height: 1.5; font-size:16px; color: #fff; font-weight:500;">May
                                                    02, 2024</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table class="table-responsives table-borderless" style="width: 100%;">
                                    <tbody>
                                        <tr style="padding: 28px 0; display: flex; justify-content: space-between;">
                                            <td><span style=" font-size: 16px; font-weight: 500; opacity: 0.8;">CLIENT
                                                    DETAILS</span>
                                                <h4
                                                    style="font-weight:600; margin: 12px 0 5px 0; font-size: 16px; color: rgba(67, 185, 178, 1);">
                                                    Brooklyn Simmons</h4><span
                                                    style="width: 54%; display:block; line-height: 1.5;  font-size: 16px; font-weight: 400;opacity: 0.8;">2118
                                                    Thornridge Cir. Syracuse, Connecticut 35624, United State</span><span
                                                    style="line-height:2;  font-size: 16px; font-weight: 400;opacity: 0.8;">Phone
                                                    : (239) 555-0108</span>
                                            </td>
                                            <td><span style="font-size: 16px; font-weight: 500;opacity: 0.8;">SHIPPING
                                                    ADDRESS</span>
                                                <h4
                                                    style="font-weight:600; margin: 12px 0 5px 0; font-size: 16px; color: rgba(67, 185, 178, 1);">
                                                    Brooklyn Simmons</h4><span
                                                    style="display:block; line-height: 1.5;  font-size: 16px; font-weight: 400;opacity: 0.8;">2972
                                                    Westheimer Rd. Santa Ana, Illinois 85486 </span><span
                                                    style="line-height:2;  font-size: 16px; font-weight: 400;opacity: 0.8;">Phone
                                                    : (219) 555-0114</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td> <span
                                    style="display:block; background: rgba(82, 82, 108, 0.3); height:1px; width: 100%; margin-bottom:20px;">
                                </span></td>
                        </tr>
                        <tr>
                            <td>
                                <table style="width: 100%;border-spacing:0;">
                                    <thead>
                                        <tr style="background: #43B9B2;">
                                            <th style="padding: 18px 15px; text-align: left"><span
                                                    style="color: #fff; font-size: 16px; font-weight: 600;">Description</span>
                                            </th>
                                            <th
                                                style="padding: 18px 15px; text-align: center; border-inline: 3px solid #fff;">
                                                <span style="color: #fff; font-size: 16px; font-weight: 600;">Qty</span>
                                            </th>
                                            <th
                                                style="padding: 18px 15px; text-align: center;border-right: 3px solid #fff;">
                                                <span style="color: #fff; font-size: 16px; font-weight: 600;">Price</span>
                                            </th>
                                            <th style="padding: 18px 15px; text-align: center"><span
                                                    style="color: #fff; font-size: 16px; font-weight: 600;">Subtotal</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td
                                                style="padding: 18px 15px 18px 0; display:flex; align-items: center; gap: 10px; border-bottom:1px solid #52526C4D;">
                                                <span style="width: 3px; height: 37px; background-color:#43B9B2; "></span>
                                                <ul style="padding: 0; margin: 0; list-style: none;">
                                                    <li>
                                                        <h4
                                                            style="font-weight:600; margin:4px 0px; font-size: 16px; color: #43B9B2;">
                                                            HTML Admin template</h4><span
                                                            style=" opacity: 0.8; font-size: 16px;">Regular License</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td
                                                style="padding: 18px 15px; width: 12%; text-align: center; border-bottom:1px solid #52526C4D;">
                                                <span style=" opacity: 0.8;">2</span></td>
                                            <td
                                                style="padding: 18px 15px; width: 12%; text-align: center; border-bottom:1px solid #52526C4D;">
                                                <span style=" opacity: 0.8;">$35</span></td>
                                            <td
                                                style="padding: 18px 15px; width: 12%; text-align: center; border-bottom:1px solid #52526C4D;">
                                                <span style=" opacity: 0.8;">$70</span></td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="padding: 18px 15px 18px 0; display:flex; align-items:center; gap: 10px; border-bottom:1px solid #52526C4D;">
                                                <span
                                                    style="width: 3px; height: 37px; background-color:#FFAE46; display:"></span>
                                                <ul style="padding: 0; margin: 0; list-style: none;">
                                                    <li>
                                                        <h4
                                                            style="font-weight:600; margin:4px 0px; font-size: 16px; color: #43B9B2;">
                                                            React Admin template</h4><span
                                                            style=" opacity: 0.8; font-size: 16px;">Regular License</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td
                                                style="padding: 18px 15px; width: 12%; text-align: center; border-bottom:1px solid #52526C4D;">
                                                <span style=" opacity: 0.8;">1</span></td>
                                            <td
                                                style="padding: 18px 15px; width: 12%; text-align: center; border-bottom:1px solid #52526C4D;">
                                                <span style=" opacity: 0.8;">$25</span></td>
                                            <td
                                                style="padding: 18px 15px; width: 12%; text-align: center; border-bottom:1px solid #52526C4D;">
                                                <span style=" opacity: 0.8;">$50</span></td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="padding: 18px 15px 18px 0; display:flex; align-items: center;gap: 10px; border-bottom:1px solid #52526C4D;">
                                                <span
                                                    style="width: 3px; height: 37px; background-color:#0DA759; display:"></span>
                                                <ul style="padding: 0;margin: 0;list-style: none;">
                                                    <li>
                                                        <h4
                                                            style="font-weight:600; margin:4px 0px; font-size: 16px; color: #43B9B2;">
                                                            Laravel Admin template</h4><span
                                                            style="opacity: 0.8; font-size: 16px;">Regular License</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td
                                                style="padding: 18px 15px; width: 12%; text-align: center; border-bottom:1px solid #52526C4D;">
                                                <span style=" opacity: 0.8;">2</span></td>
                                            <td
                                                style="padding: 18px 15px; width: 12%; text-align: center; border-bottom:1px solid #52526C4D;">
                                                <span style=" opacity: 0.8;">$30</span></td>
                                            <td
                                                style="padding: 18px 15px; width: 12%; text-align: center; border-bottom:1px solid #52526C4D;">
                                                <span style=" opacity: 0.8;">$60</span></td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="padding: 18px 15px 18px 0;display:flex;align-items: center;gap: 10px;border-bottom:1px solid #52526C4D;">
                                                <span
                                                    style="width: 3px; height: 37px; background-color:#48A3D7; display:"></span>
                                                <ul style="padding: 0; margin: 0; list-style: none;">
                                                    <li>
                                                        <h4
                                                            style="font-weight:600; margin:4px 0px; font-size: 16px; color: #43B9B2;">
                                                            Vuejs Admin template</h4><span
                                                            style=" opacity: 0.8; font-size: 16px;">Regular License</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td
                                                style="padding: 18px 15px; width: 12%; text-align: center; border-bottom:1px solid #52526C4D;">
                                                <span style=" opacity: 0.8;">3</span></td>
                                            <td
                                                style="padding: 18px 15px; width: 12%; text-align: center; border-bottom:1px solid #52526C4D;">
                                                <span style=" opacity: 0.8;">$20</span></td>
                                            <td
                                                style="padding: 18px 15px; width: 12%; text-align: center; border-bottom:1px solid #52526C4D;">
                                                <span style=" opacity: 0.8;">$60</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table style="width:100%;">
                                    <tbody>
                                        <tr
                                            style="display:flex; justify-content: space-between; margin:28px 0; align-items: center;">
                                            <td> <span
                                                    style=" font-size: 16px; font-weight: 500; opacity: 0.8; font-weight: 600;">BANK
                                                    TRANSFER</span>
                                                <h4
                                                    style="font-weight:600; margin: 12px 0 5px 0; font-size: 16px; color:#43B9B2;">
                                                    Leslie Alexander</h4><span
                                                    style=" display:block; line-height: 1.5;  font-size: 16px; font-weight: 400;">Bank
                                                    Account : 0981234098765</span><span
                                                    style="line-height:1.6;  font-size: 16px; font-weight: 400;">Code :
                                                    LEF098756</span>
                                            </td>
                                            <td><span
                                                    style=" font-size: 16px; font-weight: 500; opacity: 0.8; font-weight: 600;">TOTAL
                                                    AMOUNT</span>
                                                <h4
                                                    style="font-weight:600; margin: 12px 0 5px 0; font-size: 26px; color:#43B9B2;">
                                                    $175.00</h4><span
                                                    style=" font-size: 16px; font-weight: 400; line-height: 1.5;">All Taxes
                                                    included</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td> <span
                                    style="display:block;background: rgba(82, 82, 108, 0.3);height: 1px;width: 100%;margin-bottom:30px;"></span>
                            </td>
                        </tr>
                        <tr>
                            <td> <span style="display: flex; justify-content: end; gap: 15px;"><a
                                        style="background: rgba(67, 185, 178, 1); color:rgba(255, 255, 255, 1);border-radius: 10px;padding: 18px 27px;font-size: 16px;font-weight: 600;outline: 0;border: 0; text-decoration: none;"
                                        href="#!" onclick="window.print();">Print Invoice<i class="icon-arrow-right"
                                            style="font-size:13px;font-weight:bold; margin-left: 10px;"></i></a><a
                                        style="background: rgba(67, 185, 178, 0.1);color: rgba(67, 185, 178, 1);border-radius: 10px;padding: 18px 27px;font-size: 16px;font-weight: 600;outline: 0;border: 0; text-decoration: none;"
                                        href="../template/invoice-1.html" download="">Download<i
                                            class="icon-arrow-right"
                                            style="font-size:13px;font-weight:bold; margin-left: 10px;"> </i></a></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Container-Fluid Ends-->
@endsection

@section('scripts')
@endsection
