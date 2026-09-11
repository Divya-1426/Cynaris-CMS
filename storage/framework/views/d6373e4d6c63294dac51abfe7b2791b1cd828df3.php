

<?php
    $header = \App\Models\PageSetup::page('portfolio');
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
                    <h1><?php echo e(__('navbar.portfolios')); ?></h1>
                </div>
                <div class="bread-crumb">
                    <ul>
                        <li><?php echo e(__('navbar.portfolios')); ?></li>
                        <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('navbar.home')); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <?php
        $section_portfolio = \App\Models\Section::section('portfolio');
    ?>
    <?php if(count($portfolios) > 0 && isset($section_portfolio)): ?>
    <!--Gallery Section-->
    <section class="gallery-section">
        <!--Sortable Masonry-->
        <div class="sortable-masonry">
            <div class="container">
                <div class="sec-title centered">
                    <h2><?php echo e($section_portfolio->title); ?></h2>
                    <div class="text"><?php echo $section_portfolio->description; ?></div>
                    <div class="separater"></div>
                </div>
                <!--Filter-->
                <div class="filters row clearfix">
                    
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter=".all"><?php echo e(__('common.all')); ?></li>
                        <?php $__currentLoopData = $portfolio_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="filter" data-role="button" data-filter=".<?php echo e($portfolio_category->slug); ?>"><?php echo e($portfolio_category->title); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            
                <div class="row clearfix items-container">
                    
                    <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!--Default Portfolio Item-->
                    <div class="default-portfolio-item mix masonry-item all 
                        <?php $__currentLoopData = $portfolio->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($category->slug); ?> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box"><img src="<?php echo e(asset('uploads/portfolio/'.$portfolio->image_path)); ?>" alt="<?php echo e($portfolio->title); ?>"></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <div class="content-inner">
                                            <div class="tags">
                                                <?php $__currentLoopData = $portfolio->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    > <?php echo e($category->title); ?> 
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <h3><a href="<?php echo e(route('portfolio.single', $portfolio->slug)); ?>"><?php echo e($portfolio->title); ?></a></h3>
                                        </div>
                                        <a href="<?php echo e(route('portfolio.single', $portfolio->slug)); ?>" class="link-btn"><?php echo e(__('common.read_more')); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </section>
    <!--End Gallery Section-->
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/web/portfolios.blade.php ENDPATH**/ ?>