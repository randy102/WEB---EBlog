<?php
include $_SERVER['DOCUMENT_ROOT']."/DB/DB_main.php";
include $_SERVER['DOCUMENT_ROOT']."/Helper/Secure.php";

$ajaxName = $_POST["n"];

include "../Ajax/".$ajaxName.".php";
?>