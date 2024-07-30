<?php $__env->startSection('title', 'Update profile'); ?>
<?php $__env->startSection('content'); ?>
    <section class="update-profile">
        <div style="padding-top: 40px;">
            <form method="post" class="digiuth_form" action="<?php echo e(route('update.profile.post',auth()->id())); ?>"
                  enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php if(auth()->user()->position == 'user'): ?>
                    <div class="form-group">
                        <?php if(\Illuminate\Support\Facades\Lang::has('third.fullname')): ?>
                            <label for="fullName">
                                <?php echo e(__('third.fullname')); ?>

                                <span>*</span>
                            </label>
                        <?php endif; ?>
                        <input class="form-control"
                               aria-describedby="emailHelp"
                               placeholder="Full name"
                               type="text"
                               id="fullName"
                               maxlength="50"
                               name="fullname"
                               value="<?php echo e(auth()->user()->fullname_az); ?>">
                    </div>
                    <?php $__errorArgs = ['fullname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <input hidden="" name="userType" value="user">
                <?php else: ?>
                    <div class="form-group">
                        <?php if(\Illuminate\Support\Facades\Lang::has('third.fullname')): ?>
                            <label for="fullname">
                                <?php echo e(__('third.fullname'). ' (AZ)'); ?>

                                <span>*</span>
                            </label>
                        <?php endif; ?>
                        <input class="form-control" placeholder="<?php echo e(__('third.fullname')); ?>"
                               type="text"
                               id="fullname" maxlength="50" name="fullname[az]"
                               value="<?php echo e(auth()->user()->fullname_az); ?>">
                    </div>
                    <?php $__errorArgs = ['fullname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <br>
                    <div class="alert alert-danger">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <div class="form-group">
                        <?php if(\Illuminate\Support\Facades\Lang::has('third.fullname')): ?>
                            <label for="fullname">
                                <?php echo e(__('third.fullname'). ' (EN)'); ?>

                                <span>*</span>
                            </label>
                        <?php endif; ?>
                        <input class="form-control" placeholder="<?php echo e(__('third.fullname')); ?>"
                               type="text"
                               id="fullname" maxlength="50" name="fullname[en]"
                               value="<?php echo e(auth()->user()->fullname_en); ?>">
                    </div>
                    <?php $__errorArgs = ['fullname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <br>
                    <div class="alert alert-danger">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <input hidden="" name="userType" value="<?php echo e(auth()->user()->position); ?>">
                <?php endif; ?>

                <div class="form-group">
                    <?php if(\Illuminate\Support\Facades\Lang::has('third.email')): ?>
                        <label for="email">
                            <?php echo e(__('third.email')); ?>

                            <span>*</span>
                        </label>
                    <?php endif; ?>
                    <input class="form-control"
                           type="email"
                           name="email"
                           minlength="10"
                           id="email"
                           placeholder="Your email"
                           value="<?php echo e(auth()->user()->email); ?>">
                </div>
                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="form-group">
                    <?php if(\Illuminate\Support\Facades\Lang::has('third.phone')): ?>
                        <label for="phone"><?php echo e(__('third.phone')); ?><span>*</span></label>
                    <?php endif; ?>
                    <input class="form-control"
                           type="number"
                           name="phone"
                           minlength="10"
                           id="phone"
                           placeholder="Your phone"
                           value="<?php echo e(auth()->user()->phone); ?>">
                </div>
                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="form-group">
                    <?php if(\Illuminate\Support\Facades\Lang::has('third.photo')): ?>
                        <label for=""><?php echo e(__('third.photo')); ?></label>
                    <?php endif; ?>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="inputGroupFile02"
                               onchange="updateFileName(this)">
                        <label class="custom-file-label" for="inputGroupFile02" id="fileInputLabel"
                               aria-describedby="inputGroupFileAddon02">Choose file</label>
                    </div>
                </div>
                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <?php if(auth()->user()->position == 'user'): ?>
                    <div class="form-group">
                        <?php if(\Illuminate\Support\Facades\Lang::has('third.bio')): ?>
                            <label for=""><?php echo e(__('third.bio')); ?></label>
                        <?php endif; ?>
                        <textarea class="form-control" type="text" id="editor1"
                                  name="content1"><?php echo e(auth()->user()->bio_az); ?></textarea>
                    </div>
                    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                    <script>
                        CKEDITOR.replace('editor1');
                    </script>
                    <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <?php else: ?>
                    <div class="form-group">
                        <?php if(\Illuminate\Support\Facades\Lang::has('third.bio')): ?>
                            <label for="">
                                <?php echo e(__('third.bio') . ' (AZ)'); ?>

                            </label>
                        <?php endif; ?>
                        <textarea class="form-control" type="text" id="editor1"
                                  name="content1[az]"><?php echo auth()->user()->bio_az; ?></textarea>
                    </div>
                    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                    <script>
                        CKEDITOR.replace('editor1');
                    </script>
                    <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


                    <div class="form-group">
                        <?php if(\Illuminate\Support\Facades\Lang::has('third.bio')): ?>
                            <label for="">
                                <?php echo e(__('third.bio') . ' (EN)'); ?>

                            </label>
                        <?php endif; ?>
                        <textarea class="form-control" type="text" id="editor2"
                                  name="content1[en]"><?php echo auth()->user()->bio_en; ?></textarea>
                    </div>
                    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                    <script>
                        CKEDITOR.replace('editor2');
                    </script>
                    <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <?php endif; ?>

                <div class="form-group">
                    <?php if(\Illuminate\Support\Facades\Lang::has('third.position')): ?>
                        <label for="">
                            <?php echo e(__('third.position')); ?>

                        </label>
                    <?php endif; ?>
                    <input class="form-control"
                           placeholder="<?php echo e(__('third.position')); ?>"
                           type="text"
                           id="Position"
                           name="position"
                           disabled
                           value="<?php echo e(__('third.'.auth()->user()->position)); ?>">
                </div>
                <?php $__errorArgs = ['position'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger">
                    <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="form-group">
                    <?php if(\Illuminate\Support\Facades\Lang::has('third.linkedin_link')): ?>
                        <label for="Linkedin"><?php echo e(__('third.linkedin_link')); ?></label>
                    <?php endif; ?>
                    <input class="form-control"
                           placeholder="Linkedin Link"
                           type="text"
                           id="Linkedin"
                           name="linkedin_link"
                           value="<?php echo e(auth()->user()->linkedin_link); ?>">
                </div>
                <?php $__errorArgs = ['linkedin_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="form-group">
                    <?php if(\Illuminate\Support\Facades\Lang::has('third.facebook_link')): ?>
                        <label for=""><?php echo e(__('third.facebook_link')); ?></label>
                    <?php endif; ?>
                    <input class="form-control"
                           placeholder="Facebook Link"
                           type="text"
                           id="Facebook"
                           name="facebook_link"
                           value="<?php echo e(auth()->user()->facebook_link); ?>">
                </div>
                <?php $__errorArgs = ['facebook_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="form-group">
                    <?php if(\Illuminate\Support\Facades\Lang::has('third.instagram_link')): ?>
                        <label for=""><?php echo e(__('third.instagram_link')); ?></label>
                    <?php endif; ?>
                    <input class="form-control"
                           placeholder="Instagram"
                           type="text"
                           id="Instagram"
                           name="instagram_link"
                           value="<?php echo e(auth()->user()->instagram_link); ?>">
                </div>
                <?php $__errorArgs = ['instagram_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <input type="hidden" name="old_file" value="<?php echo e(auth()->user()->image); ?>">

                <button type="submit" class="btn-c" style="padding: 12px 24px;"><?php echo e(__('third.save')); ?></button>
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        function updateFileName(input) {
            var fileName = input.files[0].name;
            var label = document.getElementById('fileInputLabel');
            label.innerText = fileName;
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/updateprofile.blade.php ENDPATH**/ ?>