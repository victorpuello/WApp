<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;

class Employee extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var  string
     */
    public static $model = \App\Models\Employee::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var  string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var  array
     */
    public static $search = [
        'id'
    ];

    /**
     * Get the displayable label of the resource.
     *
     * @return  string
     */
    public static function label()
    {
        return __('Employees');
    }

    /**
    * Get the displayable singular label of the resource.
    *
    * @return  string
    */
    public static function singularLabel()
    {
        return __('Employee');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  array
     */
    public function fields(Request $request)
    {
        return [
            ID::make( __('Id'),  'id')
                ->rules('required')
                ->sortable(),
            Text::make( __('Tipo ID'),  'typeid')
                ->rules('required')
                ->sortable(),
            Number::make( __('Número ID'),  'identity')
                ->rules('required')
                ->sortable(),
            Text::make( __('Nombre'),  'name')
                ->rules('required')
                ->sortable(),
            Text::make( __('Apellidos'),  'lastname')
                ->rules('required')
                ->sortable(),
            Number::make( __('Telefono'),  'phone')
                ->rules('required')
                ->sortable(),
            Select::make('profile')->options([
                'Profesional'=>'Profesional','Técnico'=>'Tecnico','Tecnólogo'=>'Tecnologo','Bachiller'=>'Bachiller','Auxiliar'=>'Auxiliar','Sin Estudios'=>'Sin Estudios'
            ]),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
