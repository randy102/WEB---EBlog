<?php
	$id = $_GET['id'];
	//Convert to Safe String
    foreach ($_POST as $key => $value) {
     	$_POST[$key] = strSecure($value);
    }

	(new DB())->Update("categories",$_POST,$id)->run();
	redirAd("Categories");

?>