@extends('layout')

@section('css')

	<link href="{{URL::to('js/data-table/css/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{URL::to('js/data-table/css/dataTables.tableTools.css')}}" rel="stylesheet">
    <link href="{{URL::to('js/data-table/css/dataTables.colVis.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('js/data-table/css/dataTables.responsive.css')}}" rel="stylesheet">
    <link href="{{URL::to('js/data-table/css/dataTables.scroller.css')}}" rel="stylesheet">

@stop

@section('page-head')

	<h3>
        {{trans('people.people')}}
    </h3>
    <span class="sub-title">{{trans('people.management_message')}}</span>
    <div class="state-information">
        <i class="fa fa-users"></i>
    </div>
 

@stop

@section('content')

  	<div class="row">
	    <div class="col-sm-12">
	        <section class="panel">
	            <header class="panel-heading ">
	                {{trans('people.people')}}
	                <span class="tools pull-right">	                	
	      				<a class="btn btn-primary" data-toggle="modal" href="#forgotPass">
	                    	<i class="fa fa-plus">{{trans('people.add')}}</i>
	                    </a>
	                </span>
	            </header>
	            <table class="table responsive-data-table data-table">
	            <thead>
	            <tr>
	                <th>
	                    OrderDate
	                </th>
	                <th>
	                    Region
	                </th>
	                <th>
	                    Rep
	                </th>
	                <th>
	                    Item
	                </th>
	                <th>
	                    {{trans('people.operation')}}
	                </th>
	            </tr>
	            </thead>
	            <tbody>
	            <tr>
	                <td>
	                    1/6/10
	                </td>
	                <td>
	                    Quebec
	                </td>
	                <td>
	                    Jones
	                </td>
	                <td>
	                    Pencil
	                </td>
	                <td>
	                    <a class="btn btn-info" data-toggle="modal" href="#edit">
	                    	<i class="fa fa-edit fa-lg"></i>
	                    </a>	
	                    <a class="btn btn-danger" data-toggle="modal" href="#delete">
	                    	<i class="fa fa-trash-o fa-lg"></i>
	                    </a>
	                </td>
	            </tr>
	            <tr>
	                <td>
	                    1/6/10
	                </td>
	                <td>
	                    Quebec
	                </td>
	                <td>
	                    Jones
	                </td>
	                <td>
	                    Penciles
	                </td>
	                <td>	                    
	                    <a class="btn btn-info" data-toggle="modal" href="#edit">
	                    	<i class="fa fa-edit fa-lg"></i>
	                    </a>	
	                    <a class="btn btn-danger" data-toggle="modal" href="#delete">
	                    	<i class="fa fa-trash-o fa-lg"></i>
	                    </a>
	                </td>
	            </tr>
	            </tbody>
	            </table>
	        </section>
	    </div>
	</div>


	<!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="forgotPass" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Forgot Password ?</h4>
                </div>
                <div class="modal-body">
                    <p>Enter your e-mail address below to reset your password.</p>
                    <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
					
					{!! Form::open(['url' => Config::get('constants.PEOPLE_MODULE_NAME') ]) !!}
					
						<div class="form-group">
							{!! Form::label('name','Name :') !!}
							{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('name','Last Name :') !!}
							{!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
						</div>

						<div class="form-group">
							
							{!! Form::submit('Add people', ['class' => 'btn btn-primary form-control']) !!}
						</div>
					
					{!! Form::close() !!}

                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                    <button class="btn btn-success" type="button">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
@stop

@section('js')

	<!--Data Table-->
	<script src="{{URL::to('js/data-table/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{URL::to('js/data-table/js/dataTables.tableTools.min.js')}}"></script>
	<script src="{{URL::to('js/data-table/js/bootstrap-dataTable.js')}}"></script>
	<script src="{{URL::to('js/data-table/js/dataTables.colVis.min.js')}}"></script>
	<script src="{{URL::to('js/data-table/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{URL::to('js/data-table/js/dataTables.scroller.min.js')}}"></script>
	<!--data table init-->
	<script src="{{URL::to('js/data-table-init.js')}}"></script>

@stop