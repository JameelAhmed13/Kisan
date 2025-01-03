@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Modal</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Modal</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <!-- Basic modal-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Basic modal</h4>
                        <p class="desc mb-0 mt-1"><span>Different types of basic modals using
                                like</span><code>simple/scrolling/tooltips/grid/varying modal</code><span></span></p>
                    </div>
                    <div class="card-body badge-spacing">
                        <!-- Simple demo-->
                        <button class="btn btn-secondary px-xl-2 px-xxl-3" type="button" data-bs-toggle="modal"
                            data-original-title="test" data-bs-target="#exampleModal">Simple</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="modal-toggle-wrapper">
                                            <h4>Up to <strong class="font-danger">85% OFF</strong>, Hurry Up Online Shopping
                                            </h4>
                                            <div class="modal-img"> <img src="{{ asset('assets/images/gif/online-shopping.gif') }}"
                                                    alt="online-shopping"></div>
                                            <p class="text-sm-center">Our difficulty in finding regular clothes that was of
                                                great quality, comfortable, and didn't impact the environment given way to
                                                Creatures of Habit.</p>
                                            <button
                                                class="btn bg-primary d-flex align-items-center gap-2 text-light ms-auto"
                                                type="button" data-bs-dismiss="modal">Explore More
                                                <svg class="feather">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right') }}">
                                                    </use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Scrolling long content-->
                        <button class="btn btn-success px-xl-2 px-xxl-3" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModalLong">Scrolling content</button>
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Scrolling modal</h5>
                                        <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h6>Wed designer</h6>
                                        <div class="d-flex mt-3">
                                            <div class="flex-shrink-0">
                                                <svg class="feather svg-modal">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <p>For a site to be successful, a designer must be able to communicate their
                                                    ideas, chat with a firm about what they want, and inquire about the
                                                    target audience.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <svg class="feather svg-modal">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <p>As a web designer, you either prefer to work freelance for several
                                                    different businesses at once or you may choose to work for just one. In
                                                    either case, you'll need good time management skills to keep several
                                                    projects moving forward.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <svg class="feather svg-modal">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <p>Although a designer doesn't write the code that makes a site work, it
                                                    doesn't hurt to have a basic understanding of HTML or CSS to make minor
                                                    adjustments to a site. You'll find it simpler to edit templates, improve
                                                    typefaces, or change item placements if you have a basic understanding
                                                    of how things work.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex my-2">
                                            <div class="flex-shrink-0">
                                                <svg class="feather svg-modal">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <p class="pb-4">Most businesses employ a certain font or typography so
                                                    that clients can quickly distinguish them from their rivals. Since
                                                    designers now have access to a wider variety of fonts, firms may more
                                                    easily and precisely communicate their brands through typography.</p>
                                            </div>
                                        </div>
                                        <h6>UX designer </h6>
                                        <div class="d-flex mt-3">
                                            <div class="flex-shrink-0">
                                                <svg class="feather svg-modal">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <p>User research, persona creation, building wireframes and interactive
                                                    prototypes, and testing ideas are among the common tasks of a UX
                                                    designer. These duties can differ greatly between organizations.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-3">
                                            <div class="flex-shrink-0">
                                                <svg class="feather svg-modal">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <p>Create solutions that will be helpful for the issues and situations that
                                                    exist right now, not for those that will. With the right materials,
                                                    assist people in organizing their time, completing things more quickly,
                                                    and optimizing it.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-3">
                                            <div class="flex-shrink-0">
                                                <svg class="feather svg-modal">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <p>Based on the data received from users, improve them. Adapt existing
                                                    solutions to the requirements, hopes, difficulties, and expectations of
                                                    users.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-3">
                                            <div class="flex-shrink-0">
                                                <svg class="feather svg-modal">
                                                    <use
                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <p>Keep in mind that you are creating solutions to particular challenges for
                                                    a particular population living in a particular habitat. Always remember
                                                    to correctly contextualise your thoughts and determine whether they are
                                                    actually appropriate for the situation. It's sometimes necessary to
                                                    concede that a digital solution is not the most appropriate choice in a
                                                    certain circumstance.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-primary" type="button">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tooltips and popovers modal-->
                        <button class="btn btn-info px-xl-2 px-xxl-3" type="button" data-bs-toggle="modal"
                            data-bs-target="#tooltipmodal">Tooltips and popovers</button>
                        <div class="modal fade" id="tooltipmodal" tabindex="-1" role="dialog"
                            aria-labelledby="tooltipmodal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tooltip and popover modal</h5>
                                        <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>Popover in a modal</h5>
                                        <p class="mt-2">This <a class="btn btn-success popover-test btn-sm"
                                                href="#" role="button" title="this is amazing content"
                                                data-bs-toggle="popover">button</a> triggers a popover on click.</p>
                                        <hr>
                                        <h5>Tooltips in a modal</h5>
                                        <p class="mt-2"><a class="tooltip-test font-primary" href="#"
                                                title="Tooltip" data-bs-toggle="tooltip">This link</a> and <a
                                                class="tooltip-test font-primary" href="#" title="Tooltip"
                                                data-bs-toggle="tooltip">that link</a> have tooltips on hover.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-primary" type="button">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--varying modal content-->
                        <button class="btn btn-primary px-xl-2 px-xxl-3" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModalgetbootstrap" data-whatever="@getbootstrap">Open modal for
                            Edmin</button>
                        <div class="modal fade" id="exampleModalgetbootstrap" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalgetbootstrap" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-toggle-wrapper social-profile text-start dark-sign-up">
                                        <h3 class="modal-header justify-content-center border-0">EDMIN SIGN-UP</h3>
                                        <div class="modal-body">
                                            <form class="row g-3 needs-validation" novalidate="">
                                                <div class="col-md-6">
                                                    <label class="form-label" for="validationCustom01">First name</label>
                                                    <input class="form-control" id="validationCustom01" type="text"
                                                        placeholder="Enter your name" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label" for="validationCustom02">Last name</label>
                                                    <input class="form-control" id="validationCustom02" type="text"
                                                        placeholder="Enter your surname" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="exampleFormControlInput1">Email
                                                            address</label>
                                                        <input class="form-control" id="exampleFormControlInput1"
                                                            type="email" placeholder="Edmintheme@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" id="flexCheckDefault"
                                                            type="checkbox" value="">
                                                        <label class="form-check-label d-block mb-0"
                                                            for="flexCheckDefault">You accept our Terms and Privacy Policy
                                                            by clicking Submit below.</label>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Sign Up</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Sizes modal</h4>
                        <p class="desc mb-0 mt-1"><span>Modals have three optional sizes, available via modifier classes to
                                be placed on a</span><code>modal-dialog</code><span></span></p>
                    </div>
                    <div class="card-body badge-spacing">
                        <!--full screen modal-->
                        <div class="btn btn-secondary" data-bs-toggle="modal"
                            data-bs-target=".bd-example-modal-fullscreen">Full Screen Modal</div>
                        <div class="modal fade bd-example-modal-fullscreen" tabindex="-1" role="dialog"
                            aria-labelledby="myFullLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myFullLargeModalLabel">Extra large modal</h4>
                                        <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body dark-modal">
                                        <div class="large-modal-header">
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-right') }}">
                                                </use>
                                            </svg>
                                            <h6>Web design </h6>
                                        </div>
                                        <p class="modal-padding-space">We build specialised websites for companies, list
                                            them on digital directories, and set up a sales funnel to boost ROI.</p>
                                        <div class="large-modal-header">
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-right') }}">
                                                </use>
                                            </svg>
                                            <h6>Content marketing </h6>
                                        </div>
                                        <p class="modal-padding-space">Through better opportunities and knowledgeable
                                            marketing strategies, we aid business funnel. We won't only hit the target;
                                            instead, we'll aim higher and surpass the objectives.</p>
                                        <div class="large-modal-header">
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-right') }}">
                                                </use>
                                            </svg>
                                            <h6>PPC </h6>
                                        </div>
                                        <p class="modal-padding-space">Customized advertising to increase visitors and
                                            improve conversion. To increase retention, identify the correct audience and
                                            remarket to them.</p>
                                        <div class="large-modal-header">
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-right') }}">
                                                </use>
                                            </svg>
                                            <h6>UX designer </h6>
                                        </div>
                                        <p class="modal-padding-space">The capacity to comprehend and experience other
                                            people's feelings is known as empathy. A positive consumer experience is
                                            prioritised by UX. The finest UX designers spend time studying individuals and
                                            their tendencies because of this. Designers may produce goods that genuinely
                                            engage and excite customers by having a thorough understanding of the end
                                            consumers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Extra large modal-->
                        <div class="btn btn-info" data-bs-toggle="modal" data-bs-target=".bd-example-modal-xl">Extra
                            large Modal</div>
                        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myLargeModalLabel">Extra large modal</h4>
                                        <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body dark-modal">
                                        <div class="large-modal-header">
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-right') }}">
                                                </use>
                                            </svg>
                                            <h6>Web design </h6>
                                        </div>
                                        <p class="modal-padding-space">We build specialised websites for companies, list
                                            them on digital directories, and set up a sales funnel to boost ROI.</p>
                                        <div class="large-modal-header">
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-right') }}">
                                                </use>
                                            </svg>
                                            <h6>Content marketing </h6>
                                        </div>
                                        <p class="modal-padding-space">Through better opportunities and knowledgeable
                                            marketing strategies, we aid business funnel. We won't only hit the target;
                                            instead, we'll aim higher and surpass the objectives.</p>
                                        <div class="large-modal-header">
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-right') }}">
                                                </use>
                                            </svg>
                                            <h6>PPC </h6>
                                        </div>
                                        <p class="modal-padding-space">Customized advertising to increase visitors and
                                            improve conversion. To increase retention, identify the correct audience and
                                            remarket to them.</p>
                                        <div class="large-modal-header">
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-right') }}">
                                                </use>
                                            </svg>
                                            <h6>UX designer </h6>
                                        </div>
                                        <p class="modal-padding-space">The capacity to comprehend and experience other
                                            people's feelings is known as empathy. A positive consumer experience is
                                            prioritised by UX. The finest UX designers spend time studying individuals and
                                            their tendencies because of this. Designers may produce goods that genuinely
                                            engage and excite customers by having a thorough understanding of the end
                                            consumers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Large modal-->
                        <button class="btn btn-success" type="button" data-bs-toggle="modal"
                            data-bs-target=".bd-example-modal-lg">Large Modal</button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                            aria-labelledby="myExtraLargeModal" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myExtraLargeModal">Large modal</h4>
                                        <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body dark-modal">
                                        <div class="large-modal-header">
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-right') }}">
                                                </use>
                                            </svg>
                                            <h6>Start with your goals </h6>
                                        </div>
                                        <p class="modal-padding-space mb-0">No matter how talented you are as a content
                                            writer or creator, you will always fail if you don't have a clear set of goals.
                                        </p>
                                        <p class="modal-padding-space mb-0">First of all, without goals, there is no way to
                                            determine your success. Additionally, you lack direction.</p>
                                        <p class="modal-padding-space mb-0">Together with your team, respond to the
                                            following questions to make sure they are:</p>
                                        <div class="large-modal-body">
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#corner-up-right') }}">
                                                </use>
                                            </svg>
                                            <p class="ps-1">What must you achieve, and by when?</p>
                                        </div>
                                        <div class="large-modal-body">
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#corner-up-right') }}">
                                                </use>
                                            </svg>
                                            <p class="ps-1">How will you evaluate your level of success?</p>
                                        </div>
                                        <div class="large-modal-body">
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#corner-up-right') }}">
                                                </use>
                                            </svg>
                                            <p class="ps-1">Can you accomplish it with the available resources?</p>
                                        </div>
                                        <div class="large-modal-body">
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#corner-up-right') }}">
                                                </use>
                                            </svg>
                                            <p class="ps-1">Does it advance your core business aims? </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Small modal-->
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                            data-bs-target=".bd-example-modal-sm">Small Modal</button>
                        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog"
                            aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                        <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body dark-modal">
                                        <div class="large-modal-header">
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-right') }}">
                                                </use>
                                            </svg>
                                            <h6>Web design </h6>
                                        </div>
                                        <p class="modal-padding-space">We build specialised websites for companies, list
                                            them on digital directories, and set up a sales funnel to boost ROI.</p>
                                        <div class="large-modal-header">
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-right') }}">
                                                </use>
                                            </svg>
                                            <h6>Content marketing </h6>
                                        </div>
                                        <p class="modal-padding-space">Through better opportunities and knowledgeable
                                            marketing strategies, we aid business funnel. We won't only hit the target;
                                            instead, we'll aim higher and surpass the objectives.</p>
                                        <div class="large-modal-header">
                                            <svg class="feather">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-right') }}">
                                                </use>
                                            </svg>
                                            <h6>PPC </h6>
                                        </div>
                                        <p class="modal-padding-space">Customized advertising to increase visitors and
                                            improve conversion. To increase retention, identify the correct audience and
                                            remarket to them.</p>
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
                        <h4>Fullscreen modal</h4>
                        <p class="desc mb-0 mt-1"><span>Another override is the option to pop up a modal that covers the
                                user viewport, available via modifier classes that are placed on
                                a</span><code>.modal-dialog</code><span></span></p>
                    </div>
                    <div class="card-body badge-spacing">
                        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModalfullscreen">Fullscreen modal</button>
                        <!-- Full Screen Modal-->
                        <div class="modal fade" id="exampleModalfullscreen" tabindex="-1"
                            aria-labelledby="fullScreenModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="fullScreenModalLabel">Full screen modal</h1>
                                        <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body dark-modal">
                                        <div class="large-modal-header">
                                            <svg class="feather stroke-primary">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-right') }}">
                                                </use>
                                            </svg>
                                            <h6>Web design </h6>
                                        </div>
                                        <p class="modal-padding-space">We build specialised websites for companies, list
                                            them on digital directories, and set up a sales funnel to boost ROI.</p>
                                        <div class="modal-details">
                                            <div class="web-content">
                                                <h6>Web designer</h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>For a site to be successful, a designer must be able to
                                                            communicate their ideas, chat with a firm about what they want,
                                                            and inquire about the target audience.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>As a web designer, you either prefer to work freelance for
                                                            several different businesses at once or you may choose to work
                                                            for just one. In either case, you'll need good time management
                                                            skills to keep several projects moving forward.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Although a designer doesn't write the code that makes a site
                                                            work, it doesn't hurt to have a basic understanding of HTML or
                                                            CSS to make minor adjustments to a site. You'll find it simpler
                                                            to edit templates, improve typefaces, or change item placements
                                                            if you have a basic understanding of how things work.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>
                                                            Most businesses employ a certain font or typography so that
                                                            clients can quickly distinguish them from their rivals. Since
                                                            designers now have access to a wider variety of fonts, firms may
                                                            more easily and precisely communicate their brands through
                                                            typography.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="web-content">
                                                <h6>UX designer </h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>User research, persona creation, building wireframes and
                                                            interactive prototypes, and testing ideas are among the common
                                                            tasks of a UX designer. These duties can differ greatly between
                                                            organizations.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Create solutions that will be helpful for the issues and
                                                            situations that exist right now, not for those that will. With
                                                            the right materials, assist people in organizing their time,
                                                            completing things more quickly, and optimizing it.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Based on the data received from users, improve them. Adapt
                                                            existing solutions to the requirements, hopes, difficulties, and
                                                            expectations of users.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Keep in mind that you are creating solutions to particular
                                                            challenges for a particular population living in a particular
                                                            habitat. Always remember to correctly contextualise your
                                                            thoughts and determine whether they are actually appropriate for
                                                            the situation. It's sometimes necessary to concede that a
                                                            digital solution is not the most appropriate choice in a certain
                                                            circumstance.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-primary" type="button">Save </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-info" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModalfullscreensm">Fullscreen below sm</button>
                        <!-- Full screen below sm-->
                        <div class="modal fade" id="exampleModalfullscreensm" tabindex="-1"
                            aria-labelledby="smModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen-sm-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="smModalLabel">Full screen below sm</h1>
                                        <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body dark-modal">
                                        <div class="large-modal-header">
                                            <svg class="feather stroke-primary">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-right') }}">
                                                </use>
                                            </svg>
                                            <h6>Web design </h6>
                                        </div>
                                        <p class="modal-padding-space">We build specialised websites for companies, list
                                            them on digital directories, and set up a sales funnel to boost ROI.</p>
                                        <div class="modal-details">
                                            <div class="web-content">
                                                <h6>Wed designer</h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>For a site to be successful, a designer must be able to
                                                            communicate their ideas, chat with a firm about what they want,
                                                            and inquire about the target audience.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Most businesses employ a certain font or typography so that
                                                            clients can quickly distinguish them from their rivals. Since
                                                            designers now have access to a wider variety of fonts, firms may
                                                            more easily and precisely communicate their brands through
                                                            typography.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="web-content">
                                                <h6>UX designer </h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>User research, persona creation, building wireframes and
                                                            interactive prototypes, and testing ideas are among the common
                                                            tasks of a UX designer. These duties can differ greatly between
                                                            organizations.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Keep in mind that you are creating solutions to particular
                                                            challenges for a particular population living in a particular
                                                            habitat. Always remember to correctly contextualise your
                                                            thoughts and determine whether they are actually appropriate for
                                                            the situation. It's sometimes necessary to concede that a
                                                            digital solution is not the most appropriate choice in a certain
                                                            circumstance.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-primary" type="button">Save changes </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-success" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModalfullscreen-md">Fullscreen below md</button>
                        <!-- Full screen below md-->
                        <div class="modal fade" id="exampleModalfullscreen-md" tabindex="-1"
                            aria-labelledby="mdModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="mdModalLabel">Full screen below md</h1>
                                        <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body dark-modal">
                                        <div class="large-modal-header">
                                            <svg class="feather stroke-primary">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-right') }}">
                                                </use>
                                            </svg>
                                            <h6>Web design </h6>
                                        </div>
                                        <p class="modal-padding-space">We build specialised websites for companies, list
                                            them on digital directories, and set up a sales funnel to boost ROI.</p>
                                        <div class="modal-details">
                                            <div class="web-content">
                                                <h6>Wed designer</h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>For a site to be successful, a designer must be able to
                                                            communicate their ideas, chat with a firm about what they want,
                                                            and inquire about the target audience.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Most businesses employ a certain font or typography so that
                                                            clients can quickly distinguish them from their rivals. Since
                                                            designers now have access to a wider variety of fonts, firms may
                                                            more easily and precisely communicate their brands through
                                                            typography.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="web-content">
                                                <h6>UX designer </h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>User research, persona creation, building wireframes and
                                                            interactive prototypes, and testing ideas are among the common
                                                            tasks of a UX designer. These duties can differ greatly between
                                                            organizations.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Keep in mind that you are creating solutions to particular
                                                            challenges for a particular population living in a particular
                                                            habitat. Always remember to correctly contextualise your
                                                            thoughts and determine whether they are actually appropriate for
                                                            the situation. It's sometimes necessary to concede that a
                                                            digital solution is not the most appropriate choice in a certain
                                                            circumstance.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-primary" type="button">Save changes </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-warning" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModalfullscreen-lg">Fullscreen below lg</button>
                        <!-- Full screen below lg-->
                        <div class="modal fade" id="exampleModalfullscreen-lg" tabindex="-1"
                            aria-labelledby="lgModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen-lg-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="lgModalLabel">Full screen below lg</h1>
                                        <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body dark-modal">
                                        <div class="large-modal-header">
                                            <svg class="feather stroke-primary">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-right') }}">
                                                </use>
                                            </svg>
                                            <h6>Web design </h6>
                                        </div>
                                        <p class="modal-padding-space">We build specialised websites for companies, list
                                            them on digital directories, and set up a sales funnel to boost ROI.</p>
                                        <div class="modal-details">
                                            <div class="web-content">
                                                <h6>Wed designer</h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>For a site to be successful, a designer must be able to
                                                            communicate their ideas, chat with a firm about what they want,
                                                            and inquire about the target audience.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Most businesses employ a certain font or typography so that
                                                            clients can quickly distinguish them from their rivals. Since
                                                            designers now have access to a wider variety of fonts, firms may
                                                            more easily and precisely communicate their brands through
                                                            typography.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="web-content">
                                                <h6>UX Designer </h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>User research, persona creation, building wireframes and
                                                            interactive prototypes, and testing ideas are among the common
                                                            tasks of a UX designer. These duties can differ greatly between
                                                            organizations.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Keep in mind that you are creating solutions to particular
                                                            challenges for a particular population living in a particular
                                                            habitat. Always remember to correctly contextualise your
                                                            thoughts and determine whether they are actually appropriate for
                                                            the situation. It's sometimes necessary to concede that a
                                                            digital solution is not the most appropriate choice in a certain
                                                            circumstance.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-primary" type="button">Save changes </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModalfullscreen-xl">Fullscreen below xl</button>
                        <!-- Full screen below xl-->
                        <div class="modal fade" id="exampleModalfullscreen-xl" tabindex="-1"
                            aria-labelledby="xlModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen-xl-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="xlModalLabel">Full screen below xl</h1>
                                        <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body dark-modal">
                                        <div class="large-modal-header">
                                            <svg class="feather stroke-primary">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-right') }}">
                                                </use>
                                            </svg>
                                            <h6>Web design </h6>
                                        </div>
                                        <p class="modal-padding-space">We build specialised websites for companies, list
                                            them on digital directories, and set up a sales funnel to boost ROI.</p>
                                        <div class="modal-details">
                                            <div class="web-content">
                                                <h6>Wed designer</h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>For a site to be successful, a designer must be able to
                                                            communicate their ideas, chat with a firm about what they want,
                                                            and inquire about the target audience.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Most businesses employ a certain font or typography so that
                                                            clients can quickly distinguish them from their rivals. Since
                                                            designers now have access to a wider variety of fonts, firms may
                                                            more easily and precisely communicate their brands through
                                                            typography.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="web-content">
                                                <h6>UX designer </h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>User research, persona creation, building wireframes and
                                                            interactive prototypes, and testing ideas are among the common
                                                            tasks of a UX designer. These duties can differ greatly between
                                                            organizations.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Keep in mind that you are creating solutions to particular
                                                            challenges for a particular population living in a particular
                                                            habitat. Always remember to correctly contextualise your
                                                            thoughts and determine whether they are actually appropriate for
                                                            the situation. It's sometimes necessary to concede that a
                                                            digital solution is not the most appropriate choice in a certain
                                                            circumstance.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-primary" type="button">Save changes </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-danger" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModalfullscreen-xxl">Fullscreen below xxl</button>
                        <!-- Full screen below xxl-->
                        <div class="modal fade" id="exampleModalfullscreen-xxl" tabindex="-1"
                            aria-labelledby="xxlModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen-xxl-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="xxlModalLabel">Full screen below xxl</h1>
                                        <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body dark-modal">
                                        <div class="large-modal-header">
                                            <svg class="feather stroke-primary">
                                                <use
                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevrons-right') }}">
                                                </use>
                                            </svg>
                                            <h6>Web design </h6>
                                        </div>
                                        <p class="modal-padding-space">We build specialised websites for companies, list
                                            them on digital directories, and set up a sales funnel to boost ROI.</p>
                                        <div class="modal-details">
                                            <div class="web-content">
                                                <h6>Wed designer</h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>For a site to be successful, a designer must be able to
                                                            communicate their ideas, chat with a firm about what they want,
                                                            and inquire about the target audience.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Most businesses employ a certain font or typography so that
                                                            clients can quickly distinguish them from their rivals. Since
                                                            designers now have access to a wider variety of fonts, firms may
                                                            more easily and precisely communicate their brands through
                                                            typography.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="web-content">
                                                <h6>UX designer </h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>User research, persona creation, building wireframes and
                                                            interactive prototypes, and testing ideas are among the common
                                                            tasks of a UX designer. These duties can differ greatly between
                                                            organizations.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="feather stroke-primary">
                                                            <use
                                                                href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right-circle') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Keep in mind that you are creating solutions to particular
                                                            challenges for a particular population living in a particular
                                                            habitat. Always remember to correctly contextualise your
                                                            thoughts and determine whether they are actually appropriate for
                                                            the situation. It's sometimes necessary to concede that a
                                                            digital solution is not the most appropriate choice in a certain
                                                            circumstance.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-primary" type="button">Save changes </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Centered modal </h4>
                        <p class="desc mb-0 mt-1"><span>Use the </span><code>.modal-dialog-centered , data-bs-target
                            </code><span>through centered modal.</span></p>
                    </div>
                    <div class="card-body">
                        <!--Centered modal-->
                        <button class="btn btn-success" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModalCenter1">Vertically centered</button>
                        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenter1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="modal-toggle-wrapper">
                                            <ul class="modal-img">
                                                <li> <img src="{{ asset('assets/images/gif/danger.gif') }}" alt="error"></li>
                                            </ul>
                                            <h4 class="text-center pb-2">Ohh! Something went wrong!</h4>
                                            <p class="text-center">Attackers on malicious activity may trick you into doing
                                                something dangrous like installing software or revealing your personal
                                                informations.</p>
                                            <button class="btn btn-secondary d-flex m-auto" type="button"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Toggle between modals </h4>
                        <p class="desc mb-0 mt-1"><span>Toggle between multiple modals with some clever placement of
                                the</span><code>data-bs-target , data-bs-toggle</code><span> attributes.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                            aria-labelledby="exampleModalToggle" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="modal-toggle-wrapper">
                                            <ul class="modal-img">
                                                <li><img src="{{ asset('assets/images/gif/whatapp.gif') }}" alt="whatsapp"></li>
                                                <li><img src="{{ asset('assets/images/gif/instagram.gif') }}" alt="instagram"></li>
                                                <li><img src="{{ asset('assets/images/gif/facebook.gif') }}" alt="facebook"></li>
                                            </ul>
                                            <h6>Remove your complete account from your phone or tablet to sign out of the
                                                Gmail app.</h6>
                                            <button class="btn btn-dark rounded-pill w-100 mt-4"
                                                data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Connect new
                                                account</button>
                                            <button class="btn rounded-pill w-100 pb-0 dark-toggle-btn mt-2"
                                                type="button" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
                            aria-labelledby="exampleModalToggle2" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="modal-toggle-wrapper">
                                            <ul class="modal-img">
                                                <li> <img src="{{ asset('assets/images/gif/logout.gif') }}" alt="logout"></li>
                                            </ul>
                                            <h4 class="pt-3 text-center">Already leaving??</h4>
                                            <p class="text-center">Are you sure want to logout this dashboard?</p><span
                                                class="d-block text-center mb-4"> Not a member?<a class="ms-1"
                                                    href="{{ route('admin.ecommerce_dashboard') }}">Register</a></span>
                                            <button class="btn btn-dark d-flex m-auto" type="button"
                                                data-bs-dismiss="modal">Yes, Log out</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><a class="btn btn-dark" data-bs-toggle="modal" href="#exampleModalToggle"
                            role="button">Open first modal</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-xl-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Static Backdrop Modal</h4>
                        <p class="desc mb-0 mt-1"><span>When backdrop is set to static, the modal will not close when
                                clicking outside of it. Click the button below to try it.</span><code></code><span></span>
                        </p>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">Static backdrop modal</button>
                        <!-- Modal-->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content dark-sign-up">
                                    <div class="modal-body social-profile text-start">
                                        <div class="modal-toggle-wrapper">
                                            <h4>Edmin Login</h4>
                                            <p>
                                                Fill in your information below to continue.</p>
                                            <form class="row g-3">
                                                <div class="col-md-12">
                                                    <label class="form-label" for="inputEmail4">Email</label>
                                                    <input class="form-control" id="inputEmail4" type="email"
                                                        placeholder="Enter Your Email">
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="form-label" for="inputPassword4">Password</label>
                                                    <input class="form-control" id="inputPassword4" type="password"
                                                        placeholder="Enter Your Password">
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="gridCheck" type="checkbox">
                                                        <label class="form-check-label d-block mb-0" for="gridCheck">Check
                                                            me out</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary" type="submit"
                                                        data-bs-dismiss="modal">Sign in </button>
                                                </div>
                                            </form>
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
                        <h4>edmin custom modals</h4>
                        <p class="desc mb-0 mt-1"><span>Custom Modal make by edmin.</span><code></code><span></span></p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xl-4 col-md-6 custom-alert text-center">
                                <div class="card-wrapper solid-border rounded-3 h-100">
                                    <div class="edmin-demo-img">
                                        <ul class="dot-group pb-3 pt-0">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div class="title-wrapper pb-3 modal-heading">
                                            <h4 class="theme-name mb-0"><span>Modal 1 -</span>Profile Modal</h4>
                                            <p>Example of edmin dashboard profile card.</p>
                                        </div>
                                        <div class="overflow-hidden"><img class="img-fluid"
                                                src="{{ asset('assets/images/alert/social.png') }}" alt="social">
                                            <button class="btn btn-primary mx-auto mt-3" type="button"
                                                data-bs-toggle="modal" data-bs-target="#exampleModallaptop1">Click
                                                Out</button>
                                        </div>
                                        <div class="modal fade" id="exampleModallaptop1" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModallaptop1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="col-xl-12">
                                                        <div class="card social-profile mb-0">
                                                            <div class="card-body">
                                                                <div class="social-img-wrap">
                                                                    <div class="social-img"><img
                                                                            src="{{ asset('assets/images/avatar/1.jpg') }}"
                                                                            alt="profile"></div>
                                                                    <div class="edit-icon">
                                                                        <div class="icon">
                                                                            <svg class="feather stroke-primary">
                                                                                <use
                                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}">
                                                                                </use>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="social-details">
                                                                    <h4 class="mb-1"><a class="f-20"
                                                                            href="{{ route('admin.social_app') }}">Brooklyn Simmons</a>
                                                                    </h4><span class="font-light">@brookly.simmons</span>
                                                                    <ul class="social-follow">
                                                                        <li>
                                                                            <h4 class="mb-0">1,908</h4><span
                                                                                class="font-light">Posts</span>
                                                                        </li>
                                                                        <li>
                                                                            <h4 class="mb-0">34.0k</h4><span
                                                                                class="font-light">Followers</span>
                                                                        </li>
                                                                        <li>
                                                                            <h4 class="mb-0">897</h4><span
                                                                                class="font-light">Following</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 custom-alert text-center">
                                <div class="card-wrapper solid-border rounded-3 h-100">
                                    <div class="edmin-demo-img">
                                        <ul class="dot-group pb-3 pt-0">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div class="title-wrapper pb-3 modal-heading">
                                            <h4 class="theme-name mb-0"><span>Modal 2 - </span>Result Modal</h4>
                                            <p>Example of edmin login form.</p>
                                        </div>
                                        <div class="overflow-hidden"><img class="img-fluid"
                                                src="{{ asset('assets/images/alert/learning.png') }}" alt="learning">
                                            <button class="btn btn-primary mx-auto mt-3" type="button"
                                                data-bs-toggle="modal" data-bs-target="#exampleModallogin">Click
                                                Out</button>
                                        </div>
                                        <div class="modal fade" id="exampleModallogin" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModallogin" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content dark-sign-up">
                                                    <div class="modal-body social-profile text-start">
                                                        <div class="modal-toggle-wrapper">
                                                            <h4>Edmin Login</h4>
                                                            <p class="mb-3">
                                                                Fill in your information below to continue.</p>
                                                            <form class="row g-3">
                                                                <div class="col-md-12">
                                                                    <label class="form-label mb-1"
                                                                        for="inputEmailEnter">Email</label>
                                                                    <input class="form-control" id="inputEmailEnter"
                                                                        type="email" placeholder="Enter Your Email">
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <label class="form-label mb-1"
                                                                        for="inputPasswordEnter">Password</label>
                                                                    <input class="form-control" id="inputPasswordEnter"
                                                                        type="password" placeholder="Enter Your Password">
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-check ps-0">
                                                                        <input class="checkbox-primary" id="checkout"
                                                                            type="checkbox">
                                                                        <label class="form-check-label"
                                                                            for="checkout">Check me out</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <button class="btn btn-primary" type="submit"
                                                                        data-bs-dismiss="modal">Sign in </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12 custom-alert text-center">
                                <div class="card-wrapper solid-border rounded-3 h-100">
                                    <div class="edmin-demo-img">
                                        <ul class="dot-group pb-3 pt-0">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div class="title-wrapper pb-3 modal-heading">
                                            <h4 class="theme-name mb-0"><span>Modal 3 - </span>Balance Modal</h4>
                                            <p>Example of edmin dashboard balance card.</p>
                                        </div>
                                        <div class="overflow-hidden balance-modal"><img class="img-fluid"
                                                src="{{ asset('assets/images/alert/balance.png') }}" alt="balance">
                                            <button class="btn btn-primary mx-auto mt-3" type="button"
                                                data-bs-toggle="modal" data-bs-target="#exampleModalbalancebox">Click
                                                Out</button>
                                        </div>
                                        <div class="modal fade" id="exampleModalbalancebox" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalbalancebox" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="col-xl-12">
                                                        <div class="card balance-box mb-0">
                                                            <div class="card-body">
                                                                <div class="balance-profile">
                                                                    <div class="balance-img"><img
                                                                            src="{{ asset('assets/images/avatar/9.jpg') }}"
                                                                            alt="user vector"><a class="edit-icon"
                                                                            href="{{ route('admin.user_profile') }}">
                                                                            <div class="icon">
                                                                                <svg class="feather stroke-primary">
                                                                                    <use
                                                                                        href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#edit-2') }}">
                                                                                    </use>
                                                                                </svg>
                                                                            </div>
                                                                        </a></div><span class="font-light d-block">Your
                                                                        Balance </span>
                                                                    <h4 class="mt-1">$768,987.90</h4>
                                                                    <ul>
                                                                        <li>
                                                                            <div class="balance-item">
                                                                                <div
                                                                                    class="balance-icon-wrap bg-light-danger">
                                                                                    <div class="balance-icon bg-danger">
                                                                                        <div class="icon">
                                                                                            <svg class="feather">
                                                                                                <use
                                                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-down-right') }}">
                                                                                                </use>
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div> <span
                                                                                        class="f-12 font-light">Investment
                                                                                    </span>
                                                                                    <h4>78.8K</h4><span
                                                                                        class="badge badge-light-danger rounded-pill">-11.67%</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="balance-item">
                                                                                <div
                                                                                    class="balance-icon-wrap bg-light-success">
                                                                                    <div class="balance-icon bg-success">
                                                                                        <div class="icon">
                                                                                            <svg class="feather">
                                                                                                <use
                                                                                                    href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-up-right') }}">
                                                                                                </use>
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div> <span class="f-12 font-light">Cash
                                                                                        Back</span>
                                                                                    <h4>19.7K</h4><span
                                                                                        class="badge badge-light-success rounded-pill">+10.67%</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/popover-custom.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-custom.js') }}"></script>
    <script src="{{ asset('assets/js/validation-modal.js') }}"></script>
@endsection
