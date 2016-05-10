/*
var EditAccessType = function () {

    var handleEditAccessType = function() {
		
    }
    
    return {

        init: function() {
            handleEditAccessType();
        },

    };
}();
*/

$(document).ready(function() {

    window.GetAccessType = function(els){
		$('#accesstype_id').val();
		var id = els;
		
		$.ajax({
			url:"../../../../../canvas/users/accesstype/get&id="+id,
			async: true,
			type: "get",
			success: function (json) {
				$('#accesstype_id').val(json.data.id);
				$('#edit_accesstype_name').val(json.data.name);
			},
			error: function () {
				console.log('error');
			}
		})
    }

} );// END Ducement Ready