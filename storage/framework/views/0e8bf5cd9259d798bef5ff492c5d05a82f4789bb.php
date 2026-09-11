

<?php
    $header = \App\Models\PageSetup::page('blog');
?>
<?php if(isset($header)): ?>

    <?php $__env->startSection('title', $article->title); ?>

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
    <meta property='og:title' content="<?php echo e($article->title); ?>"/>
    <meta property='og:description' content="<?php echo str_limit(strip_tags($article->description), 160, ' ...'); ?>"/>
    <meta property='og:url' content="<?php echo e(route('blog.single', $article->slug)); ?>"/>
    <meta property='og:image' content="<?php echo e(asset('uploads/article/'.$article->image_path)); ?>"/>


    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="<?php echo '@'.str_replace(' ', '', $setting->title); ?>" />
    <meta name="twitter:creator" content="@HiTechParks" />
    <meta name="twitter:url" content="<?php echo e(route('blog.single', $article->slug)); ?>" />
    <meta name="twitter:title" content="<?php echo e($article->title); ?>" />
    <meta name="twitter:description" content="<?php echo str_limit(strip_tags($article->description), 160, ' ...'); ?>" />
    <meta name="twitter:image" content="<?php echo e(asset('uploads/article/'.$article->image_path)); ?>" />
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Page Title-->
    <section class="page-title">
        <div class="container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1><?php echo e($article->title); ?></h1>
                </div>
                <div class="bread-crumb">
                    <ul>
                        <li><?php echo e(__('navbar.blog-detail')); ?></li>
                        <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('navbar.home')); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

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
                                <div class="image-box">
                                    <figure class="image"><img src="<?php echo e(asset('uploads/article/'.$article->image_path)); ?>" alt="<?php echo e($article->title); ?>"></figure>
                                    <div class="overlay-box"><a href="<?php echo e(route('blog.single', $article->slug)); ?>"><i class="icon fas fa-image"></i></a></div>
                                </div>
                                <div class="caption-box">
                                    <div class="inner">
                                       <h3><a href="<?php echo e(route('blog.single', $article->slug)); ?>"><?php echo e($article->title); ?></a></h3>
                                        <ul class="post-meta">
                                            <li><i class="far fa-calendar-check"></i><?php echo e(date('d M, Y', strtotime($article->created_at))); ?></li>
                                        </ul>
                                        <div>
                                            <?php echo $article->description; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tags -->
                        <div class="tags clearfix">
                            <span class="title"><?php echo e(__('common.category')); ?>:</span>
                            <ul>
                                <li><a href="<?php echo e(route('blog.category', $article->category->slug)); ?>"><?php echo e($article->category->title); ?></a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">
                        
                        <!--search box-->
                        <div class="sidebar-widget search-box">
                            <form method="get" action="<?php echo e(route('blog.search')); ?>">
                                <div class="form-group">
                                    <input type="search" name="search" value="" placeholder="<?php echo e(__('search.search_field')); ?>" value="<?php if(isset($search)): ?><?php echo e($search); ?><?php endif; ?>" required="">
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <?php if(count($article_categories) > 0): ?>
                        <!-- Categories -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title"><h3><?php echo e(__('common.categories')); ?></h3></div>
                            <ul class="cat-list">
                                <?php $__currentLoopData = $article_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="<?php if($article->category->id == $article_category->id): ?> active <?php endif; ?>"><a href="<?php echo e(route('blog.category', $article_category->slug)); ?>"><?php echo e($article_category->title); ?> <span>(<?php echo e($article_category->articles->where('status', 1)->count()); ?>)</span></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <?php endif; ?>

                        <?php if(count($recents) > 0): ?>
                        <!-- Latest News -->
                        <div class="sidebar-widget latest-news">
                            <div class="sidebar-title"><h3><?php echo e(__('common.recent_posts')); ?></h3></div>
                            <div class="widget-content">
                                <?php $__currentLoopData = $recents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $recent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <article class="post">
                                    <div class="post-thumb"><a href="<?php echo e(route('blog.single', $recent->slug)); ?>"><img src="<?php echo e(asset('uploads/article/'.$recent->image_path)); ?>" alt="<?php echo e($recent->title); ?>"></a></div>
                                    <h3><a href="<?php echo e(route('blog.single', $recent->slug)); ?>"><?php echo str_limit(strip_tags($recent->title), 50, ' ...'); ?></a></h3>
                                    <div class="post-info"><?php echo e(date('F d Y', strtotime($recent->created_at))); ?></div>
                                </article>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <?php endif; ?>          
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/web/article-single.blade.php ENDPATH**/ ?>