@extends('layouts.app')

@section('title', $keyword . ' -')

@section('content')
    <section class="breadcrumb-area d-flex align-items-center"
             style="background-image:url({{ asset('assets/img/testimonial/test-bg.png') }})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>
                                {{ __('header.search') }}:
                                {{ $keyword }}
                            </h2>
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        @if(\Illuminate\Support\Facades\Lang::has('header.home'))
                                            <li class="breadcrumb-item">
                                                <a href="/">
                                                    {{ __('header.home') }}
                                                </a>
                                            </li>
                                        @endif
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if(count($courses) > 0)
        <section id="courses" class="courses eventes-area fix pb-10"
                 style=" background-image: url({{ asset('assets/img/bg/event-bg-aliments.png') }}); background-repeat: no-repeat; background-position: center;">
            <div class="container">
                <div class="tab_body first">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title center-align">
                                @if(\Illuminate\Support\Facades\Lang::has('header.courses'))
                                    <h2>
                                        {{ __('header.courses') }}:
                                    </h2>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row pt-10">
                        @foreach($courses as $course)
                            @if($course->course_sections->count() > 0)
                                <div class="col-lg-3 col-md-4 col-sm-6 mb-50">
                                    <a href="{{ url('/courses/' . $course->id . '-' . slug($course->title)) }}">
                                        <div class="course-item">
                                            <a href="{{ url('/courses/' . $course->id . '-' . slug($course->title)) }}">
                                                <div class="course-cover">
                                                    <img src="{{ asset('uploads/' . $course->image) }}"
                                                         alt="{{ $course->title }}">
                                                </div>
                                                <div class="course-info">
                                                    <div class="course-name">
                                                        {{ $course->title }}
                                                    </div>
                                                    <div class="course-author">
                                                        {{ $course->user?->name . ' ' . $course->user?->surname }}
                                                    </div>
                                                    @if(\Illuminate\Support\Facades\Lang::has('course.course_start'))
                                                        <div class="start-course">
                                                            {{ __('course.course_start') }}
                                                        </div>
                                                    @endif
                                                </div>
                                            </a>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if(count($mentors) > 0)
        <section id="courses" class="courses eventes-area fix pt-10 pb-10"
                 style=" background-image: url({{ asset('assets/img/bg/event-bg-aliments.png') }}); background-repeat: no-repeat; background-position: center;">
            <div class="container">
                <div class="tab_body first">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title center-align">
                                @if(\Illuminate\Support\Facades\Lang::has('header.mentors'))
                                    <h2>
                                        {{ __('header.mentors') }}:
                                    </h2>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row pt-10">
                        @foreach($mentors as $mentor)
                            <div class="col-lg-3 col-md-6">
                                <a href="{{ url('/mentors/' . $mentor->id . '-' . slug($mentor->{'fullname_' . app()->getLocale()})) }}">
                                    <div class="single-team text-center mb-30 ">
                                        <div class="team-thumb">
                                            <div class="brd">
                                                <img style="height:225px;object-fit:cover"
                                                     src="{{ asset('laravel/public/uploads/' . $mentor->image) }}"
                                                     alt="img">
                                            </div>
                                        </div>
                                        <div class="team-info">
                                            <h4>
                                                <a href="{{ url('/mentors/' . $mentor->id . '-' . slug($mentor->fullname_en)) }}">
                                                    {{ $mentor->{'fullname_' . app()->getLocale()} }}
                                                </a>
                                            </h4>
                                            <span>{{ $mentor->{'speciality_' . app()->getLocale()} }}</span>
                                            <div class="team-social mt-20">
                                                @if($mentor->facebook_link)
                                                    <a href="{{ $mentor->facebook_link }}" class="iconFb">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                @endif
                                                @if($mentor->instagram_link)
                                                    <a href="{{ $mentor->instagram_link }}" class="iconIg">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                @endif
                                                @if($mentor->linkedin_link)
                                                    <a href="{{ $mentor->linkedin_link }}" class="iconLk">
                                                        <i class="fab fa-linkedin"></i>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if(count($trainers) > 0)
        <section id="courses" class="courses eventes-area fix pt-10 pb-10"
                 style=" background-image: url({{ asset('assets/img/bg/event-bg-aliments.png') }}); background-repeat: no-repeat; background-position: center;">
            <div class="container">
                <div class="tab_body first">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title center-align">
                                @if(\Illuminate\Support\Facades\Lang::has('header.trainers'))
                                    <h2>
                                        {{ __('header.trainers') }}:
                                    </h2>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row pt-10">
                        @foreach($trainers as $trainer)
                            <div class="col-lg-3 col-md-6">
                                <a href="{{ url('/mentors/' . $trainer->id . '-' . slug($trainer->{'fullname_' . app()->getLocale()})) }}">
                                    <div class="single-team text-center mb-30 ">
                                        <div class="team-thumb">
                                            <div class="brd">
                                                <img style="height:225px;object-fit:cover"
                                                     src="{{ asset('laravel/public/uploads/' . $trainer->image) }}"
                                                     alt="img">
                                            </div>
                                        </div>
                                        <div class="team-info">
                                            <h4>
                                                <a href="{{ url('/mentors/' . $trainer->id . '-' . slug($trainer->fullname_en)) }}">
                                                    {{ $trainer->{'fullname_' . app()->getLocale()} }}
                                                </a>
                                            </h4>
                                            <span>{{ $trainer->{'speciality_' . app()->getLocale()} }}</span>
                                            <div class="team-social mt-20">
                                                @if($trainer->facebook_link)
                                                    <a href="{{ $trainer->facebook_link }}" class="iconFb">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                @endif
                                                @if($trainer->instagram_link)
                                                    <a href="{{ $trainer->instagram_link }}" class="iconIg">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                @endif
                                                @if($trainer->linkedin_link)
                                                    <a href="{{ $trainer->linkedin_link }}" class="iconLk">
                                                        <i class="fab fa-linkedin"></i>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if(count($blogs) > 0)
        <section class="inner-blog pt-10 pb-10">
            <div class="container">
                <div class="tab_body first">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title center-align">
                                @if(\Illuminate\Support\Facades\Lang::has('header.blogs'))
                                    <h2>
                                        {{ __('header.blogs') }}:
                                    </h2>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($blogs as $blog)
                            <div class="col-lg-4">
                                <div class="bsingle__post mb-50" style="margin-top: 0px;">
                                    <a href="{{ url('/blogs/' . $blog->id . '-' . slug($blog->title)) }}">
                                        <div class="bsingle__post-thumb">
                                            <img src="{{ asset('laravel/public/uploads/' . $blog->image) }}"
                                                 alt="{{ $blog->title }}">
                                        </div>
                                        <div class="bsingle__content">
                                            <div class="admin d-none">
                                                <a><i class="far fa-user"></i> {{ ($blog->user->name ?? '') .' ' . ($blog->user->surname ?? '') }}
                                                </a>
                                            </div>
                                            <h4 class="fixed-title-height">
                                                <a href="{{ url('/blogs/' . $blog->id . '-' . slug($blog->title)) }}">
                                                    {{$blog->title}}
                                                </a>
                                            </h4>
                                            <div class="mt-3 col-lg-12 col-md-12 d-flex justify-content-center">
                                                <a class="btn btn-show-more btn-success"
                                                   style="padding: 14px 36px;font-size: 15px;"
                                                   href="{{ url('/blogs/' . $blog->id . '-' . slug($blog->title)) }}">{{__('header.moree')}}</a>
                                            </div>

                                            @php
                                                $category = $blog->blog_category;
                                            @endphp

                                            <div class="meta-info" style="margin-top: 15px;">
                                                <ul style="display: flex; justify-content: center;">
                                                    @if(\Illuminate\Support\Facades\Lang::has('header.category'))
                                                        <li class="breadcrumb-item breadcrumb-category">
                                                            <a href="/" style="color: inherit;">
                                                                {{__('header.category') }}
                                                            </a>
                                                        </li>
                                                    @endif
                                                    <li class="cat-item cat-item-16">
                                                        <a style="color: inherit !important;"
                                                           href="{{ url('/blogs/category/' . $category->id . '-' . slug($category->title)) }}">{{
                                    $category->title }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="meta-info" style="margin-top: 15px;">
                                                <ul style="text-align: center;">
                                                    <li>
                                                        <i class="fal fa-calendar-alt"></i>{{ $blog->created_at->format('d m, Y') }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if(count($events) > 0)
        <section id="events" class="eventes-area fix pb-120"
                 style=" background-image: url({{ asset('assets/img/bg/event-bg-aliments.png') }}); background-repeat: no-repeat; background-position: center;">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title center-align mb-20">
                            @if(\Illuminate\Support\Facades\Lang::has('third.upcoming_events'))
                                <h2>
                                    {{ __('third.upcoming_events') }}
                                </h2>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    @forelse($events as $event)
                        <div class="col-lg-6 col-md-12 mb-30">
                            <a href="{{ url('events/' . $event->id . '-' . slug($event->title)) }}">
                                <div class="eventes-box">
                                    <div class="date-box">
                                        <div>
                                            <h3>{{ $event->start_date->format('d') }}</h3>
                                            <h5>{{ $event->start_date->format('M, Y') }}</h5>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h5>{{ $event->title }}</h5>
                                        <ul>
                                            <li><i class="fal fa-clock"></i> {{ $event->start_date->format('H:i') }}
                                            </li>
                                            <li><i class="icon fal fa-map-marker-check"></i> {{ $event->place }}</li>
                                        </ul>
                                        <p>{{ $event->content }}</p>
                                        <div class="mt-3 col-lg-12 col-md-12 d-flex justify-content-center">
                                            <a class="btn btn-show-more btn-success"
                                               style="padding: 14px 36px;font-size: 15px;"
                                               href="{{url('events/' . $event->id . '-' . slug($event->title)) }}">{{__('header.moree')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                    @endforelse
                </div>

            </div>
        </section>
    @endif
@endsection
