<?php  
	
	$id = $_POST['id'];
	
	(new DB())->Increase("posts","likes",$id)->run();
	
	echo "Thank you!";
	
	
?>