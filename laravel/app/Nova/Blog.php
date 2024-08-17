<?php

namespace App\Nova;

use Ajhaupt7\ImageUploadPreview\ImageUploadPreview;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Hidden;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use MrMonat\Translatable\Translatable;
use Whchi\NovaTagsInput\Tags;
use Manogi\Tiptap\Tiptap;

class Blog extends Resource
{
    public static $model = \App\Models\Blog::class;

    public static $title = 'title';

    public static $group = 'Blog';

    public static $search = [
        'id', 'title', 'content'
    ];

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
            BelongsTo::make('Author', 'user', '\App\Nova\User')
                ->hideWhenCreating()
                ->hideWhenUpdating(),
            BelongsTo::make('Blog Category', 'blog_category', '\App\Nova\BlogCategory'),
            Translatable::make('Title')
                ->singleLine()
                ->rules([
                    'required', 'max:500'
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
            Tags::make('Tags')->hideFromIndex(),
            Tiptap::make('Content AZ', 'content_az')
                ->hideFromIndex()
                ->hideFromDetail()
                ->buttons([
                    'heading',
                    '|',
                    'italic',
                    'bold',
                    '|',
                    'link',
                    'code',
                    'strike',
                    'underline',
                    'highlight',
                    '|',
                    'bulletList',
                    'orderedList',
                    'br',
                    'codeBlock',
                    'blockquote',
                    '|',
                    'horizontalRule',
                    'hardBreak',
                    '|',
                    'table',
                    '|',
                    'image',
                    '|',
                    'textAlign',
                    '|',
                    'rtl',
                    '|',
                    'history',
                    '|',
                    'editHtml',
                ])
                ->headingLevels([2, 3, 4])
                ->linkSettings([
                    'withFileUpload' => false,
                ]),
            Tiptap::make('Content EN', 'content')
                ->hideFromIndex()
                ->hideFromDetail()
                ->buttons([
                    'heading',
                    '|',
                    'italic',
                    'bold',
                    '|',
                    'link',
                    'code',
                    'strike',
                    'underline',
                    'highlight',
                    '|',
                    'bulletList',
                    'orderedList',
                    'br',
                    'codeBlock',
                    'blockquote',
                    '|',
                    'horizontalRule',
                    'hardBreak',
                    '|',
                    'table',
                    '|',
                    'image',
                    '|',
                    'textAlign',
                    '|',
                    'rtl',
                    '|',
                    'history',
                    '|',
                    'editHtml',
                ])
                ->headingLevels([2, 3, 4])
                ->linkSettings([
                    'withFileUpload' => false,
                ]),
            Trix::make('Content')
                ->hideWhenUpdating()
                ->hideWhenCreating(),
            Hidden::make('user_id')->default(auth()->user()->id)
        ];
    }

    public function cards(Request $request)
    {
        return [];
    }

    public function filters(Request $request)
    {
        return [];
    }

    public function lenses(Request $request)
    {
        return [];
    }

    public function actions(Request $request)
    {
        return [];
    }
}
