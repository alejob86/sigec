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
	      				<a class="btn" href="{{ action( 'PeopleController@create' ) }}">
	                    	<i class="fa fa-plus fa-lg"><span> {{trans('people.add')}}</span></i>
	                    </a>
	                </span>
	            </header>
	            <table class="table responsive-data-table data-table">
	            <thead>
	            <tr>
	                <th>
	                    {{trans('people.name')}}
	                </th>
	                <th>
	                    {{trans('people.last_name')}}
	                </th>
	                <th>
	                    {{trans('people.email')}}
	                </th>
	                <th>
	                    {{trans('people.operation')}}
	                </th>
	            </tr>
	            </thead>
	            <tbody>
	            
	            	@foreach ($people as $person)
	            		<tr>
	            			<td>{{ $person->name }}</td>
	            			<td>{{ $person->last_name }}</td>
	            			<td>{{ $person->email }}</td>
	            			<td>
	            				<a class="btn" href="{{ action( 'PeopleController@show', [$person->id] ) }}">
			                    	<i class="fa fa-file-pdf-o fa-lg"></i>
			                    </a>
			                    <a class="btn " href="{{ action( 'PeopleController@edit', [$person->id] ) }}">
			                    	<i class="fa fa-edit fa-lg"></i>
			                    </a>	
			                    <a class="btn btn-danger" href="{{ URL::to( 'people/delete/'.$person->id ) }}">
			                    	<i class="fa fa-trash-o fa-lg"></i>
			                    </a>
			                </td>
	            		</tr>
	            	@endforeach
	            
	            </tbody>
	            </table>
	        </section>
	    </div>
	</div>

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