var AccessType = function () {

    var handleAccessTypeList = function() {
    	$('#AccessTypeTable').DataTable( {
                "ajax": "../../../../../canvas/users/accesstype/getall",
                "columns": [
                    {
                        "render": function ( data, type, data, meta ) {
                            return '<input type="checkbox" class="checkboxes" value="'+data.id+'"/>'
                        }      
                    },
                    { "data": "name" },
					{
						sortable: false,
                        "render": function ( data, type, data, meta ) {
                            var content = '<a href="#editAccess" class="btn" data-toggle="modal" >Edit</a>'
											//+ _statusAction
											//+ '<a onclick="alert(' Are you sure you want to REMOVE user ', \'deleteUser\')" data-toggle="modal" href="#messageAlert" class="btn btn-danger deleteBtn" >Delete</a>'
											;
							
							return content;
                        }
                    }
                ]
            } );
    }
    
    return {

        init: function() {
            handleAccessTypeList();
        }

    };
}();

