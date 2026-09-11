

<?php
    $header = \App\Models\PageSetup::page('contact-us');
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
                    <h1><?php echo e(__('navbar.contact')); ?></h1>
                </div>
                <div class="bread-crumb">
                    <ul>
                        <li><?php echo e(__('navbar.contact')); ?></li>
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
                    $section_mail = \App\Models\Section::section('mail');
                ?>
                <?php if(isset($section_mail)): ?>
                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                     <div class="sec-title left">
                        <h2><?php echo e($section_mail->title); ?></h2>
                        <div class="text"><?php echo $section_mail->description; ?></div>
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
                            <form method="post" action="<?php echo e(route('contact.send')); ?>" accept-charset="utf-8">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="name" placeholder="<?php echo e(__('contact.your_name')); ?>" value="<?php echo e(old('name')); ?>" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="phone" placeholder="<?php echo e(__('contact.phone_no')); ?>" value="<?php echo e(old('phone')); ?>">
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="email" name="email" placeholder="<?php echo e(__('contact.email_address')); ?>" value="<?php echo e(old('email')); ?>" required>
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="subject" placeholder="<?php echo e(__('contact.subject')); ?>" value="<?php echo e(old('subject')); ?>" required>
                                    </div>
                                    

                                    <div class="form-group col-lg-12 col-md-12">
                                        <textarea name="message" placeholder="<?php echo e(__('contact.your_massage')); ?>" required><?php echo e(old('message')); ?></textarea>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><?php echo e(__('contact.send')); ?></button>
                                    </div> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php
                    $section_contact = \App\Models\Section::section('contact');
                ?>
                <?php if(isset($setting) && isset($section_contact)): ?>
                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-12 col-sm-12">
                    <div class="sec-title left">
                        <h2><?php echo e($section_contact->title); ?></h2>
                        <div class="text"><?php echo $section_contact->description; ?></div>
                        <div class="separater"></div>
                    </div>
                    <div class="inner-column">
                        <ul class="contact-info">
                            <li> <i class="icon flaticon-email"></i> <span><?php echo e(__('contact.email')); ?>:</span> <br> <?php echo e($setting->email_one); ?><?php if(isset($setting->email_two)): ?>, <?php endif; ?> <?php echo e($setting->email_two); ?></li>
                            <li> <i class="icon flaticon-phone-call"></i>  <span><?php echo e(__('contact.phone')); ?>:</span> <br> <?php echo e($setting->phone_one); ?><?php if(isset($setting->phone_two)): ?>, <?php endif; ?> <?php echo e($setting->phone_two); ?></li>
                            <?php if(isset($setting->office_hours)): ?>
                            <li><i class="icon flaticon-clock"></i> <span><?php echo e(__('contact.office_time')); ?>:</span> <br> <?php echo strip_tags($setting->office_hours); ?></li>
                            <?php endif; ?>
                            <li><i class="icon flaticon-placeholder"></i> <span><?php echo e(__('contact.address')); ?>:</span> <br> <?php echo e($setting->contact_address); ?></li>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--End Contact Section -->

    <?php if(isset($setting->google_map)): ?>
    <!-- map-column Section -->
    <section class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="embed-responsive embed-responsive-16by9">
                      <?php echo strip_tags($setting->google_map, '<iframe>'); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End map-column Section -->
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/web/contact.blade.php ENDPATH**/ ?>