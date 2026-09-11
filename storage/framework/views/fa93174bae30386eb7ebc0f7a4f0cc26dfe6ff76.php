<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <?php if(isset($setting)): ?>
    <!-- App Title -->
    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e($setting->title); ?></title>

    <!-- App favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('/uploads/setting/'.$setting->favicon_path)); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('/uploads/setting/'.$setting->favicon_path)); ?>" type="image/x-icon">
    
    <?php echo $__env->yieldContent('top_meta_tags'); ?>
    <?php endif; ?>


    <?php if(empty($setting)): ?>
    <!-- App Title -->
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <?php endif; ?>


    <!-- Social Meta Tags -->
    <link rel="canonical" href="<?php echo e(route('home')); ?>">
    <?php echo $__env->yieldContent('social_meta_tags'); ?>


    <!-- Stylesheets -->
    <link href="<?php echo e(asset('web/css/bootstrap.css')); ?>" rel="stylesheet">
    <?php if($livechat->status == 1): ?>
    <link href="<?php echo e(asset('web/css/floating-wpp.min.css')); ?>" rel="stylesheet">
    <?php endif; ?>
    <link href="<?php echo e(asset('web/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('web/css/responsive.css')); ?>" rel="stylesheet">

    <!-- Custom Style -->
    <?php if(isset($setting->custom_css)): ?>
    <style type="text/css">
        <?php echo strip_tags($setting->custom_css); ?>

    </style>
    <?php endif; ?>
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    <header class="main-header header-style-one">
    
        <?php if(isset($setting->contact_address) || isset($social)): ?>
        <!--Header Top-->
        <div class="header-top">
            <div class="container">
                <div class="clearfix">
                    <!--Top Left-->
                    <div class="top-left clearfix">
                        <ul class="links clearfix">
                            <?php if(isset($setting->contact_address)): ?>
                            <li><span class="icon fa fa-map-marker-alt"></span><?php echo e($setting->contact_address); ?></li>
                            <?php endif; ?>
                        </ul>
                    </div>

                    <!--Top Right-->
                    <div class="top-right pull-right">
                        <ul class="social-links clearfix">
                            <?php if(isset($social->facebook)): ?>
                            <li><a href="<?php echo e($social->facebook); ?>" target="_blank"><span class="icon fab fa-facebook-f"></span></a></li>
                            <?php endif; ?>
                            <?php if(isset($social->twitter)): ?>
                            <li><a href="<?php echo e($social->twitter); ?>" target="_blank"><span class="icon fab fa-twitter"></span></a></li>
                            <?php endif; ?>
                            <?php if(isset($social->instagram)): ?>
                            <li><a href="<?php echo e($social->instagram); ?>" target="_blank"><span class="icon fab fa-instagram"></span></a></li>
                            <?php endif; ?>
                            <?php if(isset($social->linkedin)): ?>
                            <li><a href="<?php echo e($social->linkedin); ?>" target="_blank"><span class="icon fab fa-linkedin-in"></span></a></li>
                            <?php endif; ?>
                            <?php if(isset($social->pinterest)): ?>
                            <li><a href="<?php echo e($social->pinterest); ?>" target="_blank"><span class="icon fab fa-pinterest"></span></a></li>
                            <?php endif; ?>
                            <?php if(isset($social->youtube)): ?>
                            <li><a href="<?php echo e($social->youtube); ?>" target="_blank"><span class="icon fab fa-youtube"></span></a></li>
                            <?php endif; ?>
                            <?php if(isset($social->skype)): ?>
                            <li><a href="skype:<?php echo e($social->skype); ?>?chat" target="_blank"><span class="icon fab fa-skype"></span></a></li>
                            <?php endif; ?>
                            <?php if(isset($social->whatsapp)): ?>
                            <li><a href="https://wa.me/<?php echo e(str_replace(' ', '', $social->whatsapp)); ?>" target="_blank"><span class="icon fab fa-whatsapp"></span></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    
        <!--Header-Upper-->
        <div class="header-upper">
            <div class="container">
                <div class="clearfix">
                    <div class="nav-inner">
                        <?php if(isset($setting)): ?>
                        <div class="pull-left logo-box">
                            <div class="logo"><a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('/uploads/setting/'.$setting->logo_path)); ?>" alt="Logo"></a></div>
                        </div>
                        <?php endif; ?>
                
                        <div class="pull-right upper-right clearfix">
                            
                            <!--Info Box-->
                            <?php if(isset($setting->office_hours)): ?>
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-clock"></span></div>
                                <ul>
                                    <li><strong><?php echo e(__('contact.office_time')); ?>:</strong></li>
                                    <li><?php echo strip_tags($setting->office_hours); ?></li>
                                </ul>
                            </div>
                            <?php endif; ?>
                            
                            <?php if(isset($setting->phone_one)): ?>
                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-phone-call"></span></div>
                                <ul>
                                    <li><strong><?php echo e(__('contact.phone')); ?>:</strong></li>
                                    <li><?php echo e($setting->phone_one); ?></li>
                                </ul>
                            </div>
                            <?php endif; ?>
                            
                            <?php if(isset($setting->email_one)): ?>
                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-email"></span></div>
                                <ul>
                                    <li><strong><?php echo e(__('contact.email')); ?>:</strong></li>
                                    <li><?php echo e($setting->email_one); ?></li>
                                </ul>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
        <!--Header Lower-->
        <div class="header-lower">
            
            <div class="container">
                <div class="nav-outer clearfix">

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <?php
                                    $page_home = \App\Models\PageSetup::page('home');
                                ?>
                                <?php if(isset($page_home)): ?>
                                <li class="<?php echo e(Request::path() == '/' ? 'current' : ''); ?>"><a href="<?php echo e(route('home')); ?>"><?php echo e($page_home->title); ?></a></li>
                                <?php endif; ?>

                                <?php
                                    $page_about = \App\Models\PageSetup::page('about-us');
                                ?>
                                <?php if(isset($page_about)): ?>
                                <li class="<?php echo e(Request::is('about*') ? 'current' : ''); ?>"><a href="<?php echo e(route('about')); ?>"><?php echo e($page_about->title); ?></a></li>
                                <?php endif; ?>

                                <?php
                                    $page_services = \App\Models\PageSetup::page('services');
                                ?>
                                <?php if(isset($page_services)): ?>
                                <li class="dropdown <?php echo e(Request::is('service*') ? 'current' : ''); ?>"><a href="<?php echo e(route('services')); ?>"><?php echo e($page_services->title); ?></a>
                                    <ul>
                                        <?php $__currentLoopData = $service_subnavs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service_subnav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="<?php echo e(Request::is('service/'.$service_subnav->slug) ? 'current' : ''); ?>"><a href="<?php echo e(route('service.single', $service_subnav->slug)); ?>"><?php echo e($service_subnav->title); ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                                <?php endif; ?>

                                <?php
                                    $page_portfolio = \App\Models\PageSetup::page('portfolio');
                                ?>
                                <?php if(isset($page_portfolio)): ?>
                                <li class="<?php echo e(Request::is('portfolio*') ? 'current' : ''); ?>"><a href="<?php echo e(route('portfolios')); ?>"><?php echo e($page_portfolio->title); ?></a></li>
                                <?php endif; ?>

                                <?php
                                    $page_pricing = \App\Models\PageSetup::page('pricing');
                                ?>
                                <?php if(isset($page_pricing)): ?>
                                <li class="<?php echo e(Request::is('pricing*') ? 'current' : ''); ?>"><a href="<?php echo e(route('pricing')); ?>"><?php echo e($page_pricing->title); ?></a></li>
                                <?php endif; ?>

                                <?php
                                    $page_blog = \App\Models\PageSetup::page('blog');
                                ?>
                                <?php if(isset($page_blog)): ?>
                                <li class="dropdown <?php echo e(Request::is('blog*') ? 'current' : ''); ?>"><a href="<?php echo e(route('blogs')); ?>"><?php echo e($page_blog->title); ?></a>
                                    <ul>
                                        <?php $__currentLoopData = $article_subnavs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article_subnav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="<?php echo e(Request::is('blogs/'.$article_subnav->slug) ? 'current' : ''); ?>"><a href="<?php echo e(route('blog.category', $article_subnav->slug)); ?>"><?php echo e($article_subnav->title); ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                                <?php endif; ?>

                                <?php
                                    $page_faqs = \App\Models\PageSetup::page('faqs');
                                ?>
                                <?php if(isset($page_faqs)): ?>
                                <li class="<?php echo e(Request::is('faqs*') ? 'current' : ''); ?>"><a href="<?php echo e(route('faqs')); ?>"><?php echo e($page_faqs->title); ?></a></li>
                                <?php endif; ?>

                                <?php
                                    $page_contact = \App\Models\PageSetup::page('contact-us');
                                ?>
                                <?php if(isset($page_contact)): ?>
                                <li class="<?php echo e(Request::path() == 'contact' ? 'current' : ''); ?>"><a href="<?php echo e(route('contact')); ?>"><?php echo e($page_contact->title); ?></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <div class="outer-box clearfix">
                        <?php
                            $page_quote = \App\Models\PageSetup::page('get-quote');
                        ?>
                        <?php if(isset($page_quote)): ?>
                        <div class="advisor-box <?php echo e(Request::is('get-quote*') ? 'current' : ''); ?>">
                            <a href="<?php echo e(route('get-quote')); ?>" class="theme-btn advisor-btn"><?php echo e($page_quote->title); ?></a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Lower-->
        
        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container clearfix">
                <?php if(isset($setting)): ?>
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="<?php echo e(route('home')); ?>" class="img-responsive"><img src="<?php echo e(asset('/uploads/setting/'.$setting->logo_path)); ?>" alt="Logo"></a>
                </div>
                <?php endif; ?>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu  navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix">
                                <?php
                                    $page_home = \App\Models\PageSetup::page('home');
                                ?>
                                <?php if(isset($page_home)): ?>
                                <li class="<?php echo e(Request::path() == '/' ? 'current' : ''); ?>"><a href="<?php echo e(route('home')); ?>"><?php echo e($page_home->title); ?></a></li>
                                <?php endif; ?>

                                <?php
                                    $page_about = \App\Models\PageSetup::page('about-us');
                                ?>
                                <?php if(isset($page_about)): ?>
                                <li class="<?php echo e(Request::is('about*') ? 'current' : ''); ?>"><a href="<?php echo e(route('about')); ?>"><?php echo e($page_about->title); ?></a></li>
                                <?php endif; ?>

                                <?php
                                    $page_services = \App\Models\PageSetup::page('services');
                                ?>
                                <?php if(isset($page_services)): ?>
                                <li class="dropdown <?php echo e(Request::is('service*') ? 'current' : ''); ?>"><a href="<?php echo e(route('services')); ?>"><?php echo e($page_services->title); ?></a>
                                    <ul>
                                        <?php $__currentLoopData = $service_subnavs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service_subnav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="<?php echo e(Request::is('service/'.$service_subnav->slug) ? 'current' : ''); ?>"><a href="<?php echo e(route('service.single', $service_subnav->slug)); ?>"><?php echo e($service_subnav->title); ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                                <?php endif; ?>

                                <?php
                                    $page_portfolio = \App\Models\PageSetup::page('portfolio');
                                ?>
                                <?php if(isset($page_portfolio)): ?>
                                <li class="<?php echo e(Request::is('portfolio*') ? 'current' : ''); ?>"><a href="<?php echo e(route('portfolios')); ?>"><?php echo e($page_portfolio->title); ?></a></li>
                                <?php endif; ?>

                                <?php
                                    $page_pricing = \App\Models\PageSetup::page('pricing');
                                ?>
                                <?php if(isset($page_pricing)): ?>
                                <li class="<?php echo e(Request::is('pricing*') ? 'current' : ''); ?>"><a href="<?php echo e(route('pricing')); ?>"><?php echo e($page_pricing->title); ?></a></li>
                                <?php endif; ?>

                                <?php
                                    $page_blog = \App\Models\PageSetup::page('blog');
                                ?>
                                <?php if(isset($page_blog)): ?>
                                <li class="dropdown <?php echo e(Request::is('blog*') ? 'current' : ''); ?>"><a href="<?php echo e(route('blogs')); ?>"><?php echo e($page_blog->title); ?></a>
                                    <ul>
                                        <?php $__currentLoopData = $article_subnavs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article_subnav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="<?php echo e(Request::is('blogs/'.$article_subnav->slug) ? 'current' : ''); ?>"><a href="<?php echo e(route('blog.category', $article_subnav->slug)); ?>"><?php echo e($article_subnav->title); ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                                <?php endif; ?>

                                <?php
                                    $page_faqs = \App\Models\PageSetup::page('faqs');
                                ?>
                                <?php if(isset($page_faqs)): ?>
                                <li class="<?php echo e(Request::is('faqs*') ? 'current' : ''); ?>"><a href="<?php echo e(route('faqs')); ?>"><?php echo e($page_faqs->title); ?></a></li>
                                <?php endif; ?>

                                <?php
                                    $page_contact = \App\Models\PageSetup::page('contact-us');
                                ?>
                                <?php if(isset($page_contact)): ?>
                                <li class="<?php echo e(Request::path() == 'contact' ? 'current' : ''); ?>"><a href="<?php echo e(route('contact')); ?>"><?php echo e($page_contact->title); ?></a></li>
                                <?php endif; ?>

                                <?php
                                    $page_quote = \App\Models\PageSetup::page('get-quote');
                                ?>
                                <?php if(isset($page_quote)): ?>
                                <li class="advisor-box <?php echo e(Request::is('get-quote*') ? 'current' : ''); ?>">
                                    <a href="<?php echo e(route('get-quote')); ?>"><?php echo e($page_quote->title); ?></a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>
    <!--End Main Header -->


    <!-- Content Start -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- Content End -->


    <?php
        $section_subscribe = \App\Models\Section::section('subscribe');
    ?>
    <?php if(isset($section_subscribe)): ?>
    <!--Subscribe Section-->
    <section class="subscribe-section">
        <div class="container">
            <div class="row clearfix">
                <!--Form Column-->
                <div class="title-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <h2><?php echo e($section_subscribe->title); ?></h2>
                    <div class="text"><?php echo $section_subscribe->description; ?></div>
                    <div class="icon-box">
                        <span class="icon flaticon-mail"></span>
                    </div>
                </div>
                <!--Form Column-->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="subscribe-form">
                            <form method="post" action="<?php echo e(route('subscribe')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="<?php echo e(__('contact.email_address')); ?>" required>
                                    <button type="submit" class="theme-btn"><i class="fab fa-telegram-plane"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Subscribe Section-->
    <?php endif; ?>

    <!-- Main Footer -->
    <footer class="main-footer" style="background-image: url(<?php echo e(asset('web/images/background/footer-bg.jpg')); ?>);">
        <div class="container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    <div class="big-column col-xl-8 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-12 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <?php if(isset($setting)): ?>
                                    <div class="footer-logo"><a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('/uploads/setting/'.$setting->logo_path)); ?>" alt="Logo"></a></div>
                                    
                                    <div class="widget-content">
                                        <ul class="info-box">
                                            <li><i class="far fa-map"></i><span><?php echo e(__('contact.address')); ?>:</span> <?php echo e($setting->contact_address); ?></li>
                                            <li><i class="fa fa-phone-volume"></i> <span><?php echo e(__('contact.phone')); ?>:</span> <?php echo e($setting->phone_one); ?><?php if(isset($setting->phone_two)): ?>, <?php endif; ?> <?php echo e($setting->phone_two); ?> </li>
                                            <li><i class="fas fa-envelope"></i> <span><?php echo e(__('contact.email')); ?>:</span> <?php echo e($setting->email_one); ?><?php if(isset($setting->email_two)): ?>, <?php endif; ?> <?php echo e($setting->email_two); ?> </li>
                                        </ul>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <?php if(count($pages) > 0): ?>
                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-12 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title"><?php echo e(__('common.footer_links')); ?></h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="<?php echo e(route('page.single', $page->slug)); ?>"><?php echo e($page->title); ?></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div> 
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php if(count($recents) > 0): ?>
                    <div class="big-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-lg-12 col-md-12 col-sm-12">
                                <div class="footer-widget recent-posts">
                                    <h2 class="widget-title"><?php echo e(__('common.recent_posts')); ?></h2>
                                     <!--Footer Column-->
                                    <div class="widget-content">
                                        <div class="item">
                                            <?php $__currentLoopData = $recents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $recent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($key <= 1): ?>
                                            <div class="post">
                                                <ul class="post-date">
                                                    <li><?php echo e(date('F d Y', strtotime($recent->created_at))); ?></li>
                                                </ul>
                                                <div class="thumb"><a href="<?php echo e(route('blog.single', $recent->slug)); ?>"><img src="<?php echo e(asset('uploads/article/'.$recent->image_path)); ?>" alt="<?php echo e($recent->title); ?>"></a></div>
                                                <h4><a href="<?php echo e(route('blog.single', $recent->slug)); ?>"><?php echo str_limit(strip_tags($recent->title), 50, ' ...'); ?></a></h4>
                                            </div>
                                            <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="container">
                <div class="inner-container clearfix">
                    <?php if(isset($setting)): ?>
                    <div class="copyright-text">&copy; <?php echo strip_tags($setting->footer_text, '<p><a><b><i><u><strong>'); ?></div>
                    <?php endif; ?>
                    <div class="social-links">
                        <ul class="social-icon-two">
                            <?php if(isset($social->facebook)): ?>
                            <li><a href="<?php echo e($social->facebook); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <?php endif; ?>
                            <?php if(isset($social->twitter)): ?>
                            <li><a href="<?php echo e($social->twitter); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <?php endif; ?>
                            <?php if(isset($social->instagram)): ?>
                            <li><a href="<?php echo e($social->instagram); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <?php endif; ?>
                            <?php if(isset($social->linkedin)): ?>
                            <li><a href="<?php echo e($social->linkedin); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <?php endif; ?>
                            <?php if(isset($social->pinterest)): ?>
                            <li><a href="<?php echo e($social->pinterest); ?>" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                            <?php endif; ?>
                            <?php if(isset($social->youtube)): ?>
                            <li><a href="<?php echo e($social->youtube); ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <?php endif; ?>
                            <?php if(isset($social->skype)): ?>
                            <li><a href="skype:<?php echo e($social->skype); ?>?chat" target="_blank"><i class="fab fa-skype"></i></a></li>
                            <?php endif; ?>
                            <?php if(isset($social->whatsapp)): ?>
                            <li><a href="https://wa.me/<?php echo e(str_replace(' ', '', $social->whatsapp)); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->



