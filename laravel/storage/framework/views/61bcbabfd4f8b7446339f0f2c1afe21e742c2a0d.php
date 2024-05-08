<section id="about" class="about-area about-p pt-80 pb-60 p-relative"
         style="background: url(<?php echo e(asset('assets/img/features/about-bg-aliments.png')); ?>) no-repeat;background-position: center center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="s-about-img p-relative  wow fadeInLeft  animated" data-animation="fadeInLeft"
                     data-delay=".4s">
                    <img src="<?php echo e(asset('uploads/' . $about->image)); ?>" alt="img">
                    <div class="about-text second-about">
                        <div class="all-text" style="padding-top: 0!important;">
                            <div class="d-flex justify-content-center align-items-center h-100"><?php echo e($about->guarantee); ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="about-content s-about-content  wow fadeInRight  animated" data-animation="fadeInRight"
                     data-delay=".4s">
                    <div class="about-title second-atitle pb-25">
                        <h5><?php echo e($about->name); ?></h5>
                        <h2><?php echo e($about->title); ?></h2>
                    </div>
                    <p><?php echo $about->content; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/components/abouts.blade.php ENDPATH**/ ?>