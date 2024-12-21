@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Rating</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Rating</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4">
                <!-- Star rating-->
                <div class="card height_equal">
                    <div class="card-header pb-0">
                        <h4>Star Rating</h4>
                        <p class="desc mb-0 mt-1"><span>Rating is displayed using</span><code>.rating-star</code><span> id
                                using javascript.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="rating"><span class="rating-value"></span><i
                                class="rating-star fa-regular fa-star"></i><i class="rating-star fa-regular fa-star"></i><i
                                class="rating-star fa-regular fa-star"></i><i class="rating-star fa-regular fa-star"></i><i
                                class="rating-star fa-regular fa-star"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <!-- Face rating-->
                <div class="card height_equal">
                    <div class="card-header pb-0">
                        <h4>Rating with feedback</h4>
                        <p class="desc mb-0 mt-1"><span>Rating is displayed using</span><code>.rating-star</code><span> id
                                using javascript.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="heart-rating">
                            <div class="rating-system3">
                                <input id="star5_3" type="radio" name="rate3">
                                <label for="star5_3"></label>
                                <input id="star4_3" type="radio" name="rate3">
                                <label for="star4_3"></label>
                                <input id="star3_3" type="radio" name="rate3">
                                <label for="star3_3"></label>
                                <input id="star2_3" type="radio" name="rate3">
                                <label for="star2_3"></label>
                                <input id="star1_3" type="radio" name="rate3">
                                <label class="ms-1" for="star1_3"></label>
                                <div class="text"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <!-- Face rating-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Animated Rating</h4>
                        <p class="desc mb-0 mt-1"><span>Rating is displayed using</span><code>.rating-star</code><span> id
                                using javascript.</span></p>
                    </div>
                    <div class="card-body">
                        <ul class="feedback">
                            <li class="angry">
                                <div>
                                    <svg class="eye left">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#eye') }}"></use>
                                    </svg>
                                    <svg class="eye right">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#eye') }}"></use>
                                    </svg>
                                    <svg class="mouth">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#mouth') }}"></use>
                                    </svg>
                                </div>
                            </li>
                            <li class="sad">
                                <div>
                                    <svg class="eye left">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#eye') }}"></use>
                                    </svg>
                                    <svg class="eye right">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#eye') }}"></use>
                                    </svg>
                                    <svg class="mouth">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#mouth') }}"></use>
                                    </svg>
                                </div>
                            </li>
                            <li class="ok">
                                <div></div>
                            </li>
                            <li class="good active">
                                <div>
                                    <svg class="eye left">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#eye') }}"></use>
                                    </svg>
                                    <svg class="eye right">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#eye') }}"></use>
                                    </svg>
                                    <svg class="mouth">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#mouth') }}"></use>
                                    </svg>
                                </div>
                            </li>
                            <li class="happy">
                                <div>
                                    <svg class="eye left">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#eye') }}"></use>
                                    </svg>
                                    <svg class="eye right">
                                        <use href="{{ asset('assets/svg/iconly-sprite.svg#eye') }}"></use>
                                    </svg>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <!-- Number rating-->
                <div class="card">
                    <div class="card-body number-rating">
                        <div class="card rating_card mb-0">
                            <h4 class="title">How did we do?</h4>
                            <p>
                                Please let us know how we did with your support request. All feedback is appreciated
                                to help us improve our offering!
                            </p>
                            <ul class="ratings">
                                <li class="circle rating" data-rating="1">1</li>
                                <li class="circle rating" data-rating="2">2</li>
                                <li class="circle rating" data-rating="3">3</li>
                                <li class="circle rating" data-rating="4">4</li>
                                <li class="circle rating" data-rating="5">5</li>
                            </ul>
                            <button class="rating-button btn btn-secondary">Submit</button>
                            <!-- Rating state end-->
                        </div>
                        <div class="card back-card hidden mb-0">
                            <div class="illustration"><img src="{{ asset('assets/images/other-images/invoice.svg') }}"
                                    alt=""></div>
                            <p class="result"></p>
                            <div class="greet">
                                <h4>Thank you!</h4>
                                <p>
                                    We appreciate you taking the time to give a rating. If you ever need more support,
                                    don&rsquo;t hesitate to get in touch!
                                </p>
                            </div>
                            <!-- Thank you state end-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <!-- Star rating-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Slider Rating</h4>
                        <p class="desc mb-0 mt-1"><span>Use slider</span><code>form , .fr</code><span> to use emoji slider
                                ratings with hue gradient.</span></p>
                    </div>
                    <div class="card-body">
                        <form class="fr">
                            <label class="fr__label" for="face-rating">How was your experience?</label>
                            <div class="fr__face" role="img" aria-label="Straight face">
                                <div class="fr__face-right-eye" data-right=""></div>
                                <div class="fr__face-left-eye" data-left=""></div>
                                <div class="fr__face-mouth-lower" data-mouth-lower=""></div>
                                <div class="fr__face-mouth-upper" data-mouth-upper=""></div>
                            </div>
                            <input class="fr__input" id="face-rating" type="range" value="2.5" min="0"
                                max="5" step="0.1">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <!-- Emoji with message rating-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Emoji with message</h4>
                        <p class="desc mb-0 mt-1"><span>Use</span><code>.emoji-wrapper</code><span>add emoji with
                                messages.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="emoji-wrapper">
                            <input id="star-1" type="radio" name="rate">
                            <input id="star-2" type="radio" name="rate">
                            <input id="star-3" type="radio" name="rate">
                            <input id="star-4" type="radio" name="rate">
                            <input id="star-5" type="radio" name="rate">
                            <div class="content">
                                <div class="outer">
                                    <ul class="emojis">
                                        <li class="slideImg"><img src="{{ asset('assets/images/other-images/emoji/angry.png') }}"
                                                alt=""></li>
                                        <li><img src="{{ asset('assets/images/other-images/emoji/sad.png') }}" alt=""></li>
                                        <li><img src="{{ asset('assets/images/other-images/emoji/think.png') }}" alt=""></li>
                                        <li><img src="{{ asset('assets/images/other-images/emoji/smile.png') }}" alt=""></li>
                                        <li><img src="{{ asset('assets/images/other-images/emoji/love.png') }}" alt=""></li>
                                    </ul>
                                </div>
                                <div class="stars">
                                    <label class="star-1 fas fa-star" for="star-1"></label>
                                    <label class="star-2 fas fa-star" for="star-2"></label>
                                    <label class="star-3 fas fa-star" for="star-3"></label>
                                    <label class="star-4 fas fa-star" for="star-4"></label>
                                    <label class="star-5 fas fa-star" for="star-5"></label>
                                </div>
                            </div>
                            <div class="footer"><span class="text"></span><span class="numb"></span></div>
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
    <script src="{{ asset('assets/js/rating/rating.js') }}"></script>
@endsection
