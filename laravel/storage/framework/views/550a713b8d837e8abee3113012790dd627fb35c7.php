<?php $__env->startSection('title', __('third.login')); ?>

<?php $__env->startSection('content'); ?>
    <section class="form-section">
        <form class="digiuth_form pt-80" id="digiuth_login" method="post" action="<?php echo e(route('post.login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <?php if(\Illuminate\Support\Facades\Lang::has('third.email_or_username')): ?>
                    <label for="email"><?php echo e(__('third.email_or_username')); ?></label>
                <?php endif; ?>
                <input class="form-control" type="text" name="email" id="email"
                       placeholder="<?php echo e(__('third.email_or_username')); ?>">
            </div>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <br>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <div class="form-group">
                <?php if(\Illuminate\Support\Facades\Lang::has('third.login_password')): ?>
                    <label for="password"><?php echo e(__('third.login_password')); ?></label>
                <?php endif; ?>
                <input class="form-control"
                       type="password"
                       name="password"
                       id="password"
                       placeholder="<?php echo e(__('third.login_password')); ?>">
                <span class="show-password">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                         stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                      <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="d-none" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
                    </svg>
                </span>
            </div>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <br>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <div class="error-message">
                <?php if(session()->has('error')): ?>
                    <div class="alert alert-danger"><?php echo e(session()->get('error')); ?></div>
                <?php endif; ?>
            </div>

            <?php if(\Illuminate\Support\Facades\Lang::has('third.sign-in')): ?>
                <button type="submit" class="btn btn-success w-100" style="font-size: 25px;">
                    <?php echo e(__('third.sign-in')); ?>

                </button>
            <?php else: ?>

            <?php endif; ?>

            <div class="login-form-footer pt-15">
                <div class="row">
                    <div class="col-12">
                        <?php if(\Illuminate\Support\Facades\Lang::has('third.register_as_teacher')): ?>
                            <a style="text-decoration: none;font-size: 18px;" href="<?php echo e(route('login.teacher')); ?>"><?php echo e(__('third.register_as_teacher')); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="col-12">
                        <?php if(\Illuminate\Support\Facades\Lang::has('third.register_as_mentor')): ?>
                            <a style="text-decoration: none;font-size: 18px;" href="<?php echo e(route('login.mentor')); ?>"><?php echo e(__('third.register_as_mentor')); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="col-12">
                        <?php if(\Illuminate\Support\Facades\Lang::has('third.register_as_student')): ?>
                            <a style="text-decoration: none;font-size: 18px;" href="<?php echo e(route('login.student')); ?>"><?php echo e(__('third.register_as_student')); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="col-12">
                        <?php if(\Illuminate\Support\Facades\Lang::has('third.forgot_password')): ?>
                            <a style="text-decoration: none;font-size: 18px;" href="<?php echo e(route('forgot.password')); ?>"><?php echo e(__('third.forgot_password')); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </form>
    </section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script>
        $('.show-password').on('click', function () {
            let type = $('#password').attr('type')
            if (type === 'password') {
                $('.show-password svg:first').addClass('d-none')
                $('.show-password svg:last').removeClass('d-none')
            } else {
                $('.show-password svg:last').addClass('d-none')
                $('.show-password svg:first').removeClass('d-none')
            }
            $('#password').attr('type', type === 'password' ? 'text' : 'password')
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/login.blade.php ENDPATH**/ ?>