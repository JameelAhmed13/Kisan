@extends('others.others_layout.master')

@section('others_css')
@endsection

@section('others_content')
    <div class="container-fluid p-0 m-0">
        <div class="comingsoon comingsoon-bgimg">
            <div class="comingsoon-inner text-center"><img class="img-fluid for-light"
                    src="{{ asset('assets/images/logo/logo-login.png') }}" alt=""><img class="img-fluid for-dark m-auto"
                    src="{{ asset('assets/images/logo/dark-login-logo.png') }}" alt="">
                <h5>WE ARE COMING SOON</h5>
                <div class="countdown" id="clockdiv">
                    <ul>
                        <li><span class="time" id="days"></span><span class="title">days</span></li>
                        <li><span class="time" id="hours"></span><span class="title">Hours</span></li>
                        <li><span class="time" id="minutes"></span><span class="title">Minutes</span></li>
                        <li><span class="time" id="seconds"></span><span class="title">Seconds</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('others_scripts')
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
@endsection
