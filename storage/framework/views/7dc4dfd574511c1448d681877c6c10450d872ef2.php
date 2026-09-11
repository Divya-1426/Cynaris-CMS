

<?php
    $header = \App\Models\PageSetup::page('home');
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

<?php $__env->startSection('social_meta_tags'); ?>
    <?php if(isset($setting)): ?>
    <meta property="og:type" content="website">
    <meta property='og:site_name' content="<?php echo e($setting->title); ?>"/>
    <meta property='og:title' content="<?php echo e($setting->title); ?>"/>
    <meta property='og:description' content="<?php echo str_limit(strip_tags($setting->description), 160, ' ...'); ?>"/>
    <meta property='og:url' content="<?php echo e(route('home')); ?>"/>
    <meta property='og:image' content="<?php echo e(asset('/uploads/setting/'.$setting->logo_path)); ?>"/>


    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="<?php echo '@'.str_replace(' ', '', $setting->title); ?>" />
    <meta name="twitter:creator" content="@HiTechParks" />
    <meta name="twitter:url" content="<?php echo e(route('home')); ?>" />
    <meta name="twitter:title" content="<?php echo e($setting->title); ?>" />
    <meta name="twitter:description" content="<?php echo str_limit(strip_tags($setting->description), 160, ' ...'); ?>" />
    <meta name="twitter:image" content="<?php echo e(asset('/uploads/setting/'.$setting->logo_path)); ?>" />
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php if(count($sliders) > 0): ?>
    <!-- Bnner Section -->
    <section class="banner-section">
        <div class="carousel-column">
            <div class="carousel-outer">
                <div class="banner-carousel owl-carousel owl-theme">
                    <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- Slide Item -->
                    <div class="slide-item" style="background-image: url(<?php echo e(asset('uploads/slider/'.$slider->image_path)); ?>);">
                        <div class="container">
                            <div class="content-box">
                                <h1><?php echo e($slider->title); ?></h1>
                                <div class="text"><?php echo $slider->description; ?></div>
                                <div class="link-box">
                                    <?php
                                        $page_contact = \App\Models\PageSetup::page('contact-us');
                                    ?>
                                    <?php if(isset($page_contact)): ?>
                                    <a href="<?php echo e(route('contact')); ?>" class="theme-btn btn-style-one"><?php echo e(__('common.contact_us')); ?></a>
                                    <?php endif; ?>

                                    <?php if(isset($slider->link)): ?>
                                    <a href="<?php echo e($slider->link); ?>" target="_blank" class="theme-btn btn-style-two"><?php echo e(__('common.read_more')); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End Bnner Section -->
    <?php endif; ?>


    <?php if(isset($about) || count($counters) > 0): ?>
    <!-- About Section -->    
    <section class="our-mission-section">
        <div class="container">
            <?php if(isset($about)): ?>
            <div class="sec-title left">
                <h2><?php echo e($about->title); ?></h2>
                <div class="separater"></div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 wow fadeInRight animated">
                    <div class="inner-box">
                        <div class="text"><?php echo $about->description; ?> <br/></div>
                        <br/>
                        <?php
                            $page_about = \App\Models\PageSetup::page('about-us');
                        ?>
                        <?php if(isset($page_about)): ?>
                        <div class="link-box"><a href="<?php echo e(route('about')); ?>" class="theme-btn btn-style-three"><?php echo e(__('common.read_more')); ?></a></div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <?php if(isset($about->mission_title)): ?>
                    <div class="innner-box wow fadeInLeft">
                        <div class="info-box">
                            <h4><?php echo e($about->mission_title); ?></h4>
                            <div class="text"><?php echo $about->mission_desc; ?></div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(isset($about->vision_title)): ?>
                    <div class="innner-box wow fadeInLeft">
                        <div class="info-box">
                            <h4><?php echo e($about->vision_title); ?></h4>
                            <div class="text"><?php echo $about->vision_desc; ?></div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>

            <?php if(count($counters) > 0): ?>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 clearfix fun-fact-section">
                    <div class="fact-counter">
                        <div class="row">
                            <?php $__currentLoopData = $counters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $counter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!--Column-->
                            <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                                <div class="count-box">
                                    <div class="count"><span class="count-text" data-speed="5000" data-stop="<?php echo e($counter->value); ?>">0</span></div>
                                    <div class="separater"></div>
                                    <h4 class="counter-title"><?php echo e($counter->title); ?></h4>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <!--End About Section --> 
    <?php endif; ?>


    <?php
        $section_services = \App\Models\Section::section('services');
    ?>
    <?php if(count($services) > 0 && isset($section_services)): ?>
    <!-- Services Section -->
    <section class="services-section">
        <div class="container">    
            <div class="sec-title centered">
                <h2><?php echo e($section_services->title); ?></h2>
                <div class="text"><?php echo $section_services->description; ?></div>
                <div class="separater"></div>
            </div>
            <div class="services-box row clearfix">
                <div class="services-carousel owl-carousel owl-theme">
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- Service Block -->
                    <div class="service-block wow fadeInDown">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure><img src="<?php echo e(asset('uploads/service/'.$service->image_path)); ?>" alt="<?php echo e($service->title); ?>"/></figure>
                                <div class="overlay-box"><a href="<?php echo e(route('service.single', $service->slug)); ?>"><?php echo e(__('common.read_more')); ?></a></div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="<?php echo e(route('service.single', $service->slug)); ?>"><?php echo e($service->title); ?></a></h3>
                                <div class="text"><?php echo strip_tags($service->short_desc); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section -->
    <?php endif; ?>


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

                <?php
                    $page_portfolio = \App\Models\PageSetup::page('portfolio');
                ?>
                <?php if(isset($page_portfolio)): ?>
                <div class="load-more-btn text-center">
                    <a href="<?php echo e(route('portfolios')); ?>" class="theme-btn btn-style-four"><?php echo e(__('common.view_more')); ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--End Gallery Section-->
    <?php endif; ?>


    <?php
        $section_team = \App\Models\Section::section('team');
    ?>
    <?php if(count($members) > 0 && isset($section_team)): ?>
    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="sec-title left">
                <h2><?php echo e($section_team->title); ?></h2>
                <div class="text"><?php echo $section_team->description; ?></div>
                <div class="separater"></div>
            </div>

            <div class="outer-column clearfix">
                <div class="team-carousal">
                    <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- Team Block -->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><img src="<?php echo e(asset('uploads/member/'.$member->image_path)); ?>" alt="<?php echo e($member->title); ?>"></div>
                                
                            </div>
                            <div class="info-box">
                                <h3 class="name"><a><?php echo e($member->title); ?></a></h3>
                                <span class="designation"><?php echo e($member->designation->title); ?><?php if(isset($member->designation->department)): ?>, <?php echo e($member->designation->department); ?><?php endif; ?></span>
                                <?php if(isset($member->email)): ?>
                                <span><i class="far fa-envelope"></i> <?php echo e($member->email); ?></span>
                                <?php endif; ?>
                                <?php if(isset($member->phone)): ?>
                                <span><i class="fas fa-phone-volume"></i> <?php echo e($member->phone); ?></span>
                                <?php endif; ?>
                            </div>
                            <ul class="social-links">
                                <?php if(isset($member->facebook)): ?>
                                <li><a href="<?php echo e($member->facebook); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <?php endif; ?>
                                <?php if(isset($member->twitter)): ?>
                                <li><a href="<?php echo e($member->twitter); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <?php endif; ?>
                                <?php if(isset($member->instagram)): ?>
                                <li><a href="<?php echo e($member->instagram); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <?php endif; ?>
                                <?php if(isset($member->linkedin)): ?>
                                <li><a href="<?php echo e($member->linkedin); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
        </div>
    </section>
    <!--End Team Section -->
    <?php endif; ?>


    <?php
        $section_testimonials = \App\Models\Section::section('testimonials');
    ?>
    <?php if(count($testimonials) > 0 && isset($section_testimonials)): ?>
    <!-- Testimonial Section Two-->
    <section class="testimonial-section">
        <div class="container">
            <div class="sec-title centered">
                <h2><?php echo e($section_testimonials->title); ?></h2>
                <div class="text"><?php echo $section_testimonials->description; ?></div>
                <div class="separater"></div>
            </div>

            <div class="testimonial-carousel owl-carousel owl-theme">
                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- Testimonial block two -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="thumb"><img src="<?php echo e(asset('uploads/testimonial/'.$testimonial->image_path)); ?>" alt="<?php echo e($testimonial->title); ?>"></div>
                        </div>
                         <div class="info-box">
                            <div class="text"><?php echo $testimonial->description; ?></div>
                            <h5 class="name"><?php echo e($testimonial->title); ?></h5>
                            <div class="company-name"><?php echo e($testimonial->designation); ?><?php if(isset($testimonial->organization)): ?>, <?php echo e($testimonial->organization); ?><?php endif; ?></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!--End Testimonial Section Two-->
    <?php endif; ?>


    <?php
        $section_blog = \App\Models\Section::section('blog');
    ?>
    <?php if(count($articles) > 0 && isset($section_blog)): ?>
    <!-- News Section -->
    <section class="news-section">
        <div class="container">
            <div class="sec-title left">
                <h2><?php echo e($section_blog->title); ?></h2>
                <div class="text"><?php echo $section_blog->description; ?></div>
                <div class="separater"></div>
            </div>
            <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($key == 0): ?>
                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="<?php echo e(asset('uploads/article/'.$article->image_path)); ?>" alt="<?php echo e($article->title); ?>"></figure>
                            <div class="overlay-box"><a href="<?php echo e(route('blog.single', $article->slug)); ?>" class="link-btn"><?php echo e(__('common.read_more')); ?></a></div>

                        </div>
                        <div class="caption-box">
                            <h3><a href="<?php echo e(route('blog.single', $article->slug)); ?>"><?php echo str_limit(strip_tags($article->title), 50, ' ...'); ?></a></h3>
                            <div class="text"><?php echo str_limit(strip_tags($article->description), 110, ' ...'); ?></div>
                            <ul class="post-meta">
                                <li><i class="far fa-calendar-check"></i> <?php echo e(date('d M, Y', strtotime($article->created_at))); ?></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="news-block-two">
                    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($key > 0): ?>
                    <div class="inner-box">
                        <div class="row clearfix">
                            <!--Image Column-->
                            <div class="image-box col-lg-6 col-md-6 col-sm-12">
                                <div class="image">
                                    <figure class="image"><img src="<?php echo e(asset('uploads/article/'.$article->image_path)); ?>" alt="<?php echo e($article->title); ?>"></figure>
                                    <div class="overlay-box"><a href="<?php echo e(route('blog.single', $article->slug)); ?>" class="link-btn"><?php echo e(__('common.read_more')); ?></a></div>
                                </div>
                            </div>
                                <!--Content Column-->
                                <div class="caption-box col-lg-6 col-md-6 col-sm-12">
                                    <h3><a href="<?php echo e(route('blog.single', $article->slug)); ?>"><?php echo str_limit(strip_tags($article->title), 50, ' ...'); ?></a></h3>
                                <div class="text"><?php echo str_limit(strip_tags($article->description), 110, ' ...'); ?></div>
                                <ul class="post-meta">
                                    <li><i class="far fa-calendar-check"></i> <?php echo e(date('d M, Y', strtotime($article->created_at))); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            </div>
        </div>
    </section>
    <!--End News Section -->
    <?php endif; ?>


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


    <?php
        $section_clients = \App\Models\Section::section('clients');
    ?>
    <?php if(count($clients) > 0 && isset($section_clients)): ?>
    <!--Clients Section-->
    <section class="clients-section style-two">
        <div class="container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="slide-item"><figure class="image-box"><a href="<?php echo e($client->link); ?>" target="_blank"><img src="<?php echo e(asset('uploads/client/'.$client->image_path)); ?>" alt="<?php echo e($client->title); ?>"></a></figure></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section-->
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/web/index.blade.php ENDPATH**/ ?>