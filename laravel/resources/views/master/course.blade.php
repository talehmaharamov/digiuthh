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
