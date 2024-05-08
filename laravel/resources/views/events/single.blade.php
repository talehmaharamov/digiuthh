@extends('layouts.app')

@section('title', $event->title . ' -')

@section('content')
    <section class="breadcrumb-area d-flex align-items-center"
             style="background-image:url({{ asset('assets/img/testimonial/test-bg.png') }})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>{{ $event->title }}</h2>
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        @if(\Illuminate\Support\Facades\Lang::has('header.home'))
                                            <li class="breadcrumb-item"><a asp-controller="Home" href="/"
                                                                           asp-action="Index">{{ __('header.home') }}</a>
                                            </li>
                                        @endif
                                        <li class="breadcrumb-item active" aria-current="page">{{ $event->title }}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="inner-blog b-details-p pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-wrap">
                        <div class="details__content pb-30">
                            <div class="bsingle__post-thumb mb-30">
                                <img src="{{ asset('uploads/' . $event->image) }}" alt="events">
                            </div>
                            <h2>{{ $event->title }}</h2>
                            <div class="meta-info">
                                <ul>
                                    <li><i class="fal fa-calendar-alt"></i> {{ $event->start_date->format('d.M.Y') }}
                                    </li>
                                </ul>
                            </div>
                            <p>{{ $event->content }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <aside class="sidebar-widget">
                        <section class="widget widget_search">
                            <div class="course-widget-price">
                                @if(\Illuminate\Support\Facades\Lang::has('third.event_feature'))
                                    <h2 class="widget-title">{{ __('third.event_feature') }}</h2>
                                @endif
                                <ul>
                                    @if(\Illuminate\Support\Facades\Lang::has('third.start_date'))
                                        <li>
                                            <i class="fal fa-calendar-alt"></i>
                                            <span>{{ __('third.start_date') }}</span>
                                            <span class="time">{{ $event->start_date->format('d.M.Y') }}</span>
                                        </li>
                                    @endif
                                    @if(\Illuminate\Support\Facades\Lang::has('third.time'))
                                        <li>
                                            <i class="fal fa-clock"></i>
                                            <span>{{ __('third.time') }}</span>
                                            <span class="time">{{ $event->start_date->format('H:i') }}</span>
                                        </li>
                                    @endif

                                    @if(\Illuminate\Support\Facades\Lang::has('third.place'))
                                        <li>
                                            <i class="icon fal fa-map-marker-check"></i>
                                            <span>{{ __('third.place') }}</span>

                                            <span class="time">{{ $event->place }}</span>
                                        </li>
                                    @endif
                                    @if(\Illuminate\Support\Facades\Lang::has('third.organizer'))
                                        <li>
                                            <i class="fal fa-plus-hexagon"></i>
                                            <span>{{ __('third.organizer') }}</span>
                                            <span class="time">{{ $event->organizer }}</span>
                                        </li>
                                    @endif

                                    @if(\Illuminate\Support\Facades\Lang::has('third.phone'))
                                        <li>
                                            <i class="icon fal fa-phone"></i>
                                            <span>{{ __('third.phone') }}</span>
                                            <span class="time">{{ $event->phone }}</span>
                                        </li>
                                    @endif

                                    @if(\Illuminate\Support\Facades\Lang::has('third.email'))
                                        <li>
                                            <i class="icon fal fa-envelope"></i>
                                            <span>{{ __('third.email') }}</span>
                                            <span class="time">{{ $event->email }}</span>
                                        </li>
                                    @endif

                                    {{--@if(\Illuminate\Support\Facades\Lang::has('third.website'))
                                        <li>
                                            <i class="fal fa-user"></i>
                                            <span>{{ __('third.website') }}</span>
                                            <span class="time">
                                                <a href="{{ $event->link }}">{{__('third.zoom')}}</a>
                                            </span>
                                        </li>
                                    @endif
                                    --}}
                                </ul>
                                @if($event_user < 1)
                                    <form action="/join-event/{{ $event->id }}" method="POST">
                                        @csrf
                                        @if(\Illuminate\Support\Facades\Lang::has('third.join'))
                                            <button class="btn ss-btn mt-30" href="#">{{ __('third.join') }}</button>
                                        @endif
                                    </form>
                                @else
                                    <form action="#">
                                        <button class="btn ss-btn mt-30" href="#"
                                                disabled>{{__('third.already_joined')}}</button>
                                    </form>
                                @endif
                            </div>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
