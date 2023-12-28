<?php

namespace App\Nova;

use App\Helpers\ExperienceHelper;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Http\Requests\NovaRequest;

class Highscores extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Highscores>
     */
    public static $model = \App\Models\Highscores::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        $fields = [
            ID::make()->sortable(),
            BelongsTo::make('User', 'user', 'App\Nova\User')->searchable(),
            Select::make('Game Mode', 'game_mode')
                ->options([
                    'Regular' => 'Regular',
                    'Ironman' => 'Ironman',
                    'Hardcore Ironman' => 'Hardcore Ironman',
                    'Ultimate Ironman' => 'Ultimate Ironman',
                ])
                ->displayUsingLabels(),
        ];


        foreach (ExperienceHelper::$SKILLS as $skill) {
            $fields[] = Number::make(ucfirst($skill) . ' XP', $skill . '_xp')->sortable();
        }

        return $fields;

    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
