@extends('layouts.app')

@section('title', __('header.trainers') . ' -')

@section('content')
    <section class="breadcrumb-area d-flex align-items-center"
             style="background-image:url({{ asset('assets/img/testimonial/test-bg.png') }})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            @if(\Illuminate\Support\Facades\Lang::has('header.trainers'))
                                <h2>{{ __('header.trainers') }}</h2>
                            @else
                                <h2></h2>
                            @endif
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
                                        @if(\Illuminate\Support\Facades\Lang::has('header.trainers'))
                                            <li class="breadcrumb-item active" aria-current="page">
                                                {{ __('header.trainers') }}
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
    <section id="team" class="team-area pt-120 pb-90" style="background: #FBFBFB;">
        <div class="container">
            <div class="row">
                @foreach($trainers as $team)
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ url('/trainers/' . $team->id . '-' . slug($team->{'fullname_' . app()->getLocale()})) }}">
                            <div class="single-team text-center mb-30 ">
                                <div class="team-thumb">
                                    <div class="brd">
                                        @if($team->image != null)
                                            <img style="height:225px;object-fit:cover"
                                                 src="{{ asset('laravel/public/uploads/' . $team->image) ?? '' }}" alt="{{ $team->{'fullname_' . app()->getLocale()} }}">
                                        @else
                                            <img style="height:225px;object-fit:cover"
                                                 src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" alt="{{ $team->{'fullname_' . app()->getLocale()} }}">
                                        @endif

                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4>
                                        <a href="{{ url('/trainers/' . $team->id . '-' . slug($team->{'fullname_' . app()->getLocale()})) }}">
                                            {{ ($team->{'fullname_' . app()->getLocale()}) }}
                                        </a>
                                    </h4>
                                    <span>
                                        {{ __('third.'.$team->position) }}
                                    </span>
                                    <div class="team-social mt-20">
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
                        </a>
                    </div>
                @endforeach
            </div>
            {{ $trainers->links() }}
        </div>
    </section>
@endsection
