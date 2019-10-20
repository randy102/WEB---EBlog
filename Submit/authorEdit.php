<?php
$data['position'] = $_GET['pos'];
$id = $_GET['id'];

(new DB())->Update("authors",$data,$id)->run();
goBack("Success!");
?>