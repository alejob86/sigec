@extends('layout')

@section('page-head')

    <h3>
        {{trans('people.people')}}
    </h3>
    <span class="sub-title">{{trans('people.create_message')}}</span>
    <div class="state-information">
        <i class="fa fa-users"></i>
    </div>

@stop

@section('content')

    {!! Form::open(['action' => 'PeopleController@store']) !!}

        @include ('people.form', ['submitButtonText' => trans('people.add'), 'class' => 'btn btn-primary form-control'])

    {!! Form::close() !!}

    @include ('errors.list')

@stop