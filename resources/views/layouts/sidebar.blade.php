<aside class="page-sidebar" data-sidebar-layout="stroke-svg">
    <div class="left-arrow" id="left-arrow">
        <svg class="feather">
            <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-left') }}"></use>
        </svg>
    </div>
    <div id="sidebar-menu">
        <ul class="sidebar-menu" id="simple-bar">
            <li class="pin-title sidebar-list p-0">
                <h5 class="sidebar-main-title">Pinned</h5>
            </li>
            <li class="line pin-line"></li>
            <li class="sidebar-main-title">General</li>
            <li class="sidebar-list">
                <svg class="pinned-icon">
                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Pin') }}"></use>
                </svg><a class="sidebar-link" href="javascript:void(0)">
                    <svg class="stroke-icon">
                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                    </svg><span>Dashboard</span>
                    <div class="badge badge-primary rounded-pill">1</div>
                    <svg class="feather">
                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevron-right') }}"></use>
                    </svg>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('admin.dashboard') }}">
                            <svg class="svg-menu">
                                <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                            </svg>Default</a></li>

                </ul>
            </li>

            <li class="line"> </li>
            <li class="sidebar-main-title">Management</li>
            <li class="sidebar-list">
                <svg class="pinned-icon">
                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Pin') }}"></use>
                </svg><a class="sidebar-link" href="{{route('admin.kisan.index')}}">
                    <svg class="stroke-icon">
                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Tick-square') }}"></use>
                    </svg><span>Kisaan </span></a>
            </li>

            <li class="line"> </li>
            <li class="sidebar-main-title">Pages</li>
            <li class="sidebar-list">
                <svg class="pinned-icon">
                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Pin') }}"></use>
                </svg><a class="sidebar-link" href="{{route('admin.district.index')}}">
                    <svg class="stroke-icon">
                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Tick-square') }}"></use>
                    </svg><span>Districts </span></a>
                <svg class="pinned-icon">
                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Pin') }}"></use>
                </svg><a class="sidebar-link" href="{{route('admin.tehsil.index')}}">
                    <svg class="stroke-icon">
                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Tick-square') }}"></use>
                    </svg><span>Tehsils </span></a>
                <svg class="pinned-icon">
                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Pin') }}"></use>
                </svg><a class="sidebar-link" href="{{route('admin.uc.index')}}">
                    <svg class="stroke-icon">
                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Tick-square') }}"></use>
                    </svg><span>Ucs </span></a>
            </li>

            <li class="line"> </li>
            <li class="sidebar-main-title">Admin</li>
            <li class="sidebar-list">
                <svg class="pinned-icon">
                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Pin') }}"></use>
                </svg><a class="sidebar-link" href="javascript:void(0)">
                    <svg class="stroke-icon">
                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Document') }}"></use>
                    </svg><span>Authentication</span>
                    <svg class="feather">
                        <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevron-right') }}">
                        </use>
                    </svg></a>
                <ul class="sidebar-submenu">
                    {{--                    @can('user.index')--}}
                    <li><a href="{{ route('admin.user.index') }}">
                            <svg class="svg-menu">
                                <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                            </svg>Users Management
                        </a>
                    </li>
                    {{--                    @endcan--}}
                    {{--                    @can('role_index')--}}
                    <li><a href="{{ route('admin.role.index') }}">
                            <svg class="svg-menu">
                                <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                            </svg>Roles Management
                        </a>
                    </li>
                    {{--                    @endcan--}}

                </ul>
            </li>
        </ul>
    </div>
    <div class="right-arrow" id="right-arrow">
        <svg class="feather">
            <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right') }}"></use>
        </svg>
    </div>
</aside>
