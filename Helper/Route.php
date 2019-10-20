<?php
	$routeList = array("/");

	//Add valid Route to Website//
	function setRoute($routeName){
		global $routeList;

		array_push($routeList, $routeName);
	}

	function checkRoute($raw){
		global $routeList;

		$routeName = splitRouteName($raw); //get route name

		$valid = false;

		//Search route name
		for($i = 0; $i < count($routeList); $i++){
			//If found route name
			if($routeName == $routeList[$i]){
				$valid = true; //Route is validable
				$para = paraRoute($raw); //Get the parameter
				getRoute($routeName,$para);
			}
		}

		if($valid == false){
			header("location: /err404");
		}
	}

	function getRoute($routeName, $para){
		$pa = $para;
		require "./Controller/".$routeName."CL.php";
	}

	//Get the route name
	function splitRouteName($raw){
		if($raw == "/"){
			return "home";
		}
		else{
			$routeArray = explode('/', $raw);
			return $routeArray[1];
		}
	}

	//Get the parameter of route
	function paraRoute($raw){
		$paraArray = explode('/', $raw);
		$reverseArray = array_reverse($paraArray);
		array_pop($reverseArray);
		array_pop($reverseArray);
		$paraArray = array_reverse($reverseArray);
		return $paraArray;
	}


	//Route List
	include "./RouteList.php";
?>