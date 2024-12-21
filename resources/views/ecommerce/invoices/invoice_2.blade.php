@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Invoice 2</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Invoice</li>
                        <li class="breadcrumb-item active">Invoice 2</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-Fluid Starts-->
    <div class="container invoice-2">
        <div class="card">
            <div class="card-body">
                <table class="table-borderless table-wrapper table-responsive theme-scrollbar">
                    <tbody>
                        <tr>
                            <td>
                                <table class="table-responsive" style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td style="min-width: 347px; width: 30%;"><img class="for-light"
                                                    src="{{ asset('assets/images/logo/logo.png') }}" alt="logo"><img
                                                    class="for-dark" src="{{ asset('assets/images/logo/dark-logo.png') }}"
                                                    alt="logo">
                                                <address
                                                    style="opacity: 0.8; width: 80%; margin-top: 10px; font-style:normal;">
                                                    <span style="font-size: 16px; line-height: 1.5; font-weight: 500;">
                                                        1982 Harvest Lane New York, NY12210
                                                        United State</span>
                                                </address>
                                            </td>
                                            <td style="opacity: 0.8; text-align:end;"><span
                                                    style="display:block; line-height: 1.5; font-size:16px; font-weight:500;">Email
                                                    : Edmin@themesforest.com</span><span
                                                    style="display:block; line-height: 1.5; font-size:16px; font-weight:500;">Website:
                                                    www.Edminthemes.com</span><span
                                                    style="display:block; line-height: 1.5; font-size:16px; font-weight:500;">Contact
                                                    No : (316) 555-0116</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table class="table-responsive" style="width:100%;">
                                    <tbody>
                                        <tr style="display:flex;justify-content:space-between;padding: 25px 0;">
                                            <td
                                                style="display:flex;align-items:center; gap: 6px;flex-wrap: wrap;min-width: 136px;">
                                                <span style="opacity: 0.8; font-size: 16px; font-weight: 500;">Invoice
                                                    No.</span>
                                                <h4 style="margin:0;font-weight:400; font-size: 16px;">#VL25000365</h4>
                                            </td>
                                            <td
                                                style="display:flex;align-items:center; gap: 6px;flex-wrap: wrap;min-width: 136px;">
                                                <span style="opacity: 0.8; font-size: 16px; font-weight: 500;">Date :
                                                </span>
                                                <h4 style="margin:0;font-weight:400; font-size: 16px;">09/03/2024</h4>
                                            </td>
                                            <td
                                                style="display:flex;align-items:center; gap: 6px; flex-wrap: wrap;min-width: 146px;">
                                                <span style="opacity: 0.8; font-size: 16px; font-weight: 500;">Payment
                                                    Status :</span>
                                                <h4
                                                    style="margin:0;font-weight:400; font-size: 16px;padding:6px 18px; background-color:rgba(84, 186, 74, 0.1);color:#0DA759; border-radius: 5px;">
                                                    Paid</h4>
                                            </td>
                                            <td style="display:flex;align-items:center; gap: 6px; flex-wrap: wrap;"> <span
                                                    style="opacity: 0.8; font-size: 16px; font-weight: 500;min-width: 136px;">Total
                                                    Amount :</span>
                                                <h4 style="margin:0;font-weight:400; font-size: 16px;">$26,410.00</h4>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table class="table-responsive" style="width: 100%;">
                                    <tbody>
                                        <tr style="padding: 28px 0; display:block;">
                                            <td Style="width:70%; min-width: 304px;"><span
                                                    style="opacity: 0.8; font-size: 16px; font-weight: 500;">BILLING
                                                    ADDRESS</span>
                                                <h4 style="font-weight:400; margin: 12px 0 6px 0; font-size: 16px;">Brooklyn
                                                    Simmons</h4><span
                                                    style="width: 54%; display:block; line-height: 1.5; opacity: 0.8; font-size: 16px; font-weight: 400;">2118
                                                    Thornridge Cir. Syracuse, Connecticut 35624, United State</span><span
                                                    style="line-height:2.6; opacity: 0.8; font-size: 16px; font-weight: 400;">Phone
                                                    : (239) 555-0108</span>
                                            </td>
                                            <td Style="min-width: 280px;"><span
                                                    style="opacity: 0.8;font-size: 16px; font-weight: 500;">SHIPPING
                                                    ADDRESS</span>
                                                <h4 style="font-weight:400; margin: 12px 0 6px 0; font-size: 16px;">Cameron
                                                    Williamson</h4><span
                                                    style="width: 95%; display:block; line-height: 1.5; opacity: 0.8; font-size: 16px; font-weight: 400;">2972
                                                    Westheimer Rd. Santa Ana, Illinois 85486 </span><span
                                                    style="line-height:2.6; opacity: 0.8; font-size: 16px; font-weight: 400;">Phone
                                                    : (219) 555-0114</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table class="table-borderless table-responsive"
                                    style="width: 100%;border-collapse: separate;border-spacing: 0;">
                                    <thead>
                                        <tr
                                            style="background: #43B9B2;border-radius: 8px;overflow: hidden;box-shadow: 0px 10.9412px 10.9412px rgba(82, 77, 141, 0.04), 0px 9.51387px 7.6111px rgba(82, 77, 141, 0.06), 0px 5.05275px 4.0422px rgba(82, 77, 141, 0.0484671);border-radius: 5.47059px;">
                                            <th style="padding: 18px 15px;text-align: left"><span
                                                    style="color: #fff; font-size: 16px;">Products</span></th>
                                            <th style="padding: 18px 15px;text-align: left"><span
                                                    style="color: #fff; font-size: 16px;">Quantity</span></th>
                                            <th style="padding: 18px 15px;text-align: left"><span
                                                    style="color: #fff; font-size: 16px;">Price</span></th>
                                            <th style="padding: 18px 15px;text-align: left"><span
                                                    style="color: #fff; font-size: 16px;">Unit</span></th>
                                            <th style="padding: 18px 15px;text-align: left"><span
                                                    style="color: #fff; font-size: 16px;">Vat %</span></th>
                                            <th style="padding: 18px 15px;text-align: left"><span
                                                    style="color: #fff; font-size: 16px;">Total</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="invoice-dark"
                                            style="background-color: rgba(67, 185, 178, 0.1);box-shadow: 0px 1px 0px 0px rgba(82, 82, 108, 0.15);">
                                            <td style="padding: 18px 15px;display:flex;align-items: center;gap: 10px;"><span
                                                    style="width: 54px; height: 51px; background-color:#F5F6F9; display: flex; justify-content: center;align-items: center; border-radius: 5px;"><img
                                                        src="{{ asset('assets/images/email-template/4.png') }}"
                                                        alt="laptop" style="height:29px;"></span>
                                                <ul style="padding: 0;margin: 0;list-style: none;">
                                                    <li>
                                                        <h4 style="font-weight:400; margin:4px 0px; font-size: 16px;">Apple
                                                            Desktop</h4><span
                                                            style="opacity: 0.8; font-size: 14px;">#XDG-6437</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td style="padding: 18px 15px;"><span>2</span></td>
                                            <td style="padding: 18px 15px; width: 12%;"> <span>$100</span></td>
                                            <td style="padding: 18px 15px; width: 12%;"> <span>Hour(s)</span></td>
                                            <td style="padding: 18px 15px; width: 10%;"> <span>0</span></td>
                                            <td style="padding: 18px 15px;"><span>$200</span></td>
                                        </tr>
                                        <tr style="box-shadow: 0px 1px 0px 0px rgba(82, 82, 108, 0.15);">
                                            <td style="padding: 18px 15px;display:flex;align-items: center;gap: 10px;"><span
                                                    style="width: 54px; height: 51px;background-color:#F5F6F9; display: flex; justify-content: center;align-items: center; border-radius: 5px;"><img
                                                        src="{{ asset('assets/images/email-template/3.png') }}"
                                                        alt="laptop" style="height:29px;"></span>
                                                <div>
                                                    <h4 style="font-weight:400; margin:4px 0px; font-size: 16px;">Smart
                                                        Watch</h4><span
                                                        style="opacity: 0.8; font-size: 14px;">#XDG-6437</span>
                                                </div>
                                            </td>
                                            <td style="padding: 18px 15px;"><span>1</span></td>
                                            <td style="padding: 18px 15px; width: 12%;"> <span>$200</span></td>
                                            <td style="padding: 18px 15px; width: 12%;"> <span>Hour(s)</span></td>
                                            <td style="padding: 18px 15px; width: 10%;"> <span>0</span></td>
                                            <td style="padding: 18px 15px;"><span>$200</span></td>
                                        </tr>
                                        <tr class="invoice-dark"
                                            style="background-color: rgba(67, 185, 178, 0.1);box-shadow: 0px 1px 0px 0px rgba(82, 82, 108, 0.15);">
                                            <td style="padding: 18px 15px;display:flex;align-items: center;gap: 10px;">
                                                <span
                                                    style="width: 54px; height: 51px; background-color:#F5F6F9; display: flex; justify-content: center;align-items: center; border-radius: 5px;"><img
                                                        src="{{ asset('assets/images/email-template/2.png') }}"
                                                        alt="laptop" style="height:29px;"></span>
                                                <div>
                                                    <h4 style="font-weight:400; margin:4px 0px; font-size: 16px;">Apple
                                                        iphone 13 Pro</h4><span
                                                        style="opacity: 0.8; font-size: 14px;">#XDG-6437</span>
                                                </div>
                                            </td>
                                            <td style="padding: 18px 15px;"><span>1</span></td>
                                            <td style="padding: 18px 15px; width: 12%;"> <span>$10,000</span></td>
                                            <td style="padding: 18px 15px; width: 12%;"> <span>Hour(s)</span></td>
                                            <td style="padding: 18px 15px; width: 10%;"> <span>0</span></td>
                                            <td style="padding: 18px 15px;"><span>$10,000</span></td>
                                        </tr>
                                        <tr style="box-shadow: 0px 1px 0px 0px rgba(82, 82, 108, 0.15);">
                                            <td style="padding: 18px 15px;display:flex;align-items: center;gap: 10px;">
                                                <span
                                                    style="width: 54px; height: 51px; background-color:#F5F6F9; display: flex; justify-content: center;align-items: center; border-radius: 5px;"><img
                                                        src="{{ asset('assets/images/email-template/1.png') }}"
                                                        alt="laptop" style="height:29px;"></span>
                                                <div>
                                                    <h4 style="font-weight:400; margin:4px 0px; font-size: 16px;">Wireless
                                                        Headphone</h4><span
                                                        style="opacity: 0.8; font-size: 14px;">#XDG-6437</span>
                                                </div>
                                            </td>
                                            <td style="padding: 18px 15px;"><span>2</span></td>
                                            <td style="padding: 18px 15px; width: 12%;"> <span>$8,000</span></td>
                                            <td style="padding: 18px 15px; width: 12%;"> <span>Hour(s)</span></td>
                                            <td style="padding: 18px 15px; width: 10%;"> <span>0</span></td>
                                            <td style="padding: 18px 15px;"><span>$16,000</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table class="table-responsive table-borderless">
                                    <tfoot>
                                        <tr>
                                            <td style="padding: 5px 24px 5px 0; padding-top: 15px;"> <span
                                                    style=" font-size: 16px; font-weight: 400;">Subtotal :</span></td>
                                            <td style="padding: 5px 0;text-align: left;padding-top: 15px;">
                                                <span>$26,400.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 24px 5px 0;"> <span
                                                    style=" font-size: 16px; font-weight: 400;">VAT (0%) :</span></td>
                                            <td style="padding: 5px 0;text-align: left;padding-top: 0;"><span>$0.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 24px 5px 0;min-width: 200px;"> <span
                                                    style=" font-size: 16px; font-weight: 400;">Shipping Rate :</span></td>
                                            <td style="padding: 5px 0;text-align: left;padding-top: 0;"><span>$10.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 12px 24px 5px 0;min-width: 200px;"> <span
                                                    style="font-weight: 600; font-size: 20px; color: #43B9B2;">Total Amount
                                                    :</span></td>
                                            <td style="padding: 12px 24px 5px 0;;text-align: right"><span
                                                    style="font-weight: 500; font-size: 20px; color: rgba(67, 185, 178, 1);">$26,410.00</span>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td> <span
                                    style="display:block;background: rgba(82, 82, 108, 0.3);height: 1px;width: 100%;margin-bottom:24px;"></span>
                            </td>
                        </tr>
                        <tr>
                            <td> <span style="display: flex; justify-content: end; gap: 15px; margin-bottom:15px;"><a
                                        style="background: rgba(67, 185, 178, 1); color:rgba(255, 255, 255, 1);border-radius: 10px;padding: 18px 27px;font-size: 16px;font-weight: 600;outline: 0;border: 0; text-decoration: none;"
                                        href="#!" onclick="window.print();">Print Invoice<i
                                            class="icofont icon-arrow-right"
                                            style="font-size:13px;font-weight:bold; margin-left: 10px;"></i></a><a
                                        style="background: rgba(67, 185, 178, 0.1);color: rgba(67, 185, 178, 1);border-radius: 10px;padding: 18px 27px;font-size: 16px;font-weight: 600;outline: 0;border: 0; text-decoration: none;"
                                        href="../template/invoice-1.html" download="">Download<i
                                            class="icofont icon-arrow-right"
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
