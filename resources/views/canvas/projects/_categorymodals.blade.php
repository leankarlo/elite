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