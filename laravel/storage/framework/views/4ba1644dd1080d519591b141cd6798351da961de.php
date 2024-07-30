<?php $__env->startSection("title", $blog->title); ?>

<?php $__env->startSection("content"); ?>

<section class="breadcrumb-area d-flex align-items-center"
         style="background-image:url(<?php echo e(asset('assets/img/testimonial/test-bg.png')); ?>)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="breadcrumb-wrap text-left">
                    <div class="breadcrumb-title">
                        <?php if(\Illuminate\Support\Facades\Lang::has('header.blogs')): ?>
                        <h2><?php echo e(__('header.blogs')); ?></h2>
                        <?php endif; ?>
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <?php if(\Illuminate\Support\Facades\Lang::has('header.home')): ?>
                                    <li class="breadcrumb-item"><a href="/"><?php echo e(__('header.home')); ?></a></li>
                                    <?php endif; ?>
                                    <?php if(\Illuminate\Support\Facades\Lang::has('header.blogs')): ?>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('header.blogs')); ?></li>
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
<section class="inner-blog b-details-p pt-120 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-details-wrap">
                    <div class="details__content pb-30">
                        <h2>
                            <?php echo e($blog->title); ?>

                        </h2>
                        <div class="meta-info">
                            <ul>
                                <li><i class="fal fa-calendar-alt"></i><?php echo e($blog->created_at->format('d-M-Y H:i')); ?></li>
                            </ul>
                        </div>
                        <div class="details__content-img">
                            <img src="<?php echo e(asset('laravel/public/uploads/' . $blog->image)); ?>" style="width:100%;" alt="">
                        </div>
                        <p><?php echo $blog->{'content' . (app()->getLocale() === 'az' ? '_az' : '')}; ?></p>
                    </div>
                    <?php if(count($blogs) > 1): ?>
                    <div class="related__post mt-45 mb-85">
                        <div class="post-title">
                            <?php if(\Illuminate\Support\Facades\Lang::has('third.releated_post')): ?>
                            <h4><?php echo e(__("third.releated_post")); ?></h4>
                            <?php else: ?>
                            <h4></h4>
                            <?php endif; ?>
                        </div>
                        <div class="row">
                            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6">
                                <div class="related-post-wrap mb-30">
                                    <div class="post-thumb">
                                        <img src="<?php echo e(asset('laravel/public/uploads/' . $blog->image)); ?>" alt="">
                                    </div>
                                    <div class="rp__content">
                                        <h3>
                                            <a asp-action="Detail" asp-route-id="@item.Id">
                                                <?php echo e($blog->title); ?>

                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/blogs/single.blade.php ENDPATH**/ ?>