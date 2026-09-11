    <!-- Edit modal content -->
    <div id="editModal-<?php echo e($row->id); ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <form class="needs-validation" novalidate action="<?php echo e(route($route.'.update', $row->id)); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><?php echo e(__('dashboard.edit')); ?> <?php echo e($title); ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <!-- Form Start -->
                    <div class="form-group">
                        <label for="title"><?php echo e(__('dashboard.title')); ?> <span>*</span></label>
                        <input type="text" class="form-control" name="title" id="title" value="<?php echo e($row->title); ?>" required>

                        <div class="invalid-feedback">
                          <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.title')); ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="meta_title"><?php echo e(__('dashboard.meta_title')); ?> <span>*</span></label>
                        <input type="text" class="form-control" name="meta_title" id="meta_title" value="<?php echo e($row->meta_title); ?>" required>

                        <div class="invalid-feedback">
                          <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.meta_title')); ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="meta_description"><?php echo e(__('dashboard.meta_description')); ?>: <span><?php echo e(__('dashboard.meta_desc_length')); ?></span></label>
                        <textarea class="form-control" name="meta_description" id="meta_description" rows="4"><?php echo $row->meta_description; ?></textarea>

                        <div class="invalid-feedback">
                          <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.meta_description')); ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="meta_keywords"><?php echo e(__('dashboard.meta_keywords')); ?>: <span><?php echo e(__('dashboard.keywords_separate')); ?></span></label>
                        <textarea class="form-control" name="meta_keywords" id="meta_keywords" rows="4"><?php echo $row->meta_keywords; ?></textarea>

                        <div class="invalid-feedback">
                          <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.meta_keywords')); ?>

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
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo e(__('dashboard.close')); ?></button>
                    <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.update')); ?></button>
                </div>
              </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal --><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/admin/page-setup/edit.blade.php ENDPATH**/ ?>