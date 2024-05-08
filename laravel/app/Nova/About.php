<?php

namespace App\Nova;

use Ajhaupt7\ImageUploadPreview\ImageUploadPreview;
use DanielDeWit\NovaSingleRecordResource\Contracts\SingleRecordResourceInterface;
use DanielDeWit\NovaSingleRecordResource\Traits\SupportSingleRecordNavigationLinks;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use MrMonat\Translatable\Translatable;

class About extends Resource implements SingleRecordResourceInterface
{
    use SupportSingleRecordNavigationLinks;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\About::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    public static $group = 'about';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name', 'title', 'content'
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
                    'nullable'
                ]),
            Translatable::make('Name')
                ->singleLine()
                ->rules([
                    'nullable', 'max:500'
                ]),
            Translatable::make('Title')
                ->singleLine()
                ->rules([
                    'nullable', 'max:500'
                ]),
            Translatable::make('Guarantee')
                ->singleLine()
                ->rules([
                    'nullable', 'max:500'
                ]),
            Translatable::make('Content')
                ->trix()
                ->hideFromDetail()
                ->rules([
                    'nullable', 'max:1000'
                ]),
            Trix::make('Content')
                ->hideWhenCreating()
                ->hideWhenUpdating()
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

    public static function singleRecord(): bool
    {
        return true;
    }

    public static function singleRecordId()
    {
        return 1;
    }
}
