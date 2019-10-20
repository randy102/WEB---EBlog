<?php
	$data['user'] = $_POST['name'];
	$data['cont'] = $_POST['cont'];
	$data['date'] = date("Y-m-d");

	foreach ($data as $key => $value) {
     	$data[$key] = strSecure($value);
    }
    
	(new DB())->Insert("feedback",$data)->run();

	echo "Thành công! Cảm ơn bạn đã đóng góp ý kiến!";
?>