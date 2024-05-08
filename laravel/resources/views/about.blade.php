@extends('layouts.app')

@section('title', __('header.about') . ' -')

@section('content')
    <section class="breadcrumb-area d-flex align-items-center"
             style="background-image:url({{ asset('assets/img/testimonial/test-bg.png') }})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            @if(\Illuminate\Support\Facades\Lang::has('header.about'))
                                <h2>{{ __('header.about') }}</h2>
                            @else
                                <h2></h2>
                            @endif
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        @if(\Illuminate\Support\Facades\Lang::has('header.home'))
                                            <li class="breadcrumb-item"><a href="/">{{ __('header.home') }}</a></li>
                                        @endif
                                        @if(\Illuminate\Support\Facades\Lang::has('header.about'))
                                            <li class="breadcrumb-item active"
                                                aria-current="page">{{ __('header.about') }}</li>
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
    <x-abouts/>
    <x-about-videos/>
    <section id="our-team" class="team-area pb-80 fix"
             style=" background-image: url({{ asset('assets/img/bg/services-bg-aliments.png') }}); background-repeat: no-repeat; background-position: center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <div class="section-title center-align text-center mb-50">
                            @if(\Illuminate\Support\Facades\Lang::has('about_page.team_title'))
                                <h5>{{ __('about_page.team_title') }}</h5>
                            @else
                                <h5></h5>
                            @endif

                            @if(\Illuminate\Support\Facades\Lang::has('about_page.team_content'))
                                <h2>
                                    {{ __('about_page.team_content') }}
                                </h2>
                            @else
                                <h2></h2>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($teams as $team)
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ url('/team/' . $team->id . '-' . slug($team->fullname)) }}">
                            <div class="single-team text-center mb-30 ">
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img src="{{ asset('uploads/' . $team->image) }}" alt="img">
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4>
                                        <a href="{{ url('/team/' . $team->id . '-' . slug($team->fullname)) }}">{{ $team->fullname }}</a>
                                    </h4>
                                    <span>{{ $team->position }}</span>
                                    <div class="team-social mt-20">
                                        @if($team->facebook_link)
                                            <a href="{{ $team->facebook_link }}"><i class="fab fa-facebook-f"></i></a>
                                        @endif
                                        @if($team->instagram_link)
                                            <a class="bg-danger" href="{{ $team->instagram_link }}"><i
                                                    class="fab fa-instagram"></i></a>
                                        @endif
                                        @if($team->linkedin_link)
                                            <a href="{{ $team->linkedin_link }}"><i class="fab fa-linkedin"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <x-testimonials/>
    <section id="our-partners" class="partners-area  p-relative pt-80 pb-30 fix"
             style=" background-image: url({{ asset('assets/img/bg/blog-bg-aliments.png') }}); background-repeat: no-repeat; background-position: center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <div class="section-title center-align text-center mb-50">
                            @if(\Illuminate\Support\Facades\Lang::has('about_page.partner_title'))
                                <h5>{{ __('about_page.partner_title') }}</h5>
                            @else
                                <h5></h5>
                            @endif
                            @if(\Illuminate\Support\Facades\Lang::has('about_page.partner_content'))
                                <h2>{{ __('about_page.partner_content') }}</h2>
                            @else
                                <h2></h2>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($partners as $partner)
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="partner-item mb-30  wow fadeInDown  animated">
                            <a href="{{ $partner->link ?? '#' }}">
                                <img src="{{ asset('uploads/' . $partner->image) }}" alt="{{ $partner->title }}">
                            </a>
                        </div>
                        <div class="single-team text-center mb-30 ">
                            <div class="team-info py-1">
                                <h4>
                                    {{ $partner->title }}
                                </h4>
                                <div class="team-social mt-20">
                                    @if($partner->facebook_link)
                                        <a href="{{ $partner->facebook_link }}"><i class="fab fa-facebook-f"></i></a>
                                    @endif
                                    @if($partner->instagram_link)
                                        <a class="bg-danger" href="{{ $partner->instagram_link }}"><i
                                                class="fab fa-instagram"></i></a>
                                    @endif
                                    @if($partner->linkedin_link)
                                        <a href="{{ $partner->linkedin_link }}"><i class="fab fa-linkedin"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{--<x-blogs/>--}}
@endsection
