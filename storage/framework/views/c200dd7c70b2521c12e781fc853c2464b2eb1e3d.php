        <meta charset="utf-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="robots" content="noindex" />

        <?php if(isset($setting)): ?>
        <!-- App Title -->
        <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e($setting->title); ?></title>

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo e(asset('/uploads/setting/'.$setting->favicon_path)); ?>" type="image/x-icon">
        <?php endif; ?>

        <?php if(empty($setting)): ?>
        <!-- App Title -->
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <?php endif; ?>

        <!-- App css -->
        <link href="<?php echo e(asset('dashboard/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('dashboard/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('dashboard/css/summernote-bs4.css')); ?>" rel="stylesheet" type="text/css" />


        <!-- third party css -->
        <link href="<?php echo e(asset('dashboard/css/vendor/dataTables.bootstrap4.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('dashboard/css/vendor/switchery.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('dashboard/css/vendor/toastr.min.css')); ?>" rel="stylesheet" type="text/css" />
        <!-- third party css end -->


        <link href="<?php echo e(asset('dashboard/css/app.css')); ?>" rel="stylesheet" type="text/css" />

        <!-- page css -->
        <?php echo $__env->yieldContent('page_css'); ?><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/admin/layouts/common/header_script.blade.php ENDPATH**/ ?>