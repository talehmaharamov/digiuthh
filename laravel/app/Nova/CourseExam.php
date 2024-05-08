<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Http\Requests\NovaRequest;
use MrMonat\Translatable\Translatable;

class CourseExam extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\CourseExam::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'question';

    public static $group = 'Course';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'question',
        'variant_a',
        'variant_b',
        'variant_c',
        'variant_d',
        'variant_e',
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
            BelongsTo::make('Course', 'course', '\App\Nova\Course'),
            Translatable::make('Question')->rules([
                'required', 'max:1000'
            ]),

            Translatable::make('Variant A')->rules([
                'required', 'max:1000'
            ]),

            Translatable::make('Variant B')->rules([
                'required', 'max:1000'
            ]),

            Translatable::make('Variant C')->rules([
                'required', 'max:1000'
            ]),

            Translatable::make('Variant D')->rules([
                'nullable', 'max:1000'
            ]),

            Translatable::make('Variant E')->rules([
                'nullable', 'max:1000'
            ]),

            Select::make('Correct Variant')->options([
                'a' => 'Variant A',
                'b' => 'Variant B',
                'c' => 'Variant C',
                'd' => 'Variant D',
                'e' => 'Variant E',
            ])->rules([
                'required', 'in:a,b,c,d,e'
            ])
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
