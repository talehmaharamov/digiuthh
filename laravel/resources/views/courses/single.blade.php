@extends('layouts.app')

@section('title', $course->title . ' -')

@section('content')
    <section class="course-inner">
        <div class="container">
            <div class="row">
                <div class="course-container w-100 pt-80 pb-120">
                    <div class="course-box">
                        <div class="course-video">
                            <div class="video-player">
                                <video id="video" data-v-12f6ef31="" controls="controls" controlslist="nodownload"
                                       autoplay
                                       class="block">
                                    <source type="video/mp4"
                                            src="{{ \Storage::disk('bunnycdn')->url($episode->video) }}">
                                </video>
                                {{--
                                <!--<video controls crossorigin playsinline class="js-player" src="{{ \Storage::disk('bunnycdn')->url(collect(collect($course->course_sections)->first()->course_episodes)->first()->video) }}">-->
                                --}}
                                {{--                                <!--<source-->--}}
                                {{--                            <!--    src="{{ }}"-->--}}
                                {{--                                <!--/>-->--}}
                                {{--                                <!--</video>-->--}}
                                <button id="playVideo" style="opacity: 0; position: absolute">play</button>
                            </div>
                            <div class="course-about-tabs closed-about-tabs">
                                <div class="close-about-tabs">
                                    <a href="#">
                                        <i class="fas fa-times"></i>
                                        <i class="fas fa-chevron-down"></i>
                                    </a>
                                </div>
                                <div class="tab-items">
                                    @if(\Illuminate\Support\Facades\Lang::has('third.overview'))
                                        <a href="#" class="tab-item active">
                                            {{ __('third.overview') }}
                                        </a>
                                    @endif
                                    @if(\Illuminate\Support\Facades\Lang::has('third.comment'))
                                        <a href="#" class="tab-item">
                                            {{ __('third.comment') }}
                                        </a>
                                    @endif
                                    @if(\Illuminate\Support\Facades\Lang::has('third.source'))
                                        @if(count($episode->course_files) > 0)
                                            <a href="#" class="tab-item">
                                                {{ __('third.source') }}
                                            </a>
                                        @endif
                                    @endif
                                    <span class="yellow-bar"></span>
                                </div>
                                <div class="tab-contents">
                                    <div class="content-item">
                                        <div class="course-info">
                                            @if(\Illuminate\Support\Facades\Lang::has('third.course_name'))
                                                <div class="course-name">{{ __('third.course_name') }}</div>
                                            @endif
                                            @if(\Illuminate\Support\Facades\Lang::has('third.about_course'))
                                                <div class="course-info-title">{{ $course->about }}</div>
                                            @endif
                                            <div class="general-info">
                                                @if(\Illuminate\Support\Facades\Lang::has('third.general_info'))
                                                    <div class="title">
                                                        {{ __('third.general_info') }}
                                                    </div>
                                                @endif
                                                <div class="info">
                                                    <ul>
                                                        <li>
                                                            @if(\Illuminate\Support\Facades\Lang::has('third.trainer_name'))
                                                                <span>{{ __('third.trainer_name') }}:  </span>
                                                            @endif
                                                            <span>{{ $course->user?->name . ' ' . $course->user?->surname }}</span>
                                                        </li>
                                                        <li>
                                                            @if(\Illuminate\Support\Facades\Lang::has('third.course_duration'))
                                                                <span>{{ __('third.course_duration') }}:  </span>
                                                            @endif
                                                            <span>{{ $course->course_duration }}</span>
                                                        </li>
                                                        <li>
                                                            @if(\Illuminate\Support\Facades\Lang::has('third.course_language'))
                                                                <span>{{ __('third.course_language') }}:  </span>
                                                            @endif
                                                            <span>{{ $course->language }}</span>
                                                        </li>
                                                        <li>
                                                            @if(\Illuminate\Support\Facades\Lang::has('third.lecture_count'))
                                                                <span>{{ __('third.lecture_count') }}:  </span>
                                                            @endif
                                                            <span>{{ $course->lecture_count }}</span>
                                                        </li>
                                                        <li>
                                                            @if(\Illuminate\Support\Facades\Lang::has('third.section_count'))
                                                                <span>{{ __('third.section_count') }}:  </span>
                                                            @endif
                                                            <span>{{ $course->section_count }}</span>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="description-content">
                                                @if(\Illuminate\Support\Facades\Lang::has('third.trainer_name'))

                                                    <div class="title">
                                                        {{ __('third.course_comment_title') }}
                                                    </div>
                                                @endif
                                                {{--
                                                <div class="text" style="white-space: pre-line">
                                                    {{ $course->about }}
                                                </div>
                                                --}}
                                            </div>
                                        </div>
                                        <div class="col-lg-12 user_comments">

                                            <ul class="comment_block">

                                                <!-- new comment -->
                                                @foreach($comments as $item)
                                                    <li class="new_comment">

                                                        <!-- current #{user} avatar -->
                                                        <div class="user_avatar">
                                                            <img src="/assets/img/team/user.png">
                                                        </div>
                                                        <!-- the comment body -->
                                                        <div class="comment_body">
                                                            <p>
                                                                <span>{{($item->user?->name . ' ' . $item->user?->surname) ?? ''}}</span> {{$item->comment}}
                                                            </p>

                                                            <!-- inc. date and time -->
                                                            <div class="comment_details">
                                                                <ul>
                                                                    {{--
                                                                    <li>Rate: <span>4.5</span></li>
                                                                    --}}
                                                                    <li style="color: black;">
                                                                        <i class="fas fa-clock"></i>{{$item->created_at->format('H:i')}}
                                                                    </li>
                                                                    <li style="color: black;">
                                                                        <i class="fa fa-calendar"></i>{{$item->created_at->format('Y:m-d')}}
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="content-item" style="display: none;">
                                        <div class="course-comment">
                                            <!--   <form method="post" class="comment-form"> -->
                                            <div class="row">
                                                <form action="" method="post" id="#star">
                                                    <div class="col-lg-12 user-rate">
                                                        <p>{{ __('third.your_rate') }}</p>
                                                        <div class="rating-group">
                                                            <div class="rate-number"></div>
                                                            <fieldset class="rate rateClass">
                                                                <input type="radio" id="rating10" name="rating"
                                                                       value="10"/><label for="rating10"
                                                                                          title="5"></label>
                                                                <input type="radio" id="rating9" name="rating"
                                                                       value="9"/><label class="half" for="rating9"
                                                                                         title="4.5"></label>
                                                                <input type="radio" id="rating8" name="rating"
                                                                       value="8"/><label for="rating8"
                                                                                         title="4"></label>
                                                                <input type="radio" id="rating7" name="rating"
                                                                       value="7"/><label class="half" for="rating7"
                                                                                         title="3.5"></label>
                                                                <input type="radio" id="rating6" name="rating"
                                                                       value="6"/><label for="rating6"
                                                                                         title="3"></label>
                                                                <input type="radio" id="rating5" name="rating"
                                                                       value="5"/><label class="half" for="rating5"
                                                                                         title="2.5"></label>
                                                                <input type="radio" id="rating4" name="rating"
                                                                       value="4"/><label for="rating4"
                                                                                         title="2"></label>
                                                                <input type="radio" id="rating3" name="rating"
                                                                       value="3"/><label class="half" for="rating3"
                                                                                         title="1.5"></label>
                                                                <input type="radio" id="rating2" name="rating"
                                                                       value="2"/><label for="rating2"
                                                                                         title="1"></label>
                                                                <input type="radio" id="rating1" name="rating"
                                                                       value="1"/><label class="half" for="rating1"
                                                                                         title="0.5"></label>
                                                            </fieldset>

                                                        </div>
                                                    </div>
                                                </form>

                                                <div class="col-lg-12">
                                                    <form
                                                        action="{{route('post-comment')}}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="contact-field p-relative c-message mb-45">
                                                            <textarea class="message" id="message" cols="30" rows="10"
                                                                      placeholder="Write comments" data-val="true"
                                                                      data-val-required="The Message field is required."
                                                                      name="comment"></textarea>
                                                            <span class="text-danger field-validation-valid"
                                                                  data-valmsg-for="Message"
                                                                  data-valmsg-replace="true"></span>
                                                        </div>

                                                        <input type="hidden" name="course_id" value="{{$course->id}}">
                                                        @if(auth()->id())
                                                            <input type="hidden" name="user_id"
                                                                   value="{{auth()->id()}}">
                                                        @endif

                                                        <div class="slider-btn">
                                                            @if(auth()->id())
                                                                @if(\Illuminate\Support\Facades\Lang::has('third.do-comment'))
                                                                    <button type="submit" class="btn ss-btn"
                                                                            data-animation="fadeInRight"
                                                                            data-delay=".8s">
                                                                        {{ __('third.do-comment') }}
                                                                    </button>
                                                                @endif
                                                            @else
                                                                <button type="submit" class="btn ss-btn"
                                                                        data-animation="fadeInRight" data-delay=".8s">
                                                                    {{ __('third.submit') }}
                                                                </button>
                                                            @endif
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <input name="__RequestVerificationToken" type="hidden"
                                                   value="CfDJ8GhWms7VDTpGiNpNbZ3FeGI6vn1tRnYLG0COZU8evbGIP70fM5fsUHIS_3xk7CSJl6JbS1Xnd3yOf3l3naJyKAovDh0ZufasBVyf4RrarD8bxLUmnYwXAi5Oo1NP-ttg2V2F_fnxX27Y-VLS4TvvbDXSJ6QOCBuhoB-r3fgBZVzkM7--PDmRyL9ExlekPN-hgw"/>
                                            <!-- </form> -->
                                        </div>
                                    </div>
                                    @if(count($episode->course_files) > 0)
                                        <div class="content-item" style="display: none;">
                                            @foreach($episode->course_files as $file)
                                                <a href="{{ asset('uploads/' . $file->file) }}" target="_blank"
                                                   class="source-icon">
                                                    <i class="fas fa-file-download"></i>
                                                    <span>{{ $file->title }}</span>
                                                </a>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="course-content">
                            @if(\Illuminate\Support\Facades\Lang::has('third.course_content'))
                                <div class="title">{{ __('third.course_content') }}</div>
                            @endif
                            <div class="accordion-box">
                                @foreach($course->course_sections as $key => $sections)
                                    <div class="accordion-item active-accordion">
                                        <label for="panel-1" class="accordion-label">
                                            @if($key == 0)
                                                Preview
                                            @else
                                                Section
                                            @endif
                                            <span class="section-number"></span>
                                            <span class="section-name">
                                                {{ $sections->title }}
                                            </span>
                                        </label>
                                        <div class="accordion-panel">
                                            @foreach($sections->course_episodes as $episodes)
                                                <div class="section-item active-section-item">
                                                    <a href="{{ '/courses/' . $course->id . '-' . slug($course->title) . '?section=' . $sections->id . '&episode=' . $episodes->id }}">
                                                        <span class="order-number"></span> {{ $episodes->title }}
                                                    </a>
                                                </div>
                                                {{-- @if(!auth()->id())--}}
                                                {{-- @break--}}
                                                {{-- @endif--}}
                                            @endforeach
                                        </div>
                                    </div>
                                    {{-- @if(!auth()->id())--}}
                                    {{-- @break--}}
                                    {{-- @endif--}}
                                @endforeach


                                @if($exam)
                                    @if(\Illuminate\Support\Facades\Lang::has('third.exam'))
                                        @if(count($course->course_exams) !== 0)
                                            <div class="accordion-item active-accordion">

                                                <label for="panel-1" class="accordion-label">
                                                    {{ __('third.exam') }}
                                                    <span class="section-number"></span>
                                                    <span class="section-name">{{ __('third.exam') }}</span>
                                                </label>

                                                <div class="accordion-panel">

                                                    <div class="section-item active-section-item">
                                                        <a href="{{ url('/courses/' . $course->id . '-' . Str::slug($course->title) . '/exam') }}">
                                                            <span class="order-number"></span> Exam
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')

    @if(session()->has('error'))
        <script>
            Swal.fire('{{ __("Something went wrong") }}', '{{ session()->get("error") }}', 'error')
        </script>
    @endif

    <script>

        $('#playVideo').on('click', function () {
            $('#video')[0].autoPlay = true;
            $('#video')[0].load();
        })

        $(function () {

            $('.rateClass label').on('click', function () {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                let courseId = `<?php echo $course->id ?>`;

                let ratingNum = $(this).attr('title');

                let authId = `{{auth()->id()}}`;

                $.ajax({
                    type: 'POST',
                    url: '/course/' + courseId + '/rate/' + ratingNum + '/' + authId,
                    success: function (response) {
                        $(".rateClass input").each(function () {

                        });
                    }
                });
            });
            $('#playVideo').click();
        });
    </script>
@endsection
