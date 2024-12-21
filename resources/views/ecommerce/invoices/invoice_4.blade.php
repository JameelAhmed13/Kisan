@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Invoice 4</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Invoice</li>
                        <li class="breadcrumb-item active">Invoice 4</li>
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
                                <table class="table-responsive table-borderless" style="width: 100%;">
                                    <tbody>
                                        <tr style="padding: 28px 0 5px; display: flex; justify-content: space-between;">
                                            <td>
                                                <h4 style="font-size:42px; font-weight: 600;color: #43B9B2; margin:0;">
                                                    INVOICE</h4>
                                                <ul
                                                    style="list-style: none; display: flex; gap:15px; padding: 0; margin: 20px 0;">
                                                    <li> <span
                                                            style=" font-size: 16px; font-weight: 600; opacity: 0.8;">Invoice
                                                            to :</span></li>
                                                    <li> <span
                                                            style="font-weight:600;font-size: 16px; color: #43B9B2; display: block; margin-bottom: 8px;">Brooklyn
                                                            Simmons</span><span
                                                            style="width: 75%; display:block; line-height: 1.5;  font-size: 16px; font-weight: 400;opacity: 0.8;">2972
                                                            Westheimer Rd. Santa Ana, Illinois 85486 </span><span
                                                            style="line-height:1.9;  font-size: 16px; font-weight: 400;opacity: 0.8; display:block;">Phone
                                                            : (219) 555-0114</span><span
                                                            style="line-height:1.7;  font-size: 16px; font-weight: 400;opacity: 0.8; display:block;">Email
                                                            : yourmail@themesforest.com</span><span
                                                            style="line-height:1.7;  font-size: 16px; font-weight: 400;opacity: 0.8; display:block;">Website:
                                                            www.websites.com</span></li>
                                                </ul>
                                            </td>
                                            <td><img class="for-light" style="height:50px; margin-bottom: 14px;"
                                                    src="{{ asset('assets/images/logo/logo.png') }}" alt="logo"><img
                                                    class="for-dark" style="height:50px; margin-bottom: 14px;"
                                                    src="{{ asset('assets/images/logo/dark-logo.png') }}" alt="logo"><span
                                                    style="display:block; line-height: 1.5;  font-size: 16px; font-weight: 400;opacity: 0.8;">2118
                                                    Thornridge Cir. Syracuse, Connecticut 35624, United State</span><span
                                                    style="display:block; line-height: 1.5;  font-size: 16px; font-weight: 400;opacity: 0.8;">Phone
                                                    : (239) 555-0108</span><span
                                                    style="display:block; line-height: 1.5;  font-size: 16px; font-weight: 400;opacity: 0.8;">Email
                                                    : Edmin@themesforest.com</span><span
                                                    style="display:block; line-height: 1.5;  font-size: 16px; font-weight: 400;opacity: 0.8;">Website:
                                                    www.Edminthemes.com</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table class="table-responsive table-borderless"
                                    style="width: 100%; border-spacing: 4px; margin-bottom: 20px;">
                                    <tbody>
                                        <tr>
                                            <td style="background: rgba(67, 185, 178 , 0.1);padding: 15px 25px;">
                                                <p
                                                    style="font-size:16px; font-weight:500; color:#43B9B2; opacity:0.8; margin:0;line-height: 2;">
                                                    Date :</p><span style="font-size: 16px; font-weight: 600;">10 Mar,
                                                    2024</span>
                                            </td>
                                            <td style="background: rgba(67, 185, 178 , 0.1);padding: 15px 25px;">
                                                <p
                                                    style="font-size:16px; font-weight:500; color:#43B9B2; opacity:0.8; margin:0;line-height: 2;">
                                                    Invoice No :</p><span
                                                    style="font-size: 16px; font-weight: 600;">#VL25000365</span>
                                            </td>
                                            <td style="background: rgba(67, 185, 178 , 0.1);padding: 15px 25px;">
                                                <p
                                                    style="font-size:16px; font-weight:500; color:#43B9B2; opacity:0.8; margin:0;line-height: 2;">
                                                    Account No :</p><span
                                                    style="font-size: 16px; font-weight: 600;">0981234098765</span>
                                            </td>
                                            <td style="background: rgba(67, 185, 178 , 0.1);padding: 15px 25px;">
                                                <p
                                                    style="font-size:16px; font-weight:500; color:#43B9B2; opacity:0.8; margin:0;line-height: 2;">
                                                    Due Amount :</p><span
                                                    style="font-size: 16px; font-weight: 600;">$7860.00</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table class="table-responsive table-borderless" style="width: 100%; border-spacing:0;">
                                    <thead>
                                        <tr style="background: #43B9B2;">
                                            <th
                                                style="padding: 18px 15px;text-align: left; position: relative; border-top-left-radius: 10px;">
                                                <span
                                                    style="color: #fff; font-size: 16px; font-weight: 600;">Description</span>
                                            </th>
                                            <th style="padding: 18px 15px;text-align: center"><span
                                                    style="color: #fff; font-size: 16px; font-weight: 600;">Unite
                                                    Price</span></th>
                                            <th style="padding: 18px 15px;text-align: center"><span
                                                    style="color: #fff; font-size: 16px; font-weight: 600;">Quantity</span>
                                            </th>
                                            <th
                                                style="padding: 18px 15px;text-align: center;position: relative; border-top-right-radius: 10px;">
                                                <span
                                                    style="color: #fff; font-size: 16px; font-weight: 600;">Subtotal</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="padding: 30px;">
                                                <h4
                                                    style="font-weight:600; margin:4px 0px; font-size: 16px; color: #43B9B2;">
                                                    Proposal & Brochure Design</h4><span
                                                    style="opacity: 0.8; font-size: 16px;">Regular License</span>
                                            </td>
                                            <td style="width: 12%; text-align: center;"><span
                                                    style="opacity: 0.8;">$300.00</span></td>
                                            <td style="width: 12%; text-align: center;"> <span
                                                    style="opacity: 0.8;">1</span></td>
                                            <td style="width: 12%; text-align: center;"> <span
                                                    style="color: #43B9B2; font-weight: 600;opacity: 0.9;">$300.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0 30px 30px;">
                                                <h4
                                                    style="font-weight:600; margin:4px 0px; font-size: 16px; color: #43B9B2;">
                                                    Web design and development</h4><span
                                                    style="opacity: 0.8; font-size: 16px;">Regular License</span>
                                            </td>
                                            <td style="width: 12%; text-align: center;"><span
                                                    style="opacity: 0.8;">$400.00</span></td>
                                            <td style="width: 12%; text-align: center;"> <span
                                                    style="opacity: 0.8;">2</span></td>
                                            <td style="width: 12%; text-align: center;"> <span
                                                    style="color: #43B9B2; font-weight: 600;opacity: 0.9;">$800.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0 30px 30px;">
                                                <h4
                                                    style="font-weight:600; margin:4px 0px; font-size: 16px; color: #43B9B2;">
                                                    Logo & Brand design</h4><span
                                                    style="opacity: 0.8; font-size: 16px;">Regular License</span>
                                            </td>
                                            <td style="width: 12%; text-align: center;"><span
                                                    style="opacity: 0.8;">$240.00</span></td>
                                            <td style="width: 12%; text-align: center;"> <span
                                                    style="opacity: 0.8;">2</span></td>
                                            <td style="width: 12%; text-align: center;"> <span
                                                    style="color: #43B9B2; font-weight: 600;opacity: 0.9;">$4800.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0 30px 30px;">
                                                <h4
                                                    style="font-weight:600; margin:4px 0px; font-size: 16px; color: #43B9B2;">
                                                    Stationary Design</h4><span
                                                    style="opacity: 0.8; font-size: 16px;">Regular License</span>
                                            </td>
                                            <td style="width: 12%; text-align: center;"><span
                                                    style="opacity: 0.8;">$100.00</span></td>
                                            <td style="width: 12%; text-align: center;"> <span
                                                    style="opacity: 0.8;">1</span></td>
                                            <td style="width: 12%; text-align: center;"> <span
                                                    style="color: #43B9B2; font-weight: 600;opacity: 0.9;">$100.00</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr
                            style="height:3px; width: 100%; background: linear-gradient(90deg, #43B9B2 20.61%, #0DA759 103.6%); display:block; margin-top: 6px;">
                        </tr>
                        <tr>
                            <td>
                                <table style="width:100%;">
                                    <tbody>
                                        <tr
                                            style="display:flex; justify-content: space-between; margin:16px 0 24px 0; align-items: end;">
                                            <td style="display: flex; gap: 10px;"><span
                                                    style="color: #43B9B2; font-size: 16px; font-weight: 500; font-weight: 600;">Payment
                                                    Teams : </span><span
                                                    style=" display:block; line-height: 1.5;  font-size: 16px; font-weight: 400; width: 55%;">This
                                                    denotes a payment credit for a full month's supply.</span></td>
                                            <td>
                                                <ul style="padding: 0; margin: 0; list-style: none;">
                                                    <li style="display:flex; padding-bottom: 16px;"> <span
                                                            style="display: block; width: 95px; ">Subtotal </span><span
                                                            style="display: block; width:25px;">:</span><span
                                                            style="display: block;  width: 95px; color: #43B9B2; opacity: 0.9; font-weight:600;">$6100.00</span>
                                                    </li>
                                                    <li style="display:flex; padding-bottom: 16px;"> <span
                                                            style="display: block; width: 95px; ">Tax</span><span
                                                            style="display: block; width:25px;"> :</span><span
                                                            style="display: block; width: 95px;color: #43B9B2; opacity: 0.9; font-weight:600;">$50.00</span>
                                                    </li>
                                                    <li style="display:flex; padding-bottom: 20px;"> <span
                                                            style="display: block; width: 95px; ">Discount </span><span
                                                            style="display: block; width:25px;"> :</span><span
                                                            style="display: block; width: 95px;color: #43B9B2; opacity: 0.9; font-weight:600;">$30.00</span>
                                                    </li>
                                                    <li style="display:flex; align-items: center;"> <span
                                                            style="display: block; width: 95px; ">Total Due</span><span
                                                            style="display: block; color: #43B9B2; opacity: 0.9; font-weight:600; padding: 12px 25px; border-radius: 5px; background: rgba(67, 185, 178 , 0.1); font-size: 16px;">$6120.00</span>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr style="width: 100%; display: flex; justify-content: space-between;">
                            <td> <img src="{{ asset('assets/images/email-template/invoice-3/sign.png') }}" alt="sign"><span
                                    style="color: #43B9B2;display: block;font-size: 16px;font-weight: 600;">Laurine T.
                                    Ebbert</span><span style=" display: block; font-size: 14px; padding-top: 5px;">(
                                    Designer )</span></td>
                            <td> <span style="display: flex; justify-content: end; gap: 15px;"><a
                                        style="background: rgba(67, 185, 178, 1); color:rgba(255, 255, 255, 1);border-radius: 10px;padding: 18px 27px;font-size: 16px;font-weight: 600;outline: 0;border: 0; text-decoration: none;"
                                        href="#!" onclick="window.print();">Print Invoice<i class="icon-arrow-right"
                                            style="font-size:13px;font-weight:bold; margin-left: 10px;"></i></a><a
                                        style="background: rgba(67, 185, 178, 0.1);color: rgba(67, 185, 178, 1);border-radius: 10px;padding: 18px 27px;font-size: 16px;font-weight: 600;outline: 0;border: 0; text-decoration: none;"
                                        href="../template/invoice-1.html" download="">Download<i
                                            class="icon-arrow-right"
                                            style="font-size:13px;font-weight:bold; margin-left: 10px;"></i></a></span>
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
