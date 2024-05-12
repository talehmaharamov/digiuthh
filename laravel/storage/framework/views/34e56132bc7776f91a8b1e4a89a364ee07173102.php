<?php $__env->startSection('title', $team->{'fullname_' . app()->getLocale()} . ' -'); ?>

<?php $__env->startSection('content'); ?>
<section class="breadcrumb-area d-flex align-items-center"
         style="background-image:url(<?php echo e(asset('assets/img/testimonial/test-bg.png')); ?>)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="breadcrumb-wrap text-left">
                    <div class="breadcrumb-title">
                        <h2><?php echo e($team->{'fullname_' . app()->getLocale()}); ?></h2>
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <?php if(\Illuminate\Support\Facades\Lang::has('header.home')): ?>
                                    <li class="breadcrumb-item"><a href="/"><?php echo e(__('header.home')); ?></a></li>
                                    <?php endif; ?>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <?php echo e($team->{'fullname_' . app()->getLocale()}); ?>

                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="instructor" class="instructor-area pt-80 pb-90">
    <div class="container">
        <div class="row intructor-row">
            <div class="col-lg-8 col-md-7 col-sm-12">
                <div class="instructor-info">
                    <h2><b><?php echo e($team->{'fullname_' . app()->getLocale()}); ?></b></h2>
                    <span class="instructor-position">
                            <?php echo e(__('third.'.$team->position)); ?>

                        </span>
                </div>














                <div class="instructor-description mt-4">
                    <div class="title">
                        <h4>
                            <?php if(\Illuminate\Support\Facades\Lang::has('team_page.about_me')): ?>
                            <b><?php echo e(__('team_page.about_me')); ?></b>
                            <?php endif; ?>
                        </h4>
                    </div>
                    <p><?php echo $team->{'bio_' . app()->getLocale()}; ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="single-team text-center mb-30 ">
                    <div class="team-thumb">
                        <div class="brd">
                            <?php if($team->image != null): ?>
                                <img src="<?php echo e(asset('laravel/public/uploads/' . $team->image) ?? ''); ?>" alt="<?php echo e($team->{'fullname_' . app()->getLocale()}); ?>">
                            <?php else: ?>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" alt="<?php echo e($team->{'fullname_' . app()->getLocale()}); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if(!empty($team->facebook_link) || !empty($team->instagram_link) || !empty($team->linkedin_link)): ?>

                        <div class="team-info">
                            <?php if(\Illuminate\Support\Facades\Lang::has('team_page.social_media')): ?>
                                <span><?php echo e(__('team_page.social_media')); ?></span>
                            <?php endif; ?>
                            <div class="team-social">
                                <?php if($team->facebook_link): ?>
                                    <a href="<?php echo e($team->facebook_link); ?>"><i class="fab fa-facebook-f"></i></a>
                                <?php endif; ?>
                                <?php if($team->instagram_link): ?>
                                    <a href="<?php echo e($team->instagram_link); ?>"><i class="fab fa-instagram"></i></a>
                                <?php endif; ?>
                                <?php if($team->linkedin_link): ?>
                                    <a href="<?php echo e($team->linkedin_link); ?>"><i class="fab fa-linkedin"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/trainers/single.blade.php ENDPATH**/ ?>