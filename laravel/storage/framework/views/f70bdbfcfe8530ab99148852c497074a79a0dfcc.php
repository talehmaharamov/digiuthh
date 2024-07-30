<?php $__env->startSection('title', __('third.forgot_password')); ?>

<?php $__env->startSection('content'); ?>
    <section class="form-section">
        <form class="digiuth_form pt-80" id="forgot_password" action="<?php echo e(route('forgot.password')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php if(\Illuminate\Support\Facades\Lang::has('third.forgot_password_msg')): ?>
                <p class="mb-4"><?php echo e(__('third.forgot_password_msg')); ?></p>
            <?php endif; ?>
            <div class="form-group">
                <input class="form-control" type="text" name="email" id="email" placeholder="
                <?php if(\Illuminate\Support\Facades\Lang::has('third.email')): ?>
                <?php echo e(__('third.email')); ?>

                <?php endif; ?>">
            </div>

            <?php if(\Illuminate\Support\Facades\Lang::has('third.submit')): ?>
                <div class="form-btns">
                    <button type="submit" class="btn-c mt-1"><?php echo e(__('third.reset_password_msg')); ?></button>
                </div>
            <?php endif; ?>
        </form>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/forgot-password.blade.php ENDPATH**/ ?>