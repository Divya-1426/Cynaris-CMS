
<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>

<!-- Start Content-->
<div class="container-fluid">
    
    <!-- start page title -->
    <!-- Include page breadcrumb -->
    <?php echo $__env->make('admin.inc.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end page title --> 


    <div class="row">
        <div class="col-12">
            <a href="<?php echo e(route($route.'.index')); ?>" class="btn btn-info"><?php echo e(__('dashboard.back')); ?></a>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title"><?php echo e(__('dashboard.edit')); ?> <?php echo e($title); ?></h4>
                </div>
                <form class="needs-validation" novalidate action="<?php echo e(route($route.'.update', $row->id)); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="card-body">

                    <!-- Form Start -->
                    <div class="form-group">
                        <label for="title"><?php echo e(__('dashboard.title')); ?> <span>*</span></label>
                        <input type="text" class="form-control" name="title" id="title" value="<?php echo e($row->title); ?>" required>

                        <div class="invalid-feedback">
                          <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.title')); ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description"><?php echo e(__('dashboard.description')); ?> <span>*</span></label>
                        <textarea class="form-control textMediaEditor" name="description" id="description" rows="8" required><?php echo e($row->description); ?></textarea>

                        <div class="invalid-feedback">
                          <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.description')); ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="image"><?php echo e(__('dashboard.thumbnail')); ?> <span><?php echo e(__('dashboard.image_size', ['height' => 500, 'width' => 800])); ?></span></label>
                        <input type="file" class="form-control" name="image" id="image">

                        <div class="invalid-feedback">
                          <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.thumbnail')); ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status"><?php echo e(__('dashboard.select_status')); ?></label>
                        <select class="wide" name="status" id="status" data-plugin="customselect">
                            <option value="1" <?php if( $row->status == 1 ): ?> selected <?php endif; ?>><?php echo e(__('dashboard.active')); ?></option>
                            <option value="0" <?php if( $row->status == 0 ): ?> selected <?php endif; ?>><?php echo e(__('dashboard.inactive')); ?></option>
                        </select>
                    </div>
                    <!-- Form End -->
                    
                </div>
                <div class="card-footer">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.update')); ?></button>
                    </div>
                </div>
                </form>
            </div>
        </div><!-- end col-->
    </div>
    <!-- end row-->

    
</div> <!-- container -->
<!-- End Content-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/admin/page/edit.blade.php ENDPATH**/ ?>