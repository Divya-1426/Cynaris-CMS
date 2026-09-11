<?php
    $header = \App\Models\PageSetup::page('about-us');
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
                    <h1><?php echo e(__('navbar.about')); ?></h1>
                </div>
                <div class="bread-crumb">
                    <ul>
                        <li><?php echo e(__('navbar.about')); ?></li>
                        <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('navbar.home')); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

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
        $section_whyus = \App\Models\Section::section('why-us');
    ?>
    <?php if(isset($section_whyus) || isset($about->video_id)): ?>
    <!--Why Choose Us Section -->
    <section class="why-choose-us">
        <div class="container-fluid">
            <div class="row clearfix">
                <?php if(!empty($about->video_id)): ?>
                 <!--Image Column-->
                <div class="col-lg-6 col-md-12 col-sm-12 content-cloumn wow fadeInLeft animated">
                    
                    <div class="embed-responsive embed-responsive-16by9">
                      
                    </div>
                    
                </div>
                <?php endif; ?>


                <?php if(count($chooses) > 0 && isset($section_whyus)): ?>
                <div class="col-lg-6 col-md-12 col-sm-12 content-cloumn">
                    <div class="inner-column">
                        <div class="sec-title left">
                            <h2><?php echo e($section_whyus->title); ?></h2>
                            <div class="separater"></div>
                        </div>
                        <p><?php echo $section_whyus->description; ?></p><br/>
                        <ul class="list-why-us">
                            <?php $__currentLoopData = $chooses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $choose): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($choose->title); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>

                        <?php
                            $page_quote = \App\Models\PageSetup::page('get-quote');
                            $page_contact = \App\Models\PageSetup::page('contact-us');
                        ?>
                        <?php if(isset($page_quote)): ?>
                        <a href="<?php echo e(route('get-quote')); ?>" class="btn-theme btn-style-five"><?php echo e(__('navbar.get_quote')); ?></a>
                        <?php elseif(isset($page_contact)): ?>
                        <a href="<?php echo e(route('contact')); ?>" class="btn-theme btn-style-five"><?php echo e(__('common.get_start')); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--End Why Choose Us Section -->
    <?php endif; ?>


    <?php
        $section_team = \App\Models\Section::section('team');
    ?>
    <?php if(count($members) > 0 && isset($section_team)): ?>
    <!-- Team Section -->
    <section class="team-section style-two">
        <div class="container">
            <div class="sec-title left">
                <h2><?php echo e($section_team->title); ?></h2>
                <div class="text"><?php echo $section_team->description; ?></div>
                <div class="separater"></div>
            </div>
            
            <div class="row clearfix">

                <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-6 col-sm-12">
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
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </section>
    <!--End Team Section -->
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
            <div class="sec-title centered">
                <h2><?php echo e($section_clients->title); ?></h2>
                <div class="text"><?php echo $section_clients->description; ?></div>
                <div class="separater"></div>
            </div>
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
<?php echo $__env->make('web.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/web/about.blade.php ENDPATH**/ ?>