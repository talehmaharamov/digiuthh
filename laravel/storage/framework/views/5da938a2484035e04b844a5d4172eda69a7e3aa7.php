<div class="offcanvas-menu">
    <div class="offcanvas-header">
        <span class="menu-close"><i class="fas fa-times"></i></span>
        <div class="page-lang">
            <a href="<?php echo e(url('/az')); ?>" class="lang-item <?php if(app()->getLocale() === 'az'): ?> active <?php endif; ?>">
                <span>AZ</span>
            </a>
            <a href="<?php echo e(url('/en')); ?>" class="lang-item <?php if(app()->getLocale() === 'en'): ?> active <?php endif; ?>">
                <span>EN</span>
            </a>
        </div>
    </div>
    <form action="/courses" role="search" method="get" id="searchList" class="searchform">
        <input type="text" name="search" id="input-search" value="" placeholder="<?php echo e(__('header.search')); ?>"
               autocomplete="off"/>
    </form>

    <div id="cssmenu3" class="menu-one-page-menu-container">
        <ul id="menu-one-page-menu-2" class="menu">
            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a href="<?php echo e(url('/')); ?>"><?php echo e(__('header.home')); ?></a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a href="<?php echo e(url('/about')); ?>"><?php echo e(__('header.about')); ?></a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a href="<?php echo e(url('/courses')); ?>"><?php echo e(__('header.courses')); ?></a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a href="<?php echo e(url('/trainers')); ?>"><?php echo e(__('header.trainers')); ?></a>
            </li>
            <?php
                $events = \App\Models\Event::all();
            ?>
            <?php if(count($events) > 0): ?>
                <li class="menu-item menu-item-type-custom menu-item-object-custom">
                    <a href="<?php echo e(url('/events')); ?>"><?php echo e(__('header.events')); ?></a>
                </li>
            <?php endif; ?>
            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a href="<?php echo e(url('/blogs')); ?>"><?php echo e(__('header.blogs')); ?></a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a href="<?php echo e(url('/news')); ?>"><?php echo e(__('header.news')); ?></a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a href="<?php echo e(url('/contact')); ?>"><?php echo e(__('header.contact')); ?></a>
            </li>
        </ul>
    </div>
</div>
<div class="offcanvas-overly"></div>
<?php /**PATH C:\laragon\www\digiuth\laravel\resources\views/partials/offcanvas.blade.php ENDPATH**/ ?>