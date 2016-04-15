@extends('canvas.layouts.dashboard.mainlayout')

@section('title')
	<title>{{ Config::get('app.name') }} | Article</title>
@stop

@section('head')
	<!-- BEGIN PAGE STYLES -->
	<link href="{{ asset('packages/select2/select2.css')}}" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('packages/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('packages/jquery-nestable/jquery.nestable.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('packages/dropzone/css/dropzone.css')}}"/>
	<!-- END PAGE STYLES -->
@stop


@section('content')

	<div class="row">
		<div class="col-md-9">
			<div class="portlet light">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-notebook"></i>Article New
					</div>
				</div>
				<div class="portlet-body form">
					<?php 
					$result = Session::get('error');
					?>
					@if($result == 'Failed')
						<div class="alert alert-danger ">
							<button class="close" data-close="alert"></button>
							<span>
							{{ Session::get('message') }}</span>
						</div>
					@endif
					{!! Form::open(array('action' => 'Canvas\ArticleController@create' ,'class'=>'form-horizontal form_article', 'id' => 'form_article', 'method'=>'post','files'=> 'true')) !!}

						<div class="form-body">
							{{-- Title --}}
							<div class="form-group form-md-line-input">
								<label class="col-md-3 control-label">Title</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="title" id="title" placeholder="Enter text">
								</div>
							</div>

							{{-- Article Type --}}
							<div class="form-group form-md-line-input">
								<label class="col-md-3 control-label">Article Type</label>
								<div class="col-md-6">
									<select class="form-control select2me" name="articleType" id="articleType">
										
									</select>
								</div>
							</div>

							{{-- Article Content --}}
							<div class="form-group form-md-line-input">
								<label class="col-md-3 control-label">Article Content</label>
							</div>

							<div class="form-group form-md-line-input">
								<div class="col-md-12">
									<textarea class="ckeditor form-control" name="content" id="content" rows="6"></textarea>
								</div>
							</div>

							{{-- primary photo --}}
							<div class="form-group form-md-line-input">
								<label class="col-md-3 control-label">Featured Photo</label>
								<div class="col-md-4" id="displayImg">
									<a class="btn default" data-toggle="modal" href="#image_selection" onclick="loadImageTable()">Select a Primary Photo </a>
								</div>
							</div>
						</div>
						<div class="form-actions">
							<div class="row">
								<div class="col-md-offset-3 col-md-9">
									<button type="submit" class="btn green">Save</button>
									<a class=" btn default" href="{{ URL::to('/canvas/articles/manage') }}">Back</a>
								</div>
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="page-sidebar-wrapper">
				
				<div class="page-sidebar md-shadow-z-2-i  navbar-collapse collapse">
					<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
						<li>
							<a data-toggle="modal" href="#uploadImage" id="AddProduct" >
								<i class="icon-picture"></i>
								Upload Image
							</a>
						</li>
					</ul>
					<!-- END SIDEBAR MENU -->
				</div>
			</div>
		</div>

	</div>

	{{-- MODALS --}}
	@include('canvas.modals.selectimagemodal')

	<!-- /.modal -->
	<div class="modal fade bs-modal-lg" id="categoryLevelManagement" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="portlet light">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-tag font-green-sharp"></i>
							<span class="caption-subject font-green-sharp bold uppercase">
							Category Management</span>
						</div>
					</div>
					<div class="portlet-body">
						<div class="row">
							<div class="col-md-9">
								<!-- BEGIN EXAMPLE TABLE PORTLET-->
								<div class="portlet box blue">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-tag"></i>
											Active Categories Arrangement
										</div>
										<div class="actions">				
											<button class="btn green-haze" id="submitAndContinueCategory" onclick="getElement()"><i class="fa fa-check-circle"></i> Save & Continue Edit</button>
										</div>
									</div>
									<div class="portlet-body" >
										<div class="dd" id="nestable_list_1">
											<ol class="dd-list" id="menu_sortable">
											</ol>
										</div>
									</div>
								</div>
								<!-- END EXAMPLE TABLE PORTLET-->
							</div>
		
							<div class="col-md-3">
								<!-- BEGIN EXAMPLE TABLE PORTLET-->
								<div class="portlet light">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-tag"></i>
											Action Menu
										</div>
									</div>
									<div class="portlet-body" >
										<div class="clearfix">
											<a class="btn green-haze btn-block" href="#createNewCategory" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Create Category </a>
											<div class="caption">
												<i class="fa fa-tag"></i>
												Category Menu
											</div>
											<button class="btn green-haze btn-block" id="submitAndContinueCategory" onclick="addCategoryList()"><i class="glyphicon glyphicon-plus"></i> Add </button>
											<select class="select2-container form-control select2me" name="article_category" id="article_category">
											</select>
										</div>
									</div>
									
								</div>
								<!-- END EXAMPLE TABLE PORTLET-->
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

	<!-- /.modal -->
	<div class="modal fade bs-modal-md" id="createNewCategory" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="portlet light">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-tag font-green-sharp"></i>
							<span class="caption-subject font-green-sharp bold uppercase">
							Create New Category </span>
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
										<input type="text" class="form-control" name="category_name" id="category_name" placeholder="">
									</div>
								</div>
							</div>
							<div class="form-actions noborder">
								<button type="submit" class="btn blue" data-dismiss="modal" onclick="CreateCategory()">Submit</button>
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
	<script type="text/javascript" src="{{ asset('packages/ckeditor/ckeditor.js') }}"></script>
	<script type="text/javascript" src="{{ asset('packages/dropzone/dropzone.js')}}"></script>

	<script src="{{ asset('js/admin/pages/articles/new.js')}}"></script>
	<script>
	jQuery(document).ready(function() {    
	   Article.initArticleTypes();
	   Article.init();
	});
	</script>

	<script src="{{ asset('js/admin/global/imageselection.js')}}"></script>
	<script>
	jQuery(document).ready(function() {
	   ImageSelection.initImages();
	});
	</script>

	<!-- END PAGE SCRIPTS -->

@stop