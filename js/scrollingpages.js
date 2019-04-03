function isOnScreen(elem) {
	// if the element doesn't exist, abort
	if( elem.length == 0 ) {
		return;
	}
	var $window = jQuery(window)
	var viewport_top = $window.scrollTop()
	var viewport_height = $window.height()
	var viewport_bottom = viewport_top + viewport_height
	var $elem = jQuery(elem)
	var top = $elem.offset().top
	var height = $elem.height()
	var bottom = top + height

	return (top >= viewport_top && top < viewport_bottom) ||
	(bottom > viewport_top && bottom <= viewport_bottom) ||
	(height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
}

$( document ).ready( function() {
	window.addEventListener('scroll', function(e){
		if( isOnScreen( $( "#first-sect"))){ /* Pass element id/class you want to check */
            /*$("body").attr("style", currdir+"bg1.jpg) !important");*/
            alert("pee");
 		}	
		if( isOnScreen( $( "#second-sect"))){ /* Pass element id/class you want to check */
			$("body").attr("style", currdir+"bg2.jpg) !important");
 		}	
	});
});