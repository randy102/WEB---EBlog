<?php 
	$id = $_GET['id'];

	(new DB())->Update("info",$_POST,$id)->run();

	goBack("Information has been save!");
?>