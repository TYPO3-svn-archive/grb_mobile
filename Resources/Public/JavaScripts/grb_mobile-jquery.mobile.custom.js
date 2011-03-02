jQuery.noConflict();
jQuery(document).bind("mobileinit", function(){
  jQuery.extend(jQuery.mobile , {
	  ajaxLinksEnabled:false,
	  loadingMessage:'laden',
	  defaultTransition:'none',
  });
});