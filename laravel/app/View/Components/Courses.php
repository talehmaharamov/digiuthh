<?php

namespace App\View\Components;

use App\Models\Course;
use Illuminate\View\Component;

class Courses extends Component
{
    public $courses;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->courses = Course::orderBy('id', 'desc')->with(['user', 'course_category', 'course_reviews', 'course_comments', 'course_sections.course_episodes'])->withCount('course_reviews')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.courses');
    }
}
