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
            <a href="<?php echo e(route($route.'.index')); ?>" class="btn btn-info"><?php echo e(__('dashboard.refresh')); ?></a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title"><?php echo e($title); ?> <?php echo e(__('dashboard.setup')); ?></h4>
                </div>
                <div class="card-body">

                  <!-- Form Start -->
                  <form class="needs-validation" novalidate action="<?php echo e(route($route.'.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input name="id" type="hidden" value="<?php echo e((isset($row->id))?$row->id:-1); ?>">

                    <div class="form-group">
                        <label for="title"><?php echo e(__('dashboard.title')); ?> <span>*</span></label>
                        <input type="text" class="form-control" name="title" id="title" value="<?php echo e(isset($row->title)?$row->title:''); ?>" required>

                        <div class="invalid-feedback">
                          <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.title')); ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description"><?php echo e(__('dashboard.description')); ?> <span>*</span></label>
                        <textarea class="form-control summernote" name="description" id="description" rows="8" required><?php echo e(isset($row->description)?$row->description:''); ?></textarea>

                        <div class="invalid-feedback">
                          <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.description')); ?>

                        </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="mission_title"><?php echo e(__('dashboard.mission_title')); ?></label>
                        <input type="text" class="form-control" name="mission_title" id="mission_title" value="<?php echo e(isset($row->mission_title)?$row->mission_title:''); ?>">

                        <div class="invalid-feedback">
                          <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.mission_title')); ?>

                        </div>
                      </div>

                      <div class="form-group">
                        <label for="mission_desc"><?php echo e(__('dashboard.mission_description')); ?></label>
                        <textarea class="form-control summernote" name="mission_desc" id="mission_desc" rows="8"><?php echo e(isset($row->mission_desc)?$row->mission_desc:''); ?></textarea>

                        <div class="invalid-feedback">
                          <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.mission_description')); ?>

                        </div>
                      </div>
                      </div>

                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="vision_title"><?php echo e(__('dashboard.vision_title')); ?></label>
                        <input type="text" class="form-control" name="vision_title" id="vision_title" value="<?php echo e(isset($row->vision_title)?$row->vision_title:''); ?>">

                        <div class="invalid-feedback">
                          <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.vision_title')); ?>

                        </div>
                      </div>

                      <div class="form-group">
                        <label for="vision_desc"><?php echo e(__('dashboard.vision_description')); ?></label>
                        <textarea class="form-control summernote" name="vision_desc" id="vision_desc" rows="8"><?php echo e(isset($row->vision_desc)?$row->vision_desc:''); ?></textarea>

                        <div class="invalid-feedback">
                          <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.vision_description')); ?>

                        </div>
                      </div>
                      </div>
                    </div>

                    <div class="row">
                      

                      <div class="form-group col-md-6">
                        <label for="video_id"><?php echo e(__('dashboard.youtube_video_id')); ?></label>
                        <input type="text" class="form-control" name="video_id" id="video_id" value="<?php echo e(isset($row->video_id)?$row->video_id:''); ?>">

                        <div class="invalid-feedback">
                          <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.youtube_video_id')); ?>

                        </div>

                        <?php if(!empty($row->video_id)): ?>
                        <br/>
                        <div class="embed-responsive embed-responsive-16by9">
                          <!-- removed iframe -->
                        </div>
                        <?php endif; ?>
                      </div>
                    </div>

                    <div class="form-group">
                        <label for="status"><?php echo e(__('dashboard.select_status')); ?></label>
                        <select class="wide" name="status" id="status" data-plugin="customselect">
                            <option value="1" <?php if(isset($row->status)): ?> <?php if( $row->status == 1 ): ?> selected <?php endif; ?> <?php endif; ?>><?php echo e(__('dashboard.active')); ?></option>
                            <option value="0" <?php if(isset($row->status)): ?> <?php if( $row->status == 0 ): ?> selected <?php endif; ?> <?php endif; ?>><?php echo e(__('dashboard.inactive')); ?></option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.update')); ?></button>
                    </div>

                  </form>
                  <!-- Form End -->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->

    
</div> <!-- container -->
<!-- End Content-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/admin/about/index.blade.php ENDPATH**/ ?>