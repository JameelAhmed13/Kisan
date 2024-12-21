@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Kissan Management</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Kissan</li>
                        <li class="breadcrumb-item active">Kissan Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Registration Process</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span>Fill up your details and proceed next
                                steps.</span></p>
                    </div>
                    <div class="card-body basic-wizard important-validation">
                        <div class="stepper-horizontal" id="stepper1">
                            <div class="stepper-one stepper step editing active">
                                <div class="step-circle"><span>1</span></div>
                                <div class="step-title">Basic Info</div>
                                <div class="step-bar-left"></div>
                                <div class="step-bar-right"></div>
                            </div>
                            <div class="stepper-two step">
                                <div class="step-circle"><span>2</span></div>
                                <div class="step-title">Ntn Info</div>
                                <div class="step-bar-left"></div>
                                <div class="step-bar-right"></div>
                            </div>
                            <div class="stepper-three step">
                                <div class="step-circle"><span>3</span></div>
                                <div class="step-title">Province</div>
                                <div class="step-bar-left"></div>
                                <div class="step-bar-right"></div>
                            </div>
                            <div class="stepper-four step">
                                <div class="step-circle"><span>4</span></div>
                                <div class="step-title">Questions</div>
                                <div class="step-bar-left"></div>
                                <div class="step-bar-right"></div>
                            </div>
                            <div class="stepper-five step">
                                <div class="step-circle"><span>5</span></div>
                                <div class="step-title">Finish</div>
                                <div class="step-bar-left"></div>
                                <div class="step-bar-right"></div>
                            </div>
                        </div>
                        <div id="msform">
                            <form class="stepper-one row g-3 needs-validation custom-input" novalidate="">
                                <div class="col-sm-6">
                                    <label class="form-label" for="Name">Name<span
                                            class="font-danger">*</span></label>
                                    <input class="form-control" id="Name" type="tel" required=""
                                           placeholder="John Doe">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="fatherName">Father/Husband Name<span
                                            class="font-danger">*</span></label>
                                    <input class="form-control" id="fatherName" type="text" required=""
                                           placeholder="Enter your Father Name">
                                </div>
                                <div class="col-6">
                                    <label class="col-sm-12 form-label" for="Phone No">Phone No</label>
                                    <input class="form-control" id="Phone No" type="tel"
                                           placeholder="Enter Phone No" required="">
                                </div>
                                <div class="col-6">
                                    <label class="col-sm-12 form-label" for="Mobile No">Mobile No<span
                                            class="font-danger">*</span></label>
                                    <input class="form-control" id="Mobile No" type="tel"
                                           placeholder="Enter Mobile No" required="">
                                </div>
                                <div class="col-6">
                                    <label class="col-sm-12 form-label" for="cnic">Cnic<span
                                            class="font-danger">*</span></label>
                                    <input class="form-control" id="cnic" type="number"
                                           placeholder="Enter cnic" required="">
                                </div>
                                <div class="col-3">
                                    <label class="col-sm-12 form-label" for="cnicFrontImage">Cnic Front Image<span
                                            class="font-danger">*</span></label>
                                    <input class="form-control" id="cnicFrontImage" type="file"
                                           placeholder="Enter cnicFrontImage" required="">
                                </div>
                                <div class="col-3">
                                    <label class="col-sm-12 form-label" for="cnicBackImage">Cnic Back Image<span
                                            class="font-danger">*</span></label>
                                    <input class="form-control" id="cnicBackImage" type="file"
                                           placeholder="Enter cnicBackImage" required="">
                                </div>
                                <div class="col-12">
                                    <label class="col-sm-12 form-label" for="address">Address</label>
                                    <textarea class="form-control" id="address" type="tel"
                                              placeholder="Enter address" required=""></textarea>
                                </div>
                            </form>
                            <form class="stepper-two row g-3 needs-validation custom-input" novalidate="">
                                <div class="col-md-6">
                                    <label class="form-label" for="placeholdername1">Ntn No </label>
                                    <input class="form-control" id="placeholdername1" type="number" required=""
                                           placeholder="Placeholder Ntn No">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="placeholdername1">Ntn Attachment </label>
                                    <input class="form-control" id="placeholdername1" type="file" required=""
                                           placeholder="Placeholder Ntn No">
                                </div>
                            </form>
                            <form class="stepper-three row g-3 needs-validation custom-input" novalidate="">
                                <div class="col-3">
                                    <label class="form-label" for="country">Select Country<span
                                            class="font-danger">*</span></label>
                                    <select class="form-select" id="country" required="">
                                        <option selected="" disabled="" value="">Choose...</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->countryID}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please select a valid Country.</div>
                                </div>
                                <div class="col-3">
                                    <label class="form-label" for="province">Select Province<span
                                            class="font-danger">*</span></label>
                                    <select class="form-select" id="province" required="">
                                        <option selected="" disabled="" value="">Choose...</option>
                                        @foreach($provinces as $province)
                                            <option value="{{$province->provinceID}}">{{$province->name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please select a valid Province.</div>
                                </div>
                                <div class="col-3">
                                    <label class="form-label" for="division">Select Division<span
                                            class="font-danger">*</span></label>
                                    <select class="form-select" id="division" required="">
                                        <option selected="" disabled="" value="">Choose...</option>
                                        @foreach($divisions as $division)
                                            <option value="{{$division->divisionID}}">{{$division->name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please select a valid District.</div>
                                </div>
                                <div class="col-3">
                                    <label class="form-label" for="district">Select District<span
                                            class="font-danger">*</span></label>
                                    <select class="form-select" id="district" required="">
                                        <option selected="" disabled="" value="">Choose...</option>
                                        @foreach($districts as $district)
                                            <option value="{{$district->districtID}}">{{$district->name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please select a valid District.</div>
                                </div>

                                <div class="col-3">
                                    <label class="form-label" for="tehsil">Select Tehsil<span
                                            class="font-danger">*</span></label>
                                    <select class="form-select" id="tehsil" required="">
                                        <option selected="" disabled="" value="">Choose...</option>
                                        @foreach($tehsils as $tehsil)
                                            <option value="{{$tehsil->tehsilID}}">{{$tehsil->name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please select a valid District.</div>
                                </div>
                                <div class="col-3">
                                    <label class="form-label" for="uc">Select Ucs<span
                                            class="font-danger">*</span></label>
                                    <select class="form-select" id="uc" required="">
                                        <option selected="" disabled="" value="">Choose...</option>
                                        @foreach($ucs as $uc)
                                            <option value="{{$uc->ucID}}">{{$uc->name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please select a valid District.</div>
                                </div>
                            </form>
                            <form class="stepper-four row g-3 needs-validation custom-input" novalidate="">
                                <div class="col-sm-6">
                                    <label class="form-label" for="Name">
                                        Dept Agriculture Expansion Registration Enrollment No
                                        (محکمہ زراعت توسیع رجسٹریشن اندراج نمبر
                                        )
                                        <span class="font-danger">*</span>
                                    </label>
                                    <input class="form-control" id="Name" type="tel" required=""
                                           placeholder="Enter Detail">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="fatherName">
                                        Total Owned Raqba (کُل ملکیتی رقبہ)
                                        <span class="font-danger">*</span>
                                    </label>
                                    <input class="form-control" id="fatherName" type="text" required=""
                                           placeholder="Enter Detail">
                                </div>
                                <div class="col-6">
                                    <label class="col-sm-12 form-label" for="Phone No">
                                        Distance of Zaitoon Farm From Main Road
                                        (زیتون کی کاشت کا مین روڈ سے فاصلا
                                        )</label>
                                    <input class="form-control" id="Phone No" type="tel"
                                           placeholder="Enter Detail" required="">
                                </div>
                                <div class="col-6">
                                    <label class="col-sm-12 form-label" for="Mobile No">
                                        Alloted Area Distance From Main Road
                                        <span
                                            class="font-danger">*</span></label>
                                    <input class="form-control" id="Mobile No" type="tel"
                                           placeholder="Enter Detail" required="">
                                </div>
                                <div class="col-6">
                                    <label class="col-sm-12 form-label" for="Mobile No">
                                        Alloted Area Present Farming/Gardening Details
                                        <span
                                            class="font-danger">*</span></label>
                                    <input class="form-control" id="Mobile No" type="tel"
                                           placeholder="Enter Detail" required="">
                                </div>
                                <div class="col-6">
                                    <label class="col-sm-12 form-label" for="Mobile No">
                                        Zarya Apashi Ki Tafseel
                                        <span
                                            class="font-danger">*</span></label>
                                    <input class="form-control" id="Mobile No" type="tel"
                                           placeholder="Enter Detail" required="">
                                </div>
                                <div class="col-6">
                                    <label class="col-sm-12 form-label" for="Mobile No">
                                        Nazdeek Sabzi Mandi Ka Name Or Distance
                                        <span
                                            class="font-danger">*</span></label>
                                    <input class="form-control" id="Mobile No" type="tel"
                                           placeholder="Enter Detail" required="">
                                </div>
                                <div class="col-6">
                                    <label class="col-sm-12 form-label" for="Mobile No">
                                        Alloted Area Farm Type
                                        <span
                                            class="font-danger">*</span></label>
                                    <input class="form-control" id="Mobile No" type="tel"
                                           placeholder="Enter Detail" required="">
                                </div>
                                <div class="col-6">
                                    <label class="col-sm-12 form-label" for="Mobile No">
                                        Area low/high Weather
                                        <span
                                            class="font-danger">*</span></label>
                                    <input class="form-control" id="Mobile No" type="tel"
                                           placeholder="Enter Detail" required="">
                                </div>
                                <div class="col-6">
                                    <label class="col-sm-12 form-label" for="Mobile No">
                                        Below Land Water Depth
                                        <span
                                            class="font-danger">*</span></label>
                                    <input class="form-control" id="Mobile No" type="tel"
                                           placeholder="Enter Detail" required="">
                                </div>
                                <div class="col-6">
                                    <label class="col-sm-12 form-label" for="Mobile No">
                                        Experience Before This Farming
                                        <span
                                            class="font-danger">*</span></label>
                                    <input class="form-control" id="Mobile No" type="tel"
                                           placeholder="Enter Detail" required="">
                                </div>
                            </form>
                            <form class="stepper-five row g-3 needs-validation" novalidate="">
                                <div class="col-12 m-0">
                                    <div class="successful-form"><img class="img-fluid"
                                                                      src="{{ asset('assets/images/gif/successful.gif') }}" alt="successful">
                                        <h6>Congratulations </h6>
                                        <p>Well done! You have successfully completed. </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="wizard-footer d-flex gap-2 justify-content-end mt-4">
                            <button class="btn alert-light-primary" id="backbtn" onclick="backStep()"> Back</button>
                            <button class="btn btn-primary" id="nextbtn" onclick="nextStep()">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 studentHide">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Student validation form</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span>Please make sure fill all the filed
                                before click on next button.</span></p>
                    </div>
                    <div class="card-body custom-input">
                        <form class="form-wizard" id="regForm" action="#" method="POST">
                            <div class="tab active">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="name">Name</label>
                                        <input class="form-control" id="name" type="text"
                                               placeholder="Enter your name" required="required">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="student-email-wizard">Email<span
                                                class="font-danger">*</span></label>
                                        <input class="form-control" id="student-email-wizard" type="email"
                                               required="" placeholder="edmin@gmail.com">
                                    </div>
                                    <div class="col-12">
                                        <label class="col-sm-12 form-label" for="password-wizard">Password<span
                                                class="font-danger">*</span></label>
                                        <input class="form-control" id="password-wizard" type="password"
                                               placeholder="Enter password" required="">
                                    </div>
                                    <div class="col-12">
                                        <label class="col-sm-12 form-label" for="confirmpassowrd">Confirm Password<span
                                                class="font-danger">*</span></label>
                                        <input class="form-control" id="confirmpassowrd" type="password"
                                               placeholder="Enter confirm password" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div class="row g-3 avatar-upload">
                                    <div class="col-12">
                                        <div>
                                            <div class="avatar-edit">
                                                <input id="imageUpload" type="file" accept=".png, .jpg, .jpeg">
                                                <label for="imageUpload"></label>
                                            </div>
                                            <div class="avatar-preview">
                                                <div id="image"></div>
                                            </div>
                                        </div>
                                        <h6>Add Profile</h6>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="exampleFormControlInput1">Portfolio URL</label>
                                        <input class="form-control" id="exampleFormControlInput1" type="url"
                                               placeholder="https://edmin">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="projectDescription">Project Description</label>
                                        <textarea class="form-control" id="projectDescription" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <h5 class="mb-2">Social Links </h5>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitterControlInput">Twitter</label>
                                        <input class="form-control" id="twitterControlInput" type="url"
                                               placeholder="https://twitter.com">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="githubControlInput">Github</label>
                                        <input class="form-control" id="githubControlInput" type="url"
                                               placeholder="https:/github.com">
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input class="form-control" id="inputGroupFile04" type="file"
                                                   aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                            <button class="btn btn-outline-secondary" id="inputGroupFileAddon04"
                                                    type="button">Submit</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">Positions</option>
                                            <option value="1">Web Designer</option>
                                            <option value="2">Software Engineer</option>
                                            <option value="3">UI/UX Designer </option>
                                            <option value="3">Web Developer</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="quationsTextarea">Why do you want to take this
                                            position?</label>
                                        <textarea class="form-control" id="quationsTextarea" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="text-end pt-3">
                                    <button class="btn btn-secondary" id="prevBtn" type="button"
                                            onclick="nextPrev(-1)">Previous</button>
                                    <button class="btn btn-primary" id="nextBtn" type="button"
                                            onclick="nextPrev(1)">Next</button>
                                </div>
                            </div>
                            <!-- Circles which indicates the steps of the form:-->
                            <div class="text-center"><span class="step"></span><span class="step"></span><span
                                    class="step"></span><span class="step"></span></div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/form-wizard/image-upload.js') }}"></script>
    <script src="{{ asset('assets/js/form-wizard/form-wizard.js') }}"></script>
    <script>
        $('.studentHide').hide()
    </script>
@endsection
