    <!-- Delete modal -->
    <div class="modal fade" id="deleteModal-<?php echo e($row->id); ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <form action="<?php echo e(route($route.'.destroy', [$row->id])); ?>" method="post" class="delete-form">
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h3><?php echo e(__('dashboard.are_you_sure')); ?></h3>
                    <p><?php echo e(__('dashboard.delete_warning')); ?></p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger"><?php echo e(__('dashboard.confirm')); ?></button>
                    <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo e(__('dashboard.close')); ?></button>
                </div>
            </div><!-- /.modal-content -->
          </form>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal --><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/admin/inc/delete.blade.php ENDPATH**/ ?>