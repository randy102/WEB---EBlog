<?php
	$id = $_GET["id"];

	//If avatar has been changed
	if(file_exists($_FILES['avar']['tmp_name']) || is_uploaded_file($_FILES['avar']['tmp_name'])){

		//If is index avatar
        if($_POST['old-avar'] == "index_avatar.jpg")
            $_POST['old-avar'] = "";

        //Upload img
		upFile("avatar",$_FILES['avar'],$_POST['old-avar']);

    	//Save img name
    	$_POST["avar"] =$_FILES['avar']['name'];
    }else{
    	$_POST["avar"] = $_POST["old-avar"];
    } 

    //Convert to Safe String
    foreach ($_POST as $key => $value) {
        if($key == "birthdate") continue;
     	$_POST[$key] = strSecure($value);
    } 

    //Delete unnecessary field
    unset($_POST["old-avar"]);


	(new DB)->Update("authors",$_POST,$id)->run();

	goBack();

?>