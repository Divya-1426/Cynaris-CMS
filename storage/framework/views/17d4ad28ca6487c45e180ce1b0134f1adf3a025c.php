

<?php
    $header = \App\Models\PageSetup::page('blog');
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
                    <h1><?php echo e(__('navbar.blog')); ?></h1>
                </div>
                <div class="bread-crumb">
                    <ul>
                        <li><?php echo e(__('navbar.blog')); ?></li>
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
                    <div class="blog-classic">
                        
                        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- News Block -->
                        <div class="news-block fadeIn animated">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="<?php echo e(asset('uploads/article/'.$article->image_path)); ?>" alt="<?php echo e($article->title); ?>"></figure>
                                    <div class="overlay-box"><a href="<?php echo e(route('blog.single', $article->slug)); ?>"><i class="icon fas fa-image"></i></a></div>
                                </div>
                                <div class="caption-box">
                                    <h3><a href="<?php echo e(route('blog.single', $article->slug)); ?>"><?php echo e($article->title); ?></a></h3>
                                    <ul class="post-meta">
                                        <li><i class="far fa-calendar-check"></i><?php echo e(date('d M, Y', strtotime($article->created_at))); ?></li>
                                    </ul>
                                    <div class="text"><?php echo str_limit(strip_tags($article->description), 150, ' ...'); ?></div>
                                    <a href="<?php echo e(route('blog.single', $article->slug)); ?>" class="readmore-btn"><?php echo e(__('common.read_more')); ?></a>
                                </div>

                            </div>
                        </div> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if(count($articles) == 0): ?>
                            <h3><?php echo e(__('search.no_result')); ?></h3>
                        <?php endif; ?>

                    </div>

                    
                    <?php echo e($articles->appends(Request::only('search'))->links()); ?>


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
                                <li class="<?php if(isset($current_category)): ?> <?php if($current_category->id == $article_category->id): ?> active <?php endif; ?> <?php endif; ?>"><a href="<?php echo e(route('blog.category', $article_category->slug)); ?>"><?php echo e($article_category->title); ?> <span>(<?php echo e($article_category->articles->where('status', 1)->count()); ?>)</span></a></li>
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
<?php echo $__env->make('web.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/web/article-category.blade.php ENDPATH**/ ?>