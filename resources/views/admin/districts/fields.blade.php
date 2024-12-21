<div class="col-sm-12">
    <div class="mt-3">
        <label class="form-label" for="">District Name<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($district->name) ? $district->name : old('name') }}" placeholder="Enter District Name" name="name">
        @error('name')
        <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Divisions</label>
        <select class="form-select js-example-basic-single" name="divisionID">
            @foreach($divisions as $division)
                <option value="{{$division->divisionID}}" {{(isset($district->divisionID) ? $district->divisionID : old('divisionID')) == $division->divisionID ? "selected" : ""}}>{{$division->name}}</option>
            @endforeach

        </select>
    </div>

    <div class="text-end mt-3">
        <div class="col-12">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </div>
    </div>
</div>
