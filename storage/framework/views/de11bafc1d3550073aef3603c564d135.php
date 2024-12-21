<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/scrollbar.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/quill/dist/quill.snow.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/quill/dist/quill.bubble.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Tehsil</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <svg class="svg-color">
                                    <use href="<?php echo e(asset('assets/svg/iconly-sprite.svg#Home')); ?>"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Tehsil</li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Edit Tehsil</h4>
                        <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                    </div>
                    <div class="card-body add-post">
                        <form class="row needs-validation" id="blogForm" action="<?php echo e(route('admin.tehsil.update', $tehsil->tehsilID)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <?php echo $__env->make('admin.tehsils.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/vendors/quill/dist/quill.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom-quill-laravel.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom-validation/validation.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kisan\resources\views/admin/tehsils/edit.blade.php ENDPATH**/ ?>