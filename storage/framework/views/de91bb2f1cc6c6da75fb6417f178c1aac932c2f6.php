

<?php
    $header = \App\Models\PageSetup::page('faqs');
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
                    <h1><?php echo e(__('navbar.faqs')); ?></h1>
                </div>
                <div class="bread-crumb">
                    <ul>
                        <li><?php echo e(__('navbar.faqs')); ?></li>
                        <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('navbar.home')); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <?php
        $section_faqs = \App\Models\Section::section('faqs');
    ?>
    <?php if(isset($section_faqs)): ?>
    <!--FAQs Section-->
    <section class="faq-section-two" style="background-image: url(<?php echo e(asset('web/images/background/pricetable-bg.jpg')); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-title left">
                        <h2><?php echo e($section_faqs->title); ?></h2>
                        <div class="text"><?php echo $section_faqs->description; ?></div>
                        <div class="separater"></div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <!--FAQs Category Widget-->
                <div class="faq-list-sidebar">
                    <ul class="faq-cat">
                        <?php $__currentLoopData = $faq_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="<?php if(isset($current_category)): ?> <?php if($current_category->id == $faq_category->id): ?> active <?php endif; ?> <?php endif; ?>">
                            <a href="<?php echo e(route('faqs.category', $faq_category->slug)); ?>"><?php echo e($faq_category->title); ?></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            <div class="accordion-column col-lg-8 col-md-12 col-sm-12">
                <ul class="accordion-box">

                    <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!--Accordion Block-->
                    <li class="accordion block">
                        <div class="acc-btn <?php if($key== 0): ?> active <?php endif; ?>"><div class="icon-outer"><span class="icon icon_plus fas fa-plus"></span> <span class="icon icon_minus far fa-minus"></span> </div> <?php echo e($faq->title); ?></div> 
                        <div class="acc-content <?php if($key== 0): ?> current <?php endif; ?>">
                            <div class="content">
                                <div class="text"><?php echo $faq->description; ?></div>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>
            </div>
            </div>
        </div>
    </section>
    <!--End FAQs Section-->
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
<?php echo $__env->make('web.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/web/faqs.blade.php ENDPATH**/ ?>