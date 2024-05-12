

<?php $__env->startSection('title', __('header.mentors') . ' -'); ?>

<?php $__env->startSection('content'); ?>
    <section class="breadcrumb-area d-flex align-items-center"
             style="background-image:url(<?php echo e(asset('assets/img/testimonial/test-bg.png')); ?>)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <?php if(\Illuminate\Support\Facades\Lang::has('header.mentors')): ?>
                                <h2><?php echo e(__('header.mentors')); ?></h2>
                            <?php else: ?>
                                <h2></h2>
                            <?php endif; ?>
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <?php if(\Illuminate\Support\Facades\Lang::has('header.home')): ?>
                                            <li class="breadcrumb-item"><a href="/"><?php echo e(__('header.home')); ?></a></li>
                                        <?php endif; ?>
                                        <?php if(\Illuminate\Support\Facades\Lang::has('header.mentors')): ?>
                                            <li class="breadcrumb-item active"
                                                aria-current="page"><?php echo e(__('header.mentors')); ?>

                                            </li>
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
    <section id="team" class="team-area pt-120 pb-90" style="background: #FBFBFB;">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $mentors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mentor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6">
                        <a href="<?php echo e(url('/mentors/' . $mentor->id . '-' . slug($mentor->{'fullname_' . app()->getLocale()}))); ?>">
                        <div class="single-team text-center mb-30 ">
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img style="height:225px;object-fit:cover"
                                             src="<?php echo e(asset('laravel/public/uploads/' . $mentor->image)); ?>" alt="img">
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4>
                                        <a href="<?php echo e(url('/mentors/' . $mentor->id . '-' . slug($mentor->fullname_en))); ?>">
                                            <?php echo e($mentor->{'fullname_' . app()->getLocale()}); ?>

                                        </a>
                                    </h4>
                                    <span><?php echo e(__('third.'.$mentor->position)); ?></span>
                                    <div class="team-social mt-20">
                                        <?php if($mentor->facebook_link): ?>
                                            <a href="<?php echo e($mentor->facebook_link); ?>">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        <?php endif; ?>
                                        <?php if($mentor->instagram_link): ?>
                                            <a href="<?php echo e($mentor->instagram_link); ?>">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        <?php endif; ?>
                                        <?php if($mentor->linkedin_link): ?>
                                            <a href="<?php echo e($mentor->linkedin_link); ?>">
                                                <i class="fab fa-linkedin"></i>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php echo e($mentors->links()); ?>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/mentors/all.blade.php ENDPATH**/ ?>