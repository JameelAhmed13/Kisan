<div class="col-sm-12">
    <div class="mt-3">
        <label class="form-label" for="">Tehsil Name<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($tehsil->name) ? $tehsil->name : old('name') }}" placeholder="Enter Tehsil Name" name="name">
        @error('name')
        <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Division</label>
        <select class="form-select js-example-basic-single" name="districtID">
            @foreach($districts as $district)
                <option value="{{$district->districtID}}" {{(isset($tehsil->districtID) ? $tehsil->districtID : old('districtID')) == $district->districtID ? "selected" : ""}}>{{$district->name}}</option>
            @endforeach

        </select>
    </div>

    <div class="text-end mt-3">
        <div class="col-12">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </div>
    </div>
</div>
