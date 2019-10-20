<?php

	function upFile($folder,$file,$old = ""){
	
		$dir = "../Public/img/";
		$folder .= "/";

        $temp = $file['tmp_name'];
        $name = strtolower($file['name']);

        move_uploaded_file($temp, $dir.$folder.$name);

        if($old != "" && file_exists($dir.$folder.$old))
        	unlink($dir.$folder.$old);
    
	}



?>