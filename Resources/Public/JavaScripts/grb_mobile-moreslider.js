jQuery.noConflict();
jQuery(document).ready(function($){
	$('.grb_mobile-morelink').click(function(){
		$('.grb_mobile-moretext').show();
		$('.grb_mobile-lesslink').show();
		$('.grb_mobile-morelink').hide();
	});
	$('.grb_mobile-lesslink').click(function(){
		$('.grb_mobile-lesslink').hide();
		$('.grb_mobile-moretext').hide();
		$('.grb_mobile-morelink').show();
	});	
});