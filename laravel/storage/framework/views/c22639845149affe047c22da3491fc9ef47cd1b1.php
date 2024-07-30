<section id="courses" class="courses eventes-area fix pt-70 pb-70"
         style=" background-image: url(../../assets/img/bg/event-bg-aliments.png); background-repeat: no-repeat; background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-align text-center mb-50">
                    <?php if(\Illuminate\Support\Facades\Lang::has('course.course_title')): ?>
                        <h5><?php echo e(__('course.course_title')); ?></h5>
                    <?php endif; ?>
                    <?php if(\Illuminate\Support\Facades\Lang::has('course.course_content')): ?>
                        <h2><?php echo e(__('course.course_content')); ?></h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $i = 0; ?>
            <?php $__currentLoopData = $lastSixCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $i++; ?>
                <?php if($course->course_sections->count() > 0 && $i <= 6): ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-50">
                        <a href="<?php echo e(url('/courses/' . $course->id . '-' . slug($course->title))); ?>">
                            <div class="course-item">
                                <a href="<?php echo e(url('/courses/' . $course->id . '-' . slug($course->title))); ?>">
                                    <div class="course-cover-main">
                                        <img src="<?php echo e(asset('uploads/' . $course->image)); ?>" alt="<?php echo e($course->title); ?>">
                                    </div>
                                    <div class="course-info">
                                        <div class="course-name">
                                            <?php echo e($course->title); ?>

                                        </div>
                                        <div class="course-author">
                                            <?php echo e($course->user?->name . ' ' . $course->user?->surname); ?>

                                        </div>
                                        <!--<div class="rating-group">-->
                                        <!--    <div class="rate-number"></div>-->
                                        <!--    <fieldset class="rate">-->
                                        <!--        <input type="radio" <?php if($course->rating === 5): ?>
                                            checked
                                        <?php endif; ?> id="rating10<?php echo e($course->id); ?>" name="rating" value="10" /><label for="rating10<?php echo e($course->id); ?>" title="5"></label>-->
                                        <!--        <input type="radio" <?php if($course->rating > 4): ?>
                                            checked
                                        <?php endif; ?> id="rating9<?php echo e($course->id); ?>" name="rating" value="9" /><label class="half" for="rating9<?php echo e($course->id); ?>" title="4.5"></label>-->
                                        <!--        <input type="radio" <?php if($course->rating >= 4): ?>
                                            checked
                                        <?php endif; ?> id="rating8<?php echo e($course->id); ?>" name="rating" value="8" /><label for="rating8<?php echo e($course->id); ?>" title="4"></label>-->
                                        <!--        <input type="radio" <?php if($course->rating > 3): ?>
                                            checked
                                        <?php endif; ?> id="rating7<?php echo e($course->id); ?>" name="rating" value="7" /><label class="half" for="rating7<?php echo e($course->id); ?>" title="3.5"></label>-->
                                        <!--        <input type="radio" <?php if($course->rating >= 3): ?>
                                            checked
                                        <?php endif; ?> id="rating6<?php echo e($course->id); ?>" name="rating" value="6" /><label for="rating6<?php echo e($course->id); ?>" title="3"></label>-->
                                        <!--        <input type="radio" <?php if($course->rating > 2): ?>
                                            checked
                                        <?php endif; ?> id="rating5<?php echo e($course->id); ?>" name="rating" value="5" /><label class="half" for="rating5<?php echo e($course->id); ?>" title="2.5"></label>-->
                                        <!--        <input type="radio" <?php if($course->rating >= 2): ?>
                                            checked
                                        <?php endif; ?> id="rating4<?php echo e($course->id); ?>" name="rating" value="4" /><label for="rating4<?php echo e($course->id); ?>" title="2"></label>-->
                                        <!--        <input type="radio" <?php if($course->rating > 0): ?>
                                            checked
                                        <?php endif; ?> id="rating3<?php echo e($course->id); ?>" name="rating" value="2" /><label for="rating3<?php echo e($course->id); ?>" title="1"></label>-->
                                        <!--        <input type="radio" <?php if($course->rating > 0.5): ?>
                                            checked
                                        <?php endif; ?> id="rating2<?php echo e($course->id); ?>" name="rating" value="1" /><label class="half" for="rating2<?php echo e($course->id); ?>" title="0.5"></label>-->
                                        <!--    </fieldset>-->
                                        <!--    <div class="rated-users">(<span><?php echo e($course->course_reviews_count); ?></span>)</div>-->
                                        <!--</div>-->
                                        <?php if(\Illuminate\Support\Facades\Lang::has('course.course_start')): ?>
                                            <div class="start-course">
                                                <?php echo e(__('course.course_start')); ?>

                                            </div>
                                        <?php else: ?>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(count($courses) >= 3): ?>
                <div class=" mb-5 col-lg-12 col-md-12 d-flex justify-content-center">
                    <a class="btn btn-success" href="/courses"><?php echo e(__('third.more')); ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/components/courses.blade.php ENDPATH**/ ?>