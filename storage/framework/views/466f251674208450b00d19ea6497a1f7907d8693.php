
<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>

<!-- Start Content-->
<div class="container-fluid">
    
    <!-- start page title -->
    <!-- Include page breadcrumb -->
    <?php echo $__env->make('admin.inc.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end page title --> 


    <div class="row">
        <div class="col-12">
            <a href="<?php echo e(route($route.'.index')); ?>" class="btn btn-info"><?php echo e(__('dashboard.refresh')); ?></a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                  <h4 class="header-title"><?php echo e($title); ?></h4>
                  <br/>

                  <ul class="nav nav-tabs mb-3">
                    <li class="nav-item">
                        <a href="#website-tab" data-toggle="tab" aria-expanded="false" class="nav-link active">
                            <?php echo e(__('dashboard.site_info')); ?>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact-tab" data-toggle="tab" aria-expanded="true" class="nav-link">
                            <?php echo e(__('dashboard.contact_info')); ?>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#social-tab" data-toggle="tab" aria-expanded="false" class="nav-link">
                            <?php echo e(__('dashboard.social_info')); ?>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#custom-tab" data-toggle="tab" aria-expanded="true" class="nav-link">
                            <?php echo e(__('dashboard.customization')); ?>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#account-tab" data-toggle="tab" aria-expanded="false" class="nav-link">
                            <?php echo e(__('dashboard.account')); ?>

                        </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane show active" id="website-tab">
                        
                      <!-- Form Start -->
                      <form class="needs-validation" novalidate action="<?php echo e(route($route.'.siteinfo')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input name="id" type="hidden" value="<?php echo e((isset($row->id))?$row->id:-1); ?>">

                        <div class="form-group">
                            <label for="title"><?php echo e(__('dashboard.site_title')); ?> <span>*</span></label>
                            <input type="text" class="form-control" name="title" id="title" value="<?php echo e(isset($row->title)?$row->title:''); ?>" required>

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.site_title')); ?>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description"><?php echo e(__('dashboard.meta_description')); ?>: <span><?php echo e(__('dashboard.meta_desc_length')); ?></span></label>
                            <textarea class="form-control" name="description" id="description" rows="4"><?php echo e(isset($row->description)?$row->description:''); ?></textarea>

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.meta_description')); ?>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="keywords"><?php echo e(__('dashboard.meta_keywords')); ?>: <span><?php echo e(__('dashboard.keywords_separate')); ?></span></label>
                            <textarea class="form-control" name="keywords" id="keywords" rows="4"><?php echo e(isset($row->keywords)?$row->keywords:''); ?></textarea>

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.meta_keywords')); ?>

                            </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-6">

                            <?php if(isset($row->logo_path)): ?>
                            <?php if(is_file('uploads/'.$path.'/'.$row->logo_path)): ?>
                            <img src="<?php echo e(asset('uploads/'.$path.'/'.$row->logo_path)); ?>" class="img-fluid site-image" alt="<?php echo e(__('dashboard.site_logo')); ?>">
                            <?php endif; ?>
                            <?php endif; ?>

                            <label for="logo"><?php echo e(__('dashboard.site_logo')); ?>: <span><?php echo e(__('dashboard.image_size', ['height' => 80, 'width' => 'Any'])); ?></span></label>
                            <input type="file" class="form-control" name="logo" id="logo">

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.site_logo')); ?>

                            </div>
                          </div>

                          <div class="form-group col-md-6">

                            <?php if(isset($row->favicon_path)): ?>
                            <?php if(is_file('uploads/'.$path.'/'.$row->favicon_path)): ?>
                            <img src="<?php echo e(asset('uploads/'.$path.'/'.$row->favicon_path)); ?>" class="img-fluid site-image" alt="<?php echo e(__('dashboard.site_favicon')); ?>">
                            <?php endif; ?>
                            <?php endif; ?>

                            <label for="favicon"><?php echo e(__('dashboard.site_favicon')); ?>: <span><?php echo e(__('dashboard.image_size', ['height' => 64, 'width' => 64])); ?></span></label>
                            <input type="file" class="form-control" name="favicon" id="favicon">

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.site_favicon')); ?>

                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                            <label for="footer_text"><?php echo e(__('dashboard.footer_text')); ?> <span>*</span></label>
                            <textarea class="form-control" name="footer_text" id="footer_text" rows="2" required><?php echo e(isset($row->footer_text)?$row->footer_text:''); ?></textarea>

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.footer_text')); ?>

                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.update')); ?></button>
                        </div>

                      </form>
                      <!-- Form End -->

                    </div>
                    <div class="tab-pane" id="contact-tab">
                        
                      <!-- Form Start -->
                      <form class="needs-validation" novalidate action="<?php echo e(route($route.'.contactinfo')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input name="id" type="hidden" value="<?php echo e((isset($row->id))?$row->id:-1); ?>">

                        <div class="row">
                          <div class="form-group col-md-6">
                            <label for="phone_no"><?php echo e(__('dashboard.phone_no_1')); ?> <span>*</span></label>
                            <input type="text" class="form-control" name="phone_no" id="phone_no" value="<?php echo e(isset($row->phone_one)?$row->phone_one:''); ?>" required>

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.phone_no_1')); ?>

                            </div>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="phone_no2"><?php echo e(__('dashboard.phone_no_2')); ?></label>
                            <input type="text" class="form-control" name="phone_no2" id="phone_no2" value="<?php echo e(isset($row->phone_two)?$row->phone_two:''); ?>">

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.phone_no_2')); ?>

                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-6">
                            <label for="email_address"><?php echo e(__('dashboard.email_address_1')); ?> <span>*</span></label>
                            <input type="email" class="form-control" name="email_address" id="email_address" value="<?php echo e(isset($row->email_one)?$row->email_one:''); ?>" required>

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.email_address_1')); ?>

                            </div>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="email_address2"><?php echo e(__('dashboard.email_address_2')); ?></label>
                            <input type="email" class="form-control" name="email_address2" id="email_address2" value="<?php echo e(isset($row->email_two)?$row->email_two:''); ?>">

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.email_address_2')); ?>

                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-6">
                            <label for="contact_address"><?php echo e(__('dashboard.contact_address')); ?> <span>*</span></label>
                            <input type="text" class="form-control" name="contact_address" id="contact_address" value="<?php echo e(isset($row->contact_address)?$row->contact_address:''); ?>" required>

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.contact_address')); ?>

                            </div>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="contact_mail"><?php echo e(__('dashboard.contact_mail')); ?> <span>*</span></label>
                            <input type="email" class="form-control" name="contact_mail" id="contact_mail" value="<?php echo e(isset($row->contact_mail)?$row->contact_mail:''); ?>" required>

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.contact_mail')); ?>

                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                            <label for="office_hours"><?php echo e(__('dashboard.office_hours')); ?> <span><?php echo e(__('dashboard.open_close_times')); ?></span></label>
                            <textarea class="form-control summernote" name="office_hours" id="office_hours" rows="4"><?php echo e(isset($row->office_hours)?$row->office_hours:''); ?></textarea>

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.office_hours')); ?>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="google_map"><?php echo e(__('dashboard.google_map')); ?> <span><?php echo e(__('dashboard.embed_code')); ?></span> <a href="https://www.google.com/maps" target="_blank"><?php echo e(__('dashboard.google_map')); ?></a></label>
                            <textarea class="form-control" name="google_map" id="google_map" rows="4"><?php echo e(isset($row->google_map)?$row->google_map:''); ?></textarea>

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.google_map')); ?>

                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.update')); ?></button>
                        </div>

                      </form>
                      <!-- Form End -->

                    </div>
                    <div class="tab-pane" id="social-tab">
                        
                      <!-- Form Start -->
                      <form class="needs-validation" novalidate action="<?php echo e(route($route.'.socialinfo')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input name="id" type="hidden" value="<?php echo e((isset($social->id))?$social->id:-1); ?>">

                        <div class="row">
                          <div class="form-group col-md-6">
                            <label for="facebook"><?php echo e(__('dashboard.facebook')); ?></label>
                            <input type="url" class="form-control" name="facebook" id="facebook" value="<?php echo e(isset($social->facebook)?$social->facebook:''); ?>">

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.facebook')); ?>

                            </div>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="twitter"><?php echo e(__('dashboard.twitter')); ?></label>
                            <input type="url" class="form-control" name="twitter" id="twitter" value="<?php echo e(isset($social->twitter)?$social->twitter:''); ?>">

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.twitter')); ?>

                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-6">
                            <label for="linkedin"><?php echo e(__('dashboard.linkedin')); ?></label>
                            <input type="url" class="form-control" name="linkedin" id="linkedin" value="<?php echo e(isset($social->linkedin)?$social->linkedin:''); ?>">

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.linkedin')); ?>

                            </div>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="instagram"><?php echo e(__('dashboard.instagram')); ?></label>
                            <input type="url" class="form-control" name="instagram" id="instagram" value="<?php echo e(isset($social->instagram)?$social->instagram:''); ?>">

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.instagram')); ?>

                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-6">
                            <label for="pinterest"><?php echo e(__('dashboard.pinterest')); ?></label>
                            <input type="url" class="form-control" name="pinterest" id="pinterest" value="<?php echo e(isset($social->pinterest)?$social->pinterest:''); ?>">

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.pinterest')); ?>

                            </div>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="youtube"><?php echo e(__('dashboard.youtube')); ?></label>
                            <input type="url" class="form-control" name="youtube" id="youtube" value="<?php echo e(isset($social->youtube)?$social->youtube:''); ?>">

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.youtube')); ?>

                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-6">
                            <label for="skype"><?php echo e(__('dashboard.skype')); ?></label>
                            <input type="text" class="form-control" name="skype" id="skype" value="<?php echo e(isset($social->skype)?$social->skype:''); ?>">

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.skype')); ?>

                            </div>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="whatsapp"><?php echo e(__('dashboard.whatsapp')); ?> <span>(<?php echo e(__('dashboard.inc_country_code')); ?>)</span></label>
                            <input type="text" class="form-control" name="whatsapp" id="whatsapp" value="<?php echo e(isset($social->whatsapp)?$social->whatsapp:''); ?>">

                            <div class="invalid-feedback">
                              <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.whatsapp')); ?>

                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.update')); ?></button>
                        </div>

                      </form>
                      <!-- Form End -->

                    </div>
                    <div class="tab-pane" id="custom-tab">
                        
                      <!-- Form Start -->
                      <form class="needs-validation" novalidate action="<?php echo e(route($route.'.customcode')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input name="id" type="hidden" value="<?php echo e((isset($row->id))?$row->id:-1); ?>">

                        <div class="form-group">
                            <label for="custom_css"><?php echo e(__('dashboard.custom_css')); ?></label>
                            <textarea class="form-control codeEditor" name="custom_css" id="custom_css" rows="20"><?php echo e(isset($row->custom_css)?$row->custom_css:''); ?></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.update')); ?></button>
                        </div>

                      </form>
                      <!-- Form End -->

                    </div>
                    <div class="tab-pane" id="account-tab">

                      <div class="card">
                        <div class="card-header">
                          <h4 class="header-title"><?php echo e(__('dashboard.admin_mail_address')); ?></h4>
                        </div>
                        <div class="card-body">
                          <!-- Form Start -->
                          <form class="needs-validation" novalidate action="<?php echo e(route($route.'.changemail')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('dashboard.mail_address')); ?> <span>*</span></label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(Auth::user()->email); ?>" required>

                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                    <div class="invalid-feedback">
                                      <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.mail_address')); ?>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.change')); ?></button>
                                </div>
                            </div>

                          </form>
                          <!-- Form End -->
                        </div>
                      </div>
                        
                      <div class="card">
                        <div class="card-header">
                          <h4 class="header-title"><?php echo e(__('dashboard.admin_change_password')); ?></h4>
                        </div>
                        <div class="card-body">
                          <!-- Form Start -->
                          <form class="needs-validation" novalidate action="<?php echo e(route($route.'.changepass')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('dashboard.old_password')); ?> <span>*</span></label>

                                <div class="col-md-6">
                                    <input id="old_password" type="password" class="form-control <?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="old_password" required autocomplete="old_password">

                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                    <div class="invalid-feedback">
                                      <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.old_password')); ?>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('dashboard.new_password')); ?> <span>*</span></label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">

                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                    <div class="invalid-feedback">
                                      <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.new_password')); ?>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('dashboard.confirm_password')); ?> <span>*</span></label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="invalid-feedback">
                                    <?php echo e(__('dashboard.please_provide')); ?> <?php echo e(__('dashboard.confirm_password')); ?>

                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.change')); ?></button>
                                </div>
                            </div>

                          </form>
                          <!-- Form End -->
                        </div>
                      </div>
                      

                    </div>
                  </div>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->

    
</div> <!-- container -->
<!-- End Content-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cynaris\resources\views/admin/setting/index.blade.php ENDPATH**/ ?>