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
                    <h4><span class="text-highlight"><?php echo e(__('dashboard.title')); ?>:</span> <?php echo e($row->title); ?></h4>
                    <hr/>

                    <?php if(is_file('uploads/'.$path.'/'.$row->image_path)): ?>
                    <p><span class="text-highlight"><?php echo e(__('dashboard.thumbnail')); ?>:</span></p>
                    <img src="<?php echo e(asset('uploads/'.$path.'/'.$row->image_path)); ?>" class="img-fluid" alt="Logo">
                    <?php endif; ?>

                    <hr>
                    <p><span class="text-highlight"><?php echo e(__('dashboard.description')); ?>:</span> <?php echo $row->description; ?></p>
                    <hr>

                    <?php if(!empty($row->link)): ?>
                    <hr/>
                    <p><span class="badge badge-primary"><?php echo e(__('dashboard.web_link')); ?>:</span> <a href="<?php echo e($row->link); ?>" target="_blank"><?php echo e($row->link); ?></a></p>
                    <?php endif; ?>

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
    </div><!-- /.modal --><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/admin/slider/show.blade.php ENDPATH**/ ?>