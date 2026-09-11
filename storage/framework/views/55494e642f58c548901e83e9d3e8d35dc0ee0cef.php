
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
                                <th><?php echo e(__('dashboard.name')); ?></th>
                                <th><?php echo e(__('dashboard.locale')); ?></th>
                                <th><?php echo e(__('dashboard.status')); ?></th>
                                <th><?php echo e(__('dashboard.action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key + 1); ?></td>
                                <td><?php echo str_limit(strip_tags($row->name), 50, ' ...'); ?></td>
                                <td><?php echo e($row->code); ?></td>
                                <td>
                                    <?php if( $row->default == 1 ): ?>
                                    <span class="btn btn-primary btn-sm"><?php echo e(__('dashboard.default')); ?></span>
                                    <?php else: ?>
                                    <a href="<?php echo e(route($route.'.default', $row->id)); ?>" class="btn btn-secondary btn-sm"><?php echo e(__('dashboard.make_default')); ?></a>
                                    <?php endif; ?>
                                </td>
                                <td>
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
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/admin/language/index.blade.php ENDPATH**/ ?>