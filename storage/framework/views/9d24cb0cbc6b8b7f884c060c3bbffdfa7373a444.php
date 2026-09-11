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
                        <label for="title"><?php echo e(__('dashboard.name')); ?> <span>*</span></label>
                        <input type="text" class="form-control" name="title" id="title" value="<?php echo e(old('title')); ?>" required>

                        <div class="invalid-feedback">
                          <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.name')); ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="designation"><?php echo e(__('dashboard.designation')); ?> <span>*</span></label>
                        <input type="text" class="form-control" name="designation" id="designation" value="<?php echo e(old('designation')); ?>" required>

                        <div class="invalid-feedback">
                          <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.designation')); ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="organization"><?php echo e(__('dashboard.organization')); ?></label>
                        <input type="text" class="form-control" name="organization" id="organization" value="<?php echo e(old('organization')); ?>">

                        <div class="invalid-feedback">
                          <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.organization')); ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description"><?php echo e(__('dashboard.description')); ?> <span>*</span></label>
                        <textarea class="form-control summernote" name="description" id="description" rows="8" required><?php echo e(old('description')); ?></textarea>

                        <div class="invalid-feedback">
                          <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.description')); ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="image"><?php echo e(__('dashboard.photo')); ?> <span>*</span> <span><?php echo e(__('dashboard.image_size', ['height' => 270, 'width' => 200])); ?></span></label>
                        <input type="file" class="form-control" name="image" id="image" required>

                        <div class="invalid-feedback">
                          <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.photo')); ?>

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
    </div><!-- /.modal --><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/admin/testimonial/create.blade.php ENDPATH**/ ?>