var NewAccessType = function () {

    var handleCreateAccessType = function() {

        $('.form_create_accesstype').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
                name: {
                    required: true
                }

            },
            messages: {
                name: {
                    required: "Name is required."
                },
            },

            invalidHandler: function(event, validator) { //display error alert on form submit   

            },

            highlight: function(element) { // hightlight error inputs
                $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function(label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            submitHandler: function(form) {
                form.submit();
            }
        });

        $('.form_create_accesstype input').keypress(function(e) {
            if (e.which == 13) {
                if ($('.form_create_accesstype').validate().form()) {
                    $('.form_create_accesstype').submit();
                }
                return false;
            }
        });

    }
    
    return {

        init: function() {
            handleCreateAccessType();
        }

    };
}();

$(document).ready(function() {

    window.CreateAccessType = function(){
        var name = $('#accesstypename').val();

        var url = '../../../../../canvas/users/accesstype/create_new&name='+name;
        $.ajax({
            url: url,
            async: false,
            type: "get",
            success: function (data) {
                if(data.result == 'true'){
                    toastr.success('Succesfull', data.result);
                }
                else{
                    toastr.error('Succesfull', data.result);
                }
                
            },
            error: function () {
                toastr.error('Something went wrong please contact ADMIN', 'ERROR');
            }
        });
        $('#AccessTypeTable').DataTable().ajax.reload();
    }

} );// END Ducement Ready
