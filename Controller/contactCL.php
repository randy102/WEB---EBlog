<?php
	$data['contact'] = (new DB())->From("info")->get()[0];

	$contact = new View();
	$contact->Title("Contact Us")
	->Des("Contact")
	->KeyWord("Contact")
	->viewData($data)
	->viewName("contact")
	->getView();
?>