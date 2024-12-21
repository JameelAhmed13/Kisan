@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Dragabble Card</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Dragabble Card</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row" id="dragable">
            <div class="col-lg-4 col-md-6">
                <!-- Default lists-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Default lists</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>list-group , .list-group-item</code><span>to
                                indicate the current content.</span></p>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <svg class="svg-w-18 stroke-light me-1">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                                </svg>Logo Design
                            </li>
                            <li class="list-group-item">
                                <svg class="svg-w-18 stroke-light me-1">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                                </svg>Web Design &amp; Development
                            </li>
                            <li class="list-group-item">
                                <svg class="svg-w-18 stroke-light me-1">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                                </svg>E-Commerce
                            </li>
                            <li class="list-group-item">
                                <svg class="svg-w-18 stroke-light me-1">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                                </svg>SEO
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Active lists-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Active lists</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.active , .list-group-item</code><span>to
                                indicate the current active lists.</span></p>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item active" aria-current="true">
                                <svg class="svg-w-18 stroke-light me-1 stroke-white">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                                </svg>UI Kits
                            </li>
                            <li class="list-group-item">
                                <svg class="svg-w-18 stroke-light me-1">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                                </svg>Wow Animations
                            </li>
                            <li class="list-group-item">
                                <svg class="svg-w-18 stroke-light me-1">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                                </svg>Apex Charts
                            </li>
                            <li class="list-group-item">
                                <svg class="svg-w-18 stroke-light me-1">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                                </svg>Starter Kits
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Flush lists-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Flush lists</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.list-group-flush</code><span>to remove some
                                borders and rounded corners to render list group items.</span></p>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <svg class="svg-w-18 stroke-light me-1">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                                </svg>PRODUCT
                            </li>
                            <li class="list-group-item">
                                <svg class="svg-w-18 stroke-light me-1">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                                </svg>PRODUCT DETAILS
                            </li>
                            <li class="list-group-item">
                                <svg class="svg-w-18 stroke-light me-1">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                                </svg>CART
                            </li>
                            <li class="list-group-item">
                                <svg class="svg-w-18 stroke-light me-1">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                                </svg>CHECKOUT
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Lists with checkbox-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Lists with checkbox</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.form-check-input</code><span>to check your
                                checkbox.</span></p>
                    </div>
                    <div class="card-body dark-list">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <input class="me-3 checkbox-primary active" id="firstCheckbox" type="checkbox"
                                    value="">
                                <label class="form-check-label font-primary mb-0" for="firstCheckbox">Auto Start</label>
                            </li>
                            <li class="list-group-item">
                                <input class="me-3 checkbox-secondary" id="secondCheckbox" type="checkbox" value="">
                                <label class="form-check-label font-secondary mb-0" for="secondCheckbox">Auto Update</label>
                            </li>
                            <li class="list-group-item">
                                <input class="me-3 checkbox-success" id="thirdCheckbox" type="checkbox" value="">
                                <label class="form-check- font-success mb-0" for="thirdCheckbox">Don&apos;t check auth
                                    key</label>
                            </li>
                            <li class="list-group-item">
                                <input class="me-3 checkbox-warning" id="fourCheckbox" type="checkbox" value="">
                                <label class="form-check-label font-warning mb-0" for="fourCheckbox">Success all</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Lists with radios-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Lists with radios</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.form-check-input</code><span>to check your
                                radio buttons.</span></p>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <input class="form-check-input me-2 active radio-primary" id="firstRadio" type="radio"
                                    name="listGroupRadio" value="" checked="">
                                <label class="form-check-label mb-0 font-primary" for="firstRadio">Meditations</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-2 radio-secondary" id="secondRadio" type="radio"
                                    name="listGroupRadio" value="">
                                <label class="form-check-label mb-0 font-secondary" for="secondRadio">Read a book</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-2 radio-tertiary" id="thirdRadio" type="radio"
                                    name="listGroupRadio" value="">
                                <label class="form-check-label mb-0 font-tertiary" for="thirdRadio">Learn to code </label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-2 radio-info" id="fourRadio" type="radio"
                                    name="listGroupRadio" value="">
                                <label class="form-check-label mb-0 font-info" for="fourRadio">Drink more water</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Lists with checkbox-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Lists with numbers</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.list-group-numbered</code><span>to ordered
                                wise print numbers.</span></p>
                    </div>
                    <div class="card-body">
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item font-primary f-w-500">Known for delivery of useful and usable
                                solutions</li>
                            <li class="list-group-item font-danger f-w-500">Solve your problem with us</li>
                            <li class="list-group-item font-success f-w-500">Certified Professionals</li>
                            <li class="list-group-item font-warning f-w-500">Growth-Driven</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Numbered & badge lists-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Numbered &amp; badge lists</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.list-group-numbered</code><span>modifier class
                                to numbered list group items.Numbers are generated via CSS for better placement inside list
                                group items.</span></p>
                    </div>
                    <div class="card-body">
                        <ol class="list-group list-group-numbered badge-list">
                            <li class="list-group-item">
                                <div>Stella Nowland</div><span
                                    class="badge badge-warning rounded-pill p-2">Freelance</span>
                            </li>
                            <li class="list-group-item">
                                <div>Lola Stanford</div><span
                                    class="badge badge-danger text-white rounded-pill p-2">Issue</span>
                            </li>
                            <li class="list-group-item">
                                <div>Caitlin Coungeau</div><span
                                    class="badge badge-primary text-white rounded-pill p-2">Social</span>
                            </li>
                            <li class="list-group-item">
                                <div>Graciela W. McClaran</div><span
                                    class="badge badge-danger text-white rounded-pill p-2">Issue</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Disabled lists-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Disabled lists</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.disabled, .list-group-item</code><span>to make
                                it appear disabled.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="list-group"><a
                                class="list-group-item list-group-item-action list-hover-primary active"
                                href="javascript:void(0)"><img class="rounded-circle img-40"
                                    src="{{ asset('assets/images/avatar/1.jpg') }}" alt="user">Teresa J. Mosteller</a><a
                                class="list-group-item list-group-item-action list-hover-primary"
                                href="javascript:void(0)"><img class="rounded-circle img-40"
                                    src="{{ asset('assets/images/avatar/3.jpg') }}" alt="user">Gloria D. Acheson</a><a
                                class="list-group-item list-group-item-action disabled" href="javascript:void(0)"><img
                                    class="rounded-circle img-40" src="{{ asset('assets/images/avatar/2.jpg') }}"
                                    alt="user">Sharon C. Obrien</a><a
                                class="list-group-item list-group-item-action disabled" href="javascript:void(0)"><img
                                    class="rounded-circle img-40" src="{{ asset('assets/images/avatar/5.jpg') }}"
                                    alt="user">Bryan A. Owens</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Scrollable lists-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Scrollable lists</h4>
                        <p class="desc mb-0 mt-1"><span>Use the property</span><code>overflow:auto</code><span>through
                                scrollable lists.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="list-group main-lists-content scrollbar-wrapper"><a
                                class="list-group-item list-group-item-action active list-hover-secondary border-secondary"
                                href="#" aria-current="true">
                                <div class="list-wrapper gap-0"><img class="img-45 b-r-8"
                                        src="{{ asset('assets/images/avatar/9.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Molly Boake</h6>
                                        <p>MollyBoake@rhyta.com</p><small>5 days ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action list-hover-secondary" href="#">
                                <div class="list-wrapper gap-0"><img class="img-45 b-r-8"
                                        src="{{ asset('assets/images/avatar/8.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Gabrielle Fahey</h6>
                                        <p>GabrielleFahey@dayrep.com</p><small class="text-muted">10 days ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action list-hover-secondary" href="#">
                                <div class="list-wrapper gap-0"><img class="img-45 b-r-8"
                                        src="{{ asset('assets/images/avatar/7.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Lucinda Moseley</h6>
                                        <p>LucindaMoseley@teleworm.us</p><small class="text-muted">3 days ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action list-hover-secondary" href="#">
                                <div class="list-wrapper gap-0"><img class="img-45 b-r-8"
                                        src="{{ asset('assets/images/avatar/6.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Francis K. Henriques</h6>
                                        <p>FrancisKHenriques@teleworm.us</p><small class="text-muted">2 days ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action list-hover-secondary" href="#">
                                <div class="list-wrapper gap-0"><img class="img-45 b-r-8"
                                        src="{{ asset('assets/images/avatar/5.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Jose A. Seay</h6>
                                        <p>JoseASeay@rhyta.com</p><small class="text-muted">15 days ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action list-hover-secondary" href="#">
                                <div class="list-wrapper gap-0"><img class="img-45 b-r-8"
                                        src="{{ asset('assets/images/avatar/4.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Phil F. Cunningham</h6>
                                        <p>PhilFCunningham@dayrep.com</p><small class="text-muted">6 days ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action list-hover-secondary" href="#">
                                <div class="list-wrapper gap-0"><img class="img-45 b-r-8"
                                        src="{{ asset('assets/images/avatar/3.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Richard E. Johnson</h6>
                                        <p>RichardEJohnson@teleworm.us</p><small class="text-muted">20 days ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action list-hover-secondary" href="#">
                                <div class="list-wrapper gap-0"><img class="img-45 b-r-8"
                                        src="{{ asset('assets/images/avatar/2.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Lawrence L. Nash</h6>
                                        <p>LawrenceLNash@jourrapide.com</p><small class="text-muted">8 days ago</small>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-Fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/sortablejs/sortable.min.js') }}"></script>
    <script src="{{ asset('assets/js/draggable-custom.js') }}"></script>
@endsection
