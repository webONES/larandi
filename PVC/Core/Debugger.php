<?php 

/**
* Debugger
*/

class Debugger {

	public static function dump($var, $dump = true, $exit = true)
	{
		echo '<pre style="font-size: 1.3em; color: #FF0000; line-height: 18px;">';
		
		if (!$dump) {
			print_r($var);
		} else {
			var_dump($var);
		}
		
		echo '</pre>';	
		
		if ($exit) {
			exit();
		}
	}
}