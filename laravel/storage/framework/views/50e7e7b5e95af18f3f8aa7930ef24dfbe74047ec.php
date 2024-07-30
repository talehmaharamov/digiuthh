<?php $__env->startSection('title', __('header.news') . ' -'); ?>

<?php $__env->startSection('content'); ?>
    <section class="breadcrumb-area d-flex align-items-center"
             style="background-image:url(<?php echo e(asset('assets/img/testimonial/test-bg.png')); ?>)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <?php if(\Illuminate\Support\Facades\Lang::has('header.news')): ?>
                                <h2><?php echo e(__('header.news')); ?></h2>
                            <?php endif; ?>
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <?php if(\Illuminate\Support\Facades\Lang::has('header.home')): ?>
                                            <li class="breadcrumb-item"><a href="/"><?php echo e(__('header.home')); ?></a></li>
                                        <?php endif; ?>
                                        <?php if(\Illuminate\Support\Facades\Lang::has('header.news')): ?>
                                            <li class="breadcrumb-item active"
                                                aria-current="page"><?php echo e(__('header.news')); ?></li>
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
    <section class="inner-blog pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="bsingle__post mb-50">
                            <a href="<?php echo e(url('/news/' . $blog->id . '-' . slug($blog->title))); ?>ss">
                                <div class="bsingle__post-thumb">
                                    <img src="<?php echo e(asset('uploads/' . $blog->image)); ?>" alt="<?php echo e($blog->title); ?>">
                                </div>
                                <div class="bsingle__content">
                                    <div class="admin d-none">
                                        <a>
                                            <i class="far fa-user"></i>
                                            <?php echo e($blog->user?->name . ' ' .$blog->user?->surname); ?>

                                        </a>
                                    </div>
                                    <h4>
                                        <a href="<?php echo e(url('/news/' . $blog->id . '-' . slug($blog->title))); ?>">
                                            
                                            <?php echo e($blog->title); ?>

                                        </a>
                                    </h4>
                                    <div class="mt-3 col-lg-12 col-md-12 d-flex justify-content-center">
                                        <a class="btn btn-show-more btn-success"
                                           style="padding: 14px 36px;font-size: 15px;"
                                           href="<?php echo e(url('/news/' . $blog->id . '-' . slug($blog->title))); ?>"><?php echo e(__('header.moree')); ?></a>
                                    </div>

                                    <div class="meta-info" style="margin-top: 15px;">
                                        <ul style="display: flex; justify-content: center;">
                                            <?php
                                                $category = $blog->news_category;
                                            ?>
                                            <?php if(\Illuminate\Support\Facades\Lang::has('header.category')): ?>
                                                <li class="breadcrumb-item breadcrumb-category"><a href="/"
                                                                                                   style="color: inherit;"><?php echo e(__('header.category')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            
                                            
                                            <li class="cat-item cat-item-16">
                                                <a style="color: inherit !important;"
                                                   href="<?php echo e(url('/news/category/' . $category->id . '-' . slug($category->title))); ?>">
                                                    <?php echo e($category->title); ?></a>
                                            </li>
                                            
                                        </ul>
                                    </div>

                                    <div class="meta-info" style="margin-top: 15px;">
                                        <ul style="text-align: center;">
                                            <li>
                                                <i class="fal fa-calendar-alt"></i><?php echo e($blog->created_at->format('d m, Y')); ?>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($blogs->links()); ?>

                </div>
            </div>
            <aside class="sidebar-widget">

                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
            </aside>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/news/all.blade.php ENDPATH**/ ?>