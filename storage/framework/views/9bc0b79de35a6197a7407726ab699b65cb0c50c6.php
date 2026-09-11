<!--- Sidemenu -->
<div id="sidebar-menu">

    <ul class="metismenu" id="side-menu">

        <li class="menu-title"><?php echo e(__('dashboard.navigation')); ?></li>

        <li>
            <a href="<?php echo e(route('admin.dashboard.index')); ?>">
                <span class="icon"><i class="fas fa-desktop"></i></span>
                <span> <?php echo e(trans_choice('dashboard.dashboard', 1)); ?> </span>
            </a>
        </li>

        <li>
            <a href="<?php echo e(route('admin.get-quote.index')); ?>">
                <span class="icon"><i class="fas fa-quote-right"></i></span>
                <span> <?php echo e(trans_choice('dashboard.quote', 2)); ?> </span>
            </a>
        </li>

        <li>
            <a href="<?php echo e(route('admin.invoice.index')); ?>">
                <span class="icon"><i class="fas fa-file-invoice-dollar"></i></span>
                <span> <?php echo e(trans_choice('dashboard.invoice', 2)); ?> </span>
            </a>
        </li>

        <li>
            <a href="javascript: void(0);">
                <span class="icon"><i class="fas fa-newspaper"></i></span>
                <span> <?php echo e(trans_choice('dashboard.blog', 2)); ?> </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li>
                    <a href="<?php echo e(route('admin.article.index')); ?>"><?php echo e(trans_choice('dashboard.blog_list', 2)); ?></a>
                    <a href="<?php echo e(route('admin.article-category.index')); ?>"><?php echo e(trans_choice('dashboard.blog_category', 2)); ?></a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);">
                <span class="icon"><i class="far fa-images"></i></span>
                <span> <?php echo e(trans_choice('dashboard.portfolio', 2)); ?> </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li>
                    <a href="<?php echo e(route('admin.portfolio.index')); ?>"><?php echo e(trans_choice('dashboard.portfolio_list', 2)); ?></a>
                    <a href="<?php echo e(route('admin.portfolio-category.index')); ?>"><?php echo e(trans_choice('dashboard.portfolio_category', 2)); ?></a>
                </li>
            </ul>
        </li>

        <li>
            <a href="<?php echo e(route('admin.service.index')); ?>">
                <span class="icon"><i class="fas fa-tools"></i></span>
                <span> <?php echo e(trans_choice('dashboard.service', 2)); ?> </span>
            </a>
        </li>

        <li>
            <a href="<?php echo e(route('admin.pricing.index')); ?>">
                <span class="icon"><i class="fas fa-tags"></i></span>
                <span> <?php echo e(trans_choice('dashboard.pricing', 2)); ?> </span>
            </a>
        </li>

        <li>
            <a href="javascript: void(0);">
                <span class="icon"><i class="fas fa-users"></i></span>
                <span> <?php echo e(trans_choice('dashboard.team', 2)); ?> </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li>
                    <a href="<?php echo e(route('admin.member.index')); ?>"><?php echo e(trans_choice('dashboard.member', 2)); ?></a>
                    <a href="<?php echo e(route('admin.designation.index')); ?>"><?php echo e(trans_choice('dashboard.designation', 2)); ?></a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);">
                <span class="icon"><i class="fas fa-question-circle"></i></span>
                <span> <?php echo e(trans_choice('dashboard.faq', 2)); ?> </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li>
                    <a href="<?php echo e(route('admin.faq.index')); ?>"><?php echo e(trans_choice('dashboard.faq_list', 2)); ?></a>
                    <a href="<?php echo e(route('admin.faq-category.index')); ?>"><?php echo e(trans_choice('dashboard.faq_category', 2)); ?></a>
                </li>
            </ul>
        </li>

        <li>
            <a href="<?php echo e(route('admin.slider.index')); ?>">
                <span class="icon"><i class="fas fa-photo-video"></i></span>
                <span> <?php echo e(trans_choice('dashboard.slider', 2)); ?> </span>
            </a>
        </li>

        <li>
            <a href="<?php echo e(route('admin.client.index')); ?>">
                <span class="icon"><i class="fas fa-mug-hot"></i></span>
                <span> <?php echo e(trans_choice('dashboard.partner', 2)); ?> </span>
            </a>
        </li>

        <li>
            <a href="<?php echo e(route('admin.testimonial.index')); ?>">
                <span class="icon"><i class="fas fa-comments"></i></span>
                <span> <?php echo e(trans_choice('dashboard.testimonial', 2)); ?> </span>
            </a>
        </li>

        <li>
            <a href="<?php echo e(route('admin.work-process.index')); ?>">
                <span class="icon"><i class="fas fa-chart-line"></i></span>
                <span> <?php echo e(trans_choice('dashboard.work_process', 2)); ?> </span>
            </a>
        </li>

        <li>
            <a href="<?php echo e(route('admin.why-choose-us.index')); ?>">
                <span class="icon"><i class="fas fa-hand-point-right"></i></span>
                <span> <?php echo e(trans_choice('dashboard.feature', 2)); ?> </span>
            </a>
        </li>

        <li>
            <a href="<?php echo e(route('admin.counter.index')); ?>">
                <span class="icon"><i class="fas fa-stopwatch-20"></i></span>
                <span> <?php echo e(trans_choice('dashboard.counter', 2)); ?> </span>
            </a>
        </li>

        <li>
            <a href="<?php echo e(route('admin.contact.index')); ?>">
                <span class="icon"><i class="fas fa-envelope-open-text"></i></span>
                <span> <?php echo e(trans_choice('dashboard.email', 2)); ?> </span>
            </a>
        </li>

        <li>
            <a href="<?php echo e(route('admin.subscriber.index')); ?>">
                <span class="icon"><i class="fas fa-mail-bulk"></i></span>
                <span> <?php echo e(trans_choice('dashboard.subscriber', 2)); ?> </span>
            </a>
        </li>

        <li>
            <a href="javascript: void(0);">
                <span class="icon"><i class="fas fa-file"></i></span>
                <span> <?php echo e(trans_choice('dashboard.page', 2)); ?> </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li>
                    <a href="<?php echo e(route('admin.page-setup.index')); ?>"><?php echo e(trans_choice('dashboard.page_setup', 2)); ?></a>
                    <a href="<?php echo e(route('admin.page.index')); ?>"><?php echo e(trans_choice('dashboard.footer_page', 2)); ?></a>
                    <a href="<?php echo e(route('admin.section.index')); ?>"><?php echo e(trans_choice('dashboard.section', 2)); ?></a>
                    <a href="<?php echo e(route('admin.about.index')); ?>"><?php echo e(trans_choice('dashboard.about', 2)); ?></a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);">
                <span class="icon"><i class="fas fa-language"></i></span>
                <span> <?php echo e(trans_choice('dashboard.language', 2)); ?> </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li>
                    <a href="<?php echo e(route('admin.language.index')); ?>"><?php echo e(trans_choice('dashboard.language', 1)); ?> <?php echo e(__('dashboard.setup')); ?></a>
                    <a href="<?php echo e(URL('admin/translation')); ?>" target="_blank"><?php echo e(trans_choice('dashboard.translation', 2)); ?></a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);">
                <span class="icon"><i class="fas fa-cog"></i></span>
                <span> <?php echo e(trans_choice('dashboard.setting', 2)); ?> </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li>
                    <a href="<?php echo e(route('admin.setting.index')); ?>"><?php echo e(trans_choice('dashboard.general_setting', 2)); ?></a>
                    <a href="<?php echo e(route('admin.template.index')); ?>"><?php echo e(trans_choice('dashboard.template', 2)); ?></a>
                    <a href="<?php echo e(route('admin.livechat.index')); ?>"><?php echo e(trans_choice('dashboard.live_chat', 2)); ?></a>
                </li>
            </ul>
        </li>

    </ul>

</div>
<!-- End Sidebar --><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/admin/inc/sidebar.blade.php ENDPATH**/ ?>