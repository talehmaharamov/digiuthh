@extends('layouts.app')
@section('title', __('home_page.title') . ' -')
@section('content')
    <section id="home" class="slider-area slider-four fix p-relative">
        <div class="slider-active">
            <div class="single-slider slider-bg d-flex align-items-center"
                 style="background: url(assets/img/slider/slider_img_bg.png) no-repeat;background-position: center center;">
                <div class="container">
                    <div class="row justify-content-center pt-50  pb-150">
                        <div class="col-lg-7">
                            <div class="slider-content s-slider-content mt-200">
                                @if(\Illuminate\Support\Facades\Lang::has('home_page.slogan'))
                                    <h2 data-animation="fadeInUp" data-delay=".4s">{{ __('home_page.slogan') }}</h2>
                                @else
                                    <h2></h2>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="slider-img" data-animation="fadeInUp" data-delay=".4s">
                                <img src="{{ asset('/assets/img/slider/home-img.jpg') }}" alt="slider_img05">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-abouts/>
    <x-about-videos/>
    <x-courses/>
    <section id="services" class="services-area pb-90 fix"
             style=" background-image: url(assets/img/bg/services-bg-aliments.png); background-repeat: no-repeat; background-position: center;">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="about-title second-atitle pb-20">
                        @if(\Illuminate\Support\Facades\Lang::has('home_page.category_title'))
                            <h5>{{ __('home_page.category_title') }}</h5>
                        @else
                            <h5></h5>
                        @endif
                        @if(\Illuminate\Support\Facades\Lang::has('home_page.category_slogan'))
                            <h2>
                                {{ __('home_page.category_slogan') }}
                            </h2>
                        @else
                            <h2></h2>
                        @endif
                        @if(\Illuminate\Support\Facades\Lang::has('home_page.category_slogan'))
                            <p>
                                {{ __('home_page.category_content') }}
                            </p>
                        @else
                            <p></p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        @foreach($categories as $key => $category)
                            <div class="col-lg-4 col-md-6">
                                <div class="services-box wow fadeInDown  animated" data-delay=".5s">
                                    <div class="services-icon">
                                        <a href="/courses/category/{{ $category->id }}-{{$category->title}}">
                                            <img src="/uploads/{{ $category->image }}" alt="icon01">
                                        </a>
                                    </div>
                                    <div class="services-content2">
                                        <h5>
                                            <a href="/courses/category/{{ $category->id }}-{{$category->title}}">{{ $category->title }}</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="our-team" class="team-area pb-80 fix"
             style=" background-image: url({{ asset('assets/img/bg/services-bg-aliments.png') }}); background-repeat: no-repeat; background-position: center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <div class="section-title center-align text-center mb-50">
                            @if(\Illuminate\Support\Facades\Lang::has('header.trainers'))
                                <h5>{{ __('header.trainers') }}</h5>
                            @else
                                <h5></h5>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($trainers as $trainer)
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ url('/trainers/' . $trainer->id . '-' . slug($trainer->{'fullname_' . app()->getLocale()})) }}">
                            <div class="single-team text-center mb-30 ">
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img style="height:225px;object-fit:cover;"
                                             src="{{ asset('uploads/' . $trainer->image) }}" alt="img">
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4>
                                        <a href="{{ url('/trainers/' . $trainer->id . '-' . slug($trainer->{'fullname_' . app()->getLocale()})) }}">
                                            {{ $trainer->{'fullname_' . app()->getLocale()} }}
                                        </a>
                                    </h4>
                                    <span>
                                        {{ $trainer->position }}
                                    </span>
                                    <div class="team-social mt-20">
                                        @if($trainer->facebook_link)
                                            <a href="{{ $trainer->facebook_link }}"><i
                                                    class="fab fa-facebook-f"></i></a>
                                        @endif
                                        @if($trainer->instagram_link)
                                            <a class="bg-danger" href="{{ $trainer->instagram_link }}"><i
                                                    class="fab fa-instagram"></i></a>
                                        @endif
                                        @if($trainer->linkedin_link)
                                            <a href="{{ $trainer->linkedin_link }}"><i class="fab fa-linkedin"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                @if(count($trainers) >= 4)
                    <div class=" mb-5 col-lg-12 col-md-12 d-flex justify-content-center">
                        <a class="btn btn-success" href="/trainers">
                            {{__('third.more')}}
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <section id="our-team" class="team-area pb-80 fix"
             style=" background-image: url({{ asset('assets/img/bg/services-bg-aliments.png') }}); background-repeat: no-repeat; background-position: center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <div class="section-title center-align text-center mb-50">
                            @if(\Illuminate\Support\Facades\Lang::has('header.mentors'))
                                <h5>{{ __('header.mentors') }}</h5>
                            @else
                                <h5></h5>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($mentors as $mentor)
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ url('/mentors/' . $mentor->id . '-' . slug($mentor->{'fullname_' . app()->getLocale()})) }}">
                            <div class="single-team text-center mb-30 ">
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img style="height:225px;object-fit:cover;"
                                             src="{{ asset('/uploads//' . $mentor->image) }}" alt="img">
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4>
                                        <a href="{{ url('/mentors/' . $mentor->id . '-' . slug($mentor->{'fullname_' . app()->getLocale()})) }}">
                                            {{ $mentor->{'fullname_' . app()->getLocale()} }}
                                        </a>
                                    </h4>
                                    <span>
                                        {{ $mentor->position }}
                                    </span>
                                    <div class="team-social mt-20">
                                        @if($mentor->facebook_link)
                                            <a href="{{ $mentor->facebook_link }}"><i class="fab fa-facebook-f"></i></a>
                                        @endif
                                        @if($mentor->instagram_link)
                                            <a class="bg-danger" href="{{ $mentor->instagram_link }}">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        @endif
                                        @if($mentor->linkedin_link)
                                            <a href="{{ $mentor->linkedin_link }}"><i class="fab fa-linkedin"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                @if(count($mentors) >= 4)
                    <div class=" mb-5 col-lg-12 col-md-12 d-flex justify-content-center">
                        <a class="btn btn-success" href="/mentors">{{__('third.more')}}</a>
                    </div>
                @endif
            </div>
        </div>
    </section>
    @if(!$events->isEmpty())
        <section id="events" class="eventes-area fix pt-120 pb-120"
                 style=" background-image: url(assets/img/bg/event-bg-aliments.png); background-repeat: no-repeat; background-position: center;">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title center-align text-center mb-50">
                            @if(\Illuminate\Support\Facades\Lang::has('about_page.our_events'))
                                <h5>{{ __("about_page.our_events") }}</h5>
                            @else
                                <h5></h5>
                            @endif
                            @if(\Illuminate\Support\Facades\Lang::has('about_page.upcoming_events'))
                                <h2>
                                    {{ __("about_page.upcoming_events") }}
                                </h2>
                            @else
                                <h2></h2>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="row">
                    @foreach($events as $event)
                        @if($event->getOriginal('title') !== '' || $event->getOriginal('title')  !== null)
                            <div class="col-lg-6 col-md-12">
                                <div class="eventes-box">
                                    <a href="/events/{{$event->id}}-{{slug($event->title)}}">
                                        <div class="date-box">
                                            <div>
                                                <h3>{{ $event->start_date->format('d') }}</h3>
                                                <h5>{{ $event->start_date->format('M, Y') }}</h5>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="text">
                                        <h5>
                                            <a href="/events/{{$event->id}}-{{slug($event->title)}}">{{ $event->title }}</a>
                                        </h5>
                                        <ul>
                                            <li><i class="fal fa-clock"></i> {{ $event->start_date->format('H:i') }}
                                            </li>
                                            <li><i class="icon fal fa-map-marker-check"></i> {{ $event->organizer }}
                                            </li>
                                        </ul>
                                        <p style="">
                                            {{ $event->content }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="slider-btn mt-30">
                            @if(\Illuminate\Support\Facades\Lang::has('home_page.view_all_events'))
                                <a class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s" href="/events">
                                    {{ __("home_page.view_all_events") }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <x-blogs/>
    <x-testimonials/>
@endsection
