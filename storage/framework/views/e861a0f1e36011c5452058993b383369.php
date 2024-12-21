<div class="col-sm-12">
    <div class="mt-3">
        <label class="form-label" for="">Tehsil Name<span> *</span></label>
        <input class="form-control" type="text" value="<?php echo e(isset($tehsil->name) ? $tehsil->name : old('name')); ?>" placeholder="Enter Tehsil Name" name="name">
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
        <label class="form-label" for="">Division</label>
        <select class="form-select js-example-basic-single" name="districtID">
            <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($district->districtID); ?>" <?php echo e((isset($tehsil->districtID) ? $tehsil->districtID : old('districtID')) == $district->districtID ? "selected" : ""); ?>><?php echo e($district->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </select>
    </div>

    <div class="text-end mt-3">
        <div class="col-12">
            <button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Kisan\resources\views/admin/tehsils/fields.blade.php ENDPATH**/ ?>