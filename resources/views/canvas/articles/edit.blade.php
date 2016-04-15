@extends('canvas.layouts.dashboard.mainlayout')

@section('title')
	<title>{{ Config::get('app.name') }} | Article</title>
@stop

@section('head')
	<!-- BEGIN PAGE STYLES -->
	<link href="{{ asset('packages/select2/select2.css')}}" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('packages/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('packages/dropzone/css/dropzone.css')}}"/>
	<!-- END PAGE STYLES -->
@stop


@section('content')

	<div class="row">
		<div class="col-md-9">
			<div class="portlet light">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-notebook"></i>Article Edit
					</div>
				</div>
				<div class="portlet-body form">
					{!! Form::open(array('action' => 'Canvas\ArticleController@update' ,'class'=>'form-horizontal form_article', 'id' => 'form_article', 'method'=>'post','files'=> 'true')) !!}
						<input type="hidden" class="form-control" name="articleTagID" id="articleTagID" >
						<input type="hidden" class="form-control" name="id" id="id" >
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
									<select class="form-control articleType" name="articleType" id="articleType">
										
									</select>
								</div>
							</div>

							{{-- Article Content --}}
							<div class="form-group form-md-line-input">
								<label class="col-md-3 control-label">Article Content</label>
							</div>

							<div class="form-group form-md-line-input">
								<div class="col-md-12">
									<textarea class="form-control" name="content" id="content" rows="6"></textarea>
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

@endsection


@section('buttom_scripts')

	<!-- BEGIN PAGE SCRIPTS -->
	<script type="text/javascript" src="{{ asset('packages/select2/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('packages/datatables/media/js/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('packages/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
	<script src="{{ asset('packages/jquery-validation/js/jquery.validate.js') }}" type="text/javascript"></script>
	<!-- <script src="http://ckeditor.com/apps/ckeditor/4.0/ckeditor.js?mg22k4"></script> -->
	<script type="text/javascript" src="{{ asset('packages/ckeditor/ckeditor.js')}}"></script>
	<script type="text/javascript" src="{{ asset('packages/dropzone/dropzone.js')}}"></script>

	<script src="{{ asset('js/admin/pages/articles/edit.js')}}"></script>
	<script>
	jQuery(document).ready(function() {
	   Article.initArticleTypes();
	   Article.initArticle();
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