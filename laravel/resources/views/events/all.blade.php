@extends('layouts.app')

@section('title', __('header.events') . ' -')

@section('content')

<section class="breadcrumb-area d-flex align-items-center"
         style="background-image:url({{ asset('assets/img/testimonial/test-bg.png') }})">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="breadcrumb-wrap text-left">
                    <div class="breadcrumb-title">
                        @if(\Illuminate\Support\Facades\Lang::has('header.events'))
                        <h2> {{ __('header.events') }} </h2>
                        @else
                        <h2></h2>
                        @endif
                        <div class="breadcrumb-wrap">

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    @if(\Illuminate\Support\Facades\Lang::has('header.home'))
                                    <li class="breadcrumb-item"><a href="/">{{ __('header.home') }}</a></li>
                                    @endif
                                    @if(\Illuminate\Support\Facades\Lang::has('header.events'))
                                    <li class="breadcrumb-item active"
                                        aria-current="page">{{ __('header.events') }}
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
<section id="events" class="eventes-area fix pt-120 pb-120"
         style=" background-image: url({{ asset('assets/img/bg/event-bg-aliments.png') }}); background-repeat: no-repeat; background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-align text-center mb-70">
                    @if(\Illuminate\Support\Facades\Lang::has('third.our_events'))
                    <h5>{{ __('third.our_events') }}</h5>
                    @endif
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
                                <li><i class="fal fa-clock"></i> {{ $event->start_date->format('H:i') }}</li>
                                <li><i class="icon fal fa-map-marker-check"></i> {{ $event->place }}</li>
                            </ul>
                            <p>{{ $event->content }}</p>
                            <div class="mt-3 col-lg-12 col-md-12 d-flex justify-content-center">
                                <a class="btn btn-show-more btn-success" style="padding: 14px 36px;font-size: 15px;" href="{{url('events/' . $event->id . '-' . slug($event->title)) }}">{{__('header.moree')}}</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            @empty

            <div class="col-lg-12">
                @if(\Illuminate\Support\Facades\Lang::has('The expected event was not found'))
                <p style="text-align:center;">{{ __('The expected event was not found') }}</p>
                @else
                <p style="text-align:center;"></p>
                @endif
            </div>
            @endforelse
        </div>
        {{ $events->links() }}
    </div>
</section>
@endsection
