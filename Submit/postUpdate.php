<?php
   $id = $_GET["id"];

    //If upload img
	if(file_exists($_FILES['img']['tmp_name']) || is_uploaded_file($_FILES['img']['tmp_name'])){

		//Upload img
		upFile("posts",$_FILES['img'],$_POST['old-img']);

    	//Save img name
    	$_POST["img"] = $_FILES['img']['name'];
    }else{
        $_POST["img"] = $_POST["old-img"];
    } 

    //Convert to Safe String
    foreach ($_POST as $key => $value) {
        if($key == 'eng_cont' || $key == 'vi_cont')
            continue;
     	$_POST[$key] = strSecure($value);
    }

    //Delete unnecessary field
    unset($_POST["old-img"]);

    $_POST['link'] = changeTitle($_POST['eng_title']);

	(new DB)->Update("posts",$_POST,$id)->run();

	goBack("Success!");
?>