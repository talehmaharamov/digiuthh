<div class="row pt-50">
    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($course->course_sections->count() > 0): ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-50">
                <a href="<?php echo e(url('/courses/' . $course->id . '-' . slug($course->title))); ?>">
                    <div class="course-item">
                        <a href="<?php echo e(url('/courses/' . $course->id . '-' . slug($course->title))); ?>">
                            <div class="course-cover">
                                <img src="<?php echo e(asset('uploads/' . $course->image)); ?>"
                                     alt="<?php echo e($course->title); ?>">
                            </div>
                            <div class="course-info">
                                <div class="course-name">
                                    <?php echo e($course->title); ?>

                                </div>
                                <div class="course-author">
                                    <?php echo e($course->user->fullname); ?>

                                </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div class="start-course">
                                    <?php if(\Illuminate\Support\Facades\Lang::has('course.course_start')): ?>
                                        <?php echo e(__('course.course_start')); ?>

                                    <?php endif; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                </a>
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/master/course.blade.php ENDPATH**/ ?>