@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Toast</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Toast</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <!-- Live toast-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Live Toast</h4>
                        <p class="desc mb-0 mt-1"><span>Use the .hide class through</span><code>.hide and .show,
                                [top-0/bottom-0/start-0/end-0] </code><span>class through visible toast and given
                                directions.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="common-flex">
                            <button class="btn btn-primary" id="liveToastBtn" type="button">Top-right toast</button>
                            <div class="toast-container position-fixed top-0 end-0 p-3 toast-index toast-rtl">
                                <div class="toast hide toast fade" id="liveToast" role="alert" aria-live="assertive"
                                    aria-atomic="true">
                                    <div class="toast-header toast-img"><img class="rounded me-2"
                                            src="{{ asset('assets/images/avatar/9.jpg') }}" alt="profile"><strong class="me-auto">Edmin
                                            Theme</strong><small>5 min ago</small>
                                        <button class="btn-close" type="button" data-bs-dismiss="toast"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body toast-dark">Hello, I'm a web-designer.</div>
                                </div>
                            </div>
                            <button class="btn btn-secondary" id="liveToastBtn1" type="button">Bottom-right toast</button>
                            <div class="toast-container position-fixed bottom-0 end-0 p-3 toast-index toast-rtl">
                                <div class="toast hide toast fade" id="liveToast1" role="alert" aria-live="assertive"
                                    aria-atomic="true">
                                    <div class="d-flex justify-content-between alert-secondary">
                                        <div class="toast-body">Your time over after 5 minute.</div>
                                        <button class="btn-close btn-close-white me-2 m-auto" type="button"
                                            data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-warning" id="liveToastBtn2" type="button">Top-left toast</button>
                            <div class="toast-container position-fixed start-0 top-0 p-3 toast-index toast-rtl">
                                <div class="toast hide toast fade" id="liveToast2" role="alert" aria-live="assertive"
                                    aria-atomic="true">
                                    <div class="toast-header toast-img"><img class="rounded me-2"
                                            src="{{ asset('assets/images/avatar/9.jpg') }}" alt="profile"><strong class="me-auto">Edmin
                                            Theme</strong><small class="d-sm-block d-none">10 min ago</small>
                                        <button class="btn-close" type="button" data-bs-dismiss="toast"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body toast-dark"><strong class="font-success">Well done!</strong> You
                                        successfully read this important message.</div>
                                </div>
                            </div>
                            <button class="btn btn-success" id="liveToastBtn3" type="button">Bottom-left toast</button>
                            <div class="toast-container position-fixed start-0 bottom-0 p-3 toast-index toast-rtl">
                                <div class="toast hide toast fade" id="liveToast3" role="alert" aria-live="assertive"
                                    aria-atomic="true">
                                    <div class="toast-header toast-img"><img class="rounded me-2"
                                            src="{{ asset('assets/images/avatar/9.jpg') }}" alt="profile"><strong class="me-auto">Edmin
                                            Theme</strong>
                                        <button class="btn-close" type="button" data-bs-dismiss="toast"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body toast-dark">
                                        <h6 class="mb-2">Your account will be permanently deleted?</h6>
                                        <p class="mb-0">Do you intend to continue?</p>
                                        <div class="mt-2 pt-2 border-top d-flex gap-2">
                                            <button class="btn btn-dark btn-sm" type="button">I'm not sure</button>
                                            <button class="btn btn-danger btn-sm" type="button"
                                                data-bs-dismiss="toast">Remove My Account</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Color toast-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Colors Schemes</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.hide and .show </code><span>class through
                                visible toast.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="toast default-show-toast align-items-center text-light bg-tertiary border-0 fade show"
                            role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="d-flex justify-content-between">
                                <div class="toast-body">Your time over after 5 minute.</div>
                                <button class="btn-close btn-close-white me-2 m-auto" type="button"
                                    data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Stacking Toasts-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Stacking Toasts</h4>
                        <p class="desc mb-0 mt-1"><span>You can stack toasts by wrapping them in a toast container, which
                                will vertically add some spacing.</span><code>[stroke-*] </code><span>through change icons
                                colors.</span></p>
                    </div>
                    <div class="card-body toast-rtl">
                        <div class="toast-container position-static">
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <svg class="feather toast-icons stroke-primary">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#bell') }}"></use>
                                    </svg><strong class="me-auto">Edmin template</strong><small>just now</small>
                                    <button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body toast-dark">Hello, I'm a web-designer.</div>
                            </div>
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <svg class="feather toast-icons stroke-warning">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#bell') }}"></use>
                                    </svg><strong class="me-auto">Roxo theme</strong><small class="text-muted">2 sec
                                        ago</small>
                                    <button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body toast-dark">Hello, I'm a UX-designer.</div>
                            </div>
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <svg class="feather toast-icons stroke-danger">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#bell') }}"></use>
                                    </svg><strong class="me-auto">Zeta theme</strong><small class="text-muted">6 min
                                        ago</small>
                                    <button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body toast-dark">Hello, I'm a Software developer.</div>
                            </div>
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <svg class="feather toast-icons stroke-success">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#bell') }}"></use>
                                    </svg><strong class="me-auto">Edmin theme</strong><small class="text-muted">3 sec
                                        ago</small>
                                    <button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body toast-dark">Hello, I'm a professional web-designer.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Translucent Toasts-->
                <div class="card">
                    <div class="card-header">
                        <h4>Translucent Toasts</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.hide , .show</code><span>class through visible
                                toast and given directions.[toast-*]through change icons colors.</span></p>
                    </div>
                    <div class="card-body toast-rtl bg-dark">
                        <div class="toast-container">
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <svg class="feather toast-icons toast-info">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#disc') }}"></use>
                                    </svg><strong class="me-auto">Edmin template</strong><small
                                        class="d-sm-block d-none">11 mins ago</small>
                                    <button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body toast-dark"> Hello, I'm a web-designer.</div>
                            </div>
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <svg class="feather toast-icons toast-dark">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#disc') }}"></use>
                                    </svg><strong class="me-auto">Koho theme</strong><small class="d-sm-block d-none">1
                                        sec ago</small>
                                    <button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body toast-dark"> Hello, I'm a full-stack developer.</div>
                            </div>
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <svg class="feather toast-icons toast-secondary">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#disc') }}"></use>
                                    </svg><strong class="me-auto">Fastkart theme</strong><small
                                        class="font-danger d-sm-block d-none">just now</small>
                                    <button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body toast-dark"> Hello, I'm a UX-designer.</div>
                            </div>
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <svg class="feather toast-icons toast-success">
                                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#disc') }}"></use>
                                    </svg><strong class="me-auto">Enzo theme</strong><small class="d-sm-block d-none">44
                                        min ago</small>
                                    <button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body toast-dark"> Hello, I'm a penetration-tester.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- default Toasts-->
                <div class="card height_equal">
                    <div class="card-header pb-0">
                        <h4>Default Toasts</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.hide , .show</code><span>class through visible
                                toast.</span></p>
                    </div>
                    <div class="card-body toast-rtl">
                        <div class="toast default-show-toast toast show" role="alert" aria-live="assertive"
                            aria-atomic="true">
                            <div class="toast-header toast-img"><img class="rounded me-2"
                                    src="{{ asset('assets/images/avatar/9.jpg') }}" alt="profile"><strong class="me-auto">Edmin
                                    Template</strong><small class="d-sm-block d-none">10 min ago</small>
                                <button class="btn-close" type="button" data-bs-dismiss="toast"
                                    aria-label="Close"></button>
                            </div>
                            <div class="toast-body toast-dark"><strong class="font-success">Well done!</strong> You
                                successfully read this important message.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Unique Toasts-->
                <div class="card height_equal">
                    <div class="card-header pb-0">
                        <h4>Unique Toasts</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.hide , .show</code><span>class through visible
                                toast.</span></p>
                    </div>
                    <div class="card-body toast-rtl">
                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header toast-img"><img class="rounded me-2"
                                    src="{{ asset('assets/images/avatar/1.jpg') }}" alt="profile"><strong class="me-auto">Edmin
                                    template</strong>
                                <button class="btn-close" type="button" data-bs-dismiss="toast"
                                    aria-label="Close"></button>
                            </div>
                            <div class="toast-body toast-dark">
                                <h6 class="mb-2">Your account will be permanently deleted?</h6>
                                <p class="mb-0">Do you intend to continue?</p>
                                <div class="mt-2 pt-2 d-flex gap-2">
                                    <button class="btn btn-dark btn-sm" type="button">I'm not sure</button>
                                    <button class="btn btn-danger btn-sm" type="button" data-bs-dismiss="toast">Remove
                                        My Account</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Toast placement-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Toast Placement</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.hide , .show</code><span>class through visible
                                toast form-select through select any positions.</span></p>
                    </div>
                    <div class="card-body toast-rtl toast-dark">
                        <form>
                            <div class="mb-3">
                                <select class="form-select mt-2" id="selectToastPlacement">
                                    <option value="" selected="">Select a position...</option>
                                    <option value="top-0 start-0">Top left</option>
                                    <option value="top-0 start-50 translate-middle-x">Top center</option>
                                    <option value="top-0 end-0">Top right</option>
                                    <option value="top-50 start-0 translate-middle-y">Middle left</option>
                                    <option value="top-50 start-50 translate-middle">Middle center</option>
                                    <option value="top-50 end-0 translate-middle-y">Middle right</option>
                                    <option value="bottom-0 start-0">Bottom left</option>
                                    <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
                                    <option value="bottom-0 end-0">Bottom right</option>
                                </select>
                            </div>
                        </form>
                        <div class="bg-light position-relative bd-example-toasts" aria-live="polite" aria-atomic="true">
                            <div class="toast-container p-3 position-absolute" id="toastPlacement">
                                <div class="toast toast-fade show">
                                    <div class="toast-header toast-img"><img class="rounded me-2"
                                            src="{{ asset('assets/images/avatar/1.jpg') }}" alt="profile"><strong
                                            class="me-auto">Edmin template</strong><small class="d-sm-block d-none">25 min
                                            ago</small></div>
                                    <div class="toast-body toast-dark font-dark">
                                        <p class="toast-content"><em class="font-danger">Attackers</em> on malicious
                                            activity may trick you into doing something dangrous like installing software or
                                            revealing your personal informations.</p>
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
    <script src="{{ asset('assets/js/notify/custom-notify.js') }}"></script>
@endsection
