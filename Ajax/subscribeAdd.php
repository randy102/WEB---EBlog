<?php 
	$data['email'] = $_POST['email'];
	$data['date'] = date("Y-m-d");

	foreach ($data as $key => $value) {
     	$data[$key] = strSecure($value);
    }
	
	(new DB())->Insert("subscribers",$data)->run();

	echo "<p>Thành công! Chúng tôi sẽ thông báo bạn ngay khi có bài viết mới nhất!</p>";

?>