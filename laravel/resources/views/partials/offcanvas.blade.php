<div class="offcanvas-menu">
    <div class="offcanvas-header">
        <span class="menu-close"><i class="fas fa-times"></i></span>
        <div class="page-lang">
            <a href="{{ url('/az') }}" class="lang-item @if(app()->getLocale() === 'az') active @endif">
                <span>AZ</span>
            </a>
            <a href="{{ url('/en') }}" class="lang-item @if(app()->getLocale() === 'en') active @endif">
                <span>EN</span>
            </a>
        </div>
    </div>
    <form action="/courses" role="search" method="get" id="searchList" class="searchform">
        <input type="text" name="search" id="input-search" value="" placeholder="{{ __('header.search') }}"
               autocomplete="off"/>
    </form>

    <div id="cssmenu3" class="menu-one-page-menu-container">
        <ul id="menu-one-page-menu-2" class="menu">
            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a href="{{ url('/') }}">{{ __('header.home') }}</a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a href="{{ url('/about') }}">{{ __('header.about') }}</a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a href="{{ url('/courses') }}">{{ __('header.courses') }}</a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a href="{{ url('/trainers') }}">{{ __('header.trainers') }}</a>
            </li>
            @php
                $events = \App\Models\Event::all();
            @endphp
            @if(count($events) > 0)
                <li class="menu-item menu-item-type-custom menu-item-object-custom">
                    <a href="{{ url('/events') }}">{{ __('header.events') }}</a>
                </li>
            @endif
            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a href="{{ url('/blogs') }}">{{ __('header.blogs') }}</a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a href="{{ url('/news') }}">{{ __('header.news') }}</a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a href="{{ url('/contact') }}">{{ __('header.contact') }}</a>
            </li>
        </ul>
    </div>
</div>
<div class="offcanvas-overly"></div>
