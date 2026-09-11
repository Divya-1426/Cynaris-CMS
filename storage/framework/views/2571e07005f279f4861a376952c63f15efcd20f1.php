

<?php
    $header = \App\Models\PageSetup::page('services');
?>
<?php if(isset($header)): ?>

    <?php $__env->startSection('title', $service->title); ?>

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

<?php $__env->startSection('social_meta_tags'); ?>
    <?php if(isset($setting)): ?>
    <meta property="og:type" content="website">
    <meta property='og:site_name' content="<?php echo e($setting->title); ?>"/>
    <meta property='og:title' content="<?php echo e($service->title); ?>"/>
    <meta property='og:description' content="<?php echo str_limit(strip_tags($service->description), 160, ' ...'); ?>"/>
    <meta property='og:url' content="<?php echo e(route('service.single', $service->slug)); ?>"/>
    <meta property='og:image' content="<?php echo e(asset('uploads/service/'.$service->image_path)); ?>"/>


    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="<?php echo '@'.str_replace(' ', '', $setting->title); ?>" />
    <meta name="twitter:creator" content="@HiTechParks" />
    <meta name="twitter:url" content="<?php echo e(route('service.single', $service->slug)); ?>" />
    <meta name="twitter:title" content="<?php echo e($service->title); ?>" />
    <meta name="twitter:description" content="<?php echo str_limit(strip_tags($service->description), 160, ' ...'); ?>" />
    <meta name="twitter:image" content="<?php echo e(asset('uploads/service/'.$service->image_path)); ?>" />
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Page Title-->
    <section class="page-title">
        <div class="container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1><?php echo e($service->title); ?></h1>
                </div>
                <div class="bread-crumb">
                    <ul>
                        <li><?php echo e(__('navbar.service-detail')); ?></li>
                        <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('navbar.home')); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <?php if(isset($service)): ?>
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="container">
            <div class="row clearfix">
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar services-sidebar">
                    
                        <!--Service Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <ul class="blog-cat">
                                <?php $__currentLoopData = $service_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="<?php if($service_list->id == $service->id): ?> active <?php endif; ?>"><a href="<?php echo e(route('service.single', $service_list->slug)); ?>"><?php echo str_limit(strip_tags($service_list->title), 60, ' ...'); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    
                    </aside>
                </div>
                
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="service-detail">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="single-item-">
                                    <figure class="image"><img src="<?php echo e(asset('uploads/service/'.$service->image_path)); ?>" alt="<?php echo e($service->title); ?>" /></figure>
                                </div>
                            </div>
                            <h2><?php echo e($service->title); ?></h2>
                            <div class="text">
                                <?php echo $service->description; ?>

                            </div>
                        </div> 
                    </div>

                    <?php
                        $page_quote = \App\Models\PageSetup::page('get-quote');
                        $page_contact = \App\Models\PageSetup::page('contact-us');
                    ?>
                    <?php if(isset($page_quote)): ?>
                    <a href="<?php echo e(route('get-quote')); ?>" class="theme-btn btn-style-four mt-3"><?php echo e(__('navbar.get_quote')); ?></a>
                    <?php elseif(isset($page_contact)): ?>
                    <a href="<?php echo e(route('contact')); ?>" class="theme-btn btn-style-four mt-3"><?php echo e(__('common.get_start')); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/web/service-single.blade.php ENDPATH**/ ?>