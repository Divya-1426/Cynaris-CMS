    <!-- App js -->
    <script src="<?php echo e(asset('dashboard/js/vendor.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/js/all.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/js/summernote-bs4.js')); ?>"></script>


    <!-- third party js -->
    <script src="<?php echo e(asset('dashboard/js/vendor/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/js/vendor/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/js/vendor/switchery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/js/vendor/toastr.min.js')); ?>"></script>
    <!-- third party js ends -->


    <!-- Toastr message display -->
    <?php echo app('toastr')->render(); ?>

    <script type="text/javascript">
        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                toastr["error"]("<?php echo e($error); ?>");
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </script>

    <script src="<?php echo e(asset('dashboard/js/app.js')); ?>"></script>

    <!-- page js -->
    <?php echo $__env->yieldContent('page_js'); ?><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/admin/layouts/common/footer_script.blade.php ENDPATH**/ ?>