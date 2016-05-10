var AccessType = function () {

    var handleAccessTypeList = function() {
        var AccessTypeTable = $('#AccessTypeTable');

    	AccessTypeTable.DataTable( {
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
                            var content = '<a href="#editAccess" class="btn" data-toggle="modal" onclick="GetAccessType('+data.id+')" >Edit</a>'
											//+ _statusAction
											//+ '<a onclick="alert(' Are you sure you want to REMOVE user ', \'deleteUser\')" data-toggle="modal" href="#messageAlert" class="btn btn-danger deleteBtn" >Delete</a>'
											;
							
							return content;
                        }
                    }
                ]
            } );

            var tableWrapper = jQuery('#Table_wrapper');
    
            AccessTypeTable.find('.group-checkable').change(function () {
                var set = jQuery(this).attr("data-set");
                var checked = jQuery(this).is(":checked");
                jQuery(set).each(function () {
                    if (checked) {
                        $(this).attr("checked", true);
                        $(this).parents('tr').addClass("active");
                    } else {
                        $(this).attr("checked", false);
                        $(this).parents('tr').removeClass("active");
                    }
                });
                jQuery.uniform.update(set);
            });
    
            AccessTypeTable.on('change', 'tbody tr .checkboxes', function () {
                $(this).parents('tr').toggleClass("active");
            });
    
            tableWrapper.find('.dataTables_length select').addClass("form-control input-xsmall input-inline"); 
    }
    
    return {

        init: function() {
            handleAccessTypeList();
        }

    };
}();

$(document).ready(function() {

    window.DeleteMultipleAccessType = function(){
        var table = $('#AccessTypeTable').DataTable();
        var sData = table.rows('.active').data();
        //console.log(table);
        //console.log(sData);

        $.each(sData, function(index, item) {
            var url = '../../../../../canvas/users/accesstype/delete&id='+item.id
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
        });
        
        $('#AccessTypeTable').DataTable().ajax.reload();
    }

} );// END Ducement Ready
