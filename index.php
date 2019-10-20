<?php
include $_SERVER['DOCUMENT_ROOT']."/Helper/String.php";
include $_SERVER['DOCUMENT_ROOT']."/Helper/View.php";
include $_SERVER['DOCUMENT_ROOT']."/Helper/Mail.php";
include $_SERVER['DOCUMENT_ROOT']."/Helper/Route.php";
include $_SERVER['DOCUMENT_ROOT']."/Helper/Secure.php";
include $_SERVER['DOCUMENT_ROOT']."/DB/DB_main.php";



checkRoute($_SERVER['REQUEST_URI']);


?>