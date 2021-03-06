var Manage = function () {

    var handleUsersList = function() {
    	$('#UsersTable').DataTable( {
                "ajax": "../../../../../canvas/users/show",
                "columns": [
                    {
                        sortable: false,
                        "render": function ( data, type, user, meta ) {
                            if(user.image != null){
                            	var image_url = user.image.url;
                            	return '<img src="'+image_url+'" style="width:100px;height:100px;overflow:hidden !important;">';
                            }else{
                            	return '<img src="/uploads/images/default_image.png" style="width:100px;height:100px;overflow:hidden !important;">';
                            }
                            
                        }
                    },
                    { "data": "email" },
                    { "data": "user_position" },
                    {
                        sortable: true,
                        "render": function ( data, type, user, meta ) {
                            if(user.isActive == 0){
                                return '<a class="btn btn-warning" >Inactivate</a>';
                            }
                            else{
                                return '<a class="btn btn-success" >Active</a>';
                            }
                        }
                    },
                    {
                        sortable: false,
                        "render": function ( data, type, user, meta ) {
                        	var _statusAction = '<a onclick="alert('+user.id+',\' Are you sure you want to DEACTIVATE user '+user.email+' ? \', \'deactivateUser\' )" data-toggle="modal" href="#messageAlert" class="btn btn-warning deleteBtn" >Deactivate</a>';

                        	if(user.isActive == 0){
                        		_statusAction = '<a onclick="alert('+user.id+',\' Are you sure you want to ACTIVATE user '+user.email+' ? \', \'activateUser\' )" data-toggle="modal" href="#messageAlert" class="btn btn-success" >Activate</a>'
                        	}

                            var content = '<a   href="/canvas/users/edit&id='+user.id+'" class="btn " >Edit</a>'
                            			+ _statusAction
                                        + '<a onclick="alert('+user.id+',\' Are you sure you want to REMOVE user '+user.email+' ? \', \'deleteUser\' )" data-toggle="modal" href="#messageAlert" class="btn btn-danger deleteBtn" >Delete</a>'
                                        ;
                            return content;
                        }
                    }
                ]
            } );
    }
    
    return {

        init: function() {
            handleUsersList();
        }

    };
}();

$(document).ready(function() {

    // actions
    

    // functions
	window.deleteUser = function($id){
		var url = '../../../../../canvas/users/delete&id='+$id
        $.ajax({
            url: url,
            async: false,
            type: "get",
            success: function (data) {
                if(data.result == 'true'){
                    toastr.success(data.message, data.result);
                }
                else{
                    toastr.error(data.message, data.result);
                }
                
            },
            error: function () {
                toastr.error('Something went wrong please contact ADMIN', 'ERROR');
            }
        });

		$('#UsersTable').DataTable().ajax.reload();
	}

	window.deactivateUser = function($id){
		var url = '../../../../../canvas/users/deactivate&id='+$id
        $.ajax({
            url: url,
            async: false,
            type: "get",
            success: function (data) {
                if(data.result == 'true'){
                    toastr.success(data.message, data.result);
                }
                else{
                    toastr.error(data.message, data.result);
                }
                
            },
            error: function () {
                toastr.error('Something went wrong please contact ADMIN', 'ERROR');
            }
        });

		$('#UsersTable').DataTable().ajax.reload();
	}

	window.activateUser = function($id){
		var url = '../../../../../canvas/users/activate&id='+$id
        $.ajax({
            url: url,
            async: false,
            type: "get",
            success: function (data) {
                if(data.result == 'true'){
                    toastr.success(data.message, data.result);
                }
                else{
                    toastr.error(data.message, data.result);
                }
                
            },
            error: function () {
                toastr.error('Something went wrong please contact ADMIN', 'ERROR');
            }
        });

		$('#UsersTable').DataTable().ajax.reload();
	}


} );// END Ducement Ready