<header class="header-area header-three">
    <div id="header-sticky" class="menu-area">
        <div class="container" style="max-width: 1285px">
            <div class="second-menu">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('/digiuth.svg') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 px-0 col-lg-8">
                        <div class="main-menu text-right text-xl-right">
                            <nav id="mobile-menu" style="display: block;">
                                <ul>

                                    <li class="sub">
                                        <a href="{{ url('/about') }}">{{ __('header.about') }}</a>
                                        <ul>
                                            <li>
                                                <a href="{{ url('/about#our-partners') }}">{{ __('header.our_partners') }}</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/about#our-team') }}">{{ __('header.our_team') }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub">
                                        <a href="{{ url('/courses') }}">{{ __('header.courses') }}</a>
                                    </li>
                                    <li class="sub">
                                        <a href="{{ url('/trainers') }}">{{ __('header.trainers') }}</a>
                                    </li>
                                    <li class="sub">
                                        <a href="{{ url('/mentors') }}">{{ __('header.mentors') }}</a>
                                    </li>
                                    @php
                                        $events = \App\Models\Event::all();
                                    @endphp
                                    @if(count($events) > 0)
                                        <li class="sub">
                                            <a href="{{ url('/events') }}">{{ __('header.events') }}</a>
                                        </li>
                                    @endif
                                    <li class="sub">
                                        <a href="#">{{ __('header.materials') }}</a>
                                        <ul>
                                            <li>
                                                <a href="{{ url('/blogs') }}">{{ __('header.blogs') }}</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/news') }}">{{ __('header.news') }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub">
                                        <a href="{{ url('/contact') }}">{{ __('header.contact') }}</a>
                                    </li>
                                    @auth
                                        <li class="sub">
                                            <a href="/" class="user-link icon-only" onclick="return false;">
                                                <i class="fas fa-user"></i>
                                            </a>
                                            <a href="/" class="user-link full-name" onclick="return false;">
                                                {{ auth()->user()->{'fullname_' . app()->getLocale()} . ' ' . auth()->user()->user }}
                                            </a>

                                            <ul>
                                                @if(auth()->user()->status === 'teacher' && auth()->user()->is_active)
                                                    <li>
                                                        <a href="/admin/resources/courses">{{ __('header.add_course') }}</a>
                                                    </li>
                                                @endif
                                                <li><a href="/certificates">{{ __('header.certificates') }}</a></li>
                                                <li><a href="/update-profile">{{ __('header.update_profile') }}</a></li>
                                                <li><a href="/my-courses">{{ __('header.my_courses') }}</a></li>
                                                <li><a href="/logout">{{ __('header.logout') }}</a></li>
                                            </ul>
                                        </li>
                                    @else
                                        <li class="sub">
                                            <a href="#" onclick="return false;">{{ __('header.login') }}</a>
                                            <ul>
                                                <li>
                                                    <a href="{{ url('/login') }}">{{ __('header.login') }}</a>
                                                    <a href="{{ url('/register/teacher') }}">{{ __('header.registerAsTeacher') }}</a>
                                                    <a href="{{ url('/register/mentor') }}">{{ __('header.registerAsMentor') }}</a>
                                                    <a href="{{ url('/register/student') }}">{{ __('header.registerAsStudent') }}</a>
                                                </li>
                                            </ul>
                                        </li>
                                    @endauth
                                    <li class="sub">
                                        <a href="{{ url('/#') }}">
                                            {{--                                            <i style="font-size: 23px;" class="fas fa-language fa-2x"></i>--}}
                                            @if(session()->get('locale') == 'az')
                                                AZ
                                            @elseif(session()->get('locale') == 'en')
                                                EN
                                            @else
                                                {{ strtoupper(app()->getLocale()) }}
                                            @endif
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="{{ url('/en') }}">EN</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/az') }}">AZ</a>
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
                                        <img src="{{ asset('/assets/img/icon/menu.png') }}" alt="logo">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="page-lang" style="display: none;">
                            <a href="{{ url('/az') }}" class="lang-item active">
                                <span>AZ</span>
                            </a>
                            <a href="{{ url('/en') }}" class="lang-item">
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
