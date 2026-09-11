    <!-- Add modal content -->
    <div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <form class="needs-validation" novalidate action="<?php echo e(route($route.'.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><?php echo e(__('dashboard.add')); ?> <?php echo e($title); ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <!-- Form Start -->
                    <div class="form-group">
                        <label for="name"><?php echo e(__('dashboard.name')); ?> <span>*</span></label>
                        <input type="text" class="form-control" name="name" id="name" value="<?php echo e(old('name')); ?>" required>

                        <div class="invalid-feedback">
                          <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.name')); ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="code"> <?php echo e(__('dashboard.locale')); ?> <span>*</span></label>
                        <input type="text" class="form-control" name="code" id="code" value="<?php echo e(old('code')); ?>" required>

                        <div class="invalid-feedback">
                          <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.locale')); ?>

                        </div>
                    </div>
                    <!-- Form End -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo e(__('dashboard.close')); ?></button>
                    <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.save')); ?></button>
                </div>
              </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal --><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/admin/language/create.blade.php ENDPATH**/ ?>