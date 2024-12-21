<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Edmin admin is super flexible, powerful, clean &amp; modern responsive bootstrap admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Edmin admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <title>Edmin - Premium Admin Template</title>
    <!-- Favicon icon-->
    <link rel="icon" href="{{ asset('assets/images/favicon/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.png') }}" type="image/x-icon">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    @include('others.others_layout.css')

</head>

<body>
    <!-- tap on top starts-->
    <div class="tap-top">
        <svg class="feather">
            <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-up') }}"></use>
        </svg>
    </div>
    <!-- tap on tapS ends-->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        @yield('others_content')
    </div>
    <!-- page-wrapper end-->

    @include('others.others_layout.script')
</body>
</html>