</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fas fa-angle-double-up"></span></div>

    <script src="<?php echo e(asset('web/js/jquery.js')); ?>"></script> 
    <script src="<?php echo e(asset('web/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('web/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('web/js/jquery.fancybox.js')); ?>"></script>
    <script src="<?php echo e(asset('web/js/owl.js')); ?>"></script>
    <script src="<?php echo e(asset('web/js/wow.js')); ?>"></script>
    <script src="<?php echo e(asset('web/js/appear.js')); ?>"></script>
    <script src="<?php echo e(asset('web/js/isotope.js')); ?>"></script>
    <script src="<?php echo e(asset('web/js/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
    <script src="<?php echo e(asset('web/js/jquery-ui.js')); ?>"></script>
    <script src="<?php echo e(asset('web/js/mixitup.js')); ?>"></script>
    <?php if($livechat->status == 1): ?>
    <script src="<?php echo e(asset('web/js/floating-wpp.min.js')); ?>"></script>
    <?php endif; ?>
    <script src="<?php echo e(asset('web/js/script.js')); ?>"></script>


    <?php if($livechat->status == 1): ?>
    <!--Div where the WhatsApp will be rendered-->
    <div id="whatspp_live"></div>

    <script type="text/javascript">
        (function($) {
        "use strict";
          $('#whatspp_live').floatingWhatsApp({
            phone: '<?php echo e($livechat->whatsapp_no); ?>', //WhatsApp Business phone number International format
            headerTitle: '<?php echo e($livechat->whatsapp_title); ?>', //Popup Title
            popupMessage: '<?php echo e($livechat->whatsapp_greeting); ?>', //Popup Message
            showPopup: true, //Enables popup display
            buttonImage: '<img src="<?php echo e(asset('web/images/social/whatsapp.png')); ?>">', //Button Image
            headerColor: '<?php echo e($livechat->whatsapp_color); ?>', //headerColor: 'crimson', //Custom header color
            backgroundColor: 'transparent', //backgroundColor: 'crimson', //Custom background button color
            position: "right"    
          });
        })(jQuery);
    </script>
    <?php endif; ?>


    <?php if($livechat->status == 0): ?>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script type="text/javascript">
        (function($) {
        "use strict";
            
            window.fbAsyncInit = function() {
              FB.init({
                xfbml            : true,
                version          : 'v8.0'
              });
            };

            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

        })(jQuery); 
    </script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
        attribution=setup_tool
        page_id="<?php echo e($livechat->facebook_id); ?>"
        theme_color="<?php echo e($livechat->facebook_color); ?>"
        logged_in_greeting="<?php echo e($livechat->facebook_greeting_in); ?>"
        logged_out_greeting="<?php echo e($livechat->facebook_greeting_out); ?>">
    </div>
    <?php endif; ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/web/layouts/master.blade.php ENDPATH**/ ?>