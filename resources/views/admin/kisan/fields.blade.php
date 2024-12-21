{{--<div class="mt-3">--}}
{{--    <label class="form-label" for="">Tag Name<span> *</span></label>--}}
{{--    <input class="form-control" type="text" value="{{ isset($tag->name) ? $tag->name : old('name') }}" placeholder="Enter Tag Name" name="name">--}}
{{--    @error('name')--}}
{{--    <span class="validation text-danger">--}}
{{--            <strong>{{ $message }}</strong>--}}
{{--        </span>--}}
{{--    @enderror--}}
{{--</div>--}}
{{--<div class="mt-3">--}}
{{--    <label class="form-label" for="">Description</label>--}}
{{--    <textarea class="form-control" name="description" placeholder="Enter Description">{{ isset($tag->description) ? $tag->description : old('description') }}</textarea>--}}
{{--    @error('description')--}}
{{--    <span class="text-danger">--}}
{{--            <strong>{{ $message }}</strong>--}}
{{--        </span>--}}
{{--    @enderror--}}
{{--</div>--}}
{{--<div class="mt-3">--}}
{{--    <label class="form-label" for="">Status</label>--}}
{{--    <select class="form-select js-example-basic-single" name="status">--}}
{{--        <option value="1" @if(old('status')=='1' ) selected @endif {{ !($tag->status ?? 1) == 0 ? 'selected' : '' }}>{{ __('Active') }}</option>--}}
{{--        <option value="0" @if(old('status')=='0' ) selected @endif {{ ($tag->status ?? 1) == 0 ? 'selected' : '' }}>{{ __('Deactive') }}</option>--}}
{{--    </select>--}}
{{--</div>--}}
{{--<div class="mt-3 text-end">--}}
{{--    <button type="submit" class="btn btn-primary">{{ __('save') }}</button>--}}
{{--</div>--}}
    <div class="card">
        <div class="card-header pb-0">
            <h4>Numbering wizard</h4>
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
                    <div class="step-title">Cart Info</div>
                    <div class="step-bar-left"></div>
                    <div class="step-bar-right"></div>
                </div>
                <div class="stepper-three step">
                    <div class="step-circle"><span>3</span></div>
                    <div class="step-title">Feedback</div>
                    <div class="step-bar-left"></div>
                    <div class="step-bar-right"></div>
                </div>
                <div class="stepper-four step">
                    <div class="step-circle"><span>4</span></div>
                    <div class="step-title">Finish</div>
                    <div class="step-bar-left"></div>
                    <div class="step-bar-right"></div>
                </div>
            </div>
            <div id="msform">
                <form class="stepper-one row g-3 needs-validation custom-input" novalidate="">
                    <div class="col-sm-6">
                        <label class="form-label" for="email-basic-wizard">Email<span
                                class="font-danger">*</span></label>
                        <input class="form-control" id="email-basic-wizard" type="email" required=""
                               placeholder="edmin@gmail.com">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="firstnamewizard">First Name<span
                                class="font-danger">*</span></label>
                        <input class="form-control" id="firstnamewizard" type="text" required=""
                               placeholder="Enter your name">
                    </div>
                    <div class="col-12">
                        <label class="col-sm-12 form-label" for="passwordwizard">Password<span
                                class="font-danger">*</span></label>
                        <input class="form-control" id="passwordwizard" type="password"
                               placeholder="Enter password" required="">
                    </div>
                    <div class="col-12">
                        <label class="col-sm-12 form-label" for="confirmpasswordwizard">Confirm Password<span
                                class="font-danger">*</span></label>
                        <input class="form-control" id="confirmpasswordwizard" type="password"
                               placeholder="Enter confirm password" required="">
                    </div>
                    <div class="col-12">
                        <div class="form-check checkbox-checked form-check-inline">
                            <input class="form-check-input" id="invalidCheck-3" type="checkbox" value=""
                                   required="">
                            <label class="form-check-label" for="invalidCheck-3">Agree to terms and
                                conditions</label>
                        </div>
                    </div>
                </form>
                <form class="stepper-two row g-3 needs-validation custom-input" novalidate="">
                    <div class="col-md-12">
                        <label class="form-label" for="placeholdername1">Placeholder Name </label>
                        <input class="form-control" id="placeholdername1" type="text" required=""
                               placeholder="Placeholder name">
                    </div>
                    <div class="col-xxl-4 col-sm-6">
                        <label class="form-label" for="cardNumber01">Card Number</label>
                        <input class="form-control" id="cardNumber01" type="text" required=""
                               placeholder="xxxx xxxx xxxx xxxx">
                    </div>
                    <div class="col-xxl-4 col-sm-6">
                        <label class="form-label" for="expirationDates01">Expiration(MM/YY)</label>
                        <input class="form-control" id="expirationDates01" type="number" required=""
                               placeholder="xx/xx">
                    </div>
                    <div class="col-xxl-4">
                        <label class="form-label" for="cvvNumber-a">CVV Number</label>
                        <input class="form-control" id="cvvNumber-a" type="text" required="">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="formFileDocument">Upload Documentation</label>
                        <input class="form-control" id="formFileDocument" type="file"
                               aria-label="file example" required="">
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" id="invalidCheck-4" type="checkbox"
                                   value="" required="">
                            <label class="form-check-label" for="invalidCheck-4">All the above information is
                                correct</label>
                        </div>
                    </div>
                </form>
                <form class="stepper-three row g-3 needs-validation custom-input" novalidate="">
                    <div class="col-sm-6">
                        <label class="form-label" for="email-basic">LinkedIn<span
                                class="font-danger">*</span></label>
                        <input class="form-control" id="email-basic" type="url" required=""
                               placeholder="https://linkedIn.com/edmin">
                        <div class="invalid-feedback">Please enter your valid link</div>
                        <div class="valid-feedback">
                            Looks's Good!</div>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="validationCustom996">Github<span
                                class="font-danger">*</span></label>
                        <input class="form-control" id="validationCustom996" type="url" required=""
                               placeholder="https://github.com/edmin">
                        <div class="invalid-feedback">Please enter your valid link</div>
                        <div class="valid-feedback">
                            Looks's Good! </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="validationCustom09">Select State<span
                                class="font-danger">*</span></label>
                        <select class="form-select" id="validationCustom09" required="">
                            <option selected="" disabled="" value="">Choose...</option>
                            <option>U.K </option>
                            <option>U.S </option>
                            <option>India</option>
                        </select>
                        <div class="invalid-feedback">Please select a valid state.</div>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="givefeedback">Give Feedback</label>
                        <textarea class="form-control" id="givefeedback" required=""></textarea>
                        <div class="invalid-feedback">Please enter a message in the textarea.</div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" id="invalidCheck5" type="checkbox"
                                   value="" required="">
                            <label class="form-check-label mb-0" for="invalidCheck5">Agree to terms and
                                conditions</label>
                            <div class="invalid-feedback">You must agree before submitting.</div>
                        </div>
                    </div>
                </form>
                <form class="stepper-four row g-3 needs-validation" novalidate="">
                    <div class="col-12 m-0">
                        <div class="successful-form"><img class="img-fluid"
                                                          src="{{ asset('assets/images/gif/successful.gif') }}" alt="successful">
                            <h6>Congratulations </h6>
                            <p>Well done! You have successfully completed. </p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="wizard-footer d-flex gap-2 justify-content-end">
                <button class="btn alert-light-primary" id="backbtn" onclick="backStep()"> Back</button>
                <button class="btn btn-primary" id="nextbtn" onclick="nextStep()">Next</button>
            </div>
        </div>
</div>
