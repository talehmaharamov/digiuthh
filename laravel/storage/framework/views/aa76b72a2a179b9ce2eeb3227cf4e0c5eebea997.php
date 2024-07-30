<?php $__env->startSection('title', __('header.contact') . ' -'); ?>

<?php $__env->startSection('content'); ?>
    <section class="breadcrumb-area d-flex align-items-center"
             style="background-image:url(<?php echo e(asset('assets/img/testimonial/test-bg.png')); ?>)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <?php if(\Illuminate\Support\Facades\Lang::has('header.contact')): ?>
                                <h2><?php echo e(__('header.contact')); ?></h2>
                            <?php endif; ?>
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <?php if(\Illuminate\Support\Facades\Lang::has('header.home')): ?>
                                            <li class="breadcrumb-item"><a href="/"><?php echo e(__('header.home')); ?></a></li>
                                        <?php endif; ?>
                                        <?php if(\Illuminate\Support\Facades\Lang::has('header.contact')): ?>
                                            <li class="breadcrumb-item active"
                                                aria-current="page"><?php echo e(__('header.contact')); ?></li>
                                        <?php endif; ?>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="services-area pt-120 pb-90 fix"
             style=" background-image: url(<?php echo e(asset('assets/img/bg/blog-bg-aliments.png')); ?>); background-repeat: no-repeat; background-position: center center;background-attachment: fixed;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-align text-center mb-50">
                        <?php if(\Illuminate\Support\Facades\Lang::has('contact_page.contact_title')): ?>
                            <h5><?php echo e(__('contact_page.contact_title')); ?></h5>
                        <?php endif; ?>
                        <?php if(\Illuminate\Support\Facades\Lang::has('contact_page.contact_content')): ?>
                            <h2><?php echo e(__('contact_page.contact_content')); ?></h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="services-box mt-0 mb-30 text-center">
                        <div class="services-icon">
                            <img src="<?php echo e(asset('/assets/img/icon/cn-icon1.png')); ?>" alt="icon01">
                        </div>
                        <div class="services-content2">
                            <?php if(\Illuminate\Support\Facades\Lang::has('contact_page.email')): ?>
                                <h5><?php echo e(__('contact_page.email')); ?></h5>
                            <?php else: ?>
                                <h5></h5>
                            <?php endif; ?>
                            <p><?php echo e($contact->email_address); ?></p>
                        </div>
                    </div>
                    <div class="services-box mt-0 mb-30 text-center">
                        <div class="services-icon">
                            <img src="<?php echo e(asset('/assets/img/icon/cn-icon2.png')); ?>" alt="icon01">
                        </div>
                        <div class="services-content2">
                            <?php if(\Illuminate\Support\Facades\Lang::has('contact_page.phone')): ?>
                                <h5><?php echo e(__('contact_page.phone')); ?></h5>
                            <?php else: ?>
                                <h5></h5>
                            <?php endif; ?>
                            <p><?php echo e($contact->phone_number); ?></p>
                        </div>
                    </div>
                    <div class="services-box mt-0 mb-30 text-center">
                        <div class="services-icon">
                            <img src="<?php echo e(asset('/assets/img/icon/cn-icon3.png')); ?>" alt="icon01">
                        </div>
                        <div class="services-content2">
                            <?php if(\Illuminate\Support\Facades\Lang::has('contact_page.address')): ?>
                                <h5><?php echo e(__('contact_page.address')); ?></h5>
                            <?php else: ?>
                                <h5></h5>
                            <?php endif; ?>
                            <p><?php echo e($contact->address); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <form method="post" class="contact-form">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-name mb-20">
                                    <input required id="firstn" name="first_name" class="firstName"
                                           placeholder="<?php echo e(__('contact_page.first_name')); ?>" type="text" data-val="true"
                                           data-val-required="The FirstName field is required." value="">
                                    <span class="text-danger field-validation-valid" data-valmsg-for="FirstName"
                                          data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-email mb-20">
                                    <input required id="lastn" name="last_name" class="lastName"
                                           placeholder="<?php echo e(__('contact_page.last_name')); ?>" type="text" value="">
                                    <span class="text-danger field-validation-valid" data-valmsg-for="LastName"
                                          data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-subject mb-20">
                                    <input required id="email" class="contactEmail" name="email"
                                           placeholder="<?php echo e(__('contact_page.email')); ?>" type="email" data-val="true"
                                           data-val-email="The Email field is not a valid e-mail address."
                                           data-val-required="The Email field is required." value="">
                                    <span class="text-danger field-validation-valid" data-valmsg-for="Email"
                                          data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-subject mb-20">
                                    <input required id="phone" class="phoneContact" name="phone"
                                           placeholder="<?php echo e(__('contact_page.phone')); ?>" type="text" data-val="true"
                                           data-val-required="The Phone field is required." value="">
                                    <span class="text-danger field-validation-valid" data-valmsg-for="Phone"
                                          data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-message mb-45">
                                    <textarea required class="message" id="message" cols="30" rows="10"
                                              placeholder="<?php echo e(__('contact_page.comment')); ?>" data-val="true"
                                              data-val-required="The Message field is required."
                                              name="comment"></textarea>
                                    <span class="text-danger field-validation-valid" data-valmsg-for="Message"
                                          data-valmsg-replace="true"></span>
                                </div>
                                <?php if(\Illuminate\Support\Facades\Lang::has('contact_page.submit')): ?>
                                <div class="slider-btn">
                                    <button type="submit" class="btn ss-btn" data-animation="fadeInRight"
                                            data-delay=".8s"><?php echo e(__('contact_page.submit')); ?></button>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <input name="__RequestVerificationToken" type="hidden"
                               value="CfDJ8GhWms7VDTpGiNpNbZ3FeGI6vn1tRnYLG0COZU8evbGIP70fM5fsUHIS_3xk7CSJl6JbS1Xnd3yOf3l3naJyKAovDh0ZufasBVyf4RrarD8bxLUmnYwXAi5Oo1NP-ttg2V2F_fnxX27Y-VLS4TvvbDXSJ6QOCBuhoB-r3fgBZVzkM7--PDmRyL9ExlekPN-hgw"/>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="map" class="map fix">
        <div class="container-fulid">
            <div class="row">
                <iframe src="<?php echo e($contact->map_url); ?>"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/contact.blade.php ENDPATH**/ ?>