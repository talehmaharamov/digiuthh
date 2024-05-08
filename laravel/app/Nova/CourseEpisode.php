<?php

namespace App\Nova;

use Ajhaupt7\ImageUploadPreview\ImageUploadPreview;
use DigitalCreative\Filepond\Filepond;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Mostafaznv\NovaVideo\Video;
use MrMonat\Translatable\Translatable;
use Whchi\NovaTagsInput\Tags;

class CourseEpisode extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\CourseEpisode::class;

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
            BelongsTo::make('Course Section', 'course_section', '\App\Nova\CourseSection'),
            Translatable::make('Title')
                ->singleLine()
                ->rules([
                    'required', 'max:500'
                ]),
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

            Filepond::make('Video')
                ->hideFromIndex()
                ->hideFromDetail()
//                ->mimesTypes([ 'video/mp4' ]) // if opmited, accepts anything
                ->disk('bunnycdn'),

            Video::make('Video', 'video', 'bunnycdn')
                ->hideWhenCreating()
                ->hideWhenUpdating()
                ->rules('file', 'max:512000')
                ->creationRules('required')
                ->updateRules('nullable'),

            HasMany::make('Course Files', 'course_files', '\App\Nova\CourseFile')
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
