<section id="blog" class="blog-area  p-relative pt-10 pb-90 fix"
         style=" background-image: url(<?php echo e(asset('assets/img/bg/blog-bg-aliments.png')); ?>); background-repeat: no-repeat; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <div class="section-title center-align text-center mb-50">
                        <?php if(\Illuminate\Support\Facades\Lang::has('about_page.blog_title')): ?>
                            <h5><?php echo e(__('about_page.blog_title')); ?></h5>
                        <?php else: ?>
                            <h5></h5>
                        <?php endif; ?>
                        <?php if(\Illuminate\Support\Facades\Lang::has('about_page.blog_content')): ?>
                            <h2>
                                <?php echo e(__('about_page.blog_content')); ?>

                            </h2>
                        <?php else: ?>
                            <h2></h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-12">
                    <a href="<?php echo e(url('/blogs/' . $blog->id . '-' . slug($blog->title))); ?>">
                        <div class="single-post2 mb-50  wow fadeInDown  animated">
                            <div class="blog-thumb2">
                                <img src="<?php echo e(asset('laravel/public/uploads/' . $blog->image)); ?>" alt="img">
                            </div>
                            <div class="blog-content2 text-center">
                                <div class="b-meta">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="date-b">
                                                <i class="fal fa-calendar-alt"></i>
                                                <?php echo e($blog->created_at->format('d M, Y')); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>
                                            <?php echo e($blog->title); ?>

                                        </h4>
                                        <?php if(\Illuminate\Support\Facades\Lang::has('home_page.read_more')): ?>
                                            <div class="blog-btn">
                                                <i class="fal fa-chevron-circle-right"></i> <?php echo e(__('home_page.read_more')); ?>

                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/components/blogs.blade.php ENDPATH**/ ?>