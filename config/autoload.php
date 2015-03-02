<?php 

spl_autoload_extensions('.php');

spl_autoload_register( function ($className) {

	if ( file_exists("controller/$className.php")) 
	{
		require_once "controller/$className.php";
	}

	if (file_exists("model/$className.php")) 
	{
		require_once "model/$className.php";
	}

	if (file_exists("PVC/Core/$className.php")) 
	{
		require_once "PVC/Core/$className.php";
	}
});

/**
 * Creates a new App container
 * @var App
 */

$app = new App();

