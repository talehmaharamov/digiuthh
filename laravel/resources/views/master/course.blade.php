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
                                    {{ $course->user->fullname }}
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
                                <div class="start-course">
                                    @if(\Illuminate\Support\Facades\Lang::has('course.course_start'))
                                        {{ __('course.course_start') }}
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                </a>
            </div>
        @endif
    @endforeach
</div>