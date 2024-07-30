<?php $__env->startSection('title', __('header.courses') . ' -'); ?>

<?php $__env->startSection('content'); ?>
    <section class="breadcrumb-area d-flex align-items-center"
             style="background-image:url(<?php echo e(asset('assets/img/testimonial/test-bg.png')); ?>)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <?php if(isset($my)): ?>
                                <h2> <?php echo e(__('header.my_courses')); ?> </h2>
                            <?php else: ?>
                                <h2> <?php echo e(__('header.courses')); ?> </h2>
                            <?php endif; ?>
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <?php if(\Illuminate\Support\Facades\Lang::has('header.home')): ?>
                                            <li class="breadcrumb-item"><a href="/"><?php echo e(__('header.home')); ?></a></li>
                                        <?php endif; ?>
                                        <?php if(isset($my)): ?>
                                            <?php if(\Illuminate\Support\Facades\Lang::has('header.my_courses')): ?>
                                                <li class="breadcrumb-item active"
                                                    aria-current="page"><?php echo e(__('header.my_courses')); ?></li>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <?php if(\Illuminate\Support\Facades\Lang::has('header.courses')): ?>
                                                <li class="breadcrumb-item active"
                                                    aria-current="page"><?php echo e(__('header.courses')); ?></li>
                                            <?php endif; ?>
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
    <section id="courses" class="courses eventes-area fix pt-70 pb-100"
             style=" background-image: url(../../assets/img/bg/event-bg-aliments.png); background-repeat: no-repeat; background-position: center;">
        <div class="container">
            <div class="navbar">
                <ul>
                    <?php if(\Illuminate\Support\Facades\Lang::has('third.all')): ?>
                        <li class="all_tab_items active"><?php echo e(__('third.all')); ?></li>
                    <?php endif; ?>
                    <?php $__currentLoopData = \App\Models\CourseCategory::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="tab_item <?php if(isset($category) && $c->id == $category->id): ?> active <?php endif; ?>"
                            data-id="<?php echo e($c->id); ?>"><?php echo e($c->title); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <!--<form action="" method="GET">-->
            <!--    <div class="search-bar">-->
            <!--        <input name="search" type="text">-->
            <!--        <button><?php echo e(__('header.search')); ?></button>-->
            <!--    </div>-->
            <!--</form>-->
            <div class="tab_body first">
                <div class="row pt-50">
                    <?php $__currentLoopData = $lastSixCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                    <?php echo e($course->user?->name . ' ' . $course->user?->surname); ?>

                                                </div>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                <?php if(\Illuminate\Support\Facades\Lang::has('course.course_start')): ?>
                                                    <div class="start-course">
                                                        <?php echo e(__('course.course_start')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </a>
                                    </div>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="tab_body second"></div>
            <?php echo e($courses->links()); ?>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $('.tab_item').on('click', function () {
            let tab_items = $('.tab_item.active');
            let ids = [];

            tab_items.each((index, tab_item) => {
                ids.push($(tab_item).data('id'))
            })

            $('.tab_body').removeClass('d-none');
            $('.tab_body.first').addClass('d-none');

            if (ids.length > 0) {
                $.post('/ajax/courses', {
                    ids: ids,
                    _token: '<?php echo e(csrf_token()); ?>',
                    my: <?php if(isset($my)): ?> true <?php else: ?> false <?php endif; ?>
                })
                    .done(res => {
                        $('.tab_body.second').html(res);
                    })
            } else {
                $('.all_tab_items').addClass('active');
                $('.tab_body').addClass('d-none');
                $('.tab_body.first').removeClass('d-none');
            }
        })

        $('.all_tab_items').on('click', function () {
            $('.tab_body').addClass('d-none');
            $('.tab_body.first').removeClass('d-none');
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/courses/all.blade.php ENDPATH**/ ?>