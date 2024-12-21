<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/animate.css/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/scrollbar.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
    <style>
        .total-user{
            width: 100%;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>District</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <svg class="svg-color">
                                    <use href="<?php echo e(asset('assets/svg/iconly-sprite.svg#Home')); ?>"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">District</li>
                        <li class="breadcrumb-item active">List</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid basic_table">
        <div class="row">
            <div class="col-xxl-2 col-lg-4 box-col-4">
                <div class="card user-management">
                    <div class="card-body bg-primary">
                        <div class="blog-tags">
                            <div class="tags-icon">
                                <svg class="stroke-icon">
                                    <use href="<?php echo e(asset('assets/svg/iconly-sprite.svg#Pie')); ?>"></use>
                                </svg>
                            </div>
                            <div class="tag-details">
                                <h2 class="total-num counter"></h2>
                                <p><?php echo e($district); ?></p>
                                <p>Total Districts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8 col-lg-8 box-col-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Kissan Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="total-num counter">
                                    <div class="d-flex by-role custom-scrollbar">
                                        <div class="total-user bg-light-primary">
                                            <h5> Countries </h5>
                                            <span class="total-num counter"><?php echo e($country); ?></span>
                                        </div>
                                        <div class="total-user bg-light-primary">
                                            <h5> Provinces  </h5>
                                            <span class="total-num counter"><?php echo e($province); ?></span>
                                        </div>
                                        <div class="total-user bg-light-primary">
                                            <h5> Divisions </h5>
                                            <span class="total-num counter"><?php echo e($division); ?></span>
                                        </div>
                                        <div class="total-user bg-light-primary">
                                            <h5> Tehsils </h5>
                                            <span class="total-num counter"><?php echo e($tehsil); ?></span>
                                        </div>
                                        <div class="total-user bg-light-primary">
                                            <h5> Ucs </h5>
                                            <span class="total-num counter"><?php echo e($uc); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-sm-6 box-col-6">
                <div class="card user-role">
                    <div class="card-body border-b-primary border-2">
                        <div class="upcoming-box">
                            <div class="upcoming-icon bg-light-primary">
                                <svg class="stroke-icon">
                                    <use href="<?php echo e(asset('assets/svg/iconly-sprite.svg#user-plus')); ?>"></use>
                                </svg>
                            </div>
                            <p>Add District</p>
                            <a href="<?php echo e(route('admin.district.create')); ?>" class="btn btn-primary"><?php echo e(__('Add District')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block row">
                        <div class="user-table">
                            <div class="table-responsive p-3">
                                <?php echo $dataTable->table(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/icons/feather-icon/feather.min.js')); ?>"></script>

    <?php echo $dataTable->scripts(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kisan\resources\views/admin/districts/index.blade.php ENDPATH**/ ?>