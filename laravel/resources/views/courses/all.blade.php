@extends('layouts.app')

@section('title', __('header.courses') . ' -')

@section('content')
    <section class="breadcrumb-area d-flex align-items-center"
             style="background-image:url({{ asset('assets/img/testimonial/test-bg.png') }})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            @if(isset($my))
                                <h2> {{ __('header.my_courses') }} </h2>
                            @else
                                <h2> {{ __('header.courses') }} </h2>
                            @endif
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        @if(\Illuminate\Support\Facades\Lang::has('header.home'))
                                            <li class="breadcrumb-item"><a href="/">{{ __('header.home') }}</a></li>
                                        @endif
                                        @if(isset($my))
                                            @if(\Illuminate\Support\Facades\Lang::has('header.my_courses'))
                                                <li class="breadcrumb-item active"
                                                    aria-current="page">{{ __('header.my_courses') }}</li>
                                            @endif
                                        @else
                                            @if(\Illuminate\Support\Facades\Lang::has('header.courses'))
                                                <li class="breadcrumb-item active"
                                                    aria-current="page">{{ __('header.courses') }}</li>
                                            @endif
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
                        <li class="all_tab_items active">{{ __('third.all') }}</li>
                    @endif
                    @foreach(\App\Models\CourseCategory::all() as $c)
                        <li class="tab_item @if(isset($category) && $c->id == $category->id) active @endif"
                            data-id="{{ $c->id }}">{{ $c->title }}</li>
                    @endforeach
                </ul>
            </div>
            <!--<form action="" method="GET">-->
            <!--    <div class="search-bar">-->
            <!--        <input name="search" type="text">-->
            <!--        <button>{{ __('header.search') }}</button>-->
            <!--    </div>-->
            <!--</form>-->
            <div class="tab_body first">
                <div class="row pt-50">
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
                                                {{--                                            <div class="rating-group">--}}
                                                {{--                                                <div class="rate-number"></div>--}}
                                                {{--                                                    <fieldset class="rate">--}}
                                                {{--                                                        <input class="rateInput" type="radio"--}}
                                                {{--                                                               @if($course->rating === 5) checked--}}
                                                {{--                                                               @endif id="rating10{{ $course->id }}" name="rating"--}}
                                                {{--                                                               value="10"/><label for="rating10{{ $course->id }}"--}}
                                                {{--                                                                                  title="5"></label>--}}
                                                {{--                                                        <input class="rateInput" type="radio"--}}
                                                {{--                                                               @if($course->rating > 4) checked--}}
                                                {{--                                                               @endif id="rating9{{ $course->id }}" name="rating"--}}
                                                {{--                                                               value="9"/><label class="half"--}}
                                                {{--                                                                                 for="rating9{{ $course->id }}"--}}
                                                {{--                                                                                 title="4.5"></label>--}}
                                                {{--                                                        <input class="rateInput" type="radio"--}}
                                                {{--                                                               @if($course->rating >= 4) checked--}}
                                                {{--                                                               @endif id="rating8{{ $course->id }}" name="rating"--}}
                                                {{--                                                               value="8"/><label for="rating8{{ $course->id }}"--}}
                                                {{--                                                                                 title="4"></label>--}}
                                                {{--                                                        <input class="rateInput" type="radio"--}}
                                                {{--                                                               @if($course->rating > 3) checked--}}
                                                {{--                                                               @endif id="rating7{{ $course->id }}" name="rating"--}}
                                                {{--                                                               value="7"/><label class="half"--}}
                                                {{--                                                                                 for="rating7{{ $course->id }}"--}}
                                                {{--                                                                                 title="3.5"></label>--}}
                                                {{--                                                        <input class="rateInput" type="radio"--}}
                                                {{--                                                               @if($course->rating >= 3) checked--}}
                                                {{--                                                               @endif id="rating6{{ $course->id }}" name="rating"--}}
                                                {{--                                                               value="6"/><label for="rating6{{ $course->id }}"--}}
                                                {{--                                                                                 title="3"></label>--}}
                                                {{--                                                        <input class="rateInput" type="radio"--}}
                                                {{--                                                               @if($course->rating > 2) checked--}}
                                                {{--                                                               @endif id="rating5{{ $course->id }}" name="rating"--}}
                                                {{--                                                               value="5"/><label class="half"--}}
                                                {{--                                                                                 for="rating5{{ $course->id }}"--}}
                                                {{--                                                                                 title="2.5"></label>--}}
                                                {{--                                                        <input class="rateInput" type="radio"--}}
                                                {{--                                                               @if($course->rating >= 2) checked--}}
                                                {{--                                                               @endif id="rating4{{ $course->id }}" name="rating"--}}
                                                {{--                                                               value="4"/><label for="rating4{{ $course->id }}"--}}
                                                {{--                                                                                 title="2"></label>--}}
                                                {{--                                                        <input class="rateInput" type="radio"--}}
                                                {{--                                                               @if($course->rating > 0) checked--}}
                                                {{--                                                               @endif id="rating3{{ $course->id }}" name="rating"--}}
                                                {{--                                                               value="2"/><label for="rating3{{ $course->id }}"--}}
                                                {{--                                                                                 title="1"></label>--}}
                                                {{--                                                        <input class="rateInput" type="radio"--}}
                                                {{--                                                               @if($course->rating > 0.5) checked--}}
                                                {{--                                                               @endif id="rating2{{ $course->id }}" name="rating"--}}
                                                {{--                                                               value="1"/><label class="half"--}}
                                                {{--                                                                                 for="rating2{{ $course->id }}"--}}
                                                {{--                                                                                 title="0.5"></label>--}}
                                                {{--                                                    </fieldset>--}}
                                                {{--                                                <div class="rated-users">--}}
                                                {{--                                                    (<span>{{ $course->course_reviews_count }}</span>)--}}
                                                {{--                                                </div>--}}
                                                {{--                                            </div>--}}
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
            <div class="tab_body second"></div>
            {{ $courses->links() }}
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
                $.post('/ajax/courses', {
                    ids: ids,
                    _token: '{{ csrf_token() }}',
                    my: @isset($my) true @else false @endif
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
