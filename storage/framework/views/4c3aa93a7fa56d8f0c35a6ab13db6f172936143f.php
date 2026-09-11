
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
            <a href="<?php echo e(route($route.'.create')); ?>" class="btn btn-primary"><?php echo e(__('dashboard.add_new')); ?></a>
            
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
                                <th><?php echo e(__('dashboard.sl')); ?></th>
                                <th><?php echo e(__('dashboard.invoice_no')); ?></th>
                                <th><?php echo e(__('dashboard.name')); ?></th>
                                <th><?php echo e(__('dashboard.email')); ?></th>
                                <th><?php echo e(__('dashboard.invoice_date')); ?></th>
                                <th><?php echo e(__('dashboard.invoice_type')); ?></th>
                                <th><?php echo e(__('dashboard.status')); ?></th>
                                <th><?php echo e(__('dashboard.action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key + 1); ?></td>
                                <td><a href="<?php echo e(route($route.'.show', [$row->id])); ?>">#<?php echo e($row->id); ?></a></td>
                                <td><?php echo e($row->name); ?></td>
                                <td><?php echo e($row->email); ?></td>
                                <td><?php echo e(date('h:i:s A | d-M-y', strtotime($row->created_at))); ?></td>
                                <td>
                                    <?php if( $row->invoice_type == 0 ): ?>
                                        <?php echo e(__('dashboard.estimate')); ?>

                                    <?php elseif( $row->invoice_type == 1 ): ?>
                                        <?php echo e(__('dashboard.advance')); ?>

                                    <?php elseif( $row->invoice_type == 2 ): ?>
                                        <?php echo e(__('dashboard.interval')); ?>

                                    <?php elseif( $row->invoice_type == 3 ): ?>
                                        <?php echo e(__('dashboard.milestone')); ?>

                                    <?php elseif( $row->invoice_type == 4 ): ?>
                                        <?php echo e(__('dashboard.final')); ?>

                                    <?php elseif( $row->invoice_type == 5 ): ?>
                                        <?php echo e(__('dashboard.full')); ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if( $row->status == 1 ): ?>
                                    <span class="badge badge-primary badge-pill"><?php echo e(__('dashboard.pending')); ?></span>
                                    <?php elseif( $row->status == 2 ): ?>
                                    <span class="badge badge-success badge-pill"><?php echo e(__('dashboard.paid')); ?></span>
                                    <?php elseif( $row->status == 0 ): ?>
                                    <span class="badge badge-danger badge-pill"><?php echo e(__('dashboard.canceled')); ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?php echo e(route($route.'.show', [$row->id])); ?>" class="btn btn-success btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>

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
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/admin/invoice/index.blade.php ENDPATH**/ ?>