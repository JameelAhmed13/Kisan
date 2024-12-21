<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/scrollbar.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="container-fluid basic_table">
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
                        <li class="breadcrumb-item">Authentication</li>
                        <li class="breadcrumb-item active">Roles Management</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-6 box-col-12">
                <div class="card role-management">
                    <div class="card-body">
                        <div class="blog-card">
                            <div class="blog-card-content">
                                <div class="role-details">
                                    <div class="role-profile">
                                        <img src="<?php echo e(asset('assets/images/avatar/profile3.jpg')); ?>" alt="Ticket-star">
                                    </div>
                                    <div class="role-profile-details">
                                        <h3>Welcome back <?php echo e(\Illuminate\Support\Str::title(auth()->user()->name ?? '')); ?> !</h3>
                                    </div>
                                </div>
                                <div class="blog-tags">
                                    <div class="tags-icon bg-light-primary">
                                        <svg class="stroke-icon">
                                            <use href="<?php echo e(asset('assets/svg/iconly-sprite.svg#multi-user')); ?>"></use>
                                        </svg>
                                    </div>
                                    <div class="tag-details">
                                        <h2 class="total-num counter"><?php echo e($users); ?></h2>
                                        <p>Total Users</p>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card-image">
                                <img src="<?php echo e(asset('assets/images/role-management.png')); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 box-col-6">
                <div class="card">
                    <div class="card-body border-b-primary border-2">
                        <div class="upcoming-box">
                            <div class="upcoming-icon bg-light-primary">
                                <svg class="stroke-icon">
                                    <use href="<?php echo e(asset('assets/svg/iconly-sprite.svg#Pie')); ?>"></use>
                                </svg>
                            </div>
                            <p>Role</p>
                            <a href="<?php echo e(route('admin.role.create')); ?>" class="btn btn-primary"><?php echo e(__('Add Role')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 box-col-6">
                <div class="card">
                    <div class="card-body border-b-secondary border-2">
                        <div class="upcoming-box">
                            <div class="upcoming-icon bg-light-secondary">
                                <svg class="stroke-icon">
                                    <use href="<?php echo e(asset('assets/svg/iconly-sprite.svg#user-plus')); ?>"></use>
                                </svg>
                            </div>
                            <p>User</p>
                            <a href="<?php echo e(route('admin.user.create')); ?>" class="btn btn-secondary"><?php echo e(__('Add User')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block row">
                        <div class="role-table">
                            <div class="table-responsive p-3">
                                <?php echo $dataTable->table(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/icons/feather-icon/feather.min.js')); ?>"></script>

    <?php echo $dataTable->scripts(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kisan\resources\views/admin/role/index.blade.php ENDPATH**/ ?>