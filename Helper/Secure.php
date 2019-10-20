<?php
session_start();

function errorQuit(){
	header("location: /err404");
}

function redir($url){
	header("location: ".$url);
}

function goBack($mess = ""){
	$_SESSION['mess'] = $mess;
	exit(header("location:".$_SERVER["HTTP_REFERER"]));
}

function redirAd($name){
	header("location: /admincp/".$name);
}

function strSecure($str){
	$str = trim($str);
	$str = htmlspecialchars($str);
	$str = addslashes($str);
	return $str;
}

function ssLogin($info){
	$_SESSION['id'] = $info['id'];
	$_SESSION['penname'] = $info['penname'];
	$_SESSION['position'] = $info['position'];
}

function ssLogout(){
	unset($_SESSION['id']);
	unset($_SESSION['penname']);
	unset($_SESSION['position']);
}

function ssPrt($name){
	echo $_SESSION[$name];
}


function ssCheck($name){
	if(isset($_SESSION[$name]))
		return true;
	else
		return false;
}

function ssSet($data){
	foreach($data as $key => $val){
		$_SESSION[$key] = $val;
	}
}

function ssGet($name){
	if(ssCheck($name))
		return $_SESSION[$name];
	else return "";
}

function isAdmin(){
	if(isset($_SESSION['id'])) return true;
	else return false;
}

function error(){
	if(isset($_SESSION['mess'])){
		echo $_SESSION['mess'];
		unset($_SESSION['mess']);
	}
}

function fillAuthOfPost($id){
	if($id != $_SESSION['id'])
		echo "disable";
}

function fillBoss(){
	if($_SESSION['position'] != 1)
		echo "disable";
}

function isBoss(){
	if($_SESSION['position'] == 1)
		return true;
	else return false;
}


?>