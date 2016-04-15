var EditAccessType = function () {

    var handleEditAccessType = function() {
		
    }
    
    return {

        init: function() {
            handleEditAccessType();
        },

        initEditAccessType: function (els) {
            var id = ReturnParam('id');
            /* Send the data */
            $.ajax({
                url:"../../../../../canvas/users/accesstype/get&id="+id,
                async: true,
                type: "get",
                success: function (json) {
                    $('#access_type_id').val(json.data.id);
                    $('#edit_accesstypename').val(json.data.name);
                },
                error: function () {
                    console.log('error');
                }
            });
        },

    };
}();