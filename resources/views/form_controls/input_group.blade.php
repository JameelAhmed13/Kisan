@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Input Groups</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Control</li>
                        <li class="breadcrumb-item active">Input Groups</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-Fluid Starts-->
    <div class="container-fluid input-group-page">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Button addons</h4>
                        <p class="desc mb-0 mt-1"><span>Multiple add-ons are supported and can be mixed with buttons input
                                versions.</span><code></code><span></span></p>
                    </div>
                    <div class="card-body card-wrapper input-group-wrapper">
                        <form class="theme-form row g-3">
                            <div class="input-group">
                                <button class="btn btn-outline-primary" id="button-addon1" type="button">$ 25</button>
                                <input class="form-control" type="text" placeholder=""
                                    aria-label="Example text with button addon" aria-describedby="button-addon1">
                            </div>
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Recipient's username"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-primary" id="button-addon2" type="button">Submit</button>
                            </div>
                            <div class="input-group">
                                <button class="btn btn-primary" type="button"><span>&euro; </span></button>
                                <button class="btn btn-tertiary" type="button">0.0114419</button>
                                <input class="form-control" type="text" placeholder=""
                                    aria-label="Example text with two button addons">
                            </div>
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Recipient's username"
                                    aria-label="Recipient's username with two button addons">
                                <button class="btn btn-tertiary" type="button"><span>&#x20B9;</span></button>
                                <button class="btn btn-primary" type="button">500</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Custom forms</h4>
                        <p class="desc mb-0 mt-1"><span>Input groups include support for</span><code> custom selects and
                                custom file inputs</code><span>Browser default versions of these are not supported.</span>
                        </p>
                    </div>
                    <div class="card-body card-wrapper input-group-wrapper">
                        <form class="theme-form row g-3">
                            <div class="input-group">
                                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                <select class="form-select" id="inputGroupSelect01">
                                    <option selected="">Select Your Favorite Pixelstrap theme</option>
                                    <option value="1">Edmin</option>
                                    <option value="2">Tivo</option>
                                    <option value="3">Roxo</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <select class="form-select" id="inputGroupSelect02">
                                    <option selected="">Select Your Favorite Colors</option>
                                    <option value="1">Yellow</option>
                                    <option value="2">Red</option>
                                    <option value="3">Orange</option>
                                </select>
                                <label class="input-group-text" for="inputGroupSelect02">Options</label>
                            </div>
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button"><i
                                        class="icofont icofont-credit-card"></i></button>
                                <select class="form-select" id="inputGroupSelect03"
                                    aria-label="Example select with button addon">
                                    <option selected="">Select Your Favorite Chocolates</option>
                                    <option value="1">Dark Chocolates</option>
                                    <option value="2">Dairy Milk</option>
                                    <option value="3">Kitkat</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <select class="form-select" id="inputGroupSelect04"
                                    aria-label="Example select with button addon">
                                    <option selected="">Select Your Favorite Theme</option>
                                    <option value="1">Oslo</option>
                                    <option value="2">Koho</option>
                                    <option value="3">Voxo</option>
                                </select>
                                <button class="btn btn-outline-secondary" type="button">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Custom file input</h4>
                        <p class="desc mb-0 mt-1"><span>Input groups include support for custom selects and
                                custom</span><code> file uploads. </code><span>Browser default versions of these are not
                                supported. </span></p>
                    </div>
                    <div class="card-body card-wrapper input-group-wrapper">
                        <form class="theme-form row g-3">
                            <div class="input-group">
                                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                <input class="form-control" id="inputGroupFile01" type="file">
                            </div>
                            <div class="input-group">
                                <input class="form-control" id="inputGroupFile02" type="file">
                                <label class="input-group-text" for="inputGroupFile02">Verify</label>
                            </div>
                            <div class="input-group">
                                <button class="btn btn-outline-success" id="inputGroupFileAddon03" type="button"><i
                                        class="icofont icofont-ui-copy"></i></button>
                                <input class="form-control" id="inputGroupFile03" type="file"
                                    aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                            </div>
                            <div class="input-group">
                                <input class="form-control" id="inputGroupFile04" type="file"
                                    aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                <button class="btn btn-outline-success" id="inputGroupFileAddon04"
                                    type="button">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Segmented buttons</h4>
                        <p class="desc mb-0 mt-1"><span>Multiple add-ons are supported and can be mixed with</span><code>
                                dropdowns </code><span>versions </span></p>
                    </div>
                    <div class="card-body card-wrapper input-group-wrapper">
                        <form class="theme-form row g-4">
                            <div class="input-group">
                                <button class="btn btn-outline-primary" type="button">primary </button>
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-split" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle
                                        Dropdown</span></button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#">Learning</a></li>
                                    <li><a class="dropdown-item" href="#">Editors</a></li>
                                    <li><a class="dropdown-item" href="#">Users</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Social App</a></li>
                                </ul>
                                <input class="form-control" type="text"
                                    aria-label="Text input with segmented dropdown button">
                            </div>
                            <div class="input-group">
                                <input class="form-control" type="text"
                                    aria-label="Text input with segmented dropdown button">
                                <button class="btn btn-outline-secondary" type="button">Secondary</button>
                                <button class="btn btn-secondary dropdown-toggle dropdown-toggle-split" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle
                                        Dropdown</span></button>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-block">
                                    <li><a class="dropdown-item" href="#">Search Result</a></li>
                                    <li><a class="dropdown-item" href="#">Tasks</a></li>
                                    <li><a class="dropdown-item" href="#">Projects</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Animation </a></li>
                                </ul>
                            </div>
                            <div class="input-group">
                                <button class="btn btn-outline-danger" type="button">danger </button>
                                <button class="btn btn-danger dropdown-toggle dropdown-toggle-split" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle
                                        Dropdown</span></button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#">Learning</a></li>
                                    <li><a class="dropdown-item" href="#">Editors</a></li>
                                    <li><a class="dropdown-item" href="#">Users</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Social App</a></li>
                                </ul>
                                <input class="form-control" type="text"
                                    aria-label="Text input with segmented dropdown button">
                            </div>
                            <div class="input-group">
                                <input class="form-control" type="text"
                                    aria-label="Text input with segmented dropdown button">
                                <button class="btn btn-outline-info" type="button">info</button>
                                <button class="btn btn-info dropdown-toggle dropdown-toggle-split" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle
                                        Dropdown</span></button>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-block">
                                    <li><a class="dropdown-item" href="#">Search Result</a></li>
                                    <li><a class="dropdown-item" href="#">Tasks</a></li>
                                    <li><a class="dropdown-item" href="#">Projects</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Animation </a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card input-dropdown">
                    <div class="card-header pb-0">
                        <h4>Buttons with dropdowns</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code> .input-group &amp; [aria-label=&quot;&quot;]
                            </code><span>through buttons with dropdowns. </span></p>
                    </div>
                    <div class="card-body card-wrapper input-group-wrapper">
                        <form class="theme-form row g-3">
                            <div class="input-group">
                                <button class="btn btn-outline-info dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Ecommerce</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Email</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Users</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Bookmarks</a></li>
                                </ul>
                                <input class="form-control" type="text" aria-label="Text input with dropdown button">
                            </div>
                            <div class="input-group">
                                <input class="form-control" type="text" aria-label="Text input with dropdown button">
                                <button class="btn btn-outline-danger dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-block">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Starter kit</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Gallery</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Blog</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Maps</a></li>
                                </ul>
                            </div>
                            <div class="input-group">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Widgets</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Project</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Contacts</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Tasks</a></li>
                                </ul>
                                <input class="form-control" type="text"
                                    aria-label="Text input with 2 dropdown buttons">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Dropdown</button>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-block">
                                    <li><a class="dropdown-item" href="javascript:void(0)">To-Do</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">FAQ</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Knowledgebase</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Support Ticket</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Checkboxes and radios</h4>
                        <p class="desc mb-0 mt-1"><span>Place any checkbox or radio option within an input group addon
                                instead of text. We recommend adding</span><code> .mt-0 to the .form-check-input
                            </code><span>when there is no visible text next to the input. </span></p>
                    </div>
                    <div class="card-body card-wrapper input-group-wrapper checkbox-checked">
                        <form class="theme-form row g-5">
                            <div class="input-group">
                                <div class="input-group-text">
                                    <input class="form-check-input mt-0" type="checkbox" value=""
                                        aria-label="Checkbox for following text input">
                                </div>
                                <input class="form-control" type="text" aria-label="Text input with checkbox">
                            </div>
                            <div class="input-group">
                                <div class="input-group-text">
                                    <input class="form-check-input mt-0" type="radio" value=""
                                        aria-label="Radio button for following text input" checked="">
                                </div>
                                <input class="form-control" type="text" aria-label="Text input with radio button">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Sizing</h4>
                        <p class="desc mb-0 mt-1"><span>Add the relative form sizing classes to
                                the</span><code>.input-group</code><span>itself and contents within will automatically
                                resize—no need for repeating the form control size classes on each element.</span></p>
                    </div>
                    <div class="card-body card-wrapper input-group-wrapper">
                        <form class="theme-form row g-3">
                            <div class="input-group input-group-sm"><span class="input-group-text"
                                    id="inputGroup-sizing-sm">Small</span>
                                <input class="form-control" type="text" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="input-group"><span class="input-group-text"
                                    id="inputGroup-sizing-default">Default</span>
                                <input class="form-control" type="text" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group input-group-lg"><span class="input-group-text"
                                    id="inputGroup-sizing-lg">Large</span>
                                <input class="form-control" type="text" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-lg">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Multiple inputs</h4>
                        <p class="desc mb-0 mt-1"><span>While multiple &lt;input&gt;s are supported visually, validation
                                styles are only available for input groups with a single
                            </span><code>&lt;input&gt;</code><span></span></p>
                    </div>
                    <div class="card-body card-wrapper input-group-wrapper">
                        <form class="theme-form row g-3">
                            <div class="input-group"><span class="input-group-text">First and last name</span>
                                <input class="form-control" type="text" aria-label="First name">
                                <input class="form-control" type="text" aria-label="Last name">
                            </div>
                            <div class="input-group"><span class="input-group-text">$</span><span
                                    class="input-group-text">0.00</span>
                                <input class="form-control" type="text"
                                    aria-label="Dollar amount (with dot and two decimal places)">
                            </div>
                            <div class="input-group">
                                <input class="form-control" type="text"
                                    aria-label="Dollar amount (with dot and two decimal places)"><span
                                    class="input-group-text">$</span><span class="input-group-text">0.00</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Basic input groups</h4>
                        <p class="desc mb-0 mt-1"><span>Place one add-on or button on either side of an input. You may also
                                place one on both sides of an input. Remember to place
                            </span><code>&lt;label&gt;</code><span>s outside the input group.</span></p>
                    </div>
                    <div class="card-body card-wrapper input-group-wrapper">
                        <div class="row g-5">
                            <div class="col-md-12">
                                <div class="card-wrapper solid-border rounded-3 main-custom-form input-group-wrapper">
                                    <h6 class="sub-title fw-bold">Basic</h6>
                                    <form class="theme-form row g-3">
                                        <div class="input-group"><span class="input-group-text"
                                                id="basic-addon1">@</span>
                                            <input class="form-control" type="text" placeholder="Username"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="Recipient's username"
                                                aria-label="Recipient's username" aria-describedby="basic-addon2"><span
                                                class="input-group-text" id="basic-addon2">@example.com</span>
                                        </div>
                                        <label class="form-label" for="basic-url">Your vanity URL</label>
                                        <div class="input-group m-0"><span class="input-group-text"
                                                id="basic-addon3">https://example.com/</span>
                                            <input class="form-control" id="basic-url" type="text"
                                                aria-describedby="basic-addon3">
                                        </div>
                                        <div class="input-group"><span class="input-group-text">$</span>
                                            <input class="form-control" type="text"
                                                aria-label="Amount (to the nearest dollar)"><span
                                                class="input-group-text">.00</span>
                                        </div>
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="Username"
                                                aria-label="Username"><span class="input-group-text">@</span>
                                            <input class="form-control" type="text" placeholder="Server"
                                                aria-label="Server">
                                        </div>
                                        <div class="input-group"><span class="input-group-text">With textarea</span>
                                            <textarea class="form-control" aria-label="With textarea"></textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card-wrapper solid-border rounded-3 input-radius">
                                    <h6 class="sub-title fw-bold">Wrapping </h6>
                                    <p class="f-m-light mb-1">Input groups wrap by default via flex-wrap: wrap in order to
                                        accommodate custom form field validation within an input group. You may disable this
                                        with <code>.flex-nowrap</code>.</p>
                                    <form class="theme-form row g-3">
                                        <div class="input-group flex-nowrap"><span class="input-group-text"
                                                id="addon-wrapping">@</span>
                                            <input class="form-control" type="text" placeholder="Username"
                                                aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary m-r-15" type="submit">Submit</button>
                        <button class="btn btn-light-primary" type="submit">Cancel </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Variation of addons</h4>
                        <p class="desc mb-0 mt-1"><span>Place one add-on or button on either side of an input. You may also
                                place one on both sides of an input. Remember to place
                            </span><code>&lt;label&gt;</code><span>s outside the input group.</span></p>
                    </div>
                    <div class="card-body card-wrapper input-group-wrapper">
                        <div class="row"></div>
                        <div class="col">
                            <form class="theme-form row g-3">
                                <div>
                                    <label class="form-label">Left Addon</label>
                                    <div class="input-group"><span class="input-group-text list-light-primary"><i
                                                class="icofont icofont-pencil-alt-5 font-primary"></i></span>
                                        <input class="form-control" type="text" placeholder="Email">
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label">Right Addon</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Recipient's username"
                                            aria-label="Recipient's username"><span
                                            class="input-group-text list-light-danger"><i
                                                class="icofont icofont-ui-dial-phone font-danger"> </i></span>
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label">Joint Addon</label>
                                    <div class="input-group"><span class="input-group-text list-light-primary"><i
                                                class="icofont icofont-link-broken font-primary"></i></span><span
                                            class="input-group-text">0.00 </span>
                                        <input class="form-control" type="text"
                                            aria-label="Amount (to the nearest dollar)">
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label">Left &amp; Right Addon</label>
                                    <div class="input-group"><span class="input-group-text list-light-danger"><i
                                                class="icofont icofont-ui-zoom-out font-danger"></i></span>
                                        <input class="form-control" type="text"
                                            aria-label="Amount (to the nearest dollar)"><span
                                            class="input-group-text list-light-danger"><i
                                                class="icofont icofont-ui-zoom-in font-danger"></i></span>
                                    </div>
                                </div>
                                <div class="input-group-solid">
                                    <label class="form-label">Solid style</label>
                                    <div class="input-group"><span class="input-group-text list-light-primary"><i
                                                class="icofont icofont-users font-primary"></i></span>
                                        <input class="form-control" type="text" placeholder="999999">
                                    </div>
                                </div>
                                <div class="input-group-square">
                                    <label class="form-label">Flat style</label>
                                    <div class="input-group"><span class="input-group-text list-light-danger"><i
                                                class="icofont icofont-credit-card font-danger"></i></span>
                                        <input class="form-control" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="input-group-square">
                                    <label class="form-label">Raise style</label>
                                    <div class="input-group"><span class="input-group-text list-light-primary"><i
                                                class="icofont icofont-download font-primary"></i></span>
                                        <input class="form-control input-group-air" type="text"
                                            placeholder="https://www.example.com">
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label">Left &amp; Right Addon</label>
                                    <div class="input-group pill-input-group"><span
                                            class="input-group-text list-light-danger"><i
                                                class="icofont icofont-ui-copy font-danger"></i></span>
                                        <input class="form-control" type="text"
                                            aria-label="Amount (to the nearest dollar)"><span
                                            class="input-group-text list-light-danger"><i
                                                class="icofont icofont-search-stock font-danger"></i></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary m-r-15" type="submit">Submit</button>
                        <button class="btn bg-light" type="submit">Cancel </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-Fluid Ends-->
@endsection

@section('scripts')
@endsection
