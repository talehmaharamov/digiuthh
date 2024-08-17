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

    <section id="courses" class="courses eventes-area fix pt-70 pb-100"
             style=" background-image: url(../../assets/img/bg/event-bg-aliments.png); background-repeat: no-repeat; background-position: center;">
        <div class="container">
            <div class="navbar">
                <ul>
                    @if(\Illuminate\Support\Facades\Lang::has('third.all'))
                        <li class="all_tab_items active">
                            {{ __('third.all') }}
                        </li>
                    @endif
                    @foreach(\App\Models\MentorCategory::whereHas('mentor')->get() as $c)
                        <li class="tab_item @if(isset($category) && $c->id == $category->id) active @endif"
                            data-id="{{ $c->id }}">{{ $c->title }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="tab_body first">
                <div class="row pt-50">
                    @foreach($mentors as $mentor)
                        <div class="col-lg-3 col-md-6">
                            <a href="{{ url('/mentors/' . $mentor->id . '-' . slug($mentor->{'fullname_' . app()->getLocale()})) }}">
                                <div class="single-team text-center mb-30 ">
                                    <div class="team-thumb">
                                        <div class="brd">
                                            <img style="height:225px;object-fit:cover"
                                                 src="{{ asset('laravel/public/uploads/' . $mentor->image) }}" alt="img">
                                        </div>
                                    </div>
                                    <div class="team-info">
                                        <h4>
                                            <a href="{{ url('/mentors/' . $mentor->id . '-' . slug($mentor->fullname_en)) }}">
                                                {{ $mentor->{'fullname_' . app()->getLocale()} }}
                                            </a>
                                        </h4>
{{--                                        <span>{{ __('third.'.$mentor->position) }}</span>--}}
                                        <span>
                                        {{ $mentor->{'speciality_' . app()->getLocale()} }}
                                    </span>

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
            <div class="tab_body second"></div>
            {{ $mentors->links() }}
        </div>
    </section>
@endsection
@section('js')
    <script>
        $('.tab_item').on('click', function () {
            let tab_items = $('.tab_item.active');
            let ids = [];

            tab_items.each((index, tab_item) => {
                ids.push($(tab_item).data('id'))
            })

            $('.tab_body').removeClass('d-none');
            $('.tab_body.first').addClass('d-none');

            if (ids.length > 0) {
                $.post('/ajax/mentors', {
                    ids: ids,
                    _token: '{{ csrf_token() }}',
                })
                    .done(res => {
                        $('.tab_body.second').html(res);
                    })
            } else {
                $('.all_tab_items').addClass('active');
                $('.tab_body').addClass('d-none');
                $('.tab_body.first').removeClass('d-none');
            }
        })

        $('.all_tab_items').on('click', function () {
            $('.tab_body').addClass('d-none');
            $('.tab_body.first').removeClass('d-none');
        })
    </script>
@endsection
