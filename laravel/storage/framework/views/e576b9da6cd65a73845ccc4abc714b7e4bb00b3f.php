<?php $__env->startSection('title', __('home_page.title') . ' -'); ?>
<?php $__env->startSection('content'); ?>
    <section id="home" class="slider-area slider-four fix p-relative">
        <div class="slider-active">
            <div class="single-slider slider-bg d-flex align-items-center"
                 style="background: url(assets/img/slider/slider_img_bg.png) no-repeat;background-position: center center;">
                <div class="container">
                    <div class="row justify-content-center pt-50  pb-150">
                        <div class="col-lg-7">
                            <div class="slider-content s-slider-content mt-200">
                                <?php if(\Illuminate\Support\Facades\Lang::has('home_page.slogan')): ?>
                                    <h2 data-animation="fadeInUp" data-delay=".4s"><?php echo e(__('home_page.slogan')); ?></h2>
                                <?php else: ?>
                                    <h2></h2>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="slider-img" data-animation="fadeInUp" data-delay=".4s">
                                <img src="<?php echo e(asset('/assets/img/slider/home-img.jpg')); ?>" alt="slider_img05">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if (isset($component)) { $__componentOriginal5fab802016ded842eed606c73c4fef5470584284 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Abouts::class, []); ?>
<?php $component->withName('abouts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5fab802016ded842eed606c73c4fef5470584284)): ?>
<?php $component = $__componentOriginal5fab802016ded842eed606c73c4fef5470584284; ?>
<?php unset($__componentOriginal5fab802016ded842eed606c73c4fef5470584284); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalf408142c5b6fa557849d627f97dacc995020e175 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AboutVideos::class, []); ?>
<?php $component->withName('about-videos'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf408142c5b6fa557849d627f97dacc995020e175)): ?>
<?php $component = $__componentOriginalf408142c5b6fa557849d627f97dacc995020e175; ?>
<?php unset($__componentOriginalf408142c5b6fa557849d627f97dacc995020e175); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal47453d2363ce3b183861d6d97541db807f4f56f5 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Courses::class, []); ?>
<?php $component->withName('courses'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal47453d2363ce3b183861d6d97541db807f4f56f5)): ?>
<?php $component = $__componentOriginal47453d2363ce3b183861d6d97541db807f4f56f5; ?>
<?php unset($__componentOriginal47453d2363ce3b183861d6d97541db807f4f56f5); ?>
<?php endif; ?>
    <section id="services" class="services-area pb-90 fix"
             style=" background-image: url(assets/img/bg/services-bg-aliments.png); background-repeat: no-repeat; background-position: center;">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="about-title second-atitle pb-20">
                        <?php if(\Illuminate\Support\Facades\Lang::has('home_page.category_title')): ?>
                            <h5><?php echo e(__('home_page.category_title')); ?></h5>
                        <?php else: ?>
                            <h5></h5>
                        <?php endif; ?>
                        <?php if(\Illuminate\Support\Facades\Lang::has('home_page.category_slogan')): ?>
                            <h2>
                                <?php echo e(__('home_page.category_slogan')); ?>

                            </h2>
                        <?php else: ?>
                            <h2></h2>
                        <?php endif; ?>
                        <?php if(\Illuminate\Support\Facades\Lang::has('home_page.category_slogan')): ?>
                            <p>
                                <?php echo e(__('home_page.category_content')); ?>

                            </p>
                        <?php else: ?>
                            <p></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="services-box wow fadeInDown  animated" data-delay=".5s">
                                    <div class="services-icon">
                                        <a href="/courses/category/<?php echo e($category->id); ?>-<?php echo e($category->title); ?>">
                                            <img src="/uploads/<?php echo e($category->image); ?>" alt="icon01">
                                        </a>
                                    </div>
                                    <div class="services-content2">
                                        <h5>
                                            <a href="/courses/category/<?php echo e($category->id); ?>-<?php echo e($category->title); ?>"><?php echo e($category->title); ?></a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="our-team" class="team-area pb-80 fix"
             style=" background-image: url(<?php echo e(asset('assets/img/bg/services-bg-aliments.png')); ?>); background-repeat: no-repeat; background-position: center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <div class="section-title center-align text-center mb-50">
                            <?php if(\Illuminate\Support\Facades\Lang::has('header.trainers')): ?>
                                <h5><?php echo e(__('header.trainers')); ?></h5>
                            <?php else: ?>
                                <h5></h5>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $trainers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trainer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6">
                        <a href="<?php echo e(url('/trainers/' . $trainer->id . '-' . slug($trainer->{'fullname_' . app()->getLocale()}))); ?>">
                            <div class="single-team text-center mb-30 ">
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img style="height:225px;object-fit:cover;"
                                             src="<?php echo e(asset('laravel/public/uploads/' . $trainer->image)); ?>" alt="img">
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4>
                                        <a href="<?php echo e(url('/trainers/' . $trainer->id . '-' . slug($trainer->{'fullname_' . app()->getLocale()}))); ?>">
                                            <?php echo e($trainer->{'fullname_' . app()->getLocale()}); ?>

                                        </a>
                                    </h4>
                                    <span>
                                        <?php echo e(__('third.'.$trainer->position)); ?>

                                    </span>
                                    <div class="team-social mt-20">
                                        <?php if($trainer->facebook_link): ?>
                                            <a href="<?php echo e($trainer->facebook_link); ?>" style="background: #345aa8;">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        <?php endif; ?>
                                        <?php if($trainer->instagram_link): ?>
                                            <a class="bg-danger" href="<?php echo e($trainer->instagram_link); ?>" style="background: #CD201F;">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        <?php endif; ?>
                                        <?php if($trainer->linkedin_link): ?>
                                            <a href="<?php echo e($trainer->linkedin_link); ?>" style="background: #0057FF;">
                                                <i class="fab fa-linkedin"></i>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if(count($trainers) >= 4): ?>
                    <div class=" mb-5 col-lg-12 col-md-12 d-flex justify-content-center">
                        <a class="btn btn-success" href="/trainers">
                            <?php echo e(__('third.more')); ?>

                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section id="our-team" class="team-area pb-80 fix"
             style=" background-image: url(<?php echo e(asset('assets/img/bg/services-bg-aliments.png')); ?>); background-repeat: no-repeat; background-position: center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <div class="section-title center-align text-center mb-50">
                            <?php if(\Illuminate\Support\Facades\Lang::has('header.mentors')): ?>
                                <h5><?php echo e(__('header.mentors')); ?></h5>
                            <?php else: ?>
                                <h5></h5>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $mentors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mentor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6">
                        <a href="<?php echo e(url('/mentors/' . $mentor->id . '-' . slug($mentor->{'fullname_' . app()->getLocale()}))); ?>">
                            <div class="single-team text-center mb-30 ">
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img style="height:225px;object-fit:cover;"
                                             src="<?php echo e(asset('laravel/public/uploads/' . $mentor->image)); ?>" alt="img">
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4>
                                        <a href="<?php echo e(url('/mentors/' . $mentor->id . '-' . slug($mentor->{'fullname_' . app()->getLocale()}))); ?>">
                                            <?php echo e($mentor->{'fullname_' . app()->getLocale()}); ?>

                                        </a>
                                    </h4>
                                    <span>
                                        <?php echo e(__('third.'.$mentor->position)); ?>

                                    </span>
                                    <div class="team-social mt-20">
                                        <?php if($mentor->facebook_link): ?>
                                            <a href="<?php echo e($mentor->facebook_link); ?>">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        <?php endif; ?>
                                        <?php if($mentor->instagram_link): ?>
                                            <a class="bg-danger" href="<?php echo e($mentor->instagram_link); ?>">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        <?php endif; ?>
                                        <?php if($mentor->linkedin_link): ?>
                                            <a href="<?php echo e($mentor->linkedin_link); ?>"><i class="fab fa-linkedin"></i></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if(count($mentors) >= 4): ?>
                    <div class=" mb-5 col-lg-12 col-md-12 d-flex justify-content-center">
                        <a class="btn btn-success" href="/mentors"><?php echo e(__('third.more')); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php if(!$events->isEmpty()): ?>
        <section id="events" class="eventes-area fix pt-120 pb-120"
                 style=" background-image: url(assets/img/bg/event-bg-aliments.png); background-repeat: no-repeat; background-position: center;">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title center-align text-center mb-50">
                            <?php if(\Illuminate\Support\Facades\Lang::has('about_page.our_events')): ?>
                                <h5><?php echo e(__("about_page.our_events")); ?></h5>
                            <?php else: ?>
                                <h5></h5>
                            <?php endif; ?>
                            <?php if(\Illuminate\Support\Facades\Lang::has('about_page.upcoming_events')): ?>
                                <h2>
                                    <?php echo e(__("about_page.upcoming_events")); ?>

                                </h2>
                            <?php else: ?>
                                <h2></h2>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($event->getOriginal('title') !== '' || $event->getOriginal('title')  !== null): ?>
                            <div class="col-lg-6 col-md-12">
                                <div class="eventes-box">
                                    <a href="/events/<?php echo e($event->id); ?>-<?php echo e(slug($event->title)); ?>">
                                        <div class="date-box">
                                            <div>
                                                <h3><?php echo e($event->start_date->format('d')); ?></h3>
                                                <h5><?php echo e($event->start_date->format('M, Y')); ?></h5>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="text">
                                        <h5>
                                            <a href="/events/<?php echo e($event->id); ?>-<?php echo e(slug($event->title)); ?>"><?php echo e($event->title); ?></a>
                                        </h5>
                                        <ul>
                                            <li><i class="fal fa-clock"></i> <?php echo e($event->start_date->format('H:i')); ?>

                                            </li>
                                            <li><i class="icon fal fa-map-marker-check"></i> <?php echo e($event->organizer); ?>

                                            </li>
                                        </ul>
                                        <p style="">
                                            <?php echo e($event->content); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="slider-btn mt-30">
                            <?php if(\Illuminate\Support\Facades\Lang::has('home_page.view_all_events')): ?>
                                <a class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s" href="/events">
                                    <?php echo e(__("home_page.view_all_events")); ?>

                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal9243db9140c8b2fbb308c4fc3cc33f301deabbb1 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Blogs::class, []); ?>
<?php $component->withName('blogs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9243db9140c8b2fbb308c4fc3cc33f301deabbb1)): ?>
<?php $component = $__componentOriginal9243db9140c8b2fbb308c4fc3cc33f301deabbb1; ?>
<?php unset($__componentOriginal9243db9140c8b2fbb308c4fc3cc33f301deabbb1); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal99843580f067249f9ed6ac259729d2bf4b8605e4 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Testimonials::class, []); ?>
<?php $component->withName('testimonials'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal99843580f067249f9ed6ac259729d2bf4b8605e4)): ?>
<?php $component = $__componentOriginal99843580f067249f9ed6ac259729d2bf4b8605e4; ?>
<?php unset($__componentOriginal99843580f067249f9ed6ac259729d2bf4b8605e4); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/home.blade.php ENDPATH**/ ?>