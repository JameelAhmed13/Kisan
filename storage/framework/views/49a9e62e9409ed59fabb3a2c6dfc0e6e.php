<div class="col-sm-12">
    <div class="mt-3">
        <label class="form-label" for="">Uc Name<span> *</span></label>
        <input class="form-control" type="text" value="<?php echo e(isset($uc->name) ? $uc->name : old('name')); ?>" placeholder="Enter Uc Name" name="name">
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="text-danger">
                <strong><?php echo e($message); ?></strong>
            </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Tehsils</label>
        <select class="form-select js-example-basic-single" name="tehsilID">
            <?php $__currentLoopData = $tehsils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tehsil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($tehsil->tehsilID); ?>" <?php echo e((isset($uc->tehsilID) ? $uc->tehsilID : old('tehsilID')) == $tehsil->tehsilID ? "selected" : ""); ?>><?php echo e($tehsil->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </select>
    </div>

    <div class="text-end mt-3">
        <div class="col-12">
            <button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Kisan\resources\views/admin/ucs/fields.blade.php ENDPATH**/ ?>