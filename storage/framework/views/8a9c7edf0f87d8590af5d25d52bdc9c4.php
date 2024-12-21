<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/animate.css/animate.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/scrollbar.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<div class="container-fluid">
    <div class="row page-title">
        <div class="col-sm-6">
            <h3>Roles Management</h3>
        </div>
        <div class="col-sm-6">
            <nav>
                <ol class="breadcrumb justify-content-sm-end align-items-center">
                    <li class="breadcrumb-item"> <a href="<?php echo e(route('admin.dashboard')); ?>">
                            <svg class="svg-color">
                                <use href="<?php echo e(asset('assets/svg/iconly-sprite.svg#Home')); ?>"></use>
                            </svg></a></li>
                    <li class="breadcrumb-item">Roles</li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card height-equal">
                <div class="card-header">
                    <h4>Edit Role</h4>
                </div>
                <div class="card-body">
                    <form class="row g-3 custom-input" id="roleForm" action="<?php echo e(route('admin.role.update', $role->roleID)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <?php echo $__env->make('admin.role.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('assets/js/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom-validation/validation.js')); ?>"></script>
<script>
    function allCheckboxes(selectAllCheckbox) {
        // Get all checkboxes with the name 'privilegeID[]'
        var checkboxes = document.getElementsByName('privilegeID[]');

        // Set each checkbox's checked state to match the 'Select All' checkbox
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].type === 'checkbox') {
                checkboxes[i].checked = selectAllCheckbox.checked;
            }
        }
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kisan\resources\views/admin/role/edit.blade.php ENDPATH**/ ?>