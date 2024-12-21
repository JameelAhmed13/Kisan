<!DOCTYPE html>
<html lang="en" <?php if(Route::currentRouteName()=='admin.rtl_layout'): ?> dir="rtl" <?php endif; ?>>

<head>
    
    <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Font awesome icon css -->
    <?php echo $__env->make('layouts.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<?php switch(Route::currentRouteName()):

    case ('admin.box_layout'): ?>
        <body class="box-layout">
        <?php break; ?>

    <?php case ('admin.rtl_layout'): ?>
        <body class="rtl">
        <?php break; ?>

    <?php case ('admin.dark_layout'): ?>
        <body>
        <?php break; ?>

    <?php default: ?>
        <body>
<?php endswitch; ?>

    <!-- tap to top starts-->
    <div class="tap-top">
        <svg class="feather">
            <use href="<?php echo e(asset('assets/svg/feather-icons/dist/feather-sprite.svg#arrow-up')); ?>"></use>
        </svg>
    </div>
    <!-- tap to tap ends--> 

    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
    <!-- loader end-->

    <!-- page-wrapper Start-->
    <main class="page-wrapper compact-wrapper" id="pageWrapper">

        <!-- Page header start -->
        <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Page header end-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page sidebar start-->
            <div class="overlay"></div>
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Page sidebar end-->

            <div class="page-body">
                <?php echo $__env->yieldContent('main_content'); ?>
            </div>
            
            <!-- footer start-->
            <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- footer end-->

        </div>
    </main>

    
    <?php echo $__env->make('layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.inc.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Kisan\resources\views/layouts/master.blade.php ENDPATH**/ ?>