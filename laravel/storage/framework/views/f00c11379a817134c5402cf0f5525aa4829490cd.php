<?php $__env->startSection('title', $course->title . ' -'); ?>

<?php $__env->startSection('content'); ?>
    <section class="course-inner">
        <div class="container">
            <div class="row">
                <div class="course-container w-100 pt-80 pb-120">
                    <div class="course-box">
                        <div class="course-video">
                            <div class="video-player">
                                <video id="video" data-v-12f6ef31="" controls="controls" controlslist="nodownload"
                                       autoplay
                                       class="block">
                                    <source type="video/mp4"
                                            src="<?php echo e(\Storage::disk('bunnycdn')->url($episode->video)); ?>">
                                </video>
                                
                                
                                
                                
                                
                                <button id="playVideo" style="opacity: 0; position: absolute">play</button>
                            </div>
                            <div class="course-about-tabs closed-about-tabs">
                                <div class="close-about-tabs">
                                    <a href="#">
                                        <i class="fas fa-times"></i>
                                        <i class="fas fa-chevron-down"></i>
                                    </a>
                                </div>
                                <div class="tab-items">
                                    <?php if(\Illuminate\Support\Facades\Lang::has('third.overview')): ?>
                                        <a href="#" class="tab-item active">
                                            <?php echo e(__('third.overview')); ?>

                                        </a>
                                    <?php endif; ?>
                                    <?php if(\Illuminate\Support\Facades\Lang::has('third.comment')): ?>
                                        <a href="#" class="tab-item">
                                            <?php echo e(__('third.comment')); ?>

                                        </a>
                                    <?php endif; ?>
                                    <?php if(\Illuminate\Support\Facades\Lang::has('third.source')): ?>
                                        <?php if(count($episode->course_files) > 0): ?>
                                            <a href="#" class="tab-item">
                                                <?php echo e(__('third.source')); ?>

                                            </a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <span class="yellow-bar"></span>
                                </div>
                                <div class="tab-contents">
                                    <div class="content-item">
                                        <div class="course-info">
                                            <?php if(\Illuminate\Support\Facades\Lang::has('third.course_name')): ?>
                                                <div class="course-name"><?php echo e(__('third.course_name')); ?></div>
                                            <?php endif; ?>
                                            <?php if(\Illuminate\Support\Facades\Lang::has('third.about_course')): ?>
                                                <div class="course-info-title"><?php echo e($course->about); ?></div>
                                            <?php endif; ?>
                                            <div class="general-info">
                                                <?php if(\Illuminate\Support\Facades\Lang::has('third.general_info')): ?>
                                                    <div class="title">
                                                        <?php echo e(__('third.general_info')); ?>

                                                    </div>
                                                <?php endif; ?>
                                                <div class="info">
                                                    <ul>
                                                        <li>
                                                            <?php if(\Illuminate\Support\Facades\Lang::has('third.trainer_name')): ?>
                                                                <span><?php echo e(__('third.trainer_name')); ?>:  </span>
                                                            <?php endif; ?>
                                                            <span><?php echo e($course->user?->name . ' ' . $course->user?->surname); ?></span>
                                                        </li>
                                                        <li>
                                                            <?php if(\Illuminate\Support\Facades\Lang::has('third.course_duration')): ?>
                                                                <span><?php echo e(__('third.course_duration')); ?>:  </span>
                                                            <?php endif; ?>
                                                            <span><?php echo e($course->course_duration); ?></span>
                                                        </li>
                                                        <li>
                                                            <?php if(\Illuminate\Support\Facades\Lang::has('third.course_language')): ?>
                                                                <span><?php echo e(__('third.course_language')); ?>:  </span>
                                                            <?php endif; ?>
                                                            <span><?php echo e($course->language); ?></span>
                                                        </li>
                                                        <li>
                                                            <?php if(\Illuminate\Support\Facades\Lang::has('third.lecture_count')): ?>
                                                                <span><?php echo e(__('third.lecture_count')); ?>:  </span>
                                                            <?php endif; ?>
                                                            <span><?php echo e($course->lecture_count); ?></span>
                                                        </li>
                                                        <li>
                                                            <?php if(\Illuminate\Support\Facades\Lang::has('third.section_count')): ?>
                                                                <span><?php echo e(__('third.section_count')); ?>:  </span>
                                                            <?php endif; ?>
                                                            <span><?php echo e($course->section_count); ?></span>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="description-content">
                                                <?php if(\Illuminate\Support\Facades\Lang::has('third.trainer_name')): ?>

                                                    <div class="title">
                                                        <?php echo e(__('third.course_comment_title')); ?>

                                                    </div>
                                                <?php endif; ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-12 user_comments">

                                            <ul class="comment_block">

                                                <!-- new comment -->
                                                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="new_comment">

                                                        <!-- current #{user} avatar -->
                                                        <div class="user_avatar">
                                                            <img src="/assets/img/team/user.png">
                                                        </div>
                                                        <!-- the comment body -->
                                                        <div class="comment_body">
                                                            <p>
                                                                <span><?php echo e(($item->user?->name . ' ' . $item->user?->surname) ?? ''); ?></span> <?php echo e($item->comment); ?>

                                                            </p>

                                                            <!-- inc. date and time -->
                                                            <div class="comment_details">
                                                                <ul>
                                                                    
                                                                    <li style="color: black;">
                                                                        <i class="fas fa-clock"></i><?php echo e($item->created_at->format('H:i')); ?>

                                                                    </li>
                                                                    <li style="color: black;">
                                                                        <i class="fa fa-calendar"></i><?php echo e($item->created_at->format('Y:m-d')); ?>

                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="content-item" style="display: none;">
                                        <div class="course-comment">
                                            <!--   <form method="post" class="comment-form"> -->
                                            <div class="row">
                                                <form action="" method="post" id="#star">
                                                    <div class="col-lg-12 user-rate">
                                                        <p><?php echo e(__('third.your_rate')); ?></p>
                                                        <div class="rating-group">
                                                            <div class="rate-number"></div>
                                                            <fieldset class="rate rateClass">
                                                                <input type="radio" id="rating10" name="rating"
                                                                       value="10"/><label for="rating10"
                                                                                          title="5"></label>
                                                                <input type="radio" id="rating9" name="rating"
                                                                       value="9"/><label class="half" for="rating9"
                                                                                         title="4.5"></label>
                                                                <input type="radio" id="rating8" name="rating"
                                                                       value="8"/><label for="rating8"
                                                                                         title="4"></label>
                                                                <input type="radio" id="rating7" name="rating"
                                                                       value="7"/><label class="half" for="rating7"
                                                                                         title="3.5"></label>
                                                                <input type="radio" id="rating6" name="rating"
                                                                       value="6"/><label for="rating6"
                                                                                         title="3"></label>
                                                                <input type="radio" id="rating5" name="rating"
                                                                       value="5"/><label class="half" for="rating5"
                                                                                         title="2.5"></label>
                                                                <input type="radio" id="rating4" name="rating"
                                                                       value="4"/><label for="rating4"
                                                                                         title="2"></label>
                                                                <input type="radio" id="rating3" name="rating"
                                                                       value="3"/><label class="half" for="rating3"
                                                                                         title="1.5"></label>
                                                                <input type="radio" id="rating2" name="rating"
                                                                       value="2"/><label for="rating2"
                                                                                         title="1"></label>
                                                                <input type="radio" id="rating1" name="rating"
                                                                       value="1"/><label class="half" for="rating1"
                                                                                         title="0.5"></label>
                                                            </fieldset>

                                                        </div>
                                                    </div>
                                                </form>

                                                <div class="col-lg-12">
                                                    <form
                                                        action="<?php echo e(route('post-comment')); ?>"
                                                        method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <div class="contact-field p-relative c-message mb-45">
                                                            <textarea class="message" id="message" cols="30" rows="10"
                                                                      placeholder="Write comments" data-val="true"
                                                                      data-val-required="The Message field is required."
                                                                      name="comment"></textarea>
                                                            <span class="text-danger field-validation-valid"
                                                                  data-valmsg-for="Message"
                                                                  data-valmsg-replace="true"></span>
                                                        </div>

                                                        <input type="hidden" name="course_id" value="<?php echo e($course->id); ?>">
                                                        <?php if(auth()->id()): ?>
                                                            <input type="hidden" name="user_id"
                                                                   value="<?php echo e(auth()->id()); ?>">
                                                        <?php endif; ?>

                                                        <div class="slider-btn">
                                                            <?php if(auth()->id()): ?>
                                                                <?php if(\Illuminate\Support\Facades\Lang::has('third.do-comment')): ?>
                                                                    <button type="submit" class="btn ss-btn"
                                                                            data-animation="fadeInRight"
                                                                            data-delay=".8s">
                                                                        <?php echo e(__('third.do-comment')); ?>

                                                                    </button>
                                                                <?php endif; ?>
                                                            <?php else: ?>
                                                                <button type="submit" class="btn ss-btn"
                                                                        data-animation="fadeInRight" data-delay=".8s">
                                                                    <?php echo e(__('third.submit')); ?>

                                                                </button>
                                                            <?php endif; ?>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <input name="__RequestVerificationToken" type="hidden"
                                                   value="CfDJ8GhWms7VDTpGiNpNbZ3FeGI6vn1tRnYLG0COZU8evbGIP70fM5fsUHIS_3xk7CSJl6JbS1Xnd3yOf3l3naJyKAovDh0ZufasBVyf4RrarD8bxLUmnYwXAi5Oo1NP-ttg2V2F_fnxX27Y-VLS4TvvbDXSJ6QOCBuhoB-r3fgBZVzkM7--PDmRyL9ExlekPN-hgw"/>
                                            <!-- </form> -->
                                        </div>
                                    </div>
                                    <?php if(count($episode->course_files) > 0): ?>
                                        <div class="content-item" style="display: none;">
                                            <?php $__currentLoopData = $episode->course_files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="<?php echo e(asset('uploads/' . $file->file)); ?>" target="_blank"
                                                   class="source-icon">
                                                    <i class="fas fa-file-download"></i>
                                                    <span><?php echo e($file->title); ?></span>
                                                </a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="course-content">
                            <?php if(\Illuminate\Support\Facades\Lang::has('third.course_content')): ?>
                                <div class="title"><?php echo e(__('third.course_content')); ?></div>
                            <?php endif; ?>
                            <div class="accordion-box">
                                <?php $__currentLoopData = $course->course_sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sections): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="accordion-item active-accordion">
                                        <label for="panel-1" class="accordion-label">
                                            <?php if($key == 0): ?>
                                                Preview
                                            <?php else: ?>
                                                Section
                                            <?php endif; ?>
                                            <span class="section-number"></span>
                                            <span class="section-name">
                                                <?php echo e($sections->title); ?>

                                            </span>
                                        </label>
                                        <div class="accordion-panel">
                                            <?php $__currentLoopData = $sections->course_episodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $episodes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="section-item active-section-item">
                                                    <a href="<?php echo e('/courses/' . $course->id . '-' . slug($course->title) . '?section=' . $sections->id . '&episode=' . $episodes->id); ?>">
                                                        <span class="order-number"></span> <?php echo e($episodes->title); ?>

                                                    </a>
                                                </div>
                                                
                                                
                                                
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                <?php if($exam): ?>
                                    <?php if(\Illuminate\Support\Facades\Lang::has('third.exam')): ?>
                                        <?php if(count($course->course_exams) !== 0): ?>
                                            <div class="accordion-item active-accordion">

                                                <label for="panel-1" class="accordion-label">
                                                    <?php echo e(__('third.exam')); ?>

                                                    <span class="section-number"></span>
                                                    <span class="section-name"><?php echo e(__('third.exam')); ?></span>
                                                </label>

                                                <div class="accordion-panel">

                                                    <div class="section-item active-section-item">
                                                        <a href="<?php echo e(url('/courses/' . $course->id . '-' . Str::slug($course->title) . '/exam')); ?>">
                                                            <span class="order-number"></span> Exam
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <?php if(session()->has('error')): ?>
        <script>
            Swal.fire('<?php echo e(__("Something went wrong")); ?>', '<?php echo e(session()->get("error")); ?>', 'error')
        </script>
    <?php endif; ?>

    <script>

        $('#playVideo').on('click', function () {
            $('#video')[0].autoPlay = true;
            $('#video')[0].load();
        })

        $(function () {

            $('.rateClass label').on('click', function () {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                let courseId = `<?php echo $course->id ?>`;

                let ratingNum = $(this).attr('title');

                let authId = `<?php echo e(auth()->id()); ?>`;

                $.ajax({
                    type: 'POST',
                    url: '/course/' + courseId + '/rate/' + ratingNum + '/' + authId,
                    success: function (response) {
                        $(".rateClass input").each(function () {

                        });
                    }
                });
            });
            $('#playVideo').click();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/courses/single.blade.php ENDPATH**/ ?>