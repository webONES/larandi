<?php 

/**
* Asset helper
* @author Arandi López <arandilopez.93@gmail.com>
*/
class Asset {

	static $css = [];
	static $js = []

	public static function addJs($name = false, $source = false)
	{
		if($source and $name)
		{
			$s = str_replace('.', '/', $source);
			self::$js['name'] = "js/".$s."js";
		}
	}

	public static function addCss($name = false, $source = false)
	{
		if ($source and $name) 
		{
			$s = str_replace('.', '/', $source);
			self::$css['name'] = "css/".$s."css";
		}
	}

	public static function flushCss()
	{
		self::$css = [];
	}

	public static function flushJs()
	{
		self::$js = [];
	}

	public static function js()
	{
		foreach (self::$js as $name => $source) 
		{
			echo "<script src=\"$source\"></script>\n";
		}
	}

	public static function css()
	{
		foreach (self::$css as $name => $source) 
		{
			echo "<link rel=\"stylesheet\" href=\"$source\">\n";
		}
	}
}