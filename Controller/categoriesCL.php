<?php
if(!isset($pa[0])){
	//Show the list of Category if not exist para
	$data['cates'] = (new DB())->From("categories")->get();

	$cate = new View();
	$cate->Title("Categories")
	->Des("Categories")
	->KeyWord("Categories")
	->viewData($data)
	->viewName("categories")
	->getView();
}
else{
	//Show posts of Category
	$cateName = $pa[0];
	$cateId = $pa[1];

	$data['posts'] = (new DB())->From("posts")->Where("category_id=".$cateId)->Order("id","DESC")->get();

	$data['category'] = (new DB())->From("categories")->Id($cateId)->get()[0];

	$cate = new View();
	$cate->Title($cateName)
	->Des($cateName)
	->KeyWord([$cateName])
	->viewData($data)
	->viewName("cate-spec")
	->getView();
}


?>