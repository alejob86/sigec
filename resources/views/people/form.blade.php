@section('css')

    <!--bootstrap picker-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('js/bootstrap-datepicker/css/datepicker.css')}}"/>

@stop

<!-- name -->

<div class="form-group">
    
    {!! Form::label('name', trans('people.name')) !!}

    {!! Form::text('name', null, ['class' => 'form-control']) !!}

</div>

<!-- last name -->

<div class="form-group">
    
    {!! Form::label('last_name', trans('people.last_name')) !!}

    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}

</div>

<!-- dni -->

<div class="form-group">
    
    {!! Form::label('dni', trans('people.dni')) !!}

    {!! Form::text('dni', null, ['class' => 'form-control']) !!}

</div>

<!-- birth date -->

<div class="form-group">

    {!! Form::label('birth_date', trans('people.birth_date')) !!}

    <div data-date-minviewmode="months" data-date-viewmode="years" data-date-format="yyyy-mm-dd" class="input-append date dpMonths" id="ale">
		
		{!! Form::input('text', 'birth_date', null, ['class' => 'form-control', 'readonly']) !!}
		<span class="input-group-btn add-on">
			<button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
		</span>
    </div>

</div>

<!-- street name -->

<div class="form-group">
    
    {!! Form::label('street_name', trans('people.street_name')) !!}

    {!! Form::text('street_name', null, ['class' => 'form-control']) !!}

</div>

<!-- street number -->

<div class="form-group">
    
    {!! Form::label('street_number', trans('people.street_number')) !!}

    {!! Form::text('street_number', null, ['class' => 'form-control']) !!}

</div>

<!-- floor -->

<div class="form-group">
    
    {!! Form::label('floor', trans('people.floor')) !!}

    {!! Form::text('floor', null, ['class' => 'form-control']) !!}

</div>

<!-- department -->

<div class="form-group">
    
    {!! Form::label('department', trans('people.department')) !!}

    {!! Form::text('department', null, ['class' => 'form-control']) !!}

</div>

<!-- neightborhood -->

<div class="form-group">
    
    {!! Form::label('neightborhood', trans('people.neightborhood')) !!}

    {!! Form::text('neightborhood', null, ['class' => 'form-control']) !!}

</div>

<!-- country -->

<div class="form-group">
    
    {!! Form::label('country', trans('people.country')) !!}

    {!! Form::text('country', null, ['class' => 'form-control']) !!}

</div>

<!-- province -->

<div class="form-group">
    
    {!! Form::label('province', trans('people.province')) !!}

    {!! Form::text('province', null, ['class' => 'form-control']) !!}

</div>

<!-- locality -->

<div class="form-group">
    
    {!! Form::label('locality', trans('people.locality')) !!}

    {!! Form::text('locality', null, ['class' => 'form-control']) !!}

</div>

<!-- postal code -->

<div class="form-group">
    
    {!! Form::label('postal_code', trans('people.postal_code')) !!}

    {!! Form::text('postal_code', null, ['class' => 'form-control']) !!}

</div>

<!-- cell phone -->

<div class="form-group">
    
    {!! Form::label('cell_phone', trans('people.cell_phone')) !!}

    {!! Form::text('cell_phone', null, ['class' => 'form-control']) !!}

</div>

<!-- phone -->

<div class="form-group">
    
    {!! Form::label('phone', trans('people.phone')) !!}

    {!! Form::text('phone', null, ['class' => 'form-control']) !!}

</div>

<!-- phone at work -->

<div class="form-group">
    
    {!! Form::label('phone_at_work', trans('people.phone_at_work')) !!}

    {!! Form::text('phone_at_work', null, ['class' => 'form-control']) !!}

</div>

<!-- email -->

<div class="form-group">
    
    {!! Form::label('email', trans('people.email')) !!}

    {!! Form::text('email', null, ['class' => 'form-control']) !!}

</div>

<!-- facebook -->

<div class="form-group">
    
    {!! Form::label('facebook', trans('people.facebook')) !!}

    {!! Form::text('facebook', null, ['class' => 'form-control']) !!}

</div>

<!-- submit -->

<div class="form-group">

    {!! Form::submit($submitButtonText, ['class' => $class]) !!}

</div>


@section('js')
    <!--bootstrap picker-->
    <script type="text/javascript" src="{{URL::to('js/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('js/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('js/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>

    <!--picker initialization-->
    <script src="{{URL::to('js/picker-init.js')}}"></script>

@stop