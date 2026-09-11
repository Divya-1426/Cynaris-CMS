<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <?php echo $__env->make('admin.layouts.common.header_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu left-side-menu-dark">

                <div class="slimscroll-menu">

                    <?php if(isset($setting)): ?>
                    <!-- LOGO -->
                    <a href="<?php echo e(route('admin.dashboard.index')); ?>" class="logo text-center mb-4">
                        <span class="logo-lg">
                            <img src="<?php echo e(asset('/uploads/setting/'.$setting->logo_path)); ?>" alt="logo" height="40">
                        </span>
                        <span class="logo-sm">
                            <img src="<?php echo e(asset('/uploads/setting/'.$setting->logo_path)); ?>" alt="logo" height="40">
                        </span>
                    </a>
                    <?php endif; ?>

                    <?php if(Request::is('admin*')): ?>
                    <!--- Sidemenu -->
                    <?php echo $__env->make('admin.inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- End Sidebar -->
                    <?php endif; ?>

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->


            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <!-- Authentication Links -->
                            <?php if(auth()->guard()->guest()): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('auth.login')); ?></a>
                                </li>
                                <?php if(Route::has('register')): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('auth.register')); ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php else: ?>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="<?php echo e(asset('/dashboard/images/users/user.png')); ?>" alt="user-image" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0"><?php echo e(__('dashboard.welcome')); ?>

                                            <small class="pro-user-name ml-1">
                                                <?php echo e(Auth::user()->name); ?>

                                            </small>
                                        </h6>
                                    </div>

                                    <!-- item-->
                                    <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-user"></i>
                                        <span>My Account</span>
                                    </a> -->

                                    <!-- item-->
                                    <a href="<?php echo e(route('admin.setting.index')); ?>" class="dropdown-item notify-item">
                                        <i class="fe-settings"></i>
                                        <span><?php echo e(trans_choice('dashboard.setting', 2)); ?></span>
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        
                                        <i class="fe-log-out"></i>
                                        <span><?php echo e(__('dashboard.logout')); ?></span>
                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                    </form>

                                </div>
                            </li>

                            <?php endif; ?>

                        </ul>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="fe-menu"></i>
                        </button>
                        <div class="app-search">
                        </div>
                    </div>
                    <!-- end Topbar -->


                    <!-- Start Content-->
                    <?php echo $__env->yieldContent('content'); ?>
                    <!-- End Content-->
                    


                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <?php if(isset($setting)): ?>
                                <?php echo e(__('dashboard.admin')); ?> &copy; - <?php echo strip_tags($setting->footer_text, '<p><a><b><i><u><strong>'); ?>

                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="<?php echo e(route('home')); ?>"><?php echo e(__('dashboard.home')); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <?php echo $__env->make('admin.layouts.common.footer_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/admin/layouts/master.blade.php ENDPATH**/ ?>