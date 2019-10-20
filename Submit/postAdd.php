<?php
	//If upload img
	if(file_exists($_FILES['img']['tmp_name']) || is_uploaded_file($_FILES['img']['tmp_name'])){

		//Upload img
		upFile("posts",$_FILES['img']);

    	//Save img name
    	$_POST["img"] = $_FILES['img']['name'];
    }

    //Convert to Safe String
    foreach ($_POST as $key => $value) {
    	if($key == 'eng_cont' || $key == 'vi_cont')
    		continue;
     	$_POST[$key] = strSecure($value);
    }

    //Set Status and Save author's Id and Date
    $_POST['link'] = changeTitle($_POST['eng_title']);
    $_POST['status'] = 0;
    $_POST['author_id'] = $_SESSION['id'];
    $_POST['date'] = date("Y-m-d"); 

	(new DB)->Insert("posts",$_POST)->run();

	redirAd("List");
?>