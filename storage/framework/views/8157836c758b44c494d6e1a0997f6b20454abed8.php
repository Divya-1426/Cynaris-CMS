

<?php
    $header = \App\Models\PageSetup::page('get-quote');
?>
<?php if(isset($header)): ?>

    <?php $__env->startSection('title', $header->meta_title); ?>

    <?php $__env->startSection('top_meta_tags'); ?>
    <?php if(isset($header->meta_description)): ?>
    <meta name="description" content="<?php echo str_limit(strip_tags($header->meta_description), 160, ' ...'); ?>">
    <?php else: ?>
    <meta name="description" content="<?php echo str_limit(strip_tags($setting->description), 160, ' ...'); ?>">
    <?php endif; ?>

    <?php if(isset($header->meta_keywords)): ?>
    <meta name="keywords" content="<?php echo strip_tags($header->meta_keywords); ?>">
    <?php else: ?>
    <meta name="keywords" content="<?php echo strip_tags($setting->keywords); ?>">
    <?php endif; ?>
    <?php $__env->stopSection(); ?>

<?php endif; ?>

<?php $__env->startSection('content'); ?>

    <!--Page Title-->
    <section class="page-title">
        <div class="container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1><?php echo e(__('navbar.get_quote')); ?></h1>
                </div>
                <div class="bread-crumb">
                    <ul>
                        <li><?php echo e(__('navbar.get_quote')); ?></li>
                        <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('navbar.home')); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="row">

                <?php
                    $section_getquote = \App\Models\Section::section('get-quote');
                ?>
                <?php if(isset($section_getquote)): ?>
                <!-- Form Column -->
                <div class="form-column col-lg-12 col-md-12 col-sm-12">
                     <div class="sec-title left">
                        <h2><?php echo e($section_getquote->title); ?></h2>
                        <div class="text"><?php echo $section_getquote->description; ?></div>
                        <div class="separater"></div>
                    </div>
                    <div class="inner-column">

                        <div class="text-center">
                            <!-- Message Display -->
                            <?php if(Session::has('success')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?php echo e(Session::get('success')); ?>

                            </div>
                            <?php endif; ?>

                            <!-- Message Display -->
                            <?php if(Session::has('error')): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?php echo e(Session::get('error')); ?>

                            </div>
                            <?php endif; ?>

                            <!-- Error Display -->
                            <?php if($errors->any()): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                        </div>

                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form method="post" action="<?php echo e(route('get-quote.store')); ?>" enctype="multipart/form-data" accept-charset="utf-8">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="name" placeholder="<?php echo e(__('form.your_name')); ?>" value="<?php echo e(old('name')); ?>" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="email" name="email" placeholder="<?php echo e(__('form.email_address')); ?>" value="<?php echo e(old('email')); ?>" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="phone" placeholder="<?php echo e(__('form.phone_no')); ?>" value="<?php echo e(old('phone')); ?>" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="company" placeholder="<?php echo e(__('form.company')); ?>" value="<?php echo e(old('company')); ?>">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="address" placeholder="<?php echo e(__('form.address')); ?>" value="<?php echo e(old('address')); ?>" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="city" placeholder="<?php echo e(__('form.city')); ?>" value="<?php echo e(old('city')); ?>" required>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-element margin-top-20">
                                            <label for="prefer_contact"><?php echo e(__('form.prefer_contact')); ?> 
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4">
                                        <div class="custom-control custom-radio margin-bottom-30">
                                            <input class="custom-control-input" type="radio" name="prefer_contact" value="1" id="pre_email" <?php if(old('prefer_contact') == '1'): ?> checked <?php else: ?> checked <?php endif; ?> required>

                                            <label class="custom-control-label" for="pre_email">
                                                <?php echo e(__('form.phone')); ?>

                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4">
                                        <div class="custom-control custom-radio margin-bottom-30">
                                            <input class="custom-control-input" type="radio" name="prefer_contact" value="2" id="pre_phone" <?php if(old('prefer_contact') == '2'): ?> checked <?php endif; ?> required>

                                            <label class="custom-control-label" for="pre_phone">
                                                <?php echo e(__('form.email')); ?>

                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <label for="services"><?php echo e(__('form.services')); ?>

                                        </label>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12">
                                      <div class="row">
                                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="services[]" class="custom-control-input" value="<?php echo e($service->id); ?>" <?php if(old('services') == $service->id): ?> checked <?php endif; ?> id="service-<?php echo e($service->id); ?>">
                                                <label class="custom-control-label" for="service-<?php echo e($service->id); ?>"><?php echo e($service->title); ?></label>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </div>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12">
                                        <textarea name="message" placeholder="<?php echo e(__('form.your_massage')); ?>" required><?php echo e(old('message')); ?></textarea>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                      <div class="custom-file">
                                        <input type="file" name="file_path" class="custom-file-input" value="<?php echo e(old('file_path')); ?>" id="file_path">
                                        <label class="custom-file-label" for="file_path"><?php echo e(__('form.upload_file')); ?></label>
                                      </div>
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-12 text-right">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><?php echo e(__('form.submit')); ?></button>
                                    </div> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </section>
    <!--End Contact Section -->

    
    <?php
        $section_process = \App\Models\Section::section('process');
    ?>
    <?php if(count($processes) > 0 && isset($section_process)): ?>
    <!--Feautred Section -->
    <section class="feautred-section style-two" style="background-image: url(<?php echo e(asset('web/images/background/process-bg.png')); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-title left">
                        <h2><?php echo e($section_process->title); ?></h2>
                        <div class="text"><?php echo $section_process->description; ?></div>
                        <div class="separater"></div>
                    </div>
                </div>
            </div>
            <div class="featured-box row clearfix">
                <?php $__currentLoopData = $processes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $process): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="<?php echo e(($key + 1) * 200); ?>ms">
                    <div class="inner-box">
                        <div class="title-box">
                            <h4><span class="numbe-post"><?php echo e($key + 1); ?></span><?php echo e($process->title); ?></h4>
                        </div>
                        <div class="lower-content">
                            <div class="text"><?php echo $process->description; ?></div> 
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!--End Feautred Section -->
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/web/get-quote.blade.php ENDPATH**/ ?>