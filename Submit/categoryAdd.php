<?php
	$_POST["date"] = date("Y-m-d");
	
	//Convert to Safe String
    foreach ($_POST as $key => $value) {
     	$_POST[$key] = strSecure($value);
    }

	(new DB())->Insert("categories",$_POST)->run();
	goBack();
?>