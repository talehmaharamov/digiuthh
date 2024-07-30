<?php $__env->startSection('title', __('header.about') . ' -'); ?>

<?php $__env->startSection('content'); ?>
    <section class="breadcrumb-area d-flex align-items-center"
             style="background-image:url(<?php echo e(asset('assets/img/testimonial/test-bg.png')); ?>)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <?php if(\Illuminate\Support\Facades\Lang::has('header.about')): ?>
                                <h2><?php echo e(__('header.about')); ?></h2>
                            <?php else: ?>
                                <h2></h2>
                            <?php endif; ?>
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <?php if(\Illuminate\Support\Facades\Lang::has('header.home')): ?>
                                            <li class="breadcrumb-item"><a href="/"><?php echo e(__('header.home')); ?></a></li>
                                        <?php endif; ?>
                                        <?php if(\Illuminate\Support\Facades\Lang::has('header.about')): ?>
                                            <li class="breadcrumb-item active"
                                                aria-current="page"><?php echo e(__('header.about')); ?></li>
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
    <?php if (isset($component)) { $__componentOriginal5fab802016ded842eed606c73c4fef5470584284 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Abouts::class, []); ?>
<?php $component->withName('abouts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5fab802016ded842eed606c73c4fef5470584284)): ?>
<?php $component = $__componentOriginal5fab802016ded842eed606c73c4fef5470584284; ?>
<?php unset($__componentOriginal5fab802016ded842eed606c73c4fef5470584284); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalf408142c5b6fa557849d627f97dacc995020e175 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AboutVideos::class, []); ?>
<?php $component->withName('about-videos'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf408142c5b6fa557849d627f97dacc995020e175)): ?>
<?php $component = $__componentOriginalf408142c5b6fa557849d627f97dacc995020e175; ?>
<?php unset($__componentOriginalf408142c5b6fa557849d627f97dacc995020e175); ?>
<?php endif; ?>
    <section id="our-team" class="team-area pb-80 fix"
             style=" background-image: url(<?php echo e(asset('assets/img/bg/services-bg-aliments.png')); ?>); background-repeat: no-repeat; background-position: center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <div class="section-title center-align text-center mb-50">
                            <?php if(\Illuminate\Support\Facades\Lang::has('about_page.team_title')): ?>
                                <h5><?php echo e(__('about_page.team_title')); ?></h5>
                            <?php else: ?>
                                <h5></h5>
                            <?php endif; ?>

                            <?php if(\Illuminate\Support\Facades\Lang::has('about_page.team_content')): ?>
                                <h2>
                                    <?php echo e(__('about_page.team_content')); ?>

                                </h2>
                            <?php else: ?>
                                <h2></h2>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6">
                        <a href="<?php echo e(url('/team/' . $team->id . '-' . slug($team->fullname))); ?>">
                            <div class="single-team text-center mb-30 ">
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img src="<?php echo e(asset('uploads/' . $team->image)); ?>" alt="img">
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4>
                                        <a href="<?php echo e(url('/team/' . $team->id . '-' . slug($team->fullname))); ?>"><?php echo e($team->fullname); ?></a>
                                    </h4>
                                    <span><?php echo e($team->position); ?></span>
                                    <div class="team-social mt-20">
                                        <?php if($team->facebook_link): ?>
                                            <a href="<?php echo e($team->facebook_link); ?>"><i class="fab fa-facebook-f"></i></a>
                                        <?php endif; ?>
                                        <?php if($team->instagram_link): ?>
                                            <a class="bg-danger" href="<?php echo e($team->instagram_link); ?>"><i
                                                    class="fab fa-instagram"></i></a>
                                        <?php endif; ?>
                                        <?php if($team->linkedin_link): ?>
                                            <a href="<?php echo e($team->linkedin_link); ?>"><i class="fab fa-linkedin"></i></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <?php if (isset($component)) { $__componentOriginal99843580f067249f9ed6ac259729d2bf4b8605e4 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Testimonials::class, []); ?>
<?php $component->withName('testimonials'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal99843580f067249f9ed6ac259729d2bf4b8605e4)): ?>
<?php $component = $__componentOriginal99843580f067249f9ed6ac259729d2bf4b8605e4; ?>
<?php unset($__componentOriginal99843580f067249f9ed6ac259729d2bf4b8605e4); ?>
<?php endif; ?>
    <section id="our-partners" class="partners-area  p-relative pt-80 pb-30 fix"
             style=" background-image: url(<?php echo e(asset('assets/img/bg/blog-bg-aliments.png')); ?>); background-repeat: no-repeat; background-position: center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <div class="section-title center-align text-center mb-50">
                            <?php if(\Illuminate\Support\Facades\Lang::has('about_page.partner_title')): ?>
                                <h5><?php echo e(__('about_page.partner_title')); ?></h5>
                            <?php else: ?>
                                <h5></h5>
                            <?php endif; ?>
                            <?php if(\Illuminate\Support\Facades\Lang::has('about_page.partner_content')): ?>
                                <h2><?php echo e(__('about_page.partner_content')); ?></h2>
                            <?php else: ?>
                                <h2></h2>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="partner-item mb-30  wow fadeInDown  animated">
                            <a href="<?php echo e($partner->link ?? '#'); ?>">
                                <img src="<?php echo e(asset('uploads/' . $partner->image)); ?>" alt="<?php echo e($partner->title); ?>">
                            </a>
                        </div>
                        <div class="single-team text-center mb-30 ">
                            <div class="team-info py-1">
                                <h4>
                                    <?php echo e($partner->title); ?>

                                </h4>
                                <div class="team-social mt-20">
                                    <?php if($partner->facebook_link): ?>
                                        <a href="<?php echo e($partner->facebook_link); ?>"><i class="fab fa-facebook-f"></i></a>
                                    <?php endif; ?>
                                    <?php if($partner->instagram_link): ?>
                                        <a class="bg-danger" href="<?php echo e($partner->instagram_link); ?>"><i
                                                class="fab fa-instagram"></i></a>
                                    <?php endif; ?>
                                    <?php if($partner->linkedin_link): ?>
                                        <a href="<?php echo e($partner->linkedin_link); ?>"><i class="fab fa-linkedin"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/about.blade.php ENDPATH**/ ?>