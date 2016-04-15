@extends('canvas.layouts.dashboard.mainlayout')

@section('title')
	<title>{{ Config::get('app.name') }} | Manage user</title>
@stop

@section('head')
	<!-- BEGIN PAGE STYLES -->
	<link href="{{ asset('packages/select2/select2.css')}}" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('packages/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
	<!-- END PAGE STYLES -->
@stop


@section('content')

	<div class="row">
		<div class="col-md-9">
			<div class="portlet light">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-user"></i>User Management
					</div>
				</div>
				<div class="portlet-body form">
					<div class="table-toolbar">
						
					</div>
					<table class="table table-striped table-bordered table-hover" id="UsersTable">
						<thead>
							<tr>
								<th>Image</th>
                            	<th>Email</th>
                            	<th>Position</th>
                            	<th>Status</th>
                            	<th>Action</th>
                            </tr>
						</thead>						
						<tbody id="table_body">
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
		<div class="col-md-3">
			<div class="page-sidebar-wrapper">
				
				<div class="page-sidebar md-shadow-z-2-i  navbar-collapse collapse">
					<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
						<li>
							<a data-toggle="modal" href="#accessTypeManagement" id="AccessTypeManagement">
								<i class="icon-list"></i>
								Access Type Management
							</a>
						</li>
					</ul>
					<!-- END SIDEBAR MENU -->
				</div>
			</div>
		</div>
	</div>

	@include('canvas.users._accessmanage')
	
	<!-- /.modal Create Access Type-->
	{!! Form::open(array('action' => 'Canvas\UserController@CreateAccessType' ,'class'=>'form-horizontal form_create_accesstype', 'id' => 'form_create_accesstype', 'method'=>'post','files'=> 'true')) !!}
	<div class="modal fade bs-modal-md" id="createNewAccess" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="portlet light">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-tag font-green-sharp"></i>
							<span class="caption-subject font-green-sharp bold uppercase">
							Create New Access Type </span>
						</div>
					</div>
					<div class="portlet-body">
						<div class="form-horizontal">
							<div class="form-body">
								<div class="form-group">
									<label class="col-md-2 control-label">Name: <span class="required">
									* </span>
									</label>
									<div class="col-md-10">
										<input type="text" class="form-control" name="accesstypename" id="accesstypename" placeholder="">
									</div>
								</div>
							</div>
							<div class="form-actions noborder">
								<button type="submit" class="btn blue" data-dismiss="modal" onclick="CreateAccessType()">Submit</button>
								<button type="button" data-dismiss="modal" class="btn default">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- /.modal Edit Access Type-->	
	<div class="modal fade bs-modal-md" id="editAccess" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="portlet light">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-tag font-green-sharp"></i>
							<span class="caption-subject font-green-sharp bold uppercase">
							Edit Access Type </span>
						</div>
					</div>
					<div class="portlet-body">
						<div class="form-horizontal">
							<div class="form-body">
								<div class="form-group">
									<label class="col-md-2 control-label">Name: <span class="required">
									* </span>
									</label>
									<div class="col-md-10">
										<input type="hidden" class="form-control" name="access_type_id" id="id">
										<input type="text" class="form-control" name="editaccesstypename" id="editaccesstypename" placeholder="">
									</div>
								</div>
							</div>
							<div class="form-actions noborder">
								<button type="submit" class="btn blue" data-dismiss="modal" onclick="">Submit</button>
								<button type="button" data-dismiss="modal" class="btn default">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	
	<!-- /.modal -->	
	
@endsection


@section('buttom_scripts')

	<!-- BEGIN PAGE SCRIPTS -->
	<script type="text/javascript" src="{{ asset('packages/select2/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('packages/datatables/media/js/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('packages/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
	<script src="{{ asset('packages/jquery-validation/js/jquery.validate.js') }}" type="text/javascript"></script>

	<script src="{{ asset('js/admin/pages/users/manage.js')}}"></script>
	<script src="{{ asset('js/admin/pages/users/accessmanagement.js')}}"></script>
	<script src="{{ asset('js/admin/pages/users/accesscreate.js')}}"></script>
	<script src="{{ asset('js/admin/pages/users/accessedit.js')}}"></script>
	
	<script>
		jQuery(document).ready(function() {   
			Manage.init();
			AccessType.init();
			NewAccessType.init();
			EditAccessType.init();
			EditAccessType.initEditAccessType();		
		});
	</script>

	<!-- END PAGE SCRIPTS -->

@stop