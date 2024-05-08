<section class="testimonial-area pt-120 pb-120"
         style=" background-image: url(<?php echo e(asset('assets/img/testimonial/test-bg-aliments.png')); ?>); background-repeat: no-repeat; background-position: center; background-color: #fff7f5;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-title second-atitle pt-15">
                    <?php if(\Illuminate\Support\Facades\Lang::has('about_page.testimonial_name')): ?>
                        <h5><?php echo e(__('about_page.testimonial_name')); ?></h5>
                    <?php else: ?>
                        <h5></h5>
                    <?php endif; ?>
                    <?php if(\Illuminate\Support\Facades\Lang::has('about_page.testimonial_title')): ?>
                        <h2>
                            <?php echo e(__('about_page.testimonial_title')); ?>

                        </h2>
                    <?php else: ?>
                        <h2></h2>
                    <?php endif; ?>
                    <?php if(\Illuminate\Support\Facades\Lang::has('about_page.testimonial_content')): ?>
                        <p class="pt-15">
                            <?php echo e(__('about_page.testimonial_content')); ?>

                        </p>
                    <?php else: ?>

                    <?php endif; ?>
                </div>

            </div>

            <div class="col-lg-6">
                <div class="testimonial-active">
                    <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="single-testimonial">
                            <div class="testi-author">
                                <img src="<?php echo e(asset('uploads/' . $testimonial->image)); ?>" alt="img">
                                <div class="ta-info">
                                    <h6><?php echo e($testimonial->name . ' ' . $testimonial->surname); ?></h6>
                                    <span><?php echo e($testimonial->position); ?></span>
                                </div>
                            </div>
                            <div class="qt-img">
                                <img src="<?php echo e(asset('/assets/img/testimonial/qt-icon.png')); ?>" alt="img">
                            </div>
                            <p><?php echo e($testimonial->content); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/components/testimonials.blade.php ENDPATH**/ ?>