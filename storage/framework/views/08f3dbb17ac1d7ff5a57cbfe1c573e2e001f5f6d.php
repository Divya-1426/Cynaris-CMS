<?php
    $header = \App\Models\PageSetup::page('portfolio');
?>
<?php if(isset($header)): ?>

    <?php $__env->startSection('title', $portfolio->title); ?>

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
    <meta property='og:title' content="<?php echo e($portfolio->title); ?>"/>
    <meta property='og:description' content="<?php echo str_limit(strip_tags($portfolio->description), 160, ' ...'); ?>"/>
    <meta property='og:url' content="<?php echo e(route('portfolio.single', $portfolio->slug)); ?>"/>
    <meta property='og:image' content="<?php echo e(asset('uploads/portfolio/'.$portfolio->image_path)); ?>"/>


    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="<?php echo '@'.str_replace(' ', '', $setting->title); ?>" />
    <meta name="twitter:creator" content="@HiTechParks" />
    <meta name="twitter:url" content="<?php echo e(route('portfolio.single', $portfolio->slug)); ?>" />
    <meta name="twitter:title" content="<?php echo e($portfolio->title); ?>" />
    <meta name="twitter:description" content="<?php echo str_limit(strip_tags($portfolio->description), 160, ' ...'); ?>" />
    <meta name="twitter:image" content="<?php echo e(asset('uploads/portfolio/'.$portfolio->image_path)); ?>" />
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Page Title-->
    <section class="page-title">
        <div class="container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1><?php echo e($portfolio->title); ?></h1>
                </div>
                <div class="bread-crumb">
                    <ul>
                        <li><?php echo e(__('navbar.portfolio-detail')); ?></li>
                        <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('navbar.home')); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <?php if(isset($portfolio)): ?>
    <!--Portfolio Detail Section-->
    <section class="project-details-section">
        <div class="project-detail">
            <div class="container">
                <!-- Upper Box -->
                <div class="upper-box">
                    <div class="row project-tabs clearfix">
                        <div class="content-column col-lg-8 col-md-12 col-sm-12">
                            <figure class="image"><a href="<?php echo e(asset('uploads/portfolio/'.$portfolio->image_path)); ?>" class="lightbox-image" data-fancybox="images"><img src="<?php echo e(asset('uploads/portfolio/'.$portfolio->image_path)); ?>" alt="<?php echo e($portfolio->title); ?>"></a></figure>
                        </div>
                    </div>
                </div>
                
                <!--Lower Content-->
                <div class="lower-content"> 
                    <div class="row clearfix">
                        
                        <!--Content Column-->
                        <div class="content-column col-lg-8 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h2><?php echo e($portfolio->title); ?></h2>
                                
                                <div>
                                    <?php echo $portfolio->description; ?>

                                </div>

                                <?php if(!empty($portfolio->video_id)): ?>
                                <div class="embed-responsive embed-responsive-16by9">
                                  <!-- removed iframe -->
                                </div>
                                <?php endif; ?>
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
        </div>
    </section>
    <!--End Portfolio Details-->
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/web/portfolio-single.blade.php ENDPATH**/ ?>