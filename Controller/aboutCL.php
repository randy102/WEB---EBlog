<?php
$data['in'] = (new DB())->From("info")->get()[0];
$data['au'] = (new DB())->From("authors")->get();

$about = new View();
$about->Title("About Us")
->Des("About Us")
->KeyWord("About")
->viewData($data)
->viewName("about")
->getView();
?>