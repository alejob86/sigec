@extends('layout')

@section('page-head')

    <h3>
        {{trans('people.edit')}}
    </h3>
    <div class="state-information">
        <i class="fa fa-edit fa-2x"></i>
    </div>

@stop

@section('content')

    {!! Form::model($people, ['method' => 'PATCH', 'action' => ['PeopleController@update', $people->id]]) !!}

        @include ('people.form', ['submitButtonText' => trans('people.edit'), 'class' => 'btn btn-primary form-control'])

    {!! Form::close() !!}

    @include ('errors.list')

@stop