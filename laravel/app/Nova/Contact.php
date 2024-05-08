<?php

namespace App\Nova;

use DanielDeWit\NovaSingleRecordResource\Contracts\SingleRecordResourceInterface;
use DanielDeWit\NovaSingleRecordResource\Traits\SupportSingleRecordNavigationLinks;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Http\Requests\NovaRequest;
use MrMonat\Translatable\Translatable;

class Contact extends Resource implements SingleRecordResourceInterface
{
    use SupportSingleRecordNavigationLinks;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Contact::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    public static $group = 'contact';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'phone_number', 'address'
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
            Text::make('Phone number')
                ->rules([
                    'nullable', 'max:255'
                ]),
            Text::make('Email address')
                ->rules([
                    'nullable', 'max:255'
                ]),
            Translatable::make('Address')
                ->rules([
                    'nullable', 'max:500'
                ]),
            Text::make('Facebook link')
                ->rules([
                    'nullable', 'max:255'
                ]),
            Text::make('Instagram link')
                ->rules([
                    'nullable', 'max:255'
                ]),
            Text::make('Linkedin link')
                ->rules([
                    'nullable', 'max:255'
                ]),
            Text::make('Map url', 'map_url'),
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
