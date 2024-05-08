<?php

namespace App\Observers;

use App\Models\CourseCategory;
use Illuminate\Support\Facades\DB;

class CategoryObserver
{
    /**
     * Handle the CourseCategory "created" event.
     *
     * @param \App\Models\CourseCategory $courseCategory
     * @return void
     */
    public function created(CourseCategory $courseCategory)
    {
        $id = $courseCategory->id;
        $courseCategoryOriginal = DB::table('course_categories')->where('id', $id)->first();
        $title = json_decode($courseCategoryOriginal->title);
        $title_az = $title->az;
        $title_en = $title->en;

        if (session()->get('locale') == 'az') {
            $title->az == '' || $title->az == null
                ? $title->az = $title_en
                : $title->az = $title_az;
        }

        if (session()->get('locale') == 'en') {
            $title->en == '' || $title->en == null
                ? $title->en = $title_az
                : $title->en = $title_en;
        }

        $courseCategoryOriginal->update(['title' => [
            'az' => $this->title_az,
            'en' => $this->title_en
        ]]);
    }

    /**
     * Handle the CourseCategory "updated" event.
     *
     * @param \App\Models\CourseCategory $courseCategory
     * @return void
     */
    public function updated(CourseCategory $courseCategory)
    {
        $id = $courseCategory->id;
        $courseCategoryOriginal = DB::table('course_categories')->where('id', $id)->first();
        $title = json_decode($courseCategoryOriginal->title);
        $title_az = $title->az;
        $title_en = $title->en;

        if (session()->get('locale') == 'az') {
            $title->az == '' || $title->az == null
                ? $title->az = $title_en
                : $title->az = $title_az;
        }

        if (session()->get('locale') == 'en') {
            $title->en == '' || $title->en == null
                ? $title->en = $title_az
                : $title->en = $title_en;
        }

        $courseCategoryOriginal->update(['title' => [
            'az' => $this->title_az,
            'en' => $this->title_en
        ]]);
    }

    /**
     * Handle the CourseCategory "deleted" event.
     *
     * @param \App\Models\CourseCategory $courseCategory
     * @return void
     */
    public function deleted(CourseCategory $courseCategory)
    {
        //
    }

    /**
     * Handle the CourseCategory "restored" event.
     *
     * @param \App\Models\CourseCategory $courseCategory
     * @return void
     */
    public function restored(CourseCategory $courseCategory)
    {
        //
    }

    /**
     * Handle the CourseCategory "force deleted" event.
     *
     * @param \App\Models\CourseCategory $courseCategory
     * @return void
     */
    public function forceDeleted(CourseCategory $courseCategory)
    {
        //
    }
}
