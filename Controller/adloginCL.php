<?php
if(!isAdmin()){
	$adlog = new View();
	$adlog->Title("Log in")
	->Des("Log in page")
	->KeyWord("Login")
	->tNav(false)
	->rNav(false)
	->footer(false)
	->viewName("ad-login")
	->getView();
}
else
	redirAd("Dashboard");
?>