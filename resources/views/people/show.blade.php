@extends('layout')



@section('page-head')

    <h3>
        {{ $people->name." ".$people->last_name }}
    </h3>
    <span class="sub-title">{{trans('people.show_message')}}</span>
    <div class="state-information">
        <i class="fa fa-user fa-2x"></i>
    </div>
 

@stop

@section('content')

  {!! Form::open() !!}

        <!-- name -->

        <div class="form-group">
            
            {!! Form::label('name', trans('people.name')) !!}

            {!! Form::text('name', $people->name, ['class' => 'form-control', 'readonly' => 'false' ]) !!}

        </div>

        <!-- last name -->

        <div class="form-group">
            
            {!! Form::label('last_name', trans('people.last_name')) !!}

            {!! Form::text('last_name', $people->last_name, ['class' => 'form-control', 'readonly' => 'false']) !!}

        </div>

        <!-- dni -->

        <div class="form-group">
            
            {!! Form::label('dni', trans('people.dni')) !!}

            {!! Form::text('dni', $people->dni, ['class' => 'form-control', 'readonly' => 'false']) !!}

        </div>

        <!-- birth date -->

        <div class="form-group">

            {!! Form::label('birth_date', trans('people.birth_date')) !!}

            {!! Form::input('text','birth_date', $people->birth_date, ['class' => 'form-control input-medium default-date-picker', 'readonly' => 'false']) !!}

        </div>

        <!-- street name -->

        <div class="form-group">
            
            {!! Form::label('street_name', trans('people.street_name')) !!}

            {!! Form::text('street_name', $people->street_name, ['class' => 'form-control', 'readonly' => 'false']) !!}

        </div>

        <!-- street number -->

        <div class="form-group">
            
            {!! Form::label('street_number', trans('people.street_number')) !!}

            {!! Form::text('street_number', $people->street_number, ['class' => 'form-control', 'readonly' => 'false']) !!}

        </div>

        <!-- floor -->

        <div class="form-group">
            
            {!! Form::label('floor', trans('people.floor')) !!}

            {!! Form::text('floor', $people->floor, ['class' => 'form-control', 'readonly' => 'false']) !!}

        </div>

        <!-- department -->

        <div class="form-group">
            
            {!! Form::label('department', trans('people.department')) !!}

            {!! Form::text('department', $people->department, ['class' => 'form-control', 'readonly' => 'false']) !!}

        </div>

        <!-- neightborhood -->

        <div class="form-group">
            
            {!! Form::label('neightborhood', trans('people.neightborhood')) !!}

            {!! Form::text('neightborhood', $people->neightborhood, ['class' => 'form-control', 'readonly' => 'false']) !!}

        </div>

        <!-- country -->

        <div class="form-group">
            
            {!! Form::label('country', trans('people.country')) !!}

            {!! Form::text('country', $people->country, ['class' => 'form-control', 'readonly' => 'false']) !!}

        </div>

        <!-- province -->

        <div class="form-group">
            
            {!! Form::label('province', trans('people.province')) !!}

            {!! Form::text('province', $people->province, ['class' => 'form-control', 'readonly' => 'false']) !!}

        </div>

        <!-- locality -->

        <div class="form-group">
            
            {!! Form::label('locality', trans('people.locality')) !!}

            {!! Form::text('locality', $people->locality, ['class' => 'form-control', 'readonly' => 'false']) !!}

        </div>

        <!-- postal code -->

        <div class="form-group">
            
            {!! Form::label('postal_code', trans('people.postal_code')) !!}

            {!! Form::text('postal_code', $people->postal_code, ['class' => 'form-control', 'readonly' => 'false']) !!}

        </div>

        <!-- cell phone -->

        <div class="form-group">
            
            {!! Form::label('cell_phone', trans('people.cell_phone')) !!}

            {!! Form::text('cell_phone', $people->cell_phone, ['class' => 'form-control', 'readonly' => 'false']) !!}

        </div>

        <!-- phone -->

        <div class="form-group">
            
            {!! Form::label('phone', trans('people.phone')) !!}

            {!! Form::text('phone', $people->phone, ['class' => 'form-control', 'readonly' => 'false']) !!}

        </div>

        <!-- phone at work -->

        <div class="form-group">
            
            {!! Form::label('phone_at_work', trans('people.phone_at_work')) !!}

            {!! Form::text('phone_at_work', $people->phone_at_work, ['class' => 'form-control', 'readonly' => 'false']) !!}

        </div>

        <!-- email -->

        <div class="form-group">
            
            {!! Form::label('email', trans('people.email')) !!}

            {!! Form::text('email', $people->email, ['class' => 'form-control', 'readonly' => 'false']) !!}

        </div>

        <!-- facebook -->

        <div class="form-group">
            
            {!! Form::label('facebook', trans('people.facebook')) !!}

            {!! Form::text('facebook', $people->facebook, ['class' => 'form-control', 'readonly' => 'false']) !!}

        </div>

  {!! Form::close() !!}

@stop

