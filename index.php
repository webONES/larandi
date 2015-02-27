<?php 

	// echo $_REQUEST['ruta'];
	// 
	
	require 'lib/requester.php';

	$controller = $_REQUEST['controller'];
	$action     = $_REQUEST['action'];
	$data       = $_REQUEST['data'];

	// echo "$controller / $action / $data";

	// function __autoload($className) {
	// 	require_once "controller/$className.php";
	// 	require_once "lib/src/$className.php";
	// }
	
	define("APP_PATH", dirname(__FILE__).'/');

	spl_autoload_extensions('.php');

	spl_autoload_register(function ($className) {

		if ( file_exists("controller/$className.php")) {
			require_once "controller/$className.php";
		}

		if (file_exists("lib/src/$className.php")) {
			require_once "lib/src/$className.php";
		}

		if (file_exists("model/$className.php")) {
			require_once "model/$className.php";
		}
	});

	doAction($controller, $action, $data);

 ?>