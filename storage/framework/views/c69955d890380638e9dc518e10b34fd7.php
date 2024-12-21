<header class="page-header row">
    <div class="logo-wrapper d-flex align-items-center col-auto"><a href="<?php echo e(route('admin.dashboard')); ?>"><img class="for-light"
                src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" alt="logo"><img class="for-dark"
                src="<?php echo e(asset('assets/images/logo/dark-logo.png')); ?>" alt="logo"></a><a class="close-btn"
            href="javascript:void(0)">
            <div class="toggle-sidebar">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </a></div>
    <div class="page-main-header col">
        <div class="header-left d-lg-block d-none">
            <form class="search-form mb-0">
                <div class="input-group"><span class="input-group-text pe-0">
                        <svg class="search-bg svg-color">
                            <use href="<?php echo e(asset('assets/svg/iconly-sprite.svg#Search')); ?>"></use>
                        </svg></span>
                    <input class="form-control" type="text" placeholder="Search anything...">
                </div>
            </form>
        </div>
        <div class="nav-right">
            <ul class="header-right">
                <li class="modes d-flex"><a class="dark-mode">
                        <svg class="svg-color">
                            <use href="<?php echo e(asset('assets/svg/iconly-sprite.svg#Moon')); ?>"></use>
                        </svg></a></li>
                <li class="serchinput d-lg-none d-flex"><a class="search-mode">
                        <svg class="svg-color">
                            <use href="<?php echo e(asset('assets/svg/iconly-sprite.svg#Search')); ?>"></use>
                        </svg></a>
                    <div class="form-group search-form">
                        <input type="text" placeholder="Search here...">
                    </div>
                </li>


                <li class="profile-dropdown custom-dropdown">
                    <div class="d-flex align-items-center"><img src="<?php echo e(asset('assets/images/avatar/profile.jpg')); ?>"
                            alt="">
                        <div class="flex-grow-1">
                            <h5><?php echo e(ucfirst(auth()?->user()?->name) ?? "No user"); ?></h5>
                            <span><?php echo e(auth()?->user()->roles[0]->roleName ?? "No Role"); ?></span>
                        </div>
                    </div>
                    <div class="custom-menu overflow-hidden">
                        <ul>
                            <li class="d-flex">
                                <svg class="svg-color">
                                    <use href="<?php echo e(asset('assets/svg/iconly-sprite.svg#Profile')); ?>"></use>
                                </svg><a class="ms-2" href="<?php echo e(route('admin.user.show', \Illuminate\Support\Facades\Auth::user()->userID ?? "")); ?>">My Profile</a>
                            </li>
                            <li class="d-flex">
                                <svg class="svg-color">
                                    <use href="<?php echo e(asset('assets/svg/iconly-sprite.svg#Login')); ?>"></use>
                                </svg><a class="ms-2" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                                <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-none" id="logout-form">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
<?php /**PATH C:\xampp\htdocs\Kisan\resources\views/layouts/header.blade.php ENDPATH**/ ?>