<?php
	
	$data['cates'] = (new DB())->From("categories")->get();

	$data['new'] = (new DB())->From("posts")->Where("status=1")->Order("id","DESC")->Lim(4)->get();

	

	$info = (new DB())->From("info")->get()[0];

	$home = new View();
	$home->Title("Etrans Blog - Trang blog song ngữ Anh Việt")
	->Des($info['about'])
	->KeyWord(["English","Song ngữ","blog","học tiếng Anh"])
	->viewName("home")
	->viewData($data)
	->getView();
	
?>