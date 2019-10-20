<?php

	$cond = "email='".$_POST["email"]."' AND password='".$_POST["password"]."'";

	$result = (new DB())->From("authors")->Where($cond);

	if($result->count()){
		$info = $result->get();
		ssLogin($info[0]);
		redirAd("Dashboard");
	}
	else{
		goBack("Email or Password is incorrect!");
	}
?>