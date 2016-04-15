@extends('canvas.layouts.dashboard.mainlayout')

@section('title')
	<title>{{ Config::get('app.name') }} | Manage Projects</title>
@stop

@section('head')
	<!-- BEGIN PAGE STYLES -->
	<link href="{{ asset('packages/select2/select2.css')}}" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('packages/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('packages/jquery-nestable/jquery.nestable.css')}}"/>
	<!-- END PAGE STYLES -->
@stop


@section('content')

	<div class="row">
		<div class="col-md-9">
			<div class="portlet light">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-notebook"></i>Manage Projects
					</div>
				</div>
				<div class="portlet-body form">
					<div class="table-toolbar">
						
					</div>
					<table class="table table-striped table-bordered table-hover" id="ProjectsTable">
						<thead>
							<tr>
								<th>Title</th>
                            	<th>Status</th>
                            	<th>Updated</th>
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
							<a data-toggle="modal" href="#categoryLevelManagement" id="CategoryLevelManagement">
								<i class="icon-list"></i>
								Project Type Management
							</a>
						</li>
			
					</ul>
					<!-- END SIDEBAR MENU -->
				</div>
			</div>
		</div>
	</div>

	@include('canvas.projects._categorymodals')

@endsection


@section('buttom_scripts')

	<!-- BEGIN PAGE SCRIPTS -->
	<script type="text/javascript" src="{{ asset('packages/select2/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('packages/datatables/media/js/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('packages/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
	<script src="{{ asset('packages/jquery-validation/js/jquery.validate.js') }}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ URL::to('packages/jquery-nestable/jquery.nestable.js')}}"></script>
	<script type="text/javascript" src="{{ URL::to('packages/nested-sortable/jquery.mjs.nestedSortable.js')}}"></script>
	<script src="{{ asset('js/admin/pages/projects/manage.js')}}"></script>
	<script src="{{ asset('js/admin/pages/projects/categorymanagement.js')}}"></script>
	<script>
	jQuery(document).ready(function() {   
	   Project.init();
	   Category.init();
	   Category.initCategory();
	});
	</script>

	<!-- END PAGE SCRIPTS -->

@stop