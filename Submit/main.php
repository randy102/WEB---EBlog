<?php
include $_SERVER['DOCUMENT_ROOT']."/Helper/String.php";
include $_SERVER['DOCUMENT_ROOT']."/Helper/Mail.php";
include $_SERVER['DOCUMENT_ROOT']."/Helper/Secure.php";
include $_SERVER['DOCUMENT_ROOT']."/DB/DB_main.php";
include $_SERVER['DOCUMENT_ROOT']."/Helper/File.php";

$submitName = $_GET["n"];

include "../Submit/".$submitName.".php";
?>