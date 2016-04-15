var Category = function () {

    var handleCategoryList = function() {
        var menus = '';
        /* Send the data */
        $.ajax({
            url: "../../../../../canvas/articles/category/level/getall",
            async: false,
            type: "get",
            success: function (result) {
                $.each(result.data, function (idx, menu) {
                    
                    if(menu.parent_id == 0 || menu.parent_id == null){
                        if(menu.article_type){
                            $("#menu_sortable").append('<li id="prod_'+menu.id+'" class="dd-item" data-id="'+menu.id+'">'
                                + '<div class="dd-handle">'
                                + menu.article_type.name
                                + '<a href="#messageAlert" onclick="alert('+menu.id+',\' Are you sure you want to REMOVE this Category? \', \'DeleteCategoryLevel\' )" style="float:right;" class="btn btn-defualt btn-xs" data-toggle="modal">'
                                + '<i class="icon-trash"></i>'
                                + '</a>'
                                + '</div>'
                                + '</li>'
                                );
                        }
                    }
                });
                $.each(result.data, function (idx, menu) {
                    if(menu.parent_id != 0 && menu.parent_id != null){
                        if(menu.article_type){
                            var createNewOL = '';
                            var parent = $( "#parent_" +menu.parent_id  ).length;
                            //check if parent exist
                            if(parent != 1){
                                createNewOL = '<ol class="dd-list" id="parent_'+menu.parent_id+'"></ol>';
                                $("#prod_"+menu.parent_id).append(createNewOL);
                            }
    
    
    
                            $("#parent_"+menu.parent_id).append('<li id="prod_'+menu.id+'" class="dd-item" data-id="'+menu.id+'">'
                                + '<div class="dd-handle">'
                                + menu.article_type.name
                                + '<a href="#messageAlert" onclick="alert('+menu.id+',\' Are you sure you want to REMOVE this Category? \', \'DeleteCategoryLevel\' )" style="float:right;" class="btn btn-defualt btn-xs" data-toggle="modal">'
                                + '<i class="icon-trash"></i>'
                                + '</a>'
                                + '</div>'
                                + '</li>'
                            );
                        }
                    }
                });
  
            },
            error: function () {
            }
        });

        // $('#nestable_list_1').nestable();
        $('#menu_sortable').nestedSortable({
            forcePlaceholderSize: true,
            handle: 'div',
            helper: 'clone',
            items: 'li',
            opacity: .6,
            placeholder: 'placeholder',
            revert: 250,
            tabSize: 25,
            tolerance: 'pointer',
            toleranceElement: '> div',
            maxLevels: 4,
            isTree: true,
            expandOnHover: 700,
            startCollapsed: false,
            change: function(){
                // console.log('Relocated item');
            }
        });

    }
    
    return {

        init: function() {
            handleCategoryList();
        },

        initCategory: function(){
            //category select
            var url = '../../../../../canvas/articles/category/getall'
            $.ajax({
                url: url,
                async: false,
                type: "get",
                success: function (result) {
                    if(result.result == 'true'){

                        var options ='';
                        $.each(result.data, function(index, item) {
                            options += "<option value='" + item.id + "'>" + item.name + "</option>";
                        });
                        $("#article_category").html(options);
                    }
                    else{
                        toastr.error(result.message, result.result);
                    }
                    
                },
                error: function () {
                    toastr.error('Something went wrong please contact ADMIN', 'ERROR');
                }
            });
        },

    };
}();

$(document).ready(function() {

    $('.dd-item').click(function(e){ 
    if( e.button == 2 ) { 
      alert('Right mouse button!'); 
      return false; 
    } 
    return true; 
  }); 

    window.DeleteCategoryLevel = function(id){
        /* Send the data */
        $.ajax({
            url: "../../../../../canvas/articles/category/level/delete&id="+id,
            async: false,
            type: "get",
            success: function (data) {
                if(data.result == 'Failed')
                {
                    toastr.error(data.result, data.message)
                }else{
                    toastr.success(data.result, data.message)
                }
                
            },
            error: function () {
                var error_msg = Errorhandler('ErrorConn');
                toastr.error('ALERT', error_msg);
            }
        });
        removeItems('menu_sortable');
        Category.init();
    }

    window.removeItems = function(nameID){
        var myNode = document.getElementById(nameID);
        while (myNode.firstChild) {
            myNode.removeChild(myNode.firstChild);
        }
    }

    window.saveElement = function(id, parentID, position){

        var data_params = {
            child: id,
            parent: parentID,
            position: position
        }

        /* Send the data */
        $.ajax({
            url: "../../../../../canvas/articles/category/level/update",
            async: false,
            type: "post",
            data: data_params,
            success: function (data) {
                // if(data.result == 'Failed')
                // {
                //     toastr.error(data.result, data.message)
                // }else{
                //     toastr.success(data.result, data.message)
                // }
                
            },
            error: function () {
                var error_msg = Errorhandler('ErrorConn');
                toastr.error('ALERT', error_msg);
            }
        });
    }

    window.getElement = function(){

        // var menus = $('#nestable_list_1').nestable('serialize');
        var menus = $('#menu_sortable').nestedSortable('toHierarchy');
        console.log(menus);
        var position = 0;
        $.each(menus, function (idx, menu) { //level1
            if(menu['children']) {

                    saveElement(menu.id, '', position);
                    position++;

                    $.each(menu['children'], function (idx, children2) {//level 2

                        if(children2['children']){
                            saveElement(children2.id, menu.id, position);
                            position++

                            $.each(children2['children'], function (idx, children3) {//level 3
                                
                                if(children3['children']){
                                    saveElement(children3.id, children2.id, position);
                                    position++;

                                    $.each(children3['children'], function (idx, children4) {//level 4
                                        
                                        if(children4['children']){
                                            saveElement(children4.id, children4.id, position);
                                            position++;
                                        }
                                        else {
                                            saveElement(children4.id, children3.id, position);
                                            position++;
                                        }

                                    });

                                }
                                else {
                                    saveElement(children3.id, children2.id, position);
                                    position++;
                                }
                            });

                        }
                        else {
                            saveElement(children2.id, menu.id, position);
                            position++;
                        }

                    });

            }
            else {
                saveElement(menu.id, '', position);
                position++;
            }
        });
         toastr.success('DONE!', 'An Update has been Executed!');
    }

    window.addCategoryList = function(){
        var categoryid = $('#article_category').val();

        /* Send the data */
        $.ajax({
            url: "../../../../../canvas/articles/category/level/add&id="+categoryid,
            async: false,
            type: "get",
            success: function (data) {
                toastr.success(data.result, data.message)
            },
            error: function () {
                var error_msg = Errorhandler('ErrorConn');
                toastr.error('ALERT', error_msg);
            }
        });

        removeItems('menu_sortable');
        Category.init();
    }

    window.CreateCategory = function(){
        var name = $('#category_name').val();

        var url = '../../../../../canvas/articles/category/create_new&name='+name
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
        Category.initCategory();
    }

} );// END Ducement Ready