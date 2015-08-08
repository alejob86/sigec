@extends('layout')

@section('content')

  	<div class="row">
	    <div class="col-sm-12">
	        <section class="panel">
	            <header class="panel-heading ">
	                Responsive Data Table
	                <span class="tools pull-right">
	                	<a class="pull-right" data-toggle="modal" href="#forgotPass"> Modal</a>
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