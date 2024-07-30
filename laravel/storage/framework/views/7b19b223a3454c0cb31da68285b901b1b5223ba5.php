<?php $__env->startSection('title', __('header.events') . ' -'); ?>

<?php $__env->startSection('content'); ?>

<section class="breadcrumb-area d-flex align-items-center"
         style="background-image:url(<?php echo e(asset('assets/img/testimonial/test-bg.png')); ?>)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="breadcrumb-wrap text-left">
                    <div class="breadcrumb-title">
                        <?php if(\Illuminate\Support\Facades\Lang::has('header.events')): ?>
                        <h2> <?php echo e(__('header.events')); ?> </h2>
                        <?php else: ?>
                        <h2></h2>
                        <?php endif; ?>
                        <div class="breadcrumb-wrap">

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <?php if(\Illuminate\Support\Facades\Lang::has('header.home')): ?>
                                    <li class="breadcrumb-item"><a href="/"><?php echo e(__('header.home')); ?></a></li>
                                    <?php endif; ?>
                                    <?php if(\Illuminate\Support\Facades\Lang::has('header.events')): ?>
                                    <li class="breadcrumb-item active"
                                        aria-current="page"><?php echo e(__('header.events')); ?>

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
<section id="events" class="eventes-area fix pt-120 pb-120"
         style=" background-image: url(<?php echo e(asset('assets/img/bg/event-bg-aliments.png')); ?>); background-repeat: no-repeat; background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-align text-center mb-70">
                    <?php if(\Illuminate\Support\Facades\Lang::has('third.our_events')): ?>
                    <h5><?php echo e(__('third.our_events')); ?></h5>
                    <?php endif; ?>
                    <?php if(\Illuminate\Support\Facades\Lang::has('third.upcoming_events')): ?>
                    <h2>
                        <?php echo e(__('third.upcoming_events')); ?>

                    </h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $__empty_1 = true; $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-lg-6 col-md-12 mb-30">
                <a href="<?php echo e(url('events/' . $event->id . '-' . slug($event->title))); ?>">
                    <div class="eventes-box">
                        <div class="date-box">
                            <div>
                                <h3><?php echo e($event->start_date->format('d')); ?></h3>
                                <h5><?php echo e($event->start_date->format('M, Y')); ?></h5>
                            </div>
                        </div>
                        <div class="text">
                            <h5><?php echo e($event->title); ?></h5>
                            <ul>
                                <li><i class="fal fa-clock"></i> <?php echo e($event->start_date->format('H:i')); ?></li>
                                <li><i class="icon fal fa-map-marker-check"></i> <?php echo e($event->place); ?></li>
                            </ul>
                            <p><?php echo e($event->content); ?></p>
                            <div class="mt-3 col-lg-12 col-md-12 d-flex justify-content-center">
                                <a class="btn btn-show-more btn-success" style="padding: 14px 36px;font-size: 15px;" href="<?php echo e(url('events/' . $event->id . '-' . slug($event->title))); ?>"><?php echo e(__('header.moree')); ?></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <div class="col-lg-12">
                <?php if(\Illuminate\Support\Facades\Lang::has('The expected event was not found')): ?>
                <p style="text-align:center;"><?php echo e(__('The expected event was not found')); ?></p>
                <?php else: ?>
                <p style="text-align:center;"></p>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
        <?php echo e($events->links()); ?>

    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/events/all.blade.php ENDPATH**/ ?>