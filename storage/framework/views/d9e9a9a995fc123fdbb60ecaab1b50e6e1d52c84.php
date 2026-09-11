

<?php
    $header = \App\Models\PageSetup::page('pricing');
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
                    <h1><?php echo e(__('navbar.pricing')); ?></h1>
                </div>
                <div class="bread-crumb">
                    <ul>
                        <li><?php echo e(__('navbar.pricing')); ?></li>
                        <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('navbar.home')); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <?php
        $section_pricing = \App\Models\Section::section('pricing');
    ?>
    <?php if(count($pricings) > 0 && isset($section_pricing)): ?>
    <!--Pricing Section-->
    <section class="price-section" style="background-image: url(<?php echo e(asset('web/images/background/pricetable-bg.jpg')); ?>);">
        <div class="container">
            <div class="sec-title centered">
                <h2><?php echo e($section_pricing->title); ?></h2>
                <div class="text"><?php echo $section_pricing->description; ?></div>
                <div class="separater"></div>
            </div>
            <div class="outer-container pricing-tabs">
                <div class="clearfix">
                          
                    <!--Price Column-->
                    <div class="price-column">
                        <div class="inner-column">
                            
                            <div class="content">
                                <div class="row clearfix">
                                    <?php $__currentLoopData = $pricings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pricing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                                    <!-- Price Block -->
                                    <div class="price-block col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="upper-box">
                                                <h3><?php echo e($pricing->title); ?></h3>
                                            </div>
                                            <div class="price">
                                                <sub><?php echo e(__('common.currency')); ?></sub><?php echo e($pricing->price); ?>

                                                <?php if(isset($pricing->old_price)): ?>
                                                <del><?php echo e($pricing->old_price); ?></del>
                                                <?php endif; ?>
                                               <span>/ <?php echo e($pricing->duration); ?></span>
                                            </div>
                                            <div class="middle-box">
                                                <ul>
                                                    <?php
                                                        $features = json_decode($pricing->description, true);
                                                    ?>

                                                    <?php if(isset($features)): ?>
                                                    <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><?php echo e($feature); ?></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>

                                            <?php
                                                $page_quote = \App\Models\PageSetup::page('get-quote');
                                                $page_contact = \App\Models\PageSetup::page('contact-us');
                                            ?>
                                            <?php if(isset($page_quote)): ?>
                                            <a href="<?php echo e(route('get-quote')); ?>" class="purchased btn-style-three"><?php echo e(__('common.get_start')); ?></a>
                                            <?php elseif(isset($page_contact)): ?>
                                            <a href="<?php echo e(route('contact')); ?>" class="purchased btn-style-three"><?php echo e(__('common.get_start')); ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                      
                </div>
            </div>
        </div>
    </section>
    <!--End Pricing Section-->
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
<?php echo $__env->make('web.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/web/pricing.blade.php ENDPATH**/ ?>