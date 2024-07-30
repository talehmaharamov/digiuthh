<?php $__env->startSection('title', __('header.exam') . ' -'); ?>

<?php $__env->startSection('content'); ?>
    <section class="breadcrumb-area d-flex align-items-center"
             style="background-image:url(<?php echo e(asset('assets/img/testimonial/test-bg.png')); ?>)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2><?php echo e($course->title); ?></h2>
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <?php if(\Illuminate\Support\Facades\Lang::has('header.home')): ?>
                                            <li class="breadcrumb-item"><a href="/"><?php echo e(__('header.home')); ?></a></li>
                                        <?php endif; ?>
                                        <?php if(\Illuminate\Support\Facades\Lang::has('third.exam')): ?>
                                            <li class="breadcrumb-item active"
                                                aria-current="page"><?php echo e(__('third.exam')); ?></li>
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
    <section id="studentExam" class="exam-area fix pt-80 pb-120">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <form action="" id="exam-form" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-header">
                            <div id="exam-countdown" class="exam-countdown"></div>
                        </div>
                        <div class="form-body">
                            <?php $__currentLoopData = $course->course_exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="exam-item">
                                    <p><span class="order-number"></span> <?php echo e($exam->question); ?></p>
                                    <fieldset id="<?php echo e($exam->id); ?>">
                                        <div class="row">
                                            <?php if($exam->variant_a !== null && $exam->variant_a !== ''): ?>
                                                <div class="col-md-4 col-sm-6 col-12">
                                                    <div class="exam-item-group">
                                                        <input name="<?php echo e($exam->id); ?>" value="a" type="radio"/>
                                                        <label><?php echo e($exam->variant_a); ?></label>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if($exam->variant_b !== null && $exam->variant_b !== ''): ?>
                                                <div class="col-md-4 col-sm-6 col-12">
                                                    <div class="exam-item-group">
                                                        <input name="<?php echo e($exam->id); ?>" value="b" type="radio"/>
                                                        <label><?php echo e($exam->variant_b); ?></label>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if($exam->variant_c !== null && $exam->variant_c !== ''): ?>
                                                <div class="col-md-4 col-sm-6 col-12">
                                                    <div class="exam-item-group">
                                                        <input name="<?php echo e($exam->id); ?>" value="c" type="radio"/>
                                                        <label><?php echo e($exam->variant_c); ?></label>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if($exam->variant_d !== null  && $exam->variant_d !== ''): ?>
                                                <div class="col-md-4 col-sm-6 col-12">
                                                    <div class="exam-item-group">
                                                        <input name="<?php echo e($exam->id); ?>" value="d" type="radio"/>
                                                        <label><?php echo e($exam->variant_d); ?></label>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if($exam->variant_e !== null && $exam->variant_e !== ''): ?>
                                                <div class="col-md-4 col-sm-6 col-12">
                                                    <div class="exam-item-group">
                                                        <input name="<?php echo e($exam->id); ?>" value="e" type="radio"/>
                                                        <label><?php echo e($exam->variant_e); ?></label>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </fieldset>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="form-footer">
                            <div class="exam-submit">
                                <?php if(\Illuminate\Support\Facades\Lang::has('third.submit')): ?>
                                    <button type="submit" class="exam-submit-btn">
                                        <?php echo e(__('third.exam_submit')); ?>

                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/exam.blade.php ENDPATH**/ ?>