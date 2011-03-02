jQuery(document).ready(function($){

	var getcall				= "Für diese Seite existiert eine mobile Darstellung. Möchten Sie diese verwenden?";
	var domain  			= "artcom.de"
	var mobileDomain  		= "xah3thah.artcom.de"
	var noneMobileDomain  	= "aehieg5s.artcom.de"			
	
	switch ($.cookie("grb_mobile")) {
		case "mobile": 
			if(location.hostname != mobileDomain){
				window.location = "http://"+mobileDomain+location.pathname;
			}
	    break;
	 
	    case "noneMobile":
	    	if(location.hostname != noneMobileDomain){
	    		window.location = "http://"+noneMobileDomain+location.pathname;
	    	}
	    break;
	 
	    default:
	    	var ok = confirm(getcall);
	    	if (ok == true) {
				$.cookie("grb_mobile", "mobile", {
					path: '/',
					domain: domain
				});
				window.location = "http://"+mobileDomain+location.pathname;
			} else {
				$.cookie("grb_mobile", "noneMobile", {
					path: '/',
					domain: domain
				});
		    	window.location = "http://"+noneMobileDomain+location.pathname;
			}	    	
	}	
});