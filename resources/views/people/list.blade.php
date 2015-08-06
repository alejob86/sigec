@extends('layout')

@section('content')

  	<div class="row">
	    <div class="col-sm-12">
	        <section class="panel">
	            <header class="panel-heading ">
	                Responsive Data Table
	                <span class="tools pull-right">
	                    <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
	                    <a class="t-close fa fa-times" href="javascript:;"></a>
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
	                    Units
	                </th>
	                <th>
	                    Unit Cost
	                </th>
	                <th>
	                    Total
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
	                    95
	                </td>
	                <td>
	                    1.99
	                </td>
	                <td>
	                    189.05
	                </td>
	            </tr>
	            </tbody>
	            </table>
	        </section>
	    </div>
	</div>

@stop