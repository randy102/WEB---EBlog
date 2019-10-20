<?php
$id = $pa[1];

$data['auth'] = (new DB())->From("authors")->Id($id)->get()[0];

$author = new View();
$author->Title("Tiểu sử của Randy")
->Des("Tiểu sử")
->KeyWord("Author")
->viewData($data)
->viewName("author")
->getView();

?>