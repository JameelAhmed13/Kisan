@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Checkbox &amp; Radio</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Checkbox &amp; Radio</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid radiocheckbox-page">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Default Checkbox</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.form-check-input,
                                .form-check-label</code><span>for checkbox.</span></p>
                    </div>
                    <div class="card-body checkbox-checked">
                        <div class="row g-3">
                            <div class="col-sm-6 col-xxl-4">
                                <div class="card-wrapper solid-border rounded-3">
                                    <h6 class="sub-title f-w-500">Default Checks</h6>
                                    <div class="form-check">
                                        <input class="form-check-input" id="flexCheckDefault" type="checkbox"
                                            value="">
                                        <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="flexCheckChecked" type="checkbox" value=""
                                            checked="">
                                        <label class="form-check-label" for="flexCheckChecked">Checked checkbox</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-4">
                                <div class="card-wrapper solid-border rounded-3">
                                    <h6 class="sub-title f-w-500">Disabled Checks</h6>
                                    <div class="form-check">
                                        <input class="form-check-input" id="flexCheckDisabled" type="checkbox"
                                            value="" disabled="">
                                        <label class="form-check-label" for="flexCheckDisabled">Disabled checkbox</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="flexCheckCheckedDisabled" type="checkbox"
                                            value="" checked="" disabled="">
                                        <label class="form-check-label" for="flexCheckCheckedDisabled">Disabled checked
                                            checkbox</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-4">
                                <div class="card-wrapper solid-border rounded-3">
                                    <h6 class="sub-title f-w-500">Right Checks </h6>
                                    <div class="form-check form-check-reverse">
                                        <input class="form-check-input" id="reverseCheck1" type="checkbox" value="">
                                        <label class="form-check-label" for="reverseCheck1">Reverse checkbox</label>
                                    </div>
                                    <div class="form-check form-check-reverse">
                                        <input class="form-check-input" id="reverseCheck2" type="checkbox" value=""
                                            disabled="" checked="">
                                        <label class="form-check-label" for="reverseCheck2">Disabled reverse
                                            checkbox</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-sm-6">
                                <div class="card-wrapper solid-border rounded-3">
                                    <h6 class="sub-title f-w-500">Indeterminate </h6>
                                    <div class="form-check">
                                        <input class="form-check-input" id="flexCheckIndeterminate" type="checkbox"
                                            value="">
                                        <label class="form-check-label" for="flexCheckIndeterminate">Indeterminate
                                            checkbox</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Custom Checkbox</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.checkbox-solid-* ,.checkbox-* </code><span>for
                                bordered checkbox </span></p>
                    </div>
                    <div class="card-body checkbox-checked">
                        <div class="row g-3">
                            <div class="col-xxl-4 col-sm-6">
                                <div class="card-wrapper solid-border rounded-3">
                                    <h6 class="sub-title f-w-500">Bordered Checkbox </h6>
                                    <label class="d-block">
                                        <input class="checkbox-primary checkbox-border-primary" id="chk-ani_8"
                                            type="checkbox">Primary - checkbox-primary
                                    </label>
                                    <label class="d-block">
                                        <input class="checkbox-secondary checkbox-border-secondary" id="chk-ani_9"
                                            type="checkbox">Secondary - checkbox-secondary
                                    </label>
                                    <label class="d-block">
                                        <input class="checkbox-tertiary checkbox-border-tertiary" id="chk-ani_10"
                                            type="checkbox">Tertiary - checkbox-tertiary
                                    </label>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-sm-12 order-xxl-0 order-sm-1">
                                <div class="card-wrapper solid-border rounded-3">
                                    <h6 class="sub-title f-w-500">Icon Checkbox </h6>
                                    <div class="form-check ps-0 main-icon-checkbox">
                                        <ul class="checkbox-wrapper">
                                            <li>
                                                <input class="form-check-input checkbox-shadow" id="checkbox-icon"
                                                    type="checkbox">
                                                <label class="form-check-label" for="checkbox-icon"><i
                                                        class="fa fa-sliders"></i><span>Sliders</span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input checkbox-shadow" id="checkbox-icon1"
                                                    type="checkbox" checked="">
                                                <label class="form-check-label" for="checkbox-icon1"><i
                                                        class="fa-solid fa-user"></i><span>User </span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input checkbox-shadow" id="checkbox-icon2"
                                                    type="checkbox">
                                                <label class="form-check-label" for="checkbox-icon2"><i
                                                        class="fa-solid fa-tag"></i><span>Tags</span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input checkbox-shadow" id="checkbox-icon3"
                                                    type="checkbox">
                                                <label class="form-check-label" for="checkbox-icon3"><i
                                                        class="fa-brands fa-android"></i><span>Android </span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input checkbox-shadow" id="checkbox-icon4"
                                                    type="checkbox">
                                                <label class="form-check-label" for="checkbox-icon4"><i
                                                        class="fa-solid fa-eye-slash"></i><span>Hidden</span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input checkbox-shadow" id="checkbox-icon5"
                                                    type="checkbox">
                                                <label class="form-check-label" for="checkbox-icon5"><i
                                                        class="fa-solid fa-folder-open"></i><span>Folder</span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input checkbox-shadow" id="checkbox-icon6"
                                                    type="checkbox">
                                                <label class="form-check-label" for="checkbox-icon6"><i
                                                        class="fa fa-paper-plane"></i><span>Send</span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input checkbox-shadow" id="checkbox-icon7"
                                                    type="checkbox">
                                                <label class="form-check-label" for="checkbox-icon7"><i
                                                        class="fa fa-cloud-upload"></i><span>Upload</span></label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-sm-6">
                                <div class="card-wrapper solid-border rounded-3">
                                    <h6 class="sub-title f-w-500">Filled Checkbox </h6>
                                    <div class="form-check checkbox checkbox-solid-warning">
                                        <input class="form-check-input" id="solid4" type="checkbox" checked="">
                                        <label class="form-check-label" for="solid4">Warning - checkbox-solid-warning
                                        </label>
                                    </div>
                                    <div class="form-check checkbox checkbox-solid-danger">
                                        <input class="form-check-input" id="solid5" type="checkbox" checked="">
                                        <label class="form-check-label" for="solid5">Danger - checkbox-solid-danger
                                        </label>
                                    </div>
                                    <div class="form-check checkbox checkbox-solid-info">
                                        <input class="form-check-input" id="solid6" type="checkbox" checked="">
                                        <label class="form-check-label" for="solid6">Info - checkbox-solid-info </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Default Radio</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.checkbox-solid-* ,.checkbox-* </code><span>for
                                bordered checkbox </span></p>
                    </div>
                    <div class="card-body checkbox-checked">
                        <div class="row g-3">
                            <div class="col-sm-6 col-xl-4">
                                <div class="card-wrapper solid-border rounded-3">
                                    <h6 class="sub-title f-w-500">Custom Radios </h6>
                                    <div class="form-check">
                                        <input class="form-check-input" id="flexRadioDefault1" type="radio"
                                            name="flexRadioDefault">
                                        <label class="form-check-label" for="flexRadioDefault1">Default radio</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="flexRadioDefault2" type="radio"
                                            name="flexRadioDefault" checked="">
                                        <label class="form-check-label" for="flexRadioDefault2">Default checked
                                            radio</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="card-wrapper solid-border rounded-3">
                                    <h6 class="sub-title f-w-500">Disabled Radios </h6>
                                    <div class="form-check">
                                        <input class="form-check-input" id="flexRadioDisabled" type="radio"
                                            name="flexRadioDisabled" disabled="">
                                        <label class="form-check-label" for="flexRadioDisabled">Disabled radio</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="flexRadioCheckedDisabled" type="radio"
                                            name="flexRadioDisabled" checked="" disabled="">
                                        <label class="form-check-label" for="flexRadioCheckedDisabled">Disabled checked
                                            radio</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-4">
                                <div class="card-wrapper solid-border rounded-3">
                                    <h6 class="sub-title f-w-500">Right Radios </h6>
                                    <div class="form-check form-check-reverse">
                                        <input class="form-check-input" id="flexRadioDefault3" type="radio"
                                            name="flexRadioDefault">
                                        <label class="form-check-label" for="flexRadioDefault3">Default radio</label>
                                    </div>
                                    <div class="form-check form-check-reverse">
                                        <input class="form-check-input" id="flexRadioCheckedDisabled1" type="radio"
                                            name="flexRadioDisabled" checked="" disabled="">
                                        <label class="form-check-label" for="flexRadioCheckedDisabled1">Disabled checked
                                            radio</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Images with Checkbox</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.form-check-input-* ,.form-check-label-*
                            </code><span>for image checkbox.</span></p>
                    </div>
                    <div class="card-body checkbox-checked">
                        <div class="main-img-checkbox">
                            <div class="row g-3">
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card-wrapper solid-border rounded-3">
                                        <h6 class="sub-title fw-bold">Custom</h6>
                                        <div class="img-checkbox">
                                            <input class="main-img-cover form-check-input" id="img-check-1"
                                                type="checkbox">
                                            <label class="form-check-label mb-0" for="img-check-1"> <img
                                                    src="{{ asset('assets/images/switch/1.jpg') }}" alt="coffee-beans"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card-wrapper solid-border rounded-3">
                                        <h6 class="sub-title fw-bold">Checked Image</h6>
                                        <div class="img-checkbox">
                                            <input class="main-img-cover form-check-input" id="img-check-2"
                                                type="checkbox" checked="">
                                            <label class="form-check-label mb-0" for="img-check-2"> <img
                                                    src="{{ asset('assets/images/switch/2.jpg') }}" alt="tree"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card-wrapper solid-border rounded-3">
                                        <h6 class="sub-title fw-bold">Disable Image</h6>
                                        <div class="img-checkbox">
                                            <input class="main-img-cover form-check-input" id="img-check-3"
                                                type="checkbox" disabled="">
                                            <label class="form-check-label mb-0" for="img-check-3"> <img
                                                    src="{{ asset('assets/images/switch/3.jpg') }}" alt="flowers"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card-wrapper solid-border rounded-3">
                                        <h6 class="sub-title fw-bold">Disable Checked Image</h6>
                                        <div class="img-checkbox">
                                            <input class="main-img-cover form-check-input" id="img-check-4"
                                                type="checkbox" disabled="" checked="">
                                            <label class="form-check-label mb-0" for="img-check-4"> <img
                                                    src="{{ asset('assets/images/switch/4.jpg') }}" alt="rose-tea"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Images with Radio</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.form-check-input-* ,.form-check-label-*
                            </code><span>for image radio.</span></p>
                    </div>
                    <div class="card-body checkbox-checked">
                        <div class="main-img-checkbox">
                            <div class="row g-3">
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card-wrapper solid-border rounded-3">
                                        <h6 class="sub-title fw-bold">Custom</h6>
                                        <div class="img-checkbox">
                                            <input class="main-img-cover form-check-input" id="img-radio-1"
                                                type="radio" name="radio6">
                                            <label class="form-check-label mb-0" for="img-radio-1"> <img
                                                    src="{{ asset('assets/images/switch/5.jpg') }}" alt="coffee-beans"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card-wrapper solid-border rounded-3">
                                        <h6 class="sub-title fw-bold">Checked Image</h6>
                                        <div class="img-checkbox">
                                            <input class="main-img-cover form-check-input" id="img-radio-2"
                                                type="radio" name="radio6" checked="">
                                            <label class="form-check-label mb-0" for="img-radio-2"> <img
                                                    src="{{ asset('assets/images/switch/6.jpg') }}" alt="tree"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card-wrapper solid-border rounded-3">
                                        <h6 class="sub-title fw-bold">Disable Image</h6>
                                        <div class="img-checkbox">
                                            <input class="main-img-cover form-check-input" id="img-radio-3"
                                                type="radio" name="radio6" disabled="">
                                            <label class="form-check-label mb-0" for="img-radio-3"> <img
                                                    src="{{ asset('assets/images/switch/7.jpg') }}" alt="flowers"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card-wrapper solid-border rounded-3">
                                        <h6 class="sub-title fw-bold">Disable Checked Image</h6>
                                        <div class="img-checkbox">
                                            <input class="main-img-cover form-check-input" id="img-radio-4"
                                                type="radio" name="radio6" disabled="" checked="">
                                            <label class="form-check-label mb-0" for="img-radio-4"> <img
                                                    src="{{ asset('assets/images/switch/8.jpg') }}" alt="rose-tea"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Custom Radio</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.form-check-input-* ,.form-check-label-*
                            </code><span>for radios.</span></p>
                    </div>
                    <div class="card-body checkbox-checked">
                        <div class="row g-3">
                            <div class="col-xxl-4 col-sm-6">
                                <div class="card-wrapper solid-border rounded-3">
                                    <h6 class="sub-title fw-bold">Bordered Radio</h6>
                                    <label class="d-block" for="radio22">
                                        <input class="radio radio-border-primary radio-primary" id="radio22"
                                            type="radio" name="radio1" value="option1" checked="">Koho Theme
                                    </label>
                                    <label class="d-block" for="radio55">
                                        <input class="radio radio-border-danger radio-danger" id="radio55"
                                            type="radio" name="radio1" value="option1">Roxo Theme
                                    </label>
                                    <label class="d-block" for="radio33">
                                        <input class="radio radio-border-warning radio-warning" id="radio33"
                                            type="radio" name="radio1" value="option1">Voxo Theme
                                    </label>
                                    <label class="d-block" for="radio66">
                                        <input class="radio radio-border-secondary radio-secondary" id="radio66"
                                            type="radio" name="radio1" value="option1">Zeta Theme
                                    </label>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-sm-12 order-xxl-0 order-sm-1">
                                <div class="card-wrapper solid-border rounded-3">
                                    <h6 class="sub-title fw-bold">Icons Radio</h6>
                                    <div class="form-check radio ps-0">
                                        <ul class="radio-wrapper">
                                            <li>
                                                <input class="form-check-input" id="radio-icon" type="radio"
                                                    name="radio2" value="option2">
                                                <label class="form-check-label" for="radio-icon"><i
                                                        class="fa fa-sliders"></i><span>Sliders</span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input" id="radio-icon4" type="radio"
                                                    name="radio2" value="option2" checked="">
                                                <label class="form-check-label" for="radio-icon4"><i
                                                        class="fa-solid fa-eye-slash"></i><span>Hidden</span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input" id="radio-icon5" type="radio"
                                                    name="radio2" value="option2">
                                                <label class="form-check-label" for="radio-icon5"><i
                                                        class="fa-solid fa-folder-open"></i><span>Folder</span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input" id="radio-icon7" type="radio"
                                                    name="radio2" value="option2">
                                                <label class="form-check-label" for="radio-icon7"><i
                                                        class="fa fa-paper-plane"></i><span>Send</span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input" id="radio-icon8" type="radio"
                                                    name="radio2" value="option2">
                                                <label class="form-check-label" for="radio-icon8"><i
                                                        class="fa-solid fa-user"></i><span>User </span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input" id="radio-icon9" type="radio"
                                                    name="radio2" value="option2">
                                                <label class="form-check-label" for="radio-icon9"><i
                                                        class="fa-solid fa-trash"></i><span>Trash</span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input" id="radio-icon10" type="radio"
                                                    name="radio2" value="option2">
                                                <label class="form-check-label" for="radio-icon10"><i
                                                        class="fa-brands fa-github"></i><span>github</span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input" id="radio-icon11" type="radio"
                                                    name="radio2" value="option2">
                                                <label class="form-check-label" for="radio-icon11"><i
                                                        class="fa-solid fa-play"></i><span>Play</span></label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-sm-6">
                                <div class="card-wrapper solid-border rounded-3 fill-radio">
                                    <h6 class="sub-title fw-bold">Filled Radio</h6>
                                    <form>
                                        <label class="d-block" for="radio-ani111">
                                            <input class="radio radio-primary radio-border-primary" id="radio-ani111"
                                                type="radio" name="radio-animation" value="option3"
                                                checked="">Product
                                        </label>
                                        <label class="d-block" for="radio-ani222">
                                            <input class="radio radio-danger radio-border-danger" id="radio-ani222"
                                                type="radio" name="radio-animation" value="option3">Order history
                                        </label>
                                        <label class="d-block" for="radio-ani333">
                                            <input class="radio radio-warning radio-border-warning" id="radio-ani333"
                                                type="radio" name="radio-animation" value="option3">Invoice
                                        </label>
                                        <label class="d-block" for="radio-ani444">
                                            <input class="radio radio-secondary radio-border-secondary" id="radio-ani444"
                                                type="radio" name="radio-animation" value="option3">Wishlist
                                        </label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Default Switch</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.checkbox-solid-* ,.checkbox-* </code><span>for
                                bordered checkbox </span></p>
                    </div>
                    <div class="card-body checkbox-checked">
                        <div class="row g-3">
                            <div class="col-md-6 col-xl-4">
                                <div class="card-wrapper solid-border rounded-3 rtl-input">
                                    <h6 class="sub-title f-w-500">Custom Switches </h6>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" id="flexSwitchCheckDefault" type="checkbox"
                                            role="switch">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch
                                            checkbox input</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" id="flexSwitchCheckChecked" type="checkbox"
                                            role="switch" checked="">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch
                                            checkbox input</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card-wrapper solid-border rounded-3 rtl-input">
                                    <h6 class="sub-title f-w-500">Disabled Switches</h6>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" id="flexSwitchCheckDisabled" type="checkbox"
                                            role="switch" disabled="">
                                        <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch
                                            checkbox input</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" id="flexSwitchCheckCheckedDisabled"
                                            type="checkbox" role="switch" checked="" disabled="">
                                        <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled
                                            checked switch checkbox input</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <div class="card-wrapper solid-border rounded-3">
                                    <h6 class="sub-title f-w-500">Right Switches </h6>
                                    <div class="form-check form-switch form-check-reverse">
                                        <input class="form-check-input ms-2" id="flexSwitchCheckReverse" type="checkbox">
                                        <label class="form-check-label" for="flexSwitchCheckReverse">Reverse switch
                                            checkbox input</label>
                                    </div>
                                    <div class="form-check form-switch form-check-reverse">
                                        <input class="form-check-input ms-2" id="flexSwitchCheckDisabled1"
                                            type="checkbox" role="switch" disabled="">
                                        <label class="form-check-label" for="flexSwitchCheckDisabled1">Disabled switch
                                            checkbox input</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Inline-input type</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.checkbox-solid-* ,.checkbox-* </code><span>for
                                bordered checkbox </span></p>
                    </div>
                    <div class="card-body checkbox-checked">
                        <div class="row g-3">
                            <div class="col-md-6 col-xl-4">
                                <div class="card-wrapper solid-border rounded-3 rtl-input">
                                    <h6 class="sub-title f-w-500">Inline Checkbox</h6>
                                    <div class="form-check-size">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input me-2" id="inlineCheckbox1" type="checkbox"
                                                value="option1" checked="">
                                            <label class="form-check-label" for="inlineCheckbox1">I</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input me-2" id="inlineCheckbox2" type="checkbox"
                                                value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">II</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input me-2" id="inlineCheckbox3" type="checkbox"
                                                value="option3" disabled="">
                                            <label class="form-check-label" for="inlineCheckbox3">III (disabled)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card-wrapper solid-border rounded-3 rtl-input">
                                    <h6 class="sub-title f-w-500">Inline Radios</h6>
                                    <div class="form-check-size">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input me-2" id="inlineRadio1" type="radio"
                                                name="inlineRadioOptions" value="option1" checked="">
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input me-2" id="inlineRadio2" type="radio"
                                                name="inlineRadioOptions" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input me-2" id="inlineRadio3" type="radio"
                                                name="inlineRadioOptions" value="option3" disabled="">
                                            <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <div class="card-wrapper solid-border rounded-3">
                                    <h6 class="sub-title f-w-500">Inline Switches</h6>
                                    <div class="form-check-size">
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input check-size" id="flexSwitchCheckDefault2"
                                                type="checkbox" role="switch" checked="">
                                        </div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input check-size" id="flexSwitchCheckDefault3"
                                                type="checkbox" role="switch">
                                        </div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input check-size" id="flexSwitchCheckDisabled3"
                                                type="checkbox" role="switch" disabled="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Animated Buttons</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.radio_animated </code><span>through animated
                                checkbox and radios.</span></p>
                    </div>
                    <div class="card-body checkbox-checked">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="card-wrapper solid-border rounded-3">
                                    <h6 class="sub-title f-w-500">Select your payment method</h6>
                                    <label class="d-block">
                                        <input class="radio-primary" id="radio-ani_1" type="radio"
                                            name="radio-animation" checked="">Visa
                                    </label>
                                    <label class="d-block">
                                        <input class="radio-secondary" id="radio-ani1" type="radio"
                                            name="radio-animation">MasterCard
                                    </label>
                                    <label class="d-block">
                                        <input class="radio-tertiary" id="radio-ani2" type="radio"
                                            name="radio-animation" checked="">Paypal
                                    </label>
                                    <label class="d-block">
                                        <input class="radio-success" id="radio-ani13" type="radio"
                                            name="radio-animation">G-pay
                                    </label>
                                    <label class="d-block">
                                        <input class="radio-info" id="radio-ani4" type="radio"
                                            name="radio-animation">Bitpay
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card-wrapper solid-border rounded-3">
                                    <h6 class="sub-title f-w-500">What is your favorite social media? </h6>
                                    <label class="d-block">
                                        <input class="checkbox-primary" id="chk-ani_2" type="checkbox"
                                            checked="">Instagram
                                    </label>
                                    <label class="d-block">
                                        <input class="checkbox-secondary" id="chk-ani1" type="checkbox">Facebook
                                    </label>
                                    <label class="d-block">
                                        <input class="checkbox-tertiary" id="chk-ani2" type="checkbox"
                                            checked="">Whatsapp
                                    </label>
                                    <label class="d-block">
                                        <input class="checkbox-danger" id="chk-ani3" type="checkbox"
                                            checked="">Twitter
                                    </label>
                                    <label class="d-block">
                                        <input class="checkbox-info" id="chk-ani4" type="checkbox">Linkedin
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Basic Radio And Checkbox</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.form-check-inline</code><span>through display
                                inline.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="card-wrapper solid-border rounded-3">
                                    <h6 class="sub-title f-w-500">Simple Checkbox</h6>
                                    <div class="form-check-size">
                                        <label class="d-block">
                                            <input class="checkbox-primary" id="chk-ani_11" type="checkbox">Blog
                                        </label>
                                        <label class="d-block">
                                            <input class="checkbox-primary" id="chk-ani_12" type="checkbox">Gallery
                                        </label>
                                        <label class="d-block">
                                            <input class="checkbox-primary" id="chk-ani_13" type="checkbox"
                                                checked="">Faq
                                        </label>
                                        <label class="d-block">
                                            <input class="checkbox-primary" id="chk-ani_14" type="checkbox">Email
                                        </label>
                                        <label class="d-block">
                                            <input class="checkbox-primary" id="chk-ani_15" type="checkbox">Icons
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card-wrapper solid-border rounded-3">
                                    <h6 class="sub-title f-w-500">Simple Radios</h6>
                                    <div class="form-check-size">
                                        <label class="d-block">
                                            <input class="radio-primary" id="radio-ani_3" type="radio" name="radio5"
                                                checked="">Maps
                                        </label>
                                        <label class="d-block">
                                            <input class="radio-primary" id="radio-ani_4" type="radio" name="radio5"
                                                checked="">Tasks
                                        </label>
                                        <label class="d-block">
                                            <input class="radio-primary" id="radio-ani_5" type="radio" name="radio5"
                                                checked="">To-do
                                        </label>
                                        <label class="d-block">
                                            <input class="radio-primary" id="radio-ani_6" type="radio" name="radio5"
                                                checked="">Forms
                                        </label>
                                        <label class="d-block">
                                            <input class="radio-primary" id="radio-ani_7" type="radio" name="radio5"
                                                checked="">Login
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Radio Toggle Buttons</h4>
                        <p class="desc mb-0 mt-1"><span>The choice between these two approaches will depend on the type of
                                toggle you are creating, and whether or not the toggle will make sense to users when
                                announced as a checkbox or as an actual button. </span><code>[any one
                                selected]</code><span>.</span></p>
                    </div>
                    <div class="card-body common-flex main-radio-toggle">
                        <input class="btn-check radio-light-secondary" id="option1" type="radio" name="options">
                        <label class="btn bg-light-primary" for="option1">Checked</label>
                        <input class="btn-check radio-light-secondary" id="option2" type="radio" name="options">
                        <label class="btn bg-light-primary" for="option2">Radio</label>
                        <input class="btn-check radio-light-secondary" id="option3" type="radio" name="options"
                            disabled="">
                        <label class="btn bg-light-primary" for="option3">Disabled</label>
                        <input class="btn-check radio-light-secondary" id="option4" type="radio" name="options">
                        <label class="btn bg-light-primary" for="option4">Radio</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Outlined Checkbox Styles</h4>
                        <p class="desc mb-0 mt-1"><span>The choice between these two approaches will depend on the type of
                                toggle you are creating, and whether or not the toggle will make sense to users when
                                announced as a checkbox or as an actual button. </span><code>[multiple
                                selected]</code><span>.</span></p>
                    </div>
                    <div class="card-body common-flex">
                        <input class="btn-check" id="btn-check-outlined" type="checkbox">
                        <label class="btn btn-outline-info" for="btn-check-outlined">Single toggle</label><br>
                        <input class="btn-check" id="btn-check-2-outlined" type="checkbox" checked="">
                        <label class="btn btn-outline-danger" for="btn-check-2-outlined">Checked</label><br>
                        <input class="btn-check" id="success-outlined" type="radio" name="options-outlined"
                            checked="">
                        <label class="btn btn-outline-success" for="success-outlined">Checked success radio</label>
                        <input class="btn-check" id="danger-outlined" type="radio" name="options-outlined">
                        <label class="btn btn-outline-dark" for="danger-outlined">Dark radio</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
