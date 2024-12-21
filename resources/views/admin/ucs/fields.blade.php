<div class="col-sm-12">
    <div class="mt-3">
        <label class="form-label" for="">Uc Name<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($uc->name) ? $uc->name : old('name') }}" placeholder="Enter Uc Name" name="name">
        @error('name')
        <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Tehsils</label>
        <select class="form-select js-example-basic-single" name="tehsilID">
            @foreach($tehsils as $tehsil)
                <option value="{{$tehsil->tehsilID}}" {{(isset($uc->tehsilID) ? $uc->tehsilID : old('tehsilID')) == $tehsil->tehsilID ? "selected" : ""}}>{{$tehsil->name}}</option>
            @endforeach

        </select>
    </div>

    <div class="text-end mt-3">
        <div class="col-12">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </div>
    </div>
</div>
