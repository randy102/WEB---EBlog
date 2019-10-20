<?php

if(isAdmin()){
	//If the Url is /admincp/
	if(!isset($pa[0]) || $pa[0] == "") 
		//Redirect to Dashboard
		redirAd("Dashboard");

	//Config viewname to lowwercase
	$viewName ="ad-".strtolower($pa[0]); 

	//If no have Id
	if(!isset($pa[1])) $pa[1] = ""; 
	//Get Id data to View
	$data["id"] = $pa[1];

	$ad = new View();
	$ad->adminCP(true)
	->viewName($viewName)
	->viewData($data)
	->getView();
}
else{
	redir("adlogin");
}

?>