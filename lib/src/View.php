<?php 

/**
* h
*/
class View {
	
	function __construct()
	{
		# code...
	}

	public static function make($view = false, $data = false)
	{
		if(file_exists(APP_PATH."view/$view.php"))
		{
			if(is_array($data))
			{
				foreach ($data as $var => $value) {
					$$var = $value;
				}
			}
			ob_start();
			include APP_PATH."view/$view.php";
			$ar = ob_get_clean();
			echo $ar;
		} else {
			echo "No hay tal archivo";
		}
	}
}