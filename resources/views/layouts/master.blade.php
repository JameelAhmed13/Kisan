<!DOCTYPE html>
<html lang="en" @if (Route::currentRouteName()=='admin.rtl_layout') dir="rtl" @endif>

<head>
    
    @include('layouts.head')
    <!-- Font awesome icon css -->
    @include('layouts.css')
</head>

@switch(Route::currentRouteName())

    @case('admin.box_layout')
        <body class="box-layout">
        @break

    @case('admin.rtl_layout')
        <body class="rtl">
        @break

    @case('admin.dark_layout')
        <body>
        @break

    @default
        <body>
@endswitch

    <!-- tap to top starts-->
    <div class="tap-top">
        <svg class="feather">
            <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-up') }}"></use>
        </svg>
    </div>
    <!-- tap to tap ends--> 

    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
    <!-- loader end-->

    <!-- page-wrapper Start-->
    <main class="page-wrapper compact-wrapper" id="pageWrapper">

        <!-- Page header start -->
        @include('layouts.header')
        <!-- Page header end-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page sidebar start-->
            <div class="overlay"></div>
            @include('layouts.sidebar')
            <!-- Page sidebar end-->

            <div class="page-body">
                @yield('main_content')
            </div>
            
            <!-- footer start-->
            @include('layouts.footer')
            <!-- footer end-->

        </div>
    </main>

    {{-- scripts --}}
    @include('layouts.script')
    @include('admin.inc.alerts')
    {{-- end scripts --}}

</body>
</html>
