
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
            <!-- Add modal button -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal"><?php echo e(__('dashboard.add_new')); ?></button>
            <!-- Include Add modal -->
            <?php echo $__env->make($view.'.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <a href="<?php echo e(route($route.'.index')); ?>" class="btn btn-info"><?php echo e(__('dashboard.refresh')); ?></a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h4 class="header-title"><?php echo e($title); ?> <?php echo e(__('dashboard.list')); ?></h4>
                </div>
                <div class="card-body">

                  <!-- Data Table Start -->
                  <div class="table-responsive">
                    <table id="basic-datatable" class="table table-striped table-hover table-dark nowrap full-width">
                        <thead>
                            <tr>
                                <th><?php echo e(__('dashboard.no')); ?></th>
                                <th><?php echo e(__('dashboard.photo')); ?></th>
                                <th><?php echo e(__('dashboard.name')); ?></th>
                                <th><?php echo e(__('dashboard.designation')); ?></th>
                                <th><?php echo e(__('dashboard.organization')); ?></th>
                                <th><?php echo e(__('dashboard.status')); ?></th>
                                <th><?php echo e(__('dashboard.action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key + 1); ?></td>
                                <td>
                                    <?php if(is_file('uploads/'.$path.'/'.$row->image_path)): ?>
                                    <img src="<?php echo e(asset('uploads/'.$path.'/'.$row->image_path)); ?>" class="img-fluid" alt="Photo">
                                    <?php endif; ?>
                                </td>
                                <td><?php echo str_limit(strip_tags($row->title), 50, ' ...'); ?></td>
                                <td><?php echo e($row->designation); ?></td>
                                <td><?php echo e($row->organization); ?></td>
                                <td>
                                    <?php if( $row->status == 1 ): ?>
                                    <span class="badge badge-success badge-pill"><?php echo e(__('dashboard.active')); ?></span>
                                    <?php else: ?>
                                    <span class="badge badge-danger badge-pill"><?php echo e(__('dashboard.inactive')); ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#showModal-<?php echo e($row->id); ?>">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <!-- Include Show modal -->
                                    <?php echo $__env->make($view.'.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal-<?php echo e($row->id); ?>">
                                        <i class="far fa-edit"></i>
                                    </button>
                                    <!-- Include Edit modal -->
                                    <?php echo $__env->make($view.'.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-<?php echo e($row->id); ?>">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <!-- Include Delete modal -->
                                    <?php echo $__env->make('admin.inc.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </td>
                            </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                  </div>
                  <!-- Data Table End -->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->

    
</div> <!-- container -->
<!-- End Content-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/admin/testimonial/index.blade.php ENDPATH**/ ?>