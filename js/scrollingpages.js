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

jQuery( document ).ready( function() {
	window.addEventListener('scroll', function(e){
		if( isOnScreen(jQuery( "#first-sect"))){ /* Pass element id/class you want to check */
            $("body").attr("style", currdir+"bg1.jpg) !important");
 		}
		if( isOnScreen(jQuery( "#second-sect"))){ /* Pass element id/class you want to check */
			$("body").attr("style", currdir+"bg2.jpg) !important");
 		}	
		if( isOnScreen(jQuery( "#third-sect"))){ /* Pass element id/class you want to check */
			$("body").attr("style", currdir+"bg3.jpg) !important");
 		}	
		if( isOnScreen(jQuery( "#fourth-sect"))){ /* Pass element id/class you want to check */
			$("body").attr("style", currdir+"bg4.jpg) !important");
 		}	
		if( isOnScreen(jQuery( "#fifth-sect"))){ /* Pass element id/class you want to check */
			$("body").attr("style", currdir+"bg5.jpg) !important");
 		}	
		if( isOnScreen(jQuery( "#sixth-sect"))){ /* Pass element id/class you want to check */
			$("body").attr("style", currdir+"bg6.jpg) !important");
 		}	
		if( isOnScreen(jQuery( "#seventh-sect"))){ /* Pass element id/class you want to check */
			$("body").attr("style", currdir+"bg7.jpg) !important");
 		}	
		if( isOnScreen(jQuery( "#eigth-sect"))){ /* Pass element id/class you want to check */
			$("body").attr("style", currdir+"bg8.jpg) !important");
 		}	
		if( isOnScreen(jQuery( "#nineth-sect"))){ /* Pass element id/class you want to check */
			$("body").attr("style", currdir+"bg9.jpg) !important");
 		}	
		if( isOnScreen(jQuery( "#tenth-sect"))){ /* Pass element id/class you want to check */
			$("body").attr("style", currdir+"bg10.jpg) !important");
 		}	
	});

	window.onscroll = function() {scrollFunction()};
	function scrollFunction() {
	if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
		document.getElementById("btn-scrollup").style.display = "block";
	} else {
		document.getElementById("btn-scrollup").style.display = "none";
	}
	}
});