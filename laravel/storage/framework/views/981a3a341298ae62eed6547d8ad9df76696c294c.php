<?php $__env->startSection('title', __('verify.title')); ?>

<?php $__env->startSection('content'); ?>
    <section class="breadcrumb-area d-flex align-items-center"
             style="background-image:url(<?php echo e(asset('assets/img/testimonial/test-bg.png')); ?>)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <?php if(\Illuminate\Support\Facades\Lang::has('verify.title')): ?>
                                <h2><?php echo e(__('verify.title')); ?></h2>
                            <?php endif; ?>
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <?php if(\Illuminate\Support\Facades\Lang::has('header.home')): ?>
                                            <li class="breadcrumb-item"><a href="/"><?php echo e(__('header.home')); ?></a></li>
                                        <?php endif; ?>
                                        <?php if(\Illuminate\Support\Facades\Lang::has('verify.title')): ?>
                                            <li class="breadcrumb-item active"
                                                aria-current="page"><?php echo e(__('verify.title')); ?></li>
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
    <section class="verify_email mb-5 mt-2">
        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    <div class="jumbotron mt-4 py-3">
                        <div class="alert mb-0" role="alert" id="notes">
                            <?php if(\Illuminate\Support\Facades\Lang::has('verify.notes')): ?>
                                <h4><?php echo e(__('verify.notes')); ?></h4>
                            <?php else: ?>
                                <h4></h4>
                            <?php endif; ?>
                            <ul>
                                <?php if(\Illuminate\Support\Facades\Lang::has('verift.msg1')): ?>
                                    <li><?php echo e(__('verift.msg1')); ?></li>
                                <?php endif; ?>
                                <?php if(\Illuminate\Support\Facades\Lang::has('verift.msg2')): ?>
                                    <li><?php echo e(__('verift.msg2')); ?></span></a></li>
                                <?php endif; ?>
                            </ul>
                            <div class="verify_btn mt-4 d-flex justify-content-end w-100">
                                <form action="<?php echo e(route('verification.send')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php if(\Illuminate\Support\Facades\Lang::has('verify.send')): ?>
                                        <button class="btn">
                                            <?php echo e(__('verify.send')); ?>

                                        </button>
                                    <?php endif; ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/verify.blade.php ENDPATH**/ ?>