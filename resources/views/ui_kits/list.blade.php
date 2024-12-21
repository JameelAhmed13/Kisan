@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Lists</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Lists</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-Fluid Starts-->
    <div class="container-fluid list-content-ui">
        <div class="row">
            <div class="col-lg-4">
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
            <div class="col-lg-4">
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
            <div class="col-lg-4">
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
            <div class="col-xxl-6">
                <!-- Contextual classes-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Contextual classes</h4>
                        <p class="desc mb-0 mt-1"><span>Use contextual classes to style list items with a stateful
                                background and color</span><code>.list-light-* , .font-*</code><span></span></p>
                    </div>
                    <div class="card-body">
                        <div class="list-group"><a class="list-group-item list-group-item-action list-group-item-primary"
                                href="#">This is Primary bg you can use <em
                                    class="font-primary fw-bold">.list-group-item-primary</em> class.</a><a
                                class="list-group-item list-group-item-action list-group-item-secondary" href="#">This
                                is Secondary bg you can use <em
                                    class="font-secondary fw-bold">.list-group-item-secondary</em> class.</a><a
                                class="list-group-item list-group-item-action list-group-item-tertiary" href="#">This
                                is Tertiary bg you can use <em class="font-tertiary fw-bold">.list-group-item-tertiary</em>
                                class.</a><a class="list-group-item list-group-item-action list-group-item-success"
                                href="#">This is Success bg you can use <em
                                    class="font-success fw-bold">.list-group-item-success</em> class.</a><a
                                class="list-group-item list-group-item-action list-group-item-danger" href="#">This is
                                Danger bg you can use<em class="font-danger fw-bold">.list-group-item-danger</em>
                                class.</a><a class="list-group-item list-group-item-action list-group-item-info"
                                href="#">This is Info bg you can use <em
                                    class="font-info fw-bold">.list-group-item-info</em> class.</a><a
                                class="list-group-item list-group-item-action list-group-item-light font-dark"
                                href="#">This is Light bg you can use <em
                                    class="font-light fw-bold">.list-group-item-light</em> class.</a><a
                                class="list-group-item list-group-item-action list-group-item-dark" href="#">This is
                                Dark bg you can use <em class="font-dark fw-bold">.list-group-item-dark</em> class.</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <!-- Default lists-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Default lists</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>list-group , .list-group-item</code><span>to
                                indicate the current content.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="horizontal-list-wrapper dark-list">
                            <ul class="fw-bold list-group list-group-horizontal-sm pb-2">
                                <li class="list-group-item b-l-primary">Product </li>
                                <li class="list-group-item">Product details</li>
                                <li class="list-group-item">Pricing</li>
                                <li class="list-group-item">Payment details</li>
                                <li class="list-group-item">Checkout </li>
                                <li class="list-group-item">Mega options </li>
                            </ul>
                            <ul class="fw-bold list-group list-group-horizontal-md pb-2">
                                <li class="list-group-item b-l-secondary">Basic table</li>
                                <li class="list-group-item">Sizing table </li>
                                <li class="list-group-item">Border table</li>
                                <li class="list-group-item">Basic inputs </li>
                                <li class="list-group-item">Form validations</li>
                            </ul>
                            <ul class="fw-bold list-group list-group-horizontal-md pb-2">
                                <li class="list-group-item b-l-tertiary">Typeahead</li>
                                <li class="list-group-item">Touchspin</li>
                                <li class="list-group-item">Switch</li>
                                <li class="list-group-item">Clipboard</li>
                                <li class="list-group-item">Default Form</li>
                            </ul>
                            <ul class="fw-bold list-group list-group-horizontal-lg pb-2">
                                <li class="list-group-item b-l-warning">Flat style </li>
                                <li class="list-group-item">Edge style </li>
                                <li class="list-group-item">Button group</li>
                                <li class="list-group-item">Rating</li>
                                <li class="list-group-item">Crypto</li>
                            </ul>
                            <ul class="fw-bold list-group list-group-horizontal-xl pb-2">
                                <li class="list-group-item b-l-success">Blog </li>
                                <li class="list-group-item">Blog details </li>
                                <li class="list-group-item">Blog single </li>
                                <li class="list-group-item">Order history </li>
                            </ul>
                            <ul class="fw-bold list-group list-group-horizontal-xxl">
                                <li class="list-group-item b-l-info">Gallery grid </li>
                                <li class="list-group-item">Gallery desc</li>
                                <li class="list-group-item">Masonry Desc</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <!-- Custom content lists-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Custom content lists</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.list-group-item</code><span>through make
                                custom design of all lists.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="list-group main-lists-content"><a
                                class="list-group-item list-group-item-action active bg-primary" href="#"
                                aria-current="true">
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <div class="list-wrapper"><img class="list-img"
                                            src="{{ asset('assets/images/avatar/1.jpg') }}" alt="profile">
                                        <div class="list-content">
                                            <h5>Molly Boake</h5>
                                            <p class="text-white">MollyBoake@rhyta.com</p>
                                        </div>
                                    </div><small>5 days ago</small>
                                </div>
                                <p class="mb-1">Next step is to choose a tone of voice for your content type. From casual
                                    to convincing, pick one from 20+ tones in the dropdown.Why did we say &ldquo;snag
                                    eyeballs&rdquo; instead of &ldquo;get attention?&rdquo; Why do we say
                                    &ldquo;brick-and-mortar words&rdquo; instead of &ldquo;concrete words?&rdquo; Because,
                                    in your email subject lines, it&rsquo;s better to use words that people can picture.</p>
                                <small>20K Followers</small>
                            </a><a class="list-group-item list-group-item-action list-hover-primary" href="#">
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <div class="list-wrapper"><img class="list-img"
                                            src="{{ asset('assets/images/avatar/2.jpg') }}" alt="profile">
                                        <div class="list-content">
                                            <h5>Gabrielle Fahey</h5>
                                            <p>GabrielleFahey@dayrep.com</p>
                                        </div>
                                    </div><small class="text-muted">10 days ago</small>
                                </div>
                                <p class="mb-1">Your aim with this blog is to advertise yourself and your services in
                                    blog design. That means it&apos;s vital to create content about just that: blog design.
                                    Anything else on your page may act as a distraction to your potential customers, and you
                                    don&apos;t want that!</p><small class="text-muted">100 Followers</small>
                            </a><a class="list-group-item list-group-item-action list-hover-primary" href="#">
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <div class="list-wrapper"><img class="list-img"
                                            src="{{ asset('assets/images/avatar/3.jpg') }}" alt="profile">
                                        <div class="list-content">
                                            <h5>Lucinda Moseley</h5>
                                            <p>LucindaMoseley@teleworm.us</p>
                                        </div>
                                    </div><small class="text-muted">3 days ago</small>
                                </div>
                                <p class="mb-1">People who are looking to hire a web designer may not know what to look
                                    out for. This will give you a chance to prove your trustworthiness by providing
                                    potential customers with advice and will let you sell your services by highlighting
                                    their best qualities.</p><small class="text-muted">23M Followers</small>
                            </a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
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
                                <input class="me-3 checkbox-secondary" id="secondCheckbox" type="checkbox"
                                    value="">
                                <label class="form-check-label font-secondary mb-0" for="secondCheckbox">Auto
                                    Update</label>
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
            <div class="col-md-4">
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
            <div class="col-md-4">
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
            <div class="col-md-12">
                <!-- JavaScript behavior-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>JavaScript behavior</h4>
                        <p class="desc mb-0 mt-1"><span>Use the tab JavaScript plugin—include it individually or through
                                the compiled</span><code>bootstrap.js</code><span>file to extend our list group to create
                                table panes of local content.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="list-group" id="list-tab" role="tablist"><a
                                        class="list-group-item list-group-item-action bg-primary active"
                                        id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab"
                                        aria-controls="list-home">Home</a><a
                                        class="list-group-item list-group-item-action list-hover-primary"
                                        id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab"
                                        aria-controls="list-profile">Profile</a><a
                                        class="list-group-item list-group-item-action list-hover-primary"
                                        id="list-messages-list" data-bs-toggle="list" href="#list-messages"
                                        role="tab" aria-controls="list-messages">Contact Us</a><a
                                        class="list-group-item list-group-item-action list-hover-primary"
                                        id="list-settings-list" data-bs-toggle="list" href="#list-settings"
                                        role="tab" aria-controls="list-settings">Settings</a></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active list-behaviors" id="list-home" role="tabpanel"
                                        aria-labelledby="list-home-list">
                                        <div class="d-flex mb-xl-4 list-behavior-1">
                                            <div class="flex-shrink-0"><img class="tab-img img-fluid"
                                                    src="{{ asset('assets/images/blog/img.png') }}" alt="home"></div>
                                            <div class="flex-grow-1">
                                                <p class="mb-xl-0 mb-sm-4">We provide end to end digital solutions, right
                                                    from designing your website/application development: Domain, Web
                                                    Hosting, Email Hosting Registration, Search Engine Optimization and
                                                    other Internet Marketing, Renewal of Services timely and effectively.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex list-behavior-1 mb-xl-4">
                                            <div class="flex-shrink-0"><img class="tab-img img-fluid"
                                                    src="{{ asset('assets/images/blog/blog.jpg') }}" alt="home">
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0">When someone visits your homepage, your design should
                                                    inspire them to stay. Therefore, your value proposition should be
                                                    established on the homepage for visitors to select to stay on your
                                                    website.Building trust, expressing value, and guiding visitors to the
                                                    next step all depend on a page&apos;s design.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade dark-list" id="list-profile" role="tabpanel"
                                        aria-labelledby="list-profile-list">
                                        <div class="flex-space align-items-center list-light-dark contact-profile"><img
                                                class="tab-img" src="{{ asset('assets/images/avatar/5.jpg') }}"
                                                alt="profile">
                                            <ul class="d-flex flex-column gap-2">
                                                <li><strong>Visit Us: </strong>&#x9;2600 Hollywood Blvd,Florida, United
                                                    States-&#x9;33020</li>
                                                <li><strong>Mail Us: </strong>&#x9;contact@us@gmail.com</li>
                                                <li><strong>Contact Number: </strong>(954) 357-7760</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                        aria-labelledby="list-messages-list">
                                        <ul class="d-flex flex-column gap-1">
                                            <li>Us Technology offers web &amp; mobile development solutions for all industry
                                                verticals.Include a short form using fields that&apos;ll help your business
                                                understand who&apos;s contacting them.</li>
                                            <li><strong>Visit Us: </strong>&#x9;2600 Hollywood Blvd,Florida, United
                                                States-&#x9;33020</li>
                                            <li><strong>Mail Us:</strong>contact@us@gmail.com</li>
                                            <li><strong>Contact Number: </strong>(954) 357-7760</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="list-settings" role="tabpanel"
                                        aria-labelledby="list-settings-list">
                                        <ul class="d-flex flex-column gap-2">
                                            <li><strong>Available pages in Theme: </strong></li>
                                            <li>
                                                --&gt; Typography:
                                                Typography is the art of arranging letters and text in a way that makes the
                                                copy legible, clear, and visually appealing to the reader.
                                            </li>
                                            <li>
                                                --&gt; Tooltip:
                                                A tooltip is a brief, informative message that appears when a user interacts
                                                with an element in a graphical user interface (GUI).
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6">
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
            <div class="col-xxl-4 col-lg-6">
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
                                    src="{{ asset('assets/images/avatar/1.jpg') }}" alt="user">Teresa J.
                                Mosteller</a><a class="list-group-item list-group-item-action list-hover-primary"
                                href="javascript:void(0)"><img class="rounded-circle img-40"
                                    src="{{ asset('assets/images/avatar/3.jpg') }}" alt="user">Gloria D.
                                Acheson</a><a class="list-group-item list-group-item-action disabled"
                                href="javascript:void(0)"><img class="rounded-circle img-40"
                                    src="{{ asset('assets/images/avatar/2.jpg') }}" alt="user">Sharon C. Obrien</a><a
                                class="list-group-item list-group-item-action disabled" href="javascript:void(0)"><img
                                    class="rounded-circle img-40" src="{{ asset('assets/images/avatar/5.jpg') }}"
                                    alt="user">Bryan A. Owens</a></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-12">
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
@endsection