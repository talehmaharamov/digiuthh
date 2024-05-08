@extends('layouts.app')

@section('title', __('header.mentors') . ' -')

@section('content')
    <section class="breadcrumb-area d-flex align-items-center"
             style="background-image:url({{ asset('assets/img/testimonial/test-bg.png') }})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            @if(\Illuminate\Support\Facades\Lang::has('header.mentors'))
                                <h2>{{ __('header.mentors') }}</h2>
                            @else
                                <h2></h2>
                            @endif
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        @if(\Illuminate\Support\Facades\Lang::has('header.home'))
                                            <li class="breadcrumb-item"><a href="/">{{ __('header.home') }}</a></li>
                                        @endif
                                        @if(\Illuminate\Support\Facades\Lang::has('header.mentors'))
                                            <li class="breadcrumb-item active"
                                                aria-current="page">{{ __('header.mentors') }}
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
                @foreach($mentors as $mentor)
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ url('/mentors/' . $mentor->id . '-' . slug($mentor->{'fullname_' . app()->getLocale()})) }}">
                        <div class="single-team text-center mb-30 ">
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img style="height:225px;object-fit:cover"
                                             src="{{ asset('/uploads//' . $mentor->image) }}" alt="img">
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4>
                                        <a href="{{ url('/mentors/' . $mentor->id . '-' . slug($mentor->fullname_en)) }}">
                                            {{ $mentor->{'fullname_' . app()->getLocale()} }}
                                        </a>
                                    </h4>
                                    <span>{{ $mentor->position }}</span>
                                    <div class="team-social mt-20">
                                        @if($mentor->facebook_link)
                                            <a href="{{ $mentor->facebook_link }}">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        @endif
                                        @if($mentor->instagram_link)
                                            <a href="{{ $mentor->instagram_link }}"><i class="fab fa-instagram"></i></a>
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
            </div>
            {{ $mentors->links() }}
        </div>
    </section>
@endsection
