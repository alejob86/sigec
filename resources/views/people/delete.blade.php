@extends('layout')

@section('page-head')

    <h3>
        {{trans('people.delete')}}
    </h3>
    <span class="sub-title">{{trans('people.delete_message')}}</span>
    <div class="state-information">
        <i class="fa fa-trash-o fa-2x"></i>
    </div>

@stop

@section('content')

    {!! Form::model($people, ['method' => 'DELETE', 'action' => ['PeopleController@destroy', $people->id]]) !!}

        @include ('people.form', ['submitButtonText' => trans('people.delete'), 'class' => 'btn btn-danger form-control'])

    {!! Form::close() !!}

    @include ('errors.list')

@stop