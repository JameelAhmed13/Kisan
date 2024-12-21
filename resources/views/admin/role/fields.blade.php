<div class="card-body custom-input">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label>Role Name <span> *</span></label>
                <div>
                    <input class="form-control" type="text"
                        placeholder="Enter Role" name="roleName" value="{{ isset($role->roleName) ? $role->roleName : old('roleName') }}">
                </div>
                @error('roleName')
                <span class="validation">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div>
                    <label class="mt-3">Role Description</label>
                    <div>
                        <input class="form-control" type="text"
                               placeholder="Enter Role Description" name="description" value="{{ isset($role->description) ? $role->description : old('description') }}">
                    </div>
                </div>


            </div>
            <div class="mb-3">
                <label>Permissions <span> *</span></label>
                <div>
                    <div class="mb-2 card-wrapper border rounded-3 checkbox-checked">
                        <h6 class="sub-title">All Permissions:</h6>
                        <label class="d-block" for="all-permissions">
                            <input type="checkbox" class="checkbox_animated select-all-permission select-all-for-permissions" onclick="allCheckboxes(this)" id="all-permissions" value="" >{{ __('All') }}
                        </label>
                    </div>

                    @foreach ($modules as $key => $module)
                        <div class="mb-2 card-wrapper border rounded-3 checkbox-checked">
                            <h6 class="sub-title">{{ $module->moduleName }}:</h6>
                            <div class="form-check-size rtl-input">
                            @php
                                $privileges = \App\Models\Privileges::all();
                            @endphp

                            @foreach($privileges as $action => $privilege)
                                @if($module->moduleID === $privilege->moduleID)
                                    <label class="d-block" for="{{ $privilege->privilegeName }}" data-action="{{ $action }}" data-module="{{ $module->moduleName }}">
                                        <input type="checkbox" name="privilegeID[]" class="checkbox_animated module_{{ $module->moduleName }} module_{{ $module->moduleName }}_{{ $action }}" value="{{ $privilege->privilegeID }}" id="{{ $privilege->privilegeID }}" @if(isset($rolePrivileges)){{is_array(old('privilegeID',$rolePrivileges)) && in_array($privilege->privilegeID, old('privilegeID',$rolePrivileges)) ? ' checked' : '' }} @endif >{{ $privilege->privilegeName }}
                                    </label>
                                @endif
                            @endforeach

                            </div>
                        </div>
                    @endforeach
                </div>
                @error('privilegesID[]')
                    <span class="validation">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="card-footer text-end">
    <div class="col-sm-9 offset-sm-3">
        <button class="btn btn-primary me-3" type="submit">save</button>
    </div>
</div>
