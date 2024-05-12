<?php

namespace App\Nova;

use Ajhaupt7\ImageUploadPreview\ImageUploadPreview;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Http\Requests\NovaRequest;
use MrMonat\Translatable\Translatable;

class Trainer extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Trainer::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'fullname';

    public static $group = 'other';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'fullname', 'position'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
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
            Translatable::make('Fullname')
                ->singleLine()
                ->rules([
                    'required', 'max:500'
                ]),
            Translatable::make('Position')
                ->singleLine()
                ->rules([
                    'required', 'max:500'
                ]),
            Translatable::make('Content')
                ->trix()
                ->hideFromIndex()
                ->hideFromDetail()
                ->rules([
                    'required', 'max:2000'
                ]),
            Trix::make('Content')
                ->hideWhenUpdating()
                ->hideWhenCreating(),
            Number::make('Rating')->step(0.1)->min(0)->max(5),
            Number::make('Student Count', 'student_count')->min(0)->step(1),
            Text::make('Linkedin link'),
            Text::make('Facebook link'),
            Text::make('Instagram link'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
