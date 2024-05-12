<header class="header-area header-three">
    <div id="header-sticky" class="menu-area">
        <div class="container" style="max-width: 1285px">
            <div class="second-menu">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="<?php echo e(url('/')); ?>">
                                <img src="<?php echo e(asset('/digiuth.svg')); ?>" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 px-0 col-lg-8">
                        <div class="main-menu text-right text-xl-right">
                            <nav id="mobile-menu" style="display: block;">
                                <ul>

                                    <li class="sub">
                                        <a href="<?php echo e(url('/about')); ?>"><?php echo e(__('header.about')); ?></a>
                                        <ul>
                                            <li>
                                                <a href="<?php echo e(url('/about#our-partners')); ?>"><?php echo e(__('header.our_partners')); ?></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(url('/about#our-team')); ?>"><?php echo e(__('header.our_team')); ?></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub">
                                        <a href="<?php echo e(url('/courses')); ?>"><?php echo e(__('header.courses')); ?></a>
                                    </li>
                                    <li class="sub">
                                        <a href="<?php echo e(url('/trainers')); ?>"><?php echo e(__('header.trainers')); ?></a>
                                    </li>
                                    <li class="sub">
                                        <a href="<?php echo e(url('/mentors')); ?>"><?php echo e(__('header.mentors')); ?></a>
                                    </li>
                                    <?php
                                        $events = \App\Models\Event::all();
                                    ?>
                                    <?php if(count($events) > 0): ?>
                                        <li class="sub">
                                            <a href="<?php echo e(url('/events')); ?>"><?php echo e(__('header.events')); ?></a>
                                        </li>
                                    <?php endif; ?>
                                    <li class="sub">
                                        <a href="#"><?php echo e(__('header.materials')); ?></a>
                                        <ul>
                                            <li>
                                                <a href="<?php echo e(url('/blogs')); ?>"><?php echo e(__('header.blogs')); ?></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(url('/news')); ?>"><?php echo e(__('header.news')); ?></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub">
                                        <a href="<?php echo e(url('/contact')); ?>"><?php echo e(__('header.contact')); ?></a>
                                    </li>
                                    <?php if(auth()->guard()->check()): ?>
                                        <li class="sub">
                                            <a href="/" class="user-link icon-only" onclick="return false;">
                                                <i class="fas fa-user"></i>
                                            </a>
                                            <a href="/" class="user-link full-name" onclick="return false;">
                                                <?php echo e(auth()->user()->{'fullname_' . app()->getLocale()} . ' ' . auth()->user()->user); ?>

                                            </a>

                                            <ul>
                                                <?php if(auth()->user()->status === 'teacher' && auth()->user()->is_active): ?>
                                                    <li>
                                                        <a href="/admin/resources/courses"><?php echo e(__('header.add_course')); ?></a>
                                                    </li>
                                                <?php endif; ?>
                                                <li><a href="/certificates"><?php echo e(__('header.certificates')); ?></a></li>
                                                <li><a href="/update-profile"><?php echo e(__('header.update_profile')); ?></a></li>
                                                <li><a href="/my-courses"><?php echo e(__('header.my_courses')); ?></a></li>
                                                <li><a href="/logout"><?php echo e(__('header.logout')); ?></a></li>
                                            </ul>
                                        </li>
                                    <?php else: ?>
                                        <li class="sub">
                                            <a href="#" onclick="return false;"><?php echo e(__('header.login')); ?></a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo e(url('/login')); ?>"><?php echo e(__('header.login')); ?></a>
                                                    <a href="<?php echo e(url('/register/teacher')); ?>"><?php echo e(__('header.registerAsTeacher')); ?></a>
                                                    <a href="<?php echo e(url('/register/mentor')); ?>"><?php echo e(__('header.registerAsMentor')); ?></a>
                                                    <a href="<?php echo e(url('/register/student')); ?>"><?php echo e(__('header.registerAsStudent')); ?></a>
                                                </li>
                                            </ul>
                                        </li>
                                    <?php endif; ?>
                                    <li class="sub">
                                        <a href="<?php echo e(url('/#')); ?>">
                                            
                                            <?php if(session()->get('locale') == 'az'): ?>
                                                AZ
                                            <?php elseif(session()->get('locale') == 'en'): ?>
                                                EN
                                            <?php else: ?>
                                                <?php echo e(strtoupper(app()->getLocale())); ?>

                                            <?php endif; ?>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="<?php echo e(url('/en')); ?>">EN</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(url('/az')); ?>">AZ</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="d-lg-none">
                                        <button class="btn" type="button" data-toggle="modal"
                                                data-target="#modalSearch">
                                            <a href="#">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                        </button>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 text-right d-none d-lg-block mt-15 mb-15">
                        <div class="search-top2">
                            <ul>
                                <li>
                                    <a href="#" class="menu-tigger">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="menu-tigger">
                                        <img src="<?php echo e(asset('/assets/img/icon/menu.png')); ?>" alt="logo">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="page-lang" style="display: none;">
                            <a href="<?php echo e(url('/az')); ?>" class="lang-item active">
                                <span>AZ</span>
                            </a>
                            <a href="<?php echo e(url('/en')); ?>" class="lang-item">
                                <span>EN</span>
                            </a>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/partials/header.blade.php ENDPATH**/ ?>