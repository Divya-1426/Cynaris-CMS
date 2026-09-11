<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <?php echo $__env->make('admin.layouts.common.header_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <style type="text/css">
            .card-header {
                background: #343b4a;
                color: #fff;
                padding-bottom: 10px;
                text-align: center;
                font-weight: 500;
            }
        </style>
    </head>

    <body class="authentication-bg">

        <div class="account-pages mt-5 mb-5">
            
            <!-- Start Content-->
            <?php echo $__env->yieldContent('content'); ?>
            <!-- End Content-->

        </div>
        <!-- END wrapper -->


        <?php echo $__env->make('admin.layouts.common.footer_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/auth/layouts/master.blade.php ENDPATH**/ ?>