@extends('layouts.app')

@section('title', $team->{'fullname_' . app()->getLocale()} . ' -')

@section('content')
<section class="breadcrumb-area d-flex align-items-center"
         style="background-image:url({{ asset('assets/img/testimonial/test-bg.png') }})">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="breadcrumb-wrap text-left">
                    <div class="breadcrumb-title">
                        <h2>{{ $team->{'fullname_' . app()->getLocale()} }}</h2>
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    @if(\Illuminate\Support\Facades\Lang::has('header.home'))
                                    <li class="breadcrumb-item"><a href="/">{{ __('header.home') }}</a></li>
                                    @endif
                                    <li class="breadcrumb-item active" aria-current="page">
                                        {{ $team->{'fullname_' . app()->getLocale()} }}
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="instructor" class="instructor-area pt-80 pb-90">
    <div class="container">
        <div class="row intructor-row">
            <div class="col-lg-8 col-md-7 col-sm-12">
                <div class="instructor-info">
                    <h2><b>{{ $team->{'fullname_' . app()->getLocale()} }}</b></h2>
                    <span class="instructor-position">
                            {{ $team->position }}
                        </span>
                </div>
                <div class="instructor-review">
                    <div class="total-students">
                        @if(\Illuminate\Support\Facades\Lang::has('team_page.students'))
                        <p><b>{{ __('team_page.students') }}</b></p>
                        @endif
                        <span>{{ $team->student_count }}</span>
                    </div>
                    <div class="total-review">
                        @if(\Illuminate\Support\Facades\Lang::has('team_page.rating'))
                        <p><b>{{ __('team_page.rating') }}</b></p>
                        @endif
                        <span>{{ $team->rating }}</span>
                    </div>
                </div>
                <div class="instructor-description mt-4">
                    <div class="title">
                        <h4>
                            @if(\Illuminate\Support\Facades\Lang::has('team_page.about_me'))
                            <b>{{ __('team_page.about_me') }}</b>
                            @endif
                        </h4>
                    </div>
                    <p>{!! $team->content !!}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="single-team text-center mb-30 ">
                    <div class="team-thumb">
                        <div class="brd">
                            <img src="{{ asset('uploads/' . $team->image) }}" alt="{{ $team->{'fullname_' . app()->getLocale()} }}">
                        </div>
                    </div>
                    <div class="team-info">
                        @if(\Illuminate\Support\Facades\Lang::has('team_page.social_media'))
                        <span>{{ __('team_page.social_media') }}</span>
                        @endif
                        <div class="team-social">
                            @if($team->facebook_link)
                            <a href="{{ $team->facebook_link }}"><i class="fab fa-facebook-f"></i></a>
                            @endif
                            @if($team->instagram_link)
                            <a href="{{ $team->instagram_link }}"><i class="fab fa-instagram"></i></a>
                            @endif
                            @if($team->linkedin_link)
                            <a href="{{ $team->linkedin_link }}"><i class="fab fa-linkedin"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
