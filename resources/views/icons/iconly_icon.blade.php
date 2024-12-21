@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/wowjs/css/libs/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Iconly Sprite</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Icons</li>
                        <li class="breadcrumb-item active">Iconly Sprite</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <!-- Iconly icon-->
                <div class="card">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h4>Iconly Icons</h4>
                    </div>
                    <div class="card-body">
                        <div class="row icon-event iconly-icons icon-lists">
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Search') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Search</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Folder') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Folder</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Wallet') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Wallet</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Pie') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Pie</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Bookmark') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Bookmark</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Category') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Category</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Home</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Bell') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Bell</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Chat') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Chat</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Heart') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Heart</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Paper') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Paper</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Paper-plus') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Paper-plus</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Chat') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Chat</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Send') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Send</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Password') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Password</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Swap') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Swap</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Work') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Work</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Activity') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Activity</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Calendar') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Calendar</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Message') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Message</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Moon') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Moon</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Video') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Video</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Icon-plus') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Icon-plus</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Chart') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Chart</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Game') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Game</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Bag') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Bag</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Ticket-star') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Ticket-star</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Discount') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Discount</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Buy') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Buy</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Info-circle') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Info-circle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Close-square') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Close-square</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Tick-square') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Tick-square</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Discovery') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Discovery</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Location') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Location</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Document') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Document</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Setting') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Setting</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Time-square') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Time-square</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Time-circle') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Time-circle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Star') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Star</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Ticket') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Ticket</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Camera') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Camera</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Profile') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Profile</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Add-user') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Add-user</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Login') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Login</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Logout') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Logout</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Download') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Download</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Upload') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Upload</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Trash') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Trash</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Edit-line') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Edit-line</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Edit') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Edit</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Play') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Play</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Show') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Show</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Hide') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Hide</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Filter') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Filter</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Gallery') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Gallery</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Contacts') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Contacts</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Lock') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Lock</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Unlock') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Unlock</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Scan') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Scan</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#plus') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>plus</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#minus') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>minus</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#More-box') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>More-box</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Danger') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Danger</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Shield') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Shield</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Filter-2') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Filter-2</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Pin') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Pin</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>right-3</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#right-4') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>right-4</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Arrow-up-square') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Arrow-up-square</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Arrow-up-circle') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Arrow-up-circle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Arrow-up-3') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Arrow-up-3</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Arrow-up-2') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Arrow-up-2</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Arrow-up-1') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Arrow-up-1</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Arrow-right-square') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Arrow-right-square</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Arrow-right-circle') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Arrow-right-circle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Arrow-right-3') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Arrow-right-3</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Arrow-right-2') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Arrow-right-2</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Arrow-right-1') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Arrow-right-1</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Arrow-left-square') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Arrow-left-square</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Arrow-left-circle') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Arrow-left-circle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Arrow-left-3') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Arrow-left-3</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Arrow-left-2') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Arrow-left-2</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Arrow-left-1') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Arrow-left-1</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Arrow-down-square') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Arrow-down-square</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Arrow-down-circle') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Arrow-down-circle</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Arrow-down-3') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Arrow-down-3</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Arrow-down-2') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Arrow-down-2</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-4">
                                <div class="card d-flex align-items-center flex-column default-border">
                                    <svg class="svg-menu">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#Arrow-down-1') }}"></use>
                                    </svg>
                                    <div class="flex-grow-1">
                                        <h6>Arrow-down-1</h6>
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
    <div class="icon-hover-bottom position-fixed fa-fa-icon-show-div">
        <div class="container-fluid">
            <div class="row">
                <div class="icon-popup">
                    <div class="close-icon"><i class="icofont icofont-close"></i></div>
                    <div class="icon-first"><i class="fa-2x" id="icon_main"></i></div>
                    <div class="icon-class">
                        <label class="icon-title">Class</label><span id="fclass1"></span>
                    </div>
                    <div class="icon-last icon-last">
                        <label class="icon-title">Markup</label>
                        <div class="form-inline">
                            <div class="form-group">
                                <input class="inp-val form-control m-r-10" id="input_copy" type="text" value=""
                                    readonly="readonly">
                                <button class="btn btn-primary notification" onclick="myFunction()">Copy text</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/vendors/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/iconly_icon.js') }}"></script>
    <script src="{{ asset('assets/js/icons/icons-notify.js') }}"></script>
@endsection
