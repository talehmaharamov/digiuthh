<footer class="footer-bg footer-p fix"
        style="background-repeat: no-repeat; background-position: center;">
    <div class="footer-top sponsors pt-70 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-12 pb-20">
                    
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    
                    <a href="https://www.visegradfund.org/">
                        
                        <img src="<?php echo e(asset('/assets/img/vpng.png')); ?>" alt="">
                    </a>
                    
                </div>
                <div class="col-lg-12 footer-widget mb-30">

                    <div class="footer-widget footer-social mt-15  text-right text-xl-right">
                        <a href="https://www.facebook.com/visegradfund" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/visegradfund/" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/visegradfund" target="_blank"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-12">
                    <p>
                        <?php if(\Illuminate\Support\Facades\Lang::has('third.visegrad_op')): ?>
                            <?php echo e(__('third.visegrad_op')); ?>

                        <?php else: ?>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php
        $contact = \App\Models\Contact::find(1);
    ?>
    <div class="footer-center  pt-70 pb-40">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12">
                    <div class="footer-widget mb-30">
                        <img src="<?php echo e(asset('/assets/img/logo/f_logo.png')); ?>" alt="img">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <?php if(\Illuminate\Support\Facades\Lang::has('header.about')): ?>
                                <h2><?php echo e(__("header.about")); ?></h2>
                            <?php else: ?>
                                <h2></h2>
                            <?php endif; ?>
                        </div>
                        <div class="footer-link">
                            <?php if(\Illuminate\Support\Facades\Lang::has('header.slogan')): ?>
                                <?php echo e(__('header.slogan')); ?>

                            <?php else: ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div>
                        <div class="footer-widget footer-social mt-15  text-right text-xl-right">
                            <a href="https://www.facebook.com/digiuth" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/digiuth/" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/digiuth/?originalSubdomain=az" target="_blank"><i
                                        class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <?php if(\Illuminate\Support\Facades\Lang::has('header.contact')): ?>
                                <h2><?php echo e(__("header.contact")); ?></h2>
                            <?php else: ?>
                            <?php endif; ?>
                        </div>
                        <div class="f-contact">
                            <ul>
                                <li class="d-flex align-items-center">
                                    <i class="icon fal fa-map-marker-check"></i>
                                    <span style="width: 75%;"><?php echo e($contact->address); ?></span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon fal fa-phone"></i>
                                    <span style="width: 60%;"><?php echo e($contact->phone_number); ?></span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon fal fa-envelope"></i>
                                    <span style="width: 60%;">
                                        <a href="mailto:<?php echo e($contact->email_address); ?>"><?php echo e($contact->email_address); ?></a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <?php if(\Illuminate\Support\Facades\Lang::has('header.services')): ?>
                                <h2><?php echo e(__('header.services')); ?></h2>
                            <?php else: ?>
                                <h2></h2>
                            <?php endif; ?>
                        </div>
                        <div class="footer-link">
                            <ul>
                                <?php if(\Illuminate\Support\Facades\Lang::has('header.home')): ?>
                                    <li><a href="/"><?php echo e(__('header.home')); ?></a></li>
                                <?php endif; ?>
                                <?php if(\Illuminate\Support\Facades\Lang::has('header.about')): ?>

                                    <li><a href="/about"><?php echo e(__('header.about')); ?></a></li>
                                <?php endif; ?>
                                <?php if(\Illuminate\Support\Facades\Lang::has('header.trainers')): ?>
                                    <li><a href="/trainers"><?php echo e(__('header.trainers')); ?></a></li>
                                <?php endif; ?>
                                <?php if(\Illuminate\Support\Facades\Lang::has('header.courses')): ?>
                                    <li><a href="/courses"><?php echo e(__('header.courses')); ?></a></li>
                                <?php endif; ?>
                                <?php
                                    $events = \App\Models\Event::all();
                                ?>
                                <?php if(count($events) > 0): ?>
                                    <?php if(\Illuminate\Support\Facades\Lang::has('header.events')): ?>
                                        <li><a href="/events"><?php echo e(__('header.events')); ?></a></li>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if(\Illuminate\Support\Facades\Lang::has('header.blogs')): ?>
                                    <li><a href="/blogs"><?php echo e(__('header.blogs')); ?></a></li>
                                <?php endif; ?>
                                <?php if(\Illuminate\Support\Facades\Lang::has('header.news')): ?>
                                    <li><a href="/news"><?php echo e(__('header.news')); ?></a></li>
                                <?php endif; ?>
                                <?php if(\Illuminate\Support\Facades\Lang::has('header.contact')): ?>
                                    <li><a href="/contact"><?php echo e(__('header.contact')); ?></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-8 footer-widget">
                    <a href="https://esn.az">
                        <img style="width: 60px;" src="<?php echo e(asset('assets/img/esn.png')); ?>"/>
                        <?php if(\Illuminate\Support\Facades\Lang::has('header.copyright')): ?>
                            <span><?php echo e(__('header.copyright')); ?></span>
                        <?php endif; ?>
                    </a>
                </div>
                <div class="col-lg-4 d-flex justify-content-end">
                    <?php if(\Illuminate\Support\Facades\Lang::has('third.copyright')): ?>
                        <span> <?php echo e(__('third.copyright')); ?> </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/partials/footer.blade.php ENDPATH**/ ?>