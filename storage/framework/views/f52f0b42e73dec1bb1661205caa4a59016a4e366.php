
<?php $__env->startSection('title', $page->title); ?>

<?php $__env->startSection('top_meta_tags'); ?>
<?php if(isset($page->description)): ?>
<meta name="description" content="<?php echo str_limit(strip_tags($page->description), 160, ' ...'); ?>">
<?php else: ?>
<meta name="description" content="<?php echo str_limit(strip_tags($setting->description), 160, ' ...'); ?>">
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('social_meta_tags'); ?>
    <?php if(isset($setting)): ?>
    <meta property="og:type" content="website">
    <meta property='og:site_name' content="<?php echo e($setting->title); ?>"/>
    <meta property='og:title' content="<?php echo e($page->title); ?>"/>
    <meta property='og:description' content="<?php echo str_limit(strip_tags($page->description), 160, ' ...'); ?>"/>
    <meta property='og:url' content="<?php echo e(route('page.single', $page->slug)); ?>"/>
    <meta property='og:image' content="<?php echo e(asset('uploads/page/'.$page->image_path)); ?>"/>


    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="<?php echo '@'.str_replace(' ', '', $setting->title); ?>" />
    <meta name="twitter:creator" content="@HiTechParks" />
    <meta name="twitter:url" content="<?php echo e(route('page.single', $page->slug)); ?>" />
    <meta name="twitter:title" content="<?php echo e($page->title); ?>" />
    <meta name="twitter:description" content="<?php echo str_limit(strip_tags($page->description), 160, ' ...'); ?>" />
    <meta name="twitter:image" content="<?php echo e(asset('uploads/page/'.$page->image_path)); ?>" />
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <?php if(isset($page)): ?>
    <!--Page Title-->
    <section class="page-title">
        <div class="container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1><?php echo e($page->title); ?></h1>
                </div>
                <div class="bread-crumb">
                    <ul>
                        <li><?php echo e($page->title); ?></li>
                        <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('navbar.home')); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <?php endif; ?>

    <?php if(isset($page)): ?>
    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-detail">
                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <?php if(is_file('uploads/page/'.$page->image_path)): ?>
                                <div class="image-box">
                                    <figure class="image"><img src="<?php echo e(asset('uploads/page/'.$page->image_path)); ?>" alt="<?php echo e($page->title); ?>"></figure>
                                </div>
                                <?php endif; ?>
                                <div class="caption-box">
                                    <div class="inner">
                                       <h3><a href="<?php echo e(route('page.single', $page->slug)); ?>"><?php echo e($page->title); ?></a></h3>
                                        <br/>
                                        <div>
                                            <?php echo $page->description; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/web/page-single.blade.php ENDPATH**/ ?>