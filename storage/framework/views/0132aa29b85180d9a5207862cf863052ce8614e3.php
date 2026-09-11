    <!-- Show modal content -->
    <div id="showModal-<?php echo e($row->id); ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><?php echo e(__('dashboard.view')); ?> <?php echo e($title); ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <!-- Details View Start -->
                    <h4><span class="text-highlight"><?php echo e(__('dashboard.subject')); ?>:</span> <?php echo e($row->subject); ?></h4>
                    <p><span class="text-highlight"><?php echo e(__('dashboard.name')); ?>:</span> <?php echo e($row->name); ?></p>
                    <p><span class="text-highlight"><?php echo e(__('dashboard.email')); ?>:</span> <?php echo e($row->email); ?></p>
                    <?php if(isset($row->phone)): ?>
                    <p><span class="text-highlight"><?php echo e(__('dashboard.phone')); ?>:</span> <?php echo e($row->phone); ?></p>
                    <?php endif; ?>
                    <hr/>
                    <p><span class="text-highlight"><?php echo e(__('dashboard.message')); ?>:</span> <?php echo strip_tags($row->message, '<p><a><b><i><u><strong><br><ul><ol><li><del><ins><sup><sub><pre>'); ?></p>

                    <hr/>
                    <p><span class="text-highlight"><?php echo e(__('dashboard.status')); ?>:</span> 
                    <?php if( $row->status == 1 ): ?>
                    <span class="badge badge-success badge-pill"><?php echo e(__('dashboard.active')); ?></span>
                    <?php else: ?>
                    <span class="badge badge-danger badge-pill"><?php echo e(__('dashboard.inactive')); ?></span>
                    <?php endif; ?>
                    </p>
                    <!-- Details View End -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo e(__('dashboard.close')); ?></button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal --><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/admin/contact/show.blade.php ENDPATH**/ ?>