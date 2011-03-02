<?php

/***************************************************************
*  Copyright notice
*
*  (c) GreenBanana GmbH - www.greenbanana.ch 2010
*      Juerg Langhard <langhard@greenbanana.ch>
*      
*      All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


function user_grbmobile($cmd) {

	switch ($cmd) {
	    case 'isMobileDevice':
	    	// Check the device
	    	$isMobile = preg_match('/(IEMobile|Windows CE|NetFront|PlayStation|PLAYSTATION|like Mac OS X|MIDP|UP\.Browser|Symbian|Nintendo)/', $_SERVER['HTTP_USER_AGENT']);
	    	if($_GET['grb_mobile']=='symMobile'){
	    		$isMobile = true;
	    	}
	    	// t3lib_div::debug($isMobile); 
	        return $isMobile;
	    break;	        
	        	    
	}
}
?>