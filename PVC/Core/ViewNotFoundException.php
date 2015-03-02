<?php 

/**
* Exception because you don't have that view
*/

class ViewNotFoundException extends \Exception {
	
	function __construct($message, $code = 0, Exception $previous = null)
	{
		parent::__construct($message, $code, $previous);
	}
}