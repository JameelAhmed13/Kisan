<div class="action-div mt-0">
    <?php if(isset($data)): ?>
        <?php if(isset($edit)): ?>
            <?php if(isset($data->system_reserve) ? !$data->system_reserve : true): ?>
                <a href="<?php echo e(route($edit, $primaryKey)); ?>" class="edit-icon">
                    <i data-feather="edit"></i>
                <?php else: ?>
                    <a href="javascript:void(0)" class="lock-icon">
                        <i data-feather="lock"></i>
                    </a>
            <?php endif; ?>
        <?php endif; ?>
        <?php if(isset($delete)): ?>
                <?php if(isset($data->system_reserve) ? !$data->system_reserve : true): ?>
                    <a href="#confirmationModal<?php echo e($primaryKey); ?>" data-bs-toggle="modal" class="delete-svg">
                        <i data-feather="trash-2" class="remove-icon delete-confirmation"></i>
                    </a>
                    <!-- Remove File Confirmation-->
                    <div class="modal fade" id="confirmationModal<?php echo e($primaryKey); ?>" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel<?php echo e($primaryKey); ?>"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Confirm delete</h4>
                                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h4 class="mb-3"> Are you sure want to delete ?</h4>
                                    <p>This Item Will Be Deleted Permanently. You Can not Undo This Action.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
                                    <form action="<?php echo e(route($delete, $primaryKey)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button class="btn btn-danger" type="submit"><?php echo e(__('Delete')); ?></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
        <?php endif; ?>

        <?php endif; ?>
        <?php if(isset($toggle)): ?>
            <label class="switch">
                <input data-route="<?php echo e(route($route, $toggle)); ?>" data-id="<?php echo e($toggle); ?>" class="form-check-input toggle-status" type="checkbox" name="<?php echo e($name); ?>" value="<?php echo e($value); ?>" <?php echo e($value ? 'checked' : ''); ?>>
                <span class="switch-state"></span>
            </label>
        <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\Kisan\resources\views/admin/inc/action.blade.php ENDPATH**/ ?>