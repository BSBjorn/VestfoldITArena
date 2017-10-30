(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away

		$(".mtoggle").click( function() {
			$(".nav").toggleClass("nav-open");
		});
	});

} ( this, jQuery ));
