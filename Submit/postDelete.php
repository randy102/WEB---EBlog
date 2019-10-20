<?php
	
	$id = $_GET["id"];
	$p = (new DB())->From("posts")->Id($id)->get();
	$img = $p[0]['img'];

	unlink("../Public/img/posts/".$img);

	(new DB())->Delete("posts",$id)->run();

	redirAd("List");
?>