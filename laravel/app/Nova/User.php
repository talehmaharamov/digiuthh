<?php

namespace App\Nova;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Testing\Fluent\Concerns\Has;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Number;
use Ajhaupt7\ImageUploadPreview\ImageUploadPreview;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Http\Requests\NovaRequest;

class User extends Resource
{
    public static $model = \App\Models\User::class;

    public static $title = 'name surname';

    public static $group = 'User';

    public static $search = [
        'id', 'fullname', 'email',
    ];

    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Image::make('Image')
                ->hideWhenCreating()
                ->deletable(false)
//                ->hideWhenUpdating()
                ->updateRules([
                    'image', 'nullable', 'max:10240'
                ]),

            ImageUploadPreview::make('Image')
//                ->hideFromDetail()
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

            Select::make('Status')->options([
                'admin' => 'Admin',
                'teacher' => 'Teacher',
                'student' => 'Student',
                'mentor' => 'Mentor',
            ]),

            Select::make('Mentor Category','mentor_category_id')
                ->options(function () {
                    return \App\Models\MentorCategory::all()->pluck('title', 'id');
                })
                ->onlyOnForms()
                ->hideWhenCreating()
                ->hideFromIndex()
                ->displayUsing(function ($value, $resource) {
                    return $resource->status === 'mentor' ? $value : null;
                })
                ->rules(function ($request) {
                    return $request->status === 'mentor' ? 'required' : '';
                }),

            Text::make('Fullname_az')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Fullname_en')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Speciality_az')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Speciality_en')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Email')
                ->sortable()
                ->rules('required', 'email', 'max:254')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}'),

            File::make('CV', 'cv'),

            Number::make('Rating')->step(0.1)->min(0)->max(5)->hideWhenUpdating()
                ->hideWhenCreating(),
            Number::make('Student Count', 'student_count')->min(0)->step(1)->hideWhenUpdating()
                ->hideWhenCreating(),

            Password::make('Password')
                ->onlyOnForms()
                ->creationRules('required', 'string', 'min:8')
                ->updateRules('nullable', 'string', 'min:8'),

            Text::make('Phone'),
            Text::make('Username'),
            Text::make('Position'),
            Text::make('Instagram Link'),
            Text::make('Linkedin Link'),
            Text::make('Facebook Link'),

            Textarea::make('Biography (AZ)', 'bio_az'),
            Textarea::make('Biography (EN)', 'bio_en'),


            Boolean::make('Active', 'is_active'),

            HasMany::make('Courses', 'courses', '\App\Nova\Course'),
            HasMany::make('Course Comments', 'course_comments', '\App\Nova\CourseComment'),
            HasMany::make('User Exams', 'user_exams', '\App\Nova\UserExam'),
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
