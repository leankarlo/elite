    


$(document).ready(function() {

	window.aboutMore = function(){
		$("#about-readmore").show();

		if($( '#about-readmore' ).is(":visible")){
              $( '#about-readmore' ).hide();
         } else{
              $( '#about-readmore' ).show();
         }
		
    }

} );// END Ducement Ready
