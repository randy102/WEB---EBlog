<?php
	$_POST["date"] = date("Y-m-d");

	(new DB)->Insert("authors",$_POST)->run();

	goBack();
?>