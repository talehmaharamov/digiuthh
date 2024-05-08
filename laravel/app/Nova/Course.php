<?php

namespace App\Nova;

use Ajhaupt7\ImageUploadPreview\ImageUploadPreview;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use MrMonat\Translatable\Translatable;
use Whchi\NovaTagsInput\Tags;

class Course extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Course::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    public static $group = 'Course';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title', 'content'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Image::make('Image')
                ->hideWhenCreating()
                ->deletable(false)
//                ->hideWhenUpdating()
                ->updateRules([
                    'image', 'nullable', 'max:10240'
                ]),
            BelongsTo::make('Author', 'user', '\App\Nova\User'),
//                ->hideWhenCreating()
//                ->hideWhenUpdating(),
            BelongsTo::make('Course Category', 'course_category', '\App\Nova\CourseCategory'),
            Translatable::make('Title')
                ->singleLine()
                ->rules([
                    'required', 'max:500'
                ]) ,
                
            Translatable::make('About course', 'about'),
            Text::make('Language')
                ->rules([
                    'max:255'
                ]),
            Text::make('Duration', 'course_duration')
                ->rules([
                   'max:255'
                ]),
            Number::make('Section count', 'section_count')->min(0)->step(1),
            Number::make('Lecture count', 'lecture_count')->min(0)->step(1),
            ImageUploadPreview::make('Image')
                ->hideFromDetail()
                ->hideFromIndex()
                ->hideWhenUpdating()
                ->deletable(false)
                ->nullable()
                ->rules([
                    'image', 'max:10240'
                ])
                ->creationRules([
                    'required'
                ]),
            Tags::make('Tags')->hideFromIndex(),
            Number::make('Rating')->min(0)->max(5)->step(0.01)->hideWhenUpdating()->hideWhenCreating(),
            Translatable::make('Content')
                ->hideFromIndex()
                ->hideFromDetail()
                ->trix()
                ->rules([
                    'required', 'max:2000'
                ]),
            Trix::make('Content')
                ->hideWhenUpdating()
                ->hideWhenCreating(),
            HasMany::make('Course Sections', 'course_sections', '\App\Nova\CourseSection'),
            HasMany::make('Course Comments', 'course_comments', '\App\Nova\CourseComment'),
            HasMany::make('Course Reviews', 'course_reviews', '\App\Nova\CourseReview'),
            HasMany::make('Course Users', 'course_users', '\App\Nova\CourseUser'),
            HasMany::make('Course Exams', 'course_exams', '\App\Nova\CourseExam'),
            HasMany::make('User Exams', 'user_exams', '\App\Nova\UserExam')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
