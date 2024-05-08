<?php

namespace App\Nova;

use DanielDeWit\NovaSingleRecordResource\Contracts\SingleRecordResourceInterface;
use DanielDeWit\NovaSingleRecordResource\Traits\SupportSingleRecordNavigationLinks;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Mostafaznv\NovaVideo\Video;
use MrMonat\Translatable\Translatable;

class AboutVideo extends Resource implements SingleRecordResourceInterface
{
    use SupportSingleRecordNavigationLinks;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\AboutVideo::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    public static $group = 'about';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title'
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
            Translatable::make('Title')
                ->singleLine()
                ->rules([
                    'nullable', 'max:500'
                ]),
            Translatable::make('Content')
                ->rules([
                    'nullable', 'max:1000'
                ]),

            Video::make('Video', 'video', 'public')
                ->rules('file', 'max:50000', 'mimes:mp4', 'mimetypes:video/mp4')
                ->creationRules('nullable')
                ->updateRules('nullable'),
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
