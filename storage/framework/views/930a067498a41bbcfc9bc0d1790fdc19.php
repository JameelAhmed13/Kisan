<div class="card-body custom-input">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label>Role Name <span> *</span></label>
                <div>
                    <input class="form-control" type="text"
                        placeholder="Enter Role" name="roleName" value="<?php echo e(isset($role->roleName) ? $role->roleName : old('roleName')); ?>">
                </div>
                <?php $__errorArgs = ['roleName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="validation">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div>
                    <label class="mt-3">Role Description</label>
                    <div>
                        <input class="form-control" type="text"
                               placeholder="Enter Role Description" name="description" value="<?php echo e(isset($role->description) ? $role->description : old('description')); ?>">
                    </div>
                </div>


            </div>
            <div class="mb-3">
                <label>Permissions <span> *</span></label>
                <div>
                    <div class="mb-2 card-wrapper border rounded-3 checkbox-checked">
                        <h6 class="sub-title">All Permissions:</h6>
                        <label class="d-block" for="all-permissions">
                            <input type="checkbox" class="checkbox_animated select-all-permission select-all-for-permissions" onclick="allCheckboxes(this)" id="all-permissions" value="" ><?php echo e(__('All')); ?>

                        </label>
                    </div>

                    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="mb-2 card-wrapper border rounded-3 checkbox-checked">
                            <h6 class="sub-title"><?php echo e($module->moduleName); ?>:</h6>
                            <div class="form-check-size rtl-input">
                            <?php
                                $privileges = \App\Models\Privileges::all();
                            ?>

                            <?php $__currentLoopData = $privileges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action => $privilege): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($module->moduleID === $privilege->moduleID): ?>
                                    <label class="d-block" for="<?php echo e($privilege->privilegeName); ?>" data-action="<?php echo e($action); ?>" data-module="<?php echo e($module->moduleName); ?>">
                                        <input type="checkbox" name="privilegeID[]" class="checkbox_animated module_<?php echo e($module->moduleName); ?> module_<?php echo e($module->moduleName); ?>_<?php echo e($action); ?>" value="<?php echo e($privilege->privilegeID); ?>" id="<?php echo e($privilege->privilegeID); ?>" <?php if(isset($rolePrivileges)): ?><?php echo e(is_array(old('privilegeID',$rolePrivileges)) && in_array($privilege->privilegeID, old('privilegeID',$rolePrivileges)) ? ' checked' : ''); ?> <?php endif; ?> ><?php echo e($privilege->privilegeName); ?>

                                    </label>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php $__errorArgs = ['privilegesID[]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="validation">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
    </div>
</div>
<div class="card-footer text-end">
    <div class="col-sm-9 offset-sm-3">
        <button class="btn btn-primary me-3" type="submit">save</button>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Kisan\resources\views/admin/role/fields.blade.php ENDPATH**/ ?>