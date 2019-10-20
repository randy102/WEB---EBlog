<?php

$id = $pa[1];

$data['post'] = (new DB())->From("posts")->Id($id)->get()[0];

$cateId = $data['post']['category_id'];
$auId = $data['post']['author_id'];

$data['category'] = (new DB())->From("categories")->Id($cateId)->get()[0];

$data['author'] = (new DB())->From("authors")->Id($auId)->get()[0];

//Increase Views
(new DB())->Increase("posts","views",$id)->run();

$post = new View();
$post->Title($data['post']['eng_title'])
->Des($data['post']['eng_header'])
->KeyWord($data['post']['keywords'])
->viewName("post")
->viewData($data)
->getView();

?>