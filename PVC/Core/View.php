<?php 

/**
* h
*/

class View {

	public static function make($view = false, $data = false)
	{
		$viewPath = str_replace(".", "/", $view);
		
		if(file_exists(APP_PATH."view/$viewPath.php"))
		{
			if(is_array($data))
			{
				foreach ($data as $variable => $value) {
					$$variable = $value;
				}
			}
			$view = APP_PATH."view/$viewPath.php";
			include APP_PATH."view/includes/content.php";
		} else {
			throw new PVC\Exceptions\ViewNotFoundException("View not found: $view => $viewPath");
			
		}
	}
}